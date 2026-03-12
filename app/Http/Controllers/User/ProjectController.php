<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\Project

class ProjectController extends Controller
{
    /**
     * Data proyek – diambil dari PDF Company Profile (halaman 7-10)
     */
    private function getProjects()
    {
        return [
            [
                'id' => 1,
                'nama' => 'Perencanaan Gedung Perkantoran 15 Lantai',
                'kategori' => 'Arsitektur',
                'lokasi' => 'Jakarta',
                'tahun' => '2024',
                'deskripsi' => 'Perencanaan dan desain arsitektur gedung perkantoran premium dengan konsep green building.',
            ],
            [
                'id' => 2,
                'nama' => 'Pengawasan Jalan Tol Cileunyi – Sumedang',
                'kategori' => 'Teknik Sipil',
                'lokasi' => 'Jawa Barat',
                'tahun' => '2023',
                'deskripsi' => 'Pengawasan konstruksi jalan tol sepanjang 30 km, quality control, dan manajemen proyek.',
            ],
            [
                'id' => 3,
                'nama' => 'Studi Kelayakan Bendungan Cipanas',
                'kategori' => 'Sumber Daya Air',
                'lokasi' => 'Sumedang',
                'tahun' => '2023',
                'deskripsi' => 'Studi kelayakan bendungan multi guna, analisis hidrologi, geoteknik, dan lingkungan.',
            ],
            [
                'id' => 4,
                'nama' => 'Penyusunan RDTR Kawasan Industri',
                'kategori' => 'Tata Ruang',
                'lokasi' => 'Bandung Barat',
                'tahun' => '2024',
                'deskripsi' => 'Rencana detail tata ruang kawasan industri 500 ha berbasis GIS.',
            ],
            [
                'id' => 5,
                'nama' => 'AMDAL Rumah Sakit Pendidikan',
                'kategori' => 'Lingkungan',
                'lokasi' => 'Bandung',
                'tahun' => '2023',
                'deskripsi' => 'Penyusunan dokumen AMDAL untuk rumah sakit pendidikan.',
            ],
            [
                'id' => 6,
                'nama' => 'Manajemen Proyek Apartemen',
                'kategori' => 'Manajemen Konstruksi',
                'lokasi' => 'Surabaya',
                'tahun' => '2024',
                'deskripsi' => 'Konsultansi manajemen proyek apartemen 25 lantai.',
            ],
            [
                'id' => 7,
                'nama' => 'Survey Topografi Perkebunan Sawit',
                'kategori' => 'Jasa Survey',
                'lokasi' => 'Riau',
                'tahun' => '2022',
                'deskripsi' => 'Survey topografi dan pemetaan digital untuk perkebunan kelapa sawit.',
            ],
            [
                'id' => 8,
                'nama' => 'Desain Interior Hotel Bintang 5',
                'kategori' => 'Desain Interior',
                'lokasi' => 'Bali',
                'tahun' => '2023',
                'deskripsi' => 'Desain interior hotel mewah di kawasan Nusa Dua.',
            ],
        ];
    }

    /**
     * Menampilkan daftar proyek (index)
     */
    public function index()
    {
        $projects = $this->getProjects();
        return view('user.projects.index', compact('projects'));
    }

    /**
     * Menampilkan detail proyek
     */
    public function show($id)
    {
        $projects = $this->getProjects();
        $project = collect($projects)->firstWhere('id', $id);

        if (!$project) {
            abort(404);
        }

        return view('user.projects.show', compact('projects'));
    }
}
