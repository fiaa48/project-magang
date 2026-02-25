@extends('layouts.app')

@section('title', 'Jasa Arsitektural | PT Mitra Nusa Konsulindo')
@section('description', 'Layanan jasa arsitektural profesional: desain bangunan hunian, non-hunian, interior, dan konsultasi arsitektur.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="architectural-hero position-relative overflow-hidden">
        <!-- Background Pattern (same as home) -->
        <div class="hero-bg-pattern">
            <div class="pattern-circle circle-1"></div>
            <div class="pattern-circle circle-2"></div>
            <div class="pattern-square square-1"></div>
            <div class="pattern-square square-2"></div>
        </div>

        <div class="container position-relative z-3">
            <div class="row min-vh-60 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <!-- Animated Badge – glassmorphism -->
                    <div class="company-badge mb-5 animate-fade-in-down">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-drafting-compass me-2"></i>DESAIN & ARSITEKTUR
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Jasa <span class="text-gradient-brown">Arsitektural</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Solusi Desain Inovatif untuk
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Bangunan Hunian · Komersial · Interior
                            </span>
                        </div>
                    </div>

                    <!-- Breadcrumb with glassmorphism -->
                    <nav aria-label="breadcrumb" class="breadcrumb-nav mt-5 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-brown-medium">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('services') }}" class="text-brown-medium">Layanan</a>
                            </li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Jasa Arsitektural</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#services" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- SERVICES SECTION – 3D CARDS -->
    <section id="services" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-cogs me-2"></i>LAYANAN KAMI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Jasa Arsitektural Profesional</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Menyediakan solusi desain arsitektural komprehensif untuk berbagai jenis bangunan dengan pendekatan kreatif dan berkelanjutan.
                </p>
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
                        <div class="service-card-3d animate-on-scroll">
                            <div class="service-card-inner">
                                <!-- Header -->
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="service-icon-wrapper service-{{ $service['color'] }}">
                                        <i class="{{ $service['icon'] }} fa-2x text-white"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">{{ $service['code'] }}</span>
                                </div>

                                <!-- Title & Description -->
                                <h3 class="fw-bold text-brown-dark mb-3">{{ $service['title'] }}</h3>
                                <p class="text-brown-medium small mb-4">{{ $service['description'] }}</p>

                                <!-- Features -->
                                <div class="service-features mb-4">
                                    @foreach(array_slice($service['features'], 0, 4) as $feature)
                                        <div class="d-flex mb-2">
                                            <i class="fas fa-check-circle text-cream-gold me-2 mt-1"></i>
                                            <span class="text-brown-medium small">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                    @if(count($service['features']) > 4)
                                        <div class="text-brown-dark small mt-2 fw-semibold">
                                            + {{ count($service['features']) - 4 }} fitur lainnya
                                        </div>
                                    @endif
                                </div>

                                <!-- Footer -->
                                <div class="card-footer d-flex justify-content-between align-items-center pt-3">
                                    <span class="text-brown-light small">
                                        <i class="fas fa-clock me-1"></i> Estimasi: 4-8 minggu
                                    </span>
                                    <button type="button" class="btn btn-outline-brown-3d rounded-pill px-4 py-2 detail-btn"
                                            data-bs-toggle="modal" data-bs-target="#serviceModal{{ $loop->index + 1 }}">
                                        Detail <i class="fas fa-arrow-right ms-2"></i>
                                    </button>
                                </div>

                                <!-- 3D decorative corners -->
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- PROCESS SECTION – 3D STEPS -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-project-diagram me-2"></i>PROSES KERJA
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Proses Desain Arsitektural</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Langkah-langkah sistematis yang kami terapkan untuk memastikan hasil desain yang optimal sesuai dengan kebutuhan Anda.
                </p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-lg-2-4 col-md-6">
                    <div class="process-step-3d animate-on-scroll">
                        <div class="process-step-inner">
                            <div class="step-number-wrapper">01</div>
                            <div class="step-icon">
                                <i class="fas fa-comments fa-3x"></i>
                            </div>
                            <h5 class="step-title">Konsultasi Awal</h5>
                            <p class="step-desc">Diskusi mendalam tentang kebutuhan, anggaran, dan konsep yang diinginkan</p>
                        </div>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-lg-2-4 col-md-6">
                    <div class="process-step-3d animate-on-scroll">
                        <div class="process-step-inner">
                            <div class="step-number-wrapper">02</div>
                            <div class="step-icon">
                                <i class="fas fa-search-location fa-3x"></i>
                            </div>
                            <h5 class="step-title">Analisis Site</h5>
                            <p class="step-desc">Survey lokasi, analisis kondisi tapak, dan studi lingkungan sekitar</p>
                        </div>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-lg-2-4 col-md-6">
                    <div class="process-step-3d animate-on-scroll">
                        <div class="process-step-inner">
                            <div class="step-number-wrapper">03</div>
                            <div class="step-icon">
                                <i class="fas fa-lightbulb fa-3x"></i>
                            </div>
                            <h5 class="step-title">Konsep Desain</h5>
                            <p class="step-desc">Pengembangan konsep desain dan studi skematik awal</p>
                        </div>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-lg-2-4 col-md-6">
                    <div class="process-step-3d animate-on-scroll">
                        <div class="process-step-inner">
                            <div class="step-number-wrapper">04</div>
                            <div class="step-icon">
                                <i class="fas fa-pencil-ruler fa-3x"></i>
                            </div>
                            <h5 class="step-title">Perencanaan Detail</h5>
                            <p class="step-desc">Pengembangan desain detail, gambar kerja, dan spesifikasi teknis</p>
                        </div>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="col-lg-2-4 col-md-6">
                    <div class="process-step-3d animate-on-scroll">
                        <div class="process-step-inner">
                            <div class="step-number-wrapper">05</div>
                            <div class="step-icon">
                                <i class="fas fa-check-circle fa-3x"></i>
                            </div>
                            <h5 class="step-title">Review & Approval</h5>
                            <p class="step-desc">Presentasi final, revisi, dan persetujuan dokumen desain lengkap</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO SECTION – 3D CARDS -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-images me-2"></i>PORTOFOLIO
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Proyek Terbaru Kami</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Beberapa hasil karya desain arsitektural yang telah kami selesaikan untuk berbagai klien dengan beragam kebutuhan.
                </p>
            </div>

            <div class="row g-4">
                <!-- Portfolio 1 -->
                <div class="col-md-4">
                    <div class="portfolio-card-3d animate-on-scroll">
                        <div class="portfolio-inner">
                            <div class="portfolio-image mb-3">
                                <span class="portfolio-category bg-brown-dark text-white rounded-pill px-3 py-1">Komersial</span>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">Gedung Perkantoran Modern</h5>
                            <p class="text-brown-medium small mb-3">Desain arsitektural untuk gedung perkantoran 12 lantai dengan konsep sustainable building</p>
                            <div class="d-flex justify-content-between text-brown-light small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2024</span>
                                <span><i class="fas fa-expand-arrows-alt me-1"></i>15.000 m²</span>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio 2 -->
                <div class="col-md-4">
                    <div class="portfolio-card-3d animate-on-scroll">
                        <div class="portfolio-inner">
                            <div class="portfolio-image mb-3">
                                <span class="portfolio-category bg-brown-dark text-white rounded-pill px-3 py-1">Hunian</span>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">Perumahan Cluster Eksklusif</h5>
                            <p class="text-brown-medium small mb-3">Masterplan dan desain rumah tipe 200-400 m² dengan konsep modern tropical</p>
                            <div class="d-flex justify-content-between text-brown-light small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2023</span>
                                <span><i class="fas fa-home me-1"></i>50 Unit</span>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio 3 -->
                <div class="col-md-4">
                    <div class="portfolio-card-3d animate-on-scroll">
                        <div class="portfolio-inner">
                            <div class="portfolio-image mb-3">
                                <span class="portfolio-category bg-brown-dark text-white rounded-pill px-3 py-1">Institusi</span>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">Kampus Universitas</h5>
                            <p class="text-brown-medium small mb-3">Desain bangunan fakultas dan perpustakaan dengan pendekatan arsitektur kontemporer</p>
                            <div class="d-flex justify-content-between text-brown-light small">
                                <span><i class="fas fa-calendar-alt me-1"></i>2024</span>
                                <span><i class="fas fa-expand-arrows-alt me-1"></i>8.500 m²</span>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION – SAME ELEGANT STYLE AS HOME -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Siap Wujudkan Desain Arsitektural Impian Anda?</h2>
                        <p class="lead mb-0">
                            Konsultasikan kebutuhan desain Anda dengan tim arsitek profesional kami dan dapatkan solusi terbaik untuk proyek Anda.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-pencil-ruler me-2"></i>Konsultasi Desain
                                <span class="btn-shine"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- MODALS FOR SERVICE DETAILS (3D PREMIUM) -->
@foreach($services as $index => $service)
<div class="modal fade" id="serviceModal{{ $loop->index + 1 }}" tabindex="-1" aria-labelledby="serviceModalLabel{{ $loop->index + 1 }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content service-modal overflow-hidden">
            <div class="modal-header bg-brown-dark text-white py-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="modal-icon-wrapper service-{{ $service['color'] }}">
                        <i class="{{ $service['icon'] }} fa-2x text-white"></i>
                    </div>
                    <div>
                        <h5 class="modal-title fw-bold" id="serviceModalLabel{{ $loop->index + 1 }}">
                            {{ $service['code'] }} - {{ $service['title'] }}
                        </h5>
                        <p class="small text-cream-gold mb-0">Jasa Arsitektural</p>
                    </div>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <p class="text-brown-medium mb-4">{{ $service['description'] }}</p>

                <h6 class="fw-bold text-brown-dark mb-3"><i class="fas fa-list-check me-2"></i>Detail Layanan:</h6>
                <div class="row g-3 mb-4">
                    @foreach($service['features'] as $feature)
                        <div class="col-md-6">
                            <div class="d-flex">
                                <i class="fas fa-check-circle text-cream-gold me-2 mt-1"></i>
                                <span class="text-brown-medium small">{{ $feature }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="modal-process bg-cream-light p-4 rounded-4 mb-4">
                    <h6 class="fw-bold text-brown-dark mb-3"><i class="fas fa-clock me-2"></i>Tahapan Pengerjaan</h6>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="d-flex align-items-center gap-2">
                                <span class="step-number bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">1</span>
                                <span class="text-brown-dark small fw-semibold">Konsultasi</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center gap-2">
                                <span class="step-number bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">2</span>
                                <span class="text-brown-dark small fw-semibold">Desain Konseptual</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex align-items-center gap-2">
                                <span class="step-number bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 28px; height: 28px;">3</span>
                                <span class="text-brown-dark small fw-semibold">Desain Detail</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="quote-form bg-cream-light p-4 rounded-4">
                    <h6 class="fw-bold text-brown-dark mb-3"><i class="fas fa-file-invoice me-2"></i>Request Quotation</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control border-brown-light" placeholder="Nama Lengkap">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control border-brown-light" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control border-brown-light" placeholder="Jenis Proyek">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control border-brown-light" rows="3" placeholder="Deskripsi Proyek"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-cream-light px-5 py-4">
                <button type="button" class="btn btn-outline-brown-3d px-4 py-2 rounded-pill" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Tutup
                </button>
                <button type="button" class="btn btn-brown-3d px-4 py-2 rounded-pill">
                    <i class="fas fa-file-download me-2"></i>Download Brosur
                </button>
                <button type="button" class="btn btn-brown-3d px-4 py-2 rounded-pill">
                    <i class="fas fa-paper-plane me-2"></i>Kirim Permintaan
                </button>
            </div>
        </div>
    </div>
</div>
@endforeach

@push('styles')
<style>
    /* ===== INHERIT FULL STYLE FROM HOME PAGE ===== */
    :root {
        --brown-dark: #5D4037;
        --brown-medium: #8B6B61;
        --brown-light: #A1887F;
        --cream-gold: #D4AF37;
        --cream-dark: #D7CCC8;
        --cream-medium: #EFEBE9;
        --cream-light: #F5F0ED;
        --white: #ffffff;
        --shadow-sm: 0 .125rem .25rem rgba(0,0,0,.075);
        --shadow-md: 0 .5rem 1rem rgba(0,0,0,.15);
        --shadow-lg: 0 1rem 3rem rgba(0,0,0,.175);
        --shadow-3d: 0 20px 40px rgba(93,64,55,0.2), 0 10px 20px rgba(0,0,0,0.1);
    }

    /* ----- Hero Section (same as home) ----- */
    .architectural-hero {
        background: linear-gradient(135deg, var(--cream-light) 0%, var(--white) 100%);
        padding: 6rem 0 4rem;
        position: relative;
        overflow: hidden;
    }

    .hero-bg-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .pattern-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(93, 64, 55, 0.05);
        animation: float 20s ease-in-out infinite;
    }

    .pattern-circle.circle-1 {
        width: 300px;
        height: 300px;
        top: -150px;
        right: -100px;
        animation-delay: 0s;
    }

    .pattern-circle.circle-2 {
        width: 200px;
        height: 200px;
        bottom: -80px;
        left: -80px;
        background: rgba(212, 175, 55, 0.05);
        animation-delay: 10s;
    }

    .pattern-square {
        position: absolute;
        background: rgba(161, 136, 127, 0.03);
        animation: rotate 30s linear infinite;
    }

    .pattern-square.square-1 {
        width: 150px;
        height: 150px;
        top: 30%;
        right: 15%;
        transform: rotate(45deg);
    }

    .pattern-square.square-2 {
        width: 100px;
        height: 100px;
        bottom: 20%;
        left: 10%;
        transform: rotate(15deg);
        background: rgba(212, 175, 55, 0.03);
        animation-delay: -15s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .min-vh-60 { min-height: 60vh; }

    /* ----- Typography & Badges (same as home) ----- */
    .display-2 {
        font-weight: 800 !important;
        letter-spacing: -0.02em;
        line-height: 1.15;
    }

    .text-gradient-brown {
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .company-badge {
        animation: fadeInDown 0.8s ease-out;
    }

    .badge.bg-brown-dark {
        background-color: rgba(93, 64, 55, 0.9) !important;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }

    .badge.bg-brown-light-subtle {
        background-color: rgba(161,136,127,0.1) !important;
        color: var(--brown-dark);
    }

    /* ----- Typewriter Effect (same as home) ----- */
    .typewriter-wrapper {
        display: inline-block;
        position: relative;
    }

    .typewriter-text {
        position: relative;
        display: inline-block;
        color: var(--brown-dark) !important;
    }

    .typewriter-text::after {
        content: '';
        position: absolute;
        right: -8px;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 1.2em;
        background-color: var(--brown-dark);
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }

    /* ----- Scroll Indicator (same as home) ----- */
    .scroll-indicator {
        position: absolute;
        bottom: 2rem;
        left: 0;
        right: 0;
        text-align: center;
    }

    .scroll-down {
        color: var(--brown-dark);
        font-size: 1.5rem;
        animation: bounce 2s infinite;
        display: inline-block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: var(--shadow-sm);
        transition: all 0.3s;
    }

    .scroll-down:hover {
        background: white;
        transform: scale(1.1);
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    /* ----- Breadcrumb (glassmorphism) ----- */
    .breadcrumb-nav .breadcrumb {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 50px;
        padding: 0.75rem 1.5rem;
        border: 1px solid rgba(93,64,55,0.1);
        display: inline-flex;
    }

    .breadcrumb-item a {
        text-decoration: none;
        transition: color 0.3s;
    }

    .breadcrumb-item a:hover {
        color: var(--brown-dark) !important;
    }

    /* ===== 3D SERVICE CARD ===== */
    .service-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .service-card-inner {
        background: white;
        border-radius: 2rem;
        padding: 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .service-card-3d:hover .service-card-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    .service-icon-wrapper {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .service-card-3d:hover .service-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .service-primary { background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium)); }
    .service-secondary { background: linear-gradient(135deg, var(--cream-gold), #E6B800); }
    .service-tertiary { background: linear-gradient(135deg, var(--brown-light), var(--brown-medium)); }

    .service-features i {
        color: var(--cream-gold);
    }

    /* ===== 3D PROCESS STEP ===== */
    .col-lg-2-4 {
        flex: 0 0 20%;
        max-width: 20%;
        padding: 0 0.5rem;
    }

    .process-step-3d {
        perspective: 1000px;
        height: 100%;
    }

    .process-step-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
        text-align: center;
    }

    .process-step-3d:hover .process-step-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .step-number-wrapper {
        position: absolute;
        top: 1rem;
        left: 1rem;
        font-size: 1.2rem;
        font-weight: 800;
        color: rgba(212,175,55,0.2);
    }

    .step-icon {
        margin: 1.5rem 0;
        color: var(--brown-dark);
        transition: transform 0.3s;
    }

    .process-step-3d:hover .step-icon {
        transform: scale(1.1);
        color: var(--cream-gold);
    }

    .step-title {
        font-weight: 700;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
    }

    .step-desc {
        color: var(--brown-medium);
        font-size: 0.9rem;
        line-height: 1.5;
    }

    /* ===== 3D PORTFOLIO CARD ===== */
    .portfolio-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .portfolio-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .portfolio-card-3d:hover .portfolio-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .portfolio-image {
        height: 150px;
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        border-radius: 1rem;
        position: relative;
    }

    .portfolio-category {
        position: absolute;
        top: 0.5rem;
        left: 0.5rem;
        font-size: 0.75rem;
    }

    /* ===== 3D BUTTONS (same as home) ===== */
    .btn-brown-3d {
        background: linear-gradient(145deg, var(--brown-dark), #4A342E);
        border: none;
        color: white;
        font-weight: 600;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 8px 16px rgba(93,64,55,0.2);
        transform-style: preserve-3d;
        transform: translateY(0) rotateX(0deg);
    }

    .btn-brown-3d:hover {
        transform: translateY(-3px) rotateX(2deg);
        box-shadow: 0 15px 30px rgba(93,64,55,0.3);
        background: linear-gradient(145deg, #4A342E, var(--brown-dark));
    }

    .btn-outline-brown-3d {
        border: 2px solid var(--brown-dark);
        color: var(--brown-dark);
        background: transparent;
        font-weight: 600;
        transition: all 0.3s;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        position: relative;
        overflow: hidden;
    }

    .btn-outline-brown-3d:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(93,64,55,0.2);
    }

    .btn-brown-3d::before,
    .btn-outline-brown-3d::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
    }

    .btn-brown-3d:hover::before,
    .btn-outline-brown-3d:hover::before {
        left: 100%;
    }

    /* 3D decorative corners */
    .card-corner {
        position: absolute;
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%);
        z-index: 1;
    }

    .card-corner.corner-1 {
        top: 0;
        right: 0;
        transform: rotate(90deg);
    }

    .card-corner.corner-2 {
        bottom: 0;
        left: 0;
        transform: rotate(270deg);
    }

    /* ----- Background decorations ----- */
    .section-bg-decoration {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .decoration-circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(212, 175, 55, 0.03);
        width: 300px;
        height: 300px;
    }

    .decoration-circle:nth-child(1) {
        top: -100px;
        right: -100px;
        background: rgba(93,64,55,0.02);
        animation: float 25s infinite;
    }

    .decoration-circle:nth-child(2) {
        bottom: -50px;
        left: -50px;
        width: 200px;
        height: 200px;
        background: rgba(212,175,55,0.02);
        animation: float 20s infinite reverse;
    }

    .bg-cream-light {
        background-color: var(--cream-light) !important;
        position: relative;
    }

    .cert-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }

    .pattern-line {
        position: absolute;
        width: 100%;
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--cream-gold), transparent);
        opacity: 0.2;
    }

    .pattern-line:nth-child(1) { top: 20%; left: -50%; width: 200%; transform: rotate(2deg); }
    .pattern-line:nth-child(2) { bottom: 30%; right: -50%; width: 200%; transform: rotate(-3deg); }

    /* ----- CTA Section (same as home) ----- */
    .cta-elegant {
        background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-elegant::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background:
            radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.1) 0%, transparent 50%);
    }

    .cta-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 3rem;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 1.5rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(10px);
    }

    .cta-elegant h2 {
        color: #5D4037;
        background: linear-gradient(135deg, #5D4037, #8B6B61);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-elegant .lead {
        color: #795548;
    }

    /* ----- Modal Customization ----- */
    .service-modal .modal-content {
        border-radius: 2rem;
        overflow: hidden;
        border: none;
        box-shadow: var(--shadow-3d);
    }

    .service-modal .modal-header {
        border-bottom: none;
    }

    .modal-icon-wrapper {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-close-white {
        filter: brightness(0) invert(1);
    }

    .text-cream-gold {
        color: var(--cream-gold);
    }

    .quote-form .form-control {
        border-radius: 50rem;
        height: 48px;
        background: white;
    }

    .quote-form textarea.form-control {
        border-radius: 1rem;
        height: auto;
    }

    /* ----- Animations ----- */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-on-scroll {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    /* ----- Utilities ----- */
    .py-6 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }

    .mb-6 {
        margin-bottom: 5rem !important;
    }

    .mt-6 {
        margin-top: 5rem !important;
    }

    /* ----- Responsive ----- */
    @media (max-width: 1200px) {
        .col-lg-2-4 {
            flex: 0 0 20%;
            max-width: 20%;
        }
    }

    @media (max-width: 992px) {
        .col-lg-2-4 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
        }
        .display-2 { font-size: 3rem !important; }
        .architectural-hero { padding: 5rem 0 3rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .col-lg-2-4 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .service-icon-wrapper { width: 50px; height: 50px; }
    }

    @media (max-width: 576px) {
        .col-lg-2-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ----- TYPEWRITER EFFECT (like home) -----
        const textElement = document.querySelector('.typewriter-text');
        if (textElement) {
            const originalText = textElement.textContent.trim();
            let charIndex = 0;
            let isDeleting = false;
            let typingSpeed = 100;

            function typeWriter() {
                const currentText = originalText.substring(0, charIndex);
                textElement.textContent = currentText;

                if (!isDeleting && charIndex < originalText.length) {
                    charIndex++;
                    typingSpeed = 100;
                } else if (isDeleting && charIndex > 0) {
                    charIndex--;
                    typingSpeed = 50;
                }

                if (!isDeleting && charIndex === originalText.length) {
                    isDeleting = true;
                    typingSpeed = 1500;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    typingSpeed = 500;
                }

                setTimeout(typeWriter, typingSpeed);
            }

            setTimeout(typeWriter, 1000);
        }

        // ----- SMOOTH SCROLL FOR ANCHOR -----
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // ----- OBSERVER FOR SCROLL ANIMATIONS -----
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // ----- 3D HOVER EFFECT ENHANCEMENT -----
        const cards = document.querySelectorAll('.service-card-inner, .process-step-inner, .portfolio-inner');
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;

                card.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg) translateY(-5px)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'rotateY(0deg) rotateX(1deg)';
            });
        });
    });
</script>
@endpush
