@extends('layouts.app')

@section('title', ($portofolio['title'] ?? 'Proyek') . ' | PT Mitra Nusa Konsulindo')
@section('description', $portofolio['short_description'] ?? '')

@section('content')
    <!-- HERO DETAIL – SAME STYLE AS HOME HERO -->
    <section class="portfolio-detail-hero position-relative overflow-hidden">
        <!-- Background Pattern (same as home) -->
        <div class="hero-bg-pattern">
            <div class="pattern-circle circle-1"></div>
            <div class="pattern-circle circle-2"></div>
            <div class="pattern-square square-1"></div>
        </div>

        <div class="container position-relative z-3">
            <div class="row min-vh-50 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <!-- Breadcrumb – clean, same style -->
                    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-5">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-brown-medium">Beranda</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('portofolio') }}" class="text-brown-medium">Portofolio</a>
                            </li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">
                                {{ $portofolio['title'] ?? '' }}
                            </li>
                        </ol>
                    </nav>

                    <!-- Category Badge – same style as home badge -->
                    <div class="company-badge mb-4">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-tag me-2"></i>{{ $portofolio['category'] ?? 'Proyek' }}
                        </span>
                    </div>

                    <!-- Main Title – with gradient -->
                    <h1 class="display-4 fw-bold mb-4 text-brown-dark">
                        {{ $portofolio['title'] ?? '' }}
                    </h1>

                    <!-- Short Description -->
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto mb-5" style="max-width: 800px;">
                        {{ $portofolio['short_description'] ?? '' }}
                    </p>

                    <!-- Project Meta – like stats on home, with hover effect -->
                    <div class="project-meta row justify-content-center g-4">
                        @if(isset($portofolio['year']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Tahun</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $portofolio['year'] }}</div>
                            </div>
                        </div>
                        @endif
                        @if(isset($portofolio['location']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Lokasi</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $portofolio['location'] }}</div>
                            </div>
                        </div>
                        @endif
                        @if(isset($portofolio['client']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-user-tie fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Klien</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $portofolio['client'] }}</div>
                            </div>
                        </div>
                        @endif
                        @if(isset($portofolio['duration']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-clock fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Durasi</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $portofolio['duration'] }}</div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <section class="py-6 bg-white">
        <div class="container">
            <!-- Back Button – same style as home's outline buttons -->
            <div class="back-button-wrapper mb-5">
                <a href="{{ route('portofolio') }}" class="btn btn-outline-brown-dark rounded-pill px-4">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Portofolio
                </a>
            </div>

            <div class="row g-5">
                <!-- LEFT COLUMN: MAIN IMAGE, GALLERY, DESCRIPTION -->
                <div class="col-lg-8">
                    <!-- Main Image – premium shadow, hover effect -->
                    <div class="main-image-wrapper rounded-4 overflow-hidden shadow-lg mb-4">
                        <img src="{{ asset('images/' . $portofolio['image']) }}"
                             alt="{{ $portofolio['title'] ?? '' }}"
                             class="img-fluid w-100"
                             id="mainImage"
                             onerror="this.onerror=null; this.src='https://placehold.co/1200x800/5D4037/FFFFFF?text={{ urlencode($portofolio['title'] ?? 'Proyek') }}';">
                    </div>

                    <!-- Gallery Thumbnails – with onclick to change main image -->
                    @if(!empty($portofolio['gallery']) && count($portofolio['gallery']) > 0)
                    <div class="thumbnail-gallery mb-5">
                        <h5 class="fw-bold text-brown-dark mb-3">
                            <i class="fas fa-images me-2"></i>Galeri Proyek
                        </h5>
                        <div class="row g-3">
                            @foreach($portofolio['gallery'] as $image)
                            <div class="col-4 col-md-3">
                                <div class="thumbnail-item rounded-3 overflow-hidden cursor-pointer"
                                     onclick="document.getElementById('mainImage').src='{{ asset('images/' . $image) }}'">
                                    <img src="{{ asset('images/' . $image) }}"
                                         alt="Gallery Thumbnail"
                                         class="img-fluid w-100"
                                         onerror="this.style.display='none'">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Project Description -->
                    <div class="project-description">
                        <h2 class="fw-bold text-brown-dark mb-4">
                            <i class="fas fa-file-alt me-3"></i>Deskripsi Proyek
                        </h2>
                        <p class="text-brown-medium fs-5 mb-4">{{ $portofolio['description'] ?? '' }}</p>

                        <!-- Detailed Work List -->
                        @if(!empty($portofolio['details']) && count($portofolio['details']) > 0)
                        <div class="detailed-info mt-5">
                            <h4 class="fw-bold text-brown-dark mb-3">Detail Pekerjaan</h4>
                            <ul class="list-unstyled">
                                @foreach($portofolio['details'] as $detail)
                                <li class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-brown-dark mt-1 me-3"></i>
                                    <span class="text-brown-medium">{{ $detail }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Tags -->
                        @if(!empty($portofolio['tags']) && count($portofolio['tags']) > 0)
                        <div class="project-tags mt-5">
                            <h4 class="fw-bold text-brown-dark mb-3">
                                <i class="fas fa-tags me-2"></i>Tags
                            </h4>
                            @foreach($portofolio['tags'] as $tag)
                            <span class="badge bg-brown-light-subtle text-brown-dark px-3 py-2 rounded-pill me-2 mb-2">
                                {{ $tag }}
                            </span>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>

                <!-- RIGHT COLUMN: INFO CARD, TESTIMONIAL, CTA -->
                <div class="col-lg-4">
                    <!-- Project Info Card – same style as service card on home -->
                    <div class="project-info-card shadow-lg rounded-4 overflow-hidden mb-5">
                        <div class="card-header bg-brown-dark text-white py-4">
                            <h3 class="h4 fw-bold mb-0">
                                <i class="fas fa-info-circle me-2"></i>Informasi Proyek
                            </h3>
                        </div>
                        <div class="card-body p-4">
                            <div class="info-item d-flex mb-4 pb-3 border-bottom">
                                <div class="info-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                    <i class="fas fa-calendar text-brown-dark"></i>
                                </div>
                                <div>
                                    <div class="info-label small text-brown-medium">Periode</div>
                                    <div class="info-value fw-bold text-brown-dark">
                                        {{ $portofolio['start_date'] ?? 'N/A' }} – {{ $portofolio['end_date'] ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                            <div class="info-item d-flex mb-4 pb-3 border-bottom">
                                <div class="info-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                    <i class="fas fa-users text-brown-dark"></i>
                                </div>
                                <div>
                                    <div class="info-label small text-brown-medium">Tim</div>
                                    <div class="info-value fw-bold text-brown-dark">
                                        {{ $portofolio['team_size'] ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                            <div class="info-item d-flex mb-4 pb-3 border-bottom">
                                <div class="info-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                    <i class="fas fa-tasks text-brown-dark"></i>
                                </div>
                                <div>
                                    <div class="info-label small text-brown-medium">Lingkup</div>
                                    <div class="info-value fw-bold text-brown-dark">
                                        {{ $portofolio['scope'] ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                            <div class="info-item d-flex">
                                <div class="info-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                    <i class="fas fa-flag-checkered text-brown-dark"></i>
                                </div>
                                <div>
                                    <div class="info-label small text-brown-medium">Status</div>
                                    <div class="info-value">
                                        <span class="badge bg-success rounded-pill px-3 py-2">
                                            {{ $portofolio['status'] ?? 'Selesai' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Card – if available -->
                    @if(!empty($portofolio['testimonial']))
                    <div class="testimonial-card shadow-lg rounded-4 overflow-hidden mb-5">
                        <div class="card-header bg-cream-light py-4">
                            <h3 class="h4 fw-bold mb-0 text-brown-dark">
                                <i class="fas fa-quote-left me-2"></i>Testimoni
                            </h3>
                        </div>
                        <div class="card-body p-4">
                            <blockquote class="blockquote mb-0">
                                <p class="text-brown-medium fst-italic">"{{ $portofolio['testimonial'] }}"</p>
                                <footer class="blockquote-footer mt-2 text-brown-dark">
                                    {{ $portofolio['client'] ?? 'Klien' }}
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                    @endif

                    <!-- CTA Card – premium -->
                    <div class="cta-card shadow-lg rounded-4 overflow-hidden">
                        <div class="card-header bg-brown-medium text-black py-4">
                            <h3 class="h4 fw-bold mb-0">
                                <i class="fas fa-handshake me-2"></i>Tertarik?
                            </h3>
                        </div>
                        <div class="card-body p-4 text-center">
                            <p class="text-brown-medium mb-4">Butuh bantuan untuk proyek serupa?</p>
                            <a href="{{ route('contact') }}" class="btn btn-brown-dark w-100 rounded-pill py-3">
                                <i class="fas fa-envelope me-2"></i>Hubungi Kami
                            </a>
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
                        <h2 class="display-6 fw-bold mb-3">Wujudkan Proyek Anda Bersama Kami</h2>
                        <p class="lead mb-0">
                            Dapatkan konsultasi gratis dari tim ahli kami.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-brown btn-lg px-5 rounded-pill">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Sekarang
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

    /* ----- Hero Section (Portfolio Detail) ----- */
    .portfolio-detail-hero {
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

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .min-vh-50 { min-height: 50vh; }

/* ===== BREADCRUMB PREMIUM – GLASSMORPHISM + ANIMASI ===== */
.breadcrumb-nav {
    display: inline-block;
    animation: fadeInDown 0.8s ease-out;
}

.breadcrumb-nav .breadcrumb {
    background: rgba(255, 255, 255, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border-radius: 60px;
    padding: 0.75rem 1.8rem;
    border: 1px solid rgba(93, 64, 55, 0.15);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02), 0 2px 6px rgba(93, 64, 55, 0.05);
    transition: all 0.3s ease;
}

.breadcrumb-nav .breadcrumb:hover {
    background: rgba(255, 255, 255, 0.9);
    border-color: rgba(93, 64, 55, 0.25);
    box-shadow: 0 12px 28px rgba(93, 64, 55, 0.08);
}

/* Item breadcrumb */
.breadcrumb-item {
    display: flex;
    align-items: center;
    font-size: 0.95rem;
    font-weight: 500;
}

/* Link (Beranda & Portofolio) */
.breadcrumb-item a {
    color: var(--brown-medium, #8B6B61);
    text-decoration: none;
    transition: all 0.25s ease;
    padding: 0.2rem 0.4rem;
    border-radius: 30px;
    position: relative;
}

/* Efek hover link */
.breadcrumb-item a:hover {
    color: var(--brown-dark, #5D4037);
    background: rgba(93, 64, 55, 0.04);
    transform: translateY(-1px);
}

/* Efek underline animasi */
.breadcrumb-item a::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--cream-gold, #D4AF37), var(--brown-light, #A1887F));
    transition: all 0.3s ease;
    transform: translateX(-50%);
    border-radius: 2px;
}

.breadcrumb-item a:hover::after {
    width: 80%;
}

/* Item aktif (nama proyek) */
.breadcrumb-item.active {
    color: var(--brown-dark, #5D4037) !important;
    font-weight: 700;
    letter-spacing: 0.3px;
    background: rgba(93, 64, 55, 0.05);
    padding: 0.2rem 1rem;
    border-radius: 30px;
    margin-left: 0.2rem;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.02);
}

/* Separator (garis miring) */
.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    font-size: 1.2rem;
    line-height: 1;
    color: var(--brown-light, #A1887F);
    opacity: 0.7;
    padding: 0 0.3rem 0 0.1rem;
    font-weight: 300;
    transition: all 0.2s;
}

/* Ikon home */
.breadcrumb-item:first-child a i {
    margin-right: 6px;
    color: var(--brown-dark, #5D4037);
    transition: transform 0.2s;
}

.breadcrumb-item:first-child a:hover i {
    transform: translateY(-1px);
    color: var(--cream-gold, #D4AF37);
}

/* Responsive untuk mobile */
@media (max-width: 768px) {
    .breadcrumb-nav .breadcrumb {
        padding: 0.6rem 1.2rem;
        backdrop-filter: blur(8px);
    }

    .breadcrumb-item {
        font-size: 0.85rem;
    }

    .breadcrumb-item.active {
        padding: 0.15rem 0.8rem;
        white-space: nowrap;
        max-width: 160px;
        overflow: hidden;
        text-overflow: ellipsis;
    }
}

@media (max-width: 576px) {
    .breadcrumb-nav .breadcrumb {
        padding: 0.5rem 1rem;
        flex-wrap: wrap;
    }

    .breadcrumb-item {
        font-size: 0.8rem;
    }

    .breadcrumb-item.active {
        max-width: 140px;
    }
}
    /* ----- Company Badge (same as home) ----- */
    .company-badge {
        animation: fadeInDown 0.8s ease-out;
    }

    .badge.bg-brown-dark {
        background-color: rgba(93, 64, 55, 0.9) !important;
        border: 1px solid rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
    }

    /* ----- Typography ----- */
    .display-4 {
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

    /* ----- Meta Items (like stats on home) ----- */
    .meta-item {
        padding: 1.2rem 0.8rem;
        background: white;
        border-radius: 1rem;
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.3s ease;
        text-align: center;
    }

    .meta-item:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-md);
        border-color: var(--brown-light);
    }

    .meta-label {
        font-size: 0.85rem;
        color: var(--brown-medium);
        font-weight: 500;
        letter-spacing: 0.3px;
    }

    .meta-value {
        font-size: 1rem;
        font-weight: 700;
        color: var(--brown-dark);
    }

    /* ----- Main Image ----- */
    .main-image-wrapper {
        transition: all 0.3s ease;
    }

    .main-image-wrapper:hover {
        box-shadow: 0 20px 40px rgba(0,0,0,0.2) !important;
    }

    .main-image-wrapper img {
        width: 100%;
        height: auto;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .main-image-wrapper:hover img {
        transform: scale(1.02);
    }

    /* ----- Thumbnail Gallery ----- */
    .thumbnail-item {
        height: 100px;
        border: 2px solid transparent;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .thumbnail-item:hover {
        border-color: var(--brown-dark);
        transform: translateY(-3px);
        box-shadow: var(--shadow-sm);
    }

    .thumbnail-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* ----- Project Description ----- */
    .project-description h2,
    .project-description h4 {
        position: relative;
        display: inline-block;
    }

    .project-description h2 i,
    .project-description h4 i {
        color: var(--brown-dark);
    }

    .detailed-info ul li i {
        font-size: 1.1rem;
    }

    /* ----- Tags ----- */
    .badge.bg-brown-light-subtle {
        background-color: rgba(161,136,127,0.1) !important;
        color: var(--brown-dark);
        font-weight: 500;
        transition: all 0.3s;
    }

    .badge.bg-brown-light-subtle:hover {
        background-color: var(--brown-dark) !important;
        color: white !important;
    }

/* ===== CTA CARD – PREMIUM, KONTRAST TINGGI ===== */
.cta-card {
    border: none;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s ease;
}

.cta-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 30px rgba(93, 64, 55, 0.15) !important;
}

/* Header dengan gradien baru – lebih mewah */
.cta-card .card-header {
    background: linear-gradient(145deg, #6B4E3A, #4A342E) !important;
    /* Ganti dari bg-brown-medium ke gradien yang lebih kontras */
    border-bottom: none;
    padding: 1.5rem 1.25rem !important;
    position: relative;
    overflow: hidden;
}

/* Efek shimmer di header */
.cta-card .card-header::after {
    content: '';
    position: absolute;
    top: -50%;
    left: -60%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
        to right,
        rgba(255, 255, 255, 0) 0%,
        rgba(255, 255, 255, 0.1) 50%,
        rgba(255, 255, 255, 0) 100%
    );
    transform: rotate(25deg);
    animation: shimmer 6s infinite;
}

@keyframes shimmer {
    0% { left: -60%; }
    20% { left: 100%; }
    100% { left: 100%; }
}

.cta-card .card-header h3,
.cta-card .card-header .h4 {
    color: white;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    display: flex;
    align-items: center;
    gap: 10px;
}

.cta-card .card-header i {
    color: #FFD700; /* Warna emas untuk ikon handshake */
    filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
}

/* Body card – background putih bersih, teks kontras */
.cta-card .card-body {
    background: white;
    padding: 2rem 1.5rem !important;
}

.cta-card .card-body p {
    color: #2C3E50 !important; /* Biru kehitaman, kontras tinggi */
    font-size: 1.1rem;
    font-weight: 500;
    margin-bottom: 1.5rem;
    line-height: 1.5;
}

/* Tombol – gradien dan efek hover premium */
.cta-card .btn-brown-dark {
    background: linear-gradient(145deg, #5D4037, #3E2C27);
    border: none;
    color: white;
    font-weight: 600;
    padding: 0.9rem 1.5rem;
    border-radius: 50px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
    box-shadow: 0 8px 16px rgba(93, 64, 55, 0.2);
}

.cta-card .btn-brown-dark::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.6s ease;
    z-index: -1;
}

.cta-card .btn-brown-dark:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 24px rgba(93, 64, 55, 0.3);
    background: linear-gradient(145deg, #6B4E3A, #4A342E);
}

.cta-card .btn-brown-dark:hover::before {
    left: 100%;
}

.cta-card .btn-brown-dark i {
    color: #FFD700;
    margin-right: 8px;
    transition: transform 0.3s ease;
}

.cta-card .btn-brown-dark:hover i {
    transform: translateX(5px);
}

/* Responsive */
@media (max-width: 768px) {
    .cta-card .card-body {
        padding: 1.5rem !important;
    }

    .cta-card .card-body p {
        font-size: 1rem;
    }
}

    /* ----- Project Info Card ----- */
    .project-info-card {
        border: none;
    }

    .project-info-card .card-header {
        border-bottom: none;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bg-brown-light-subtle {
        background-color: rgba(161,136,127,0.1) !important;
    }

/* ===== TESTIMONIAL CARD – PREMIUM, ARTISTIK, KONTRAST TINGGI ===== */
.testimonial-card {
    border: none;
    border-radius: 24px !important;
    background: transparent;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

/* Efek hover card */
.testimonial-card:hover {
    transform: translateY(-6px);
}

/* Header dengan gaya elegan – gradien emas & cokelat */
.testimonial-card .card-header {
    background: linear-gradient(145deg, #FDF8F5, #F9F2EF) !important;
    /* Ganti dari bg-cream-light ke gradien lembut */
    border-bottom: 2px solid rgba(212, 175, 55, 0.3);
    padding: 1.5rem 1.5rem 0.8rem !important;
    position: relative;
    z-index: 2;
    border-radius: 24px 24px 0 0 !important;
}

/* Ikon quote kiri – diperbesar dan diberi efek */
.testimonial-card .card-header i {
    color: var(--cream-gold, #D4AF37);
    font-size: 2.2rem;
    margin-right: 12px;
    filter: drop-shadow(0 4px 6px rgba(212, 175, 55, 0.2));
    transition: transform 0.3s ease, filter 0.3s ease;
}

.testimonial-card:hover .card-header i {
    transform: scale(1.1) rotate(-5deg);
    filter: drop-shadow(0 6px 10px rgba(212, 175, 55, 0.3));
}

/* Judul "Testimoni" */
.testimonial-card .card-header h3,
.testimonial-card .card-header .h4 {
    color: var(--brown-dark, #5D4037);
    font-weight: 700;
    letter-spacing: 0.5px;
    margin: 0;
    display: flex;
    align-items: center;
    font-size: 1.35rem;
}

/* Body card – background putih bersih dengan aksen garis emas */
.testimonial-card .card-body {
    background: white;
    padding: 2rem 2rem 1.8rem !important;
    border-radius: 0 0 24px 24px;
    position: relative;
    z-index: 1;
    box-shadow: inset 0 8px 12px -8px rgba(0, 0, 0, 0.02);
}

/* Garis dekoratif di atas body */
.testimonial-card .card-body::before {
    content: '';
    position: absolute;
    top: 0;
    left: 15%;
    width: 70%;
    height: 3px;
    background: linear-gradient(90deg, transparent, var(--cream-gold, #D4AF37), transparent);
    border-radius: 3px;
    opacity: 0.4;
}

/* Kutipan teks */
.testimonial-card blockquote {
    margin-bottom: 1.2rem;
}

.testimonial-card .blockquote p {
    color: #2C3E50 !important; /* Biru kehitaman – kontras tinggi */
    font-size: 1.15rem;
    line-height: 1.7;
    font-weight: 450;
    position: relative;
    padding-left: 0.5rem;
    border-left: 4px solid var(--cream-gold, #D4AF37);
    border-radius: 0 4px 4px 0;
    background: linear-gradient(to right, rgba(212, 175, 55, 0.02), transparent);
    transition: border-left-width 0.2s ease;
}

.testimonial-card:hover .blockquote p {
    border-left-width: 6px;
}

/* Footer (nama klien) */
.testimonial-card .blockquote-footer {
    color: var(--brown-dark, #5D4037) !important;
    font-weight: 600;
    font-size: 0.95rem;
    margin-top: 0.8rem;
    display: flex;
    align-items: center;
    gap: 8px;
}

/* Dekorasi titik emas sebelum nama */
.testimonial-card .blockquote-footer::before {
    content: '✦';
    color: var(--cream-gold, #D4AF37);
    font-size: 1.2rem;
    font-weight: 400;
    margin-right: 4px;
    opacity: 0.9;
}

/* Efek fade-in saat scroll */
@keyframes testimonialFadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.testimonial-card {
    animation: testimonialFadeIn 0.8s ease-out;
}

/* Responsive */
@media (max-width: 768px) {
    .testimonial-card .card-header {
        padding: 1.2rem 1.2rem 0.6rem !important;
    }

    .testimonial-card .card-header i {
        font-size: 1.8rem;
    }

    .testimonial-card .card-body {
        padding: 1.5rem !important;
    }

    .testimonial-card .blockquote p {
        font-size: 1rem;
        padding-left: 0.75rem;
    }
}

@media (max-width: 576px) {
    .testimonial-card .card-header h3 {
        font-size: 1.2rem;
    }

    .testimonial-card .blockquote p {
        font-size: 0.95rem;
    }
}
    /* ----- Buttons (same as home) ----- */
    .btn-brown-dark {
        background: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-brown-dark:hover {
        background: #4A342E;
        border-color: #4A342E;
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-brown-dark {
        border: 2px solid var(--brown-dark);
        color: var(--brown-dark);
        font-weight: 600;
    }

    .btn-outline-brown-dark:hover {
        background: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-brown {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-brown:hover {
        background-color: #4A342E;
        border-color: #4A342E;
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-cream {
        background-color: white;
        border-color: white;
        color: var(--brown-dark);
        font-weight: 600;
    }

    .btn-cream:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .rounded-pill {
        border-radius: 50rem !important;
    }

    /* ----- CTA Section (same elegant style) ----- */
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
        -webkit-background-clip: text;x
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-elegant .lead {
        color: #795548;
    }

    /* ----- Utilities ----- */
    .py-6 {
        padding-top: 5rem !important;
        padding-bottom: 5rem !important;
    }

    .mt-6 {
        margin-top: 5rem !important;
    }

    .mb-6 {
        margin-bottom: 5rem !important;
    }

    .bg-cream-light {
        background-color: var(--cream-light) !important;
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

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-4 { font-size: 2.5rem !important; }
        .portfolio-detail-hero { padding: 4rem 0 3rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-4 { font-size: 2rem !important; }
        .meta-item { padding: 0.8rem; }
        .thumbnail-item { height: 80px; }
        .breadcrumb-nav .breadcrumb { padding: 0.5rem 1rem; }
    }

    @media (max-width: 576px) {
        .display-4 { font-size: 1.75rem !important; }
        .meta-item .fa-2x { font-size: 1.8rem; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ----- SMOOTH SCROLL FOR ANCHOR LINKS -----
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

        // ----- GALLERY THUMBNAIL CLICK (if any) -----
        // Fungsi sudah inline di onclick, tapi kita bisa tambahkan fallback
        // Tidak perlu kode tambahan, karena sudah pakai onclick langsung.
    });
</script>
@endpush
