@extends('layouts.app')

@section('title', 'PT Mitra Nusa Konsulindo - Konsultan Profesional')
@section('description', 'Perusahaan Konsultan Konstruksi dan Non-Konstruksi dengan pengalaman luas di bidang arsitektur, teknik sipil, dan manajemen proyek.')

@section('content')
    <!-- Hero Section with Auto Slider -->
    <section class="hero-section position-relative">
        <!-- Image Slider -->
        <div class="hero-slider">
            <div class="slider-track">
                <!-- Slide 1 - Construction -->
                <div class="slide active">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Konsultasi Konstruksi</h3>
                        <p>Solusi terintegrasi untuk proyek konstruksi Anda</p>
                    </div>
                </div>

                <!-- Slide 2 - Architecture -->
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1487956382158-bb926046304a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Desain Arsitektural</h3>
                        <p>Inovasi dalam setiap desain bangunan</p>
                    </div>
                </div>

                <!-- Slide 3 - Engineering -->
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Rekayasa Teknik</h3>
                        <p>Presisi dalam setiap perhitungan struktur</p>
                    </div>
                </div>

                <!-- Slide 4 - Management -->
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Manajemen Proyek</h3>
                        <p>Efisiensi dari perencanaan hingga penyelesaian</p>
                    </div>
                </div>
            </div>

            <!-- Slider Navigation -->
            <button class="slider-nav prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-nav next">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slider Dots -->
            <div class="slider-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
                <span class="dot" data-slide="3"></span>
            </div>
        </div>

        <!-- Hero Content -->
        <div class="container position-relative">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <!-- Logo/Badge -->
                    <div class="company-badge mb-5">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-medal me-2"></i>BERPENGALAMAN SEJAK 2020
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="display-1 fw-bold mb-4 text-white">
                        PT Mitra Nusa<br>
                        <span class="text-gradient-brown">Konsulindo</span>
                    </h1>

                    <!-- Subtitle -->
                    <div class="subtitle-wrapper mb-5">
                        <h2 class="h3 fw-light text-white-50 mb-3">
                            Konsultan Profesional di Bidang
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-white fw-semibold fs-3">
                                Konstruksi & Non-Konstruksi
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="description-wrapper mb-6">
                        <p class="lead fs-5 text-white-50 lh-lg mx-auto" style="max-width: 700px;">
                            Memberikan solusi inovatif dan terpercaya untuk proyek konstruksi dan non-konstruksi
                            dengan tim ahli bersertifikasi. Komitmen kami adalah kesempurnaan dan kepuasan klien.
                        </p>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="cta-buttons d-flex flex-wrap gap-3 justify-content-center mb-6">
                        <a href="{{ route('about') }}" class="btn btn-cream btn-lg px-5 py-3 rounded-pill">
                            <i class="fas fa-building me-2"></i>Tentang Kami
                        </a>
                        <a href="{{ route('services') }}" class="btn btn-outline-cream btn-lg px-5 py-3 rounded-pill">
                            <i class="fas fa-cogs me-2"></i>Layanan Kami
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-brown btn-lg px-5 py-3 rounded-pill">
                            <i class="fab fa-whatsapp me-2"></i>Konsultasi Gratis
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="stats-wrapper mt-6">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-white">5+</div>
                                    <div class="stat-label text-white-50">Tahun Pengalaman</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-white">50+</div>
                                    <div class="stat-label text-white-50">Proyek Selesai</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-white">15+</div>
                                    <div class="stat-label text-white-50">Sertifikasi</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-white">10+</div>
                                    <div class="stat-label text-white-50">Ahli Professional</div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <!-- Services Section -->
    <section id="services" class="py-6 bg-light">
        <div class="container">
            <div class="row mb-6">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3 text-brown-dark">Layanan Unggulan</h2>
                    <p class="lead text-brown-medium">Solusi komprehensif untuk setiap kebutuhan proyek Anda</p>
                </div>
            </div>

            <div class="row g-4">
                @foreach([
                    ['icon' => 'fas fa-hard-hat', 'title' => 'Konsultansi Konstruksi', 'desc' => 'Perencanaan, pengawasan, dan manajemen proyek konstruksi terintegrasi.', 'color' => 'brown'],
                    ['icon' => 'fas fa-industry', 'title' => 'Konsultansi Non-Konstruksi', 'desc' => 'Layanan konsultansi manajemen dan penelitian untuk berbagai sektor industri.', 'color' => 'brown-medium'],
                    ['icon' => 'fas fa-drafting-compass', 'title' => 'Desain Arsitektural', 'desc' => 'Desain inovatif untuk bangunan hunian, komersial, dan publik.', 'color' => 'brown-light'],
                    ['icon' => 'fas fa-tools', 'title' => 'Rekayasa Teknik', 'desc' => 'Solusi rekayasa teknik sipil untuk infrastruktur dan sumber daya air.', 'color' => 'cream-gold']
                ] as $service)
                <div class="col-lg-3 col-md-6">
                    <div class="service-card card border-0 shadow-sm h-100 hover-lift">
                        <div class="card-body p-4 text-center">
                            <div class="service-icon-wrapper mb-4">
                                <div class="icon-circle bg-{{ $service['color'] }}-subtle text-{{ $service['color'] }}">
                                    <i class="{{ $service['icon'] }} fa-2x"></i>
                                </div>
                            </div>
                            <h5 class="card-title fw-bold mb-3 text-brown-dark">{{ $service['title'] }}</h5>
                            <p class="card-text text-brown-medium mb-4">{{ $service['desc'] }}</p>
                            <a href="{{ route('services.construction') }}" class="btn btn-outline-{{ $service['color'] }} rounded-pill">
                                Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-6">
                <a href="{{ route('services') }}" class="btn btn-brown-dark btn-lg px-5 rounded-pill">
                    <i class="fas fa-list me-2"></i>Lihat Semua Layanan
                </a>
            </div>
        </div>
    </section>

    <!-- Certifications Section -->
    <section class="py-6 bg-cream-light">
        <div class="container">
            <div class="row mb-6">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3 text-brown-dark">Sertifikasi & Lisensi</h2>
                    <p class="lead text-brown-medium">Didukung oleh sertifikasi resmi yang menjamin kualitas layanan</p>
                </div>
            </div>

            <div class="row g-4 align-items-center justify-content-center">
                @foreach(['inkindo', 'sbu', 'iso-9001', 'iso-14001', 'kemenkumham'] as $cert)
                <div class="col-lg-2 col-md-3 col-4">
                    <div class="certification-item p-3 text-center">
                        <div class="cert-logo-wrapper">
                            <img src="{{ asset('images/certificates/' . $cert . '.png') }}"
                                 alt="{{ strtoupper($cert) }}"
                                 class="img-fluid cert-logo">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-6">
                <a href="{{ route('certifications.index') }}" class="btn btn-outline-brown-dark btn-lg px-5 rounded-pill">
                    <i class="fas fa-certificate me-2"></i>Detail Sertifikasi
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section - Elegant Brown Cream -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Siap Memulai Proyek Anda?</h2>
                        <p class="lead mb-0">Konsultasikan kebutuhan proyek konstruksi atau non-konstruksi Anda dengan tim ahli kami.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-brown btn-lg px-5 rounded-pill">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* Brown & Cream Color Palette */
    :root {
        --brown-dark: #5D4037;
        --brown-medium: #8B6B61;
        --brown-light: #A1887F;
        --cream-gold: #D4AF37;
        --cream-dark: #D7CCC8;
        --cream-medium: #EFEBE9;
        --cream-light: #F5F0ED;
        --white: #ffffff;
        --light: #f8f9fa;
        --light-gray: #e9ecef;
        --gray: #6c757d;
        --dark: #212529;
        --shadow-sm: 0 .125rem .25rem rgba(0,0,0,.075);
        --shadow-md: 0 .5rem 1rem rgba(0,0,0,.15);
        --shadow-lg: 0 1rem 3rem rgba(0,0,0,.175);
    }

    /* Text Colors */
    .text-brown-dark { color: var(--brown-dark) !important; }
    .text-brown-medium { color: var(--brown-medium) !important; }
    .text-brown-light { color: var(--brown-light) !important; }
    .text-cream-gold { color: var(--cream-gold) !important; }

    /* Background Colors */
    .bg-brown-dark { background-color: var(--brown-dark) !important; }
    .bg-brown-medium { background-color: var(--brown-medium) !important; }
    .bg-brown-light { background-color: var(--brown-light) !important; }
    .bg-cream-gold { background-color: var(--cream-gold) !important; }
    .bg-cream-light { background-color: var(--cream-light) !important; }

    /* Subtle Backgrounds */
    .bg-brown-subtle { background-color: rgba(93, 64, 55, 0.1) !important; }
    .bg-brown-medium-subtle { background-color: rgba(139, 107, 97, 0.1) !important; }
    .bg-brown-light-subtle { background-color: rgba(161, 136, 127, 0.1) !important; }
    .bg-cream-gold-subtle { background-color: rgba(212, 175, 55, 0.1) !important; }

    /* Button Colors */
    .btn-brown {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-brown:hover {
        background-color: #4A342E;
        border-color: #4A342E;
        color: white;
    }

    .btn-outline-brown {
        border-color: var(--brown-dark);
        color: var(--brown-dark);
    }

    .btn-outline-brown:hover {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-brown-dark {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-outline-brown-dark {
        border-color: var(--brown-dark);
        color: var(--brown-dark);
    }

    .btn-outline-brown-dark:hover {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-cream {
        background-color: white;
        border-color: white;
        color: var(--brown-dark);
    }

    .btn-outline-cream {
        border-color: white;
        color: white;
        background: transparent;
    }

    .btn-outline-cream:hover {
        background-color: white;
        color: var(--brown-dark);
    }

    /* Global Styles */
    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background-color: var(--white);
        color: var(--dark);
    }

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

    /* Hero Slider Styles */
    .hero-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .slider-track {
        display: flex;
        width: 400%;
        height: 100%;
        transition: transform 1s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .slide {
        position: relative;
        width: 100%;
        height: 100%;
        flex-shrink: 0;
    }

    .slide-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        animation: kenburns 20s infinite;
    }

    @keyframes kenburns {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .slide.active .slide-image {
        animation: kenburns 20s infinite;
    }

    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(92, 64, 51, 0.85) 0%, rgba(210, 180, 140, 0.85) 100%);
        opacity: 0.7;
    }

    .slide-content {
        position: absolute;
        bottom: 20%;
        right: 10%;
        color: white;
        text-align: right;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease;
    }

    .slide.active .slide-content {
        opacity: 1;
        transform: translateY(0);
    }

    .slide-content h3 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .slide-content p {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    /* Slider Navigation */
    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        backdrop-filter: blur(5px);
    }

    .slider-nav:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-50%) scale(1.1);
    }

    .slider-nav.prev {
        left: 30px;
    }

    .slider-nav.next {
        right: 30px;
    }

    /* Slider Dots */
    .slider-dots {
        position: absolute;
        bottom: 30px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 15px;
        z-index: 10;
    }

    .slider-dots .dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .slider-dots .dot.active {
        background: white;
        transform: scale(1.3);
    }

    .slider-dots .dot:hover {
        background: white;
        transform: scale(1.2);
    }

    /* Hero Content */
    .hero-section .container {
        position: relative;
        z-index: 2;
    }

    /* Typography */
    .display-1 {
        font-weight: 800 !important;
        letter-spacing: -0.02em;
        line-height: 1.15;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        margin-bottom: 1.5rem !important;
    }

    .text-gradient-brown {
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: none;
    }

    /* Subtitle dengan spacing lebih baik */
    .subtitle-wrapper {
        margin-bottom: 2rem !important;
    }

    .subtitle-wrapper .h3 {
        margin-bottom: 0.75rem !important;
    }

    .typewriter-wrapper {
        display: inline-block;
        position: relative;
        margin-top: 0.5rem;
    }

    .typewriter-text {
        position: relative;
        display: inline-block;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
    }

    .typewriter-text::after {
        content: '';
        position: absolute;
        right: -8px;
        top: 50%;
        transform: translateY(-50%);
        width: 3px;
        height: 1.2em;
        background-color: white;
        animation: blink 1s infinite;
    }

    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }

    /* Company Badge */
    .company-badge {
        animation: fadeInDown 0.8s ease-out;
        margin-bottom: 2.5rem !important;
    }

    .badge.bg-brown-dark {
        background-color: rgba(93, 64, 55, 0.9) !important;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }

    /* Description dengan spacing lebih baik */
    .description-wrapper {
        margin-bottom: 3rem !important;
    }

    .description-wrapper p {
        line-height: 1.8 !important;
    }

    /* CTA Buttons dengan spacing lebih baik */
    .cta-buttons {
        margin-bottom: 4rem !important;
        gap: 1rem !important;
    }

    .cta-buttons .btn {
        margin: 0.25rem 0;
    }

    /* Stats dengan spacing lebih baik */
    .stats-wrapper {
        background: rgba(255, 255, 255, 0.1);
        padding: 2.5rem 2rem;
        border-radius: 1rem;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.2);
        animation: fadeInUp 0.8s ease-out 0.6s both;
        margin-top: 4rem !important;
    }

    .stat-item {
        text-align: center;
        padding: 0.5rem;
    }

    .stat-number {
        font-weight: 700;
        line-height: 1;
        margin-bottom: 0.75rem !important;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
        font-size: 3.5rem !important;
    }

    .stat-label {
        font-size: 0.95rem;
        color: rgba(255,255,255,0.85);
        font-weight: 500;
        letter-spacing: 0.3px;
    }

    /* Buttons */
    .btn {
        font-weight: 600;
        letter-spacing: 0.02em;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-brown:hover {
        background-color: #4A342E;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-cream:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-cream:hover {
        background-color: white;
        color: var(--brown-dark);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .rounded-pill {
        border-radius: 50rem !important;
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 2rem;
        left: 0;
        right: 0;
        text-align: center;
    }

    .scroll-down {
        color: var(--dark);
        font-size: 1.5rem;
        animation: bounce 2s infinite;
        display: inline-block;
        width: 50px;
        height: 50px;
        line-height: 50px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.9);
        box-shadow: var(--shadow-sm);
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    /* Service Cards */
    .service-card {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 1rem !important;
        overflow: hidden;
        border: 1px solid rgba(93, 64, 55, 0.1) !important;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg) !important;
        border-color: var(--brown-light) !important;
    }

    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .icon-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
    }

    /* Certification Logos */
    .certification-item {
        transition: all 0.3s ease;
    }

    .certification-item:hover {
        transform: scale(1.05);
    }

    .cert-logo-wrapper {
        background: var(--white);
        padding: 1.5rem;
        border-radius: 0.75rem;
        box-shadow: var(--shadow-sm);
        border: 1px solid rgba(93, 64, 55, 0.1);
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cert-logo {
        max-height: 60px;
        max-width: 100%;
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s ease;
    }

    .certification-item:hover .cert-logo {
        filter: grayscale(0%);
        opacity: 1;
    }

    /* CTA Section - Elegant Brown Cream */
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

    /* Animations */
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

    /* Responsive Design for Slider */
    @media (max-width: 768px) {
        .slider-nav {
            display: none;
        }

        .slide-content {
            bottom: 10%;
            right: 5%;
            text-align: center;
            width: 90%;
        }

        .slide-content h3 {
            font-size: 1.5rem;
        }

        .slide-content p {
            font-size: 1rem;
        }

        .slider-dots {
            bottom: 20px;
        }
    }

    /* Responsive Design untuk spacing di mobile */
    @media (max-width: 992px) {
        .display-1 {
            font-size: 3rem !important;
            margin-bottom: 1.25rem !important;
        }

        .company-badge {
            margin-bottom: 2rem !important;
        }

        .subtitle-wrapper {
            margin-bottom: 1.5rem !important;
        }

        .description-wrapper {
            margin-bottom: 2.5rem !important;
        }

        .cta-buttons {
            margin-bottom: 3rem !important;
            gap: 0.75rem !important;
        }

        .stats-wrapper {
            margin-top: 3rem !important;
            padding: 2rem 1.5rem;
        }

        .stat-number {
            font-size: 2.75rem !important;
            margin-bottom: 0.5rem !important;
        }

        .stat-label {
            font-size: 0.9rem;
        }

        .cta-content-wrapper {
            padding: 2rem 1.5rem;
        }
    }

    @media (max-width: 768px) {
        .display-1 {
            font-size: 2.5rem !important;
            margin-bottom: 1rem !important;
        }

        .stats-wrapper {
            padding: 1.5rem 1rem;
        }

        .stat-number {
            font-size: 2.25rem !important;
        }

        .cta-buttons .btn {
            width: 100%;
            max-width: 280px;
            margin: 0.5rem auto !important;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }

        .btn-brown, .btn-cream {
            width: 100%;
            max-width: 280px;
        }
    }

    @media (max-width: 576px) {
        .company-badge {
            margin-bottom: 1.5rem !important;
        }

        .badge.bg-brown-dark {
            font-size: 0.85rem;
            padding: 0.5rem 1rem;
        }

        .stats-wrapper .row {
            gap: 1rem;
        }

        .stat-item {
            padding: 0.75rem;
        }

        .cta-content-wrapper {
            padding: 1.5rem 1rem;
        }
    }

    /* Smooth Scroll */
    html {
        scroll-behavior: smooth;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Slider Variables
        const sliderTrack = document.querySelector('.slider-track');
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.slider-nav.prev');
        const nextBtn = document.querySelector('.slider-nav.next');
        let currentSlide = 0;
        let slideInterval;

        // Initialize Slider
        function initSlider() {
            updateSlider();
            startAutoSlide();
        }

        // Update Slider Position
        function updateSlider() {
            sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;

            // Update active classes
            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === currentSlide);
            });

            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentSlide);
            });
        }

        // Next Slide
        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlider();
        }

        // Previous Slide
        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateSlider();
        }

        // Start Auto Slide
        function startAutoSlide() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }

        // Stop Auto Slide
        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        // Event Listeners
        prevBtn.addEventListener('click', function() {
            prevSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        nextBtn.addEventListener('click', function() {
            nextSlide();
            stopAutoSlide();
            startAutoSlide();
        });

        // Dot Navigation
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const slideIndex = parseInt(this.dataset.slide);
                currentSlide = slideIndex;
                updateSlider();
                stopAutoSlide();
                startAutoSlide();
            });
        });

        // Pause on hover
        const slider = document.querySelector('.hero-slider');
        slider.addEventListener('mouseenter', stopAutoSlide);
        slider.addEventListener('mouseleave', startAutoSlide);

        // Initialize
        initSlider();

        // Typewriter Effect
        const textElement = document.querySelector('.typewriter-text');
        if (textElement) {
            const originalText = textElement.textContent;
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

        // Animate stats on scroll
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const stats = entry.target.querySelectorAll('.stat-number');
                    stats.forEach(stat => {
                        const target = parseInt(stat.textContent);
                        let current = 0;
                        const increment = target / 50;

                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            stat.textContent = Math.floor(current) + '+';
                        }, 30);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats-wrapper');
        if (statsSection) {
            observer.observe(statsSection);
        }
    });
</script>
@endpush
