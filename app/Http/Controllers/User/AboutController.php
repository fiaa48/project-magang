<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\History;
use App\Models\Vision;
use App\Models\Organization;

class AboutController extends Controller
{
    /**
     * Halaman utama tentang kami (profil, sejarah, visi-misi, organisasi ringkas)
     */
    public function index()
    {
        // Data profil perusahaan (ambil data terbaru)
        $companyProfile = CompanyProfile::latest()->first();

        // // Data profil perusahaan (ambil data lama hanya 1 data)
        // $companyProfile = CompanyProfile::first();

        // Data sejarah (timeline) – urutkan dari tahun terkecil datanya banyak
        $histories = History::orderBy('year', 'asc')->get();

        // Data visi & misi (ambil data terbaru)
        $vision = Vision::latest()->first();

        // // Data visi & misi (ambil data lama hanya 1 data)
        // $vision = Vision::first();

        // Data organisasi (semua kategori) untuk ditampilkan ringkas di halaman utama
        $organizations = Organization::all();

        return view('user.about.index', compact(
            'companyProfile',
            'histories',
            'vision',
            'organizations'
        ));
    }

    /**
     * Halaman khusus sejarah (jika ingin tampilan terpisah, bisa digunakan)
     */
    public function history()
    {
        $histories = History::orderBy('year', 'asc')->get();
        return view('user.about.history', compact('histories'));
    }

    /**
     * Halaman visi & misi
     */
    public function visionMission()
    {
        $vision = Vision::latest()->first();
        return view('user.about.vision-mission', compact('vision'));
    }

    /**
     * Halaman struktur organisasi lengkap
     */
    public function organization()
    {
        $direksi = Organization::where('category', 'direksi')->get();
        $komisaris = Organization::where('category', 'komisaris')->get();
        $pemegangSaham = Organization::where('category', 'pemegang_saham')->get();
        $divisi = Organization::where('category', 'divisi')->get();

        return view('user.about.organization', compact(
            'direksi',
            'komisaris',
            'pemegangSaham',
            'divisi'
        ));
    }
}
