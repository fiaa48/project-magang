@extends('user.layouts.app')

@section('title', 'Kontak Kami | PT Mitra Nusa Konsulindo')
@section('description', 'Hubungi PT Mitra Nusa Konsulindo untuk konsultasi, kerja sama proyek, dan informasi lebih lanjut. Kami siap membantu Anda.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="contact-hero position-relative overflow-hidden">
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
                            <i class="fas fa-headset me-2"></i>HUBUNGI KAMI
                        </span>
                    </div>

                    <!-- Main Heading with Gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Konsultasi & <span class="text-gradient-brown">Kerja Sama</span>
                    </h1>

                    <!-- Subtitle with Typewriter Effect (like home) -->
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">
                            Siap membantu mewujudkan proyek Anda
                        </h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Profesional · Terpercaya · Berkualitas
                            </span>
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Tim ahli kami siap merespon setiap pertanyaan dan kebutuhan Anda.
                        Silakan hubungi melalui formulir di bawah atau langsung melalui kontak yang tersedia.
                    </p>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#contact-section" class="scroll-down">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- CONTACT SECTION – 3D CARDS WITH GLASSMORPHISM -->
    <section id="contact-section" class="py-6 bg-white position-relative">
        <!-- Subtle background decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row g-5">
                <!-- LEFT COLUMN – CONTACT INFORMATION & COMPANY DETAILS (3D CARD) -->
                <div class="col-lg-5">
                    <div class="contact-info-card-3d h-100 animate-on-scroll">
                        <div class="contact-info-inner">
                            <div class="contact-info-header mb-4">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-3">
                                    <i class="fas fa-building me-2"></i>INFORMASI PERUSAHAAN
                                </span>
                                <h3 class="display-6 fw-bold text-brown-dark mb-3">PT Mitra Nusa Konsulindo</h3>
                                <p class="text-brown-medium">
                                    Terdaftar dan berpengalaman sejak 2020, melayani berbagai proyek konsultansi konstruksi dan non-konstruksi.
                                </p>
                            </div>

                            <!-- Company Details List – sesuai PDF -->
                            <div class="company-details mb-5">
                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-map-marker-alt text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Domisili & Kantor</h6>
                                        <p class="text-brown-medium mb-0">
                                            Gedung Graha Mulia Sejahtera<br>
                                            Jl. Terusan Jakarta No. 175A<br>
                                            Antapani – Bandung 40291<br>
                                            Jawa Barat, Indonesia
                                        </p>
                                    </div>
                                </div>

                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-phone-alt text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Telepon</h6>
                                        <p class="text-brown-medium mb-0">
                                            <a href="tel:+622220502071" class="contact-link">(022) 20502071</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-envelope text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Email</h6>
                                        <p class="text-brown-medium mb-0">
                                            <a href="mailto:mitranusa.kons@gmail.com" class="contact-link">mitranusa.kons@gmail.com</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-globe text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Website</h6>
                                        <p class="text-brown-medium mb-0">
                                            <a href="{{ url('/') }}" class="contact-link">{{ url('/') }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Legal & Certification Information – sesuai PDF -->
                            <div class="legal-info">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="legal-badge">
                                            <span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2">
                                                <i class="fas fa-certificate me-1"></i> NIB
                                            </span>
                                            <p class="text-brown-medium small mb-0">0257011100093</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="legal-badge">
                                            <span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2">
                                                <i class="fas fa-id-card me-1"></i> NPWP
                                            </span>
                                            <p class="text-brown-medium small mb-0">96.431.796.0-429.000</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="legal-badge">
                                            <span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2">
                                                <i class="fas fa-users me-1"></i> INKINDO
                                            </span>
                                            <p class="text-brown-medium small mb-0">17744/P/1304.JB</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="legal-badge">
                                            <span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2">
                                                <i class="fas fa-building me-1"></i> KADIN
                                            </span>
                                            <p class="text-brown-medium small mb-0">20112-2026270629</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Social Media (optional, bisa ditambahkan) -->
                            <div class="social-media mt-5 pt-4 border-top border-brown-light-subtle">
                                <h6 class="fw-bold text-brown-dark mb-3">Ikuti Kami</h6>
                                <div class="d-flex gap-3">
                                    <a href="#" class="social-icon-3d bg-brown-light-subtle rounded-circle p-3">
                                        <i class="fab fa-linkedin-in text-brown-dark"></i>
                                    </a>
                                    <a href="#" class="social-icon-3d bg-brown-light-subtle rounded-circle p-3">
                                        <i class="fab fa-instagram text-brown-dark"></i>
                                    </a>
                                    <a href="#" class="social-icon-3d bg-brown-light-subtle rounded-circle p-3">
                                        <i class="fab fa-facebook-f text-brown-dark"></i>
                                    </a>
                                    <a href="#" class="social-icon-3d bg-brown-light-subtle rounded-circle p-3">
                                        <i class="fab fa-twitter text-brown-dark"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- 3D decorative corners -->
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN – CONTACT FORM & MAP (3D CARDS) -->
                <div class="col-lg-7">
                    <div class="row g-4">
<!-- Contact Form Card (3D) -->
<div class="col-12">
    <div class="contact-form-card-3d animate-on-scroll">
        <div class="contact-form-inner">
            <div class="form-header mb-4">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-paper-plane me-2"></i>KIRIM PESAN
                </span>
                <h3 class="h3 fw-bold text-brown-dark mb-2">Ada pertanyaan?</h3>
                <p class="text-brown-medium">
                    Isi formulir di bawah ini, tim kami akan segera merespon Anda dalam 1x24 jam.
                </p>
            </div>

            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                @csrf
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                            <label for="name" class="text-brown-medium">Nama Lengkap <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            <label for="email" class="text-brown-medium">Email <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="No. Telepon (opsional)">
                            <label for="phone" class="text-brown-medium">No. Telepon</label>
                        </div>
                    </div>

                    {{-- PERBAIKAN: Field Perihal dengan lebar penuh dan CSS khusus --}}
                    <div class="col-12 mb-3">
                        <div class="form-floating">
                            <select class="form-select" id="subject" name="subject">
                                <option value="Konsultasi" selected>Konsultasi Proyek</option>
                                <option value="Kerja Sama">Kerja Sama</option>
                                <option value="Informasi">Informasi Layanan</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <label for="subject" class="text-brown-medium">Perihal</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="message" name="message" style="height: 150px" placeholder="Pesan" required></textarea>
                            <label for="message" class="text-brown-medium">Pesan <span class="text-danger">*</span></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-brown-3d btn-lg rounded-pill px-5 py-3 w-100">
                            <span>Kirim Pesan</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                            <span class="btn-shine"></span>
                        </button>
                    </div>
                </div>
            </form>

            @if(session('success'))
                <div class="alert alert-success mt-4 mb-0 rounded-pill">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                </div>
            @endif

            <!-- 3D decorative corners -->
            <div class="card-corner corner-1"></div>
            <div class="card-corner corner-2"></div>
        </div>
    </div>
</div>

                        <!-- Map Card (3D) -->
                        <div class="col-12">
                            <div class="map-card-3d animate-on-scroll">
                                <div class="map-card-inner">
                                    <div class="map-header d-flex align-items-center mb-4">
                                        <div class="map-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                            <i class="fas fa-map-marked-alt text-brown-dark"></i>
                                        </div>
                                        <div>
                                            <h4 class="h5 fw-bold text-brown-dark mb-1">Lokasi Kantor</h4>
                                            <p class="text-brown-medium small mb-0">
                                                Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani
                                            </p>
                                        </div>
                                    </div>

                                    <div class="map-wrapper rounded-4 overflow-hidden mb-4">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.626254123456!2d107.659876!3d-6.912345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7a8e7a8e7a9%3A0x123456789abcdef!2sGraha%20Mulia%20Sejahtera!5e0!3m2!1sen!2sid!4v1234567890123!5m2!1sen!2sid"
                                            width="100%"
                                            height="280"
                                            style="border:0;"
                                            allowfullscreen=""
                                            loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"
                                            title="Peta Lokasi PT Mitra Nusa Konsulindo">
                                        </iframe>
                                    </div>

                                    <div class="map-footer d-flex justify-content-between align-items-center">
                                        <span class="text-brown-medium small">
                                            <i class="fas fa-check-circle text-success me-1"></i> Akurat & Siap dikunjungi
                                        </span>
                                        <a href="https://www.google.com/maps/dir/?api=1&destination=-6.912345,107.659876"
                                           target="_blank"
                                           rel="noopener noreferrer"
                                           class="btn btn-outline-brown-3d rounded-pill px-4 py-2">
                                            <i class="fas fa-location-arrow me-2"></i>Mulai Navigasi
                                        </a>
                                    </div>

                                    <!-- 3D decorative corners -->
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

    <!-- BUSINESS HOURS & QUICK CONTACT – 3D PREMIUM CARD (IKON JAM DIHAPUS) -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="quick-contact-card-3d animate-on-scroll">
                        <div class="quick-contact-inner">
                            <div class="row g-4 align-items-start">
                                <!-- JAM OPERASIONAL (IKON DIHAPUS) -->
                                <div class="col-lg-4 text-center text-lg-start pt-0">
                                    {{-- Ikon jam dihapus sesuai permintaan --}}
                                    <h4 class="fw-bold text-brown-dark mb-2 mt-0">Jam Operasional</h4>
                                    <p class="text-brown-medium mb-1">Senin – Jumat</p>
                                    <p class="text-brown-dark fw-semibold mb-2">08.00 – 17.00 WIB</p>
                                    <p class="text-brown-medium mb-1">Sabtu – Minggu</p>
                                    <p class="text-brown-dark fw-semibold mb-0">Tutup (kecuali janjian)</p>
                                </div>

                                <!-- KOLOM KANAN: QUICK CONTACT ITEMS -->
                                <div class="col-lg-8">
                                    <div class="row g-3">
                                        <!-- Telepon -->
                                        <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                                    <i class="fas fa-phone-alt text-brown-dark"></i>
                                                </div>
                                                <div class="quick-detail">
                                                    <span class="text-brown-medium small">Telepon</span>
                                                    <a href="tel:+622220502071" class="quick-link d-block fw-bold text-brown-dark">(022) 20502071</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                                    <i class="fas fa-envelope text-brown-dark"></i>
                                                </div>
                                                <div class="quick-detail">
                                                    <span class="text-brown-medium small">Email</span>
                                                    <a href="mailto:mitranusa.kons@gmail.com" class="quick-link d-block fw-bold text-brown-dark">mitranusa.kons</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Alamat -->
                                        <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                                    <i class="fas fa-map-marker-alt text-brown-dark"></i>
                                                </div>
                                                <div class="quick-detail">
                                                    <span class="text-brown-medium small">Alamat</span>
                                                    <span class="d-block fw-bold text-brown-dark">Bandung, Jawa Barat</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- WhatsApp – PREMIUM ICON -->
                                        <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-whatsapp rounded-circle p-3 me-3">
                                                    <i class="fab fa-whatsapp text-white"></i>
                                                </div>
                                                <div class="quick-detail">
                                                    <span class="text-brown-medium small">WhatsApp</span>
                                                    <a href="https://wa.me/6281222052071" class="quick-link d-block fw-bold text-brown-dark">+62 812-2205-2071</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

    <!-- CTA SECTION – BUTTONS DENGAN JARAK IDEAL -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Butuh Bantuan Segera?</h2>
                        <p class="lead mb-0">
                            Tim kami siap memberikan respon cepat melalui telepon atau WhatsApp.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="tel:+622220502071" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fas fa-phone-alt me-2"></i>Telepon
                                <span class="btn-shine"></span>
                            </a>
                            <a href="https://wa.me/6281222052071" class="btn btn-outline-brown-3d btn-lg px-5 py-3 rounded-pill">
                                <i class="fab fa-whatsapp me-2"></i>WhatsApp
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
    .contact-hero {
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

    /* ===== 3D CONTACT INFO CARD ===== */
    .contact-info-card-3d {
        perspective: 1000px;
        height: 100%;
    }

    .contact-info-inner {
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

    .contact-info-card-3d:hover .contact-info-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    .detail-icon {
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .contact-info-card-3d:hover .detail-icon {
        background-color: rgba(212,175,55,0.15) !important;
        transform: scale(1.05);
    }

    .contact-link {
        color: var(--brown-medium);
        text-decoration: none;
        transition: color 0.3s;
    }

    .contact-link:hover {
        color: var(--brown-dark);
        text-decoration: underline;
    }

    .legal-badge {
        background: rgba(161,136,127,0.05);
        border-radius: 1rem;
        padding: 0.8rem 1rem;
        text-align: center;
        transition: all 0.3s;
    }

    .legal-badge:hover {
        background: rgba(212,175,55,0.1);
        transform: translateY(-3px);
    }

    .social-icon-3d {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
        border: 1px solid transparent;
    }

    .social-icon-3d:hover {
        background-color: var(--brown-dark) !important;
        transform: translateY(-5px) scale(1.1);
        box-shadow: 0 10px 20px rgba(93,64,55,0.2);
    }

    .social-icon-3d:hover i {
        color: white !important;
    }

    /* ===== 3D CONTACT FORM CARD ===== */
    .contact-form-card-3d {
        perspective: 1000px;
    }

    .contact-form-inner {
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

    .contact-form-card-3d:hover .contact-form-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    /* Form Floating Labels */
.form-floating > .form-select {
    height: auto !important;
    min-height: calc(3.75rem + 2px) !important; /* Tinggi lebih lega */
    padding-top: 1.2rem !important;
    padding-bottom: 0.6rem !important;
    font-size: 1rem !important;
    line-height: 1.5 !important;
}

    .form-floating > .form-control:focus,
    .form-floating > .form-select:focus {
        border-color: var(--brown-dark);
        box-shadow: 0 0 0 0.25rem rgba(93,64,55,0.1);
    }

    .form-floating > label {
        padding: 1rem 1rem;
        color: var(--brown-medium);
    }

    /* ✅ Perbaikan: agar teks dalam select tidak terpotong */
.form-select {
    white-space: normal !important;
    word-wrap: break-word !important;
    overflow: visible !important;
}

.form-select option {
    padding: 0.5rem 1rem;
    white-space: normal;
}

    /* ===== 3D MAP CARD ===== */
    .map-card-3d {
        perspective: 1000px;
    }

    .map-card-inner {
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
    }

    .map-card-3d:hover .map-card-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .map-wrapper {
        border-radius: 1.5rem !important;
        overflow: hidden;
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.3s;
    }

    .map-card-3d:hover .map-wrapper {
        border-color: var(--cream-gold);
    }

    .map-wrapper iframe {
        display: block;
        transition: transform 0.3s;
    }

    .map-card-3d:hover .map-wrapper iframe {
        transform: scale(1.02);
    }

    /* ===== 3D QUICK CONTACT CARD ===== */
    .quick-contact-card-3d {
        perspective: 1000px;
    }

    .quick-contact-inner {
        background: white;
        border-radius: 2rem;
        padding: 2.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.05);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
    }

    .quick-contact-card-3d:hover .quick-contact-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-8px);
        box-shadow: 0 35px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }

    .quick-contact-item-3d {
        transition: all 0.3s ease;
        border: 1px solid rgba(93,64,55,0.05);
        border-radius: 1rem;
    }

    .quick-contact-item-3d:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 15px 25px rgba(93,64,55,0.1);
        border-color: var(--cream-gold) !important;
    }

    .quick-contact-item-3d:hover .quick-icon {
        transform: scale(1.1);
        background-color: rgba(212,175,55,0.2) !important;
    }

    .quick-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
    }

    .bg-whatsapp {
        background: linear-gradient(145deg, #25D366, #20B858) !important;
    }

    .quick-detail {
        line-height: 1.3;
    }

    .quick-link {
        text-decoration: none;
        transition: color 0.3s;
    }

    .quick-link:hover {
        color: var(--cream-gold) !important;
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

    /* ----- Responsive ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .contact-hero { padding: 5rem 0 3rem; }
        .contact-info-inner { padding: 2rem; }
        .contact-form-inner { padding: 2rem; }
        .map-card-inner { padding: 1.5rem; }
        .quick-contact-inner { padding: 2rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
        .detail-icon { width: 45px; height: 45px; }
        .legal-badge { padding: 0.6rem; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .badge { font-size: 0.8rem !important; }
        .contact-info-inner { padding: 1.5rem; }
        .contact-form-inner { padding: 1.5rem; }
        .quick-contact-inner { padding: 1.5rem; }
        .quick-contact-item-3d { padding: 0.75rem !important; }
        .quick-icon { width: 45px; height: 45px; }
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

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // ----- 3D HOVER EFFECT ENHANCEMENT -----
        const cards = document.querySelectorAll('.contact-info-inner, .contact-form-inner, .map-card-inner, .quick-contact-inner');
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
