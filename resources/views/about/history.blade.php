@extends('layouts.app')

@section('title', 'Sejarah Perusahaan - PT Mitra Nusa Konsulindo')
@section('description', 'Sejarah dan perjalanan PT Mitra Nusa Konsulindo sejak berdiri tahun 2020 hingga menjadi perusahaan konsultan terpercaya.')

@section('content')
    <!-- Clean Page Header -->
    <section class="page-header-clean py-7 bg-gradient-light-cream position-relative overflow-hidden">
        <div class="container position-relative z-2">
            <!-- Breadcrumb Clean -->
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb breadcrumb-clean">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home me-2"></i>Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('about') }}">Tentang Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
                </ol>
            </nav>

            <!-- Header Content -->
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-content">
                        <div class="header-badge mb-3">
                            <span class="badge bg-brown-light text-white">Sejarah Kami</span>
                        </div>
                        <h1 class="display-5 fw-bold text-brown-dark mb-4">
                            <span class="text-gradient-brown">Jejak Langkah</span> Perusahaan
                        </h1>
                        <p class="lead text-brown-medium mb-5">
                            Menelusuri perjalanan inspiratif PT Mitra Nusa Konsulindo dari awal berdiri 
                            hingga tumbuh menjadi mitra konsultan terpercaya di Indonesia.
                        </p>

                        <!-- Action Buttons -->
                        <div class="header-actions mt-5">
                            <div class="action-buttons">
                                <a href="{{ route('about') }}" class="btn btn-outline-brown rounded-pill px-4 py-2">
                                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Profil
                                </a>
                                <a href="{{ route('about.vision-mission') }}" class="btn btn-brown rounded-pill px-4 py-2">
                                    <i class="fas fa-eye me-2"></i>Visi & Misi
                                </a>
                                <a href="{{ route('about.organization') }}" class="btn btn-outline-brown rounded-pill px-4 py-2">
                                    <i class="fas fa-sitemap me-2"></i>Struktur Organisasi
                                </a>
                            </div>

                            <!-- Quick Stats -->
                            <div class="quick-stats mt-4">
                                <div class="stats-grid">
                                    <div class="stat-item">
                                        <i class="fas fa-calendar-alt stat-icon"></i>
                                        <div class="stat-content">
                                            <span class="stat-number">4+</span>
                                            <span class="stat-label">Tahun Beroperasi</span>
                                        </div>
                                    </div>
                                    <div class="stat-item">
                                        <i class="fas fa-user-tie stat-icon"></i>
                                        <div class="stat-content">
                                            <span class="stat-number">15+</span>
                                            <span class="stat-label">Tenaga Ahli</span>
                                        </div>
                                    </div>
                                    <div class="stat-item">
                                        <i class="fas fa-project-diagram stat-icon"></i>
                                        <div class="stat-content">
                                            <span class="stat-number">50+</span>
                                            <span class="stat-label">Proyek Selesai</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-center d-none d-lg-block">
                    <div class="header-visual">
                        <div class="timeline-visual">
                            <div class="timeline-dot dot-1"></div>
                            <div class="timeline-dot dot-2"></div>
                            <div class="timeline-dot dot-3"></div>
                            <div class="timeline-dot dot-4"></div>
                            <div class="timeline-dot dot-5"></div>
                            <div class="timeline-line"></div>
                        </div>
                        <div class="history-icon">
                            <i class="fas fa-history"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wave Decoration -->
        <div class="wave-decoration">
            <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".1"></path>
                <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".2"></path>
            </svg>
        </div>
    </section>

    <!-- Main Timeline Section -->
    <section class="py-8 bg-white">
        <div class="container">
            <!-- Section Header -->
            <div class="section-header text-center mb-6">
                <h2 class="section-title fw-bold text-brown-dark mb-3">Perjalanan Perusahaan</h2>
                <p class="section-subtitle text-brown-medium">Setiap tahun menandai pencapaian baru dalam perjalanan kami menuju keunggulan</p>
                <div class="section-divider mx-auto"></div>
            </div>

            <!-- Vertical Timeline -->
            <div class="timeline-vertical">
                <!-- 2020 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-circle">
                            <span class="year">2020</span>
                        </div>
                        <div class="marker-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="year-tag">2020</div>
                                <div class="status-tag status-foundation">Awal Mula</div>
                            </div>
                            <h3 class="card-title">Pendirian Perusahaan</h3>
                            <p class="card-text">
                                PT Mitra Nusa Konsulindo secara resmi berdiri dengan visi menjadi 
                                perusahaan konsultan terpercaya di bidang konstruksi dan non-konstruksi.
                            </p>
                            <div class="card-milestones">
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Perseroan Terbatas</strong>
                                        <small>Terdaftar sebagai PT resmi</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-file-contract"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Legalitas Lengkap</strong>
                                        <small>NPWP & NIB perusahaan</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Keanggotaan Profesi</strong>
                                        <small>Bergabung dengan INKINDO</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2021 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-circle">
                            <span class="year">2021</span>
                        </div>
                        <div class="marker-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="year-tag">2021</div>
                                <div class="status-tag status-expansion">Ekspansi</div>
                            </div>
                            <h3 class="card-title">Pengembangan Jasa & Sertifikasi</h3>
                            <p class="card-text">
                                Tahun pertama operasional diisi dengan pengembangan layanan dan 
                                perolehan sertifikasi yang diperlukan untuk operasional profesional.
                            </p>
                            <div class="card-milestones">
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Sertifikasi SBU</strong>
                                        <small>Mendapatkan sertifikasi pertama</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-expand"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Portofolio Jasa</strong>
                                        <small>Penambahan jasa non-konstruksi</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-landmark"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Proyek Pemerintah</strong>
                                        <small>Proyek pertama untuk pemerintah daerah</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2022 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-circle">
                            <span class="year">2022</span>
                        </div>
                        <div class="marker-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="year-tag">2022</div>
                                <div class="status-tag status-growth">Pertumbuhan</div>
                            </div>
                            <h3 class="card-title">Konsolidasi & Pengembangan</h3>
                            <p class="card-text">
                                Periode pertumbuhan signifikan dengan penguatan tim profesional 
                                dan perluasan basis klien di berbagai sektor.
                            </p>
                            <div class="card-milestones">
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Tim Profesional</strong>
                                        <small>Ekspansi tim ahli menjadi 15+ orang</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-cogs"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Sistem Manajemen</strong>
                                        <small>Pengembangan sistem manajemen mutu</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-handshake-simple"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Kemitraan Strategis</strong>
                                        <small>Kerjasama dengan perusahaan swasta nasional</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2023 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-circle">
                            <span class="year">2023</span>
                        </div>
                        <div class="marker-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="year-tag">2023</div>
                                <div class="status-tag status-recognition">Pengakuan</div>
                            </div>
                            <h3 class="card-title">Pengakuan & Ekspansi Regional</h3>
                            <p class="card-text">
                                Tahun pencapaian dengan pengakuan profesional dan ekspansi 
                                layanan ke wilayah regional di Indonesia.
                            </p>
                            <div class="card-milestones">
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-certificate"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Sertifikasi ISO</strong>
                                        <small>ISO 9001:2015 untuk mutu layanan</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-map-marked-alt"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Ekspansi Regional</strong>
                                        <small>Layanan ke Jawa Tengah & Timur</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-trophy"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Penghargaan</strong>
                                        <small>Konsultan terpercaya tahun 2023</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2024 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <div class="marker-circle">
                            <span class="year">2024+</span>
                        </div>
                        <div class="marker-line"></div>
                    </div>
                    <div class="timeline-content">
                        <div class="timeline-card">
                            <div class="card-header">
                                <div class="year-tag">2024 - Sekarang</div>
                                <div class="status-tag status-innovation">Inovasi</div>
                            </div>
                            <h3 class="card-title">Inovasi & Masa Depan</h3>
                            <p class="card-text">
                                Fokus pada pengembangan solusi inovatif dan persiapan 
                                untuk tantangan masa depan dalam industri konsultansi.
                            </p>
                            <div class="card-milestones">
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-laptop-code"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Digitalisasi Layanan</strong>
                                        <small>Sistem konsultansi digital terintegrasi</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-leaf"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Konsultansi Lingkungan</strong>
                                        <small>Ekspansi ke jasa lingkungan berkelanjutan</small>
                                    </div>
                                </div>
                                <div class="milestone">
                                    <div class="milestone-icon">
                                        <i class="fas fa-university"></i>
                                    </div>
                                    <div class="milestone-text">
                                        <strong>Kemitraan Akademik</strong>
                                        <small>Kolaborasi dengan perguruan tinggi</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founding Story Section -->
    <section class="py-8 bg-cream-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="founder-story">
                        <div class="section-header mb-5">
                            <h2 class="section-title fw-bold text-brown-dark mb-3">Cerita Pendirian</h2>
                            <p class="section-subtitle text-brown-medium">Inspirasi di balik berdirinya PT Mitra Nusa Konsulindo</p>
                            <div class="section-divider"></div>
                        </div>

                        <div class="story-content">
                            <p class="story-text">
                                <span class="dropcap">D</span>idirikan oleh sekelompok profesional dengan visi yang sama, 
                                PT Mitra Nusa Konsulindo lahir dari keinginan untuk menciptakan perusahaan 
                                konsultan yang tidak hanya berorientasi pada profit, tetapi juga memberikan 
                                kontribusi nyata bagi pembangunan Indonesia.
                            </p>
                            
                            <p class="story-text">
                                Dengan latar belakang pengalaman yang beragam di bidang konstruksi, manajemen proyek, 
                                dan konsultansi kelembagaan, para pendiri melihat potensi besar dalam memberikan 
                                solusi terintegrasi yang mengedepankan profesionalisme dan inovasi.
                            </p>

                            <div class="quote-box mt-5">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <blockquote class="quote-text">
                                    "Kami percaya bahwa setiap proyek adalah kesempatan untuk menciptakan 
                                    nilai tambah dan memberikan dampak positif yang berkelanjutan."
                                </blockquote>
                                <div class="quote-author">
                                    <div class="author-line"></div>
                                    <cite>— Pendiri PT Mitra Nusa Konsulindo</cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="founder-visual">
                        <!-- Vision Card -->
                        <div class="vision-card mb-4">
                            <div class="card-icon">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Visi Pendirian</h4>
                                <p class="card-text">
                                    Menciptakan perusahaan konsultan yang menjadi mitra terpercaya dalam 
                                    pembangunan infrastruktur dan kelembagaan di Indonesia.
                                </p>
                            </div>
                        </div>

                        <!-- Achievement Grid -->
                        <div class="achievement-grid">
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-rocket"></i>
                                </div>
                                <div class="achievement-content">
                                    <h5 class="achievement-number">4+</h5>
                                    <p class="achievement-text">Tahun Beroperasi</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <div class="achievement-content">
                                    <h5 class="achievement-number">15+</h5>
                                    <p class="achievement-text">Tenaga Ahli</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-project-diagram"></i>
                                </div>
                                <div class="achievement-content">
                                    <h5 class="achievement-number">50+</h5>
                                    <p class="achievement-text">Proyek Selesai</p>
                                </div>
                            </div>
                            <div class="achievement-card">
                                <div class="achievement-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="achievement-content">
                                    <h5 class="achievement-number">30+</h5>
                                    <p class="achievement-text">Klien Puas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values Section -->
    <section class="py-8 bg-white">
        <div class="container">
            <div class="section-header text-center mb-6">
                <h2 class="section-title fw-bold text-brown-dark mb-3">Nilai Inti Perusahaan</h2>
                <p class="section-subtitle text-brown-medium">Prinsip yang membimbing setiap langkah dan keputusan kami</p>
                <div class="section-divider mx-auto"></div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 class="value-title">Kemitraan</h4>
                        <p class="value-description">
                            Membangun hubungan jangka panjang yang saling menguntungkan dengan semua 
                            pemangku kepentingan berdasarkan kepercayaan dan transparansi.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-gem"></i>
                        </div>
                        <h4 class="value-title">Kualitas</h4>
                        <p class="value-description">
                            Tidak pernah berkompromi dengan kualitas layanan dalam setiap proyek 
                            yang kami tangani, dengan standar tertinggi dan perhatian pada detail.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="value-card">
                        <div class="value-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="value-title">Inovasi</h4>
                        <p class="value-description">
                            Terus mengembangkan solusi kreatif dan teknologi terkini untuk menjawab 
                            tantangan masa kini dan mempersiapkan masa depan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-6 bg-brown-dark text-white">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h3 class="fw-bold mb-3">Tertarik Mengetahui Lebih Lanjut?</h3>
                    <p class="mb-0 opacity-75">
                        Pelajari lebih dalam tentang visi, misi, dan struktur organisasi perusahaan kami.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                        <a href="{{ route('about.vision-mission') }}" class="btn btn-light rounded-pill px-4 py-2">
                            <i class="fas fa-eye me-2"></i>Visi & Misi
                        </a>
                        <a href="{{ route('about.organization') }}" class="btn btn-outline-light rounded-pill px-4 py-2">
                            <i class="fas fa-sitemap me-2"></i>Struktur Organisasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    /* === COLOR SYSTEM === */
    :root {
        --brown-dark: #3E2723;
        --brown-medium: #5D4037;
        --brown-light: #795548;
        --brown-soft: #8D6E63;
        --cream-dark: #BCAAA4;
        --cream-medium: #D7CCC8;
        --cream-light: #EFEBE9;
        --cream-lighter: #F5F0EB;
        --white: #FFFFFF;
    }

    /* === CLEAN HEADER === */
    .bg-gradient-light-cream {
        background: linear-gradient(135deg, #F9F5F3 0%, #EFEBE9 50%, #F5F0EB 100%);
        position: relative;
        overflow: hidden;
    }

    .wave-decoration {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 120px;
        color: var(--white);
        z-index: 1;
    }

    .wave-decoration svg {
        width: 100%;
        height: 100%;
        display: block;
    }

    /* Breadcrumb Clean */
    .breadcrumb-clean {
        background: transparent;
        padding: 0;
        margin-bottom: 1.5rem;
    }

    .breadcrumb-clean .breadcrumb-item {
        font-size: 0.9rem;
    }

    .breadcrumb-clean .breadcrumb-item a {
        color: var(--brown-medium);
        text-decoration: none;
        transition: color 0.2s;
    }

    .breadcrumb-clean .breadcrumb-item a:hover {
        color: var(--brown-dark);
    }

    .breadcrumb-clean .breadcrumb-item.active {
        color: var(--brown-dark);
        font-weight: 500;
    }

    .breadcrumb-clean .breadcrumb-item + .breadcrumb-item::before {
        color: var(--brown-light);
        content: "›";
        padding: 0 0.5rem;
    }

    /* Header Badge */
    .header-badge .badge {
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        padding: 0.5rem 1rem;
        font-size: 0.85rem;
        font-weight: 500;
        border-radius: 20px;
    }

    /* Text Gradient */
    .text-gradient-brown {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Action Buttons */
    .action-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .btn-brown {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border: none;
        color: var(--cream-light);
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-brown:hover {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        color: var(--white);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(62, 39, 35, 0.2);
    }

    .btn-outline-brown {
        border: 2px solid var(--brown-medium);
        color: var(--brown-medium);
        background: transparent;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-outline-brown:hover {
        background: var(--brown-medium);
        color: var(--cream-light);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(62, 39, 35, 0.1);
    }

    /* Quick Stats */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }

    .stat-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.75rem;
        background: rgba(255, 255, 255, 0.7);
        border-radius: 12px;
        border: 1px solid var(--cream-medium);
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(62, 39, 35, 0.08);
        border-color: var(--brown-light);
    }

    .stat-icon {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 0.9rem;
    }

    .stat-content {
        flex: 1;
    }

    .stat-number {
        display: block;
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--brown-dark);
        line-height: 1;
    }

    .stat-label {
        display: block;
        font-size: 0.8rem;
        color: var(--brown-medium);
        margin-top: 0.25rem;
    }

    /* Header Visual */
    .timeline-visual {
        position: relative;
        height: 200px;
        margin-bottom: 2rem;
    }

    .timeline-dot {
        position: absolute;
        width: 12px;
        height: 12px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 50%;
        border: 3px solid var(--cream-light);
        box-shadow: 0 0 0 3px var(--cream-medium);
    }

    .timeline-line {
        position: absolute;
        left: 50%;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, transparent, var(--brown-light), transparent);
        transform: translateX(-50%);
    }

    .dot-1 { top: 10%; left: 20%; }
    .dot-2 { top: 25%; right: 15%; }
    .dot-3 { top: 45%; left: 25%; }
    .dot-4 { top: 65%; right: 20%; }
    .dot-5 { top: 85%; left: 15%; }

    .history-icon {
        width: 120px;
        height: 120px;
        margin: 0 auto;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 3rem;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.15);
    }

    /* === SECTION STYLES === */
    .section-header {
        margin-bottom: 3rem;
    }

    .section-title {
        font-size: 2.25rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: var(--brown-medium);
        max-width: 600px;
        margin: 0 auto;
    }

    .section-divider {
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, var(--brown-medium), var(--cream-dark));
        border-radius: 2px;
        margin-top: 1rem;
    }

    /* === VERTICAL TIMELINE === */
    .timeline-vertical {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
        padding-left: 100px;
    }

    .timeline-vertical::before {
        content: '';
        position: absolute;
        left: 40px;
        top: 0;
        bottom: 0;
        width: 2px;
        background: linear-gradient(to bottom, 
            transparent 0%, 
            var(--brown-light) 10%, 
            var(--brown-light) 90%, 
            transparent 100%);
    }

    .timeline-item {
        position: relative;
        margin-bottom: 3rem;
        display: flex;
    }

    .timeline-marker {
        position: absolute;
        left: -60px;
        top: 0;
        width: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .marker-circle {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-weight: 600;
        font-size: 0.9rem;
        border: 3px solid var(--white);
        box-shadow: 0 0 0 3px var(--cream-medium);
        z-index: 2;
        transition: all 0.3s ease;
    }

    .marker-circle:hover {
        transform: scale(1.1);
        box-shadow: 0 0 0 3px var(--cream-medium), 0 5px 15px rgba(62, 39, 35, 0.15);
    }

    .marker-line {
        width: 2px;
        height: calc(100% + 3rem);
        background: var(--cream-medium);
        margin-top: -1px;
        position: relative;
        z-index: 1;
    }

    .timeline-content {
        flex: 1;
        padding-left: 2rem;
    }

    .timeline-card {
        background: var(--white);
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.08);
        border: 1px solid var(--cream-medium);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .timeline-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(62, 39, 35, 0.12);
        border-color: var(--brown-light);
    }

    .timeline-card::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        background: linear-gradient(to bottom, var(--brown-medium), var(--cream-dark));
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1rem;
    }

    .year-tag {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--brown-dark);
    }

    .status-tag {
        padding: 0.25rem 0.75rem;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        color: var(--brown-dark);
    }

    .status-foundation { background: rgba(141, 110, 99, 0.15); }
    .status-expansion { background: rgba(121, 85, 72, 0.15); }
    .status-growth { background: rgba(93, 64, 55, 0.15); }
    .status-recognition { background: rgba(62, 39, 35, 0.15); }
    .status-innovation { background: rgba(188, 170, 164, 0.15); }

    .card-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 1rem;
    }

    .card-text {
        color: var(--brown-medium);
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .card-milestones {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
    }

    .milestone {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .milestone-icon {
        width: 32px;
        height: 32px;
        background: rgba(188, 170, 164, 0.2);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brown-medium);
        font-size: 0.9rem;
        flex-shrink: 0;
    }

    .milestone-text strong {
        display: block;
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 0.125rem;
    }

    .milestone-text small {
        display: block;
        font-size: 0.8rem;
        color: var(--brown-light);
    }

    /* === FOUNDING STORY === */
    .founder-story {
        padding-right: 2rem;
    }

    .dropcap {
        float: left;
        font-size: 4em;
        line-height: 0.8;
        padding-top: 4px;
        padding-right: 8px;
        padding-left: 3px;
        font-weight: 700;
        color: var(--brown-dark);
    }

    .story-text {
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--brown-medium);
        margin-bottom: 1.5rem;
    }

    .quote-box {
        background: linear-gradient(135deg, #F9F5F3 0%, #EFEBE9 100%);
        border-radius: 16px;
        padding: 2rem;
        border-left: 4px solid var(--brown-medium);
        position: relative;
        margin-top: 2rem;
    }

    .quote-icon {
        position: absolute;
        top: -15px;
        right: 30px;
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1rem;
        box-shadow: 0 5px 15px rgba(62, 39, 35, 0.15);
    }

    .quote-box blockquote {
        font-size: 1.2rem;
        line-height: 1.6;
        color: var(--brown-medium);
        font-style: italic;
        margin-bottom: 1rem;
    }

    .quote-author {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .author-line {
        width: 40px;
        height: 2px;
        background: var(--brown-light);
    }

    .quote-author cite {
        font-weight: 600;
        color: var(--brown-dark);
        font-style: normal;
    }

    /* Vision Card */
    .vision-card {
        background: var(--white);
        border-radius: 16px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.08);
        border: 1px solid var(--cream-medium);
        display: flex;
        gap: 1.5rem;
        align-items: flex-start;
    }

    .card-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .vision-card .card-body {
        flex: 1;
    }

    .vision-card .card-title {
        font-size: 1.5rem;
        margin-bottom: 0.75rem;
    }

    .vision-card .card-text {
        font-size: 1rem;
        margin-bottom: 0;
    }

    /* Achievement Grid */
    .achievement-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .achievement-card {
        background: var(--white);
        border-radius: 12px;
        padding: 1.5rem;
        box-shadow: 0 5px 20px rgba(62, 39, 35, 0.05);
        border: 1px solid var(--cream-medium);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .achievement-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(62, 39, 35, 0.1);
        border-color: var(--brown-light);
    }

    .achievement-icon {
        width: 48px;
        height: 48px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.2rem;
        flex-shrink: 0;
    }

    .achievement-number {
        font-size: 1.75rem;
        font-weight: 700;
        color: var(--brown-dark);
        margin-bottom: 0.25rem;
        line-height: 1;
    }

    .achievement-text {
        font-size: 0.9rem;
        color: var(--brown-medium);
        margin-bottom: 0;
    }

    /* === CORE VALUES === */
    .value-card {
        background: var(--white);
        border-radius: 16px;
        padding: 2.5rem 2rem;
        text-align: center;
        height: 100%;
        box-shadow: 0 10px 30px rgba(62, 39, 35, 0.05);
        border: 1px solid var(--cream-medium);
        transition: all 0.3s ease;
    }

    .value-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(62, 39, 35, 0.1);
        border-color: var(--brown-light);
    }

    .value-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 1.5rem;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark));
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 2rem;
        transition: all 0.3s ease;
    }

    .value-card:hover .value-icon {
        transform: rotate(5deg) scale(1.1);
    }

    .value-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 1rem;
    }

    .value-description {
        color: var(--brown-medium);
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* === RESPONSIVE DESIGN === */
    @media (max-width: 992px) {
        .timeline-vertical {
            padding-left: 80px;
        }

        .timeline-vertical::before {
            left: 30px;
        }

        .timeline-marker {
            left: -50px;
            width: 60px;
        }

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .achievement-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .page-header-clean {
            padding-top: 4rem !important;
            padding-bottom: 4rem !important;
        }

        .display-5 {
            font-size: 2rem !important;
        }

        .lead {
            font-size: 1.1rem !important;
        }

        .action-buttons {
            flex-direction: column;
            align-items: stretch;
        }

        .btn {
            text-align: center;
        }

        .timeline-vertical {
            padding-left: 0;
        }

        .timeline-vertical::before {
            display: none;
        }

        .timeline-item {
            flex-direction: column;
            padding-left: 60px;
        }

        .timeline-marker {
            position: absolute;
            left: 0;
            top: 0;
            flex-direction: row;
            width: auto;
        }

        .marker-line {
            display: none;
        }

        .timeline-content {
            padding-left: 0;
            padding-top: 2rem;
        }

        .card-milestones {
            grid-template-columns: 1fr;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .achievement-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .founder-story {
            padding-right: 0;
            margin-bottom: 3rem;
        }
    }

    @media (max-width: 576px) {
        .section-title {
            font-size: 1.75rem;
        }

        .timeline-card {
            padding: 1.5rem;
        }

        .value-card {
            padding: 2rem 1.5rem;
        }

        .achievement-grid {
            grid-template-columns: 1fr;
        }

        .d-flex.flex-wrap {
            justify-content: center !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add animation to timeline cards on scroll
        const timelineCards = document.querySelectorAll('.timeline-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 200);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        // Initialize card styles
        timelineCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });

        // Add hover effect to value cards
        const valueCards = document.querySelectorAll('.value-card');
        valueCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const icon = this.querySelector('.value-icon');
                if (icon) {
                    icon.style.transform = 'rotate(5deg) scale(1.1)';
                }
            });

            card.addEventListener('mouseleave', function() {
                const icon = this.querySelector('.value-icon');
                if (icon) {
                    icon.style.transform = 'rotate(0) scale(1)';
                }
            });
        });

        // Add click effect to timeline markers
        const timelineMarkers = document.querySelectorAll('.marker-circle');
        timelineMarkers.forEach(marker => {
            marker.addEventListener('click', function() {
                const year = this.querySelector('.year').textContent;
                const card = this.closest('.timeline-item').querySelector('.timeline-card');
                
                // Add active class
                timelineMarkers.forEach(m => m.classList.remove('active'));
                this.classList.add('active');
                
                // Scroll to card
                card.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            });
        });
    });
</script>
@endpush