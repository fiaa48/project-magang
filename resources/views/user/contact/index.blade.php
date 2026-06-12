@extends('user.layouts.app')

@section('title', 'Kontak Kami | PT Mitra Nusa Konsulindo')
@section('description', 'Hubungi PT Mitra Nusa Konsulindo untuk konsultasi, kerja sama proyek, dan informasi lebih lanjut. Kami siap membantu Anda.')

@section('content')
    @php
        // Ambil data profil perusahaan
        $profile = App\Models\CompanyProfile::first();
        // Ambil data admin (yang punya whatsapp, prioritas user pertama atau id=1)
        $admin = App\Models\User::whereNotNull('whatsapp')->first();
        if (!$admin) {
            $admin = App\Models\User::find(1);
        }
        $whatsappNumber = $admin->whatsapp ?? '6281222052071'; // fallback
        // Format nomor untuk link WhatsApp (hapus karakter non-digit)
        $cleanWhatsapp = preg_replace('/[^0-9]/', '', $whatsappNumber);
        if (preg_match('/^0/', $cleanWhatsapp)) {
            $cleanWhatsapp = '62' . substr($cleanWhatsapp, 1);
        }
        if (!preg_match('/^62/', $cleanWhatsapp)) {
            $cleanWhatsapp = '62' . $cleanWhatsapp;
        }
    @endphp

    <!-- HERO SECTION -->
    <section class="contact-hero position-relative overflow-hidden">
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
                            <i class="fas fa-headset me-2"></i>HUBUNGI KAMI
                        </span>
                    </div>
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Konsultasi & <span class="text-gradient-brown">Kerja Sama</span>
                    </h1>
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">Siap membantu mewujudkan proyek Anda</h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                Profesional · Terpercaya · Berkualitas
                            </span>
                        </div>
                    </div>
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.3s;">
                        Tim ahli kami siap merespon setiap pertanyaan dan kebutuhan Anda.
                        Silakan hubungi melalui formulir di bawah atau langsung melalui kontak yang tersedia.
                    </p>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <a href="#contact-section" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- CONTACT SECTION – 3D CARDS -->
    <section id="contact-section" class="py-6 bg-white position-relative">
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>
        <div class="container position-relative z-2">
            <div class="row g-5">
                <!-- LEFT COLUMN – CONTACT INFO (DATA DINAMIS) -->
                <div class="col-lg-5">
                    <div class="contact-info-card-3d h-100 animate-on-scroll">
                        <div class="contact-info-inner">
                            <div class="contact-info-header mb-4">
                                <span class="badge bg-brown-light-subtle text-brown-dark rounded-pill px-4 py-2 mb-3">
                                    <i class="fas fa-building me-2"></i>INFORMASI PERUSAHAAN
                                </span>
                                <h3 class="display-6 fw-bold text-brown-dark mb-3">{{ $profile->name ?? 'PT Mitra Nusa Konsulindo' }}</h3>
                                <p class="text-brown-medium">Terdaftar dan berpengalaman sejak {{ $profile->established_year ?? '2020' }}, melayani berbagai proyek konsultansi konstruksi dan non-konstruksi.</p>
                            </div>

                            <div class="company-details mb-5">
                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-map-marker-alt text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Domisili & Kantor</h6>
                                        <div class="text-brown-medium mb-0">
                                            <div class="mb-3"><strong>Kantor Utama</strong><br>{!! nl2br(e($profile->address_main ?? 'Jl. Tulip VII No.8, Rancabolang,<br>Kec. Gedebage, Kota Bandung,<br>Jawa Barat 40295')) !!}</div>
                                            @if($profile->address_branch)
                                            <div><strong>Kantor Cabang</strong><br>{!! nl2br(e($profile->address_branch)) !!}</div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-phone-alt text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Telepon</h6>
                                        <p class="text-brown-medium mb-0"><a href="tel:{{ $profile->telepon_pt ?? '02220502071' }}" class="contact-link">{{ $profile->telepon_pt ?? '(022) 20502071' }}</a></p>
                                    </div>
                                </div>
                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-envelope text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Email</h6>
                                        <p class="text-brown-medium mb-0"><a href="mailto:{{ $profile->email_pt ?? 'mitranusa.kons@gmail.com' }}" class="contact-link">{{ $profile->email_pt ?? 'mitranusa.kons@gmail.com' }}</a></p>
                                    </div>
                                </div>
                                @if($profile->website_pt)
                                <div class="detail-item d-flex align-items-start mb-4">
                                    <div class="detail-icon bg-brown-light-subtle rounded-circle p-3 me-3">
                                        <i class="fas fa-globe text-brown-dark"></i>
                                    </div>
                                    <div class="detail-text">
                                        <h6 class="fw-bold text-brown-dark mb-1">Website</h6>
                                        <p class="text-brown-medium mb-0"><a href="https://{{ $profile->website_pt }}" class="contact-link" target="_blank">{{ $profile->website_pt }}</a></p>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="legal-info">
                                <div class="row g-3">
                                    <div class="col-md-6"><div class="legal-badge"><span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2"><i class="fas fa-certificate me-1"></i> NIB</span><p class="text-brown-medium small mb-0">{{ $profile->nib ?? '0257011100093' }}</p></div></div>
                                    <div class="col-md-6"><div class="legal-badge"><span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2"><i class="fas fa-id-card me-1"></i> NPWP</span><p class="text-brown-medium small mb-0">{{ $profile->npwp ?? '96.431.796.0-429.000' }}</p></div></div>
                                    <div class="col-md-6"><div class="legal-badge"><span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2"><i class="fas fa-users me-1"></i> INKINDO</span><p class="text-brown-medium small mb-0">{{ $profile->inkindo ?? '17744/P/1304.JB' }}</p></div></div>
                                    <div class="col-md-6"><div class="legal-badge"><span class="badge bg-brown-dark text-white rounded-pill px-3 py-2 mb-2"><i class="fas fa-building me-1"></i> KADIN</span><p class="text-brown-medium small mb-0">{{ $profile->kadin ?? '20112-2026270629' }}</p></div></div>
                                </div>
                            </div>

                            <div class="card-corner corner-1"></div><div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN – CONTACT FORM & MAP -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <!-- Contact Form Card -->
                        <div class="col-12">
                            <div class="contact-form-card-3d animate-on-scroll">
                                <div class="contact-form-inner">
                                    <div class="form-header mb-4">
                                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3"><i class="fas fa-paper-plane me-2"></i>KIRIM PESAN</span>
                                        <h3 class="h3 fw-bold text-brown-dark mb-2">Ada pertanyaan?</h3>
                                        <p class="text-brown-medium">Isi formulir di bawah ini, tim kami akan segera merespon Anda dalam 1x24 jam.</p>
                                    </div>
                                    <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-md-6"><div class="form-floating"><input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required><label for="name" class="text-brown-medium">Nama Lengkap <span class="text-danger">*</span></label></div></div>
                                            <div class="col-md-6"><div class="form-floating"><input type="email" class="form-control" id="email" name="email" placeholder="Email" required><label for="email" class="text-brown-medium">Email <span class="text-danger">*</span></label></div></div>
                                            <div class="col-md-6"><div class="form-floating"><input type="text" class="form-control" id="phone" name="phone" placeholder="No. Telepon (opsional)"><label for="phone" class="text-brown-medium">No. Telepon</label></div></div>
                                            <div class="col-12 mb-3"><div class="form-floating"><select class="form-select" id="subject" name="subject"><option value="Konsultasi" selected>Konsultasi Proyek</option><option value="Kerja Sama">Kerja Sama</option><option value="Informasi">Informasi Layanan</option><option value="Lainnya">Lainnya</option></select><label for="subject" class="text-brown-medium">Perihal</label></div></div>
                                            <div class="col-12"><div class="form-floating"><textarea class="form-control" id="message" name="message" style="height: 150px" placeholder="Pesan" required></textarea><label for="message" class="text-brown-medium">Pesan <span class="text-danger">*</span></label></div></div>
                                            <div class="col-12"><button type="submit" class="btn btn-brown-3d btn-lg rounded-pill px-5 py-3 w-100"><span>Kirim Pesan</span><i class="fas fa-arrow-right ms-2"></i><span class="btn-shine"></span></button></div>
                                        </div>
                                    </form>
                                    @if(session('success'))<div class="alert alert-success mt-4 mb-0 rounded-pill"><i class="fas fa-check-circle me-2"></i>{{ session('success') }}</div>@endif
                                    <div class="card-corner corner-1"></div><div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Map Card (Alamat dinamis) -->
                        <div class="col-12">
                            <div class="map-card-3d animate-on-scroll">
                                <div class="map-card-inner">
                                    <div class="map-header d-flex align-items-center mb-4">
                                        <div class="map-icon bg-brown-light-subtle rounded-circle p-3 me-3"><i class="fas fa-map-marked-alt text-brown-dark"></i></div>
                                        <div><h4 class="h5 fw-bold text-brown-dark mb-1">Lokasi Kantor</h4><p class="text-brown-medium small mb-0">Pilih lokasi kantor terdekat untuk melihat peta dan mulai navigasi.</p></div>
                                    </div>
                                    <div class="row g-4">
                                        @php
                                            $addressMain = $profile->address_main ?? 'Jl. Tulip VII No.8, Rancabolang, Kec. Gedebage, Kota Bandung, Jawa Barat 40295';
                                            $addressBranch = $profile->address_branch ?? 'Jl. Terusan Jakarta No.175A, Antapani Kulon, Kec. Antapani, Kota Bandung, Jawa Barat 40291';
                                        @endphp
                                        <div class="col-md-6">
                                            <div class="office-map-item h-100">
                                                <div class="office-map-header mb-3"><span class="office-map-badge">Kantor Utama</span><h5 class="fw-bold text-brown-dark mb-2">{{ explode(',', $addressMain)[0] ?? 'Jl. Tulip VII No.8' }}</h5><p class="text-brown-medium small mb-0">{{ $addressMain }}</p></div>
                                                <div class="map-wrapper rounded-4 overflow-hidden mb-3"><iframe src="https://www.google.com/maps?q={{ urlencode($addressMain) }}&output=embed" width="100%" height="260" style="border:0;" allowfullscreen loading="lazy" title="Peta Kantor Utama"></iframe></div>
                                                <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode($addressMain) }}" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2 w-100"><i class="fas fa-location-arrow me-2"></i>Navigasi Kantor Utama</a>
                                            </div>
                                        </div>
                                        @if($profile->address_branch)
                                        <div class="col-md-6">
                                            <div class="office-map-item h-100">
                                                <div class="office-map-header mb-3"><span class="office-map-badge">Kantor Cabang</span><h5 class="fw-bold text-brown-dark mb-2">{{ explode(',', $addressBranch)[0] ?? 'Jl. Terusan Jakarta No.175A' }}</h5><p class="text-brown-medium small mb-0">{{ $addressBranch }}</p></div>
                                                <div class="map-wrapper rounded-4 overflow-hidden mb-3"><iframe src="https://www.google.com/maps?q={{ urlencode($addressBranch) }}&output=embed" width="100%" height="260" style="border:0;" allowfullscreen loading="lazy" title="Peta Kantor Cabang"></iframe></div>
                                                <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode($addressBranch) }}" target="_blank" class="btn btn-outline-brown-3d rounded-pill px-4 py-2 w-100"><i class="fas fa-location-arrow me-2"></i>Navigasi Kantor Cabang</a>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="map-footer mt-4"><span class="text-brown-medium small"><i class="fas fa-check-circle text-success me-1"></i> {{ $profile->address_branch ? 'Dua lokasi kantor siap dikunjungi' : 'Lokasi kantor utama siap dikunjungi' }}</span></div>
                                    <div class="card-corner corner-1"></div><div class="card-corner corner-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUSINESS HOURS & QUICK CONTACT (WhatsApp dari users) -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern"><div class="pattern-line"></div><div class="pattern-line"></div></div>
        <div class="container position-relative z-2">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="quick-contact-card-3d animate-on-scroll">
                        <div class="quick-contact-inner">
                            <div class="row g-4 align-items-start">
                                <div class="col-lg-4 text-center text-lg-start pt-0">
                                    <h4 class="fw-bold text-brown-dark mb-2 mt-0">Jam Operasional</h4>
                                    <p class="text-brown-medium mb-1">Senin – Jumat</p>
                                    <p class="text-brown-dark fw-semibold mb-2">08.00 – 17.00 WIB</p>
                                    <p class="text-brown-medium mb-1">Sabtu – Minggu</p>
                                    <p class="text-brown-dark fw-semibold mb-0">Tutup (kecuali janjian)</p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-brown-light-subtle rounded-circle p-3 me-3"><i class="fas fa-phone-alt text-brown-dark"></i></div>
                                                <div class="quick-detail"><span class="text-brown-medium small">Telepon</span><a href="tel:{{ $profile->telepon_pt ?? '02220502071' }}" class="quick-link d-block fw-bold text-brown-dark">{{ $profile->telepon_pt ?? '(022) 20502071' }}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-brown-light-subtle rounded-circle p-3 me-3"><i class="fas fa-envelope text-brown-dark"></i></div>
                                                <div class="quick-detail"><span class="text-brown-medium small">Email</span><a href="mailto:{{ $profile->email_pt ?? 'mitranusa.kons@gmail.com' }}" class="quick-link d-block fw-bold text-brown-dark">{{ explode('@', $profile->email_pt ?? 'mitranusa.kons')[0] ?? 'mitranusa.kons' }}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-brown-light-subtle rounded-circle p-3 me-3"><i class="fas fa-map-marker-alt text-brown-dark"></i></div>
                                                <div class="quick-detail"><span class="text-brown-medium small">Alamat</span><span class="d-block fw-bold text-brown-dark">Bandung, Jawa Barat</span></div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="quick-contact-item-3d d-flex align-items-center p-3 bg-white rounded-4">
                                                <div class="quick-icon bg-whatsapp rounded-circle p-3 me-3"><i class="fab fa-whatsapp text-white"></i></div>
                                                <div class="quick-detail"><span class="text-brown-medium small">WhatsApp</span><a href="https://wa.me/{{ $cleanWhatsapp }}" class="quick-link d-block fw-bold text-brown-dark" target="_blank">{{ $whatsappNumber }}</a></div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="card-corner corner-1"></div><div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION – HANYA TOMBOL WHATSAPP (TELEPON DIHAPUS) -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Butuh Bantuan Segera?</h2>
                        <p class="lead mb-0">Tim kami siap memberikan respon cepat melalui WhatsApp.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap justify-content-center justify-content-lg-end gap-3">
                            <a href="https://wa.me/{{ $cleanWhatsapp }}" class="btn btn-outline-brown-3d btn-lg px-5 py-3 rounded-pill" target="_blank">
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
<!-- Sama seperti style awal, tidak perlu diubah -->
<style>
    /* ===== INHERIT FULL STYLE ===== */
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

    /* Hero Section */
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
    .display-2 { font-weight: 800 !important; letter-spacing: -0.02em; line-height: 1.15; }
    .text-gradient-brown { background: linear-gradient(135deg, var(--cream-gold), var(--brown-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .company-badge { animation: fadeInDown 0.8s ease-out; }
    .badge.bg-brown-dark { background-color: rgba(93, 64, 55, 0.9) !important; border: 1px solid rgba(255,255,255,0.2); backdrop-filter: blur(10px); }
    .badge.bg-brown-light-subtle { background-color: rgba(161,136,127,0.1) !important; color: var(--brown-dark); }

    /* Typewriter */
    .typewriter-wrapper { display: inline-block; position: relative; }
    .typewriter-text { position: relative; display: inline-block; color: var(--brown-dark) !important; }
    .typewriter-text::after { content: ''; position: absolute; right: -8px; top: 50%; transform: translateY(-50%); width: 3px; height: 1.2em; background-color: var(--brown-dark); animation: blink 1s infinite; }
    @keyframes blink { 0%,100%{ opacity: 1; } 50%{ opacity: 0; } }

    /* Scroll Indicator */
    .scroll-indicator { position: absolute; bottom: 2rem; left: 0; right: 0; text-align: center; }
    .scroll-down { color: var(--brown-dark); font-size: 1.5rem; animation: bounce 2s infinite; display: inline-block; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; background: rgba(255,255,255,0.9); box-shadow: var(--shadow-sm); transition: all 0.3s; }
    .scroll-down:hover { background: white; transform: scale(1.1); }
    @keyframes bounce { 0%,20%,50%,80%,100%{ transform: translateY(0); } 40%{ transform: translateY(-10px); } 60%{ transform: translateY(-5px); } }

    /* 3D Contact Info Card */
    .contact-info-card-3d { perspective: 1000px; height: 100%; }
    .contact-info-inner { background: white; border-radius: 2rem; padding: 2.5rem; box-shadow: var(--shadow-3d); border: 1px solid rgba(93,64,55,0.1); transition: all 0.4s cubic-bezier(0.4,0,0.2,1); transform-style: preserve-3d; transform: rotateY(0deg) rotateX(1deg); position: relative; overflow: hidden; height: 100%; }
    .contact-info-card-3d:hover .contact-info-inner { transform: rotateY(-2deg) rotateX(1deg) translateY(-8px); box-shadow: 0 30px 60px rgba(93,64,55,0.25); }
    .detail-icon { width: 55px; height: 55px; display: flex; align-items: center; justify-content: center; transition: all 0.3s; }
    .contact-info-card-3d:hover .detail-icon { background-color: rgba(212,175,55,0.15) !important; transform: scale(1.05); }
    .contact-link { color: var(--brown-medium); text-decoration: none; transition: color 0.3s; }
    .contact-link:hover { color: var(--brown-dark); text-decoration: underline; }
    .legal-badge { background: rgba(161,136,127,0.05); border-radius: 1rem; padding: 0.8rem 1rem; text-align: center; transition: all 0.3s; }
    .legal-badge:hover { background: rgba(212,175,55,0.1); transform: translateY(-3px); }

    /* Contact Form Card */
    .contact-form-card-3d { perspective: 1000px; }
    .contact-form-inner { background: white; border-radius: 2rem; padding: 2.5rem; box-shadow: var(--shadow-3d); border: 1px solid rgba(93,64,55,0.1); transition: all 0.4s; transform-style: preserve-3d; transform: rotateY(0deg) rotateX(1deg); position: relative; overflow: hidden; }
    .contact-form-card-3d:hover .contact-form-inner { transform: rotateY(1deg) rotateX(1deg) translateY(-5px); box-shadow: 0 30px 60px rgba(93,64,55,0.2); border-color: var(--cream-gold); }
    .form-floating > .form-select { height: auto !important; min-height: calc(3.75rem + 2px) !important; padding-top: 1.2rem !important; padding-bottom: 0.6rem !important; font-size: 1rem !important; line-height: 1.5 !important; }
    .form-floating > .form-control:focus, .form-floating > .form-select:focus { border-color: var(--brown-dark); box-shadow: 0 0 0 0.25rem rgba(93,64,55,0.1); }
    .form-floating > label { padding: 1rem 1rem; color: var(--brown-medium); }
    .form-select { white-space: normal !important; word-wrap: break-word !important; overflow: visible !important; }
    .form-select option { padding: 0.5rem 1rem; white-space: normal; }

    /* Map Card */
    .map-card-3d { perspective: 1000px; }
    .map-card-inner { background: white; border-radius: 2rem; padding: 2rem; box-shadow: var(--shadow-3d); border: 1px solid rgba(93,64,55,0.1); transition: all 0.4s; transform-style: preserve-3d; transform: rotateY(0deg) rotateX(1deg); position: relative; overflow: hidden; }
    .map-card-3d:hover .map-card-inner { transform: rotateY(1deg) rotateX(1deg) translateY(-5px); box-shadow: 0 30px 60px rgba(93,64,55,0.2); border-color: var(--cream-gold); }
    .map-wrapper { border-radius: 1.5rem !important; overflow: hidden; border: 1px solid rgba(93,64,55,0.1); transition: all 0.3s; }
    .map-card-3d:hover .map-wrapper { border-color: var(--cream-gold); }
    .map-wrapper iframe { display: block; transition: transform 0.3s; }
    .map-card-3d:hover .map-wrapper iframe { transform: scale(1.02); }
    .office-map-item { background: linear-gradient(145deg, #ffffff, #f8fafc); border: 1px solid rgba(93,64,55,0.1); border-radius: 1.5rem; padding: 1rem; box-shadow: 0 10px 24px rgba(93,64,55,0.08); }
    .office-map-badge { display: inline-flex; width: fit-content; border-radius: 999px; background: rgba(93,64,55,0.08); color: var(--brown-dark); padding: 0.35rem 0.85rem; font-size: 0.75rem; font-weight: 700; letter-spacing: 0.04em; text-transform: uppercase; margin-bottom: 0.75rem; }

    /* Quick Contact Card */
    .quick-contact-card-3d { perspective: 1000px; }
    .quick-contact-inner { background: white; border-radius: 2rem; padding: 2.5rem; box-shadow: var(--shadow-3d); border: 1px solid rgba(93,64,55,0.05); transition: all 0.4s; transform-style: preserve-3d; transform: rotateY(0deg) rotateX(1deg); position: relative; overflow: hidden; }
    .quick-contact-card-3d:hover .quick-contact-inner { transform: rotateY(1deg) rotateX(1deg) translateY(-8px); box-shadow: 0 35px 60px rgba(93,64,55,0.2); border-color: var(--cream-gold); }
    .quick-contact-item-3d { transition: all 0.3s ease; border: 1px solid rgba(93,64,55,0.05); border-radius: 1rem; }
    .quick-contact-item-3d:hover { transform: translateY(-5px) scale(1.02); box-shadow: 0 15px 25px rgba(93,64,55,0.1); border-color: var(--cream-gold) !important; }
    .quick-contact-item-3d:hover .quick-icon { transform: scale(1.1); background-color: rgba(212,175,55,0.2) !important; }
    .quick-icon { width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; transition: all 0.3s; }
    .bg-whatsapp { background: linear-gradient(145deg, #25D366, #20B858) !important; }
    .quick-detail { line-height: 1.3; }
    .quick-link { text-decoration: none; transition: color 0.3s; }
    .quick-link:hover { color: var(--cream-gold) !important; }

    /* Buttons */
    .btn-brown-3d { background: linear-gradient(145deg, var(--brown-dark), #4A342E); border: none; color: white; font-weight: 600; transition: all 0.3s; position: relative; overflow: hidden; box-shadow: 0 8px 16px rgba(93,64,55,0.2); transform-style: preserve-3d; transform: translateY(0) rotateX(0deg); }
    .btn-brown-3d:hover { transform: translateY(-3px) rotateX(2deg); box-shadow: 0 15px 30px rgba(93,64,55,0.3); background: linear-gradient(145deg, #4A342E, var(--brown-dark)); }
    .btn-outline-brown-3d { border: 2px solid var(--brown-dark); color: var(--brown-dark); background: transparent; font-weight: 600; transition: all 0.3s; box-shadow: 0 4px 8px rgba(0,0,0,0.05); position: relative; overflow: hidden; }
    .btn-outline-brown-3d:hover { background: var(--brown-dark); color: white; transform: translateY(-3px); box-shadow: 0 10px 20px rgba(93,64,55,0.2); }

    /* Perbaikan warna ikon pada tombol: hitam normal, putih saat hover */
    .btn-outline-brown-3d i {
        color: #000000 !important;
    }
    .btn-outline-brown-3d:hover i {
        color: #ffffff !important;
    }

    .btn-brown-3d::before, .btn-outline-brown-3d::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: left 0.6s;
    }
    .btn-brown-3d:hover::before, .btn-outline-brown-3d:hover::before {
        left: 100%;
    }

    /* 3D decorative corners */
    .card-corner { position: absolute; width: 100px; height: 100px; background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%); z-index: 1; }
    .card-corner.corner-1 { top: 0; right: 0; transform: rotate(90deg); }
    .card-corner.corner-2 { bottom: 0; left: 0; transform: rotate(270deg); }

    /* Background decorations */
    .section-bg-decoration { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
    .decoration-circle { position: absolute; border-radius: 50%; background: rgba(212, 175, 55, 0.03); width: 300px; height: 300px; }
    .decoration-circle:nth-child(1) { top: -100px; right: -100px; background: rgba(93,64,55,0.02); animation: float 25s infinite; }
    .decoration-circle:nth-child(2) { bottom: -50px; left: -50px; width: 200px; height: 200px; background: rgba(212,175,55,0.02); animation: float 20s infinite reverse; }
    .bg-cream-light { background-color: var(--cream-light) !important; position: relative; }
    .cert-pattern { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
    .pattern-line { position: absolute; width: 100%; height: 1px; background: linear-gradient(90deg, transparent, var(--cream-gold), transparent); opacity: 0.2; }
    .pattern-line:nth-child(1) { top: 20%; left: -50%; width: 200%; transform: rotate(2deg); }
    .pattern-line:nth-child(2) { bottom: 30%; right: -50%; width: 200%; transform: rotate(-3deg); }

    /* CTA Section */
    .cta-elegant { background: linear-gradient(135deg, #f8fafc 0%, #D7CCC8 100%); position: relative; overflow: hidden; }
    .cta-elegant::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.1) 0%, transparent 50%); }
    .cta-content-wrapper { position: relative; z-index: 2; padding: 3rem; background: rgba(255, 255, 255, 0.9); border-radius: 1.5rem; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); border: 1px solid rgba(255, 255, 255, 0.3); backdrop-filter: blur(10px); }
    .cta-elegant h2 { color: #241b64; background: linear-gradient(135deg, #241b64, #302574); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .cta-elegant .lead { color: #4b3dad; }

    /* Chat Assistant */
    .chat-toggle { position: fixed; bottom: 24px; right: 24px; background: linear-gradient(145deg, #241b64, #171247); color: white; width: 62px; height: 62px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; font-size: 24px; z-index: 9999; box-shadow: 0 16px 34px rgba(36,27,100,0.32); transition: all 0.25s ease; border: none; outline: none; }
    .chat-toggle:hover { transform: translateY(-3px); background: linear-gradient(145deg, #ef332d, #241b64); box-shadow: 0 20px 42px rgba(36,27,100,0.36); }
    .notif-dot { position: absolute; top: 2px; right: 2px; background: #ef332d; color: white; font-size: 10px; font-weight: bold; width: 20px; height: 20px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 0 0 3px #ffffff; animation: pulse 1.5s infinite; }
    @keyframes pulse { 0% { transform: scale(1); opacity: 1; } 50% { transform: scale(1.2); opacity: 0.8; } 100% { transform: scale(1); opacity: 1; } }
    .chatbox { position: fixed; bottom: 98px; right: 24px; width: 390px; height: 570px; background: white; border-radius: 24px; box-shadow: 0 26px 70px rgba(17,24,39,0.25); display: flex; flex-direction: column; overflow: hidden; opacity: 0; visibility: hidden; transform: translateY(18px) scale(0.98); transform-origin: bottom right; transition: all 0.22s ease; z-index: 9999; font-family: system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif; border: 1px solid rgba(36,27,100,0.12); }
    .chatbox.active { opacity: 1; visibility: visible; transform: translateY(0) scale(1); }
    .chat-header { background: linear-gradient(135deg, #171247 0%, #241b64 62%, #302574 100%); color: white; padding: 18px 20px; display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(255,255,255,0.16); }
    .chat-header-info { display: flex; align-items: center; gap: 12px; }
    .chat-avatar { width: 46px; height: 46px; background: rgba(255,255,255,0.14); border: 1px solid rgba(255,255,255,0.22); border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 19px; backdrop-filter: blur(4px); }
    /* PERBAIKAN: Teks header chatbot menjadi putih */
    .chat-header .chat-header-text h6,
    .chat-header .chat-header-text p {
        color: #ffffff !important;
    }
    .chat-status-dot { display: inline-block; width: 8px; height: 8px; background: #22c55e; border-radius: 50%; margin-right: 6px; box-shadow: 0 0 0 3px rgba(34,197,94,0.16); }
    .chat-close { cursor: pointer; transition: all 0.2s; width: 34px; height: 34px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; background: rgba(255,255,255,0.12); }
    .chat-close:hover { background: rgba(255,255,255,0.22); }
    .chat-body { flex: 1; padding: 16px; overflow-y: auto; background: radial-gradient(circle at top left, rgba(239,51,45,0.08), transparent 34%), linear-gradient(180deg, #f8fafc 0%, #eef2ff 100%); display: flex; flex-direction: column; gap: 10px; }
    .message { display: flex; flex-direction: column; max-width: 88%; animation: fadeInUp 0.2s ease; }
    .bot-message { align-self: flex-start; }
    .user-message { align-self: flex-end; }
    .bubble { padding: 11px 14px; border-radius: 18px; font-size: 0.9rem; line-height: 1.45; word-wrap: break-word; box-shadow: 0 8px 18px rgba(36,27,100,0.08); }
    .bot-message .bubble { background: white; color: #1f2937; border-bottom-left-radius: 4px; border: 1px solid rgba(36,27,100,0.08); }
    .user-message .bubble { background: #241b64; color: white; border-bottom-right-radius: 4px; }
    .message-time { font-size: 0.65rem; color: #8a8a8a; margin-top: 4px; margin-left: 12px; margin-right: 12px; }
    .chat-options { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 8px; margin-top: 6px; }
    .opt-btn { background: white; border: 1px solid rgba(36,27,100,0.14); padding: 9px 10px; border-radius: 14px; font-size: 0.78rem; font-weight: 700; color: #241b64; cursor: pointer; transition: all 0.2s; box-shadow: 0 6px 14px rgba(36,27,100,0.06); text-align: left; display: inline-flex; align-items: center; gap: 8px; }
    .opt-btn:hover { background: #241b64; border-color: #241b64; color: white; transform: translateY(-2px); }
    .opt-btn i { color: #ef332d; width: 15px; text-align: center; }
    .opt-btn:hover i { color: white; }
    .typing-indicator { display: flex; align-items: center; gap: 4px; background: white; padding: 10px 14px; border-radius: 20px; width: fit-content; border-bottom-left-radius: 4px; border: 1px solid rgba(36,27,100,0.08); }
    .typing-dot { width: 6px; height: 6px; background: #aaa; border-radius: 50%; animation: typingAnim 1.4s infinite ease-in-out; }
    .typing-dot:nth-child(1) { animation-delay: 0s; }
    .typing-dot:nth-child(2) { animation-delay: 0.2s; }
    .typing-dot:nth-child(3) { animation-delay: 0.4s; }
    @keyframes typingAnim { 0%, 60%, 100% { transform: translateY(0); opacity: 0.4; } 30% { transform: translateY(-6px); opacity: 1; } }
    .chat-footer { padding: 14px 16px; background: white; border-top: 1px solid #e5e7eb; display: flex; gap: 8px; align-items: center; }
    .chat-footer input { flex: 1; border: 1px solid #dbe3ef; border-radius: 30px; padding: 11px 14px; font-size: 0.85rem; outline: none; transition: 0.2s; }
    .chat-footer input:focus { border-color: #241b64; box-shadow: 0 0 0 3px rgba(36,27,100,0.1); }
    .chat-footer button { background: #241b64; border: none; color: white; width: 42px; height: 42px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; cursor: pointer; transition: 0.2s; }
    .chat-footer button:hover { background: #ef332d; transform: scale(0.96); }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }
    @media (max-width: 480px) { .chatbox { width: 92vw; right: 4vw; bottom: 88px; height: 68vh; } .chat-toggle { width: 56px; height: 56px; font-size: 22px; bottom: 16px; right: 16px; } .chat-options { grid-template-columns: 1fr; } }

    /* Animations */
    @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
    .animate-on-scroll { opacity: 0; animation: fadeInUp 0.8s ease-out forwards; }

    /* Utilities */
    .py-6 { padding-top: 5rem !important; padding-bottom: 5rem !important; }
    .mb-6 { margin-bottom: 5rem !important; }
    .mt-6 { margin-top: 5rem !important; }

    /* Responsive */
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Typewriter effect
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

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            });
        });

        // Observer for scroll animations
        const observerOptions = { threshold: 0.2, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('animate-in'); observer.unobserve(entry.target); });
        }, observerOptions);
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        // 3D hover effect
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

        // ========== QUICK ASSISTANT FUNCTIONALITY ==========
        const chatToggle = document.getElementById('chatToggle');
        const chatBox = document.getElementById('chatBox');
        const chatClose = document.getElementById('chatClose');
        const chatBody = document.getElementById('chatBody');
        const notif = document.getElementById('notifDot');
        const messageInput = document.getElementById('chatInput');
        const sendBtn = document.getElementById('sendMsg');

        // Nomor WhatsApp admin yang sudah diformat dari PHP
        const adminWhatsapp = "{{ $cleanWhatsapp }}";

        let isInitialGreeting = false;
        const companyAnswers = {
            profil: 'PT Mitra Nusa Konsulindo adalah perusahaan konsultan mandiri sejak 2020 yang bergerak pada jasa konsultansi teknik dan manajemen untuk bidang konstruksi dan non-konstruksi.',
            layanan: 'Layanan utama kami meliputi perencanaan umum, studi kelayakan, perencanaan teknik, dokumen lingkungan, pengawasan teknik, penelitian, pengembangan, jasa arsitektural, rekayasa sipil, transportasi, sumber daya air, serta konsultansi manajemen.',
            sertifikat: 'Legalitas dan sertifikasi perusahaan mencakup NIB {{ $profile->nib ?? '0257011100093' }}, NPWP {{ $profile->npwp ?? '96.431.796.0-429.000' }}, keanggotaan INKINDO {{ $profile->inkindo ?? '17744/P/1304.JB' }}, KADIN {{ $profile->kadin ?? '20112-2026270629' }}, serta sertifikat bidang usaha yang tersedia pada halaman sertifikat.',
            alamat: 'Alamat kantor kami: {{ $profile->address_main ?? 'Jl. Tulip VII No.8, Rancabolang, Kec. Gedebage, Kota Bandung, Jawa Barat 40295' }}. {{ $profile->address_branch ? 'Dan ' . $profile->address_branch : '' }}',
            jam: 'Jam operasional: Senin sampai Jumat pukul 08.00-17.00 WIB, Sabtu pukul 08.00-14.00 WIB, Minggu dan hari libur tutup.',
            konsultasi: 'Untuk konsultasi awal, silakan jelaskan jenis proyek, lokasi, kebutuhan layanan, dan target waktu. Tim kami dapat membantu meninjau kebutuhan awal sebelum penawaran lebih lanjut.'
        };

        function scrollBottom() {
            if (chatBody) chatBody.scrollTop = chatBody.scrollHeight;
        }

        function addMessage(text, sender) {
            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${sender === 'bot' ? 'bot-message' : 'user-message'}`;
            const bubble = document.createElement('div');
            bubble.className = 'bubble';
            bubble.innerText = text;
            const timeSpan = document.createElement('div');
            timeSpan.className = 'message-time';
            const now = new Date();
            timeSpan.innerText = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            messageDiv.appendChild(bubble);
            messageDiv.appendChild(timeSpan);
            chatBody.appendChild(messageDiv);
            scrollBottom();
        }

        let typingDiv = null;
        function showTyping() { if (typingDiv) return; typingDiv = document.createElement('div'); typingDiv.className = 'message bot-message'; typingDiv.innerHTML = `<div class="typing-indicator"><span class="typing-dot"></span><span class="typing-dot"></span><span class="typing-dot"></span></div>`; chatBody.appendChild(typingDiv); scrollBottom(); }
        function hideTyping() { if (typingDiv) { typingDiv.remove(); typingDiv = null; } }

        function botReplyWithDelay(replyText, delay = 800) { showTyping(); setTimeout(() => { hideTyping(); addMessage(replyText, 'bot'); renderOptions(); }, delay); }

        function renderOptions() {
            if (!chatBody) return;
            const optionsDiv = document.createElement('div');
            optionsDiv.className = 'message bot-message';
            optionsDiv.innerHTML = `<div class="bubble" style="padding: 10px;"><div class="chat-options"><button class="opt-btn" data-faq="profil"><i class="fas fa-building"></i>Profil</button><button class="opt-btn" data-faq="layanan"><i class="fas fa-cogs"></i>Layanan</button><button class="opt-btn" data-faq="sertifikat"><i class="fas fa-certificate"></i>Legalitas</button><button class="opt-btn" data-faq="alamat"><i class="fas fa-map-marker-alt"></i>Alamat</button><button class="opt-btn" data-faq="jam"><i class="fas fa-clock"></i>Jam Kerja</button><button class="opt-btn" data-faq="konsultasi"><i class="fas fa-comments"></i>Konsultasi</button></div></div>`;
            chatBody.appendChild(optionsDiv);
            optionsDiv.querySelectorAll('.opt-btn').forEach(btn => btn.addEventListener('click', handleOptClick));
            scrollBottom();
        }

        function processUserMessage(userMsg) {
            const lowerMsg = userMsg.toLowerCase();
            if (lowerMsg.includes('profil') || lowerMsg.includes('perusahaan') || lowerMsg.includes('mitra nusa')) { botReplyWithDelay(companyAnswers.profil); return; }
            if (lowerMsg.includes('layanan') || lowerMsg.includes('service') || lowerMsg.includes('jasa') || lowerMsg.includes('konstruksi')) { botReplyWithDelay(companyAnswers.layanan); return; }
            if (lowerMsg.includes('sertifikat') || lowerMsg.includes('legal') || lowerMsg.includes('nib') || lowerMsg.includes('npwp') || lowerMsg.includes('inkindo') || lowerMsg.includes('kadin')) { botReplyWithDelay(companyAnswers.sertifikat); return; }
            if (lowerMsg.includes('alamat') || lowerMsg.includes('lokasi') || lowerMsg.includes('map') || lowerMsg.includes('gedebage') || lowerMsg.includes('antapani')) { botReplyWithDelay(companyAnswers.alamat); return; }
            if (lowerMsg.includes('jam') || lowerMsg.includes('buka') || lowerMsg.includes('operasional')) { botReplyWithDelay(companyAnswers.jam); return; }
            if (lowerMsg.includes('harga') || lowerMsg.includes('biaya') || lowerMsg.includes('price') || lowerMsg.includes('konsultasi') || lowerMsg.includes('penawaran')) { botReplyWithDelay(companyAnswers.konsultasi); return; }
            if (lowerMsg.includes('admin') || lowerMsg.includes('cs') || lowerMsg.includes('wa') || lowerMsg.includes('whatsapp') || lowerMsg.includes('hubungi')) {
                botReplyWithDelay('Mengarahkan ke WhatsApp admin...');
                setTimeout(() => window.open('https://wa.me/' + adminWhatsapp, '_blank'), 1000);
                return;
            }
            if (lowerMsg.includes('terima kasih') || lowerMsg.includes('thanks')) { botReplyWithDelay('Sama-sama. Tim kami siap membantu jika Anda membutuhkan informasi lanjutan.'); return; }
            botReplyWithDelay('Saya bisa membantu informasi profil perusahaan, layanan, legalitas, alamat, jam operasional, dan konsultasi awal. Silakan pilih salah satu topik di bawah.');
        }

        function handleOptClick(e) { const type = e.currentTarget.getAttribute('data-faq'); addMessage(e.currentTarget.innerText, 'user'); if (companyAnswers[type]) { botReplyWithDelay(companyAnswers[type]); return; } }

        function showInitialGreeting() {
            if (isInitialGreeting) return;
            isInitialGreeting = true;
            setTimeout(() => { addMessage("Halo, selamat datang di layanan informasi PT Mitra Nusa Konsulindo.", "bot"); setTimeout(() => { addMessage("Pilih topik cepat di bawah, atau ketik pertanyaan Anda langsung.", "bot"); renderOptions(); }, 400); }, 500);
        }

        function toggleChat() { if (chatBox) { chatBox.classList.toggle('active'); if (chatBox.classList.contains('active')) { if (notif) notif.style.display = 'none'; if (!isInitialGreeting) showInitialGreeting(); } } }
        if (chatToggle) chatToggle.addEventListener('click', toggleChat);
        if (chatClose) chatClose.addEventListener('click', toggleChat);

        function sendMessage() { if (!messageInput) return; const text = messageInput.value.trim(); if (text === "") return; addMessage(text, 'user'); messageInput.value = ''; processUserMessage(text); }
        if (sendBtn) sendBtn.addEventListener('click', sendMessage);
        if (messageInput) { messageInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') sendMessage(); }); }
        if (notif) notif.style.display = 'flex';
    });
</script>
@endpush

<!-- Floating Chat HTML -->
<div id="chatToggle" class="chat-toggle">
    <i class="fas fa-comment-dots"></i>
    <span id="notifDot" class="notif-dot">1</span>
</div>
<div id="chatBox" class="chatbox">
    <div class="chat-header">
        <div class="chat-header-info">
            <div class="chat-avatar"><i class="fas fa-headset"></i></div>
            <div class="chat-header-text"><h6>Asisten Mitra Nusa</h6><p><span class="chat-status-dot"></span>Siap membantu</p></div>
        </div>
        <div class="chat-close" id="chatClose"><i class="fas fa-times"></i></div>
    </div>
    <div class="chat-body" id="chatBody"></div>
    <div class="chat-footer">
        <input type="text" id="chatInput" placeholder="Tulis pesan... contoh: layanan konstruksi" autocomplete="off">
        <button id="sendMsg" aria-label="Kirim pesan"><i class="fas fa-paper-plane"></i></button>
    </div>
</div>
