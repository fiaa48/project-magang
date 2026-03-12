@extends('user.layouts.app')

@section('title', 'PT Mitra Nusa Konsulindo - Konsultan Konstruksi & Non Konstruksi')
@section('description', 'PT Mitra Nusa Konsulindo adalah perusahaan konsultan mandiri sejak 2020 yang bergerak di bidang jasa konsultansi teknik, manajemen, konstruksi dan non-konstruksi dengan tenaga ahli berpengalaman dan berkualitas.')

@section('content')
    <!-- HERO / BERANDA UTAMA -->
    <section class="hero-section position-relative overflow-hidden">
        <!-- Background Slider -->
        <div class="hero-slider">
            <div class="slider-track">
                <!-- Slide 1 - Konstruksi -->
                <div class="slide active">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Konsultansi Konstruksi</h3>
                        <p>Perencanaan dan rekayasa bangunan gedung hunian & non hunian.</p>
                    </div>
                </div>
                <!-- Slide 2 - Arsitektur -->
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1487956382158-bb926046304a?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Jasa Arsitektural</h3>
                        <p>Desain bangunan, interior, dan lanskap berkarakter, fungsional, dan estetis.</p>
                    </div>
                </div>
                <!-- Slide 3 - Teknik Sipil & SDA -->
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Rekayasa Teknik Sipil</h3>
                        <p>Infrastruktur sumber daya air, transportasi, dan struktur bangunan.</p>
                    </div>
                </div>
                <!-- Slide 4 - Non-Konstruksi -->
                <div class="slide">
                    <div class="slide-image" style="background-image: url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1920&q=80');"></div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <h3>Konsultansi Non-Konstruksi</h3>
                        <p>Studi, penelitian, manajemen, dan pengembangan berbagai sektor.</p>
                    </div>
                </div>
            </div>

            <!-- Slider Navigation -->
            <button class="slider-nav prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="slider-nav next">
                <i class="fas fa-chevron-right"></i>
            </button>

            <!-- Slider Dots -->
            <div class="slider-dots">
                <span class="dot active" data-slide="0"></span>
                <span class="dot" data-slide="1"></span>
                <span class="dot" data-slide="2"></span>
                <span class="dot" data-slide="3"></span>
            </div>
        </div>

        <!-- Main Hero Content -->
        <div class="container position-relative" style="padding-top: 120px;">
            <div class="row min-vh-100 align-items-center">
                <div class="col-xl-8 col-lg-9 mx-auto text-center">
                    <!-- Badge -->
                    <div class="company-badge mb-4">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal shadow-soft">
                            <i class="fas fa-medal me-2"></i>Perusahaan Konsultan Mandiri Sejak 2020
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="display-1 fw-bold mb-3 text-white hero-title">
                        PT Mitra Nusa<br>
                        <span class="text-gradient-brown">Konsulindo</span>
                    </h1>

                    <!-- Sub Heading / Tagline -->
                    <p class="lead fs-5 text-white-50 lh-lg mx-auto hero-lead" style="max-width: 780px;">
                        PT. MITRA NUSA KONSULINDO merupakan perusahaan konsultan mandiri yang berdiri pada tahun 2020,
                        berkembang dengan dukungan tenaga ahli terkemuka dan berkualitas yang telah melaksanakan berbagai
                        proyek terintegrasi lintas disiplin, siap memberikan bantuan dan pelayanan profesional bagi instansi
                        pemerintah maupun swasta di bidang jasa Konsultansi Teknik dan Manajemen.
                    </p>

                    <!-- Spesialis Jasa Konsultansi (teks biasa, bisa wrap) -->
                    <div class="subtitle-wrapper mb-4">
                        <h2 class="h4 fw-light text-white-50 mb-2">
                            Spesialis Jasa Konsultansi
                        </h2>
                        <div class="specialist-text-wrapper">
                            <span class="text-white fw-semibold specialist-text">
                                Perencanaan Umum • Studi Kelayakan • Perencanaan Teknik • Dokumen Lingkungan • Pengawasan Teknik • Penelitian & Pengembangan
                            </span>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="cta-buttons d-flex flex-wrap gap-3 justify-content-center mb-4">
                        <a href="{{ route('about') }}" class="btn btn-brown btn-lg px-5 py-3 rounded-pill shadow-soft">
                            <i class="fas fa-building me-2"></i>Tentang Perusahaan
                        </a>
                        <a href="{{ route('services') }}" class="btn btn-outline-cream btn-lg px-5 py-3 rounded-pill shadow-soft">
                            <i class="fas fa-cogs me-2"></i>Layanan Konstruksi & Non-Konstruksi
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-brown-3d btn-lg px-5 py-3 rounded-pill shadow-soft">
                            <i class="fab fa-whatsapp me-2"></i>Konsultasi Awal Gratis
                            <span class="btn-shine"></span>
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="stats-wrapper mt-4 glass-panel">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="5">5+</div>
                                    <div class="stat-label text-white-50">Tahun Pengalaman</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="50">50+</div>
                                    <div class="stat-label text-white-50">Proyek Terselesaikan</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="15">15+</div>
                                    <div class="stat-label text-white-50">Bidang Sertifikasi</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-5 fw-bold text-white" data-target="10">10+</div>
                                    <div class="stat-label text-white-50">Tenaga Ahli Profesional</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Scroll Indicator -->
                    <div class="scroll-indicator">
                        <a href="#about-brief" class="scroll-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION: Sekilas Perusahaan (Profil & Latar Belakang) -->
    <section id="about-brief" class="py-7 bg-light-gradient position-relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>

        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="card border-0 shadow-3d rounded-4 p-4 p-lg-5 bg-white position-relative overflow-hidden hover-3d-card">
                        <span class="floating-badge">
                            <i class="fas fa-award me-2"></i>Konsultan Mandiri
                        </span>
                        <h2 class="display-6 fw-bold mb-3 text-brown-dark">Profil Singkat Perusahaan</h2>
                        <p class="text-brown-medium mb-3">
                            PT. MITRA NUSA KONSULINDO adalah perusahaan konsultan yang menekuni bidang jasa Konsultansi Teknik
                            dan Manajemen sebagai profesi, disiapkan untuk memberikan bantuan dan pelayanan dalam berbagai kegiatan
                            yang berkaitan dengan Perencanaan Umum, Studi Kelayakan, Perencanaan Teknik, Dokumen Lingkungan,
                            Pengawasan Teknik, Penelitian serta pengembangan berbagai bidang lainnya.
                        </p>
                        <p class="text-brown-medium mb-4">
                            Dalam menyelesaikan setiap penugasan, perusahaan menerapkan sistem penyelesaian teknik dan administrasi
                            secara profesional, didukung tenaga ahli berpengalaman dan tenaga muda berbakat sehingga pekerjaan
                            berdaya guna dan berhasil guna secara maksimal.
                        </p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Berdiri</span>
                                    <span class="value">Tahun 2020</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Bentuk Usaha</span>
                                    <span class="value">Perseroan Terbatas (PT)</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Domisili</span>
                                    <span class="value">Gedung Graha Mulia Sejahtera, Jl. Terusan Jakarta No. 175A, Antapani - Bandung 40291</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="info-pill">
                                    <span class="label">Asosiasi</span>
                                    <span class="value">Anggota INKINDO & KADIN</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('about') }}" class="btn btn-outline-brown-3d rounded-pill px-4">
                                Profil Lengkap Perusahaan
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Latar Belakang & Filosofi -->
                <div class="col-lg-6">
                    <div class="card border-0 bg-transparent">
                        <h3 class="h3 fw-bold mb-3 text-brown-dark">Latar Belakang & Cara Pandang</h3>
                        <p class="text-brown-medium mb-3">
                            Menghadapi proses perubahan yang sangat cepat dan kompleks, perusahaan menyadari perlunya visi dan misi
                            yang akurat dengan landasan pengalaman, kebijakan, kreativitas, kecepatan bertindak, dan dukungan teknologi
                            tinggi agar setiap perubahan serta permasalahan dapat diselesaikan secara tepat.
                        </p>
                        <p class="text-brown-medium mb-4">
                            PT. MITRA NUSA KONSULINDO tumbuh dan berkembang atas kepercayaan rekanan dan mitra kerja yang terjalin
                            dalam suatu jaringan kerja sama saling menguntungkan. Perusahaan selalu siap menerima tawaran kerja sama
                            dari instansi pemerintah maupun swasta dalam bidang profesinya.
                        </p>

                        <ul class="list-unstyled premium-list">
                            <li>
                                <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                Berpandangan ke depan dengan visi dan misi yang tajam.
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                Didukung tenaga ahli berpengalaman dan tenaga muda potensial.
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                Penanganan proyek secara profesional, efektif, dan efisien.
                            </li>
                            <li>
                                <i class="fas fa-check-circle text-cream-gold me-2"></i>
                                Terbuka untuk kerja sama jangka panjang yang saling menguntungkan.
                            </li>
                        </ul>

                        <div class="mt-4 d-flex flex-wrap gap-3">
                            <div class="mini-card">
                                <span class="label">Telepon</span>
                                <span class="value">+62 22-20502071</span>
                            </div>
                            <div class="mini-card">
                                <span class="label">Email</span>
                                <span class="value">mitranusa.kons@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- SECTION: Legalitas & Identitas Badan Usaha -->
    <section class="py-7 bg-cream-light position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>

        <div class="container">
            <div class="row mb-4 align-items-end">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-bold mb-2 text-brown-dark">Legalitas & Identitas Perusahaan</h2>
                    <p class="lead text-brown-medium mb-0">
                        Legalitas lengkap dan keanggotaan asosiasi resmi menjadi dasar kepercayaan dalam setiap kerja sama.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('certifications.index') }}" class="btn btn-outline-brown-3d rounded-pill px-4">
                        Detail Sertifikasi & Legalitas
                    </a>
                </div>
            </div>

            <div class="row g-4">
                <!-- Kolom 1 -->
                <div class="col-md-4">
                    <div class="legal-card shadow-3d h-100 hover-3d-card">
                        <h5 class="fw-bold text-brown-dark mb-3"><i class="fas fa-file-signature me-2 text-cream-gold"></i>Akte & Pengesahan</h5>
                        <ul class="list-unstyled small text-brown-medium mb-0">
                            <li><strong>Akte Pendirian</strong> No. 19, Notaris Susyana Herlawati, SH, M.Kn, 22 Oktober 2020.</li>
                            <li class="mt-2"><strong>Akte Perubahan</strong> No. 03, Notaris Susyana Herlawati, SH, M.Kn, 7 Desember 2023.</li>
                            <li class="mt-2"><strong>Pengesahan Kemenkumham</strong> No. AHU-0057316.AH.01.01.TAHUN 2020, tanggal 4 November 2020.</li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom 2 -->
                <div class="col-md-4">
                    <div class="legal-card shadow-3d h-100 hover-3d-card">
                        <h5 class="fw-bold text-brown-dark mb-3"><i class="fas fa-id-card me-2 text-cream-gold"></i>Perizinan & Nomor Resmi</h5>
                        <ul class="list-unstyled small text-brown-medium mb-0">
                            <li><strong>NPWP</strong> 96.431.796.0.429.000.</li>
                            <li class="mt-2"><strong>NIB / SIUJK / SIUP</strong> No. 0257011100093.</li>
                            <li class="mt-2"><strong>Izin Gangguan / Tempat Usaha</strong> No. 0257011100093.</li>
                            <li class="mt-2"><strong>Relasi Bank</strong> Bank BJB & Bank Mandiri (rekening operasional).</li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom 3 -->
                <div class="col-md-4">
                    <div class="legal-card shadow-3d h-100 hover-3d-card">
                        <h5 class="fw-bold text-brown-dark mb-3"><i class="fas fa-users-cog me-2 text-cream-gold"></i>Asosiasi & Keanggotaan</h5>
                        <ul class="list-unstyled small text-brown-medium mb-0">
                            <li><strong>INKINDO</strong> Ikatan Nasional Konsultan Indonesia, No. Anggota: 17744/P/1304.JB.</li>
                            <li class="mt-2"><strong>KADIN</strong> Kamar Dagang dan Industri, No. Anggota: 20112-2026270629.</li>
                            <li class="mt-2">Sertifikat Badan Usaha Jasa Konsultansi Konstruksi & Non Konstruksi dengan berbagai klasifikasi layanan.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Logo Sertifikasi (dengan jarak cukup) -->
            <div class="row g-4 align-items-center justify-content-center mt-6">
                @foreach(['inkindo', 'sbu', 'iso-9001', 'iso-14001', 'kemenkumham'] as $cert)
                    <div class="col-lg-2 col-md-3 col-4">
                        <div class="cert-card-3d">
                            <div class="cert-inner">
                                <img src="{{ asset('images/certificates/' . $cert . '.png') }}"
                                     alt="{{ strtoupper($cert) }}"
                                     class="img-fluid cert-logo">
                                <div class="cert-hover-info">
                                    <span>{{ str_replace('-', ' ', strtoupper($cert)) }}</span>
                                </div>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}

    <!-- SECTION: Lingkup Layanan Utama -->
    <section id="services" class="py-7 bg-light position-relative">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="display-5 fw-bold mb-3 text-brown-dark">Lingkup Layanan Utama</h2>
                    <p class="lead text-brown-medium">
                        Berdasarkan kelompok bidang yang dapat ditangani, PT. MITRA NUSA KONSULINDO menyediakan jasa konsultansi
                        yang mencakup layanan konstruksi dan non konstruksi, dari tahap studi hingga pengawasan pelaksanaan.
                    </p>
                </div>
            </div>

            <div class="row g-4 mb-4">
                <!-- Konstruksi -->
                <div class="col-lg-6">
                    <div class="service-group-card shadow-3d h-100 hover-3d-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle bg-brown-subtle text-brown-dark me-3">
                                <i class="fas fa-hard-hat fa-lg"></i>
                            </div>
                            <div>
                                <h3 class="h4 fw-bold text-brown-dark mb-1">Konsultansi Konstruksi</h3>
                                <p class="text-brown-medium mb-0 small">
                                    Jasa arsitektur, rekayasa, dan tata ruang sesuai klasifikasi Sertifikat Badan Usaha.
                                </p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <ul class="list-unstyled small text-brown-medium mb-0">
                                    <li><strong>Jasa Arsitektural Bangunan Gedung Hunian & Non Hunian (AR001)</strong></li>
                                    <li class="mt-1"><strong>Jasa Arsitektural Lainnya (AR002)</strong></li>
                                    <li class="mt-1"><strong>Jasa Desain Interior Bangunan Gedung & Bangunan Sipil (AR003)</strong></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled small text-brown-medium mb-0">
                                    <li><strong>Jasa Rekayasa Konstruksi Bangunan Gedung Hunian & Non Hunian (RK001)</strong></li>
                                    <li class="mt-1"><strong>Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air (RK002)</strong></li>
                                    <li class="mt-1"><strong>Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi (RK003)</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('services.construction') }}" class="btn btn-outline-brown-3d btn-sm rounded-pill px-3">
                                Lihat Detail Layanan Konstruksi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Non-Konstruksi -->
                <div class="col-lg-6">
                    <div class="service-group-card shadow-3d h-100 hover-3d-card">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle bg-cream-gold-subtle text-cream-gold me-3">
                                <i class="fas fa-industry fa-lg"></i>
                            </div>
                            <div>
                                <h3 class="h4 fw-bold text-brown-dark mb-1">Konsultansi Non Konstruksi</h3>
                                <p class="text-brown-medium mb-0 small">
                                    Meliputi pengembangan wilayah, studi, manajemen, dan jasa khusus di berbagai sektor.
                                </p>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <ul class="list-unstyled small text-brown-medium mb-0">
                                    <li><strong>Pengembangan Pertanian & Perdesaan</strong> (prasarana sosial, kehutanan, perikanan, dll.).</li>
                                    <li class="mt-1"><strong>Transportasi</strong> (sarana transportasi, regulasi, usaha jasa angkutan).</li>
                                    <li class="mt-1"><strong>Telematika</strong> (telekomunikasi, perangkat keras, perangkat lunak, konten).</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled small text-brown-medium mb-0">
                                    <li><strong>Jasa Konsultansi Manajemen</strong> (sistem akuntansi, SDM, hukum bisnis).</li>
                                    <li class="mt-1"><strong>Jasa Studi, Penelitian & Bantuan Teknis</strong> (studi makro, kelayakan, perencanaan umum).</li>
                                    <li class="mt-1"><strong>Jasa Khusus & Jasa Survey</strong> (survey teknis, GIS, appraisal, inspeksi teknik, kehumasan).</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="{{ route('services') }}" class="btn btn-outline-brown-3d btn-sm rounded-pill px-3">
                                Layanan Non-Konstruksi Lengkap
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4 kartu ringkas dengan efek 3D -->
            <div class="row g-4 mt-2">
                @php
                    $services = [
                        ['icon' => 'fas fa-drafting-compass', 'title' => 'Desain Arsitektural', 'desc' => 'Desain skematik, pengembangan desain, hingga desain akhir untuk bangunan dan struktur, termasuk nasihat arsitektural menyeluruh.', 'color' => 'brown', 'link' => 'services.architectural'],
                        ['icon' => 'fas fa-water', 'title' => 'Rekayasa Sumber Daya Air', 'desc' => 'Perencanaan dam, irigasi, pengendalian banjir, penyaluran air, sanitasi, dan sistem saluran limbah.', 'color' => 'brown-medium', 'link' => 'services.engineering'],
                        ['icon' => 'fas fa-road', 'title' => 'Rekayasa Transportasi', 'desc' => 'Desain jalan, jembatan, jalan layang, termasuk structural health monitoring system untuk bentang jembatan.', 'color' => 'brown-light', 'link' => 'services.engineering'],
                        ['icon' => 'fas fa-chart-line', 'title' => 'Studi & Manajemen', 'desc' => 'Studi kelayakan, studi makro, perencanaan umum, konsultansi manajemen dan pengembangan sistem.', 'color' => 'cream-gold', 'link' => 'services.non-construction']
                    ];
                @endphp
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card-3d hover-3d-card">
                            <div class="service-card-inner">
                                <div class="service-icon-wrapper mb-3">
                                    <i class="{{ $service['icon'] }} fa-2x text-brown-dark"></i>
                                </div>
                                <h5 class="fw-bold text-brown-dark mb-2">{{ $service['title'] }}</h5>
                                <p class="text-brown-medium small mb-4">{{ $service['desc'] }}</p>
                                <a href="{{ route($service['link']) }}" class="btn btn-outline-brown-3d rounded-pill px-3 py-2 w-100">
                                    Selengkapnya <i class="fas fa-arrow-right ms-2"></i>
                                </a>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5 mb-5">
                <a href="{{ route('services') }}" class="btn btn-outline-brown-3d rounded-pill px-5">
                    <i class="fas fa-list me-2"></i>Lihat Semua Layanan
                </a>
            </div>
        </div>
    </section>

    {{-- <!-- SECTION: Struktur Pengurus (ringkas) -->
    <section class="py-7 bg-cream-medium position-relative overflow-hidden">
        <div class="container">
            <div class="row mb-4 align-items-end">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-bold text-brown-dark mb-2">Pengurus & Organisasi</h2>
                    <p class="text-brown-medium mb-0">
                        Struktur organisasi yang jelas memastikan setiap proyek ditangani oleh tim dengan kapabilitas yang tepat.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('about') }}#organization" class="btn btn-outline-brown-3d rounded-pill px-4">
                        Lihat Struktur Organisasi Lengkap
                    </a>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="team-card-3d hover-3d-card">
                        <div class="team-card-inner">
                            <div class="team-icon-wrapper mb-3">
                                <i class="fas fa-user-tie fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">Dewan Komisaris</h5>
                            <ul class="list-unstyled small text-brown-medium">
                                <li><strong>Komisaris Utama:</strong> Dede Samsul Muharom.</li>
                                <li class="mt-2"><strong>Komisaris:</strong> Endah Nuraeni.</li>
                            </ul>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="team-card-3d hover-3d-card">
                        <div class="team-card-inner">
                            <div class="team-icon-wrapper mb-3">
                                <i class="fas fa-user-cog fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">Dewan Direksi</h5>
                            <ul class="list-unstyled small text-brown-medium">
                                <li><strong>Direktur Utama:</strong> Muria Cipta, ST.</li>
                                <li class="mt-2"><strong>Direktur:</strong> Andri Hendrawan.</li>
                            </ul>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="team-card-3d hover-3d-card">
                        <div class="team-card-inner">
                            <div class="team-icon-wrapper mb-3">
                                <i class="fas fa-sitemap fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-2">Divisi Teknis & Pendukung</h5>
                            <p class="small text-brown-medium mb-0">
                                Terdiri dari divisi Tata Ruang, Arsitektur & Landscaping, Lingkungan, Sipil, Manajemen, Keuangan, Administrasi & Personalia, Pemasaran & Relasi, serta tenaga ahli dan tenaga pendukung.
                            </p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- CTA PREMIUM -->
    <section class="py-7 cta-elegant position-relative overflow-hidden">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Siap Mengikutsertakan Kami Dalam Proyek Anda?</h2>
                        <p class="lead mb-0">
                            Adalah suatu kehormatan besar bagi kami apabila Relasi dan Klien berkenan memberikan kepercayaan
                            untuk bekerja sama, sehingga kami dapat membuktikan kinerja yang profesional dan saling menguntungkan.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-outline-brown-3d rounded-pill px-5 ">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Kami Sekarang
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
    /* Brown & Cream Color Palette */
    :root {
        --brown-dark: #5D4037;
        --brown-medium: #8B6B61;
        --brown-light: #A1887F;
        --cream-gold: #D4AF37;
        --cream-dark: #D7CCC8;
        --cream-medium: #EFEBE9;
        --cream-light: #F5F0ED;
        --white: #ffffff;
        --light: #f8f9fa;
        --light-gray: #e9ecef;
        --gray: #6c757d;
        --dark: #212529;
        --shadow-sm: 0 .125rem .25rem rgba(0,0,0,.075);
        --shadow-md: 0 .5rem 1rem rgba(0,0,0,.15);
        --shadow-lg: 0 1rem 3rem rgba(0,0,0,.175);
        --shadow-3d: 0 20px 40px rgba(93,64,55,0.2), 0 10px 20px rgba(0,0,0,0.1);
    }

    /* Text Colors */
    .text-brown-dark { color: var(--brown-dark) !important; }
    .text-brown-medium { color: var(--brown-medium) !important; }
    .text-brown-light { color: var(--brown-light) !important; }
    .text-cream-gold { color: var(--cream-gold) !important; }

    /* Background Colors */
    .bg-brown-dark { background-color: var(--brown-dark) !important; }
    .bg-brown-medium { background-color: var(--brown-medium) !important; }
    .bg-brown-light { background-color: var(--brown-light) !important; }
    .bg-cream-gold { background-color: var(--cream-gold) !important; }
    .bg-cream-light { background-color: var(--cream-light) !important; }
    .bg-cream-medium { background-color: var(--cream-medium) !important; }
    .bg-light-gradient {
        background: radial-gradient(circle at top left, #F5F0ED 0%, #ffffff 40%, #EFEBE9 100%);
    }

    /* Subtle Backgrounds */
    .bg-brown-subtle { background-color: rgba(93, 64, 55, 0.08) !important; }
    .bg-brown-medium-subtle { background-color: rgba(139, 107, 97, 0.12) !important; }
    .bg-brown-light-subtle { background-color: rgba(161, 136, 127, 0.12) !important; }
    .bg-cream-gold-subtle { background-color: rgba(212, 175, 55, 0.12) !important; }

    /* ===== 3D BUTTONS ===== */
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

    /* ===== 3D CARD HOVER EFFECT ===== */
    .hover-3d-card {
        perspective: 1000px;
        transform-style: preserve-3d;
        transition: all 0.4s;
    }

    .hover-3d-card:hover {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    /* ===== SERVICE CARD 3D ===== */
    .service-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .service-card-inner {
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
        text-align: center;
    }
    .service-card-3d:hover .service-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }
    .service-icon-wrapper {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        transition: all 0.3s;
    }
    .service-card-3d:hover .service-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* ===== TEAM CARD 3D ===== */
    .team-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .team-card-inner {
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
        text-align: center;
    }
    .team-card-3d:hover .team-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }
    .team-icon-wrapper {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        transition: all 0.3s;
    }
    .team-card-3d:hover .team-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* ===== CERTIFICATION CARD 3D ===== */
    .cert-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .cert-inner {
        background: white;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: var(--shadow-3d);
        border: 1px solid rgba(93,64,55,0.1);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .cert-card-3d:hover .cert-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }
    .cert-logo {
        max-height: 50px;
        max-width: 100%;
        filter: grayscale(30%);
        transition: all 0.3s;
    }
    .cert-card-3d:hover .cert-logo {
        filter: grayscale(0);
        transform: scale(1.05);
    }
    .cert-hover-info {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(93,64,55,0.9);
        color: white;
        font-size: 0.6rem;
        padding: 0.3rem;
        text-align: center;
        transform: translateY(100%);
        transition: transform 0.3s;
        white-space: normal;
        word-wrap: break-word;
        line-height: 1.2;
    }
    .cert-card-3d:hover .cert-hover-info {
        transform: translateY(0);
    }

    /* ===== DECORATIVE CORNERS ===== */
    .card-corner {
        position: absolute;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, transparent 50%, rgba(212,175,55,0.1) 50%);
        z-index: 1;
    }
    .card-corner.corner-1 { top: 0; right: 0; transform: rotate(90deg); }
    .card-corner.corner-2 { bottom: 0; left: 0; transform: rotate(270deg); }

    /* ===== BACKGROUND DECORATIONS ===== */
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
        background: rgba(212,175,55,0.03);
        width: 300px;
        height: 300px;
    }
    .decoration-circle:nth-child(1) { top: -100px; right: -100px; background: rgba(93,64,55,0.02); animation: float 25s infinite; }
    .decoration-circle:nth-child(2) { bottom: -50px; left: -50px; width: 200px; height: 200px; background: rgba(212,175,55,0.02); animation: float 20s infinite reverse; }

    @keyframes float {
        0%, 100% { transform: translateY(0) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(180deg); }
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

    /* HERO SECTION */
    .hero-section {
        position: relative;
        min-height: 100vh;
        color: white;
    }

    .hero-slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }

    .slider-track {
        display: flex;
        width: 400%;
        height: 100%;
        transition: transform 1s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .slide {
        position: relative;
        width: 100%;
        height: 100%;
        flex-shrink: 0;
    }

    .slide-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transform-origin: center;
        animation: kenburns 20s infinite;
    }

    @keyframes kenburns {
        0% { transform: scale(1); }
        50% { transform: scale(1.08); }
        100% { transform: scale(1); }
    }

    .slide-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background:
            linear-gradient(135deg, rgba(92, 64, 51, 0.85) 0%, rgba(210, 180, 140, 0.9) 100%);
        mix-blend-mode: multiply;
    }

    .slide-content {
        position: absolute;
        bottom: 16%;
        right: 10%;
        color: white;
        text-align: right;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease;
    }

    .slide.active .slide-content {
        opacity: 1;
        transform: translateY(0);
    }

    .slide-content h3 {
        font-size: 1.85rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    .slide-content p {
        font-size: 1.05rem;
        opacity: 0.9;
    }

    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        backdrop-filter: blur(6px);
    }

    .slider-nav:hover {
        background: rgba(255, 255, 255, 0.32);
        transform: translateY(-50%) scale(1.08);
    }

    .slider-nav.prev { left: 30px; }
    .slider-nav.next { right: 30px; }

    .slider-dots {
        position: absolute;
        bottom: 28px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 12px;
        z-index: 10;
    }

    .slider-dots .dot {
        width: 10px;
        height: 10px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.6);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .slider-dots .dot.active {
        width: 24px;
        background: white;
    }

    .hero-section .container {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        letter-spacing: -0.03em;
        text-shadow: 0 18px 40px rgba(0,0,0,0.5);
    }

    .text-gradient-brown {
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-lead {
        text-shadow: 0 4px 18px rgba(0,0,0,0.4);
    }

    .subtitle-wrapper .h4 {
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    /* Teks Spesialis - bisa wrap */
    .specialist-text-wrapper {
        max-width: 800px;
        margin: 0 auto;
        padding: 0.5rem 1rem;
        background: rgba(0,0,0,0.2);
        border-radius: 50px;
        backdrop-filter: blur(4px);
    }

    .specialist-text {
        display: block;
        font-size: 1rem;
        line-height: 1.6;
        word-wrap: break-word;
        text-shadow: 0 2px 4px rgba(0,0,0,0.3);
    }

    @media (max-width: 768px) {
        .specialist-text {
            font-size: 0.9rem;
        }
    }

    @media (max-width: 576px) {
        .specialist-text {
            font-size: 0.8rem;
        }
    }

    .company-badge .badge {
        backdrop-filter: blur(10px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        border: 1px solid rgba(255,255,255,0.3);
    }

    .stats-wrapper {
        padding: 2.5rem 2rem;
        margin-top: 2rem !important;
    }

    .glass-panel {
        background: linear-gradient(135deg, rgba(255,255,255,0.28), rgba(255,255,255,0.15));
        backdrop-filter: blur(18px);
        -webkit-backdrop-filter: blur(18px);
        border-radius: 1.5rem;
        border: 1px solid rgba(255,255,255,0.35);
    }

    .stat-number {
        font-weight: 700;
        line-height: 1;
        margin-bottom: 0.5rem !important;
        text-shadow: 0 4px 18px rgba(0,0,0,0.6);
    }

    .stat-label {
        font-size: 0.9rem;
        letter-spacing: 0.03em;
        text-transform: uppercase;
    }

    .scroll-indicator {
        margin-top: 1.5rem;
    }

    .scroll-down {
        color: var(--dark);
        font-size: 1.4rem;
        animation: bounce 2s infinite;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.92);
        box-shadow: var(--shadow-sm);
        border: 1px solid rgba(0,0,0,0.05);
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-8px); }
        60% { transform: translateY(-4px); }
    }

    /* About Section */
    .floating-badge {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        background: rgba(93, 64, 55, 0.06);
        padding: 0.45rem 0.95rem;
        border-radius: 999px;
        font-size: 0.8rem;
        color: var(--brown-dark);
        font-weight: 600;
        letter-spacing: 0.03em;
        text-transform: uppercase;
    }

    .info-pill {
        background: linear-gradient(145deg, #fdfaf7, #f3ebe4);
        border-radius: 999px;
        padding: 0.6rem 1.1rem;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 25px rgba(0,0,0,0.06);
        border: 1px solid rgba(139,107,97,0.18);
    }

    .info-pill .label {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--brown-medium);
        margin-bottom: 0.1rem;
    }

    .info-pill .value {
        font-size: 0.88rem;
        font-weight: 600;
        color: var(--brown-dark);
    }

    .mini-card {
        background: #ffffff;
        border-radius: 0.9rem;
        padding: 0.7rem 1rem;
        box-shadow: 0 8px 20px rgba(0,0,0,0.05);
        border: 1px solid rgba(139,107,97,0.12);
    }

    .mini-card .label {
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        color: var(--brown-medium);
        display: block;
    }

    .mini-card .value {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--brown-dark);
    }

    .premium-list li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 0.55rem;
        font-size: 0.92rem;
    }

    /* Legal Cards & Service Group Cards */
    .legal-card, .service-group-card {
        background: #ffffff;
        border-radius: 1.25rem;
        padding: 1.5rem 1.6rem;
        border: 1px solid rgba(93,64,55,0.12);
    }


    .shadow-3d {
        box-shadow:
            0 18px 40px rgba(0,0,0,0.18),
            0 2px 4px rgba(255,255,255,0.4) inset;
        border-radius: 1.25rem !important;
    }

    .shadow-soft {
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    }

    .btn {
        font-weight: 600;
        letter-spacing: 0.02em;
        transition: all 0.3s ease;
        border-radius: 999px;
    }

    .btn-brown {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }

    .btn-brown:hover {
        background-color: #4A342E;
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-cream {
        background-color: white;
        border-color: white;
        color: var(--brown-dark);
    }

    .btn-cream:hover {
        background-color: #f8f9fa;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-cream {
        border-color: rgba(255,255,255,0.8);
        color: white;
        background: transparent;
    }

    .btn-outline-cream:hover {
        background-color: white;
        color: var(--brown-dark);
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .btn-outline-brown-dark {
        border-color: var(--brown-dark);
        color: var(--brown-dark);
        background: transparent;
    }

    .btn-outline-brown-dark:hover {
        background-color: var(--brown-dark);
        color: white;
        box-shadow: var(--shadow-md);
    }

    /* CTA Section - Elegant Brown Cream */
    .cta-elegant {
        background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-elegant::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 20% 30%, rgba(92, 64, 51, 0.14) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(210, 180, 140, 0.16) 0%, transparent 55%);
    }

    .cta-content-wrapper {
        position: relative;
        z-index: 2;
        padding: 3rem;
        background: rgba(255, 255, 255, 0.92);
        border-radius: 1.5rem;
        box-shadow: 0 14px 40px rgba(0, 0, 0, 0.12);
        border: 1px solid rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(14px);
    }

    .cta-elegant h2 {
        background: linear-gradient(135deg, #5D4037, #8B6B61);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .cta-elegant .lead {
        color: #5D4037;
    }

    /* Utility classes for spacing */
    .py-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }

    .mt-6 {
        margin-top: 4rem !important;
    }

    .mb-5 {
        margin-bottom: 3rem !important;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .display-1 {
            font-size: 3rem !important;
        }

        .stats-wrapper {
            padding: 1.8rem 1.4rem;
        }

        .cta-content-wrapper {
            padding: 2.2rem 1.8rem;
        }
    }

    @media (max-width: 768px) {
        .slider-nav {
            display: none;
        }

        .slide-content {
            bottom: 10%;
            right: 5%;
            left: 5%;
            text-align: center;
        }

        .display-1 {
            font-size: 2.4rem !important;
        }

        .cta-buttons .btn {
            width: 100%;
            max-width: 280px;
            margin: 0.5rem auto !important;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }

        .cta-content-wrapper {
            padding: 1.8rem 1.4rem;
        }
    }

    @media (max-width: 576px) {
        .badge.bg-brown-dark {
            font-size: 0.8rem;
            padding: 0.5rem 0.9rem;
        }

        .info-pill {
            padding: 0.5rem 0.9rem;
        }

        .legal-card,
        .service-group-card,
        .org-card {
            padding: 1.25rem 1.3rem;
        }
    }

    html {
        scroll-behavior: smooth;
    }
</style>
<!-- Animate.css for hero animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== SLIDER =====
        const sliderTrack = document.querySelector('.slider-track');
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prevBtn = document.querySelector('.slider-nav.prev');
        const nextBtn = document.querySelector('.slider-nav.next');
        let currentSlide = 0;
        let slideInterval;

        function updateSlider() {
            if (!sliderTrack) return;
            sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
            slides.forEach((slide, index) => slide.classList.toggle('active', index === currentSlide));
            dots.forEach((dot, index) => dot.classList.toggle('active', index === currentSlide));
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            updateSlider();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            updateSlider();
        }

        function startAutoSlide() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 6000);
        }

        function stopAutoSlide() {
            clearInterval(slideInterval);
        }

        if (prevBtn && nextBtn && sliderTrack) {
            prevBtn.addEventListener('click', () => { prevSlide(); stopAutoSlide(); startAutoSlide(); });
            nextBtn.addEventListener('click', () => { nextSlide(); stopAutoSlide(); startAutoSlide(); });
        }

        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentSlide = parseInt(this.dataset.slide);
                updateSlider();
                stopAutoSlide();
                startAutoSlide();
            });
        });

        const slider = document.querySelector('.hero-slider');
        if (slider) {
            slider.addEventListener('mouseenter', stopAutoSlide);
            slider.addEventListener('mouseleave', startAutoSlide);
        }

        if (slides.length > 0) {
            updateSlider();
            startAutoSlide();
        }

        // ===== STATS COUNTER =====
        const statsSection = document.querySelector('.stats-wrapper');
        if (statsSection) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const stats = entry.target.querySelectorAll('.stat-number');
                        stats.forEach(stat => {
                            const target = parseInt(stat.getAttribute('data-target') || stat.textContent.replace('+', ''));
                            let current = 0;
                            const increment = Math.max(1, Math.floor(target / 50));
                            const timer = setInterval(() => {
                                current += increment;
                                if (current >= target) {
                                    current = target;
                                    clearInterval(timer);
                                }
                                stat.textContent = current + '+';
                            }, 30);
                        });
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            observer.observe(statsSection);
        }

        // ===== SCROLL ANIMATION FOR CARDS =====
        const animateItems = document.querySelectorAll('.service-card-3d, .team-card-3d, .legal-card, .service-group-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, { threshold: 0.1 });
        animateItems.forEach(el => observer.observe(el));
    });
</script>
@endpush
