@extends('user.layouts.app')

@section('title', 'Visi & Misi | PT Mitra Nusa Konsulindo')
@section('description', 'Visi dan misi PT Mitra Nusa Konsulindo - Panduan dan komitmen kami dalam memberikan layanan konsultansi terbaik.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="vision-hero position-relative overflow-hidden">
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
                            <i class="fas fa-bullseye me-2"></i>VISI & MISI
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Panduan & <span class="text-gradient-brown">Komitmen</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Mewujudkan Solusi Inovatif dan Berkelanjutan
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Integritas · Profesionalisme · Inovasi
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
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Visi & Misi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#vision-section" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- VISION SECTION – 3D CARD -->
    <section id="vision-section" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row g-5 align-items-center">
                <!-- Left: Vision Statement with 3D effect -->
                <div class="col-lg-6">
                    <div class="vision-card-3d animate-on-scroll">
                        <div class="vision-card-inner">
                            <div class="vision-badge-wrapper mb-4">
                                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2">
                                    <i class="fas fa-eye me-2"></i>VISI KAMI
                                </span>
                            </div>
                            <div class="vision-icon-wrapper mb-4">
                                <div class="vision-icon">
                                    <i class="fas fa-eye fa-3x text-brown-dark"></i>
                                </div>
                            </div>
                            <h2 class="display-6 fw-bold text-brown-dark mb-4">
                                “Menjadi perusahaan konsultan terdepan yang memberikan solusi inovatif dan berkelanjutan dalam bidang konstruksi dan non-konstruksi”
                            </h2>
                            <p class="text-brown-medium">
                                Visi kami mencerminkan aspirasi jangka panjang untuk menjadi pemimpin dalam industri konsultansi, dengan fokus pada inovasi dan keberlanjutan.
                            </p>
                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- Right: Vision Components -->
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="component-card-3d animate-on-scroll">
                                <div class="component-card-inner">
                                    <div class="component-icon-wrapper mb-3">
                                        <i class="fas fa-crown fa-2x text-brown-dark"></i>
                                    </div>
                                    <h5 class="fw-bold text-brown-dark mb-2">Terdepan</h5>
                                    <p class="text-brown-medium small">Menjadi yang terbaik di industri dengan kualitas, inovasi, dan kepuasan klien.</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="component-card-3d animate-on-scroll">
                                <div class="component-card-inner">
                                    <div class="component-icon-wrapper mb-3">
                                        <i class="fas fa-lightbulb fa-2x text-brown-dark"></i>
                                    </div>
                                    <h5 class="fw-bold text-brown-dark mb-2">Inovatif</h5>
                                    <p class="text-brown-medium small">Solusi kreatif yang menjawab tantangan masa kini dan masa depan.</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="component-card-3d animate-on-scroll">
                                <div class="component-card-inner">
                                    <div class="component-icon-wrapper mb-3">
                                        <i class="fas fa-leaf fa-2x text-brown-dark"></i>
                                    </div>
                                    <h5 class="fw-bold text-brown-dark mb-2">Berkelanjutan</h5>
                                    <p class="text-brown-medium small">Memberikan solusi ramah lingkungan dan berkelanjutan untuk generasi mendatang.</p>
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

    <!-- MISSION SECTION – 3D SCROLLING CARDS -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-list-check me-2"></i>KOMITMEN KAMI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Misi Perusahaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Langkah konkret untuk mewujudkan visi yang lebih baik.
                </p>
            </div>

            <div class="missions-scroll-container">
                <div class="missions-scroll-row">
                    <!-- Mission 1 -->
                    <div class="mission-scroll-item">
                        <div class="mission-card-3d animate-on-scroll">
                            <div class="mission-card-inner">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="mission-icon-wrapper">
                                        <i class="fas fa-medal fa-2x text-brown-dark"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">01</span>
                                </div>
                                <h4 class="fw-bold text-brown-dark mb-3">Kualitas Layanan</h4>
                                <p class="text-brown-medium small mb-4">Membentuk layanan konsultasi yang berkualitas tinggi dengan standar profesionalisme tertinggi di setiap proyek yang kami lansir.</p>
                                <div class="mission-features mb-4">
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Penerapan standar internasional</span>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Pengawasan kualitas berkelanjutan</span>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Evaluasi hasil secara berkala</span>
                                    </div>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">Quality First</span>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Mission 2 -->
                    <div class="mission-scroll-item">
                        <div class="mission-card-3d animate-on-scroll">
                            <div class="mission-card-inner">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="mission-icon-wrapper">
                                        <i class="fas fa-rocket fa-2x text-brown-dark"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">02</span>
                                </div>
                                <h4 class="fw-bold text-brown-dark mb-3">Inovasi Berkelanjutan</h4>
                                <p class="text-brown-medium small mb-4">Mengembangkan solusi inovatif dan berkelanjutan yang relevan dengan perkembangan teknologi dan kebutuhan zaman.</p>
                                <div class="mission-features mb-4">
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Riset dan pengembangan teknologi</span>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Adaptasi teknologi terbaru</span>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Solusi aman lingkungan</span>
                                    </div>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">Innovation Driven</span>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Mission 3 -->
                    <div class="mission-scroll-item">
                        <div class="mission-card-3d animate-on-scroll">
                            <div class="mission-card-inner">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="mission-icon-wrapper">
                                        <i class="fas fa-handshake fa-2x text-brown-dark"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">03</span>
                                </div>
                                <h4 class="fw-bold text-brown-dark mb-3">Kemitraan Jangka Panjang</h4>
                                <p class="text-brown-medium small mb-4">Membangun kemitraan jangka panjang yang saling menguntungkan dengan klien berdasarkan kepercayaan dan komitmen bersama.</p>
                                <div class="mission-features mb-4">
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Komunikasi transparan</span>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Pemahaman kebutuhan klien</span>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Dukungan pasca proyek</span>
                                    </div>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">Partnership Focused</span>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Mission 4 -->
                    <div class="mission-scroll-item">
                        <div class="mission-card-3d animate-on-scroll">
                            <div class="mission-card-inner">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="mission-icon-wrapper">
                                        <i class="fas fa-users fa-2x text-brown-dark"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">04</span>
                                </div>
                                <h4 class="fw-bold text-brown-dark mb-3">Pengembangan SDM</h4>
                                <p class="text-brown-medium small mb-4">Meningkatkan kompetensi dan profesionalisme sumber daya manusia secara berkaitan dengan pelatihan dan pengembangan.</p>
                                <div class="mission-features mb-4">
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Program pelatihan berkualitas</span>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Pengembangan sistem kontributor</span>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Sertifikasi kompetensi</span>
                                    </div>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">People Development</span>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Mission 5 -->
                    <div class="mission-scroll-item">
                        <div class="mission-card-3d animate-on-scroll">
                            <div class="mission-card-inner">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="mission-icon-wrapper">
                                        <i class="fas fa-heart fa-2x text-brown-dark"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">05</span>
                                </div>
                                <h4 class="fw-bold text-brown-dark mb-3">Kontribusi Sosial</h4>
                                <p class="text-brown-medium small mb-4">Berkontribusi positif bagi pembangunan masyarakat dan pelestarian lingkungan melalui program-program berkelanjutan.</p>
                                <div class="mission-features mb-4">
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Program CSR terintegrasi</span>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Pembangunan berkelanjutan</span>
                                    </div>
                                    <div class="d-flex">
                                        <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                        <span class="text-brown-medium small">Pelestarian lingkungan</span>
                                    </div>
                                </div>
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">Social Responsibility</span>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES SECTION – 3D SCROLLING CARDS -->
    <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-star me-2"></i>NILAI KAMI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Nilai-Nilai Inti</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Prinsip dasar yang membimbing setiap tindakan dan keputusan kami.
                </p>
            </div>

            <div class="values-scroll-container">
                <div class="values-scroll-row">
                    <!-- Value 1: Integritas -->
                    <div class="value-scroll-item">
                        <div class="value-card-3d animate-on-scroll">
                            <div class="value-card-inner text-center">
                                <span class="value-badge bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 40px; height: 40px;">I</span>
                                <div class="value-icon-wrapper mb-3">
                                    <i class="fas fa-shield-alt fa-3x text-brown-dark"></i>
                                </div>
                                <h5 class="fw-bold text-brown-dark mb-2">Integritas</h5>
                                <p class="text-brown-medium small">Bertindak jujur, transparan, dan konsisten dalam setiap aspek pekerjaan dan hubungan dengan stakeholders.</p>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Value 2: Profesionalisme -->
                    <div class="value-scroll-item">
                        <div class="value-card-3d animate-on-scroll">
                            <div class="value-card-inner text-center">
                                <span class="value-badge bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 40px; height: 40px;">P</span>
                                <div class="value-icon-wrapper mb-3">
                                    <i class="fas fa-user-tie fa-3x text-brown-dark"></i>
                                </div>
                                <h5 class="fw-bold text-brown-dark mb-2">Profesionalisme</h5>
                                <p class="text-brown-medium small">Menjunjung tinggi etika profesi dan kompetensi dalam setiap layanan yang kami berikan kepada klien.</p>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Value 3: Inovasi -->
                    <div class="value-scroll-item">
                        <div class="value-card-3d animate-on-scroll">
                            <div class="value-card-inner text-center">
                                <span class="value-badge bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 40px; height: 40px;">I</span>
                                <div class="value-icon-wrapper mb-3">
                                    <i class="fas fa-cogs fa-3x text-brown-dark"></i>
                                </div>
                                <h5 class="fw-bold text-brown-dark mb-2">Inovasi</h5>
                                <p class="text-brown-medium small">Terus mencari cara baru dan lebih baik dalam menyelesaikan masalah dan meningkatkan efisiensi kerja.</p>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Value 4: Kolaborasi -->
                    <div class="value-scroll-item">
                        <div class="value-card-3d animate-on-scroll">
                            <div class="value-card-inner text-center">
                                <span class="value-badge bg-brown-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 40px; height: 40px;">K</span>
                                <div class="value-icon-wrapper mb-3">
                                    <i class="fas fa-people-arrows fa-3x text-brown-dark"></i>
                                </div>
                                <h5 class="fw-bold text-brown-dark mb-2">Kolaborasi</h5>
                                <p class="text-brown-medium small">Bekerja sama dengan semangat tim untuk mencapai hasil terbaik melalui sinergi dan dukungan bersama.</p>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
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
                        <h2 class="display-6 fw-bold mb-3">Siap Bekerja Sama dengan Kami?</h2>
                        <p class="lead mb-0">
                            Jadilah bagian dari perjalanan kami dalam mewujudkan visi dan misi untuk memberikan solusi terbaik bagi Anda.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-handshake me-2"></i>Hubungi Kami
                                <span class="btn-shine"></span>
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
    .vision-hero {
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

    /* ===== 3D VISION CARD ===== */
    .vision-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .vision-card-inner {
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

    .vision-card-3d:hover .vision-card-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    .vision-icon-wrapper {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .vision-card-3d:hover .vision-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* ===== 3D COMPONENT CARD ===== */
    .component-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .component-card-inner {
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

    .component-card-3d:hover .component-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .component-icon-wrapper {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .component-card-3d:hover .component-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* ===== 3D MISSION CARD ===== */
    .missions-scroll-container {
        width: 100%;
        overflow-x: auto;
        padding-bottom: 1rem;
        scrollbar-width: thin;
        -webkit-overflow-scrolling: touch;
    }

    .missions-scroll-container::-webkit-scrollbar {
        height: 6px;
    }

    .missions-scroll-container::-webkit-scrollbar-thumb {
        background: var(--brown-light);
        border-radius: 3px;
    }

    .missions-scroll-container::-webkit-scrollbar-track {
        background: var(--cream-light);
    }

    .missions-scroll-row {
        display: flex;
        gap: 1rem;
        flex-wrap: nowrap;
        padding: 0.5rem;
        min-width: min-content;
    }

    .mission-scroll-item {
        flex: 0 0 auto;
        width: 320px;
    }

    .mission-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .mission-card-inner {
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

    .mission-card-3d:hover .mission-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .mission-icon-wrapper {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .mission-card-3d:hover .mission-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .mission-features i {
        color: var(--cream-gold);
    }

    /* ===== 3D VALUE CARD ===== */
    .values-scroll-container {
        width: 100%;
        overflow-x: auto;
        padding-bottom: 1rem;
        scrollbar-width: thin;
        -webkit-overflow-scrolling: touch;
    }

    .values-scroll-container::-webkit-scrollbar {
        height: 6px;
    }

    .values-scroll-container::-webkit-scrollbar-thumb {
        background: var(--brown-light);
        border-radius: 3px;
    }

    .values-scroll-container::-webkit-scrollbar-track {
        background: var(--cream-light);
    }

    .values-scroll-row {
        display: flex;
        gap: 1rem;
        flex-wrap: nowrap;
        padding: 0.5rem;
        min-width: min-content;
    }

    .value-scroll-item {
        flex: 0 0 auto;
        width: 280px;
    }

    .value-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .value-card-inner {
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

    .value-card-3d:hover .value-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .value-icon-wrapper {
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

    .value-card-3d:hover .value-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .value-badge {
        font-size: 1.2rem;
        font-weight: 700;
        box-shadow: 0 5px 10px rgba(93,64,55,0.2);
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
        .vision-hero { padding: 5rem 0 3rem; }
        .vision-card-inner { padding: 2rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
        .mission-scroll-item { width: 280px; }
        .value-scroll-item { width: 240px; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .vision-icon-wrapper { width: 70px; height: 70px; }
        .mission-scroll-item { width: 260px; }
        .value-scroll-item { width: 220px; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
        .mission-scroll-item { width: 240px; }
        .value-scroll-item { width: 200px; }
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
        const cards = document.querySelectorAll('.vision-card-inner, .component-card-inner, .mission-card-inner, .value-card-inner');
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
