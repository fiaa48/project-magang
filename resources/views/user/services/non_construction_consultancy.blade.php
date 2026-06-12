@extends('user.layouts.app')

@section('title', 'Konsultansi Non-Konstruksi | PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi non-konstruksi profesional: pertanian, transportasi, telematika, survei, penelitian, manajemen, dan jasa khusus.')

@section('content')
    <!-- HERO SECTION -->
    <section class="non-construction-hero position-relative overflow-hidden">
        <div class="hero-bg-pattern">
            <div class="pattern-circle circle-1"></div>
            <div class="pattern-circle circle-2"></div>
            <div class="pattern-square square-1"></div>
            <div class="pattern-square square-2"></div>
        </div>
        <div class="container position-relative z-3">
            <div class="row min-vh-60 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="company-badge mb-5 animate-fade-in-down">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-chart-network me-2"></i>KONSULTANSI SPESIALIS
                        </span>
                    </div>
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        <span class="text-gradient-brown">Non‑Konstruksi</span>
                    </h1>
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Solusi Komprehensif untuk
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Pertanian · Transportasi · Telematika
                            </span>
                        </div>
                    </div>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav mt-5 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-brown-medium">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('services') }}" class="text-brown-medium">Layanan</a></li>
                            <li class="breadcrumb-item active text-brown-dark">Non‑Konstruksi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <a href="#categories" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- CATEGORIES SECTION – 3D CARDS (tanpa tombol detail) -->
    <section id="categories" class="py-6 bg-white position-relative">
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>
        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-tags me-2"></i>NON-KONSTRUKSI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Layanan Non‑Konstruksi</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Kami menyediakan berbagai layanan profesional untuk mendukung pengembangan dan optimasi bisnis Anda di berbagai sektor.
                </p>
            </div>

            @php
                $nonConstructionServices = !empty($nonConstructionServices ?? []) ? $nonConstructionServices : [];
            @endphp

            @if(count($nonConstructionServices) > 0)
            <div class="row g-4">
                @foreach($nonConstructionServices as $service)
                    <div class="col-md-4">
                        <div class="service-card-3d animate-on-scroll">
                            <div class="service-card-inner">
                                <div class="service-icon-wrapper">
                                    <div class="icon-glow"></div>
                                    <i class="{{ $service['icon'] ?? 'fas fa-list-check' }} fa-3x text-brown-dark"></i>
                                </div>
                                <h3 class="fw-bold text-brown-dark mb-3">{{ $service['title'] }}</h3>
                                <p class="text-brown-medium mb-4">{{ $service['description'] }}</p>
                                @if(isset($service['sub_services']) && count($service['sub_services']) > 0)
                                    <div class="service-sub-list mb-4">
                                        <ul class="list-unstyled">
                                            @foreach(array_slice($service['sub_services'], 0, 4) as $sub)
                                                <li class="d-flex mb-2">
                                                    <i class="fas fa-chevron-right text-cream-gold me-2 mt-1 small"></i>
                                                    <span class="text-brown-medium">{{ $sub }}</span>
                                                </li>
                                            @endforeach
                                            @if(count($service['sub_services']) > 4)
                                                <li class="text-brown-dark small mt-2 fw-semibold">
                                                    + {{ count($service['sub_services']) - 4 }} layanan lainnya
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif

            <!-- 7 Kategori statis (tanpa tombol detail) -->
            @php
                $categories = [
                    ['id' => 1, 'category' => 'Pengembangan Pertanian dan Pedesaan', 'services' => ['Penerapan Social-Care, Pengembangan / Pedesaan Manuskrip', 'Kesehatan', 'Pelayanan', 'Sakit-Sakit yang Penghasilnya Pedesaan Dan Pedesaan Lainnya'], 'description' => 'Konsultansi pengembangan pertanian dan pedesaan dengan fokus pada pemberdayaan masyarakat, kesehatan lingkungan, dan pengembangan berkelanjutan.', 'icon' => 'fas fa-tractor', 'color' => 'agriculture'],
                    ['id' => 2, 'category' => 'Transportasi', 'services' => ['Pengembangan Sistem Transportasi', 'Logistik dan Jasa Belanja Terapese', 'Usaha Jasa Logistik', 'Soalings Tersedia (pemilik Lainnya)'], 'description' => 'Konsultansi sistem transportasi dan logistik untuk efisiensi distribusi dan mobilitas.', 'icon' => 'fas fa-truck-moving', 'color' => 'transport'],
                    ['id' => 3, 'category' => 'Telematika', 'services' => ['Telematika Cari', 'Telematika Ganti', 'Penggantian', 'Online / Penggantian Lainnya', 'Daftar Telematika Lainnya'], 'description' => 'Konsultansi teknologi telematika dan komunikasi digital untuk transformasi bisnis.', 'icon' => 'fas fa-satellite-dish', 'color' => 'telematics'],
                    ['id' => 4, 'category' => 'Jasa Survey', 'services' => ['Suara Testesi', 'Pengadaan Jasa / Tanggapan', 'Suara Informasi / Sistem', 'Sistem Informasi', 'Suara Informasi / Pengadaan Tekstil / Industri', 'Suara Informasi / Sistem', 'Suara Informasi / Sistem', 'Jasa Survey dan Sistem', 'Jasa Survey / Sistem dan Gerbong (non-merek)'], 'description' => 'Layanan survei dan analisis data untuk mendukung pengambilan keputusan strategis.', 'icon' => 'fas fa-map-marked-alt', 'color' => 'survey'],
                    ['id' => 5, 'category' => 'Jasa Studi, Pemilihan dan Berhutan Teknik', 'services' => ['Studi Teknik', 'Studi Pengajuan & Studi Teknik Lainnya', 'Studi Pengajuan & Studi Teknik', 'Jasa Pembelian Lainnya', 'Jasa Berhutan Teknik'], 'description' => 'Konsultansi studi kelayakan, penelitian, dan bantuan teknis untuk proyek-proyek strategis.', 'icon' => 'fas fa-microscope', 'color' => 'research'],
                    ['id' => 6, 'category' => 'Jasa Konsultan Manajemen', 'services' => ['Perencanaan Sistem Automatic', 'Perencanaan dan Pengurusan SCM', 'Kontrol Sistem Manajemen Pengurusan', 'Kontrol Sistem Bisnis'], 'description' => 'Konsultansi manajemen untuk meningkatkan efisiensi operasional dan strategi bisnis.', 'icon' => 'fas fa-briefcase', 'color' => 'management'],
                    ['id' => 7, 'category' => 'Jasa Khusus', 'services' => ['Jasa Teknologi dan Sistem Informasi', 'Jasa Penilai / Appraisal / Value', 'Jasa Survey or Independen', 'Jasa Sertifikasi', 'Jasa Inspeksi Teknik', 'Jasa Kehumasan'], 'description' => 'Layanan khusus yang disesuaikan dengan kebutuhan unik klien.', 'icon' => 'fas fa-star', 'color' => 'special'],
                ];
            @endphp

            <div class="section-header text-center mt-6 mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-tags me-2"></i>KONSULTANSI NON-KONSTRUKSI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Layanan Konsultansi Non-Konstruksi</h2>
            </div>

            <div class="row g-4">
                @foreach($categories as $index => $category)
                    <div class="col-lg-3 col-md-6">
                        <div class="category-card-3d animate-on-scroll">
                            <div class="category-card-inner">
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="category-icon-wrapper category-{{ $category['color'] }}">
                                        <i class="{{ $category['icon'] }}"></i>
                                    </div>
                                    <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-3 py-2">0{{ $index + 1 }}</span>
                                </div>
                                <h3 class="fw-bold text-brown-dark mb-3">{{ $category['category'] }}</h3>
                                <p class="text-brown-medium small mb-4">{{ $category['description'] }}</p>
                                <div class="services-list mb-4">
                                    @foreach(array_slice($category['services'], 0, 3) as $catService)
                                        <div class="d-flex mb-2">
                                            <i class="fas fa-check-circle text-cream-gold me-2 mt-1"></i>
                                            <span class="text-brown-medium small">{{ $catService }}</span>
                                        </div>
                                    @endforeach
                                    @if(count($category['services']) > 3)
                                        <div class="text-brown-dark small mt-2 fw-semibold">
                                            + {{ count($category['services']) - 3 }} layanan lainnya
                                        </div>
                                    @endif
                                </div>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US SECTION – 3D CARDS -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>
        <div class="container position-relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="section-header text-start">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                            <i class="fas fa-star me-2"></i>KEUNGGULAN KAMI
                        </span>
                        <h2 class="display-5 fw-bold text-brown-dark mb-3">Mengapa Memilih Layanan Konsultansi Kami?</h2>
                        <p class="lead text-brown-medium mb-5">
                            Dengan pengalaman bertahun-tahun dan tim ahli yang berdedikasi, kami memberikan solusi konsultansi yang tepat dan efektif untuk kebutuhan bisnis Anda.
                        </p>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="benefit-card-3d animate-on-scroll">
                                <div class="benefit-inner">
                                    <div class="benefit-icon-wrapper mb-3"><i class="fas fa-user-tie fa-2x text-brown-dark"></i></div>
                                    <h5 class="fw-bold text-brown-dark mb-2">Tim Ahli Berpengalaman</h5>
                                    <p class="text-brown-medium small">Didukung oleh profesional dengan pengalaman di berbagai sektor industri.</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="benefit-card-3d animate-on-scroll">
                                <div class="benefit-inner">
                                    <div class="benefit-icon-wrapper mb-3"><i class="fas fa-lightbulb fa-2x text-brown-dark"></i></div>
                                    <h5 class="fw-bold text-brown-dark mb-2">Solusi Inovatif</h5>
                                    <p class="text-brown-medium small">Pendekatan kreatif dan solusi yang sesuai dengan perkembangan zaman.</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="benefit-card-3d animate-on-scroll">
                                <div class="benefit-inner">
                                    <div class="benefit-icon-wrapper mb-3"><i class="fas fa-handshake fa-2x text-brown-dark"></i></div>
                                    <h5 class="fw-bold text-brown-dark mb-2">Pendekatan Personal</h5>
                                    <p class="text-brown-medium small">Setiap klien mendapatkan perhatian khusus dan solusi yang disesuaikan.</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="benefit-card-3d animate-on-scroll">
                                <div class="benefit-inner">
                                    <div class="benefit-icon-wrapper mb-3"><i class="fas fa-clock fa-2x text-brown-dark"></i></div>
                                    <h5 class="fw-bold text-brown-dark mb-2">Efisiensi Waktu</h5>
                                    <p class="text-brown-medium small">Proses kerja yang terstruktur untuk hasil yang cepat dan tepat.</p>
                                    <div class="card-corner corner-1"></div>
                                    <div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-visual animate-on-scroll">
                        <div class="visual-wrapper">
                            <div class="floating-icon icon-1"><i class="fas fa-chart-line"></i></div>
                            <div class="floating-icon icon-2"><i class="fas fa-cogs"></i></div>
                            <div class="floating-icon icon-3"><i class="fas fa-users"></i></div>
                            <div class="floating-icon icon-4"><i class="fas fa-chart-pie"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Siap Mengembangkan Bisnis Anda?</h2>
                        <p class="lead mb-0">
                            Konsultasikan kebutuhan Anda dengan tim ahli kami dan dapatkan solusi terbaik untuk pengembangan bisnis Anda.
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

@push('styles')
<style>
    /* ===== GAYA PREMIUM (tetap sama seperti sebelumnya, tidak diubah) ===== */
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #A1887F;
        --cream-gold: #D4AF37;
        --cream-dark: #D7CCC8;
        --cream-medium: #f8fafc;
        --cream-light: #f8fafc;
        --white: #ffffff;
        --shadow-sm: 0 .125rem .25rem rgba(0,0,0,.075);
        --shadow-md: 0 .5rem 1rem rgba(0,0,0,.15);
        --shadow-lg: 0 1rem 3rem rgba(0,0,0,.175);
        --shadow-3d: 0 20px 40px rgba(93,64,55,0.2), 0 10px 20px rgba(0,0,0,0.1);
    }

    .non-construction-hero {
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

    /* 3D Category Card */
    .category-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .category-card-inner {
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
    .category-card-3d:hover .category-card-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }
    .category-icon-wrapper {
        width: 60px;
        height: 60px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        transition: all 0.3s;
    }
    .category-card-3d:hover .category-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }
    .category-agriculture { background: linear-gradient(135deg, #2E7D32, #4CAF50); }
    .category-transport { background: linear-gradient(135deg, #1565C0, #2196F3); }
    .category-telematics { background: linear-gradient(135deg, #6A1B9A, #9C27B0); }
    .category-survey { background: linear-gradient(135deg, #00695C, #009688); }
    .category-research { background: linear-gradient(135deg, #EF6C00, #FF9800); }
    .category-management { background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium)); }
    .category-special { background: linear-gradient(135deg, #C62828, #F44336); }

    /* 3D Service Card (untuk nonConstructionServices) */
    .service-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .service-card-inner {
        background: white;
        border-radius: 2rem;
        padding: 2rem;
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
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        position: relative;
        z-index: 2;
        transition: all 0.3s;
    }
    .service-card-3d:hover .service-icon-wrapper {
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
    .service-card-3d:hover .icon-glow {
        opacity: 0.5;
    }
    .service-sub-list ul li i {
        color: var(--cream-gold);
    }

    /* 3D Benefit Card */
    .benefit-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .benefit-inner {
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
    .benefit-card-3d:hover .benefit-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }
    .benefit-icon-wrapper {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }
    .benefit-card-3d:hover .benefit-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* Why Choose Visual */
    .why-choose-visual {
        min-height: 300px;
        position: relative;
    }
    .visual-wrapper {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 300px;
    }
    .floating-icon {
        position: absolute;
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        box-shadow: var(--shadow-3d);
        animation: float-icon 6s ease-in-out infinite;
    }
    .floating-icon.icon-1 { top: 0; left: 20%; animation-delay: 0s; }
    .floating-icon.icon-2 { top: 30%; right: 10%; animation-delay: 2s; }
    .floating-icon.icon-3 { bottom: 10%; left: 10%; animation-delay: 4s; }
    .floating-icon.icon-4 { bottom: 30%; right: 20%; animation-delay: 1s; }
    @keyframes float-icon {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
    }

    /* Buttons */
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

    .cta-elegant {
        background: linear-gradient(135deg, #f8fafc 0%, #D7CCC8 100%);
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
        background: radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%),
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
        color: #241b64;
        background: linear-gradient(135deg, #241b64, #302574);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    .cta-elegant .lead {
        color: #4b3dad;
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
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

    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .non-construction-hero { padding: 5rem 0 3rem; }
        .category-card-inner { padding: 1.25rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }
    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .category-icon-wrapper { width: 50px; height: 50px; }
        .floating-icon { width: 50px; height: 50px; font-size: 1.5rem; }
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
        const textElement = document.querySelector('.typewriter-text');
        if (textElement) {
            const originalText = textElement.textContent.trim();
            let charIndex = 0, isDeleting = false, typingSpeed = 100;
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

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            });
        });

        const observerOptions = { threshold: 0.2, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, observerOptions);
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        const cards = document.querySelectorAll('.category-card-inner, .service-card-inner, .benefit-inner');
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
