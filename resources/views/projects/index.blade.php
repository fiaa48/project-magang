@extends('layouts.app')

@section('title', 'Layanan Profesional | PT Mitra Nusa Konsulindo')
@section('description', 'Layanan konsultansi konstruksi dan non-konstruksi yang komprehensif, didukung sertifikasi resmi dan tenaga ahli berpengalaman.')

@section('content')
    <!-- HERO SECTION – PREMIUM, SAME STYLE AS HOME, WITH UNIQUE TOUCH -->
    <section class="services-hero position-relative overflow-hidden">
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
                            <i class="fas fa-cogs me-2"></i>LAYANAN PROFESIONAL
                        </span>
                    </div>

                    <!-- Main Heading with Gradient (same as home) -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Layanan <span class="text-gradient-brown">Kami</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Solusi Terintegrasi untuk
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Konstruksi & Non-Konstruksi
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Didukung oleh tenaga ahli bersertifikasi dan pengalaman luas di berbagai sektor.
                        Komitmen kami adalah kesempurnaan dan kepuasan klien.
                    </p>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator (optional, like home) -->
        <div class="scroll-indicator">
            <a href="#services-grid" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- SERVICES GRID – PREMIUM CARDS WITH GLASSMORPHISM & HOVER EFFECTS -->
    <section id="services-grid" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row g-5">
                @foreach($services as $index => $service)
                <div class="col-lg-6 col-xl-4 animate-on-scroll" style="animation-delay: {{ $index * 0.1 }}s;">
                    <div class="service-card h-100">
                        <div class="service-card-inner">
                            <!-- Icon with gradient background and floating animation -->
                            <div class="service-icon-wrapper mb-4">
                                <div class="icon-glow"></div>
                                <i class="{{ $service['icon'] }} fa-3x text-brown-dark"></i>
                            </div>

                            <!-- Title -->
                            <h3 class="fw-bold text-brown-dark mb-3">{{ $service['title'] }}</h3>

                            <!-- Description -->
                            <p class="text-brown-medium mb-4">{{ $service['description'] }}</p>

                            <!-- Sub-Layanan List with checkmark -->
                            <div class="service-sub-list mb-4">
                                <h6 class="fw-bold text-brown-dark mb-3">
                                    <i class="fas fa-check-circle me-2" style="color: var(--cream-gold);"></i>Sub‑Layanan
                                </h6>
                                <ul class="list-unstyled">
                                    @foreach(array_slice($service['sub_services'], 0, 5) as $sub)
                                    <li class="d-flex mb-2">
                                        <i class="fas fa-chevron-right text-cream-gold me-2 mt-1 small"></i>
                                        <span class="text-brown-medium">{{ $sub }}</span>
                                    </li>
                                    @endforeach
                                    @if(count($service['sub_services']) > 5)
                                    <li class="text-brown-dark small mt-2 fw-semibold">
                                        + {{ count($service['sub_services']) - 5 }} layanan lainnya
                                    </li>
                                    @endif
                                </ul>
                            </div>

                            <!-- Certifications Badges -->
                            <div class="service-footer border-top pt-4">
                                <div class="d-flex flex-wrap gap-2 mb-4">
                                    @foreach(array_slice($service['certifications'], 0, 4) as $cert)
                                    <span class="badge bg-brown-light-subtle text-brown-dark px-3 py-2 rounded-pill">
                                        {{ $cert }}
                                    </span>
                                    @endforeach
                                </div>

                                <!-- CTA Button with animated arrow -->
                                <a href="{{ route('contact') }}?layanan={{ urlencode($service['title']) }}"
                                   class="btn btn-outline-brown-dark w-100 rounded-pill btn-service">
                                    <span>Konsultasi Gratis</span>
                                    <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Premium decorative corner -->
                        <div class="card-corner"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CERTIFICATIONS STRIP – PREMIUM WITH GLASS EFFECT -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center text-lg-start mb-4 mb-lg-0">
                    <div class="cert-header animate-fade-in-left">
                        <span class="badge bg-brown-dark text-white rounded-pill px-3 py-1 mb-3">
                            <i class="fas fa-certificate me-2"></i>Akreditasi
                        </span>
                        <h3 class="display-6 fw-bold text-brown-dark mb-2">Sertifikasi Resmi</h3>
                        <p class="lead fs-6 text-brown-medium mb-0">
                            Diakui oleh lembaga nasional dan internasional
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-4 align-items-center">
                        @foreach(['inkindo', 'sbu', 'iso-9001', 'iso-14001', 'iso-45001', 'iso-37001'] as $cert)
                        <div class="cert-logo-wrapper animate-fade-in-right" style="animation-delay: {{ $loop->index * 0.1 }}s;">
                            <img src="{{ asset('images/certificates/' . $cert . '.png') }}"
                                 alt="{{ strtoupper($cert) }}"
                                 class="cert-logo img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION – SAME ELEGANT STYLE AS HOME (cta-elegant) -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Siap Memulai Proyek Anda?</h2>
                        <p class="lead mb-0">
                            Konsultasikan kebutuhan proyek konstruksi atau non-konstruksi Anda dengan tim ahli kami.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-brown btn-lg px-5 rounded-pill">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
                        </a>
                        <a href="{{ route('portofolio') }}" class="btn btn-outline-brown-dark btn-lg px-4 rounded-pill ms-2">
                            <i class="fas fa-folder-open me-2"></i>Portofolio
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

    /* ----- Hero Section (matching home) ----- */
    .services-hero {
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

    /* ----- Typewriter Effect (same as home) ----- */
    .typewriter-wrapper {
        display: inline-block;
        position: relative;
    }

    .typewriter-text {
        position: relative;
        display: inline-block;
        color: var(--brown-dark) !important; /* override for contrast */
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

    /* ----- Service Cards – Premium Glassmorphism ----- */
    .service-card {
        background: white;
        border-radius: 2rem;
        border: 1px solid rgba(93, 64, 55, 0.08);
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
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

    .service-card:hover::before {
        opacity: 1;
    }

    .service-card:hover {
        transform: translateY(-10px);
        border-color: rgba(212, 175, 55, 0.3);
        box-shadow: 0 30px 50px rgba(93,64,55,0.08);
    }

    .service-card-inner {
        padding: 2rem;
        position: relative;
        z-index: 2;
        background: white;
        border-radius: 2rem;
    }

    /* Icon with glow effect */
    .service-icon-wrapper {
        width: 90px;
        height: 90px;
        background: rgba(93,64,55,0.03);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        position: relative;
        transition: all 0.3s;
    }

    .service-card:hover .service-icon-wrapper {
        background: rgba(212,175,55,0.1);
        transform: scale(1.05);
    }

    .icon-glow {
        position: absolute;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: radial-gradient(circle at 30% 30%, rgba(212,175,55,0.2), transparent 70%);
        opacity: 0;
        transition: opacity 0.3s;
    }

    .service-card:hover .icon-glow {
        opacity: 1;
    }

    .service-icon-wrapper i {
        transition: transform 0.3s, color 0.3s;
    }

    .service-card:hover .service-icon-wrapper i {
        transform: scale(1.1);
        color: var(--brown-dark);
    }

    /* Sub-layanan list */
    .service-sub-list ul li i {
        color: var(--cream-gold);
    }

    /* Certifications badges */
    .badge.bg-brown-light-subtle {
        background-color: rgba(161,136,127,0.08) !important;
        color: var(--brown-dark);
        font-weight: 500;
        border: 1px solid rgba(93,64,55,0.05);
        transition: all 0.2s;
    }

    .badge.bg-brown-light-subtle:hover {
        background-color: var(--brown-dark) !important;
        color: white !important;
    }

    /* Button with premium animation */
    .btn-service {
        position: relative;
        overflow: hidden;
        z-index: 1;
    }

    .btn-service::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
        z-index: -1;
    }

    .btn-service:hover::before {
        left: 100%;
    }

    /* Premium corner decoration */
    .card-corner {
        position: absolute;
        top: 0;
        right: 0;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%);
        border-radius: 0 2rem 0 0;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .service-card:hover .card-corner {
        opacity: 1;
    }

    /* ----- Certification Strip – Premium Glassmorphism ----- */
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

    .cert-header .badge {
        background-color: var(--brown-dark) !important;
    }

    .cert-logo-wrapper {
        background: white;
        padding: 1rem 1.5rem;
        border-radius: 1rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
        border: 1px solid rgba(93,64,55,0.05);
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 70px;
        width: auto;
    }

    .cert-logo-wrapper:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(93,64,55,0.05);
        border-color: rgba(212,175,55,0.3);
    }

    .cert-logo {
        filter: grayscale(100%);
        opacity: 0.7;
        transition: all 0.3s;
        max-height: 40px;
    }

    .cert-logo-wrapper:hover .cert-logo {
        filter: grayscale(0);
        opacity: 1;
    }

    /* ----- CTA Section – same as home (cta-elegant) ----- */
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

    .btn-outline-brown-dark {
        border: 2px solid var(--brown-dark);
        color: var(--brown-dark);
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-outline-brown-dark:hover {
        background: var(--brown-dark);
        border-color: var(--brown-dark);
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

    .btn-outline-cream {
        border: 2px solid white;
        color: white;
    }

    .btn-outline-cream:hover {
        background: white;
        color: var(--brown-dark);
    }

    /* ----- Animations (same as home) ----- */
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

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.8s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-fade-in-left {
        animation: fadeInLeft 0.8s ease-out forwards;
    }

    .animate-fade-in-right {
        animation: fadeInRight 0.8s ease-out forwards;
    }

    .animate-on-scroll {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }

    /* ----- Background decoration for services section ----- */
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

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .services-hero { padding: 5rem 0 3rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .service-card-inner { padding: 1.5rem; }
        .cert-logo-wrapper { height: 60px; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
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

        document.querySelectorAll('.service-card, .cert-logo-wrapper').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endpush
