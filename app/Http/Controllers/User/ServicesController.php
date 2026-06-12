<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $constructionServices = $this->sectionData('construction');
        $constructionConsultancyServices = $this->normalizeDetailServices($this->sectionData('construction_consultancy'));

        return view('user.services.index', compact('constructionServices', 'constructionConsultancyServices'));
    }

    public function constructionConsultancy()
    {
        $services = $this->normalizeDetailServices($this->sectionData('construction_consultancy'));
        $databaseServices = $services;

        return view('user.services.index', compact('services', 'databaseServices'));
    }

    public function nonConstructionConsultancy()
    {
        $categories = $this->normalizeCategories($this->sectionData('non_construction_consultancy'));
        $databaseCategories = $categories;
        $services = $categories;
        $nonConstructionServices = $this->sectionData('non_construction');

        return view('user.services.non_construction_consultancy', compact('categories', 'databaseCategories', 'services', 'nonConstructionServices'));
    }

    public function architectural()
    {
        $services = $this->normalizeDetailServices($this->sectionData('architectural'));
        $databaseServices = $services;

        return view('user.services.architectural', compact('services', 'databaseServices'));
    }

    public function engineering()
    {
        $services = $this->normalizeDetailServices($this->sectionData('engineering'));
        $databaseServices = $services;

        return view('user.services.engineering', compact('services', 'databaseServices'));
    }

    private function sectionData(string $section): array
    {
        return Service::where('section', $section)
            ->orderBy('id')
            ->get()
            ->flatMap(function (Service $service) {
                $data = $service->data;

                if (!is_array($data)) {
                    return [];
                }

                return isset($data['title']) && !isset($data[0]) ? [$data] : $data;
            })
            ->values()
            ->all();
    }

    private function normalizeDetailServices(array $items): array
    {
        $colors = ['primary', 'secondary', 'tertiary', 'quaternary'];

        return array_values(array_map(function (array $item, int $index) use ($colors) {
            $item['icon'] = $item['icon'] ?? $this->iconFor($item);
            $item['color'] = $item['color'] ?? $colors[$index % count($colors)];
            $item['features'] = $item['features'] ?? $this->featuresFrom($item);

            return $item;
        }, $items, array_keys($items)));
    }

    private function normalizeCategories(array $items): array
    {
        $colors = ['agriculture', 'transport', 'telematics', 'survey', 'research', 'management', 'special'];

        return array_values(array_map(function (array $item, int $index) use ($colors) {
            $item['id'] = $item['id'] ?? $index + 1;
            $item['icon'] = $item['icon'] ?? $this->iconFor($item);
            $item['color'] = $item['color'] ?? $colors[$index % count($colors)];
            $item['description'] = $item['description'] ?? 'Layanan profesional untuk ' . strtolower($item['category'] ?? 'kebutuhan konsultansi') . '.';
            $item['services'] = $item['services'] ?? [];

            return $item;
        }, $items, array_keys($items)));
    }

    private function featuresFrom(array $item): array
    {
        if (!empty($item['scope']) && is_array($item['scope'])) {
            return $item['scope'];
        }

        if (!empty($item['projects']) && is_array($item['projects'])) {
            return $item['projects'];
        }

        if (!empty($item['process']) && is_array($item['process'])) {
            return $item['process'];
        }

        if (!empty($item['phases']) && is_array($item['phases'])) {
            return array_values(array_merge(...array_values($item['phases'])));
        }

        if (!empty($item['services']) && is_array($item['services'])) {
            return $item['services'];
        }

        if (!empty($item['sub_services']) && is_array($item['sub_services'])) {
            return $item['sub_services'];
        }

        return [];
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
