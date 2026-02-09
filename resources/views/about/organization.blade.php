@extends('layouts.app')

@section('title', 'Struktur Organisasi - PT Mitra Nusa Konsulindo')
@section('description', 'Struktur organisasi PT Mitra Nusa Konsulindo - Tim profesional dan sistem kerja yang efektif untuk memberikan layanan terbaik.')

@section('content')
    <!-- Animated Page Header -->
    <section class="page-header py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-content">
                        <h1 class="display-5 fw-bold text-brown-dark mb-3">Struktur Organisasi</h1>
                        <p class="lead text-brown-medium mb-4">
                            PT Mitra Nusa Konsulindo memiliki struktur organisasi yang jelas dengan pembagian 
                            tugas dan tanggung jawab yang terdefinisi dengan baik untuk mendukung efektivitas 
                            operasional dan kualitas pelayanan.
                        </p>
                        <div class="org-meta d-flex flex-wrap gap-3">
                            <div class="meta-item">
                                <i class="fas fa-layer-group me-2"></i>
                                <span>11 Divisi Khusus</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-users me-2"></i>
                                <span>Tim Profesional</span>
                            </div>
                            <div class="meta-item">
                                <i class="fas fa-certificate me-2"></i>
                                <span>Bersertifikasi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-illustration text-center">
                        <div class="org-diagram-preview">
                            <i class="fas fa-sitemap fa-4x text-brown-light"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb Navigation -->
    <nav class="breadcrumb-container py-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                <li class="breadcrumb-item"><a href="{{ route('about') }}">Profil Perusahaan</a></li>
                <li class="breadcrumb-item active">Struktur Organisasi</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content py-5">
        <div class="container">
            <!-- Organizational Overview -->
            <section class="org-overview mb-6">
                <div class="section-header text-center mb-5">
                    <h2 class="section-title fw-bold text-brown-dark mb-3">Struktur Organisasi Kami</h2>
                    <p class="section-subtitle text-brown-medium">
                        Organisasi yang terstruktur untuk mendukung pelayanan konsultansi yang komprehensif
                    </p>
                    <div class="section-divider">
                        <div class="divider-line"></div>
                        <i class="fas fa-building divider-icon"></i>
                        <div class="divider-line"></div>
                    </div>
                </div>

                <div class="org-stats-container mb-5">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="stat-card text-center p-4">
                                <div class="stat-icon mb-3">
                                    <i class="fas fa-user-tie fa-2x"></i>
                                </div>
                                <h3 class="stat-number">4</h3>
                                <p class="stat-label text-brown-medium">Tingkat Manajemen</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card text-center p-4">
                                <div class="stat-icon mb-3">
                                    <i class="fas fa-layer-group fa-2x"></i>
                                </div>
                                <h3 class="stat-number">9</h3>
                                <p class="stat-label text-brown-medium">Divisi Operasional</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stat-card text-center p-4">
                                <div class="stat-icon mb-3">
                                    <i class="fas fa-certificate fa-2x"></i>
                                </div>
                                <h3 class="stat-number">100%</h3>
                                <p class="stat-label text-brown-medium">Bersertifikasi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Organizational Chart - FIXED VERSION -->
            <section class="org-chart-section mb-6">
                <div class="section-header text-center mb-5">
                    <h3 class="section-title fw-bold text-brown-dark mb-3">Bagan Organisasi</h3>
                    <p class="section-subtitle text-brown-medium">
                        Visualisasi struktur organisasi berdasarkan data perusahaan
                    </p>
                </div>

                <!-- Desktop Organization Chart - FIXED -->
                <div class="org-chart-desktop d-none d-lg-block">
                    <div class="chart-container">
                        <!-- Level 1: Dewan Komisaris -->
                        <div class="chart-level level-1">
                            <div class="level-label">
                                <span class="label-text">Pengawasan</span>
                            </div>
                            <div class="level-content">
                                <div class="position-card komisaris-card">
                                    <div class="card-header">
                                        <div class="position-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <h5 class="position-title">Dewan Komisaris</h5>
                                        <span class="position-type">Pengawas Perusahaan</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="position-members">
                                            <div class="member">
                                                <div class="member-name">Dede Samsul Muharrom</div>
                                                <div class="member-role">Komisaris Utama</div>
                                            </div>
                                            <div class="member">
                                                <div class="member-name">Endah Nuraeni</div>
                                                <div class="member-role">Komisaris</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vertical Connector 1 -->
                        <div class="vertical-connector connector-1"></div>

                        <!-- Level 2: Direksi -->
                        <div class="chart-level level-2">
                            <div class="level-label">
                                <span class="label-text">Pimpinan</span>
                            </div>
                            <div class="level-content">
                                <div class="position-card direksi-card">
                                    <div class="card-header">
                                        <div class="position-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <h5 class="position-title">Direksi</h5>
                                        <span class="position-type">Operasional Perusahaan</span>
                                    </div>
                                    <div class="card-body">
                                        <div class="position-members">
                                            <div class="member">
                                                <div class="member-name">Muria Cipta, ST</div>
                                                <div class="member-role">Direktur Utama</div>
                                            </div>
                                            <div class="member">
                                                <div class="member-name">Andri Hendrawan</div>
                                                <div class="member-role">Direktur Operasional</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vertical Connector 2 -->
                        <div class="vertical-connector connector-2"></div>

                        <!-- Level 3: Divisi -->
                        <div class="chart-level level-3">
                            <div class="level-label">
                                <span class="label-text">Operasional</span>
                            </div>
                            <div class="level-content">
                                <div class="divisions-container">
                                    <div class="division-lines">
                                        <!-- Connection lines from direksi to divisions -->
                                        <div class="division-line line-1"></div>
                                        <div class="division-line line-2"></div>
                                        <div class="division-line line-3"></div>
                                    </div>
                                    <div class="divisions-grid">
                                        <!-- Row 1 -->
                                        <div class="division-row row-1">
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-map-marked-alt"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Tata Ruang</h6>
                                                    <p class="division-desc">Perencanaan Wilayah</p>
                                                </div>
                                            </div>
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-drafting-compass"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Arsitektur & Landscape</h6>
                                                    <p class="division-desc">Desain Arsitektural</p>
                                                </div>
                                            </div>
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-hard-hat"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Sipil</h6>
                                                    <p class="division-desc">Teknik Sipil</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Row 2 -->
                                        <div class="division-row row-2">
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-leaf"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Lingkungan</h6>
                                                    <p class="division-desc">Konsultasi Lingkungan</p>
                                                </div>
                                            </div>
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-chart-line"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Manajemen</h6>
                                                    <p class="division-desc">Konsultansi Manajemen</p>
                                                </div>
                                            </div>
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-cogs"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Pengembangan</h6>
                                                    <p class="division-desc">Inovasi & Riset</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Row 3 -->
                                        <div class="division-row row-3">
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">SDM & Umum</h6>
                                                    <p class="division-desc">Administrasi & Personalia</p>
                                                </div>
                                            </div>
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-chart-bar"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Pemasaran & Relasi</h6>
                                                    <p class="division-desc">Marketing & Promosi</p>
                                                </div>
                                            </div>
                                            <div class="division-card">
                                                <div class="division-icon">
                                                    <i class="fas fa-coins"></i>
                                                </div>
                                                <div class="division-info">
                                                    <h6 class="division-name">Keuangan</h6>
                                                    <p class="division-desc">Akuntansi & Keuangan</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Vertical Connector 3 -->
                        <div class="vertical-connector connector-3"></div>

                        <!-- Level 4: Staff & Support -->
                        <div class="chart-level level-4">
                            <div class="level-label">
                                <span class="label-text">Pelaksana</span>
                            </div>
                            <div class="level-content">
                                <div class="staff-section">
                                    <div class="staff-card">
                                        <div class="card-header">
                                            <div class="position-icon">
                                                <i class="fas fa-users"></i>
                                            </div>
                                            <h5 class="position-title">Tenaga Ahli & Staf</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="staff-categories">
                                                <div class="category">
                                                    <span class="category-badge">Tenaga Ahli</span>
                                                    <span class="category-badge">Staf Teknis</span>
                                                    <span class="category-badge">Administrasi</span>
                                                    <span class="category-badge">Pendukung</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Organization Chart -->
                <div class="org-chart-mobile d-block d-lg-none">
                    <div class="accordion" id="orgAccordion">
                        <!-- Dewan Komisaris -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#komisarisCollapse">
                                    <div class="mobile-level-header">
                                        <div class="level-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <div class="level-info">
                                            <h5 class="level-title">Dewan Komisaris</h5>
                                            <p class="level-subtitle">Pengawas Perusahaan</p>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="komisarisCollapse" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <div class="mobile-member-list">
                                        <div class="mobile-member">
                                            <div class="member-name">Dede Samsul Muharrom</div>
                                            <div class="member-role badge bg-brown-medium">Komisaris Utama</div>
                                        </div>
                                        <div class="mobile-member">
                                            <div class="member-name">Endah Nuraeni</div>
                                            <div class="member-role badge bg-brown-light">Komisaris</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Direksi -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#direksiCollapse">
                                    <div class="mobile-level-header">
                                        <div class="level-icon">
                                            <i class="fas fa-user-tie"></i>
                                        </div>
                                        <div class="level-info">
                                            <h5 class="level-title">Direksi</h5>
                                            <p class="level-subtitle">Pimpinan Operasional</p>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="direksiCollapse" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="mobile-member-list">
                                        <div class="mobile-member">
                                            <div class="member-name">Muria Cipta, ST</div>
                                            <div class="member-role badge bg-brown-dark">Direktur Utama</div>
                                        </div>
                                        <div class="mobile-member">
                                            <div class="member-name">Andri Hendrawan</div>
                                            <div class="member-role badge bg-brown-medium">Direktur</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Divisi -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#divisiCollapse">
                                    <div class="mobile-level-header">
                                        <div class="level-icon">
                                            <i class="fas fa-layer-group"></i>
                                        </div>
                                        <div class="level-info">
                                            <h5 class="level-title">Divisi Operasional</h5>
                                            <p class="level-subtitle">11 Divisi Khusus</p>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="divisiCollapse" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="mobile-divisions">
                                        <div class="mobile-division">
                                            <i class="fas fa-map-marked-alt me-2"></i>
                                            <span>Divisi Tata Ruang</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-drafting-compass me-2"></i>
                                            <span>Divisi Arsitektur & Landscape</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-hard-hat me-2"></i>
                                            <span>Divisi Sipil</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-leaf me-2"></i>
                                            <span>Divisi Lingkungan</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-chart-line me-2"></i>
                                            <span>Divisi Manajemen</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-cogs me-2"></i>
                                            <span>Divisi Pengembangan</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-users me-2"></i>
                                            <span>Divisi SDM & Umum</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-chart-bar me-2"></i>
                                            <span>Divisi Pemasaran & Relasi</span>
                                        </div>
                                        <div class="mobile-division">
                                            <i class="fas fa-coins me-2"></i>
                                            <span>Divisi Keuangan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Staff -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#staffCollapse">
                                    <div class="mobile-level-header">
                                        <div class="level-icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                        <div class="level-info">
                                            <h5 class="level-title">Tenaga Ahli & Staf</h5>
                                            <p class="level-subtitle">Tim Pelaksana</p>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="staffCollapse" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <div class="staff-categories">
                                        <div class="d-flex flex-wrap gap-2">
                                            <span class="badge bg-cream-dark text-brown-dark">Tenaga Ahli</span>
                                            <span class="badge bg-cream-dark text-brown-dark">Staf Teknis</span>
                                            <span class="badge bg-cream-dark text-brown-dark">Administrasi</span>
                                            <span class="badge bg-cream-dark text-brown-dark">Pendukung</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Divisions Details -->
            <section class="divisions-details mb-6">
                <div class="section-header text-center mb-5">
                    <h3 class="section-title fw-bold text-brown-dark mb-3">Detail Divisi</h3>
                    <p class="section-subtitle text-brown-medium">
                        Rincian tugas dan tanggung jawab setiap divisi
                    </p>
                </div>

                <div class="divisions-tabs">
                    <ul class="nav nav-tabs justify-content-center mb-4" id="divisionsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="tata-ruang-tab" data-bs-toggle="tab" data-bs-target="#tata-ruang">
                                Tata Ruang
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="arsitektur-tab" data-bs-toggle="tab" data-bs-target="#arsitektur">
                                Arsitektur
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="sipil-tab" data-bs-toggle="tab" data-bs-target="#sipil">
                                Sipil
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="lingkungan-tab" data-bs-toggle="tab" data-bs-target="#lingkungan">
                                Lingkungan
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="manajemen-tab" data-bs-toggle="tab" data-bs-target="#manajemen">
                                Manajemen
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="divisionsTabContent">
                        <!-- Tata Ruang -->
                        <div class="tab-pane fade show active" id="tata-ruang">
                            <div class="tab-content-card">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="division-highlight">
                                            <div class="highlight-icon">
                                                <i class="fas fa-map-marked-alt"></i>
                                            </div>
                                            <h4 class="highlight-title">Divisi Tata Ruang</h4>
                                            <p class="highlight-desc">
                                                Menangani perencanaan dan pengembangan tata ruang wilayah
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="division-details">
                                            <h5 class="details-title">Layanan Utama</h5>
                                            <div class="services-list">
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Perencanaan Tata Ruang Wilayah</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Pengembangan Perkotaan</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Studi Kelayakan Wilayah</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Kajian Lingkungan Strategis</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Arsitektur -->
                        <div class="tab-pane fade" id="arsitektur">
                            <div class="tab-content-card">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="division-highlight">
                                            <div class="highlight-icon">
                                                <i class="fas fa-drafting-compass"></i>
                                            </div>
                                            <h4 class="highlight-title">Divisi Arsitektur & Landscape</h4>
                                            <p class="highlight-desc">
                                                Desain arsitektural dan lingkungan untuk berbagai jenis bangunan
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="division-details">
                                            <h5 class="details-title">Layanan Utama</h5>
                                            <div class="services-list">
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Desain Arsitektural Bangunan</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Desain Interior & Eksterior</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Perencanaan Landscaping</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Konsultasi Teknis Arsitektur</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sipil -->
                        <div class="tab-pane fade" id="sipil">
                            <div class="tab-content-card">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="division-highlight">
                                            <div class="highlight-icon">
                                                <i class="fas fa-hard-hat"></i>
                                            </div>
                                            <h4 class="highlight-title">Divisi Sipil</h4>
                                            <p class="highlight-desc">
                                                Rekayasa dan konstruksi untuk berbagai proyek teknik sipil
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="division-details">
                                            <h5 class="details-title">Layanan Utama</h5>
                                            <div class="services-list">
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Rekayasa Konstruksi Bangunan</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Teknik Sipil Sumber Daya Air</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Teknik Sipil Transportasi</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Structural Health Monitoring</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lingkungan -->
                        <div class="tab-pane fade" id="lingkungan">
                            <div class="tab-content-card">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="division-highlight">
                                            <div class="highlight-icon">
                                                <i class="fas fa-leaf"></i>
                                            </div>
                                            <h4 class="highlight-title">Divisi Lingkungan</h4>
                                            <p class="highlight-desc">
                                                Konsultasi dan pengelolaan aspek lingkungan dalam proyek
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="division-details">
                                            <h5 class="details-title">Layanan Utama</h5>
                                            <div class="services-list">
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Analisis Dampak Lingkungan</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Pengelolaan Limbah & Persampahan</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Pengolahan Air Bersih</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Konservasi Lingkungan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Manajemen -->
                        <div class="tab-pane fade" id="manajemen">
                            <div class="tab-content-card">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="division-highlight">
                                            <div class="highlight-icon">
                                                <i class="fas fa-chart-line"></i>
                                            </div>
                                            <h4 class="highlight-title">Divisi Manajemen</h4>
                                            <p class="highlight-desc">
                                                Konsultansi manajemen untuk efisiensi dan efektivitas organisasi
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="division-details">
                                            <h5 class="details-title">Layanan Utama</h5>
                                            <div class="services-list">
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Perencanaan Sistem Akuntansi</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Konsultasi Manajemen Fungsional</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Pelatihan & Pengembangan SDM</span>
                                                </div>
                                                <div class="service-item">
                                                    <i class="fas fa-check-circle text-success"></i>
                                                    <span>Konsultasi Hukum Bisnis</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Management Team -->
            <section class="management-team mb-6">
                <div class="section-header text-center mb-5">
                    <h3 class="section-title fw-bold text-brown-dark mb-3">Tim Manajemen</h3>
                    <p class="section-subtitle text-brown-medium">
                        Pemimpin yang mengarahkan perusahaan menuju keunggulan
                    </p>
                </div>

                <div class="row g-4 justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card text-center">
                            <div class="team-avatar">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Muria Cipta, ST</h5>
                                <p class="team-position text-brown-dark">Direktur Utama</p>
                                <div class="team-divider"></div>
                                <p class="team-description">
                                    Bertanggung jawab atas strategi dan pengembangan perusahaan
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card text-center">
                            <div class="team-avatar">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Andri Hendrawan</h5>
                                <p class="team-position text-brown-dark">Direktur</p>
                                <div class="team-divider"></div>
                                <p class="team-description">
                                    Menangani operasional dan pelaksanaan proyek konsultansi
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card text-center">
                            <div class="team-avatar">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Dede Samsul Muharrom</h5>
                                <p class="team-position text-brown-dark">Komisaris Utama</p>
                                <div class="team-divider"></div>
                                <p class="team-description">
                                    Memberikan pengawasan dan arahan strategis perusahaan
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="team-card text-center">
                            <div class="team-avatar">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="team-info">
                                <h5 class="team-name">Endah Nuraeni</h5>
                                <p class="team-position text-brown-dark">Komisaris</p>
                                <div class="team-divider"></div>
                                <p class="team-description">
                                    Mendukung pengawasan dan pengembangan kebijakan perusahaan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Back Button -->
            <div class="back-section text-center py-5">
                <a href="{{ route('about') }}" class="btn btn-brown-outline px-5 py-3">
                    <i class="fas fa-arrow-left me-2"></i>
                    Kembali ke Profil Perusahaan
                </a>
            </div>
        </div>
    </main>
@endsection

@push('styles')
<style>
    :root {
        /* Brown Color Palette */
        --brown-50: #EFEBE9;
        --brown-100: #D7CCC8;
        --brown-200: #BCAAA4;
        --brown-300: #A1887F;
        --brown-400: #8D6E63;
        --brown-500: #795548;
        --brown-600: #6D4C41;
        --brown-700: #5D4037;
        --brown-800: #4E342E;
        --brown-900: #3E2723;

        /* Cream Color Palette */
        --cream-50: #FFFDF7;
        --cream-100: #F9F5EB;
        --cream-200: #F5F0E6;
        --cream-300: #EEE6D9;
        --cream-400: #E8DCCE;
        --cream-500: #E3D6C6;
        --cream-600: #DDCFBD;
        --cream-700: #D7C8B4;
        --cream-800: #D2C1AB;
        --cream-900: #CCBAA2;

        /* Main Colors */
        --brown-light: var(--brown-300);
        --brown-medium: var(--brown-500);
        --brown-dark: var(--brown-700);
        --cream-light: var(--cream-100);
        --cream-medium: var(--cream-300);
        --cream-dark: var(--cream-500);
    }

    /* Base Styles */
    body {
        background: linear-gradient(135deg, var(--cream-light) 0%, var(--cream-medium) 100%);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .text-brown-light { color: var(--brown-light); }
    .text-brown-medium { color: var(--brown-medium); }
    .text-brown-dark { color: var(--brown-dark); }
    .text-cream-light { color: var(--cream-light); }
    .text-cream-medium { color: var(--cream-medium); }
    .text-cream-dark { color: var(--cream-dark); }

    .bg-brown-light { background-color: var(--brown-light); }
    .bg-brown-medium { background-color: var(--brown-medium); }
    .bg-brown-dark { background-color: var(--brown-dark); }
    .bg-cream-light { background-color: var(--cream-light); }
    .bg-cream-medium { background-color: var(--cream-medium); }
    .bg-cream-dark { background-color: var(--cream-dark); }

    /* Page Header */
    .page-header {
        background: linear-gradient(135deg, var(--brown-dark) 0%, var(--brown-medium) 100%);
        color: var(--cream-light);
        padding: 4rem 0;
    }

    .page-header .header-content h1 {
        color: var(--cream-light);
    }

    .page-header .header-content .lead {
        color: var(--cream-200);
    }

    .org-meta .meta-item {
        background: rgba(255, 255, 255, 0.1);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        color: var(--cream-light);
        font-size: 0.9rem;
    }

    .org-meta .meta-item i {
        color: var(--cream-300);
    }

    .org-diagram-preview {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        padding: 2rem;
        display: inline-block;
    }

    /* Breadcrumb */
    .breadcrumb-container {
        background: var(--cream-light);
        border-bottom: 1px solid var(--cream-dark);
    }

    .breadcrumb {
        margin-bottom: 0;
    }

    .breadcrumb-item a {
        color: var(--brown-medium);
        text-decoration: none;
    }

    .breadcrumb-item.active {
        color: var(--brown-dark);
        font-weight: 500;
    }

    /* Section Header */
    .section-header {
        position: relative;
        padding-bottom: 1.5rem;
    }

    .section-title {
        position: relative;
        display: inline-block;
        padding-bottom: 0.5rem;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--brown-medium), var(--brown-light));
        border-radius: 2px;
    }

    .section-subtitle {
        font-size: 1.1rem;
        max-width: 700px;
        margin: 0 auto;
    }

    .section-divider {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        margin-top: 2rem;
    }

    .divider-line {
        width: 100px;
        height: 2px;
        background: linear-gradient(90deg, var(--brown-light), transparent);
    }

    .divider-icon {
        color: var(--brown-medium);
        font-size: 1.2rem;
    }

    /* Stats Cards */
    .stat-card {
        background: var(--cream-light);
        border: 2px solid var(--cream-dark);
        border-radius: 1rem;
        transition: all 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        border-color: var(--brown-light);
        box-shadow: 0 10px 20px rgba(121, 85, 72, 0.1);
    }

    .stat-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        margin: 0 auto;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--brown-dark);
        line-height: 1;
        margin: 0.5rem 0;
    }

    .stat-label {
        font-size: 0.9rem;
        font-weight: 500;
    }

    /* Organization Chart - Desktop - FIXED */
    .org-chart-desktop {
        background: var(--cream-light);
        border: 2px solid var(--cream-dark);
        border-radius: 1.5rem;
        padding: 3rem 2rem;
        position: relative;
        overflow: hidden;
        min-height: 900px;
    }

    .chart-container {
        position: relative;
        min-height: 800px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
    }

    .chart-level {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        width: 100%;
        z-index: 2;
        margin: 2rem 0;
    }

    .level-1 { margin-top: 0; }
    .level-2 { margin: 3rem 0; }
    .level-3 { margin: 3rem 0; }
    .level-4 { margin-bottom: 0; }

    .level-label {
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .label-text {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        color: var(--cream-light);
        padding: 0.6rem 2rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.5px;
        display: inline-block;
    }

    .level-content {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Vertical Connectors */
    .vertical-connector {
        position: absolute;
        background: linear-gradient(180deg, var(--brown-light), var(--brown-medium));
        width: 3px;
        z-index: 1;
        left: 50%;
        transform: translateX(-50%);
    }

    .connector-1 {
        top: 200px;
        height: 40px;
    }

    .connector-2 {
        top: 380px;
        height: 40px;
    }

    .connector-3 {
        top: 720px;
        height: 40px;
    }

    /* Division Container */
    .divisions-container {
        position: relative;
        width: 100%;
        max-width: 900px;
        margin: 0 auto;
        padding-top: 20px;
    }

    .division-lines {
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        height: 20px;
        display: flex;
        justify-content: center;
    }

    .division-line {
        position: absolute;
        background: linear-gradient(180deg, var(--brown-light), var(--brown-medium));
        height: 20px;
        width: 2px;
        top: -20px;
    }

    .line-1 { left: 17%; }
    .line-2 { left: 50%; }
    .line-3 { left: 83%; }

    /* Divisions Grid */
    .divisions-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        width: 100%;
    }

    .division-row {
        display: flex;
        justify-content: center;
        gap: 2rem;
    }

    .division-row.row-1 { margin-bottom: 1.5rem; }
    .division-row.row-2 { margin-bottom: 1.5rem; }
    .division-row.row-3 { margin-bottom: 0; }

    .division-card {
        background: var(--cream-light);
        border: 2px solid var(--cream-dark);
        border-radius: 0.75rem;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        width: 180px;
        transition: all 0.3s ease;
        box-shadow: 0 3px 10px rgba(121, 85, 72, 0.05);
        position: relative;
        z-index: 3;
    }

    .division-card:hover {
        transform: translateY(-5px);
        border-color: var(--brown-light);
        box-shadow: 0 10px 20px rgba(121, 85, 72, 0.15);
    }

    .division-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.2rem;
        margin-bottom: 1rem;
    }

    .division-info {
        width: 100%;
    }

    .division-name {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 0.25rem;
        line-height: 1.2;
    }

    .division-desc {
        font-size: 0.8rem;
        color: var(--brown-medium);
        margin: 0;
        line-height: 1.3;
    }

    /* Position Cards - Improved */
    .position-card {
        background: var(--cream-light);
        border: 3px solid var(--cream-dark);
        border-radius: 1rem;
        width: 280px;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px rgba(121, 85, 72, 0.1);
        position: relative;
        z-index: 3;
    }

    .komisaris-card {
        border-color: var(--brown-dark);
    }

    .direksi-card {
        border-color: var(--brown-medium);
    }

    .position-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(121, 85, 72, 0.2);
    }

    .position-card .card-header {
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        color: var(--cream-light);
        padding: 1.5rem;
        border-radius: 0.8rem 0.8rem 0 0;
        text-align: center;
    }

    .komisaris-card .card-header {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
    }

    .position-icon {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        font-size: 1.5rem;
    }

    .position-title {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .position-type {
        font-size: 0.9rem;
        opacity: 0.9;
        font-weight: 500;
    }

    .position-card .card-body {
        padding: 1.5rem;
    }

    .position-members {
        text-align: center;
    }

    .member {
        margin-bottom: 1rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid var(--cream-dark);
    }

    .member:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .member-name {
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 0.25rem;
        font-size: 1.1rem;
    }

    .member-role {
        font-size: 0.9rem;
        color: var(--brown-medium);
        font-weight: 500;
        background: var(--cream-medium);
        padding: 0.25rem 0.75rem;
        border-radius: 50px;
        display: inline-block;
    }

    /* Staff Section */
    .staff-section {
        width: 100%;
        max-width: 300px;
    }

    .staff-card {
        background: var(--cream-light);
        border: 3px solid var(--cream-dark);
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(121, 85, 72, 0.1);
    }

    .staff-card .card-header {
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        color: var(--cream-light);
        padding: 1.5rem;
        text-align: center;
    }

    .staff-card .card-body {
        padding: 1.5rem;
        text-align: center;
    }

    .staff-categories {
        display: flex;
        justify-content: center;
    }

    .category {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
    }

    .category-badge {
        background: var(--cream-medium);
        color: var(--brown-dark);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-size: 0.85rem;
        font-weight: 500;
        border: 1px solid var(--cream-dark);
        white-space: nowrap;
    }

    /* Mobile Organization Chart */
    .org-chart-mobile {
        background: var(--cream-light);
        border: 2px solid var(--cream-dark);
        border-radius: 1rem;
        overflow: hidden;
    }

    .accordion-item {
        border: none;
        border-bottom: 1px solid var(--cream-dark);
    }

    .accordion-item:last-child {
        border-bottom: none;
    }

    .accordion-button {
        background: var(--cream-light);
        color: var(--brown-dark);
        font-weight: 600;
        padding: 1rem 1.5rem;
        border: none;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        color: var(--cream-light);
    }

    .accordion-button:not(.collapsed) .level-icon {
        color: var(--cream-light);
    }

    .accordion-button:not(.collapsed) .level-title,
    .accordion-button:not(.collapsed) .level-subtitle {
        color: var(--cream-light);
    }

    .mobile-level-header {
        display: flex;
        align-items: center;
        gap: 1rem;
        width: 100%;
    }

    .level-icon {
        width: 40px;
        height: 40px;
        background: var(--cream-medium);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--brown-medium);
        font-size: 1rem;
    }

    .accordion-button:not(.collapsed) .level-icon {
        background: rgba(255, 255, 255, 0.2);
    }

    .level-info {
        flex: 1;
        text-align: left;
    }

    .level-title {
        font-size: 1rem;
        font-weight: 600;
        margin-bottom: 0.25rem;
        color: var(--brown-dark);
    }

    .level-subtitle {
        font-size: 0.85rem;
        color: var(--brown-medium);
        margin: 0;
    }

    .accordion-body {
        padding: 1rem 1.5rem 1.5rem 1.5rem;
        background: var(--cream-medium);
    }

    .mobile-member-list {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .mobile-member {
        background: var(--cream-light);
        border: 1px solid var(--cream-dark);
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .member-name {
        font-weight: 500;
        color: var(--brown-dark);
    }

    .mobile-divisions {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .mobile-division {
        background: var(--cream-light);
        border: 1px solid var(--cream-dark);
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
        color: var(--brown-dark);
        font-weight: 500;
    }

    .mobile-division i {
        color: var(--brown-medium);
    }

    /* Divisions Tabs */
    .divisions-tabs .nav-tabs {
        border-bottom: 2px solid var(--cream-dark);
    }

    .divisions-tabs .nav-link {
        color: var(--brown-medium);
        border: none;
        background: transparent;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        position: relative;
        margin: 0 0.5rem;
    }

    .divisions-tabs .nav-link:hover {
        color: var(--brown-dark);
    }

    .divisions-tabs .nav-link.active {
        color: var(--brown-dark);
        background: transparent;
        border: none;
    }

    .divisions-tabs .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, var(--brown-medium), var(--brown-light));
    }

    .tab-content-card {
        background: var(--cream-light);
        border: 2px solid var(--cream-dark);
        border-radius: 1rem;
        padding: 2rem;
    }

    .division-highlight {
        text-align: center;
        padding: 1rem;
    }

    .highlight-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 1.5rem;
        margin: 0 auto 1rem;
    }

    .highlight-title {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .highlight-desc {
        color: var(--brown-medium);
        font-size: 0.9rem;
    }

    .division-details .details-title {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .services-list {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }

    .service-item {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .service-item i {
        flex-shrink: 0;
    }

    .service-item span {
        color: var(--brown-dark);
        font-size: 0.95rem;
    }

    /* Team Cards */
    .team-card {
        background: var(--cream-light);
        border: 2px solid var(--cream-dark);
        border-radius: 1rem;
        padding: 2rem;
        transition: all 0.3s ease;
        height: 100%;
    }

    .team-card:hover {
        transform: translateY(-5px);
        border-color: var(--brown-light);
        box-shadow: 0 10px 25px rgba(121, 85, 72, 0.1);
    }

    .team-avatar {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, var(--brown-medium), var(--brown-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--cream-light);
        font-size: 2rem;
        margin: 0 auto 1.5rem;
    }

    .team-info {
        text-align: center;
    }

    .team-name {
        color: var(--brown-dark);
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .team-position {
        font-weight: 500;
        margin-bottom: 1rem;
    }

    .team-divider {
        width: 50px;
        height: 2px;
        background: linear-gradient(90deg, var(--brown-light), transparent);
        margin: 1rem auto;
    }

    .team-description {
        color: var(--brown-medium);
        font-size: 0.9rem;
        line-height: 1.5;
    }

    /* Back Button */
    .back-section .btn-brown-outline {
        background: transparent;
        border: 2px solid var(--brown-medium);
        color: var(--brown-medium);
        font-weight: 500;
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .back-section .btn-brown-outline:hover {
        background: var(--brown-medium);
        color: var(--cream-light);
        transform: translateY(-2px);
    }

    /* Responsive Styles */
    @media (max-width: 1200px) {
        .division-card {
            width: 160px;
        }
        
        .division-row {
            gap: 1.5rem;
        }
    }

    @media (max-width: 992px) {
        .chart-container {
            min-height: 850px;
        }
        
        .division-card {
            width: 140px;
        }
        
        .division-name {
            font-size: 0.85rem;
        }
        
        .division-desc {
            font-size: 0.75rem;
        }
        
        .position-card {
            width: 250px;
        }
    }

    @media (max-width: 768px) {
        .page-header {
            padding: 3rem 0;
            text-align: center;
        }

        .page-header .header-illustration {
            margin-top: 2rem;
        }

        .org-chart-desktop {
            padding: 2rem 1rem;
            min-height: 800px;
        }
        
        .division-row {
            flex-wrap: wrap;
        }
        
        .division-card {
            width: 180px;
            margin-bottom: 1rem;
        }

        .divisions-tabs .nav-link {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }

        .tab-content-card {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .stat-number {
            font-size: 2rem;
        }

        .stat-card {
            padding: 1.5rem;
        }

        .division-row {
            gap: 1rem;
        }

        .division-card {
            min-width: 100%;
            max-width: 250px;
        }

        .team-card {
            padding: 1.5rem;
        }

        .team-avatar {
            width: 80px;
            height: 80px;
            font-size: 1.5rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

        // Add hover effects to organization cards
        const orgCards = document.querySelectorAll('.position-card, .division-card, .team-card');
        orgCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Initialize division tabs
        const divisionTabs = document.querySelectorAll('#divisionsTab button');
        divisionTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                divisionTabs.forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.stat-card, .position-card, .division-card, .team-card').forEach(element => {
            observer.observe(element);
        });
    });
</script>
@endpush