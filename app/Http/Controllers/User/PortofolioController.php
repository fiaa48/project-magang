<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Data portofolio sesuai dengan bidang usaha di PDF.
     * Mencakup proyek konstruksi & non-konstruksi.
     */
    private function getPortofolioData()
    {
        return [
            [
                'id'          => 1,
                'title'       => 'Perencanaan Gedung Perkantoran 15 Lantai',
                'category'    => 'Arsitektur',
                'year'        => '2024',
            ],
            [
                'id'          => 2,
                'title'       => 'Pengawasan Jalan Tol Cileunyi – Sumedang',
                'category'    => 'Teknik Sipil',
                'year'        => '2023',
            ],
            [
                'id'          => 3,
                'title'       => 'Studi Kelayakan Bendungan Cipanas',
                'category'    => 'Sumber Daya Air',
                'year'        => '2023',
            ],
            [
                'id'          => 4,
                'title'       => 'RDTR Kawasan Industri Terpadu',
                'category'    => 'Tata Ruang',
                'year'        => '2024',
            ],
            [
                'id'          => 5,
                'title'       => 'AMDAL Rumah Sakit Pendidikan',
                'category'    => 'Lingkungan',
                'year'        => '2023',
            ],
            [
                'id'          => 6,
                'title'       => 'Manajemen Proyek Apartemen',
                'category'    => 'Manajemen Proyek',
                'year'        => '2024',
            ],
            [
                'id'          => 7,
                'title'       => 'Survey Topografi Perkebunan Sawit',
                'category'    => 'Jasa Survey',
                'year'        => '2022',
            ],
            [
                'id'          => 8,
                'title'       => 'Desain Interior Hotel Bintang 5',
                'category'    => 'Desain Interior',
                'year'        => '2023',
            ],
        ];
    }

    /**
     * Menampilkan daftar portofolio (index).
     */
    public function index()
    {
        $projects = $this->getPortofolioData();
        // Ubah ke array biasa (sudah array)
        return view('user.projects.index', compact('projects'));
    }

    /**
     * Menampilkan detail portofolio (show).
     */
    public function show($id)
    {
        $projects = $this->getPortofolioData();
        // Cari proyek dengan id yang sesuai
        $project = collect($projects)->firstWhere('id', (int)$id);

        if (!$project) {
            abort(404);
        }

        return view('user.projects.show', compact('projects'));
    }
}
