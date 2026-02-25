@extends('layouts.app')

@section('title', 'Sertifikasi & Lisensi | PT Mitra Nusa Konsulindo')
@section('description', 'Dokumen sertifikasi, lisensi, dan akreditasi resmi PT Mitra Nusa Konsulindo: SBU Konstruksi, ISO, INKINDO, Kemenkumham.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="certifications-hero position-relative overflow-hidden">
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
                            <i class="fas fa-certificate me-2"></i>SERTIFIKASI & LISENSI
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Legalitas & <span class="text-gradient-brown">Akreditasi</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Jaminan Kualitas Layanan
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                SBU · ISO · INKINDO · KADIN
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Kami memiliki berbagai sertifikasi resmi yang menjamin profesionalisme,
                        kualitas, dan kepatuhan terhadap standar nasional maupun internasional.
                    </p>

                    <!-- Breadcrumb with glassmorphism -->
                    <nav aria-label="breadcrumb" class="breadcrumb-nav mt-5 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-brown-medium">Beranda</a>
                            </li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Sertifikasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#certification-categories" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- CERTIFICATION CATEGORIES SECTION – 3D CARDS -->
    <section id="certification-categories" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-hard-hat me-2"></i>KLASIFIKASI SERTIFIKASI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Sertifikasi Perusahaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Kami memiliki berbagai sertifikasi yang menjamin kualitas layanan kami.
                </p>
            </div>

            <div class="row g-4">
                <!-- SBU Konstruksi Card -->
                <div class="col-md-4">
                    <div class="cert-category-3d animate-on-scroll">
                        <div class="cert-category-inner">
                            <div class="cert-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-hard-hat fa-4x text-brown-dark"></i>
                            </div>
                            <h4 class="fw-bold text-brown-dark mb-3">SBU Konstruksi</h4>
                            <p class="text-brown-medium mb-4">Sertifikasi Badan Usaha untuk Jasa Konstruksi dari LPJK</p>
                            <div class="cert-badges mb-4">
                                <span class="badge bg-brown-light-subtle text-brown-dark me-2">10+ Klasifikasi</span>
                                <span class="badge bg-success">Aktif</span>
                            </div>
                            <a href="{{ route('certifications.sbu') }}" class="btn btn-outline-brown-3d w-100 rounded-pill">
                                <span>Lihat Detail</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- ISO Certifications Card -->
                <div class="col-md-4">
                    <div class="cert-category-3d animate-on-scroll">
                        <div class="cert-category-inner">
                            <div class="cert-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-certificate fa-4x text-brown-dark"></i>
                            </div>
                            <h4 class="fw-bold text-brown-dark mb-3">Sertifikasi ISO</h4>
                            <p class="text-brown-medium mb-4">Sistem Manajemen Mutu, Lingkungan, K3, dan Anti-Suap</p>
                            <div class="cert-badges mb-4">
                                <span class="badge bg-brown-light-subtle text-brown-dark me-2">4 Sistem</span>
                                <span class="badge bg-success">Terverifikasi</span>
                            </div>
                            <a href="{{ route('certifications.iso') }}" class="btn btn-outline-brown-3d w-100 rounded-pill">
                                <span>Lihat Detail</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Legal Documents Card -->
                <div class="col-md-4">
                    <div class="cert-category-3d animate-on-scroll">
                        <div class="cert-category-inner">
                            <div class="cert-icon-wrapper">
                                <div class="icon-glow"></div>
                                <i class="fas fa-file-contract fa-4x text-brown-dark"></i>
                            </div>
                            <h4 class="fw-bold text-brown-dark mb-3">Dokumen Legal</h4>
                            <p class="text-brown-medium mb-4">Dokumen pendirian, perizinan, dan legalitas perusahaan</p>
                            <div class="cert-badges mb-4">
                                <span class="badge bg-brown-light-subtle text-brown-dark me-2">Lengkap</span>
                                <span class="badge bg-success">Terdaftar</span>
                            </div>
                            <a href="{{ route('certifications.legal') }}" class="btn btn-outline-brown-3d w-100 rounded-pill">
                                <span>Lihat Detail</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ACTIVE CERTIFICATIONS TABLE – PREMIUM CARD -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-list-check me-2"></i>DAFTAR SERTIFIKAT AKTIF
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Sertifikasi Aktif</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Berikut adalah sertifikasi yang masih berlaku dan kami pegang saat ini.
                </p>
            </div>

            <div class="cert-table-card animate-on-scroll">
                <div class="table-responsive">
                    <table class="table premium-table">
                        <thead>
                            <tr>
                                <th>Jenis Sertifikasi</th>
                                <th>Nomor</th>
                                <th>Penerbit</th>
                                <th>Masa Berlaku</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($activeCertifications as $cert)
                            <tr class="cert-row">
                                <td>
                                    <div class="cert-type">
                                        <strong>{{ $cert['type'] }}</strong>
                                        <br><small class="text-brown-medium">{{ $cert['description'] }}</small>
                                    </div>
                                </td>
                                <td class="text-brown-dark">{{ $cert['number'] }}</td>
                                <td>{{ $cert['issuer'] }}</td>
                                <td>
                                    <div class="cert-date">
                                        {{ $cert['valid_from'] }} - {{ $cert['valid_until'] ?? 'Tanpa Batas' }}
                                        @if(!empty($cert['valid_until']) && $cert['valid_until'] !== 'Tidak Terbatas')
                                        <br><small class="text-brown-medium">
                                            {{ \Carbon\Carbon::parse($cert['valid_until'])->diffForHumans() }}
                                        </small>
                                        @elseif(empty($cert['valid_until']))
                                        <br><small class="text-brown-medium">Berlaku selamanya</small>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    @if($cert['status'] === 'active')
                                        <span class="status-badge active">Aktif</span>
                                    @elseif($cert['status'] === 'expiring')
                                        <span class="status-badge expiring">Akan Berakhir</span>
                                    @else
                                        <span class="status-badge">{{ $cert['status'] }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="action-buttons">
                                        @if(isset($cert['slug']))
                                        <a href="{{ route('certifications.view', $cert['slug']) }}"
                                           class="btn-action view"
                                           target="_blank"
                                           title="Lihat Dokumen">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('certifications.download', $cert['slug']) }}"
                                           class="btn-action download"
                                           title="Download Dokumen">
                                            <i class="fas fa-download"></i>
                                        </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- ASSOCIATIONS SECTION – 3D CARDS -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-handshake me-2"></i>KEANGGOTAAN
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Asosiasi & Keanggotaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Kami tergabung dalam asosiasi profesional terkemuka di Indonesia.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- INKINDO Card -->
                <div class="col-md-5">
                    <div class="association-card-3d animate-on-scroll">
                        <div class="association-card-inner">
                            <div class="association-logo-wrapper">
                                <img src="{{ asset('images/certificates/inkindo-logo.png') }}"
                                     alt="INKINDO"
                                     class="association-logo"
                                     onerror="this.src='https://placehold.co/200x80/5D4037/FFFFFF?text=INKINDO'">
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Ikatan Nasional Konsultan Indonesia</h5>
                            <p class="text-brown-medium mb-3">Anggota aktif sejak 2020</p>
                            <div class="association-details">
                                <div class="detail-item">
                                    <span class="detail-label">No. Anggota:</span>
                                    <span class="detail-value">17744/P/1304.JB</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">Klasifikasi:</span>
                                    <span class="detail-value">Konsultan Konstruksi & Non-Konstruksi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KADIN Card -->
                <div class="col-md-5">
                    <div class="association-card-3d animate-on-scroll">
                        <div class="association-card-inner">
                            <div class="association-logo-wrapper">
                                <img src="{{ asset('images/certificates/kadin-logo.png') }}"
                                     alt="KADIN"
                                     class="association-logo"
                                     onerror="this.src='https://placehold.co/200x80/5D4037/FFFFFF?text=KADIN'">
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Kamar Dagang dan Industri Indonesia</h5>
                            <p class="text-brown-medium mb-3">Anggota terdaftar</p>
                            <div class="association-details">
                                <div class="detail-item">
                                    <span class="detail-label">No. Anggota:</span>
                                    <span class="detail-value">20112-2026270629</span>
                                </div>
                                <div class="detail-item">
                                    <span class="detail-label">No. KTA-B:</span>
                                    <span class="detail-value">24293273-25021912001</span>
                                </div>
                            </div>
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
                        <h2 class="display-6 fw-bold mb-3">Ingin Melihat Dokumen Asli?</h2>
                        <p class="lead mb-0">
                            Hubungi kami untuk mendapatkan salinan sertifikat atau informasi lebih lanjut.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-envelope me-2"></i>Hubungi Kami
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
    .certifications-hero {
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

    .badge.bg-success {
        background: linear-gradient(135deg, #2E7D32, #4CAF50) !important;
        color: white;
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

    /* ===== 3D CERTIFICATION CATEGORY CARDS ===== */
    .cert-category-3d {
        perspective: 1000px;
        height: 100%;
    }

    .cert-category-inner {
        background: white;
        border-radius: 2rem;
        padding: 2.5rem 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
        text-align: center;
    }

    .cert-category-3d:hover .cert-category-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    .cert-icon-wrapper {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        position: relative;
        z-index: 2;
        transition: all 0.3s;
    }

    .cert-category-3d:hover .cert-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .icon-glow {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 30px;
        background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.8), transparent 70%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .cert-category-3d:hover .icon-glow {
        opacity: 0.5;
    }

    .cert-badges {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
    }

    .cert-badges .badge {
        font-size: 0.85rem;
        padding: 0.5rem 1rem;
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

    /* ----- 3D Buttons (same as home) ----- */
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

    .btn-outline-brown-3d:hover::before {
        left: 100%;
    }

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

    /* ===== PREMIUM TABLE CARD ===== */
    .cert-table-card {
        background: white;
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
    }

    .cert-table-card:hover {
        box-shadow: 0 30px 60px rgba(93,64,55,0.15);
        border-color: var(--cream-gold);
    }

    .premium-table {
        margin-bottom: 0;
    }

    .premium-table thead th {
        background: linear-gradient(135deg, var(--brown-dark), #4A342E);
        color: white;
        font-weight: 600;
        padding: 1rem;
        border: none;
        white-space: nowrap;
    }

    .premium-table thead th:first-child {
        border-radius: 1rem 0 0 0;
    }

    .premium-table thead th:last-child {
        border-radius: 0 1rem 0 0;
    }

    .premium-table tbody tr {
        transition: all 0.3s;
        border-bottom: 1px solid rgba(93,64,55,0.05);
    }

    .premium-table tbody tr:hover {
        background: rgba(212,175,55,0.02);
        transform: scale(1.01);
        box-shadow: 0 5px 15px rgba(93,64,55,0.05);
    }

    .premium-table td {
        padding: 1rem;
        vertical-align: middle;
        color: var(--brown-medium);
    }

    .cert-type strong {
        color: var(--brown-dark);
    }

    .cert-date small {
        font-size: 0.75rem;
    }

    .status-badge {
        display: inline-block;
        padding: 0.35rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    .status-badge.active {
        background: linear-gradient(135deg, #2E7D32, #4CAF50);
        color: white;
    }

    .status-badge.expiring {
        background: linear-gradient(135deg, #FF6F00, #FFB74D);
        color: white;
    }

    .action-buttons {
        display: flex;
        gap: 0.5rem;
    }

    .btn-action {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
        border: 1px solid transparent;
    }

    .btn-action.view {
        background: rgba(93,64,55,0.1);
        color: var(--brown-dark);
    }

    .btn-action.view:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 10px rgba(93,64,55,0.2);
    }

    .btn-action.download {
        background: rgba(212,175,55,0.1);
        color: var(--cream-gold);
    }

    .btn-action.download:hover {
        background: var(--cream-gold);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 10px rgba(212,175,55,0.3);
    }

    /* ===== 3D ASSOCIATION CARDS ===== */
    .association-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .association-card-inner {
        background: white;
        border-radius: 2rem;
        padding: 2.5rem 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        height: 100%;
        text-align: center;
    }

    .association-card-3d:hover .association-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.15);
        border-color: var(--cream-gold);
    }

    .association-logo-wrapper {
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .association-logo {
        max-height: 80px;
        max-width: 100%;
        filter: grayscale(20%);
        transition: all 0.3s;
    }

    .association-card-3d:hover .association-logo {
        filter: grayscale(0);
        transform: scale(1.05);
    }

    .association-details {
        background: rgba(245,240,237,0.5);
        border-radius: 1rem;
        padding: 1rem;
        text-align: left;
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }

    .detail-item:last-child {
        margin-bottom: 0;
    }

    .detail-label {
        color: var(--brown-medium);
        font-weight: 500;
    }

    .detail-value {
        color: var(--brown-dark);
        font-weight: 600;
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
        .certifications-hero { padding: 5rem 0 3rem; }
        .cert-category-inner { padding: 2rem 1.5rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .cert-icon-wrapper { width: 80px; height: 80px; }
        .premium-table thead th { white-space: normal; }
        .action-buttons { flex-wrap: wrap; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
        .cert-category-inner { padding: 1.5rem 1rem; }
        .breadcrumb-nav .breadcrumb { flex-wrap: wrap; }
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
        const cards = document.querySelectorAll('.cert-category-inner, .association-card-inner, .cert-table-card');
        cards.forEach(card => {
            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = (y - centerY) / 20;
                const rotateY = (centerX - x) / 20;

                if (card.classList.contains('cert-table-card')) {
                    // Table card only translateY, no rotate
                    return;
                }

                card.style.transform = `rotateY(${rotateY}deg) rotateX(${rotateX}deg) translateY(-5px)`;
            });

            card.addEventListener('mouseleave', () => {
                if (card.classList.contains('cert-table-card')) {
                    card.style.transform = 'none';
                } else {
                    card.style.transform = 'rotateY(0deg) rotateX(1deg)';
                }
            });
        });
    });
</script>
@endpush
