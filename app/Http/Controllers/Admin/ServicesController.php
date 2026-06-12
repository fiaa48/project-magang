<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $services = Service::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    // Pencarian di kolom 'section' (Bagian Utama)
                    $q->where('section', 'LIKE', "%{$search}%");

                    // Pencarian di dalam JSON 'data' untuk field 'title' (Judul Data) dan 'category' (Kategori Data)
                    if (config('database.default') === 'mysql') {
                        // Untuk struktur array of objects
                        $q->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(data, '$[*].title')) LIKE ?", ["%{$search}%"])
                          ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(data, '$[*].category')) LIKE ?", ["%{$search}%"])
                          // Untuk struktur single object
                          ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(data, '$.title')) LIKE ?", ["%{$search}%"])
                          ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(data, '$.category')) LIKE ?", ["%{$search}%"])
                          // (Opsional) Pencarian di deskripsi dan sub_services jika diperlukan
                          ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(data, '$[*].description')) LIKE ?", ["%{$search}%"])
                          ->orWhereRaw("JSON_UNQUOTE(JSON_EXTRACT(data, '$[*].sub_services')) LIKE ?", ["%{$search}%"]);
                    } else {
                        // Fallback untuk database non-MySQL (SQLite, PostgreSQL, dll)
                        $q->orWhere('data', 'LIKE', '%"title":"%' . $search . '%"%')
                          ->orWhere('data', 'LIKE', '%"category":"%' . $search . '%"%');
                    }
                });
            })
            ->latest()
            ->paginate(10); // Menggunakan paginate agar sesuai dengan tampilan index

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section' => 'required|string',
            'category' => 'nullable|string',
            'items' => 'required|array',
        ]);

        $data = $this->buildServiceData($request);
        if (empty($data)) {
            return back()->withErrors(['items' => 'Minimal isi satu data layanan.'])->withInput();
        }

        Service::create([
            'section' => $request->section,
            'category' => $request->category,
            'data' => $data,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'section' => 'required|string',
            'category' => 'nullable|string',
            'items' => 'required|array',
        ]);

        $data = $this->buildServiceData($request);
        if (empty($data)) {
            return back()->withErrors(['items' => 'Minimal isi satu data layanan.'])->withInput();
        }

        $service->update([
            'section' => $request->section,
            'category' => $request->category,
            'data' => $data,
        ]);

        return redirect()->route('admin.services.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Data berhasil dihapus');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.show', compact('service'));
    }

    private function buildServiceData(Request $request): array
    {
        return collect($request->input('items', []))
            ->map(fn ($item) => $this->normalizeItem((array) $item, $request->section))
            ->filter(fn ($item) => !empty($item))
            ->values()
            ->all();
    }

    private function normalizeItem(array $item, string $section): array
    {
        $normalized = [];

        foreach (['title', 'category', 'code', 'description'] as $field) {
            if (!empty($item[$field])) {
                $normalized[$field] = trim($item[$field]);
            }
        }

        if ($section === 'non_construction_consultancy') {
            if (empty($normalized['category'])) {
                return [];
            }
        } elseif (empty($normalized['title'])) {
            return [];
        }

        $services = $this->lines($item['services_text'] ?? null);
        if (!empty($services)) {
            $normalized[$section === 'non_construction_consultancy' ? 'services' : 'sub_services'] = $services;
        }

        foreach (['scope', 'process', 'projects'] as $field) {
            $lines = $this->lines($item[$field] ?? null);
            if (!empty($lines)) {
                $normalized[$field] = $lines;
            }
        }

        $phases = $this->phases($item['phases'] ?? null);
        if (!empty($phases)) {
            $normalized['phases'] = $phases;
        }

        if ($section !== 'non_construction_consultancy') {
            $normalized['description'] = $normalized['description'] ?? '';
            $normalized['code'] = $normalized['code'] ?? '';
            $normalized['icon'] = $this->iconFor($normalized);
            $normalized['route'] = $this->routeFor($section);
        }

        return $normalized;
    }

    private function lines(?string $value): array
    {
        return collect(preg_split('/\R/', (string) $value))
            ->map(fn ($line) => trim($line))
            ->filter()
            ->values()
            ->all();
    }

    private function phases(?string $value): array
    {
        $blocks = preg_split('/\R\s*\R/', trim((string) $value));
        $phases = [];

        foreach ($blocks as $block) {
            $lines = $this->lines($block);
            if (empty($lines)) {
                continue;
            }

            $phaseName = array_shift($lines);
            $phases[$phaseName] = collect($lines)
                ->map(fn ($line) => ltrim($line, "- \t"))
                ->filter()
                ->values()
                ->all();
        }

        return $phases;
    }

    private function routeFor(string $section): string
    {
        return match ($section) {
            'construction' => 'services.construction',
            'non_construction' => 'services.non-construction',
            'construction_consultancy' => 'services.construction',
            'non_construction_consultancy' => 'services.non-construction',
            'architectural' => 'services.architectural',
            'engineering' => 'services.engineering',
            default => 'services',
        };
    }

    private function iconFor(array $item): string
    {
        $text = strtolower(($item['code'] ?? '') . ' ' . ($item['title'] ?? '') . ' ' . ($item['category'] ?? ''));

        return match (true) {
            str_contains($text, 'ar') || str_contains($text, 'arsitektur') => 'fas fa-drafting-compass',
            str_contains($text, 'rk') || str_contains($text, 'rekayasa') => 'fas fa-hard-hat',
            str_contains($text, 'air') || str_contains($text, 'hidro') => 'fas fa-water',
            str_contains($text, 'transport') || str_contains($text, 'jalan') || str_contains($text, 'jembatan') => 'fas fa-road',
            str_contains($text, 'survey') || str_contains($text, 'survei') => 'fas fa-search-location',
            str_contains($text, 'manajemen') => 'fas fa-chart-line',
            str_contains($text, 'telematika') || str_contains($text, 'informasi') => 'fas fa-satellite-dish',
            str_contains($text, 'pertanian') || str_contains($text, 'pedesaan') => 'fas fa-tractor',
            str_contains($text, 'khusus') => 'fas fa-cogs',
            default => 'fas fa-list-check',
        };
    }
}
