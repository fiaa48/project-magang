<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private function getServicesData()
    {
        return [
            [
                'title'       => 'Konsultansi Konstruksi',
                'icon'        => 'fas fa-hard-hat',
                'description' => 'Layanan terintegrasi untuk proyek konstruksi, mulai perencanaan, pengawasan, hingga manajemen proyek. Didukung tenaga ahli bersertifikasi.',
                'sub_services' => [
                    'Jasa Arsitektural Bangunan Gedung (Hunian & Non Hunian)',
                    'Jasa Rekayasa Konstruksi Bangunan Gedung',
                    'Jasa Rekayasa Teknik Sipil (Sumber Daya Air, Transportasi)',
                    'Jasa Pengembangan Wilayah dan Perkotaan',
                    'Jasa Pengembangan Lingkungan Bangunan dan Lanskap',
                    'Jasa Desain Interior pada Bangunan Gedung',
                ],
                'certifications' => ['SBU Konstruksi', 'INKINDO', 'ISO 9001:2015', 'ISO 14001:2015', 'ISO 45001:2018'],
            ],
            [
                'title'       => 'Konsultansi Non-Konstruksi',
                'icon'        => 'fas fa-industry',
                'description' => 'Solusi konsultansi lintas sektor: pertanian, transportasi, telematika, survey, studi kelayakan, manajemen, dan jasa khusus.',
                'sub_services' => [
                    'Pengembangan Pertanian dan Perdesaan',
                    'Transportasi (Perencanaan, Legislasi, Usaha Jasa)',
                    'Telematika (Telekomunikasi, Perangkat Keras/Lunak, Konten)',
                    'Jasa Survey (Teristris, Hidrografi, GIS, Kadastral, Geologi)',
                    'Jasa Studi, Penelitian dan Bantuan Teknis',
                    'Jasa Konsultansi Manajemen (Akuntansi, SDM, Hukum)',
                    'Jasa Khusus (Teknologi Informasi, Appraisal, Inspeksi, Kehumasan)',
                ],
                'certifications' => ['SBU Non-Konstruksi', 'INKINDO', 'ISO 37001:2016'],
            ],
            [
                'title'       => 'Desain Arsitektural',
                'icon'        => 'fas fa-drafting-compass',
                'description' => 'Perencanaan arsitektur yang estetis, fungsional, dan berkelanjutan. Melayani bangunan hunian, komersial, dan publik.',
                'sub_services' => [
                    'Desain Skematik dan Pengembangan Desain',
                    'Gambar Kerja dan Spesifikasi Teknis',
                    'Dokumen Tender',
                    'Konsultasi Material dan Anggaran',
                    'Renovasi dan Restorasi',
                ],
                'certifications' => ['Arsitek Madya', 'Green Building Associate'],
            ],
            [
                'title'       => 'Rekayasa Teknik Sipil',
                'icon'        => 'fas fa-tools',
                'description' => 'Layanan rekayasa sipil untuk infrastruktur strategis: jalan, jembatan, bendungan, drainase, dan geoteknik.',
                'sub_services' => [
                    'Perencanaan Jembatan dan Jalan Layang',
                    'Sistem Drainase dan Pengendalian Banjir',
                    'Bendungan dan Irigasi',
                    'Perkuatan Struktur',
                    'Manajemen Lalu Lintas',
                ],
                'certifications' => ['Insinyur Profesional', 'SBU RK002, RK003'],
            ],
            [
                'title'       => 'Perencanaan Tata Ruang',
                'icon'        => 'fas fa-map-marked-alt',
                'description' => 'Penyusunan rencana tata ruang wilayah dan kawasan berbasis GIS dan partisipatif.',
                'sub_services' => [
                    'Rencana Tata Ruang Wilayah (RTRW)',
                    'Rencana Detail Tata Ruang (RDTR)',
                    'Kajian Lingkungan Hidup Strategis (KLHS)',
                    'Pemetaan dan Sistem Informasi Geografis',
                ],
                'certifications' => ['SBU AL001, AL002, AL003'],
            ],
            [
                'title'       => 'Kajian Lingkungan',
                'icon'        => 'fas fa-leaf',
                'description' => 'Penyusunan dokumen lingkungan hidup sesuai peraturan perundang-undangan.',
                'sub_services' => [
                    'AMDAL (Analisis Mengenai Dampak Lingkungan)',
                    'UKL-UPL',
                    'Dokumen Lingkungan Hidup',
                    'Pengelolaan Persampahan dan Sanitasi',
                ],
                'certifications' => ['SBU KL401', 'ISO 14001:2015'],
            ],
        ];
    }

    public function index()
    {
        $services = $this->getServicesData();
        return view('projects.index', compact('services'));
    }
}
