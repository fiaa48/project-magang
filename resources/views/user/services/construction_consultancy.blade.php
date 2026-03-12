@extends('user.layouts.app')

@section('title', 'Konsultansi Konstruksi | PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi konstruksi profesional untuk pengembangan tata ruang dan lingkungan yang berkelanjutan.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="construction-hero position-relative overflow-hidden">
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
                            <i class="fas fa-hard-hat me-2"></i>LAYANAN PROFESIONAL
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Konsultansi <span class="text-gradient-brown">Konstruksi</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Solusi Terpadu untuk
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Tata Ruang & Lingkungan
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
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Konsultansi Konstruksi</li>
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
                    <i class="fas fa-list-check me-2"></i>LAYANAN KAMI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Layanan Konsultansi Konstruksi</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Menyediakan berbagai solusi dengan pendekatan holistik dan berkelanjutan.
                </p>
            </div>

            @php
                $services = [
                    [
                        'code' => 'AL001',
                        'title' => 'Pengembangan Pemanfaatan Ruang',
                        'description' => 'Jasa konsultansi terkait pengembangan pemanfaatan ruang untuk optimalisasi fungsi dan nilai ruang.',
                        'icon' => 'fas fa-map-marked-alt',
                        'features' => ['Analisis Ruang', 'Optimasi Pemanfaatan', 'Studi Kelayakan']
                    ],
                    [
                        'code' => 'AL002',
                        'title' => 'Pengembangan Wilayah',
                        'description' => 'Perencanaan tata ruang wilayah mulai dari tingkat nasional hingga lokal dengan pendekatan terintegrasi.',
                        'icon' => 'fas fa-globe-asia',
                        'features' => ['Tata Ruang Wilayah', 'Kawasan Strategis', 'Perencanaan Terpadu']
                    ],
                    [
                        'code' => 'AL003',
                        'title' => 'Pengembangan Perkotaan',
                        'description' => 'Jasa perencanaan tata ruang perkotaan dengan fokus pada keberlanjutan dan kenyamanan hunian.',
                        'icon' => 'fas fa-city',
                        'features' => ['Perencanaan Kota', 'Desain Perkotaan', 'Kajian Tata Ruang']
                    ],
                    [
                        'code' => 'AL004',
                        'title' => 'Lingkungan Bangunan & Lanskap',
                        'description' => 'Desain dan rencana aesthetic landscaping untuk berbagai tipe lingkungan bangunan dan komersial.',
                        'icon' => 'fas fa-tree',
                        'features' => ['Landscape Design', 'Desain Eksterior', 'Planning Aesthetic']
                    ],
                    [
                        'code' => 'KL401',
                        'title' => 'Konsultansi Lingkungan',
                        'description' => 'Solusi pengolahan air bersih, penyehatan lingkungan, dan manajemen persampahan yang terintegrasi.',
                        'icon' => 'fas fa-recycle',
                        'features' => ['Pengolahan Air', 'Sanitasi Lingkungan', 'Manajemen Sampah']
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4">
                        <div class="service-card-3d animate-on-scroll">
                            <div class="service-card-inner">
                                <!-- Service Badge -->
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="service-icon-wrapper">
                                        <i class="{{ $service['icon'] }} fa-2x text-brown-dark"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">
                                        {{ $service['code'] }}
                                    </span>
                                </div>

                                <!-- Title & Description -->
                                <h3 class="fw-bold text-brown-dark mb-3">{{ $service['title'] }}</h3>
                                <p class="text-brown-medium mb-4">{{ $service['description'] }}</p>

                                <!-- Features -->
                                <div class="service-features mb-4">
                                    @foreach($service['features'] as $feature)
                                        <div class="d-flex align-items-center mb-2">
                                            <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                            <span class="text-brown-medium">{{ $feature }}</span>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Card Footer -->
                                <div class="card-footer d-flex justify-content-between align-items-center pt-3">
                                    <div class="availability-status">
                                        <i class="fas fa-circle text-success me-1" style="font-size: 0.6rem;"></i>
                                        <span class="text-brown-medium small">Tersedia</span>
                                    </div>
                                    <button type="button" class="btn btn-outline-brown-3d rounded-pill px-4 py-2 detail-btn"
                                            data-code="{{ $service['code'] }}"
                                            data-title="{{ $service['title'] }}"
                                            data-description="{{ $service['description'] }}">
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

    <!-- CTA SECTION – SAME ELEGANT STYLE AS HOME -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Siap Mewujudkan Proyek Impian Anda?</h2>
                        <p class="lead mb-0">
                            Konsultasikan kebutuhan Anda dengan tim ahli kami. Dapatkan solusi terbaik untuk pengembangan tata ruang dan konstruksi.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-calendar-check me-2"></i>Jadwalkan Konsultasi
                                <span class="btn-shine"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

<!-- Modal for Service Details -->
<div class="modal fade" id="serviceDetailModal" tabindex="-1" aria-labelledby="serviceDetailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header bg-brown-dark text-white py-4">
                <h5 class="modal-title fw-bold" id="serviceDetailModalLabel">
                    <i class="fas fa-info-circle me-2"></i>Detail Layanan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="row g-0">
                    <div class="col-lg-8 p-5">
                        <div class="mb-4">
                            <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2" id="modal-service-code"></span>
                        </div>
                        <h3 class="fw-bold text-brown-dark mb-4" id="modal-service-title"></h3>
                        <p class="text-brown-medium mb-5" id="modal-service-description"></p>

                        <div class="service-details">
                            <h5 class="fw-bold text-brown-dark mb-3">
                                <i class="fas fa-list-check me-2"></i>Cakupan Layanan
                            </h5>
                            <ul class="list-unstyled">
                                <li class="d-flex mb-3">
                                    <i class="fas fa-check text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Analisis dan studi kelayakan mendalam</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="fas fa-check text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Perencanaan strategis dan implementasi</span>
                                </li>
                                <li class="d-flex mb-3">
                                    <i class="fas fa-check text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Monitoring dan evaluasi berkelanjutan</span>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-check text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Dokumentasi dan laporan komprehensif</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 bg-cream-light p-5">
                        <h5 class="fw-bold text-brown-dark mb-4">
                            <i class="fas fa-clock me-2"></i>Proses Kerja
                        </h5>
                        <div class="timeline">
                            <div class="timeline-step d-flex mb-4">
                                <div class="step-number bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px;">1</div>
                                <div class="step-content">
                                    <h6 class="fw-bold text-brown-dark mb-1">Konsultasi Awal</h6>
                                    <p class="text-brown-medium small">Identifikasi kebutuhan dan tujuan proyek</p>
                                </div>
                            </div>
                            <div class="timeline-step d-flex mb-4">
                                <div class="step-number bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px;">2</div>
                                <div class="step-content">
                                    <h6 class="fw-bold text-brown-dark mb-1">Analisis Mendalam</h6>
                                    <p class="text-brown-medium small">Studi kelayakan dan analisis komprehensif</p>
                                </div>
                            </div>
                            <div class="timeline-step d-flex mb-4">
                                <div class="step-number bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px;">3</div>
                                <div class="step-content">
                                    <h6 class="fw-bold text-brown-dark mb-1">Perencanaan</h6>
                                    <p class="text-brown-medium small">Penyusunan rencana dan strategi implementasi</p>
                                </div>
                            </div>
                            <div class="timeline-step d-flex">
                                <div class="step-number bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px;">4</div>
                                <div class="step-content">
                                    <h6 class="fw-bold text-brown-dark mb-1">Implementasi & Review</h6>
                                    <p class="text-brown-medium small">Pelaksanaan dan evaluasi hasil</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-cream-light px-5 py-4">
                <button type="button" class="btn btn-outline-brown-3d px-4 py-2 rounded-pill" data-bs-dismiss="modal">
                    <i class="fas fa-times me-2"></i>Tutup
                </button>
                <a href="{{ route('contact') }}" class="btn btn-brown-3d px-5 py-2 rounded-pill" id="modal-contact-btn">
                    <i class="fas fa-calendar-alt me-2"></i>Jadwalkan Konsultasi
                </a>
            </div>
        </div>
    </div>
</div>

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
    .construction-hero {
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
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .service-card-3d:hover .service-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .service-features i {
        color: var(--cream-gold);
    }

    .availability-status i {
        font-size: 0.6rem;
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

    /* ----- Modal Customization (to match premium theme) ----- */
    .modal-content {
        border-radius: 2rem;
        overflow: hidden;
    }

    .modal-header {
        border-bottom: none;
    }

    .modal-footer {
        border-top: none;
    }

    .bg-cream-light {
        background-color: var(--cream-light) !important;
    }

    .step-number {
        width: 32px;
        height: 32px;
        background: var(--brown-dark);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
    }

    .timeline-step p {
        font-size: 0.9rem;
    }

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .construction-hero { padding: 5rem 0 3rem; }
        .service-card-inner { padding: 1.25rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .service-icon-wrapper { width: 50px; height: 50px; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
    }
</style>

<!-- Animate.css for additional animations (optional) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
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
        const cards = document.querySelectorAll('.service-card-inner');
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

        // ----- MODAL HANDLER -----
        const serviceModal = new bootstrap.Modal(document.getElementById('serviceDetailModal'));

        document.querySelectorAll('.detail-btn').forEach(button => {
            button.addEventListener('click', function() {
                const code = this.getAttribute('data-code');
                const title = this.getAttribute('data-title');
                const description = this.getAttribute('data-description');

                document.getElementById('modal-service-code').textContent = code;
                document.getElementById('modal-service-title').textContent = title;
                document.getElementById('modal-service-description').textContent = description;

                const contactBtn = document.getElementById('modal-contact-btn');
                const baseUrl = contactBtn.getAttribute('href').split('?')[0];
                contactBtn.setAttribute('href', `${baseUrl}?service=${encodeURIComponent(title)}&code=${code}`);

                serviceModal.show();
            });
        });
    });
</script>
@endpush
