@extends('layouts.app')

@section('title', 'Manajemen Perusahaan | PT Mitra Nusa Konsulindo')
@section('description', 'Struktur organisasi profesional PT Mitra Nusa Konsulindo – Dewan Komisaris, Direksi, Divisi, dan Tim Pendukung yang berpengalaman.')

@section('content')
    <!-- HERO SECTION – PREMIUM, SAME STYLE AS HOME -->
    <section class="management-hero position-relative overflow-hidden">
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
                            <i class="fas fa-sitemap me-2"></i>STRUKTUR ORGANISASI
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Manajemen <span class="text-gradient-brown">Perusahaan</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Dipimpin oleh Tenaga Profesional
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Berpengalaman & Bersertifikasi
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Struktur organisasi yang solid dan transparan, dirancang untuk memastikan
                        setiap proyek konsultansi konstruksi dan non‑konstruksi berjalan dengan
                        kualitas terbaik, tepat waktu, dan sesuai harapan klien.
                    </p>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator (optional) -->
        <div class="scroll-indicator">
            <a href="#board-of-commissioners" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- ===== DEWAN KOMISARIS & DIREKSI ===== -->
    <section id="board-of-commissioners" class="py-6 bg-white position-relative">
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <!-- Section Title -->
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-crown me-2"></i>PIMPINAN PERUSAHAAN
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Dewan Komisaris & Direksi</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Kepemimpinan strategis yang mengarahkan visi dan misi perusahaan.
                </p>
            </div>

            <!-- Komisaris -->
            <div class="row justify-content-center g-4 mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="management-card commissioner">
                        <div class="card-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h5 class="card-name">DEDE SAMSUL MUHAROM</h5>
                        <div class="card-role">Komisaris Utama</div>
                        <div class="card-divider"></div>
                        <p class="card-desc">Pengawasan strategis & tata kelola perusahaan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="management-card commissioner">
                        <div class="card-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h5 class="card-name">ENDAH NURAENI</h5>
                        <div class="card-role">Komisaris</div>
                        <div class="card-divider"></div>
                        <p class="card-desc">Pengawasan manajemen & kepatuhan</p>
                    </div>
                </div>
            </div>

            <!-- Direksi -->
            <div class="row justify-content-center g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="management-card director">
                        <div class="card-icon">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h5 class="card-name">MURIA CIPTA, ST</h5>
                        <div class="card-role">Direktur Utama</div>
                        <div class="card-divider"></div>
                        <p class="card-desc">Kepemimpinan eksekutif & strategi perusahaan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="management-card director">
                        <div class="card-icon">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h5 class="card-name">ANDRI HENDRAWAN</h5>
                        <div class="card-role">Direktur Operasional & Teknis</div>
                        <div class="card-divider"></div>
                        <p class="card-desc">Pengelolaan operasional & teknis proyek</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== DIVISI PERUSAHAAN ===== -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <!-- Section Title -->
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-diagram-project me-2"></i>STRUKTUR DIVISI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Divisi Perusahaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Didukung oleh tenaga ahli di berbagai bidang untuk layanan terintegrasi.
                </p>
            </div>

            <!-- Divisi – sesuai PDF halaman 11 -->
            <div class="row g-4 justify-content-center">
                @php
                    $divisions = [
                        ['name' => 'Divisi Pengembangan', 'icon' => 'fa-chart-line'],
                        ['name' => 'Divisi Umum', 'icon' => 'fa-building'],
                        ['name' => 'Divisi Pemasaran, Pembina Relasi & Promosi', 'icon' => 'fa-bullhorn'],
                        ['name' => 'Divisi Administrasi & Personalia', 'icon' => 'fa-users-cog'],
                        ['name' => 'Divisi Keuangan & Perlengkapan', 'icon' => 'fa-coins'],
                        ['name' => 'Divisi Tata Ruang', 'icon' => 'fa-map-marked-alt'],
                        ['name' => 'Divisi Arsitektur & Lanskap', 'icon' => 'fa-drafting-compass'],
                        ['name' => 'Divisi Lingkungan', 'icon' => 'fa-leaf'],
                        ['name' => 'Divisi Sipil', 'icon' => 'fa-industry'],
                        ['name' => 'Divisi Manajemen', 'icon' => 'fa-tasks'],
                    ];
                @endphp

                @foreach($divisions as $division)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="division-card animate-on-scroll">
                        <div class="division-icon">
                            <i class="fas {{ $division['icon'] }} fa-2x"></i>
                        </div>
                        <h6 class="division-name">{{ $division['name'] }}</h6>
                        <div class="division-divider"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ===== TENAGA AHLI & TIM PENDUKUNG ===== -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <!-- Tenaga Ahli -->
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-user-graduate me-2"></i>SDM PROFESIONAL
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Tenaga Ahli</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Konsultan berpengalaman di bidangnya, siap memberikan solusi terbaik.
                </p>
            </div>

            <div class="row justify-content-center g-4 mb-6">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="expert-card">
                        <div class="expert-icon">
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                        <h5 class="expert-title">Tenaga Ahli</h5>
                        <p class="expert-desc">Arsitektur, Sipil, Lingkungan, Tata Ruang, Manajemen</p>
                        <span class="expert-badge">15+ Profesional</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="expert-card">
                        <div class="expert-icon">
                            <i class="fas fa-user-md fa-3x"></i>
                        </div>
                        <h5 class="expert-title">Tenaga Ahli Madya</h5>
                        <p class="expert-desc">Insinyur Profesional, Arsitek Madya</p>
                        <span class="expert-badge">Bersertifikat</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="expert-card">
                        <div class="expert-icon">
                            <i class="fas fa-flask fa-3x"></i>
                        </div>
                        <h5 class="expert-title">Peneliti & Pengembang</h5>
                        <p class="expert-desc">Studi kelayakan, penelitian, inovasi</p>
                        <span class="expert-badge">R&D</span>
                    </div>
                </div>
            </div>

            <!-- Tim Pendukung -->
            <div class="section-header text-center mb-6">
                <h3 class="display-6 fw-bold text-brown-dark mb-3">Tim Pendukung</h3>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Staff profesional dan tenaga pendukung yang solid.
                </p>
            </div>

            <div class="row justify-content-center g-4">
                @php
                    $supports = [
                        ['name' => 'Staff Administrasi', 'icon' => 'fa-file-invoice'],
                        ['name' => 'Staff Keuangan', 'icon' => 'fa-calculator'],
                        ['name' => 'Staff Personalia', 'icon' => 'fa-id-card'],
                        ['name' => 'Staff Pemasaran', 'icon' => 'fa-chart-simple'],
                        ['name' => 'Staff Teknis', 'icon' => 'fa-gears'],
                        ['name' => 'Tenaga Pendukung', 'icon' => 'fa-toolbox'],
                    ];
                @endphp

                @foreach($supports as $support)
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="support-card animate-on-scroll">
                        <div class="support-icon">
                            <i class="fas {{ $support['icon'] }}"></i>
                        </div>
                        <span class="support-name">{{ $support['name'] }}</span>
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
                        <h2 class="display-6 fw-bold mb-3">Berkolaborasi dengan Tim Terbaik</h2>
                        <p class="lead mb-0">
                            Percayakan proyek konsultansi Anda kepada tenaga ahli yang berpengalaman dan tersertifikasi.
                        </p>
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
    }

    /* ----- Hero Section (same as home) ----- */
    .management-hero {
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

    /* ----- Section Header ----- */
    .section-header {
        margin-bottom: 3rem;
    }

    .section-header .badge {
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    /* ----- Management Cards (Dewan Komisaris & Direksi) ----- */
    .management-card {
        background: white;
        border-radius: 1.75rem;
        padding: 2rem 1.5rem;
        text-align: center;
        border: 1px solid rgba(93,64,55,0.08);
        box-shadow: 0 10px 25px rgba(0,0,0,0.02);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .management-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--cream-gold), var(--brown-light));
        opacity: 0;
        transition: opacity 0.3s;
    }

    .management-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 45px rgba(93,64,55,0.08);
        border-color: rgba(212,175,55,0.3);
    }

    .management-card:hover::before {
        opacity: 1;
    }

    .management-card.commissioner .card-icon i {
        color: var(--cream-gold);
    }

    .management-card.director .card-icon i {
        color: var(--brown-dark);
    }

    .card-icon {
        width: 70px;
        height: 70px;
        background: rgba(93,64,55,0.03);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.25rem;
        font-size: 2rem;
        transition: all 0.3s;
    }

    .management-card:hover .card-icon {
        background: rgba(212,175,55,0.1);
        transform: scale(1.05);
    }

    .card-name {
        font-weight: 700;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
        font-size: 1.2rem;
    }

    .card-role {
        font-weight: 600;
        color: var(--brown-medium);
        font-size: 0.95rem;
        margin-bottom: 1rem;
        letter-spacing: 0.3px;
    }

    .card-divider {
        width: 40px;
        height: 2px;
        background: linear-gradient(90deg, var(--cream-gold), var(--brown-light));
        margin: 0.75rem auto;
        border-radius: 2px;
    }

    .card-desc {
        color: var(--brown-medium);
        font-size: 0.9rem;
        line-height: 1.5;
        margin-bottom: 0;
    }

    /* ----- Division Cards ----- */
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

    .division-card {
        background: white;
        border-radius: 1.5rem;
        padding: 2rem 1.25rem;
        text-align: center;
        border: 1px solid rgba(93,64,55,0.06);
        box-shadow: 0 8px 20px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
        height: 100%;
    }

    .division-card:hover {
        transform: translateY(-8px);
        border-color: rgba(212,175,55,0.3);
        box-shadow: 0 20px 30px rgba(93,64,55,0.05);
    }

    .division-icon {
        color: var(--brown-dark);
        margin-bottom: 1rem;
        transition: transform 0.3s;
    }

    .division-card:hover .division-icon {
        transform: scale(1.1);
        color: var(--cream-gold);
    }

    .division-name {
        font-weight: 700;
        color: var(--brown-dark);
        font-size: 1rem;
        line-height: 1.4;
        margin-bottom: 0.75rem;
    }

    .division-divider {
        width: 30px;
        height: 2px;
        background: rgba(212,175,55,0.3);
        margin: 0 auto;
        border-radius: 2px;
    }

    /* ----- Expert Cards (Tenaga Ahli) ----- */
    .expert-card {
        background: linear-gradient(145deg, white, #fefefe);
        border-radius: 2rem;
        padding: 2.5rem 1.5rem;
        text-align: center;
        border: 1px solid rgba(93,64,55,0.05);
        box-shadow: 0 15px 30px rgba(0,0,0,0.02);
        transition: all 0.4s;
        height: 100%;
    }

    .expert-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 45px rgba(93,64,55,0.08);
        border-color: rgba(212,175,55,0.2);
    }

    .expert-icon {
        color: var(--brown-dark);
        margin-bottom: 1.5rem;
        transition: all 0.3s;
    }

    .expert-card:hover .expert-icon {
        color: var(--cream-gold);
        transform: scale(1.05);
    }

    .expert-title {
        font-weight: 700;
        color: var(--brown-dark);
        margin-bottom: 0.75rem;
    }

    .expert-desc {
        color: var(--brown-medium);
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 1.25rem;
    }

    .expert-badge {
        display: inline-block;
        background: rgba(212,175,55,0.1);
        color: var(--brown-dark);
        padding: 0.4rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 600;
    }

    /* ----- Support Cards ----- */
    .support-card {
        background: linear-gradient(145deg, var(--brown-dark), #4A342E);
        border-radius: 1.5rem;
        padding: 1.75rem 1rem;
        text-align: center;
        color: white;
        transition: all 0.4s;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255,255,255,0.1);
        box-shadow: 0 12px 25px rgba(93,64,55,0.2);
    }

    .support-card:hover {
        transform: translateY(-8px);
        background: linear-gradient(145deg, #6B4E3A, #4A342E);
        box-shadow: 0 20px 35px rgba(93,64,55,0.3);
    }

    .support-icon {
        font-size: 1.8rem;
        margin-bottom: 0.75rem;
        color: var(--cream-gold);
    }

    .support-name {
        font-weight: 600;
        font-size: 0.95rem;
        letter-spacing: 0.3px;
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

    /* ----- Buttons (same as home) ----- */
    .btn-brown {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-brown:hover {
        background-color: #4A342E;
        border-color: #4A342E;
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    /* ----- Background decoration ----- */
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
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .management-hero { padding: 5rem 0 3rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .management-card { padding: 1.5rem; }
        .division-card { padding: 1.5rem; }
        .expert-card { padding: 2rem 1rem; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
        .card-name { font-size: 1rem; }
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
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.management-card, .division-card, .expert-card, .support-card').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endpush
