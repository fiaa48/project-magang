<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');
    }
    
    public function history()
    {
        $history = [
            '2020' => [
                'title' => 'Pendirian Perusahaan',
                'description' => 'PT Mitra Nusa Konsulindo didirikan pada tanggal 22 Oktober 2020 dengan Akta Notaris No. 19.',
                'details' => [
                    'Akte Pendirian: No. 19 tanggal 22 Oktober 2020',
                    'Pengesahan Kemenkumham: AHU-0057316.AH.01.01.TAHUN 2020',
                    'Modal Dasar: Rp 1.000.000.000',
                    'Modal Ditempatkan: Rp 400.000.000'
                ]
            ],
            '2022' => [
                'title' => 'Perolehan Sertifikasi Awal',
                'description' => 'Memperoleh berbagai sertifikasi SBU untuk bidang konsultansi konstruksi.',
                'details' => [
                    'SBU Jasa Arsitektural',
                    'SBU Jasa Rekayasa Konstruksi',
                    'Sertifikasi ISO awal'
                ]
            ],
            '2023' => [
                'title' => 'Ekspansi dan Perubahan',
                'description' => 'Perubahan struktur kepemilikan dan penambahan bidang usaha.',
                'details' => [
                    'Perubahan Akte: No. 03 tanggal 07 Desember 2023',
                    'Penambahan bidang usaha non-konstruksi',
                    'Peningkatan kapasitas tim ahli'
                ]
            ],
            '2024' => [
                'title' => 'Pengembangan Sistem',
                'description' => 'Implementasi sistem manajemen terintegrasi dan digitalisasi.',
                'details' => [
                    'Sertifikasi ISO 9001, 14001, 45001',
                    'Pengembangan sistem digital',
                    'Ekspansi jaringan klien'
                ]
            ],
            '2025' => [
                'title' => 'Transformasi Digital',
                'description' => 'Perluasan layanan dan penguatan posisi di pasar konsultansi.',
                'details' => [
                    'Renewal sertifikasi SBU',
                    'Pengembangan layanan digital',
                    'Kolaborasi dengan lebih banyak mitra'
                ]
            ]
        ];
        
        return view('about.history', compact('history'));
    }
    
    public function visionMission()
    {
        $vision = "Menjadi perusahaan konsultan terdepan yang memberikan solusi inovatif dan berkelanjutan dalam bidang konstruksi dan non-konstruksi, dengan mengutamakan profesionalisme, kualitas, dan kepuasan klien.";
        
        $missions = [
            "Memberikan layanan konsultansi yang berkualitas tinggi dengan mengutamakan kepuasan klien.",
            "Mengembangkan solusi inovatif dan berkelanjutan yang sesuai dengan kebutuhan pasar.",
            "Membangun kemitraan jangka panjang yang saling menguntungkan dengan berbagai pemangku kepentingan.",
            "Meningkatkan kompetensi dan profesionalisme sumber daya manusia secara berkelanjutan.",
            "Menerapkan prinsip-prinsip tata kelola perusahaan yang baik dan transparan.",
            "Berkontribusi positif bagi masyarakat dan lingkungan melalui kegiatan usaha yang bertanggung jawab.",
            "Mengoptimalkan penggunaan teknologi untuk meningkatkan efisiensi dan efektivitas layanan."
        ];
        
        $values = [
            "Integritas" => "Selalu berperilaku jujur, transparan, dan profesional dalam setiap tindakan.",
            "Inovasi" => "Terus mengembangkan solusi kreatif dan teknologi terkini.",
            "Kualitas" => "Memberikan hasil kerja terbaik sesuai standar tertinggi.",
            "Kerjasama" => "Membangun sinergi dengan tim, klien, dan mitra.",
            "Tanggung Jawab" => "Bertanggung jawab terhadap pekerjaan, lingkungan, dan masyarakat."
        ];
        
        return view('about.vision-mission', compact('vision', 'missions', 'values'));
    }
    
    public function organization()
    {
        $structure = [
            'direksi' => [
                'title' => 'Direksi',
                'members' => [
                    [
                        'name' => 'MURIA CIPTA, ST',
                        'position' => 'Direktur Utama',
                        'shares' => '150 lembar (Rp 150.000.000)'
                    ],
                    [
                        'name' => 'ANDRI HENDRAWAN',
                        'position' => 'Direktur',
                        'shares' => '150 lembar (Rp 150.000.000)'
                    ]
                ]
            ],
            'komisaris' => [
                'title' => 'Dewan Komisaris',
                'members' => [
                    [
                        'name' => 'DEDE SAMSUL MUHAROM',
                        'position' => 'Komisaris Utama',
                        'shares' => '50 lembar (Rp 50.000.000)'
                    ],
                    [
                        'name' => 'ENDAH NURAENI',
                        'position' => 'Komisaris',
                        'shares' => '50 lembar (Rp 50.000.000)'
                    ]
                ]
            ],
            'pemegang_saham' => [
                'title' => 'Pemegang Saham',
                'members' => [
                    ['name' => 'MURIA CIPTA', 'shares' => '150 lembar', 'value' => 'Rp 150.000.000'],
                    ['name' => 'ANDRI HENDRAWAN', 'shares' => '150 lembar', 'value' => 'Rp 150.000.000'],
                    ['name' => 'DEDE SAMSUL MUHAROM', 'shares' => '50 lembar', 'value' => 'Rp 50.000.000'],
                    ['name' => 'ENDAH NURAENI', 'shares' => '50 lembar', 'value' => 'Rp 50.000.000']
                ]
            ],
            'divisi' => [
                'title' => 'Divisi Operasional',
                'divisions' => [
                    'Divisi Pengembangan',
                    'Divisi Umum',
                    'Divisi Pemasaran, Pembina Relasi dan Promosi',
                    'Divisi Administrasi dan Personalia',
                    'Divisi Keuangan dan Perlengkapan',
                    'Divisi Tata Ruang',
                    'Divisi Arsitektur dan Landscaping',
                    'Divisi Lingkungan',
                    'Divisi Sipil',
                    'Divisi Manajemen'
                ]
            ]
        ];
        
        return view('about.organization', compact('structure'));
    }
}