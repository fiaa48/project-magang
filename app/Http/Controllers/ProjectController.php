<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
        public function index()
    {
        // DATA DIAMBIL & DIRANGKUM SESUAI ISI PDF (LINGKUP PEKERJAAN)
        $projects = [
            [
                'title' => 'Konsultansi Konstruksi',
                'icon' => 'fas fa-hard-hat',
                'description' => 'Jasa konsultansi konstruksi meliputi perencanaan, pengawasan, dan manajemen proyek bangunan gedung, infrastruktur, serta fasilitas pendukung sesuai standar dan regulasi yang berlaku.',
            ],
            [
                'title' => 'Konsultansi Non-Konstruksi',
                'icon' => 'fas fa-industry',
                'description' => 'Layanan konsultansi non-konstruksi yang mencakup manajemen, studi kelayakan, kajian teknis, serta pendampingan kegiatan usaha dan institusi.',
            ],
            [
                'title' => 'Desain Arsitektural',
                'icon' => 'fas fa-drafting-compass',
                'description' => 'Perencanaan dan desain arsitektur bangunan hunian, komersial, dan fasilitas publik dengan pendekatan estetika, fungsi, dan keberlanjutan.',
            ],
            [
                'title' => 'Rekayasa Teknik Sipil',
                'icon' => 'fas fa-tools',
                'description' => 'Jasa rekayasa teknik sipil meliputi perhitungan struktur, jalan, jembatan, drainase, serta infrastruktur pendukung lainnya.',
            ],
            [
                'title' => 'Perencanaan Tata Ruang',
                'icon' => 'fas fa-map-marked-alt',
                'description' => 'Penyusunan rencana tata ruang wilayah, kawasan, dan site plan sesuai kebijakan tata ruang nasional dan daerah.',
            ],
            [
                'title' => 'Kajian Lingkungan',
                'icon' => 'fas fa-leaf',
                'description' => 'Penyusunan dokumen lingkungan seperti UKL-UPL, AMDAL, serta kajian lingkungan hidup strategis.',
            ],
        ];

        return view('projects.index', compact('projects'));
    }
}
