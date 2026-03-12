@extends('user.layouts.app')

@section('title', 'SBU Konstruksi - PT Mitra Nusa Konsulindo')
@section('description', 'Sertifikasi Badan Usaha (SBU) Konstruksi PT Mitra Nusa Konsulindo - Lisensi resmi dari LPJK untuk jasa konstruksi.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="sbu-hero position-relative overflow-hidden">
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
                            <i class="fas fa-hard-hat me-2"></i>SBU KONSTRUKSI
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Sertifikasi Badan Usaha <span class="text-gradient-brown">Jasa Konstruksi</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Lisensi Resmi dari LPJK
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Profesional · Terpercaya · Berkualitas
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
                                <a href="{{ route('certifications.index') }}" class="text-brown-medium">Sertifikasi</a>
                            </li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">SBU Konstruksi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#sbu-overview" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- SBU OVERVIEW SECTION – 3D CARDS -->
    <section id="sbu-overview" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row g-5">
                <!-- LEFT CARD: Informasi SBU -->
                <div class="col-lg-8">
                    <div class="sbu-info-card-3d animate-on-scroll">
                        <div class="sbu-info-inner">
                            <div class="section-header mb-4">
                                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                                    <i class="fas fa-file-certificate me-2"></i>INFORMASI SERTIFIKAT
                                </span>
                                <h3 class="display-6 fw-bold text-brown-dark mb-3">Sertifikat Badan Usaha (SBU)</h3>
                            </div>

                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="info-item-3d">
                                        <div class="info-icon-wrapper">
                                            <i class="fas fa-hashtag"></i>
                                        </div>
                                        <div class="info-content">
                                            <span class="info-label">Nomor Sertifikat</span>
                                            <span class="info-value">060.02.01.2010.257</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info-item-3d">
                                        <div class="info-icon-wrapper">
                                            <i class="fas fa-calendar-plus"></i>
                                        </div>
                                        <div class="info-content">
                                            <span class="info-label">Tanggal Diterbitkan</span>
                                            <span class="info-value">10 Februari 2020</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info-item-3d">
                                        <div class="info-icon-wrapper">
                                            <i class="fas fa-calendar-check"></i>
                                        </div>
                                        <div class="info-content">
                                            <span class="info-label">Masa Berlaku</span>
                                            <span class="info-value">5 Tahun (s/d 10 Februari 2025)</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="info-item-3d">
                                        <div class="info-icon-wrapper">
                                            <i class="fas fa-shield-alt"></i>
                                        </div>
                                        <div class="info-content">
                                            <span class="info-label">Status</span>
                                            <span class="info-value">
                                                <span class="status-badge active">Aktif</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="info-item-3d">
                                        <div class="info-icon-wrapper">
                                            <i class="fas fa-building"></i>
                                        </div>
                                        <div class="info-content">
                                            <span class="info-label">Lembaga Penerbit</span>
                                            <span class="info-value">Lembaga Pengembangan Jasa Konstruksi (LPJK)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="certificate-actions mt-5 d-flex gap-3">
                                <a href="{{ asset('documents/certificates/sbu-konstruksi.pdf') }}"
                                   class="btn btn-brown-3d btn-lg rounded-pill px-5 py-3"
                                   target="_blank">
                                    <i class="fas fa-eye me-2"></i>Lihat Sertifikat
                                    <span class="btn-shine"></span>
                                </a>
                                <a href="{{ asset('documents/certificates/sbu-konstruksi.pdf') }}"
                                   class="btn btn-outline-brown-3d btn-lg rounded-pill px-5 py-3"
                                   download>
                                    <i class="fas fa-download me-2"></i>Download PDF
                                    <span class="btn-shine"></span>
                                </a>
                            </div>

                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT CARD: Tentang SBU -->
                <div class="col-lg-4">
                    <div class="sbu-about-card-3d animate-on-scroll">
                        <div class="sbu-about-inner">
                            <div class="about-icon-wrapper mb-4">
                                <i class="fas fa-hard-hat fa-4x text-brown-dark"></i>
                            </div>
                            <h4 class="fw-bold text-brown-dark mb-3">Tentang SBU Konstruksi</h4>
                            <p class="text-brown-medium mb-4">
                                Sertifikasi Badan Usaha (SBU) adalah bukti pengakuan formal terhadap kemampuan
                                perusahaan dalam melaksanakan pekerjaan jasa konstruksi sesuai dengan bidang
                                dan sub bidang yang telah ditetapkan.
                            </p>
                            <div class="alert-info-3d p-4 rounded-4">
                                <i class="fas fa-info-circle me-2 text-brown-dark"></i>
                                <span class="text-brown-dark fw-semibold">Informasi:</span>
                                <p class="text-brown-medium mt-2 mb-0">
                                    SBU ini berlaku untuk seluruh wilayah Indonesia.
                                </p>
                            </div>

                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KLASIFIKASI SBU – PREMIUM TABLE CARD -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-diagram-project me-2"></i>KLASIFIKASI JASA
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Klasifikasi & Sub-Bidang</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Bidang dan sub-bidang jasa konstruksi yang tercakup dalam sertifikat SBU.
                </p>
            </div>

            <div class="classification-table-card animate-on-scroll">
                <div class="table-responsive">
                    <table class="table premium-table">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Bidang</th>
                                <th>Sub Bidang</th>
                                <th>Kualifikasi</th>
                                <th>Klasifikasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="classification-row">
                                <td><span class="code-badge">K 001</span></td>
                                <td>Bangunan Gedung</td>
                                <td>Bangunan Gedung Hunian</td>
                                <td><span class="qualification-badge">Kecil</span></td>
                                <td><span class="class-badge">1</span></td>
                            </tr>
                            <tr class="classification-row">
                                <td><span class="code-badge">K 002</span></td>
                                <td>Bangunan Gedung</td>
                                <td>Bangunan Gedung Non Hunian</td>
                                <td><span class="qualification-badge">Kecil</span></td>
                                <td><span class="class-badge">1</span></td>
                            </tr>
                            <tr class="classification-row">
                                <td><span class="code-badge">K 003</span></td>
                                <td>Bangunan Sipil</td>
                                <td>Jalan dan Jembatan</td>
                                <td><span class="qualification-badge">Kecil</span></td>
                                <td><span class="class-badge">2</span></td>
                            </tr>
                            <tr class="classification-row">
                                <td><span class="code-badge">K 004</span></td>
                                <td>Bangunan Sipil</td>
                                <td>Air Minum dan Air Limbah</td>
                                <td><span class="qualification-badge">Kecil</span></td>
                                <td><span class="class-badge">2</span></td>
                            </tr>
                            <tr class="classification-row">
                                <td><span class="code-badge">K 005</span></td>
                                <td>Bangunan Sipil</td>
                                <td>Irigasi dan Rawa</td>
                                <td><span class="qualification-badge">Kecil</span></td>
                                <td><span class="class-badge">2</span></td>
                            </tr>
                            <tr class="classification-row">
                                <td><span class="code-badge">K 006</span></td>
                                <td>Instalasi Mekanikal & Elektrikal</td>
                                <td>Instalasi Listrik</td>
                                <td><span class="qualification-badge">Kecil</span></td>
                                <td><span class="class-badge">3</span></td>
                            </tr>
                            <tr class="classification-row">
                                <td><span class="code-badge">K 007</span></td>
                                <td>Instalasi Mekanikal & Elektrikal</td>
                                <td>Instalasi Pendingin</td>
                                <td><span class="qualification-badge">Kecil</span></td>
                                <td><span class="class-badge">3</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- LEGAL BASIS SECTION – 3D CARDS -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-gavel me-2"></i>DASAR HUKUM
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Landasan Regulasi</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Peraturan perundang-undangan yang menjadi dasar penerbitan sertifikat ini.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="legal-card-3d animate-on-scroll">
                        <div class="legal-card-inner">
                            <div class="legal-icon-wrapper mb-3">
                                <i class="fas fa-file-contract fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Peraturan Pemerintah No. 28 Tahun 2000</h5>
                            <p class="text-brown-medium">Tentang Usaha Jasa Konstruksi</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="legal-card-3d animate-on-scroll">
                        <div class="legal-card-inner">
                            <div class="legal-icon-wrapper mb-3">
                                <i class="fas fa-file-alt fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Peraturan LPJK No. 10 Tahun 2018</h5>
                            <p class="text-brown-medium">Tentang Tata Cara Sertifikasi Badan Usaha Jasa Konstruksi</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="legal-card-3d animate-on-scroll">
                        <div class="legal-card-inner">
                            <div class="legal-icon-wrapper mb-3">
                                <i class="fas fa-gavel fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">Peraturan Menteri PUPR No. 22/PRT/M/2018</h5>
                            <p class="text-brown-medium">Tentang Penyedia Jasa Konstruksi</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="legal-note mt-6 p-4 rounded-4 animate-on-scroll">
                <div class="d-flex align-items-start gap-3">
                    <i class="fas fa-info-circle fa-2x text-brown-dark"></i>
                    <div>
                        <h5 class="fw-bold text-brown-dark mb-2">Ketentuan</h5>
                        <p class="text-brown-medium mb-0">
                            Sertifikat SBU ini diterbitkan berdasarkan ketentuan peraturan perundang-undangan yang berlaku
                            dan dapat digunakan untuk mengikuti proses tender sesuai bidang dan kualifikasi yang tercantum.
                        </p>
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
                        <h2 class="display-6 fw-bold mb-3">Butuh Informasi Lebih Lanjut?</h2>
                        <p class="lead mb-0">
                            Hubungi kami untuk mendapatkan salinan sertifikat atau konsultasi terkait SBU.
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
    .sbu-hero {
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

    /* ===== 3D SBU INFO CARD ===== */
    .sbu-info-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .sbu-info-inner {
        background: white;
        border-radius: 2rem;
        padding: 2.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .sbu-info-card-3d:hover .sbu-info-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    .info-item-3d {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 1rem;
        background: rgba(245,240,237,0.3);
        border-radius: 1rem;
        transition: all 0.3s;
        border: 1px solid rgba(93,64,55,0.05);
    }

    .info-item-3d:hover {
        background: white;
        border-color: var(--cream-gold);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(93,64,55,0.05);
    }

    .info-icon-wrapper {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
        flex-shrink: 0;
        transition: all 0.3s;
    }

    .info-item-3d:hover .info-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .info-content {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .info-label {
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--brown-medium);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 0.2rem;
    }

    .info-value {
        font-size: 1rem;
        font-weight: 600;
        color: var(--brown-dark);
    }

    .status-badge {
        display: inline-block;
        padding: 0.25rem 1rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        background: linear-gradient(135deg, #2E7D32, #4CAF50);
        color: white;
    }

    /* ----- 3D SBU ABOUT CARD ----- */
    .sbu-about-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .sbu-about-inner {
        background: white;
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .sbu-about-card-3d:hover .sbu-about-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .about-icon-wrapper {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s;
    }

    .sbu-about-card-3d:hover .about-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .alert-info-3d {
        background: rgba(212,175,55,0.05);
        border-left: 4px solid var(--cream-gold);
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

    /* ===== PREMIUM TABLE CARD ===== */
    .classification-table-card {
        background: white;
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
    }

    .classification-table-card:hover {
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

    .code-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background: rgba(93,64,55,0.1);
        color: var(--brown-dark);
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .qualification-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background: rgba(212,175,55,0.15);
        color: var(--brown-dark);
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    .class-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background: var(--brown-dark);
        color: white;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
    }

    /* ===== 3D LEGAL CARDS ===== */
    .legal-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .legal-card-inner {
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
    }

    .legal-card-3d:hover .legal-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .legal-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .legal-card-3d:hover .legal-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .legal-note {
        background: rgba(212,175,55,0.05);
        border-left: 4px solid var(--cream-gold);
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

    .mt-6 {
        margin-top: 5rem !important;
    }

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .sbu-hero { padding: 5rem 0 3rem; }
        .sbu-info-inner { padding: 2rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .info-item-3d { padding: 0.75rem; }
        .info-icon-wrapper { width: 40px; height: 40px; font-size: 1rem; }
        .premium-table thead th { white-space: normal; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
        .sbu-info-inner { padding: 1.5rem; }
        .certificate-actions { flex-direction: column; }
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
        const cards = document.querySelectorAll('.sbu-info-inner, .sbu-about-inner, .legal-card-inner');
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
