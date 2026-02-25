<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the portofolio items.
     */
    public function index()
    {
        // Data portofolio (bisa dari database atau array)
        $portofolios = [
    [
        'id' => 1,
        'title' => 'Perencanaan Gedung Perkantoran',
        'description' => 'Jasa konsultansi perencanaan gedung perkantoran sesuai standar teknis.',
        'image' => 'project1.jpg',
        'category' => 'Konsultan Konstruksi',
        'link' => route('portofolio.details', 1),
    ],
    [
        'id' => 2,
        'title' => 'Pengawasan Pembangunan Jalan',
        'description' => 'Pengawasan teknis pembangunan jalan untuk menjamin mutu dan keselamatan.',
        'image' => 'project2.jpg',
        'category' => 'Manajemen Proyek',
        'link' => route('portofolio.details', 2),
    ],
    [
        'id' => 3,
        'title' => 'Perencanaan Infrastruktur',
        'description' => 'Perencanaan infrastruktur sipil untuk mendukung pembangunan daerah.',
        'image' => 'project3.jpg',
        'category' => 'Engineering',
        'link' => route('portofolio.details', 3),
    ],
];

        return view('portofolio.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new portofolio item.
     */
    public function create()
    {
        return view('portofolio.create');
    }

    /**
     * Store a newly created portofolio item.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan data (disini bisa ke database)
        // ...

        return redirect()->route('portofolio.index')
            ->with('success', 'Portofolio item created successfully.');
    }

    /**
     * Display the specified portofolio item.
     */
    public function show($id)
    {
        // Contoh data
        $portofolios = [
        1 => [
            'id' => 1,
            'title' => 'Perencanaan Gedung Perkantoran',
            'category' => 'Konsultan Konstruksi',
            'description' => 'Jasa konsultansi perencanaan gedung perkantoran sesuai standar teknis.',
            'image' => 'project1.jpg',
            'link' => null,
        ],
        2 => [
            'id' => 2,
            'title' => 'Pengawasan Pembangunan Jalan',
            'category' => 'Manajemen Proyek',
            'description' => 'Pengawasan teknis pembangunan jalan untuk menjamin mutu dan keselamatan.',
            'image' => 'project2.jpg',
            'link' => null,
        ],
        3 => [
            'id' => 3,
            'title' => 'Perencanaan Infrastruktur',
            'category' => 'Engineering',
            'description' => 'Perencanaan infrastruktur sipil untuk mendukung pembangunan daerah.',
            'image' => 'project3.jpg',
            'link' => null,
        ],
        ];

        if (!isset($portofolios[$id])) {
            abort(404);
        }

        $portofolio = $portofolios[$id];

        return view('portofolio.show', compact('portofolio'));
    }

    /**
     * Show the form for editing the specified portofolio item.
     */
    public function edit($id)
    {
        // Ambil data dari database (contoh)
        $portofolio = [
            'id' => $id,
            'title' => 'Website E-commerce',
            'description' => 'Website toko online...',
            'category' => 'Web Development'
        ];

        return view('portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified portofolio item.
     */
    public function update(Request $request, $id)
    {
        // Validasi
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category' => 'required',
        ]);

        // Update data
        // ...

        return redirect()->route('portofolio.index')
            ->with('success', 'Portofolio item updated successfully.');
    }

    /**
     * Remove the specified portofolio item.
     */
    public function destroy($id)
    {
        // Hapus data
        // ...

        return redirect()->route('portofolio.index')
            ->with('success', 'Portofolio item deleted successfully.');
    }
}
