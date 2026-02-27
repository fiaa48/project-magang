@extends('layouts.app')

@section('title', 'Sejarah Perusahaan - PT Mitra Nusa Konsulindo')
@section('description', 'Sejarah dan perjalanan PT Mitra Nusa Konsulindo sejak berdiri tahun 2020 hingga menjadi perusahaan konsultan terpercaya.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="history-hero position-relative overflow-hidden">
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
                            <i class="fas fa-history me-2"></i>SEJARAH KAMI
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Jejak Langkah <span class="text-gradient-brown">Perusahaan</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Menelusuri Perjalanan Inspiratif
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                2020 – Sekarang
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
                                <a href="{{ route('about') }}" class="text-brown-medium">Tentang Kami</a>
                            </li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Sejarah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#timeline" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- TIMELINE SECTION – 3D VERTICAL TIMELINE -->
    <section id="timeline" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-timeline me-2"></i>PERJALANAN KAMI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Sejarah Perusahaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Setiap tahun menandai pencapaian baru dalam perjalanan kami menuju keunggulan.
                </p>
            </div>

            <!-- Vertical Timeline -->
            <div class="timeline-vertical">
                <!-- 2020 -->
                <div class="timeline-item-3d animate-on-scroll">
                    <div class="timeline-marker-wrapper">
                        <div class="timeline-marker-circle">2020</div>
                        <div class="timeline-marker-line"></div>
                    </div>
                    <div class="timeline-card-3d">
                        <div class="timeline-card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2 status-foundation">Awal Mula</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>2020</span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Pendirian Perusahaan</h3>
                            <p class="text-brown-medium small mb-4">
                                PT Mitra Nusa Konsulindo secara resmi berdiri dengan visi menjadi perusahaan konsultan terpercaya di bidang konstruksi dan non-konstruksi.
                            </p>
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-building text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Perseroan Terbatas</strong>
                                            <span class="text-brown-light small">Terdaftar resmi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-file-contract text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Legalitas Lengkap</strong>
                                            <span class="text-brown-light small">NPWP & NIB</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-handshake text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Keanggotaan Profesi</strong>
                                            <span class="text-brown-light small">INKINDO</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- 2021 -->
                <div class="timeline-item-3d animate-on-scroll">
                    <div class="timeline-marker-wrapper">
                        <div class="timeline-marker-circle">2021</div>
                        <div class="timeline-marker-line"></div>
                    </div>
                    <div class="timeline-card-3d">
                        <div class="timeline-card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2 status-expansion">Ekspansi</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>2021</span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Pengembangan Jasa & Sertifikasi</h3>
                            <p class="text-brown-medium small mb-4">
                                Tahun pertama operasional diisi dengan pengembangan layanan dan perolehan sertifikasi yang diperlukan.
                            </p>
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-award text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Sertifikasi SBU</strong>
                                            <span class="text-brown-light small">Pertama</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-expand text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Portofolio Jasa</strong>
                                            <span class="text-brown-light small">Non‑konstruksi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-landmark text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Proyek Pemerintah</strong>
                                            <span class="text-brown-light small">Pertama</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- 2022 -->
                <div class="timeline-item-3d animate-on-scroll">
                    <div class="timeline-marker-wrapper">
                        <div class="timeline-marker-circle">2022</div>
                        <div class="timeline-marker-line"></div>
                    </div>
                    <div class="timeline-card-3d">
                        <div class="timeline-card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2 status-growth">Pertumbuhan</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>2022</span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Konsolidasi & Pengembangan</h3>
                            <p class="text-brown-medium small mb-4">
                                Periode pertumbuhan signifikan dengan penguatan tim profesional dan perluasan basis klien.
                            </p>
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-users text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Tim Profesional</strong>
                                            <span class="text-brown-light small">15+ orang</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-cogs text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Sistem Manajemen</strong>
                                            <span class="text-brown-light small">Manajemen mutu</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-handshake-simple text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Kemitraan Strategis</strong>
                                            <span class="text-brown-light small">Swasta nasional</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="timeline-item-3d animate-on-scroll">
                    <div class="timeline-marker-wrapper">
                        <div class="timeline-marker-circle">2023</div>
                        <div class="timeline-marker-line"></div>
                    </div>
                    <div class="timeline-card-3d">
                        <div class="timeline-card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2 status-recognition">Pengakuan</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>2023</span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Pengakuan & Ekspansi Regional</h3>
                            <p class="text-brown-medium small mb-4">
                                Tahun pencapaian dengan pengakuan profesional dan ekspansi layanan ke wilayah regional.
                            </p>
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-certificate text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Sertifikasi ISO</strong>
                                            <span class="text-brown-light small">ISO 9001:2015</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-map-marked-alt text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Ekspansi Regional</strong>
                                            <span class="text-brown-light small">Jawa Tengah & Timur</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-trophy text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Penghargaan</strong>
                                            <span class="text-brown-light small">Konsultan terpercaya</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- 2024+ -->
                <div class="timeline-item-3d animate-on-scroll">
                    <div class="timeline-marker-wrapper">
                        <div class="timeline-marker-circle">2024+</div>
                        <div class="timeline-marker-line"></div>
                    </div>
                    <div class="timeline-card-3d">
                        <div class="timeline-card-inner">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2 status-innovation">Inovasi</span>
                                <span class="text-brown-light small"><i class="fas fa-calendar-alt me-1"></i>2024 – Sekarang</span>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-3">Inovasi & Masa Depan</h3>
                            <p class="text-brown-medium small mb-4">
                                Fokus pada pengembangan solusi inovatif dan persiapan untuk tantangan masa depan.
                            </p>
                            <div class="row g-3 mb-3">
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-laptop-code text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Digitalisasi Layanan</strong>
                                            <span class="text-brown-light small">Sistem terintegrasi</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-leaf text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Konsultansi Lingkungan</strong>
                                            <span class="text-brown-light small">Berkelanjutan</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex">
                                        <i class="fas fa-university text-cream-gold me-2 mt-1"></i>
                                        <div>
                                            <strong class="d-block text-brown-dark small">Kemitraan Akademik</strong>
                                            <span class="text-brown-light small">Perguruan tinggi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOUNDING STORY SECTION – 3D CARDS -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-pen-fancy me-2"></i>CERITA PENDIRIAN
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Cerita di Balik Perusahaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Inspirasi dan nilai yang melandasi berdirinya PT Mitra Nusa Konsulindo.
                </p>
            </div>

            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="founding-story-3d animate-on-scroll">
                        <div class="founding-story-inner">
                            <p class="text-brown-medium mb-4">
                                <span class="dropcap">D</span>idirikan oleh sekelompok profesional dengan visi yang sama,
                                PT Mitra Nusa Konsulindo lahir dari keinginan untuk menciptakan perusahaan
                                konsultan yang tidak hanya berorientasi pada profit, tetapi juga memberikan
                                kontribusi nyata bagi pembangunan Indonesia.
                            </p>
                            <p class="text-brown-medium mb-4">
                                Dengan latar belakang pengalaman yang beragam di bidang konstruksi, manajemen proyek,
                                dan konsultansi kelembagaan, para pendiri melihat potensi besar dalam memberikan
                                solusi terintegrasi yang mengedepankan profesionalisme dan inovasi.
                            </p>
                            <div class="quote-box-3d mt-5">
                                <i class="fas fa-quote-left fa-2x text-cream-gold mb-3"></i>
                                <blockquote class="text-brown-dark fst-italic mb-3">
                                    "Kami percaya bahwa setiap proyek adalah kesempatan untuk menciptakan
                                    nilai tambah dan memberikan dampak positif yang berkelanjutan."
                                </blockquote>
                                <cite class="text-brown-light">— Pendiri PT Mitra Nusa Konsulindo</cite>
                            </div>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="achievement-card-3d animate-on-scroll">
                                <div class="achievement-inner text-center">
                                    <div class="achievement-icon-wrapper mb-3">
                                        <i class="fas fa-rocket fa-2x text-brown-dark"></i>
                                    </div>
                                    <h3 class="fw-bold text-brown-dark mb-1">4+</h3>
                                    <p class="text-brown-medium small">Tahun Beroperasi</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="achievement-card-3d animate-on-scroll">
                                <div class="achievement-inner text-center">
                                    <div class="achievement-icon-wrapper mb-3">
                                        <i class="fas fa-user-tie fa-2x text-brown-dark"></i>
                                    </div>
                                    <h3 class="fw-bold text-brown-dark mb-1">15+</h3>
                                    <p class="text-brown-medium small">Tenaga Ahli</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="achievement-card-3d animate-on-scroll">
                                <div class="achievement-inner text-center">
                                    <div class="achievement-icon-wrapper mb-3">
                                        <i class="fas fa-project-diagram fa-2x text-brown-dark"></i>
                                    </div>
                                    <h3 class="fw-bold text-brown-dark mb-1">50+</h3>
                                    <p class="text-brown-medium small">Proyek Selesai</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="achievement-card-3d animate-on-scroll">
                                <div class="achievement-inner text-center">
                                    <div class="achievement-icon-wrapper mb-3">
                                        <i class="fas fa-handshake fa-2x text-brown-dark"></i>
                                    </div>
                                    <h3 class="fw-bold text-brown-dark mb-1">30+</h3>
                                    <p class="text-brown-medium small">Klien Puas</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
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
                        <h2 class="display-6 fw-bold mb-3">Tertarik Mengetahui Lebih Lanjut?</h2>
                        <p class="lead mb-0">
                            Pelajari lebih dalam tentang visi, misi, dan struktur organisasi perusahaan kami.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('about.vision-mission') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-eye me-2"></i>Visi & Misi
                                <span class="btn-shine"></span>
                            </a>
                            <a href="{{ route('about.organization') }}" class="btn btn-outline-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-sitemap me-2"></i>Struktur Organisasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Back Button -->
    <div class="container text-center pb-6 mt-6">
        <a href="{{ route('about') }}" class="btn btn-outline-brown-3d rounded-pill px-5 py-3">
            <i class="fas fa-arrow-left me-2"></i>Kembali ke Profil Perusahaan
        </a>
    </div>
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
    .history-hero {
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

    /* ===== 3D VERTICAL TIMELINE ===== */
    .timeline-vertical {
        max-width: 800px;
        margin: 0 auto;
    }

    .timeline-item-3d {
        position: relative;
        display: flex;
        margin-bottom: 3rem;
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease;
    }

    .timeline-item-3d.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .timeline-marker-wrapper {
        width: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-right: 2rem;
    }

    .timeline-marker-circle {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 700;
        font-size: 0.9rem;
        box-shadow: var(--shadow-3d);
        border: 3px solid var(--cream-light);
        transition: all 0.3s;
        z-index: 2;
    }

    .timeline-item-3d:hover .timeline-marker-circle {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(93,64,55,0.3);
    }

    .timeline-marker-line {
        width: 2px;
        flex: 1;
        background: linear-gradient(to bottom, var(--cream-gold), transparent);
        margin-top: -2px;
    }

    .timeline-card-3d {
        perspective: 1000px;
        flex: 1;
    }

    .timeline-card-inner {
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
    }

    .timeline-card-3d:hover .timeline-card-inner {
        transform: rotateY(-1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .status-foundation { background: rgba(141,110,99,0.15) !important; color: #8D6E63 !important; }
    .status-expansion { background: rgba(121,85,72,0.15) !important; color: #795548 !important; }
    .status-growth { background: rgba(93,64,55,0.15) !important; color: #5D4037 !important; }
    .status-recognition { background: rgba(62,39,35,0.15) !important; color: #3E2723 !important; }
    .status-innovation { background: rgba(188,170,164,0.15) !important; color: #BCAAA4 !important; }

    .text-cream-gold {
        color: var(--cream-gold);
    }

    /* ===== FOUNDING STORY ===== */
    .founding-story-3d {
        perspective: 1000px;
    }

    .founding-story-inner {
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
    }

    .founding-story-3d:hover .founding-story-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .dropcap {
        float: left;
        font-size: 4em;
        line-height: 0.8;
        padding: 0.2rem 0.3rem 0 0;
        font-weight: 700;
        color: var(--brown-dark);
    }

    .quote-box-3d {
        background: rgba(212,175,55,0.05);
        border-left: 4px solid var(--cream-gold);
        padding: 1.5rem;
        border-radius: 1rem;
    }

    /* ===== ACHIEVEMENT CARDS ===== */
    .achievement-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .achievement-inner {
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

    .achievement-card-3d:hover .achievement-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .achievement-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s;
    }

    .achievement-card-3d:hover .achievement-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
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

    .pb-6 {
        padding-bottom: 5rem !important;
    }

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .history-hero { padding: 5rem 0 3rem; }
        .timeline-item-3d { flex-direction: column; }
        .timeline-marker-wrapper { width: 100%; flex-direction: row; margin-bottom: 1rem; }
        .timeline-marker-line { width: 100%; height: 2px; margin-left: 1rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .timeline-card-inner { padding: 1.25rem; }
    }

    @media (max-width: 576px) {
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
        const cards = document.querySelectorAll('.timeline-card-inner, .founding-story-inner, .achievement-inner');
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
