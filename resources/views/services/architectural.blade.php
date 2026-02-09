@extends('layouts.app')

@section('title', 'Jasa Arsitektural - PT Mitra Nusa Konsulindo')

@section('content')
<div class="container-fluid p-0">
    <!-- Hero Section -->
    <section class="architectural-hero py-6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-custom">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('services') }}">Layanan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jasa Arsitektural</li>
                        </ol>
                    </nav>
                    
                    <div class="hero-content mt-4">
                        <div class="service-badge mb-3">
                            <span>DESAIN & ARSITEKTUR</span>
                        </div>
                        <h1 class="display-4 fw-bold text-cream-light mb-4">
                            Jasa <span class="text-accent-gold">Arsitektural</span>
                        </h1>
                        <p class="lead text-cream-medium mb-5">
                            Solusi desain arsitektural yang inovatif dan berkelanjutan, 
                            menggabungkan estetika, fungsionalitas, dan keberlanjutan 
                            untuk mewujudkan ruang yang inspiratif.
                        </p>
                        
                        <div class="hero-stats d-flex flex-wrap gap-4">
                            <div class="stat-item">
                                <div class="stat-number">15+</div>
                                <div class="stat-label">Tahun Pengalaman</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">50+</div>
                                <div class="stat-label">Proyek Selesai</div>
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
                            <i class="fas fa-drafting-compass"></i>
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

    <!-- Services Section -->
    <section class="services-section py-7">
        <div class="container">
            <div class="section-header text-center mb-6">
                <div class="section-badge">
                    <span>LAYANAN KAMI</span>
                </div>
                <h2 class="section-title fw-bold text-brown-dark mb-3">Jasa Arsitektural Profesional</h2>
                <p class="section-subtitle text-brown-medium">
                    Menyediakan solusi desain arsitektural komprehensif untuk berbagai 
                    jenis bangunan dengan pendekatan yang kreatif dan berkelanjutan.
                </p>
                <div class="section-ornament">
                    <div class="ornament-line"></div>
                    <div class="ornament-diamond"></div>
                    <div class="ornament-line"></div>
                </div>
            </div>

            @php
                $services = [
                    [
                        'code' => 'AR001',
                        'title' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian',
                        'description' => 'Jasa asistensi, nasehat, dan rekomendasi mengenai arsitektural termasuk kajian pendahuluan, desain skematik, desain pembangunan, dan desain akhir. Meliputi proyek baru, perawatan, renovasi, restorasi, atau recycling bangunan.',
                        'features' => [
                            'Desain konseptual dan skematik',
                            'Perencanaan tata ruang dan sirkulasi',
                            'Analisis lingkungan dan tapak',
                            'Desain eksterior dan fasad',
                            'Koordinasi dengan sistem struktural',
                            'Dokumentasi desain lengkap'
                        ],
                        'icon' => 'fas fa-building',
                        'color' => 'primary'
                    ],
                    [
                        'code' => 'AR002',
                        'title' => 'Jasa Arsitektural Lainnya',
                        'description' => 'Jasa desain arsitektural untuk bangunan dan struktur lainnya, termasuk desain skematik, desain pembangunan, dan desain akhir dengan detail untuk tender dan konstruksi.',
                        'features' => [
                            'Desain arsitektural khusus',
                            'Studi kelayakan dan analisis',
                            'Perencanaan masterplan',
                            'Desain landscape dan siteplan',
                            'Review dan evaluasi desain',
                            'Supervisi implementasi'
                        ],
                        'icon' => 'fas fa-drafting-compass',
                        'color' => 'secondary'
                    ],
                    [
                        'code' => 'AR003',
                        'title' => 'Jasa Desain Interior pada Bangunan Gedung dan Bangunan Sipil',
                        'description' => 'Jasa desain interior untuk bangunan gedung dan bangunan sipil, mencakup perencanaan ruang dalam, material, pencahayaan, dan estetika interior.',
                        'features' => [
                            'Desain interior konseptual',
                            'Pemilihan material dan finishing',
                            'Perencanaan pencahayaan',
                            'Desain furniture custom',
                            'Akustik dan kenyamanan ruang',
                            'Manajemen proyek interior'
                        ],
                        'icon' => 'fas fa-couch',
                        'color' => 'tertiary'
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-card animate-on-scroll" data-delay="{{ $loop->index * 100 }}">
                        <div class="service-header">
                            <div class="service-code">{{ $service['code'] }}</div>
                            <div class="service-icon service-{{ $service['color'] }}">
                                <i class="{{ $service['icon'] }}"></i>
                            </div>
                        </div>
                        <div class="service-body">
                            <h3 class="service-title">{{ $service['title'] }}</h3>
                            <p class="service-description">{{ $service['description'] }}</p>
                            
                            <div class="service-features">
                                <h6>Fitur Layanan:</h6>
                                <div class="features-list">
                                    @foreach($service['features'] as $feature)
                                    <div class="feature-item">
                                        <div class="feature-dot"></div>
                                        <span class="feature-text">{{ $feature }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="service-footer">
                            <button type="button" class="btn-service-detail" data-bs-toggle="modal" data-bs-target="#serviceModal{{ $loop->index + 1 }}">
                                <span>Detail Layanan</span>
                                <i class="fas fa-arrow-right"></i>
                            </button>
                            <div class="service-timeline">
                                <i class="fas fa-clock me-1"></i>
                                <span>Estimasi: 4-8 minggu</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section py-7">
        <div class="container">
            <div class="section-header text-center mb-6">
                <div class="section-badge">
                    <span>PROSES KERJA</span>
                </div>
                <h2 class="section-title fw-bold text-cream-light mb-3">Proses Desain Arsitektural</h2>
                <p class="section-subtitle text-cream-medium">
                    Langkah-langkah sistematis yang kami terapkan untuk memastikan 
                    hasil desain yang optimal sesuai dengan kebutuhan Anda.
                </p>
                <div class="section-ornament">
                    <div class="ornament-line"></div>
                    <div class="ornament-diamond"></div>
                    <div class="ornament-line"></div>
                </div>
            </div>

            <div class="process-timeline">
                <div class="process-item animate-on-scroll" data-delay="0">
                    <div class="process-number">01</div>
                    <div class="process-content">
                        <div class="process-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h4>Konsultasi Awal</h4>
                        <p>Diskusi mendalam tentang kebutuhan, anggaran, dan konsep yang diinginkan</p>
                    </div>
                </div>

                <div class="process-item animate-on-scroll" data-delay="100">
                    <div class="process-number">02</div>
                    <div class="process-content">
                        <div class="process-icon">
                            <i class="fas fa-search-location"></i>
                        </div>
                        <h4>Analisis Site</h4>
                        <p>Survey lokasi, analisis kondisi tapak, dan studi lingkungan sekitar</p>
                    </div>
                </div>

                <div class="process-item animate-on-scroll" data-delay="200">
                    <div class="process-number">03</div>
                    <div class="process-content">
                        <div class="process-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>Konsep Desain</h4>
                        <p>Pengembangan konsep desain dan studi skematik awal</p>
                    </div>
                </div>

                <div class="process-item animate-on-scroll" data-delay="300">
                    <div class="process-number">04</div>
                    <div class="process-content">
                        <div class="process-icon">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h4>Perencanaan Detail</h4>
                        <p>Pengembangan desain detail, gambar kerja, dan spesifikasi teknis</p>
                    </div>
                </div>

                <div class="process-item animate-on-scroll" data-delay="400">
                    <div class="process-number">05</div>
                    <div class="process-content">
                        <div class="process-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h4>Review & Approval</h4>
                        <p>Presentasi final, revisi, dan persetujuan dokumen desain lengkap</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section py-7">
        <div class="container">
            <div class="section-header text-center mb-6">
                <div class="section-badge">
                    <span>PORTOFOLIO</span>
                </div>
                <h2 class="section-title fw-bold text-brown-dark mb-3">Proyek Terbaru Kami</h2>
                <p class="section-subtitle text-brown-medium">
                    Beberapa hasil karya desain arsitektural yang telah kami selesaikan 
                    untuk berbagai klien dengan beragam kebutuhan.
                </p>
                <div class="section-ornament">
                    <div class="ornament-line"></div>
                    <div class="ornament-hexagon"></div>
                    <div class="ornament-line"></div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-card animate-on-scroll" data-delay="0">
                        <div class="portfolio-image">
                            <div class="image-overlay"></div>
                            <div class="portfolio-category">Komersial</div>
                        </div>
                        <div class="portfolio-content">
                            <h5>Gedung Perkantoran Modern</h5>
                            <p>Desain arsitektural untuk gedung perkantoran 12 lantai dengan konsep sustainable building</p>
                            <div class="portfolio-meta">
                                <span><i class="fas fa-calendar-alt me-1"></i> 2024</span>
                                <span><i class="fas fa-expand-arrows-alt me-1"></i> 15,000 m²</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-card animate-on-scroll" data-delay="100">
                        <div class="portfolio-image">
                            <div class="image-overlay"></div>
                            <div class="portfolio-category">Hunian</div>
                        </div>
                        <div class="portfolio-content">
                            <h5>Perumahan Cluster Eksklusif</h5>
                            <p>Masterplan dan desain rumah tipe 200-400 m² dengan konsep modern tropical</p>
                            <div class="portfolio-meta">
                                <span><i class="fas fa-calendar-alt me-1"></i> 2023</span>
                                <span><i class="fas fa-home me-1"></i> 50 Unit</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="portfolio-card animate-on-scroll" data-delay="200">
                        <div class="portfolio-image">
                            <div class="image-overlay"></div>
                            <div class="portfolio-category">Institusi</div>
                        </div>
                        <div class="portfolio-content">
                            <h5>Kampus Universitas</h5>
                            <p>Desain bangunan fakultas dan perpustakaan dengan pendekatan arsitektur kontemporer</p>
                            <div class="portfolio-meta">
                                <span><i class="fas fa-calendar-alt me-1"></i> 2024</span>
                                <span><i class="fas fa-expand-arrows-alt me-1"></i> 8,500 m²</span>
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
                            Siap Wujudkan Desain Arsitektural Impian Anda?
                        </h3>
                        <p class="cta-description text-cream-medium mb-0">
                            Konsultasikan kebutuhan desain Anda dengan tim arsitek profesional 
                            kami dan dapatkan solusi terbaik untuk proyek Anda.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="{{ route('contact') }}" class="btn btn-cream btn-lg rounded-pill px-5">
                            <i class="fas fa-pencil-ruler me-2"></i>Konsultasi Desain
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modals for Service Details -->
@foreach($services as $index => $service)
<div class="modal fade" id="serviceModal{{ $index + 1 }}" tabindex="-1" aria-labelledby="serviceModalLabel{{ $index + 1 }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content service-modal">
            <div class="modal-header">
                <div class="modal-icon service-{{ $service['color'] }}">
                    <i class="{{ $service['icon'] }}"></i>
                </div>
                <div class="modal-title-container">
                    <h5 class="modal-title" id="serviceModalLabel{{ $index + 1 }}">
                        {{ $service['code'] }} - {{ $service['title'] }}
                    </h5>
                    <div class="modal-subtitle">Jasa Arsitektural</div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-description">
                    <p>{{ $service['description'] }}</p>
                </div>
                
                <div class="modal-features">
                    <h6>Detail Layanan:</h6>
                    <div class="features-grid">
                        @foreach($service['features'] as $feature)
                        <div class="feature-item-modal">
                            <div class="feature-icon-modal">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="feature-text">{{ $feature }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="modal-process">
                    <h6>Tahapan Pengerjaan:</h6>
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <div class="step-content">
                                <h6>Konsultasi & Brief</h6>
                                <p>Diskusi kebutuhan dan pengumpulan data</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <div class="step-content">
                                <h6>Desain Konseptual</h6>
                                <p>Pengembangan konsep dan skematik</p>
                            </div>
                        </div>
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <div class="step-content">
                                <h6>Desain Detail</h6>
                                <p>Pengembangan desain detail dan gambar kerja</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-quote">
                    <h6>Request Quotation:</h6>
                    <div class="quote-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Jenis Proyek">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="3" placeholder="Deskripsi Proyek"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-brown" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-brown">
                    <i class="fas fa-file-download me-2"></i>Download Brosur
                </button>
                <button type="button" class="btn btn-accent-gold">
                    <i class="fas fa-paper-plane me-2"></i>Kirim Permintaan
                </button>
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
        
        /* Theme Colors */
        --brown-light: var(--brown-300);
        --brown-medium: var(--brown-500);
        --brown-dark: var(--brown-700);
        --cream-light: var(--cream-100);
        --cream-medium: var(--cream-300);
        --cream-dark: var(--cream-500);
    }

    /* Hero Section */
    .architectural-hero {
        background: linear-gradient(135deg, 
            rgba(62, 39, 35, 0.95) 0%, 
            rgba(93, 64, 55, 0.9) 50%, 
            rgba(121, 85, 72, 0.85) 100%);
        color: var(--cream-light);
        padding: 6rem 0 4rem;
        position: relative;
        overflow: hidden;
    }

    .architectural-hero::before {
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

    /* Services Section */
    .services-section {
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

    .ornament-hexagon {
        width: 12px;
        height: 12px;
        background: var(--accent-gold);
        clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
    }

    /* Service Cards */
    .service-card {
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

    .service-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(62, 39, 35, 0.15);
        border-color: var(--brown-light);
    }

    .service-header {
        padding: 1.5rem 1.5rem 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .service-code {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--accent-gold);
        background: rgba(212, 175, 55, 0.1);
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
    }

    .service-icon {
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

    .service-primary {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
    }

    .service-secondary {
        background: linear-gradient(135deg, var(--accent-gold), #E6B800);
    }

    .service-tertiary {
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
    }

    .service-body {
        padding: 1.5rem;
    }

    .service-title {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.25rem;
        line-height: 1.3;
    }

    .service-description {
        color: var(--brown-medium);
        line-height: 1.6;
        margin-bottom: 1.5rem;
        font-size: 0.95rem;
    }

    .service-features h6 {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.75rem;
        font-size: 0.95rem;
    }

    .features-list {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 0.5rem;
    }

    .feature-dot {
        width: 6px;
        height: 6px;
        background: var(--accent-gold);
        border-radius: 50%;
        margin-top: 0.5rem;
        flex-shrink: 0;
    }

    .feature-text {
        color: var(--brown-medium);
        font-size: 0.85rem;
        line-height: 1.4;
        flex: 1;
    }

    .service-footer {
        padding: 1.5rem;
        padding-top: 0;
        border-top: 1px solid var(--cream-dark);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .btn-service-detail {
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

    .btn-service-detail:hover {
        color: var(--accent-gold);
        gap: 0.75rem;
    }

    .service-timeline {
        color: var(--brown-light);
        font-size: 0.85rem;
        display: flex;
        align-items: center;
    }

    /* Process Section */
    .process-section {
        background: linear-gradient(135deg, 
            rgba(62, 39, 35, 0.95) 0%, 
            rgba(93, 64, 55, 0.9) 100%);
        color: var(--cream-light);
        position: relative;
        overflow: hidden;
    }

    .process-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" fill="none"/><path d="M20,20 Q40,10 60,20 T100,20" stroke="rgba(255,255,255,0.05)" stroke-width="1" fill="none"/></svg>');
        background-size: 200px;
        opacity: 0.3;
    }

    .process-timeline {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 2rem;
        position: relative;
        z-index: 2;
    }

    .process-item {
        flex: 1;
        min-width: 200px;
        text-align: center;
        opacity: 0;
        transform: translateY(20px);
    }

    .process-item.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .process-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--accent-gold);
        margin-bottom: 1rem;
        line-height: 1;
    }

    .process-content {
        padding: 1.5rem;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .process-item:hover .process-content {
        background: rgba(255, 255, 255, 0.1);
        border-color: var(--accent-gold);
        transform: translateY(-5px);
    }

    .process-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 1rem;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--cream-light);
    }

    .process-content h4 {
        color: var(--cream-light);
        font-weight: 600;
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }

    .process-content p {
        color: var(--cream-medium);
        font-size: 0.9rem;
        margin: 0;
        line-height: 1.4;
    }

    /* Portfolio Section */
    .portfolio-section {
        background: var(--cream-light);
    }

    .portfolio-card {
        background: var(--cream-light);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.1);
        border: 1px solid var(--cream-dark);
        transition: all 0.4s ease;
        opacity: 0;
        transform: translateY(20px);
    }

    .portfolio-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .portfolio-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(62, 39, 35, 0.15);
        border-color: var(--brown-light);
    }

    .portfolio-image {
        height: 200px;
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        position: relative;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, rgba(62, 39, 35, 0.2), rgba(62, 39, 35, 0.7));
    }

    .portfolio-category {
        position: absolute;
        top: 1rem;
        left: 1rem;
        background: var(--accent-gold);
        color: var(--cream-light);
        padding: 0.25rem 0.75rem;
        border-radius: 12px;
        font-size: 0.8rem;
        font-weight: 600;
    }

    .portfolio-content {
        padding: 1.5rem;
    }

    .portfolio-content h5 {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .portfolio-content p {
        color: var(--brown-medium);
        font-size: 0.9rem;
        line-height: 1.4;
        margin-bottom: 1rem;
    }

    .portfolio-meta {
        display: flex;
        justify-content: space-between;
        color: var(--brown-light);
        font-size: 0.85rem;
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

    /* Modal Styles */
    .service-modal {
        border-radius: 15px;
        border: 2px solid var(--cream-dark);
        overflow: hidden;
    }

    .service-modal .modal-header {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        color: var(--cream-light);
        border-bottom: 2px solid var(--cream-dark);
        padding: 1.5rem 2rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .service-modal .modal-icon {
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

    .service-modal .modal-title {
        color: var(--cream-light);
        font-weight: 600;
        margin: 0;
        font-size: 1.5rem;
        line-height: 1.3;
    }

    .modal-subtitle {
        color: var(--accent-gold-light);
        font-size: 0.9rem;
        margin-top: 0.25rem;
    }

    .service-modal .btn-close {
        background: transparent;
        border: none;
        font-size: 1.25rem;
        color: var(--cream-light);
        opacity: 0.8;
    }

    .service-modal .btn-close:hover {
        opacity: 1;
    }

    .service-modal .modal-body {
        padding: 2rem;
        background: var(--cream-light);
    }

    .modal-description {
        margin-bottom: 2rem;
        padding-bottom: 2rem;
        border-bottom: 1px solid var(--cream-dark);
    }

    .modal-description p {
        color: var(--brown-medium);
        line-height: 1.6;
        margin: 0;
        font-size: 1rem;
    }

    .modal-features h6,
    .modal-process h6,
    .modal-quote h6 {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 0.75rem;
        margin-bottom: 2rem;
    }

    .feature-item-modal {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem;
        background: var(--cream-light);
        border: 1px solid var(--cream-dark);
        border-radius: 8px;
    }

    .feature-icon-modal {
        color: var(--accent-gold);
        font-size: 0.9rem;
        flex-shrink: 0;
    }

    .feature-text {
        color: var(--brown-medium);
        font-size: 0.9rem;
        line-height: 1.4;
    }

    .process-steps {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .process-step {
        display: flex;
        gap: 1rem;
        align-items: flex-start;
    }

    .step-number {
        width: 30px;
        height: 30px;
        background: linear-gradient(135deg, var(--accent-gold), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-weight: 600;
        font-size: 0.9rem;
        flex-shrink: 0;
    }

    .step-content h6 {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.25rem;
        font-size: 0.95rem;
    }

    .step-content p {
        color: var(--brown-medium);
        font-size: 0.85rem;
        margin: 0;
    }

    .quote-form .form-control {
        border: 1px solid var(--cream-dark);
        border-radius: 8px;
        padding: 0.75rem 1rem;
        color: var(--brown-medium);
        background: var(--cream-light);
    }

    .quote-form .form-control:focus {
        border-color: var(--accent-gold);
        box-shadow: 0 0 0 0.25rem rgba(212, 175, 55, 0.25);
    }

    .service-modal .modal-footer {
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

    .btn-accent-gold {
        background: linear-gradient(135deg, var(--accent-gold), #E6B800);
        border: 2px solid var(--accent-gold);
        color: var(--brown-dark);
        padding: 0.5rem 1.5rem;
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-accent-gold:hover {
        background: linear-gradient(135deg, #E6B800, var(--accent-gold));
        color: var(--brown-dark);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
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
        
        .process-timeline {
            gap: 1.5rem;
        }
    }

    @media (max-width: 992px) {
        .architectural-hero {
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
        
        .service-card {
            margin-bottom: 1.5rem;
        }
        
        .process-timeline {
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .process-item {
            min-width: 100%;
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
        
        .features-grid {
            grid-template-columns: 1fr;
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
        
        .service-modal .modal-body {
            padding: 1.5rem;
        }
        
        .service-modal .modal-header {
            padding: 1rem 1.5rem;
        }
        
        .service-modal .modal-footer {
            flex-direction: column;
        }
        
        .service-modal .modal-footer .btn {
            width: 100%;
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

        // Hover effects for service cards
        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.service-icon');
                if (icon) {
                    icon.style.transform = 'scale(1.1) rotate(5deg)';
                    icon.style.transition = 'transform 0.3s ease';
                }
            });

            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.service-icon');
                if (icon) {
                    icon.style.transform = 'scale(1) rotate(0)';
                }
            });
        });

        // Portfolio card hover effects
        const portfolioCards = document.querySelectorAll('.portfolio-card');
        portfolioCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const category = this.querySelector('.portfolio-category');
                if (category) {
                    category.style.transform = 'translateY(-2px)';
                    category.style.boxShadow = '0 5px 15px rgba(0,0,0,0.2)';
                }
            });

            card.addEventListener('mouseleave', function() {
                const category = this.querySelector('.portfolio-category');
                if (category) {
                    category.style.transform = 'translateY(0)';
                    category.style.boxShadow = 'none';
                }
            });
        });

        // Initialize modals
        const serviceModals = document.querySelectorAll('.service-modal');
        serviceModals.forEach(modal => {
            modal.addEventListener('shown.bs.modal', function() {
                const modalTitle = this.querySelector('.modal-title');
                console.log('Service modal opened:', modalTitle.textContent);
            });
        });
    });
</script>
@endpush