@extends('layouts.app')

@section('title', 'Konsultansi Non-Konstruksi | PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi non-konstruksi profesional meliputi Pengembangan Pertanian, Transportasi, Telematika, Jasa Survey, Studi Penelitian, Manajemen, dan Jasa Khusus.')

@section('content')
<div class="container-fluid p-0">
    <!-- Hero Section -->
    <section class="non-construction-hero py-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('services') }}">Layanan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Konsultansi Non-Konstruksi</li>
                        </ol>
                    </nav>

                    <div class="hero-content mt-4">
                        <div class="service-badge mb-3">
                            <span>KONSULTANSI SPESIALIS</span>
                        </div>
                        <h1 class="display-4 fw-bold text-cream-light mb-4">
                            Konsultansi <span class="text-accent-gold">Non-Konstruksi</span>
                        </h1>
                        <p class="lead text-cream-medium mb-5">
                            Solusi komprehensif untuk berbagai kebutuhan konsultansi di luar bidang konstruksi,
                            memberikan nilai tambah melalui pendekatan inovatif dan berkelanjutan.
                        </p>

                        <div class="hero-stats d-flex flex-wrap gap-4">
                            <div class="stat-item">
                                <div class="stat-number">7</div>
                                <div class="stat-label">Bidang Utama</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">35+</div>
                                <div class="stat-label">Jenis Layanan</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">100%</div>
                                <div class="stat-label">Kepuasan Klien</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="hero-icon">
                        <div class="icon-wrapper">
                            <i class="fas fa-chart-network"></i>
                        </div>
                        <div class="icon-rings">
                            <div class="ring ring-1"></div>
                            <div class="ring ring-2"></div>
                            <div class="ring ring-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section py-7">
        <div class="container">
            <div class="section-header text-center mb-6">
                <div class="section-badge">
                    <span>BIDANG KEAHLIAN</span>
                </div>
                <h2 class="section-title fw-bold text-brown-dark mb-3">Layanan Konsultansi Non-Konstruksi</h2>
                <p class="section-subtitle text-brown-medium">
                    Kami menyediakan berbagai layanan konsultansi profesional untuk mendukung
                    pengembangan dan optimasi bisnis Anda di berbagai sektor.
                </p>
                <div class="section-ornament">
                    <div class="ornament-line"></div>
                    <div class="ornament-diamond"></div>
                    <div class="ornament-line"></div>
                </div>
            </div>

            @php
                $categories = [
                    // PENGEMBANGAN PERTANIAN DAN PEDESAAN
                    [
                        'id' => 1,
                        'category' => 'PENGEMBANGAN PERTANIAN DAN PEDESAAN',
                        'services' => [
                            'Prasarana Sosial Dan Pengembangan / Partisipasi Masyarakat',
                            'Kehutanan',
                            'Perikanan',
                            'Sub-Bidang Pengembangan Pertanian Dan Pedesaan Lainnya'
                        ],
                        'description' => 'Layanan konsultansi pengembangan pertanian dan pedesaan yang berfokus pada pemberdayaan masyarakat, pengelolaan sumber daya alam, dan pembangunan berkelanjutan.',
                        'icon' => 'fas fa-tractor',
                        'color' => 'agriculture',
                        'full_details' => [
                            'title' => 'PENGEMBANGAN PERTANIAN DAN PEDESAAN',
                            'code' => '1.01-32.73-23-0037',
                            'serial' => 'No Seri B21.000773',
                            'description' => 'Layanan konsultansi profesional untuk pengembangan sektor pertanian dan pedesaan dengan pendekatan partisipatif dan berkelanjutan.',
                            'details' => [
                                'Prasarana Sosial Dan Pengembangan / Partisipasi Masyarakat - Pengembangan infrastruktur sosial dan program pemberdayaan masyarakat',
                                'Kehutanan - Konsultansi pengelolaan hutan dan sumber daya kehutanan',
                                'Perikanan - Pengembangan sektor perikanan tangkap dan budidaya',
                                'Sub-Bidang Pengembangan Pertanian Dan Pedesaan Lainnya - Layanan pengembangan pertanian dan pedesaan lainnya'
                            ]
                        ]
                    ],

                    // TRANSPORTASI
                    [
                        'id' => 2,
                        'category' => 'TRANSPORTASI',
                        'services' => [
                            'Pengembangan Sarana Transportasi',
                            'Legislasi/Peraturan Bidang Transportasi',
                            'Usaha Jasa Angkutan',
                            'Sub-bidang Transportasi Lainnya'
                        ],
                        'description' => 'Konsultansi sistem transportasi dan logistik untuk efisiensi distribusi dan mobilitas, mencakup pengembangan sarana, regulasi, dan jasa angkutan.',
                        'icon' => 'fas fa-truck-moving',
                        'color' => 'transport',
                        'full_details' => [
                            'title' => 'TRANSPORTASI',
                            'code' => '1.02-32.73-23-0037',
                            'serial' => 'No Seri B21.000774',
                            'description' => 'Layanan konsultansi profesional di bidang transportasi untuk mendukung pengembangan sistem transportasi yang efisien dan berkelanjutan.',
                            'details' => [
                                'Pengembangan Sarana Transportasi - Perencanaan dan pengembangan sarana transportasi',
                                'Legislasi/Peraturan Bidang Transportasi - Konsultansi regulasi dan kebijakan transportasi',
                                'Usaha Jasa Angkutan - Pengembangan dan optimasi usaha jasa angkutan',
                                'Sub-bidang Transportasi Lainnya - Layanan transportasi lainnya'
                            ]
                        ]
                    ],

                    // TELEMATIKA
                    [
                        'id' => 3,
                        'category' => 'TELEMATIKA',
                        'services' => [
                            'Telekomunikasi Darat',
                            'Telekomunikasi Satelit',
                            'Perangkat Keras',
                            'Konten',
                            'Aplikasi / Perangkat Lunak',
                            'Sub-bidang Telematica Lainnya'
                        ],
                        'description' => 'Konsultansi teknologi telematika dan komunikasi digital untuk transformasi bisnis, mencakup infrastruktur telekomunikasi, perangkat keras, konten, dan aplikasi.',
                        'icon' => 'fas fa-satellite-dish',
                        'color' => 'telematics',
                        'full_details' => [
                            'title' => 'TELEMATIKA',
                            'code' => '1.03-32.73-23-0037',
                            'serial' => 'No Seri B21.000775',
                            'description' => 'Layanan konsultansi profesional di bidang telematika untuk mendukung transformasi digital dan pengembangan infrastruktur telekomunikasi.',
                            'details' => [
                                'Telekomunikasi Darat - Pengembangan dan optimasi jaringan telekomunikasi darat',
                                'Telekomunikasi Satelit - Solusi komunikasi berbasis satelit',
                                'Perangkat Keras - Konsultansi pengadaan dan pengembangan perangkat keras',
                                'Konten - Pengembangan dan manajemen konten digital',
                                'Aplikasi / Perangkat Lunak - Pengembangan aplikasi dan perangkat lunak',
                                'Sub-bidang Telematica Lainnya - Layanan telematika lainnya'
                            ]
                        ]
                    ],

                    // JASA SURVEY
                    [
                        'id' => 4,
                        'category' => 'JASA SURVEY',
                        'services' => [
                            'Survey Terestris',
                            'Penginderaan Jauh / Fotogrametri',
                            'Survey Hidrografi / Batimetri',
                            'Sistem Informasi Geografi',
                            'Survey Registrasi Kepemilikan Tanah / Kadastral',
                            'Survey Geologi dan Geofisika',
                            'Survey Pertanian',
                            'Jasa Survey non Seismik',
                            'Jasa Survey Geologi dan Geofisika (non seismik)'
                        ],
                        'description' => 'Layanan survei dan pemetaan komprehensif untuk berbagai kebutuhan, mulai dari survei terestris hingga survei geologi dan geofisika, didukung dengan teknologi terkini dan tenaga ahli berpengalaman.',
                        'icon' => 'fas fa-map-marked-alt',
                        'color' => 'survey',
                        'full_details' => [
                            'title' => 'JASA SURVEY',
                            'code' => '1.SSI-32.73-23-0037',
                            'serial' => 'No Seri L21.000981',
                            'description' => 'Layanan survei profesional yang mencakup berbagai metode dan teknik survei untuk mendukung pengambilan keputusan yang akurat dan tepat.',
                            'details' => [
                                'Survey Terestris - Pengukuran dan pemetaan permukaan bumi dengan metode terestris',
                                'Penginderaan Jauh / Fotogrametri - Analisis data citra satelit dan foto udara',
                                'Survey Hidrografi / Batimetri - Pemetaan dasar perairan dan kedalaman laut',
                                'Sistem Informasi Geografi - Pengelolaan dan analisis data spasial',
                                'Survey Registrasi Kepemilikan Tanah / Kadastral - Pemetaan batas-batas kepemilikan tanah',
                                'Survey Geologi dan Geofisika - Investigasi kondisi geologi dan geofisika',
                                'Survey Pertanian - Pemetaan lahan pertanian dan analisis kesesuaian lahan',
                                'Jasa Survey non Seismik - Survei dengan metode non-seismik',
                                'Jasa Survey Geologi dan Geofisika (non seismik) - Survei geologi dan geofisika dengan metode non-seismik'
                            ]
                        ]
                    ],

                    // JASA STUDI PENELITIAN DAN BANTUAN TEKNIS
                    [
                        'id' => 5,
                        'category' => 'JASA STUDI PENELITIAN DAN BANTUAN TEKNIS',
                        'services' => [
                            'Studi Makro',
                            'Studi Kelayakan & Studi Mikro Lainnya',
                            'Studi Perencanaan Umum',
                            'Jasa Penelitian',
                            'Jasa Bantuan Teknik'
                        ],
                        'description' => 'Layanan studi dan penelitian komprehensif untuk mendukung perencanaan dan pengambilan keputusan, serta bantuan teknis dalam implementasi proyek.',
                        'icon' => 'fas fa-microscope',
                        'color' => 'research',
                        'full_details' => [
                            'title' => 'JASA STUDI PENELITIAN DAN BANTUAN TEKNIS',
                            'code' => '1.SI-32.73-23-0037',
                            'serial' => 'No Seri L21.000980',
                            'description' => 'Layanan studi dan penelitian profesional untuk berbagai kebutuhan, dari studi makro hingga bantuan teknis dalam implementasi proyek.',
                            'details' => [
                                'Studi Makro - Analisis dan kajian pada tingkat makro (regional/nasional)',
                                'Studi Kelayakan & Studi Mikro Lainnya - Analisis kelayakan proyek dan studi pada tingkat mikro',
                                'Studi Perencanaan Umum - Perencanaan strategis dan operasional',
                                'Jasa Penelitian - Penelitian mendalam untuk berbagai bidang',
                                'Jasa Bantuan Teknik - Pendampingan dan bantuan teknis dalam implementasi'
                            ]
                        ]
                    ],

                    // JASA KONSULTANSI MANAJEMEN
                    [
                        'id' => 6,
                        'category' => 'JASA KONSULTANSI MANAJEMEN',
                        'services' => [
                            'Perencanaan Sistem Akuntansi',
                            'Pelatihan dan Pengembangan SDM',
                            'Konsultasi Manajemen Fungsional',
                            'Konsultasi Hukum Bisnis'
                        ],
                        'description' => 'Layanan konsultansi manajemen untuk meningkatkan efisiensi operasional, mengoptimalkan sumber daya manusia, dan memastikan kepatuhan hukum dalam bisnis Anda.',
                        'icon' => 'fas fa-briefcase',
                        'color' => 'management',
                        'full_details' => [
                            'title' => 'JASA KONSULTANSI MANAJEMEN',
                            'code' => '1.MS-32.73-23-0037',
                            'serial' => 'No Seri L21.000978',
                            'description' => 'Layanan konsultansi manajemen profesional untuk mendukung pengembangan dan optimasi bisnis Anda.',
                            'details' => [
                                'Perencanaan Sistem Akuntansi - Desain dan implementasi sistem akuntansi yang efektif',
                                'Pelatihan dan Pengembangan SDM - Program pelatihan untuk meningkatkan kompetensi sumber daya manusia',
                                'Konsultasi Manajemen Fungsional - Konsultasi untuk berbagai fungsi manajemen',
                                'Konsultasi Hukum Bisnis - Pendampingan dan konsultasi aspek hukum dalam bisnis'
                            ]
                        ]
                    ],

                    // JASA KHUSUS
                    [
                        'id' => 7,
                        'category' => 'JASA KHUSUS',
                        'services' => [
                            'Jasa Teknologi dan Sistem Informasi',
                            'Jasa Penilai / Appraisal / Valuer',
                            'Jasa Surveyor Independen',
                            'Jasa Sertifikasi',
                            'Jasa Inspeksi Teknik',
                            'Jasa Kehutanan'
                        ],
                        'description' => 'Layanan khusus yang disesuaikan dengan kebutuhan unik klien, mencakup berbagai bidang dari teknologi informasi hingga penilaian aset dan inspeksi teknik.',
                        'icon' => 'fas fa-star',
                        'color' => 'special',
                        'full_details' => [
                            'title' => 'JASA KHUSUS',
                            'code' => '1.SC-32.73-23-0037',
                            'serial' => 'No Seri L21.000979',
                            'description' => 'Layanan khusus yang dirancang untuk memenuhi kebutuhan spesifik klien di berbagai bidang.',
                            'details' => [
                                'Jasa Teknologi dan Sistem Informasi - Pengembangan dan implementasi solusi TI',
                                'Jasa Penilai / Appraisal / Valuer - Penilaian aset dan properti',
                                'Jasa Surveyor Independen - Survei independen untuk verifikasi',
                                'Jasa Sertifikasi - Layanan sertifikasi untuk berbagai kebutuhan',
                                'Jasa Inspeksi Teknik - Inspeksi dan evaluasi teknis',
                                'Jasa Kehutanan - Konsultansi dan pengelolaan sumber daya hutan'
                            ]
                        ]
                    ]
                ];
            @endphp

            <!-- Baris kategori - 7 kartu -->
            <div class="row g-4">
                @foreach($categories as $index => $category)
                    <div class="col-lg-4 col-md-6">
                        <div class="category-card animate-on-scroll" data-delay="{{ $index * 100 }}">
                            <div class="category-header">
                                <div class="category-icon category-{{ $category['color'] }}">
                                    <i class="{{ $category['icon'] }}"></i>
                                </div>
                                <div class="category-number">0{{ $index + 1 }}</div>
                            </div>
                            <div class="category-body">
                                <h3 class="category-title">{{ $category['category'] }}</h3>
                                <div class="services-list">
                                    @foreach(array_slice($category['services'], 0, 3) as $service)
                                    <div class="service-item">
                                        <div class="service-dot"></div>
                                        <span class="service-name">{{ $service }}</span>
                                    </div>
                                    @endforeach
                                    @if(count($category['services']) > 3)
                                    <div class="more-services">
                                        +{{ count($category['services']) - 3 }} layanan lainnya
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="category-footer">
                                <button type="button" class="btn-category-detail" data-bs-toggle="modal" data-bs-target="#categoryModal{{ $category['id'] }}">
                                    <span>Lihat Detail</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section py-7">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="why-choose-content">
                        <div class="section-badge">
                            <span>KEUNGGULAN KAMI</span>
                        </div>
                        <h2 class="section-title fw-bold text-cream-light mb-4">
                            Mengapa Memilih Layanan Konsultansi Non-Konstruksi Kami?
                        </h2>
                        <p class="text-cream-medium mb-5">
                            Dengan pengalaman bertahun-tahun dan tim ahli yang berdedikasi,
                            kami memberikan solusi konsultansi yang tepat dan efektif untuk
                            kebutuhan bisnis Anda di berbagai sektor non-konstruksi.
                        </p>

                        <div class="features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Tim Ahli Multi-Disiplin</h5>
                                    <p>Didukung oleh profesional dari berbagai bidang keahlian</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Solusi Terintegrasi</h5>
                                    <p>Pendekatan holistik yang mencakup berbagai aspek kebutuhan</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Pendekatan Personal</h5>
                                    <p>Setiap klien mendapatkan solusi yang disesuaikan dengan kebutuhan spesifik</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Efisiensi dan Ketepatan</h5>
                                    <p>Proses kerja terstruktur untuk hasil yang cepat dan akurat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose-image text-center">
                        <div class="image-wrapper">
                            <div class="main-image">
                                <div class="image-overlay"></div>
                            </div>
                            <div class="floating-element element-1">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="floating-element element-2">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="floating-element element-3">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-7">
        <div class="container">
            <div class="cta-card">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h3 class="cta-title text-cream-light mb-3">
                            Siap Mengembangkan Bisnis Anda?
                        </h3>
                        <p class="cta-description text-cream-medium mb-0">
                            Konsultasikan kebutuhan Anda dengan tim ahli kami dan
                            dapatkan solusi terbaik untuk pengembangan bisnis Anda.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="{{ route('contact') }}" class="btn btn-cream btn-lg rounded-pill px-5">
                            <i class="fas fa-calendar-check me-2"></i>Jadwalkan Konsultasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal untuk Detail Kategori -->
@foreach($categories as $category)
<div class="modal fade" id="categoryModal{{ $category['id'] }}" tabindex="-1" aria-labelledby="categoryModalLabel{{ $category['id'] }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content category-modal">
            <div class="modal-header">
                <div class="modal-icon category-{{ $category['color'] }}">
                    <i class="{{ $category['icon'] }}"></i>
                </div>
                <div class="modal-title-container">
                    <h5 class="modal-title" id="categoryModalLabel{{ $category['id'] }}">{{ $category['full_details']['title'] }}</h5>
                    <div class="modal-subtitle">
                        <span class="badge bg-accent-gold text-brown-dark me-2">{{ $category['full_details']['code'] }}</span>
                        <span class="badge bg-brown-medium text-cream-light">{{ $category['full_details']['serial'] }}</span>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-description">
                    <p>{{ $category['full_details']['description'] }}</p>
                </div>

                <div class="modal-services">
                    <h6>Rincian Layanan:</h6>
                    <div class="services-grid">
                        @foreach($category['full_details']['details'] as $detail)
                        <div class="service-item-modal">
                            <div class="service-icon-modal">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="service-text">{{ $detail }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="modal-location mt-4">
                    <h6>Butuh Konsultasi?</h6>
                    <p class="text-brown-medium mb-3">Isi lokasi proyek Anda untuk mendapatkan rekomendasi layanan yang sesuai.</p>
                    <div class="location-input">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Masukkan lokasi proyek Anda" aria-label="Lokasi Proyek">
                            <button class="btn btn-location" type="button">
                                <i class="fas fa-map-marker-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-brown" data-bs-dismiss="modal">Tutup</button>
                <a href="{{ route('contact') }}?service={{ urlencode($category['category']) }}" class="btn btn-brown">
                    <i class="fas fa-phone-alt me-2"></i>Hubungi Konsultan
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- CSS Tambahan untuk Modal -->
<style>
    .badge.bg-accent-gold {
        background: linear-gradient(135deg, #D4AF37, #F0E68C);
        color: #3E2723;
        padding: 0.35rem 0.75rem;
        border-radius: 20px;
        font-weight: 500;
    }

    .badge.bg-brown-medium {
        background: #795548;
        color: #F5F0E6;
        padding: 0.35rem 0.75rem;
        border-radius: 20px;
        font-weight: 500;
    }

    .modal-subtitle {
        display: flex;
        gap: 0.5rem;
        margin-top: 0.5rem;
        flex-wrap: wrap;
    }

    .category-modal .modal-header {
        background: linear-gradient(135deg, #5D4037, #3E2723);
    }

    .modal-location p {
        font-size: 0.9rem;
        line-height: 1.5;
    }

    .services-grid {
        max-height: 400px;
        overflow-y: auto;
        padding-right: 0.5rem;
    }

    .services-grid::-webkit-scrollbar {
        width: 5px;
    }

    .services-grid::-webkit-scrollbar-track {
        background: #EFEBE9;
        border-radius: 10px;
    }

    .services-grid::-webkit-scrollbar-thumb {
        background: #5D4037;
        border-radius: 10px;
    }

    .service-item-modal {
        background: white;
        border: 1px solid #EFEBE9;
        transition: all 0.3s ease;
    }

    .service-item-modal:hover {
        background: #F5F0E6;
        border-color: #D4AF37;
        transform: translateX(5px);
    }
</style>

@endsection

@push('styles')
<style>
    /* Color Variables */
    :root {
        /* Brown Shades */
        --brown-50: #EFEBE9;
        --brown-100: #D7CCC8;
        --brown-200: #BCAAA4;
        --brown-300: #A1887F;
        --brown-400: #8D6E63;
        --brown-500: #795548;
        --brown-600: #6D4C41;
        --brown-700: #5D4037;
        --brown-800: #4E342E;
        --brown-900: #3E2723;

        /* Cream Shades */
        --cream-50: #FFFDF7;
        --cream-100: #F9F5EB;
        --cream-200: #F5F0E6;
        --cream-300: #EEE6D9;
        --cream-400: #E8DCCE;
        --cream-500: #E3D6C6;
        --cream-600: #DDCFBD;
        --cream-700: #D7C8B4;
        --cream-800: #D2C1AB;
        --cream-900: #CCBAA2;

        /* Accent Colors - New Colors untuk kategori tambahan */
        --accent-agriculture: #2E7D32;
        --accent-agriculture-light: #4CAF50;
        --accent-transport: #1565C0;
        --accent-transport-light: #2196F3;
        --accent-telematics: #6A1B9A;
        --accent-telematics-light: #9C27B0;
        --accent-gold: #D4AF37;
        --accent-gold-light: #F0E68C;
        --accent-teal: #00695C;
        --accent-orange: #EF6C00;
        --accent-red: #C62828;

        /* Theme Colors */
        --brown-light: var(--brown-300);
        --brown-medium: var(--brown-500);
        --brown-dark: var(--brown-700);
        --cream-light: var(--cream-100);
        --cream-medium: var(--cream-300);
        --cream-dark: var(--cream-500);
    }

    /* Hero Section */
    .non-construction-hero {
        background: linear-gradient(135deg,
            rgba(62, 39, 35, 0.95) 0%,
            rgba(93, 64, 55, 0.9) 50%,
            rgba(121, 85, 72, 0.85) 100%);
        color: var(--cream-light);
        padding: 6rem 0 4rem;
        position: relative;
        overflow: hidden;
    }

    .non-construction-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 70% 30%, rgba(212, 175, 55, 0.15) 0%, transparent 70%);
        pointer-events: none;
    }

    .breadcrumb-custom {
        background: transparent;
        padding: 0;
        margin: 0;
    }

    .breadcrumb-custom .breadcrumb-item a {
        color: var(--cream-medium);
        text-decoration: none;
        font-size: 0.9rem;
        transition: color 0.3s ease;
    }

    .breadcrumb-custom .breadcrumb-item a:hover {
        color: var(--accent-gold-light);
    }

    .breadcrumb-custom .breadcrumb-item.active {
        color: var(--accent-gold-light);
        font-weight: 500;
    }

    .service-badge {
        display: inline-block;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-light));
        color: var(--cream-light);
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 1rem;
        box-shadow: 0 4px 12px rgba(212, 175, 55, 0.2);
    }

    .hero-content h1 {
        font-size: 3rem;
        line-height: 1.2;
    }

    .hero-content .lead {
        font-size: 1.25rem;
        line-height: 1.6;
        max-width: 600px;
    }

    .hero-stats {
        margin-top: 2rem;
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--accent-gold);
        line-height: 1;
    }

    .stat-label {
        font-size: 0.9rem;
        color: var(--cream-medium);
        margin-top: 0.25rem;
    }

    .hero-icon {
        position: relative;
        width: 200px;
        height: 200px;
        margin: 0 auto;
    }

    .icon-wrapper {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-medium));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 5rem;
        position: relative;
        z-index: 2;
        box-shadow: 0 20px 40px rgba(62, 39, 35, 0.3);
    }

    .icon-rings {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 240px;
        height: 240px;
    }

    .ring {
        position: absolute;
        border: 2px solid rgba(212, 175, 55, 0.3);
        border-radius: 50%;
        animation: pulse 3s ease-in-out infinite;
    }

    .ring-1 {
        width: 100%;
        height: 100%;
        animation-delay: 0s;
    }

    .ring-2 {
        width: 120%;
        height: 120%;
        top: -10%;
        left: -10%;
        animation-delay: 1s;
    }

    .ring-3 {
        width: 140%;
        height: 140%;
        top: -20%;
        left: -20%;
        animation-delay: 2s;
    }

    /* Categories Section */
    .categories-section {
        background: var(--cream-light);
    }

    .section-header {
        position: relative;
        padding-bottom: 2rem;
    }

    .section-badge {
        display: inline-block;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-light));
        color: var(--cream-light);
        padding: 0.5rem 1.5rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 1rem;
        box-shadow: 0 4px 12px rgba(212, 175, 55, 0.2);
    }

    .section-title {
        font-size: 2.5rem;
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0.5rem;
    }

    .section-subtitle {
        color: var(--brown-medium);
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto;
    }

    .section-ornament {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        margin-top: 1.5rem;
    }

    .ornament-line {
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, var(--brown-light), var(--accent-gold), var(--brown-light));
    }

    .ornament-diamond {
        width: 12px;
        height: 12px;
        background: var(--accent-gold);
        transform: rotate(45deg);
    }

    /* Category Cards */
    .category-card {
        background: var(--cream-light);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.1);
        border: 1px solid var(--cream-dark);
        transition: all 0.4s ease;
        height: 100%;
        opacity: 0;
        transform: translateY(20px);
    }

    .category-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(62, 39, 35, 0.15);
        border-color: var(--brown-light);
    }

    .category-header {
        padding: 1.5rem 1.5rem 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .category-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.5rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Category Icon Colors */
    .category-agriculture {
        background: linear-gradient(135deg, var(--accent-agriculture), var(--accent-agriculture-light));
    }

    .category-transport {
        background: linear-gradient(135deg, var(--accent-transport), var(--accent-transport-light));
    }

    .category-telematics {
        background: linear-gradient(135deg, var(--accent-telematics), var(--accent-telematics-light));
    }

    .category-survey {
        background: linear-gradient(135deg, var(--accent-teal), #009688);
    }

    .category-research {
        background: linear-gradient(135deg, var(--accent-orange), #FF9800);
    }

    .category-management {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
    }

    .category-special {
        background: linear-gradient(135deg, var(--accent-red), #F44336);
    }

    .category-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--brown-light);
        opacity: 0.3;
        line-height: 1;
    }

    .category-body {
        padding: 1.5rem;
    }

    .category-title {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.25rem;
        line-height: 1.3;
        min-height: 60px;
    }

    .services-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        min-height: 140px;
    }

    .service-item {
        display: flex;
        align-items: flex-start;
        gap: 0.75rem;
    }

    .service-dot {
        width: 8px;
        height: 8px;
        background: var(--accent-gold);
        border-radius: 50%;
        margin-top: 0.5rem;
        flex-shrink: 0;
    }

    .service-name {
        color: var(--brown-medium);
        font-size: 0.9rem;
        line-height: 1.4;
        flex: 1;
    }

    .more-services {
        color: var(--brown-light);
        font-size: 0.85rem;
        font-style: italic;
        margin-top: 0.5rem;
        padding-left: 1.5rem;
    }

    .category-footer {
        padding: 1.5rem;
        padding-top: 0;
        border-top: 1px solid var(--cream-dark);
    }

    .btn-category-detail {
        background: none;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--brown-medium);
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
        transition: all 0.3s ease;
        cursor: pointer;
        padding: 0;
    }

    .btn-category-detail:hover {
        color: var(--accent-gold);
        gap: 0.75rem;
    }

    /* Modal Styles */
    .category-modal {
        border-radius: 15px;
        border: 2px solid var(--cream-dark);
        overflow: hidden;
    }

    .category-modal .modal-header {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        color: var(--cream-light);
        border-bottom: 2px solid var(--cream-dark);
        padding: 1.5rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .category-modal .modal-icon {
        width: 60px;
        height: 60px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .modal-title-container {
        flex: 1;
    }

    .category-modal .modal-title {
        color: var(--cream-light);
        font-weight: 600;
        margin: 0;
        font-size: 1.5rem;
    }

    .modal-subtitle {
        color: var(--accent-gold-light);
        font-size: 0.9rem;
        margin-top: 0.25rem;
    }

    .category-modal .btn-close {
        background: transparent;
        border: none;
        font-size: 1.25rem;
        color: var(--cream-light);
        opacity: 0.8;
    }

    .category-modal .btn-close:hover {
        opacity: 1;
    }

    .category-modal .modal-body {
        padding: 2rem;
        background: var(--cream-light);
    }

    .modal-description {
        margin-bottom: 2rem;
    }

    .modal-description p {
        color: var(--brown-medium);
        line-height: 1.6;
        margin: 0;
    }

    .modal-services h6 {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 1rem;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 0.75rem;
        margin-bottom: 2rem;
    }

    .service-item-modal {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem;
        background: var(--cream-light);
        border: 1px solid var(--cream-dark);
        border-radius: 8px;
    }

    .service-icon-modal {
        color: var(--accent-gold);
        font-size: 1rem;
        flex-shrink: 0;
    }

    .service-text {
        color: var(--brown-medium);
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .modal-location h6 {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.75rem;
    }

    .location-input .form-control {
        border: 1px solid var(--cream-dark);
        border-radius: 8px 0 0 8px;
        padding: 0.75rem 1rem;
        color: var(--brown-medium);
    }

    .location-input .form-control:focus {
        border-color: var(--accent-gold);
        box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
    }

    .btn-location {
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-light));
        color: var(--cream-light);
        border: 1px solid var(--accent-gold);
        border-radius: 0 8px 8px 0;
        padding: 0.75rem 1rem;
    }

    .category-modal .modal-footer {
        background: var(--cream-light);
        border-top: 1px solid var(--cream-dark);
        padding: 1.5rem 2rem;
        gap: 1rem;
    }

    .btn-outline-brown {
        background: transparent;
        border: 2px solid var(--brown-medium);
        color: var(--brown-medium);
        padding: 0.5rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-outline-brown:hover {
        background: var(--brown-medium);
        color: var(--cream-light);
    }

    .btn-brown {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border: 2px solid var(--brown-medium);
        color: var(--cream-light);
        padding: 0.5rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-brown:hover {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        color: var(--cream-light);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(62, 39, 35, 0.2);
    }

    /* Why Choose Us Section */
    .why-choose-section {
        background: linear-gradient(135deg,
            rgba(62, 39, 35, 0.95) 0%,
            rgba(93, 64, 55, 0.9) 100%);
        color: var(--cream-light);
        position: relative;
        overflow: hidden;
    }

    .why-choose-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="2"/></svg>');
        background-size: 200px;
        opacity: 0.5;
    }

    .why-choose-content {
        position: relative;
        z-index: 2;
    }

    .features-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
        margin-top: 2rem;
    }

    .feature-item {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
    }

    .feature-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-light));
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .feature-content h5 {
        color: var(--cream-light);
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .feature-content p {
        color: var(--cream-medium);
        font-size: 0.9rem;
        margin: 0;
    }

    .why-choose-image {
        position: relative;
        z-index: 2;
    }

    .image-wrapper {
        position: relative;
        width: 100%;
        height: 400px;
    }

    .main-image {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(212, 175, 55, 0.1), rgba(121, 85, 72, 0.2));
        border-radius: 20px;
        position: relative;
        overflow: hidden;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M0,0 Q50,20 100,0 V100 Q50,80 0,100 Z" fill="rgba(255,255,255,0.05)"/></svg>');
        background-size: cover;
    }

    .floating-element {
        position: absolute;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-light));
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.5rem;
        box-shadow: 0 10px 20px rgba(62, 39, 35, 0.3);
        animation: float 6s ease-in-out infinite;
    }

    .element-1 {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .element-2 {
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }

    .element-3 {
        bottom: 20%;
        left: 20%;
        animation-delay: 4s;
    }

    /* CTA Section */
    .cta-section {
        background: var(--cream-light);
    }

    .cta-card {
        background: linear-gradient(135deg,
            rgba(93, 64, 55, 0.95) 0%,
            rgba(121, 85, 72, 0.9) 100%);
        border-radius: 20px;
        padding: 3rem;
        position: relative;
        overflow: hidden;
    }

    .cta-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="2"/></svg>');
        background-size: 200px;
        opacity: 0.5;
    }

    .cta-title {
        font-size: 1.75rem;
        font-weight: 600;
        position: relative;
        z-index: 2;
    }

    .cta-description {
        font-size: 1.1rem;
        position: relative;
        z-index: 2;
    }

    .btn-cream {
        background: linear-gradient(135deg, var(--cream-light), var(--cream-medium));
        color: var(--brown-dark);
        border: 2px solid var(--cream-dark);
        font-weight: 600;
        padding: 0.75rem 2rem;
        transition: all 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .btn-cream:hover {
        background: linear-gradient(135deg, var(--cream-light), var(--accent-gold-light));
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(62, 39, 35, 0.2);
        border-color: var(--accent-gold);
    }

    /* Animations */
    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        100% {
            transform: scale(1.2);
            opacity: 0;
        }
    }

    /* Responsive Design */
    @media (max-width: 1200px) {
        .hero-content h1 {
            font-size: 2.5rem;
        }

        .section-title {
            font-size: 2.2rem;
        }
    }

    @media (max-width: 992px) {
        .non-construction-hero {
            padding: 4rem 0 2.5rem;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }

        .hero-content .lead {
            font-size: 1.1rem;
        }

        .hero-icon {
            width: 150px;
            height: 150px;
            margin-top: 2rem;
        }

        .icon-wrapper {
            font-size: 4rem;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .category-card {
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 768px) {
        .hero-content h1 {
            font-size: 1.8rem;
        }

        .hero-stats {
            gap: 2rem;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .section-title {
            font-size: 1.6rem;
        }

        .cta-card {
            padding: 2rem;
        }

        .cta-title {
            font-size: 1.5rem;
        }

        .btn-cream {
            width: 100%;
            max-width: 250px;
            margin: 0 auto;
        }

        .category-title {
            min-height: auto;
        }

        .services-list {
            min-height: auto;
        }
    }

    @media (max-width: 576px) {
        .hero-content h1 {
            font-size: 1.6rem;
        }

        .service-badge {
            font-size: 0.7rem;
            padding: 0.4rem 1rem;
        }

        .hero-content .lead {
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.4rem;
        }

        .section-subtitle {
            font-size: 0.95rem;
        }

        .cta-card .row {
            text-align: center;
        }

        .cta-card .col-lg-4 {
            margin-top: 1.5rem;
        }

        .category-modal .modal-body {
            padding: 1.5rem;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    const delay = element.getAttribute('data-delay') || 0;

                    setTimeout(() => {
                        element.classList.add('visible');
                    }, parseInt(delay));
                }
            });
        }, observerOptions);

        // Observe all elements with animation class
        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });

        // Hover effects for category cards
        const categoryCards = document.querySelectorAll('.category-card');
        categoryCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.category-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });

            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.category-icon');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0)';
                }
            });
        });

        // Initialize modals
        const categoryModals = document.querySelectorAll('.category-modal');
        categoryModals.forEach(modal => {
            modal.addEventListener('shown.bs.modal', function() {
                const modalTitle = this.querySelector('.modal-title');
                console.log('Modal opened:', modalTitle.textContent);
            });
        });
    });
</script>
@endpush
