@extends('layouts.app')

@section('title', 'Konsultansi Konstruksi | PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi konstruksi profesional meliputi arsitektur, rekayasa sipil, pengembangan wilayah, dan konsultansi lingkungan.')

@section('content')
<div class="container-fluid px-0">
    <!-- Hero Banner -->
    <div class="consulting-hero position-relative overflow-hidden">
        <div class="container py-6 py-lg-7 position-relative z-2">
            <div class="row align-items-center min-vh-60">
                <div class="col-lg-8 mx-auto text-center">
                    <span class="badge bg-brown-100 text-brown-700 px-4 py-2 mb-4 rounded-pill fw-medium">
                        <i class="fas fa-hard-hat me-2"></i>Layanan Profesional
                    </span>
                    <h1 class="display-3 fw-bold text-white mb-4 animate__animated animate__fadeInDown">
                        Konsultansi <span class="text-cream-300">Konstruksi</span>
                    </h1>
                    <p class="lead text-white mb-5 animate__animated animate__fadeInUp">
                        Solusi terpadu untuk pengembangan tata ruang dan lingkungan yang berkelanjutan
                    </p>
                    <div class="d-flex flex-wrap justify-content-center gap-3 animate__animated animate__fadeIn">
                        <a href="#services" class="btn btn-lg btn-cream-300 text-brown-800 px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-list-check me-2"></i>Lihat Layanan
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-outline-cream-300 text-white px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-phone-alt me-2"></i>Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Pattern -->
        <div class="hero-pattern"></div>
        <div class="hero-overlay"></div>
    </div>

    <!-- Services Section -->
    <section id="services" class="py-6 py-lg-7 bg-cream-50 position-relative">
        <!-- Decorative Elements -->
        <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden">
            <div class="deco-circle deco-1"></div>
            <div class="deco-circle deco-2"></div>
            <div class="deco-circle deco-3"></div>
        </div>

        <div class="container position-relative z-2">
            <!-- Section Header -->
            <div class="text-center mb-6">
                <h2 class="display-5 fw-bold text-brown-800 mb-4">
                    Layanan <span class="text-brown-600">Kami</span>
                </h2>
                <p class="lead text-brown-600 mb-0 mx-auto" style="max-width: 700px;">
                    Menyediakan berbagai solusi konsultansi konstruksi dengan pendekatan holistik dan berkelanjutan
                </p>
            </div>

            @php
                $services = [
                    // Jasa Arsitektur
                    [
                        'code' => 'AR001',
                        'title' => 'Jasa Arsitektur Bangunan Gedung Hunian dan Non Hunian',
                        'icon' => 'fas fa-building',
                        'full_details' => [
                            'title' => 'JASA ARSITEKTUR BANGUNAN GEDUNG HUNIAN DAN NON HUNIAN',
                            'code' => 'AR001',
                            'description' => 'Jasa asistensi, nasehat, dan rekomendasi mengenai arsitektural dan hal-hal yang terkait dengan arsitektural. Termasuk didalamnya melaksanakan kajian pendahuluan tentang isu-isu seperti site philosophi, tujuan dari pembangunan, tinjauan lingkungan dan iklim, kebutuhan hunian, batasan biaya, analisa pemilihan lokasi penjadwalan pelaksanaan konstruksi dan isu lain yang mempengaruhi desain dan konstruksi dari suatu proyek. Jasa ini meliputi tidak hanya proyek konstruksi yang baru namun dapat meliputi nasihat mengenai metode dalam melaksanakan perawatan, renovasi, restorasi, atau recycling dari bangunan, atau penentuan nilai dan kualitas dari bangunan atau nasihat arsitektural lainnya.',
                            'details' => [
                                'Jasa desain arsitektural untuk bangunan dan struktur lainnya, dapat meliputi satu atau kombinasi dari kegiatan sebagai berikut:',
                                '1. Jasa desain skematik yang meliputi penentuan (bersama dengan klien) batasan anggaran dan penjadwalan waktu; serta menyiapkan sketsa yang meliputi floor plans, site plans, dan exterior views;',
                                '2. Jasa desain pembangunan yang meliputi ilustrasi presisi dari konsep desain dalam hal siting plan, bentuk dan material yang akan digunakan, struktur, sistem mekanikal dan elektrikal, dan kemungkinan biaya konstruksi; dan',
                                '3. Jasa desain akhir yang meliputi spesifikasi tertulis dan gambar yang cocok untuk digunakan sebagai detail dari pelaksanaan tender dan konstruksi, dan juga nasihat ahli kepada klien pada saat evaluasi tender.'
                            ]
                        ]
                    ],
                    [
                        'code' => 'AR002',
                        'title' => 'Jasa Arsitektur Lainnya',
                        'icon' => 'fas fa-draw-polygon',
                        'full_details' => [
                            'title' => 'JASA ARSITEKTUR LAINNYA',
                            'code' => 'AR002',
                            'description' => 'Jasa desain arsitektural untuk bangunan dan struktur lainnya, dapat meliputi satu atau kombinasi dari kegiatan sebagai berikut:',
                            'details' => [
                                '1. Jasa desain skematik yang meliputi penentuan (bersama dengan klien) batasan anggaran dan penjadwalan waktu; serta menyiapkan sketsa yang meliputi floor plans, site plans, dan exterior views;',
                                '2. Jasa desain pembangunan yang meliputi ilustrasi presisi dari konsep desain dalam hal siting plan, bentuk dan material yang akan digunakan, struktur, sistem mekanikal dan elektrikal, dan kemungkinan biaya konstruksi; dan',
                                '3. Jasa desain akhir yang meliputi spesifikasi tertulis dan gambar yang cocok untuk digunakan sebagai detail dari pelaksanaan tender dan konstruksi, dan juga nasihat ahli kepada klien pada saat evaluasi tender.'
                            ]
                        ]
                    ],
                    [
                        'code' => 'AR003',
                        'title' => 'Jasa Desain Interior pada Bangunan Gedung dan Bangunan Sipil',
                        'icon' => 'fas fa-couch',
                        'full_details' => [
                            'title' => 'JASA DESAIN INTERIOR PADA BANGUNAN GEDUNG DAN BANGUNAN SIPIL',
                            'code' => 'AR003',
                            'description' => 'Jasa desain interior profesional untuk bangunan gedung dan sipil, mencakup perencanaan tata ruang dalam, estetika, dan fungsionalitas ruang.',
                            'details' => [
                                'Perencanaan tata ruang interior yang optimal',
                                'Desain estetika dan fungsional sesuai kebutuhan',
                                'Pemilihan material dan furnitur yang tepat',
                                'Visualisasi 3D dan gambar kerja detail',
                                'Konsultasi pencahayaan dan sirkulasi udara',
                                'Optimasi ruang untuk kenyamanan pengguna'
                            ]
                        ]
                    ],

                    // Jasa Rekayasa
                    [
                        'code' => 'RK001',
                        'title' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
                        'icon' => 'fas fa-drafting-compass',
                        'full_details' => [
                            'title' => 'JASA REKAYASA KONSTRUKSI BANGUNAN GEDUNG HUNIAN DAN NON HUNIAN',
                            'code' => 'RK001',
                            'description' => 'Jasa desain rekayasa struktur untuk the load bearing framework dari bangunan perumahan dan komersial, bangunan institusi dan industrial. Jasa desain ini meliputi satu atau kombinasi dari kegiatan berikut:',
                            'details' => [
                                '1. Estimasi biaya spesifikasi dan rencana pendahuluan untuk mendefinisikan konsep desain teknik;',
                                '2. Rencana akhir, spesifikasi dan estimasi biaya termasuk didalamnya gambar kerja, spesifikasi material yang digunakan, metode instalasi, batasan waktu dan spesifikasi yang dibutuhkan untuk keperluan tender dan konstruksi serta nasihat ahli untuk klien pada saat evaluasi dan penerimaan tender; dan',
                                '3. Jasa yang diberikan pada saat fase konstruksi.'
                            ]
                        ]
                    ],
                    [
                        'code' => 'RK002',
                        'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
                        'icon' => 'fas fa-water',
                        'full_details' => [
                            'title' => 'JASA REKAYASA PEKERJAAN TEKNIK SIPIL SUMBER DAYA AIR',
                            'code' => 'RK002',
                            'description' => 'Jasa pembuatan desain rekayasa (engineering) untuk pekerjaan rekayasa sipil keairan seperti dam, catchment basins, sistem irigasi, pekerjaan pengendalian banjir, pelabuhan, pekerjaan penyaluran air dan sanitasi serta sistem saluran air limbah industri. Jasa Desain meliputi salah satu dari kombinasi layanan berikut:',
                            'details' => [
                                'Perencanaan awal, estimasi biaya dan spesifikasi dalam rangka menterjemahkan konsep desain teknis;',
                                'Perencanaan akhir, estimasi biaya dan spesifikasi termasuk gambar teknik, spesifikasi material yang akan digunakan, metode pemasangan, batasan waktu dan spesifikasi teknis lainnya yang dibutuhkan untuk keperluan tender;',
                                'Layanan pada saat fase konstruksi.'
                            ]
                        ]
                    ],
                    [
                        'code' => 'RK003',
                        'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
                        'icon' => 'fas fa-road',
                        'full_details' => [
                            'title' => 'JASA REKAYASA PEKERJAAN TEKNIK SIPIL TRANSPORTASI',
                            'code' => 'RK003',
                            'description' => 'Jasa pembuatan desain rekayasa (engineering) untuk pekerjaan rekayasa sipil transportasi seperti jembatan, jalan layang, dan jalan raya. Jasa Desain meliputi salah satu dari kombinasi layanan berikut:',
                            'details' => [
                                'Perencanaan awal, estimasi biaya dan spesifikasi dalam rangka menterjemahkan konsep desain teknis;',
                                'Perencanaan akhir, estimasi biaya dan spesifikasi termasuk gambar teknik, spesifikasi material yang akan digunakan, metode pemasangan, batasan waktu dan spesifikasi teknis lainnya yang dibutuhkan untuk keperluan tender;',
                                'Layanan pada saat fase konstruksi.',
                                'Termasuk di dalamnya jasa pembuatan desain structural health monitoring system untuk benteng jembatan.'
                            ]
                        ]
                    ],
                    [
                        'code' => 'RK005',
                        'title' => 'Jasa Rekayasa Lainnya',
                        'icon' => 'fas fa-cogs',
                        'full_details' => [
                            'title' => 'JASA REKAYASA LAINNYA',
                            'code' => 'RK005',
                            'description' => 'Jasa rekayasa untuk berbagai kebutuhan teknis lainnya yang tidak tercakup dalam kategori sebelumnya.',
                            'details' => [
                                'Analisis teknik komprehensif',
                                'Studi kelayakan proyek',
                                'Optimasi desain dan konstruksi',
                                'Konsultasi teknis spesifik',
                                'Audit teknis dan evaluasi',
                                'Rekomendasi perbaikan dan peningkatan'
                            ]
                        ]
                    ],

                    // Jasa Pengembangan
                    [
                        'code' => 'AL001',
                        'title' => 'Jasa Pengembangan Pemanfaatan Ruang',
                        'icon' => 'fas fa-map-marked-alt',
                        'full_details' => [
                            'title' => 'JASA PENGEMBANGAN PEMANFAATAN RUANG',
                            'code' => 'AL001',
                            'description' => 'Jasa konsultansi terkait pengembangan pemanfaatan ruang untuk optimalisasi fungsi dan nilai ruang.',
                            'details' => [
                                'Analisis dan optimalisasi ruang',
                                'Studi kelayakan pemanfaatan ruang',
                                'Perencanaan tata ruang terintegrasi',
                                'Kajian dampak lingkungan',
                                'Rekomendasi pengembangan kawasan',
                                'Evaluasi pemanfaatan ruang existing'
                            ]
                        ]
                    ],
                    [
                        'code' => 'AL002',
                        'title' => 'Jasa Pengembangan Wilayah',
                        'icon' => 'fas fa-globe-asia',
                        'full_details' => [
                            'title' => 'JASA PENGEMBANGAN WILAYAH',
                            'code' => 'AL002',
                            'description' => 'Jasa perencanaan tata ruang (mencakup darat, laut, udara, dan di dalam bumi) wilayah nasional, pulau, provinsi, kabupaten, dan kota, termasuk juga jasa pengkajian dan jasa penasehatan dalam penataan ruang wilayah yang didalamnya dapat meliputi:',
                            'details' => [
                                'Kawasan koridor nasional/provinsi/kabupaten/kota',
                                'Kawasan andalan',
                                'Kawasan permukiman termasuk ruang terbuka publik/terbuka hijau'
                            ]
                        ]
                    ],
                    [
                        'code' => 'AL003',
                        'title' => 'Jasa Pengembangan Perkotaan',
                        'icon' => 'fas fa-city',
                        'full_details' => [
                            'title' => 'JASA PENGEMBANGAN PERKOTAAN',
                            'code' => 'AL003',
                            'description' => 'Jasa perencanaan tata ruang (mencakup darat, laut, udara, dan di dalam bumi) perkotaan, jasa perancangan bagian perkotaan, termasuk juga jasa pengkajian dan jasa penasehatan dalam penataan ruang perkotaan.',
                            'details' => [
                                'Perencanaan tata ruang perkotaan',
                                'Perancangan bagian perkotaan',
                                'Kajian penataan ruang perkotaan',
                                'Pengembangan kawasan strategis kota',
                                'Analisis kebutuhan infrastruktur kota',
                                'Rencana pengembangan kawasan prioritas'
                            ]
                        ]
                    ],
                    [
                        'code' => 'AL004',
                        'title' => 'Jasa Pengembangan Lingkungan Bangunan dan Lanskap',
                        'icon' => 'fas fa-tree',
                        'full_details' => [
                            'title' => 'JASA PENGEMBANGAN LINGKUNGAN BANGUNAN DAN LANSKAP',
                            'code' => 'AL004',
                            'description' => 'Jasa pembuatan desain dan rencana dari aesthetic landscaping untuk taman, lahan komersial dan lingkungan bangunan.',
                            'details' => [
                                'Desain lanskap untuk taman dan area komersial',
                                'Perencanaan ruang terbuka hijau',
                                'Konsultasi tata lingkungan bangunan',
                                'Pengembangan area rekreasi dan publik',
                                'Desain elemen lanskap (hardscape & softscape)',
                                'Sistem drainase dan irigasi lanskap'
                            ]
                        ]
                    ],

                    // Jasa Konsultansi Lingkungan
                    [
                        'code' => 'KL401',
                        'title' => 'Jasa Konsultansi Lingkungan',
                        'icon' => 'fas fa-recycle',
                        'full_details' => [
                            'title' => 'JASA KONSULTANSI LINGKUNGAN',
                            'code' => 'KL401',
                            'description' => 'Jasa konsultansi yang mencakup kegiatan pengolahan air bersih, penyehatan lingkungan permukiman, serta nasihat pengelolaan persampahan.',
                            'details' => [
                                'Pengolahan air bersih dan sanitasi',
                                'Penyehatan lingkungan permukiman',
                                'Manajemen dan pengelolaan persampahan',
                                'Kajian dampak lingkungan (AMDAL)',
                                'Audit lingkungan',
                                'Sistem pengelolaan limbah'
                            ]
                        ]
                    ]
                ];
            @endphp

            <!-- Services Grid -->
            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card-wrapper h-100">
                            <div class="service-card h-100 position-relative">
                                <!-- Service Badge -->
                                <div class="service-badge position-absolute">
                                    <span class="badge bg-brown-700 text-white px-3 py-2">
                                        {{ $service['code'] }}
                                    </span>
                                </div>

                                <!-- Card Content -->
                                <div class="service-content p-4 h-100 d-flex flex-column">
                                    <!-- Icon -->
                                    <div class="service-icon-wrapper mb-4">
                                        <div class="service-icon-circle bg-brown-100">
                                            <i class="{{ $service['icon'] }} fa-2x text-brown-700"></i>
                                        </div>
                                    </div>

                                    <!-- Title -->
                                    <h3 class="h5 fw-bold text-brown-800 mb-4">{{ $service['title'] }}</h3>

                                    <!-- Card Footer -->
                                    <div class="mt-auto pt-2 border-top border-brown-200">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="availability-status">
                                                <span class="text-success fw-medium small">
                                                    <i class="fas fa-circle-check me-1"></i>Tersedia
                                                </span>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-brown-700 px-3 py-1 rounded-pill detail-btn"
                                                    data-details='@json($service['full_details'])'>
                                                Detail <i class="fas fa-arrow-right ms-1"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-6 py-lg-7 bg-brown-800 position-relative overflow-hidden">
        <div class="container position-relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="display-5 fw-bold text-white mb-3">
                        Siap Mewujudkan Proyek Impian Anda?
                    </h2>
                    <p class="lead text-cream-300 mb-4">
                        Konsultasikan kebutuhan Anda dengan tim ahli kami. Dapatkan solusi terbaik untuk pengembangan tata ruang dan konstruksi.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ route('contact') }}" class="btn btn-lg btn-cream-300 text-brown-800 px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-calendar-check me-2"></i>Jadwalkan Konsultasi
                        </a>
                        <a href="tel:+622112345678" class="btn btn-lg btn-outline-cream-300 text-white px-5 py-3 rounded-pill fw-semibold">
                            <i class="fas fa-phone me-2"></i>+62 21 1234 5678
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end mt-5 mt-lg-0">
                    <div class="cta-illustration position-relative d-inline-block">
                        <div class="illustration-circle bg-brown-700"></div>
                        <i class="fas fa-handshake fa-5x text-cream-300"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Pattern -->
        <div class="cta-pattern"></div>
    </section>
</div>

<!-- Modal for Service Details -->
<div class="modal fade" id="serviceDetailModal" tabindex="-1" aria-labelledby="serviceDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header bg-brown-700 text-white py-4">
                <h5 class="modal-title fw-bold" id="serviceDetailModalLabel">
                    <i class="fas fa-info-circle me-2"></i>Detail Layanan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-cream-50 p-0">
                <div class="row g-0">
                    <div class="col-12 p-5">
                        <div class="mb-3">
                            <span class="badge bg-brown-100 text-brown-700 px-3 py-2" id="modal-service-code"></span>
                        </div>
                        <h3 class="fw-bold text-brown-800 mb-4" id="modal-service-title"></h3>

                        <!-- Full Description -->
                        <div class="text-brown-700 mb-4" id="modal-service-description" style="line-height: 1.7;"></div>

                        <!-- Detailed Points -->
                        <div class="service-details mt-4">
                            <h5 class="text-brown-800 mb-3 fw-semibold">
                                <i class="fas fa-list-check me-2"></i>Rincian Layanan
                            </h5>
                            <div class="ps-3" id="modal-service-details">
                                <!-- Details will be populated by JavaScript -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-cream-100 px-5 py-4">
                <button type="button" class="btn btn-outline-brown-700 px-4 py-2 rounded-pill" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Tutup
                </button>
                <a href="{{ route('contact') }}" class="btn btn-brown-700 px-5 py-2 rounded-pill" id="modal-contact-btn">
                    <i class="fas fa-calendar-alt me-2"></i>Jadwalkan Konsultasi
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
    /* Color System */
    .text-brown-800 { color: #3E2723; }
    .text-brown-700 { color: #5D4037; }
    .text-brown-600 { color: #795548; }
    .text-brown-500 { color: #8D6E63; }

    .bg-brown-800 { background-color: #3E2723; }
    .bg-brown-700 { background-color: #5D4037; }
    .bg-brown-600 { background-color: #795548; }
    .bg-brown-500 { background-color: #8D6E63; }
    .bg-brown-400 { background-color: #A1887F; }
    .bg-brown-300 { background-color: #BCAAA4; }
    .bg-brown-200 { background-color: #D7CCC8; }
    .bg-brown-100 { background-color: #EFEBE9; }

    .text-cream-300 { color: #FFF8E1; }
    .text-cream-200 { color: #FFECB3; }

    .bg-cream-300 { background-color: #FFF8E1; }
    .bg-cream-200 { background-color: #FFECB3; }
    .bg-cream-100 { background-color: #FFFDE7; }
    .bg-cream-50 { background-color: #FFFEF5; }

    .btn-cream-300 {
        background-color: #FFF8E1;
        border-color: #FFF8E1;
        color: #3E2723;
    }

    .btn-cream-300:hover {
        background-color: #FFECB3;
        border-color: #FFECB3;
        color: #3E2723;
    }

    .btn-outline-cream-300 {
        color: #FFF8E1;
        border-color: #FFF8E1;
    }

    .btn-outline-cream-300:hover {
        background-color: #FFF8E1;
        border-color: #FFF8E1;
        color: #3E2723;
    }

    .btn-brown-700 {
        background-color: #5D4037;
        border-color: #5D4037;
        color: white;
    }

    .btn-brown-700:hover {
        background-color: #3E2723;
        border-color: #3E2723;
        color: white;
    }

    .btn-outline-brown-700 {
        color: #5D4037;
        border-color: #5D4037;
    }

    .btn-outline-brown-700:hover {
        background-color: #5D4037;
        border-color: #5D4037;
        color: white;
    }

    /* Hero Section */
    .consulting-hero {
        background: linear-gradient(135deg, #5D4037 0%, #3E2723 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .min-vh-60 {
        min-height: 60vh;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(30, 30, 30, 0.4);
        z-index: 1;
    }

    .hero-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        z-index: 1;
    }

    /* Service Cards */
    .service-card-wrapper {
        perspective: 1000px;
    }

    .service-card {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid #EFEBE9;
        overflow: hidden;
    }

    .service-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 20px 40px rgba(62, 39, 35, 0.15);
    }

    .service-badge {
        top: 20px;
        right: 20px;
        z-index: 2;
    }

    .service-icon-wrapper {
        display: flex;
        justify-content: center;
    }

    .service-icon-circle {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .service-card:hover .service-icon-circle {
        transform: scale(1.1) rotate(5deg);
        background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%);
    }

    .availability-status {
        font-size: 0.85rem;
    }

    /* Decorative Elements */
    .deco-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(93, 64, 55, 0.03);
    }

    .deco-1 {
        width: 300px;
        height: 300px;
        top: -150px;
        right: -150px;
    }

    .deco-2 {
        width: 200px;
        height: 200px;
        bottom: 50px;
        left: -100px;
        background: rgba(255, 248, 225, 0.1);
    }

    .deco-3 {
        width: 150px;
        height: 150px;
        bottom: 100px;
        right: 50px;
        background: rgba(93, 64, 55, 0.05);
    }

    /* CTA Section */
    .cta-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        z-index: 1;
    }

    .cta-illustration {
        padding: 40px;
    }

    .illustration-circle {
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
    }

    .cta-illustration i {
        position: relative;
        z-index: 2;
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
    }

    /* Modal Customization */
    .modal-content {
        border-radius: 20px;
        box-shadow: 0 25px 50px rgba(62, 39, 35, 0.2);
    }

    #modal-service-description {
        max-height: 200px;
        overflow-y: auto;
        padding-right: 10px;
        line-height: 1.7;
    }

    #modal-service-details {
        max-height: 300px;
        overflow-y: auto;
        padding-right: 10px;
    }

    #modal-service-description::-webkit-scrollbar,
    #modal-service-details::-webkit-scrollbar {
        width: 5px;
    }

    #modal-service-description::-webkit-scrollbar-track,
    #modal-service-details::-webkit-scrollbar-track {
        background: #EFEBE9;
    }

    #modal-service-description::-webkit-scrollbar-thumb,
    #modal-service-details::-webkit-scrollbar-thumb {
        background: #5D4037;
        border-radius: 5px;
    }

    .detail-point {
        padding: 0.75rem;
        margin-bottom: 0.5rem;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        border-left: 3px solid #5D4037;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem;
        }

        .display-5 {
            font-size: 2rem;
        }

        .consulting-hero .container {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .cta-illustration {
            padding: 30px;
        }

        .illustration-circle {
            width: 150px;
            height: 150px;
        }

        .cta-illustration i {
            font-size: 3.5rem !important;
        }
    }

    @media (max-width: 576px) {
        .display-3 {
            font-size: 2rem;
        }

        .display-5 {
            font-size: 1.75rem;
        }

        .btn-lg {
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
        }
    }
</style>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap Modal
    const serviceModal = new bootstrap.Modal(document.getElementById('serviceDetailModal'));

    // Handle detail button clicks
    document.querySelectorAll('.detail-btn').forEach(button => {
        button.addEventListener('click', function() {
            const details = JSON.parse(this.getAttribute('data-details'));

            // Update modal content
            document.getElementById('modal-service-code').textContent = details.code;
            document.getElementById('modal-service-title').textContent = details.title;
            document.getElementById('modal-service-description').textContent = details.description;

            // Update details list
            const detailsContainer = document.getElementById('modal-service-details');
            detailsContainer.innerHTML = '';

            if (Array.isArray(details.details)) {
                details.details.forEach(point => {
                    const div = document.createElement('div');
                    div.className = 'detail-point';
                    div.innerHTML = `<i class="fas fa-circle-check text-brown-600 me-2"></i>${point}`;
                    detailsContainer.appendChild(div);
                });
            }

            // Update consultation link
            const contactBtn = document.getElementById('modal-contact-btn');
            const baseUrl = contactBtn.getAttribute('href').split('?')[0];
            contactBtn.setAttribute('href', `${baseUrl}?service=${encodeURIComponent(details.title)}&code=${details.code}`);

            // Show modal
            serviceModal.show();
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Add animation to cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    }, observerOptions);

    // Observe service cards
    document.querySelectorAll('.service-card').forEach(card => {
        observer.observe(card);
    });
});
</script>

<!-- Animate.css for animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

@endsection
