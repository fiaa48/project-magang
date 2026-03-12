@extends('user.layouts.app')

@section('title', 'Proyek Kami | PT Mitra Nusa Konsulindo')
@section('description', 'Daftar proyek konsultansi konstruksi dan non-konstruksi yang telah kami selesaikan dengan profesional.')

@section('content')
    <!-- HERO SECTION (sama) -->
    <section class="project-hero position-relative overflow-hidden">
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
                            <i class="fas fa-folder-open me-2"></i>PORTOFOLIO PROYEK
                        </span>
                    </div>
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Proyek <span class="text-gradient-brown">Kami</span>
                    </h1>
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto animate-fade-in-up" style="max-width: 700px; animation-delay: 0.2s;">
                        Berikut adalah proyek-proyek terpilih yang telah kami selesaikan dengan standar profesional tertinggi.
                    </p>
                    <div class="scroll-indicator mt-5">
                        <a href="#project-table" class="scroll-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TABEL PROYEK -->
    <section id="project-table" class="py-6 bg-white">
        <div class="container">
            <div class="section-header text-center mb-5">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-table me-2"></i>DAFTAR PROYEK
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Proyek yang Telah Dilaksanakan</h2>
                <p class="lead text-brown-medium">Berbagai proyek konstruksi dan non‑konstruksi dari berbagai sektor.</p>
            </div>

            @php
                // Data proyek – mencerminkan bidang usaha di PDF (tidak ada proyek spesifik di PDF, jadi ini contoh representatif)
                $projects = [
                    ['nama' => 'Perencanaan Gedung Perkantoran 15 Lantai', 'kategori' => 'Arsitektur', 'lokasi' => 'Jakarta', 'tahun' => '2024'],
                    ['nama' => 'Pengawasan Jalan Tol Cileunyi – Sumedang', 'kategori' => 'Teknik Sipil', 'lokasi' => 'Jawa Barat', 'tahun' => '2023'],
                    ['nama' => 'Studi Kelayakan Bendungan Cipanas', 'kategori' => 'Sumber Daya Air', 'lokasi' => 'Sumedang', 'tahun' => '2023'],
                    ['nama' => 'Penyusunan RDTR Kawasan Industri', 'kategori' => 'Tata Ruang', 'lokasi' => 'Bandung Barat', 'tahun' => '2024'],
                    ['nama' => 'AMDAL Rumah Sakit Pendidikan', 'kategori' => 'Lingkungan', 'lokasi' => 'Bandung', 'tahun' => '2023'],
                    ['nama' => 'Manajemen Proyek Apartemen', 'kategori' => 'Manajemen Konstruksi', 'lokasi' => 'Surabaya', 'tahun' => '2024'],
                    ['nama' => 'Survey Topografi Perkebunan Sawit', 'kategori' => 'Jasa Survey', 'lokasi' => 'Riau', 'tahun' => '2022'],
                    ['nama' => 'Desain Interior Hotel Bintang 5', 'kategori' => 'Desain Interior', 'lokasi' => 'Bali', 'tahun' => '2023'],
                ];
            @endphp

            <div class="table-responsive">
                <table class="table premium-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Proyek</th>
                            <th>Kategori</th>
                            <th>Lokasi</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projects as $index => $project)
                        <tr class="project-row">
                            <td>{{ $loop->iteration }}</td>
                            <td><strong>{{ $project['nama'] }}</strong></td>
                            <td><span class="badge bg-brown-light-subtle text-brown-dark">{{ $project['kategori'] }}</span></td>
                            <td>{{ $project['lokasi'] }}</td>
                            <td>{{ $project['tahun'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- SECTION JASA SURVEI – LENGKAP SESUAI PDF HALAMAN 10 -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container position-relative z-2">
            <div class="section-header text-center mb-5">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-camera me-2"></i>JASA SURVEI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Layanan Survey Profesional</h2>
                <p class="lead text-brown-medium">Didukung teknologi terkini dan tenaga ahli bersertifikasi. Berikut layanan lengkap sesuai Company Profile:</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="survey-card-3d animate-on-scroll h-100">
                        <div class="survey-card-inner p-4 p-lg-5">
                            <h3 class="fw-bold text-brown-dark mb-4">Layanan Survey yang Tersedia</h3>
                            <ul class="list-unstyled">
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Survey Teristris</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Penginderaan Jauh / Fotogrametri</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Survey Hidrografi / Batimetri</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Sistem Informasi Geografi (GIS)</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Survey Registrasi Kepemilikan Tanah / Kadastral</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Survey Geologi dan Geofisika</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Survey Pertanian</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Jasa Survey non Seismik</span>
                                </li>
                                <li class="mb-3 d-flex">
                                    <i class="fas fa-check-circle text-cream-gold me-3 mt-1"></i>
                                    <span class="text-brown-medium">Jasa Survey Geologi dan Geofisika (non seismik)</span>
                                </li>
                            </ul>
                            <a href="{{ route('services') }}" class="btn btn-brown-3d rounded-pill px-4 mt-3">
                                Lihat Semua Layanan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="survey-image-wrapper text-center h-100 d-flex flex-column justify-content-center">
                        <div class="survey-image-3d">
                            <img src="{{ asset('images/survey-illustration.jpg') }}"
                                 alt="Ilustrasi Survey"
                                 class="img-fluid rounded-4 shadow-3d"
                                 onerror="this.src='https://placehold.co/600x400/5D4037/FFFFFF?text=Survey+Profesional'">
                        </div>
                        <p class="text-brown-medium mt-4">Tim survey kami siap membantu berbagai kebutuhan pengukuran dan pemetaan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CERTIFICATIONS STRIP (sama seperti home) -->
    <section class="py-6 bg-white position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Tertarik dengan Proyek Serupa?</h2>
                        <p class="lead mb-0">
                            Konsultasikan kebutuhan proyek Anda dengan tim ahli kami. Dapatkan solusi terbaik dan tepat guna.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 rounded-pill">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
                            <span class="btn-shine"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* ===== SEMUA STYLE SAMA DENGAN SEBELUMNYA, TIDAK BERUBAH ===== */
    /* (salin semua CSS dari kode sebelumnya di sini) */
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

    .project-hero { background: linear-gradient(135deg, var(--cream-light) 0%, var(--white) 100%); padding: 6rem 0 4rem; position: relative; overflow: hidden; }
    .hero-bg-pattern { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
    .pattern-circle { position: absolute; border-radius: 50%; background: rgba(93, 64, 55, 0.05); animation: float 20s ease-in-out infinite; }
    .pattern-circle.circle-1 { width: 300px; height: 300px; top: -150px; right: -100px; animation-delay: 0s; }
    .pattern-circle.circle-2 { width: 200px; height: 200px; bottom: -80px; left: -80px; background: rgba(212, 175, 55, 0.05); animation-delay: 10s; }
    .pattern-square { position: absolute; background: rgba(161, 136, 127, 0.03); animation: rotate 30s linear infinite; }
    .pattern-square.square-1 { width: 150px; height: 150px; top: 30%; right: 15%; transform: rotate(45deg); }
    .pattern-square.square-2 { width: 100px; height: 100px; bottom: 20%; left: 10%; transform: rotate(15deg); background: rgba(212, 175, 55, 0.03); animation-delay: -15s; }
    @keyframes float { 0%,100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-20px) rotate(180deg); } }
    @keyframes rotate { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    .min-vh-60 { min-height: 60vh; }
    .display-2 { font-weight: 800 !important; letter-spacing: -0.02em; line-height: 1.15; }
    .text-gradient-brown { background: linear-gradient(135deg, var(--cream-gold), var(--brown-light)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .company-badge { animation: fadeInDown 0.8s ease-out; }
    .badge.bg-brown-dark { background-color: rgba(93, 64, 55, 0.9) !important; border: 1px solid rgba(255,255,255,0.2); backdrop-filter: blur(10px); }
    .badge.bg-brown-light-subtle { background-color: rgba(161,136,127,0.1) !important; color: var(--brown-dark); }
    .scroll-indicator { position: absolute; bottom: 2rem; left: 0; right: 0; text-align: center; }
    .scroll-down { color: var(--brown-dark); font-size: 1.5rem; animation: bounce 2s infinite; display: inline-block; width: 50px; height: 50px; line-height: 50px; border-radius: 50%; background: rgba(255,255,255,0.9); box-shadow: var(--shadow-sm); transition: all 0.3s; }
    .scroll-down:hover { background: white; transform: scale(1.1); }
    @keyframes bounce { 0%,20%,50%,80%,100% { transform: translateY(0); } 40% { transform: translateY(-10px); } 60% { transform: translateY(-5px); } }

    /* Premium Table */
    .premium-table { background: white; border-radius: 1.5rem; overflow: hidden; box-shadow: var(--shadow-3d); border: 1px solid rgba(93,64,55,0.1); }
    .premium-table thead th { background: linear-gradient(135deg, var(--brown-dark), #4A342E); color: white; font-weight: 600; padding: 1.2rem 1rem; border: none; font-size: 1rem; text-transform: uppercase; letter-spacing: 0.5px; }
    .premium-table thead th:first-child { border-radius: 1.5rem 0 0 0; }
    .premium-table thead th:last-child { border-radius: 0 1.5rem 0 0; }
    .premium-table tbody tr { transition: all 0.3s; border-bottom: 1px solid rgba(93,64,55,0.05); }
    .premium-table tbody tr:hover { background: rgba(212,175,55,0.03); transform: scale(1.01); box-shadow: 0 5px 15px rgba(93,64,55,0.05); }
    .premium-table td { padding: 1rem; vertical-align: middle; color: var(--brown-medium); font-size: 0.95rem; }
    .premium-table td strong { color: var(--brown-dark); }

    /* 3D Buttons */
    .btn-brown-3d { background: linear-gradient(145deg, var(--brown-dark), #4A342E); border: none; color: white; font-weight: 600; transition: all 0.3s; position: relative; overflow: hidden; box-shadow: 0 8px 16px rgba(93,64,55,0.2); transform-style: preserve-3d; transform: translateY(0) rotateX(0deg); }
    .btn-brown-3d:hover { transform: translateY(-3px) rotateX(2deg); box-shadow: 0 15px 30px rgba(93,64,55,0.3); background: linear-gradient(145deg, #4A342E, var(--brown-dark)); }
    .btn-outline-brown-3d { border: 2px solid var(--brown-dark); color: var(--brown-dark); background: transparent; font-weight: 600; transition: all 0.3s; box-shadow: 0 4px 8px rgba(0,0,0,0.05); position: relative; overflow: hidden; }
    .btn-outline-brown-3d:hover { background: var(--brown-dark); color: white; transform: translateY(-3px); box-shadow: 0 10px 20px rgba(93,64,55,0.2); }
    .btn-brown-3d::before, .btn-outline-brown-3d::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: left 0.6s; }
    .btn-brown-3d:hover::before, .btn-outline-brown-3d:hover::before { left: 100%; }
    .btn-sm { padding: 0.4rem 1rem; font-size: 0.85rem; }

    /* Survey Card */
    .survey-card-3d { perspective: 1000px; height: 100%; }
    .survey-card-inner { background: white; border-radius: 2rem; box-shadow: var(--shadow-3d); border: 1px solid rgba(93,64,55,0.1); transition: all 0.4s; transform-style: preserve-3d; transform: rotateY(0deg) rotateX(1deg); position: relative; overflow: hidden; height: 100%; }
    .survey-card-3d:hover .survey-card-inner { transform: rotateY(1deg) rotateX(1deg) translateY(-5px); box-shadow: 0 30px 60px rgba(93,64,55,0.2); border-color: var(--cream-gold); }
    .survey-image-3d { transition: transform 0.4s; border-radius: 2rem; overflow: hidden; box-shadow: var(--shadow-3d); }
    .survey-image-3d:hover { transform: scale(1.02) rotate(1deg); }
    .shadow-3d { box-shadow: var(--shadow-3d); }

    /* Certification Strip */
    .bg-cream-light { background-color: var(--cream-light) !important; position: relative; }
    .cert-pattern { position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; }
    .pattern-line { position: absolute; width: 100%; height: 1px; background: linear-gradient(90deg, transparent, var(--cream-gold), transparent); opacity: 0.2; }
    .pattern-line:nth-child(1) { top: 20%; left: -50%; width: 200%; transform: rotate(2deg); }
    .pattern-line:nth-child(2) { bottom: 30%; right: -50%; width: 200%; transform: rotate(-3deg); }
    .cert-logo-wrapper { background: white; padding: 1rem 1.5rem; border-radius: 1rem; box-shadow: 0 5px 15px rgba(0,0,0,0.02); border: 1px solid rgba(93,64,55,0.05); transition: all 0.3s; display: flex; align-items: center; justify-content: center; height: 70px; width: auto; }
    .cert-logo-wrapper:hover { transform: translateY(-5px); box-shadow: 0 15px 25px rgba(93,64,55,0.05); border-color: rgba(212,175,55,0.3); }
    .cert-logo { filter: grayscale(100%); opacity: 0.7; transition: all 0.3s; max-height: 40px; }
    .cert-logo-wrapper:hover .cert-logo { filter: grayscale(0); opacity: 1; }

    /* CTA */
    .cta-elegant { background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%); position: relative; overflow: hidden; }
    .cta-elegant::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.1) 0%, transparent 50%), radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.1) 0%, transparent 55%); }
    .cta-content-wrapper { position: relative; z-index: 2; padding: 3rem; background: rgba(255, 255, 255, 0.9); border-radius: 1.5rem; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08); border: 1px solid rgba(255, 255, 255, 0.3); backdrop-filter: blur(10px); }
    .cta-elegant h2 { background: linear-gradient(135deg, #5D4037, #8B6B61); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .cta-elegant .lead { color: #795548; }

    /* Animations */
    @keyframes fadeInDown { from { opacity: 0; transform: translateY(-30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeInLeft { from { opacity: 0; transform: translateX(-30px); } to { opacity: 1; transform: translateX(0); } }
    @keyframes fadeInRight { from { opacity: 0; transform: translateX(30px); } to { opacity: 1; transform: translateX(0); } }
    .animate-fade-in-down { animation: fadeInDown 0.8s ease-out forwards; }
    .animate-fade-in-up { animation: fadeInUp 0.8s ease-out forwards; }
    .animate-fade-in-left { animation: fadeInLeft 0.8s ease-out forwards; }
    .animate-fade-in-right { animation: fadeInRight 0.8s ease-out forwards; }
    .animate-on-scroll { opacity: 0; animation: fadeInUp 0.8s ease-out forwards; }

    /* Utilities */
    .py-6 { padding-top: 5rem !important; padding-bottom: 5rem !important; }
    .mb-6 { margin-bottom: 5rem !important; }
    .mt-6 { margin-top: 5rem !important; }

    /* Responsive */
    @media (max-width: 992px) { .display-2 { font-size: 3rem !important; } .project-hero { padding: 5rem 0 3rem; } .cta-content-wrapper { padding: 2rem 1.5rem; } }
    @media (max-width: 768px) { .display-2 { font-size: 2.5rem !important; } .premium-table thead th { font-size: 0.9rem; } .premium-table td { font-size: 0.85rem; } .survey-card-inner { padding: 1.5rem !important; } }
    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .premium-table thead { display: none; }
        .premium-table, .premium-table tbody, .premium-table tr, .premium-table td { display: block; width: 100%; }
        .premium-table tr { margin-bottom: 1rem; border: 1px solid var(--cream-dark); border-radius: 1rem; padding: 1rem; }
        .premium-table td { border: none; padding: 0.5rem 0; text-align: left; display: flex; align-items: center; }
        .premium-table td::before { content: attr(data-label); font-weight: 600; width: 120px; min-width: 120px; color: var(--brown-dark); }
        .btn-sm { margin-left: auto; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll untuk anchor
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) window.scrollTo({ top: target.offsetTop - 80, behavior: 'smooth' });
            });
        });

        // Observer untuk animasi scroll
        const observerOptions = { threshold: 0.2, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        // Data-label untuk mobile table
        const headers = document.querySelectorAll('.premium-table thead th');
        const rows = document.querySelectorAll('.premium-table tbody tr');
        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            cells.forEach((cell, index) => {
                if (headers[index]) cell.setAttribute('data-label', headers[index].textContent.trim());
            });
        });
    });
</script>
@endpush
