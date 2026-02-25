@extends('layouts.app')

@section('title', 'Tentang Kami | PT Mitra Nusa Konsulindo')
@section('description', 'Profil lengkap PT Mitra Nusa Konsulindo - Perusahaan konsultan konstruksi dan non-konstruksi profesional sejak tahun 2020.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="about-hero position-relative overflow-hidden">
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
                            <i class="fas fa-building me-2"></i>TENTANG KAMI
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Profil <span class="text-gradient-brown">Perusahaan</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Mengenal Lebih Dekat
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                PT Mitra Nusa Konsulindo
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Perusahaan konsultan mandiri yang berdiri sejak tahun 2020, bergerak di bidang
                        Jasa Konsultansi Konstruksi dan Non-Konstruksi dengan dukungan tenaga ahli profesional.
                    </p>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#company-profile" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- COMPANY PROFILE SECTION -->
    <section id="company-profile" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row g-5 align-items-center">
                <!-- Left Column: Company Description with 3D Card -->
                <div class="col-lg-6">
                    <div class="floating-card-3d animate-on-scroll">
                        <div class="profile-card-3d">
                            <div class="profile-card-content">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-4">
                                    <i class="fas fa-medal me-2"></i>BERDIRI SEJAK 2020
                                </span>
                                <h2 class="display-5 fw-bold text-brown-dark mb-4">PT Mitra Nusa Konsulindo</h2>
                                <p class="lead text-brown-medium mb-4">
                                    Perusahaan konsultan mandiri yang berdiri sejak tahun 2020, bergerak di bidang
                                    Jasa Konsultansi Konstruksi dan Non-Konstruksi.
                                </p>
                                <p class="text-brown-medium mb-5">
                                    Kami didukung oleh tenaga ahli yang berpengalaman, berdedikasi, dan profesional.
                                    Kami bekerja sama dengan klien dalam merencanakan, mengembangkan, menerapkan,
                                    mengawasi, dan mengevaluasi program perencanaan yang inovatif.
                                </p>

                                <div class="d-flex flex-wrap gap-3">
                                    <a href="{{ asset('documents/company-profile/Company-Profile-Mitra-Nusa-Konsulindo.pdf') }}"
                                       class="btn btn-brown-3d px-4 py-3 rounded-pill" target="_blank">
                                        <i class="fas fa-download me-2"></i>Download Profil
                                        <span class="btn-shine"></span>
                                    </a>
                                    <a href="{{ route('contact') }}" class="btn btn-outline-brown-3d px-4 py-3 rounded-pill">
                                        <i class="fas fa-phone me-2"></i>Hubungi Kami
                                    </a>
                                </div>
                            </div>
                            <!-- 3D decorative elements -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Company Data with Premium Cards -->
                <div class="col-lg-6">
                    <div class="company-data-grid">
                        <div class="section-header mb-4">
                            <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                                <i class="fas fa-database me-2"></i>DATA POKOK PERUSAHAAN
                            </span>
                            <h3 class="display-6 fw-bold text-brown-dark">Identitas Perusahaan</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Data Item 1 -->
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-landmark"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">Nama Perusahaan</span>
                                            <span class="data-value">PT. MITRA NUSA KONSULINDO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Item 2 -->
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">Bentuk Perusahaan</span>
                                            <span class="data-value">Perseroan Terbatas (PT)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Item 3 -->
                            <div class="col-12">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">Alamat</span>
                                            <span class="data-value">Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani-Bandung 40291</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Item 4 -->
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">Tahun Berdiri</span>
                                            <span class="data-value highlight-year">2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Item 5 -->
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">NPWP</span>
                                            <span class="data-value">96.431.796.0-429.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Item 6 -->
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-id-card"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">NIB</span>
                                            <span class="data-value">0257011100093</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Item 7 -->
                            <div class="col-md-6">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-handshake"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">Asosiasi</span>
                                            <span class="data-value">INKINDO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Data Item 8 -->
                            <div class="col-12">
                                <div class="data-card-3d animate-on-scroll">
                                    <div class="data-card-inner">
                                        <div class="data-icon">
                                            <i class="fas fa-check-circle"></i>
                                        </div>
                                        <div class="data-content">
                                            <span class="data-label">Status PKP</span>
                                            <span class="data-value">
                                                <span class="status-badge-3d active">
                                                    Aktif sejak 16 Desember 2020
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISION & MISSION SECTION – 3D GLASSMORPHISM CARDS -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-bullseye me-2"></i>ARAH & TUJUAN
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Visi & Misi Perusahaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Komitmen kami untuk memberikan layanan terbaik dan solusi inovatif.
                </p>
            </div>

            <div class="row g-5">
                <!-- Vision Card -->
                <div class="col-lg-6">
                    <div class="vision-card-3d animate-on-scroll">
                        <div class="vision-card-inner">
                            <div class="vision-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="fw-bold text-brown-dark mt-4 mb-4">Visi Perusahaan</h3>
                            <div class="vision-content">
                                <p class="text-brown-medium fs-5">
                                    "Menjadi perusahaan konsultan terdepan yang memberikan solusi inovatif dan berkelanjutan
                                    dalam bidang konstruksi dan non-konstruksi, dengan mengutamakan profesionalisme,
                                    kualitas, dan kepuasan klien."
                                </p>
                            </div>
                            <div class="vision-decoration"></div>
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="col-lg-6">
                    <div class="mission-card-3d animate-on-scroll">
                        <div class="mission-card-inner">
                            <div class="mission-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="fw-bold text-brown-dark mt-4 mb-4">Misi Perusahaan</h3>
                            <div class="mission-content">
                                <ul class="mission-list-3d">
                                    <li>
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <span>Memberikan layanan konsultansi yang berkualitas tinggi</span>
                                    </li>
                                    <li>
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <span>Mengembangkan solusi inovatif dan berkelanjutan</span>
                                    </li>
                                    <li>
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <span>Membangun kemitraan jangka panjang dengan klien</span>
                                    </li>
                                    <li>
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <span>Meningkatkan kompetensi SDM secara berkelanjutan</span>
                                    </li>
                                    <li>
                                        <div class="mission-icon">
                                            <i class="fas fa-check"></i>
                                        </div>
                                        <span>Berkontribusi positif bagi masyarakat dan lingkungan</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mission-decoration"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- QUICK LINKS – 3D INTERACTIVE CARDS -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-link me-2"></i>JELAJAHI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Informasi Lainnya</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Temukan lebih banyak tentang perusahaan kami.
                </p>
            </div>

            <div class="row g-4">
                <!-- Quick Link 1 -->
                <div class="col-md-3 col-6">
                    <a href="{{ route('about.history') }}" class="quick-link-3d animate-on-scroll">
                        <div class="quick-link-inner">
                            <div class="quick-link-icon">
                                <i class="fas fa-history"></i>
                            </div>
                            <h5 class="quick-link-title">Sejarah</h5>
                            <p class="quick-link-desc">Perjalanan kami sejak berdiri</p>
                        </div>
                    </a>
                </div>

                <!-- Quick Link 2 -->
                <div class="col-md-3 col-6">
                    <a href="{{ route('about.vision-mission') }}" class="quick-link-3d animate-on-scroll">
                        <div class="quick-link-inner">
                            <div class="quick-link-icon">
                                <i class="fas fa-crosshairs"></i>
                            </div>
                            <h5 class="quick-link-title">Visi & Misi</h5>
                            <p class="quick-link-desc">Tujuan dan komitmen kami</p>
                        </div>
                    </a>
                </div>

                <!-- Quick Link 3 -->
                <div class="col-md-3 col-6">
                    <a href="{{ route('about.organization') }}" class="quick-link-3d animate-on-scroll">
                        <div class="quick-link-inner">
                            <div class="quick-link-icon">
                                <i class="fas fa-sitemap"></i>
                            </div>
                            <h5 class="quick-link-title">Struktur</h5>
                            <p class="quick-link-desc">Organisasi perusahaan</p>
                        </div>
                    </a>
                </div>

                <!-- Quick Link 4 -->
                <div class="col-md-3 col-6">
                    <a href="{{ route('management') }}" class="quick-link-3d animate-on-scroll">
                        <div class="quick-link-inner">
                            <div class="quick-link-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5 class="quick-link-title">Manajemen</h5>
                            <p class="quick-link-desc">Tim pemimpin perusahaan</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US – 3D FEATURE CARDS -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-star me-2"></i>KEUNGGULAN
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Mengapa Memilih Kami?</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Keunggulan yang membuat kami berbeda dan dipercaya klien.
                </p>
            </div>

            <div class="row g-4">
                <!-- Advantage 1 -->
                <div class="col-md-4">
                    <div class="advantage-card-3d animate-on-scroll">
                        <div class="advantage-inner">
                            <div class="advantage-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-award"></i>
                            </div>
                            <h5 class="advantage-title">Profesional & Berpengalaman</h5>
                            <p class="advantage-desc">Tim ahli yang berpengalaman di bidangnya dengan sertifikasi kompetensi lengkap.</p>
                        </div>
                    </div>
                </div>

                <!-- Advantage 2 -->
                <div class="col-md-4">
                    <div class="advantage-card-3d animate-on-scroll">
                        <div class="advantage-inner">
                            <div class="advantage-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h5 class="advantage-title">Lisensi & Sertifikasi Lengkap</h5>
                            <p class="advantage-desc">Memiliki SBU, ISO, dan keanggotaan INKINDO serta sertifikasi resmi lainnya.</p>
                        </div>
                    </div>
                </div>

                <!-- Advantage 3 -->
                <div class="col-md-4">
                    <div class="advantage-card-3d animate-on-scroll">
                        <div class="advantage-inner">
                            <div class="advantage-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h5 class="advantage-title">Kemitraan Jangka Panjang</h5>
                            <p class="advantage-desc">Membangun hubungan kerjasama berkelanjutan dengan berbagai klien dan mitra.</p>
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
                        <h2 class="display-6 fw-bold mb-3">Siap Bekerja Sama dengan Kami?</h2>
                        <p class="lead mb-0">
                            Percayakan proyek konsultansi Anda kepada tenaga ahli yang berpengalaman dan tersertifikasi.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
                                <span class="btn-shine"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

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
    .about-hero {
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

    /* ===== 3D PROFILE CARD ===== */
    .floating-card-3d {
        perspective: 1000px;
    }

    .profile-card-3d {
        background: white;
        border-radius: 2rem;
        padding: 2.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        position: relative;
        overflow: hidden;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(2deg);
    }

    .profile-card-3d:hover {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-10px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    .profile-card-content {
        position: relative;
        z-index: 2;
    }

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

    /* ----- 3D Data Cards ----- */
    .data-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .data-card-inner {
        background: white;
        border-radius: 1rem;
        padding: 1.25rem;
        display: flex;
        align-items: center;
        gap: 1rem;
        border: 1px solid rgba(93,64,55,0.08);
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
        transform-style: preserve-3d;
        transform: rotateY(0deg);
        height: 100%;
    }

    .data-card-3d:hover .data-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-3px);
        box-shadow: 0 15px 30px rgba(93,64,55,0.1);
        border-color: var(--cream-gold);
    }

    .data-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
        transition: all 0.3s;
    }

    .data-card-3d:hover .data-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .data-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .data-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--brown-medium);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.2rem;
    }

    .data-value {
        font-size: 0.95rem;
        font-weight: 600;
        color: var(--brown-dark);
        line-height: 1.4;
    }

    .highlight-year {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--brown-dark);
        background: linear-gradient(135deg, rgba(212,175,55,0.2), transparent);
        padding: 0.2rem 1rem;
        border-radius: 20px;
        display: inline-block;
    }

    .status-badge-3d {
        display: inline-block;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
        color: white;
        box-shadow: 0 3px 8px rgba(76,175,80,0.3);
    }

    /* ----- 3D Vision & Mission Cards ----- */
    .vision-card-3d, .mission-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .vision-card-inner, .mission-card-inner {
        background: white;
        border-radius: 2rem;
        padding: 2.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .vision-card-3d:hover .vision-card-inner,
    .mission-card-3d:hover .mission-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
    }

    .vision-icon-wrapper, .mission-icon-wrapper {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        font-size: 2rem;
        color: white;
        position: relative;
        z-index: 2;
        transition: all 0.3s;
    }

    .vision-card-3d:hover .vision-icon-wrapper,
    .mission-card-3d:hover .mission-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .icon-glow {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.8), transparent 70%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .vision-card-3d:hover .icon-glow,
    .mission-card-3d:hover .icon-glow {
        opacity: 0.5;
    }

    .vision-decoration, .mission-decoration {
        position: absolute;
        top: 0;
        right: 0;
        width: 150px;
        height: 150px;
        background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.05) 50%);
        border-radius: 0 2rem 0 0;
        z-index: 1;
    }

    /* Mission List 3D */
    .mission-list-3d {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .mission-list-3d li {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
        padding: 0.75rem;
        background: rgba(245,240,237,0.5);
        border-radius: 1rem;
        transition: all 0.3s;
        border: 1px solid transparent;
    }

    .mission-list-3d li:hover {
        background: white;
        border-color: var(--cream-gold);
        transform: translateX(5px);
        box-shadow: 0 5px 15px rgba(93,64,55,0.05);
    }

    .mission-list-3d .mission-icon {
        width: 30px;
        height: 30px;
        background: var(--brown-dark);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 0.8rem;
        flex-shrink: 0;
    }

    /* ----- 3D Quick Links ----- */
    .quick-link-3d {
        display: block;
        text-decoration: none;
        perspective: 1000px;
        height: 100%;
    }

    .quick-link-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 1.5rem;
        text-align: center;
        border: 1px solid rgba(93,64,55,0.08);
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg);
        height: 100%;
    }

    .quick-link-3d:hover .quick-link-inner {
        transform: rotateY(3deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 20px 40px rgba(93,64,55,0.1);
        border-color: var(--cream-gold);
    }

    .quick-link-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        color: white;
        font-size: 1.5rem;
        transition: all 0.3s;
    }

    .quick-link-3d:hover .quick-link-icon {
        transform: scale(1.1) rotate(5deg);
    }

    .quick-link-title {
        color: var(--brown-dark);
        font-weight: 700;
        margin-bottom: 0.5rem;
        font-size: 1.1rem;
    }

    .quick-link-desc {
        color: var(--brown-medium);
        font-size: 0.85rem;
        margin-bottom: 0;
    }

    /* ----- 3D Advantage Cards ----- */
    .advantage-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .advantage-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem;
        text-align: center;
        border: 1px solid rgba(93,64,55,0.08);
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg);
        height: 100%;
    }

    .advantage-card-3d:hover .advantage-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 20px 40px rgba(93,64,55,0.1);
        border-color: var(--cream-gold);
    }

    .advantage-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        color: white;
        font-size: 1.8rem;
        position: relative;
        transition: all 0.3s;
    }

    .advantage-card-3d:hover .advantage-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .advantage-title {
        color: var(--brown-dark);
        font-weight: 700;
        margin-bottom: 1rem;
        font-size: 1.2rem;
    }

    .advantage-desc {
        color: var(--brown-medium);
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* ----- 3D Buttons (same as home but with 3D effect) ----- */
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

    .btn-brown-3d::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
    }

    .btn-brown-3d:hover::before {
        left: 100%;
    }

    .btn-outline-brown-3d {
        border: 2px solid var(--brown-dark);
        color: var(--brown-dark);
        background: transparent;
        font-weight: 600;
        transition: all 0.3s;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    .btn-outline-brown-3d:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(93,64,55,0.2);
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

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .profile-card-3d { padding: 2rem; }
        .vision-card-inner, .mission-card-inner { padding: 2rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .profile-card-3d { padding: 1.5rem; }
        .data-card-inner { padding: 1rem; }
        .data-icon { width: 40px; height: 40px; font-size: 1rem; }
        .quick-link-inner { padding: 1.5rem; }
        .advantage-inner { padding: 1.5rem; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
        .profile-card-3d { padding: 1.25rem; }
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
        const cards = document.querySelectorAll('.profile-card-3d, .data-card-inner, .vision-card-inner, .mission-card-inner, .quick-link-inner, .advantage-inner');
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;

                if (card.classList.contains('profile-card-3d') || card.classList.contains('vision-card-inner') || card.classList.contains('mission-card-inner')) {
                    card.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg) translateY(-5px)`;
                } else {
                    card.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg)`;
                }
            });

            card.addEventListener('mouseleave', () => {
                if (card.classList.contains('profile-card-3d') || card.classList.contains('vision-card-inner') || card.classList.contains('mission-card-inner')) {
                    card.style.transform = 'rotateY(0deg) rotateX(1deg)';
                } else {
                    card.style.transform = 'rotateY(0deg) rotateX(0deg)';
                }
            });
        });
    });
</script>
@endpush
