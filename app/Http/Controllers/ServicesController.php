<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $constructionServices = [
            [
                'title' => 'Jasa Arsitektural',
                'description' => 'Desain arsitektur untuk bangunan hunian dan non-hunian dengan konsep inovatif.',
                'icon' => 'fas fa-drafting-compass',
                'route' => 'services.architectural',
                'sub_services' => [
                    'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian (AR001)',
                    'Jasa Arsitektural Lainnya (AR002)',
                    'Jasa Desain Interior (AR003)'
                ]
            ],
            [
                'title' => 'Jasa Rekayasa Konstruksi',
                'description' => 'Desain rekayasa struktur untuk berbagai jenis bangunan dan infrastruktur.',
                'icon' => 'fas fa-hard-hat',
                'route' => 'services.engineering',
                'sub_services' => [
                    'Rekayasa Bangunan Gedung (RK001)',
                    'Rekayasa Teknik Sipil Sumber Daya Air (RK002)',
                    'Rekayasa Teknik Sipil Transportasi (RK003)'
                ]
            ],
            [
                'title' => 'Jasa Pengembangan Wilayah',
                'description' => 'Perencanaan tata ruang wilayah dan pengembangan kawasan terpadu.',
                'icon' => 'fas fa-map-marked-alt',
                'route' => 'services.construction',
                'sub_services' => [
                    'Pengembangan Pemanfaatan Ruang (AL001)',
                    'Pengembangan Wilayah (AL002)',
                    'Pengembangan Perkotaan (AL003)'
                ]
            ]
        ];
        
        $nonConstructionServices = [
            [
                'title' => 'Jasa Survey & Penelitian',
                'description' => 'Layanan survey teristris, penginderaan jauh, dan penelitian berbagai bidang.',
                'icon' => 'fas fa-search-location',
                'route' => 'services.non-construction',
                'sub_services' => [
                    'Survey Teristris',
                    'Penginderaan Jauh / Fotogrametri',
                    'Survey Hidrografi / Batimetri'
                ]
            ],
            [
                'title' => 'Konsultansi Manajemen',
                'description' => 'Konsultasi manajemen fungsional, pengembangan SDM, dan sistem akuntansi.',
                'icon' => 'fas fa-chart-line',
                'route' => 'services.non-construction',
                'sub_services' => [
                    'Perencanaan Sistem Akuntansi',
                    'Pelatihan dan Pengembangan SDM',
                    'Konsultasi Manajemen Fungsional'
                ]
            ],
            [
                'title' => 'Jasa Khusus',
                'description' => 'Layanan khusus seperti teknologi informasi, penilai, sertifikasi, dan inspeksi.',
                'icon' => 'fas fa-cogs',
                'route' => 'services.non-construction',
                'sub_services' => [
                    'Jasa Teknologi dan Sistem Informasi',
                    'Jasa Penilai / Appraisal',
                    'Jasa Sertifikasi'
                ]
            ]
        ];
        
        return view('services.index', compact('constructionServices', 'nonConstructionServices'));
    }
    
    public function constructionConsultancy()
    {
        $services = [
            [
                'code' => 'AR001',
                'title' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian',
                'description' => 'Jasa asistensi, nasehat, dan rekomendasi mengenai arsitektural dan hal-hal yang terkait dengan arsitektural.',
                'scope' => [
                    'Kajian pendahuluan tentang isu-isu seperti site philosophy, tujuan pembangunan',
                    'Tinjauan lingkungan dan iklim, kebutuhan hunian, batasan biaya',
                    'Analisa pemilihan lokasi, penjadwalan pelaksanaan konstruksi',
                    'Nasihat mengenai metode perawatan, renovasi, restorasi, atau recycling bangunan'
                ],
                'process' => [
                    'Desain skematik: penentuan batasan anggaran dan penjadwalan waktu',
                    'Desain pembangunan: ilustrasi presisi konsep desain',
                    'Desain akhir: spesifikasi tertulis dan gambar untuk tender dan konstruksi'
                ]
            ],
            [
                'code' => 'RK001',
                'title' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
                'description' => 'Jasa desain rekayasa struktur untuk load bearing framework dari bangunan perumahan dan komersial.',
                'scope' => [
                    'Estimasi biaya spesifikasi dan rencana pendahuluan',
                    'Rencana akhir, spesifikasi dan estimasi biaya termasuk gambar kerja',
                    'Spesifikasi material, metode instalasi, batasan waktu',
                    'Nasihat ahli untuk klien pada saat evaluasi dan penerimaan tender'
                ]
            ],
            [
                'code' => 'AL002',
                'title' => 'Jasa Pengembangan Wilayah',
                'description' => 'Jasa perencanaan tata ruang wilayah nasional, pulau, provinsi, kabupaten, dan kota.',
                'scope' => [
                    'Perencanaan tata ruang darat, laut, udara, dan di dalam bumi',
                    'Pengkajian dan penasehatan dalam penataan ruang wilayah',
                    'Perencanaan kawasan koridor nasional/provinsi/kabupaten/kota',
                    'Pengembangan kawasan andalan dan kawasan permukiman'
                ]
            ]
        ];
        
        return view('services.construction-consultancy', compact('services'));
    }
    
    public function nonConstructionConsultancy()
    {
        $services = [
            [
                'category' => 'Jasa Survey',
                'services' => [
                    'Survey Teristris',
                    'Penginderaan Jauh / Fotogrametri',
                    'Survey Hidrografi / Batimetri',
                    'Sistem Informasi Geografi',
                    'Survey Registrasi Kepemilikan Tanah / Kadastral',
                    'Survey Geologi dan Geofisika',
                    'Survey Pertanian',
                    'Jasa Survey non Seismik',
                    'Jasa Survey Geologi dan Geofisika (non seismik)'
                ]
            ],
            [
                'category' => 'Jasa Studi, Penelitian dan Bantuan Teknis',
                'services' => [
                    'Studi Makro',
                    'Studi Kelayakan & Studi Mikro Lainnya',
                    'Studi Perencanaan Umum',
                    'Jasa Penelitian',
                    'Jasa Bantuan Teknik'
                ]
            ],
            [
                'category' => 'Jasa Konsultansi Manajemen',
                'services' => [
                    'Perencanaan Sistem Akuntansi',
                    'Pelatihan dan Pengembangan SDM',
                    'Konsultasi Manajemen Fungsional',
                    'Konsultasi Hukum Bisnis'
                ]
            ],
            [
                'category' => 'Jasa Khusus',
                'services' => [
                    'Jasa Teknologi dan Sistem Informasi',
                    'Jasa Penilai / Appraisal / Valuer',
                    'Jasa Surveyor Independen',
                    'Jasa Sertifikasi',
                    'Jasa Inspeksi Teknik',
                    'Jasa Kehumasan'
                ]
            ],
            [
                'category' => 'Bidang Khusus',
                'services' => [
                    'Pengembangan Pertanian dan Pedesaan',
                    'Transportasi',
                    'Telematika'
                ]
            ]
        ];
        
        return view('services.non-construction-consultancy', compact('services'));
    }
    
    public function architectural()
    {
        $services = [
            [
                'code' => 'AR001',
                'title' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian',
                'description' => 'Layanan desain arsitektur lengkap untuk berbagai jenis bangunan.',
                'phases' => [
                    'Phase 1: Desain Skematik' => [
                        'Penentuan batasan anggaran dan penjadwalan waktu bersama klien',
                        'Penyiapan sketsa floor plans, site plans, dan exterior views'
                    ],
                    'Phase 2: Desain Pembangunan' => [
                        'Ilustrasi presisi dari konsep desain',
                        'Detail siting plan, bentuk dan material yang akan digunakan',
                        'Perencanaan struktur, sistem mekanikal dan elektrikal',
                        'Estimasi biaya konstruksi'
                    ],
                    'Phase 3: Desain Akhir' => [
                        'Spesifikasi tertulis dan gambar detail',
                        'Dokumen untuk pelaksanaan tender dan konstruksi',
                        'Nasihat ahli kepada klien pada saat evaluasi tender'
                    ]
                ]
            ],
            [
                'code' => 'AR003',
                'title' => 'Jasa Desain Interior pada Bangunan Gedung dan Bangunan Sipil',
                'description' => 'Layanan desain interior yang fungsional dan estetik.',
                'scope' => [
                    'Desain interior untuk bangunan komersial, residensial, dan institusi',
                    'Pemilihan material, furnitur, dan pencahayaan',
                    'Perencanaan tata ruang interior yang ergonomis',
                    'Desain khusus untuk kebutuhan aksesibilitas'
                ]
            ]
        ];
        
        return view('services.architectural', compact('services'));
    }
    
    public function engineering()
    {
        $services = [
            [
                'code' => 'RK002',
                'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
                'description' => 'Desain rekayasa untuk pekerjaan teknik sipil keairan.',
                'projects' => [
                    'Dam dan bendungan',
                    'Catchment basins',
                    'Sistem irigasi',
                    'Pekerjaan pengendalian banjir',
                    'Pelabuhan',
                    'Pekerjaan penyaluran air dan sanitasi',
                    'Sistem saluran air limbah industri'
                ],
                'process' => [
                    'Perencanaan awal, estimasi biaya dan spesifikasi',
                    'Perencanaan akhir, estimasi biaya dan spesifikasi',
                    'Gambar teknik, spesifikasi material, metode pemasangan',
                    'Layanan pada saat fase konstruksi'
                ]
            ],
            [
                'code' => 'RK003',
                'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
                'description' => 'Desain rekayasa untuk infrastruktur transportasi.',
                'projects' => [
                    'Jembatan dan jalan layang',
                    'Jalan raya dan jalan tol',
                    'Struktural health monitoring system untuk jembatan',
                    'Infrastruktur transportasi publik'
                ]
            ]
        ];
        
        return view('services.engineering', compact('services'));
    }
}