<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the portfolio items.
     */
    public function index()
    {
        // Data portofolio (bisa dari database atau array)
        $portfolios = [
            [
                'id' => 1,
                'title' => 'Website E-commerce',
                'description' => 'Website toko online dengan sistem pembayaran terintegrasi.',
                'image' => 'project1.jpg',
                'category' => 'Web Development',
                'link' => 'https://example.com/project1'
            ],
            [
                'id' => 2,
                'title' => 'Mobile App UI/UX',
                'description' => 'Aplikasi mobile untuk manajemen keuangan pribadi.',
                'image' => 'project2.jpg',
                'category' => 'UI/UX Design',
                'link' => 'https://example.com/project2'
            ],
            [
                'id' => 3,
                'title' => 'Sistem Manajemen Inventaris',
                'description' => 'Sistem untuk mengelola stok barang perusahaan.',
                'image' => 'project3.jpg',
                'category' => 'Web Development',
                'link' => 'https://example.com/project3'
            ]
        ];

        return view('portfolio.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new portfolio item.
     */
    public function create()
    {
        return view('portfolio.create');
    }

    /**
     * Store a newly created portfolio item.
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

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio item created successfully.');
    }

    /**
     * Display the specified portfolio item.
     */
    public function show($id)
    {
        // Contoh data
        $portfolio = [
            'id' => $id,
            'title' => 'Website E-commerce',
            'description' => 'Website toko online dengan sistem pembayaran terintegrasi.',
            'image' => 'project1.jpg',
            'category' => 'Web Development',
            'client' => 'PT Contoh Indonesia',
            'year' => '2024',
            'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Tailwind CSS'],
            'link' => 'https://example.com/project1'
        ];

        return view('portfolio.show', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified portfolio item.
     */
    public function edit($id)
    {
        // Ambil data dari database (contoh)
        $portfolio = [
            'id' => $id,
            'title' => 'Website E-commerce',
            'description' => 'Website toko online...',
            'category' => 'Web Development'
        ];

        return view('portfolio.edit', compact('portfolio'));
    }

    /**
     * Update the specified portfolio item.
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

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio item updated successfully.');
    }

    /**
     * Remove the specified portfolio item.
     */
    public function destroy($id)
    {
        // Hapus data
        // ...

        return redirect()->route('portfolio.index')
            ->with('success', 'Portfolio item deleted successfully.');
    }
}