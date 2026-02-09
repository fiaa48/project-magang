@extends('layouts.app')

@section('title', 'Konsultansi Non-Konstruksi')

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
                                <div class="stat-number">7+</div>
                                <div class="stat-label">Bidang Keahlian</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">30+</div>
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
                    [
                        'id' => 1,
                        'category' => 'Pengembangan Pertanian dan Pedesaan',
                        'services' => [
                            'Penerapan Social-Care, Pengembangan / Pedesaan Manuskrip',
                            'Kesehatan',
                            'Pelayanan',
                            'Sakit-Sakit yang Penghasilnya Pedesaan Dan Pedesaan Lainnya'
                        ],
                        'description' => 'Konsultansi pengembangan pertanian dan pedesaan dengan fokus pada pemberdayaan masyarakat, kesehatan lingkungan, dan pengembangan berkelanjutan.',
                        'icon' => 'fas fa-tractor',
                        'color' => 'agriculture'
                    ],
                    [
                        'id' => 2,
                        'category' => 'Transportasi',
                        'services' => [
                            'Pengembangan Sistem Transportasi',
                            'Logistik dan Jasa Belanja Terapese',
                            'Usaha Jasa Logistik',
                            'Soalings Tersedia (pemilik Lainnya)'
                        ],
                        'description' => 'Konsultansi sistem transportasi dan logistik untuk efisiensi distribusi dan mobilitas.',
                        'icon' => 'fas fa-truck-moving',
                        'color' => 'transport'
                    ],
                    [
                        'id' => 3,
                        'category' => 'Telemadia',
                        'services' => [
                            'Telemadias Cari',
                            'Telemadias Ganti',
                            'Penggantian',
                            'Online / Penggantian Lainnya',
                            'Daftar Telemadias Lainnya'
                        ],
                        'description' => 'Konsultansi teknologi telematika dan komunikasi digital untuk transformasi bisnis.',
                        'icon' => 'fas fa-satellite-dish',
                        'color' => 'telematics'
                    ],
                    [
                        'id' => 4,
                        'category' => 'Jasa Bursy',
                        'services' => [
                            'Suara Testesi',
                            'Pengadaan Jasa / Tanggapan',
                            'Suara Informasi / Sistem',
                            'Sistem Informasi',
                            'Suara Informasi / Pengadaan Tekstil / Industri',
                            'Suara Informasi / Sistem',
                            'Suara Informasi / Sistem',
                            'Jasa Bursy dan Sistem',
                            'Jasa Bursy / Sistem dan Gerbong (non-merek)'
                        ],
                        'description' => 'Layanan survei dan analisis data untuk mendukung pengambilan keputusan strategis.',
                        'icon' => 'fas fa-map-marked-alt',
                        'color' => 'survey'
                    ],
                    [
                        'id' => 5,
                        'category' => 'Jasa Studi, Pemilihan dan Berhutan Teknik',
                        'services' => [
                            'Studi Teknik',
                            'Studi Pengajuan & Studi Teknik Lainnya',
                            'Studi Pengajuan & Studi Teknik',
                            'Jasa Pembelian Lainnya',
                            'Jasa Berhutan Teknik'
                        ],
                        'description' => 'Konsultansi studi kelayakan, penelitian, dan bantuan teknis untuk proyek-proyek strategis.',
                        'icon' => 'fas fa-microscope',
                        'color' => 'research'
                    ],
                    [
                        'id' => 6,
                        'category' => 'Jasa Konsultan Manajemen',
                        'services' => [
                            'Perencanaan Sistem Automat',
                            'Perencanaan dan Pengurusan SCM',
                            'Kontrol Sistem Manajemen Pengurusan',
                            'Kontrol Sistem Bisnis'
                        ],
                        'description' => 'Konsultansi manajemen untuk meningkatkan efisiensi operasional dan strategi bisnis.',
                        'icon' => 'fas fa-briefcase',
                        'color' => 'management'
                    ],
                    [
                        'id' => 7,
                        'category' => 'Jasa Khusus',
                        'services' => [
                            'Jasa Teknologi dan Sistem Informasi',
                            'Jasa Penilai / Appraisal / Valuer',
                            'Jasa Surveyor Independen',
                            'Jasa Sertifikasi',
                            'Jasa Inspeksi Teknik',
                            'Jasa Kehumasan'
                        ],
                        'description' => 'Layanan khusus yang disesuaikan dengan kebutuhan unik klien.',
                        'icon' => 'fas fa-star',
                        'color' => 'special'
                    ],
                ];
            @endphp

            <!-- Baris pertama: 4 kartu -->
            <div class="row g-4 mb-4">
                @foreach($categories as $index => $category)
                    @if($index < 4)
                    <div class="col-lg-3 col-md-6">
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
                    @endif
                @endforeach
            </div>

            <!-- Baris kedua: 3 kartu di tengah -->
            <div class="row g-4 justify-content-center">
                @foreach($categories as $index => $category)
                    @if($index >= 4)
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
                    @endif
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
                            Mengapa Memilih Layanan Konsultansi Kami?
                        </h2>
                        <p class="text-cream-medium mb-5">
                            Dengan pengalaman bertahun-tahun dan tim ahli yang berdedikasi, 
                            kami memberikan solusi konsultansi yang tepat dan efektif untuk 
                            kebutuhan bisnis Anda.
                        </p>
                        
                        <div class="features-grid">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Tim Ahli Berpengalaman</h5>
                                    <p>Didukung oleh profesional dengan pengalaman di berbagai sektor industri</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Solusi Inovatif</h5>
                                    <p>Pendekatan kreatif dan solusi yang sesuai dengan perkembangan zaman</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Pendekatan Personal</h5>
                                    <p>Setiap klien mendapatkan perhatian khusus dan solusi yang disesuaikan</p>
                                </div>
                            </div>
                            
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Efisiensi Waktu</h5>
                                    <p>Proses kerja yang terstruktur untuk hasil yang cepat dan tepat</p>
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
                    <h5 class="modal-title" id="categoryModalLabel{{ $category['id'] }}">{{ $category['category'] }}</h5>
                    <div class="modal-subtitle">Konsultansi Non-Konstruksi</div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-description">
                    <p>{{ $category['description'] }}</p>
                </div>
                <div class="modal-services">
                    <h6>Layanan yang Tersedia:</h6>
                    <div class="services-grid">
                        @foreach($category['services'] as $service)
                        <div class="service-item-modal">
                            <div class="service-icon-modal">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="service-text">{{ $service }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="modal-location">
                    <h6>Lokasi:</h6>
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
                <a href="{{ route('contact') }}" class="btn btn-brown">
                    <i class="fas fa-phone-alt me-2"></i>Hubungi Konsultan
                </a>
            </div>
        </div>
    </div>
</div>
@endforeach
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
        
        /* Accent Colors */
        --accent-gold: #D4AF37;
        --accent-gold-light: #F0E68C;
        --accent-green: #2E7D32;
        --accent-blue: #1565C0;
        --accent-purple: #6A1B9A;
        --accent-orange: #EF6C00;
        --accent-teal: #00695C;
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
        background: linear-gradient(135deg, var(--accent-green), #4CAF50);
    }

    .category-transport {
        background: linear-gradient(135deg, var(--accent-blue), #2196F3);
    }

    .category-telematics {
        background: linear-gradient(135deg, var(--accent-purple), #9C27B0);
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
    }

    .services-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
        min-height: 120px;
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
        
        .category-card .col-lg-3 {
            flex: 0 0 50%;
            max-width: 50%;
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
        
        .category-card .col-lg-3 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        
        .category-card .col-lg-4 {
            flex: 0 0 100%;
            max-width: 100%;
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
        
        .category-card .col-lg-3 {
            flex: 0 0 100%;
            max-width: 100%;
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