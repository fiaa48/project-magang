<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyProfile;
use App\Models\History;
use App\Models\Vision;
use App\Models\Organization;

class AboutSeeder extends Seeder
{
    public function run()
    {
        // ================= PROFILE =================
        CompanyProfile::create([
            'name' => 'PT. MITRA NUSA KONSULINDO',
            'type' => 'Perseroan Terbatas (PT)',
            'address_main' => 'Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani-Bandung 40291',
            'address_branch' => 'Jl. Tulip VII No. 8, Rancabolang, Kec. Gedebage, Kota Bandung, Jawa Barat 40295',
            'established_year' => 2020,
            'npwp' => '96.431.796.0-429.000',
            'nib' => '0257011100093',
            'association' => 'Anggota INKINDO & KADIN',
            'is_pkp_active' => true,
            'pkp_activation_date' => '2020-12-16',
            'telepon_pt' => '(022) 20502071',
            'email_pt' => 'mitranusakonsulindo@gmail.com',
            'website_pt' => 'https://www.mitranusakonsulindo.com',
            'inkindo' => '17744/P/1304.JB',
            'kadin' => '20112-2026270629'
        ]);

        // ================= HISTORY =================
        History::insert([
            [
                'year' => 2020,
                'title' => 'Pendirian Perusahaan',
                'description' => 'PT Mitra Nusa Konsulindo didirikan pada tanggal 22 Oktober 2020 dengan Akta Notaris No. 19.',
                'details' => json_encode([
                    'Akte Pendirian: No. 19 tanggal 22 Oktober 2020',
                    'Pengesahan Kemenkumham: AHU-0057316.AH.01.01.TAHUN 2020',
                    'Modal Dasar: Rp 1.000.000.000',
                    'Modal Ditempatkan: Rp 400.000.000'
                ])
            ],
            [
                'year' => 2022,
                'title' => 'Perolehan Sertifikasi Awal',
                'description' => 'Memperoleh berbagai sertifikasi SBU untuk bidang konsultansi konstruksi.',
                'details' => json_encode([
                    'SBU Jasa Arsitektural',
                    'SBU Jasa Rekayasa Konstruksi',
                    'Sertifikasi ISO awal'
                ])
            ],
            [
                'year' => 2023,
                'title' => 'Ekspansi dan Perubahan',
                'description' => 'Perubahan struktur kepemilikan dan penambahan bidang usaha.',
                'details' => json_encode([
                    'Perubahan Akte: No. 03 tanggal 07 Desember 2023',
                    'Penambahan bidang usaha non-konstruksi',
                    'Peningkatan kapasitas tim ahli'
                ])
            ],
            [
                'year' => 2024,
                'title' => 'Pengembangan Sistem',
                'description' => 'Implementasi sistem manajemen terintegrasi dan digitalisasi.',
                'details' => json_encode([
                    'Sertifikasi ISO 9001, 14001, 45001',
                    'Pengembangan sistem digital',
                    'Ekspansi jaringan klien'
                ])
            ],
            [
                'year' => 2025,
                'title' => 'Transformasi Digital',
                'description' => 'Perluasan layanan dan penguatan posisi di pasar konsultansi.',
                'details' => json_encode([
                    'Renewal sertifikasi SBU',
                    'Pengembangan layanan digital',
                    'Kolaborasi dengan lebih banyak mitra'
                ])
            ],
        ]);

        // ================= VISION =================
        Vision::create([
            'vision' => 'Menjadi perusahaan konsultan terdepan yang memberikan solusi inovatif dan berkelanjutan dalam bidang konstruksi dan non-konstruksi, dengan mengutamakan profesionalisme, kualitas, dan kepuasan klien.',
            'missions' => json_encode([
                "Memberikan layanan konsultansi yang berkualitas tinggi dengan mengutamakan kepuasan klien.",
                "Mengembangkan solusi inovatif dan berkelanjutan yang sesuai dengan kebutuhan pasar.",
                "Membangun kemitraan jangka panjang yang saling menguntungkan dengan berbagai pemangku kepentingan.",
                "Meningkatkan kompetensi dan profesionalisme sumber daya manusia secara berkelanjutan.",
                "Menerapkan prinsip-prinsip tata kelola perusahaan yang baik dan transparan.",
                "Berkontribusi positif bagi masyarakat dan lingkungan melalui kegiatan usaha yang bertanggung jawab.",
                "Mengoptimalkan penggunaan teknologi untuk meningkatkan efisiensi dan efektivitas layanan."
            ]),
            'values' => json_encode([
                "Integritas" => "Selalu berperilaku jujur, transparan, dan profesional dalam setiap tindakan.",
                "Inovasi" => "Terus mengembangkan solusi kreatif dan teknologi terkini.",
                "Kualitas" => "Memberikan hasil kerja terbaik sesuai standar tertinggi.",
                "Kerjasama" => "Membangun sinergi dengan tim, klien, dan mitra.",
                "Tanggung Jawab" => "Bertanggung jawab terhadap pekerjaan, lingkungan, dan masyarakat."
            ])
        ]);

        // ================= ORGANIZATION =================
        $data = [
            ['category'=>'direksi','name'=>'MURIA CIPTA, ST','position'=>'Direktur Utama','shares'=>'150 lembar (Rp 150.000.000)'],
            ['category'=>'direksi','name'=>'ANDRI HENDRAWAN','position'=>'Direktur','shares'=>'150 lembar (Rp 150.000.000)'],

            ['category'=>'komisaris','name'=>'DEDE SAMSUL MUHAROM','position'=>'Komisaris Utama','shares'=>'50 lembar (Rp 50.000.000)'],
            ['category'=>'komisaris','name'=>'ENDAH NURAENI','position'=>'Komisaris','shares'=>'50 lembar (Rp 50.000.000)'],

            ['category'=>'pemegang_saham','name'=>'MURIA CIPTA','shares'=>'150 lembar','value'=>'Rp 150.000.000'],
            ['category'=>'pemegang_saham','name'=>'ANDRI HENDRAWAN','shares'=>'150 lembar','value'=>'Rp 150.000.000'],
            ['category'=>'pemegang_saham','name'=>'DEDE SAMSUL MUHAROM','shares'=>'50 lembar','value'=>'Rp 50.000.000'],
            ['category'=>'pemegang_saham','name'=>'ENDAH NURAENI','shares'=>'50 lembar','value'=>'Rp 50.000.000'],

            ['category'=>'divisi','name'=>'Divisi Pengembangan'],
            ['category'=>'divisi','name'=>'Divisi Umum'],
            ['category'=>'divisi','name'=>'Divisi Pemasaran, Pembina Relasi dan Promosi'],
            ['category'=>'divisi','name'=>'Divisi Administrasi dan Personalia'],
            ['category'=>'divisi','name'=>'Divisi Keuangan dan Perlengkapan'],
            ['category'=>'divisi','name'=>'Divisi Tata Ruang'],
            ['category'=>'divisi','name'=>'Divisi Arsitektur dan Landscaping'],
            ['category'=>'divisi','name'=>'Divisi Lingkungan'],
            ['category'=>'divisi','name'=>'Divisi Sipil'],
            ['category'=>'divisi','name'=>'Divisi Manajemen'],
        ];

        foreach ($data as $item) {
            Organization::create($item);
        }
    }
}
