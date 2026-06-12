@extends('user.layouts.app')

@section('title', 'Struktur Organisasi - PT Mitra Nusa Konsulindo')
@section('description', 'Struktur organisasi PT Mitra Nusa Konsulindo - Tim profesional dan sistem kerja yang efektif untuk memberikan layanan terbaik.')

@section('content')
    <!-- HERO SECTION – SAME STYLE AS HOME -->
    <section class="org-hero position-relative overflow-hidden">
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
                            <i class="fas fa-sitemap me-2"></i>STRUKTUR ORGANISASI
                        </span>
                    </div>
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark animate-fade-in-up">
                        Struktur <span class="text-gradient-brown">Organisasi</span>
                    </h1>
                    <div class="subtitle-wrapper mb-5 animate-fade-in-up" style="animation-delay: 0.2s;">
                        <h2 class="h3 fw-light text-brown-medium mb-3">Tim Profesional dan Sistem Kerja Efektif</h2>
                        <div class="typewriter-wrapper">
                            <span class="typewriter-text text-brown-dark fw-semibold fs-3">
                                {{ isset($divisi) ? $divisi->count() : 0 }} Divisi · 4 Tingkat · Bersertifikasi
                            </span>
                        </div>
                    </div>
                    <nav aria-label="breadcrumb" class="breadcrumb-nav mt-5 animate-fade-in-up" style="animation-delay: 0.4s;">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-brown-medium">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('about') }}" class="text-brown-medium">Profil Perusahaan</a></li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="scroll-indicator">
            <a href="#org-overview" class="scroll-down"><i class="fas fa-chevron-down"></i></a>
        </div>
    </section>

    <!-- ORG OVERVIEW – 3D STAT CARDS -->
    <section id="org-overview" class="py-6 bg-white position-relative">
        <div class="section-bg-decoration">
            <div class="decoration-circle"></div>
            <div class="decoration-circle"></div>
        </div>
        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-chart-pie me-2"></i>GAMBARAN UMUM
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Struktur Organisasi Kami</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Organisasi yang terstruktur untuk mendukung pelayanan konsultansi yang komprehensif.
                </p>
            </div>

            @php
                $jumlahKomisaris = isset($komisaris) ? $komisaris->count() : 0;
                $jumlahDireksi = isset($direksi) ? $direksi->count() : 0;
                $jumlahDivisi = isset($divisi) ? $divisi->count() : 0;
                $totalManajemen = $jumlahKomisaris + $jumlahDireksi;
            @endphp

            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="stat-card-3d animate-on-scroll">
                        <div class="stat-card-inner">
                            <div class="stat-icon-wrapper mb-3">
                                <i class="fas fa-user-tie fa-2x text-brown-dark"></i>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-1">{{ $totalManajemen }}</h3>
                            <p class="text-brown-medium small">Tim Manajemen</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card-3d animate-on-scroll">
                        <div class="stat-card-inner">
                            <div class="stat-icon-wrapper mb-3">
                                <i class="fas fa-layer-group fa-2x text-brown-dark"></i>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-1">{{ $jumlahDivisi }}</h3>
                            <p class="text-brown-medium small">Divisi Operasional</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card-3d animate-on-scroll">
                        <div class="stat-card-inner">
                            <div class="stat-icon-wrapper mb-3">
                                <i class="fas fa-certificate fa-2x text-brown-dark"></i>
                            </div>
                            <h3 class="fw-bold text-brown-dark mb-1">100%</h3>
                            <p class="text-brown-medium small">Bersertifikasi</p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ORGANIZATIONAL CHART – 3D DESKTOP VERSION -->
    <section class="py-6 bg-cream-light position-relative overflow-hidden">
        <div class="cert-pattern">
            <div class="pattern-line"></div>
            <div class="pattern-line"></div>
        </div>
        <div class="container position-relative z-2">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-sitemap me-2"></i>BAGIAN ORGANISASI
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Struktur Perusahaan</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Visualisasi struktur organisasi berdasarkan data perusahaan.
                </p>
            </div>

            <!-- Desktop Chart -->
            <div class="org-chart-3d d-none d-lg-block animate-on-scroll">
                <div class="org-chart-container">
                    <!-- Level 1: Dewan Komisaris -->
                    <div class="org-level level-1">
                        <div class="level-label-wrapper">
                            <span class="level-label" style="color: #ffffff !important;">Pengawasan</span>
                        </div>
                        <div class="org-card komisaris-card">
                            <div class="org-card-inner">
                                <div class="org-icon-wrapper mb-3">
                                    <i class="fas fa-user-tie fa-2x text-white"></i>
                                </div>
                                <h4 class="fw-bold mb-2" style="color: #ffffff !important;">Dewan Komisaris</h4>
                                <div class="org-members">
                                    @forelse($komisaris ?? [] as $item)
                                    <div class="org-member">
                                        <span class="member-name" style="color: #ffffff !important;">{{ $item->name }}</span>
                                        <span class="member-role badge bg-gold" style="color: #ffffff !important; background-color: rgba(0,0,0,0.6) !important;">{{ $item->position }}</span>
                                    </div>
                                    @empty
                                    <div class="org-member">
                                        <span class="member-name" style="color: #ffffff !important;">DEDE SAMSUL MUHAROM</span>
                                        <span class="member-role badge bg-gold" style="color: #ffffff !important; background-color: rgba(0,0,0,0.6) !important;">Komisaris Utama</span>
                                    </div>
                                    <div class="org-member">
                                        <span class="member-name" style="color: #ffffff !important;">ENDAH NURAENI</span>
                                        <span class="member-role badge bg-gold" style="color: #ffffff !important; background-color: rgba(0,0,0,0.6) !important;">Komisaris</span>
                                    </div>
                                    @endforelse
                                </div>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Vertical Connector 1 -->
                    <div class="org-connector"></div>

                    <!-- Level 2: Direksi -->
                    <div class="org-level level-2">
                        <div class="level-label-wrapper">
                            <span class="level-label" style="color: #ffffff !important;">Pimpinan</span>
                        </div>
                        <div class="org-card direksi-card">
                            <div class="org-card-inner">
                                <div class="org-icon-wrapper mb-3">
                                    <i class="fas fa-user-tie fa-2x text-white"></i>
                                </div>
                                <h4 class="fw-bold mb-2" style="color: #ffffff !important;">Direksi</h4>
                                <div class="org-members">
                                    @forelse($direksi ?? [] as $item)
                                    <div class="org-member">
                                        <span class="member-name" style="color: #ffffff !important;">{{ $item->name }}</span>
                                        <span class="member-role badge bg-gold" style="color: #ffffff !important; background-color: rgba(0,0,0,0.6) !important;">{{ $item->position }}</span>
                                    </div>
                                    @empty
                                    <div class="org-member">
                                        <span class="member-name" style="color: #ffffff !important;">MURIA CIPTA, ST</span>
                                        <span class="member-role badge bg-gold" style="color: #ffffff !important; background-color: rgba(0,0,0,0.6) !important;">Direktur Utama</span>
                                    </div>
                                    <div class="org-member">
                                        <span class="member-name" style="color: #ffffff !important;">ANDRI HENDRAWAN</span>
                                        <span class="member-role badge bg-gold" style="color: #ffffff !important; background-color: rgba(0,0,0,0.6) !important;">Direktur</span>
                                    </div>
                                    @endforelse
                                </div>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Vertical Connector 2 (to divisions) -->
                    <div class="org-connector"></div>

                    <!-- Level 3: Divisions (arranged in grid) -->
                    <div class="org-level level-3">
                        <div class="level-label-wrapper">
                            <span class="level-label" style="color: #ffffff !important;">Operasional</span>
                        </div>
                        <div class="divisions-grid-3d">
                            <div class="row g-3 justify-content-center">
                                @forelse($divisi ?? [] as $item)
                                <div class="col-4">
                                    <div class="division-card-3d">
                                        <div class="division-inner">
                                            <div class="division-icon-wrapper mb-2">
                                                <i class="fas fa-diagram-project fa-2x text-brown-dark"></i>
                                            </div>
                                            <h6 class="fw-bold text-brown-dark mb-1">{{ $item->name }}</h6>
                                            <p class="text-brown-light small">{{ $item->position ?? 'Divisi' }}</p>
                                            <div class="card-corner corner-1"></div>
                                            <div class="card-corner corner-2"></div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <!-- 10 divisi default -->
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Pengembangan</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Umum</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Pemasaran, Pembina Relasi dan Promosi</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Administrasi dan Personalia</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Keuangan dan Perlengkapan</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Tata Ruang</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Arsitektur dan Landscaping</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Lingkungan</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Sipil</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                <div class="col-4"><div class="division-card-3d"><div class="division-inner"><div class="division-icon-wrapper mb-2"><i class="fas fa-diagram-project fa-2x text-brown-dark"></i></div><h6 class="fw-bold text-brown-dark mb-1">Divisi Manajemen</h6><p class="text-brown-light small">Divisi</p></div></div></div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <!-- Vertical Connector 3 -->
                    <div class="org-connector"></div>

                    <!-- Level 4: Staff & Support -->
                    <div class="org-level level-4">
                        <div class="level-label-wrapper">
                            <span class="level-label" style="color: #ffffff !important;">Pelaksana</span>
                        </div>
                        <div class="staff-card-3d">
                            <div class="staff-inner">
                                <div class="org-icon-wrapper mb-3">
                                    <i class="fas fa-users fa-2x text-white"></i>
                                </div>
                                <h4 class="fw-bold mb-3" style="color: #ffffff !important;">Tenaga Ahli & Staf</h4>
                                <div class="staff-badges d-flex flex-wrap gap-2 justify-content-center">
                                    <span class="badge" style="color: #ffffff !important; background-color: rgba(0,0,0,0.7) !important;">Tenaga Ahli</span>
                                    <span class="badge" style="color: #ffffff !important; background-color: rgba(0,0,0,0.7) !important;">Staf Teknis</span>
                                    <span class="badge" style="color: #ffffff !important; background-color: rgba(0,0,0,0.7) !important;">Administrasi</span>
                                    <span class="badge" style="color: #ffffff !important; background-color: rgba(0,0,0,0.7) !important;">Pendukung</span>
                                </div>
                                <div class="card-corner corner-1"></div>
                                <div class="card-corner corner-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Accordion -->
            <div class="org-chart-mobile d-block d-lg-none mt-4">
                <div class="accordion" id="orgAccordion">
                    <!-- Komisaris -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#komisaris">
                                <i class="fas fa-user-tie me-3"></i>Dewan Komisaris
                            </button>
                        </h2>
                        <div id="komisaris" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <div class="d-flex flex-column gap-3">
                                    @forelse($komisaris ?? [] as $item)
                                    <div>
                                        <strong>{{ $item->name }}</strong>
                                        <span class="badge bg-cream-light text-brown-dark ms-2">{{ $item->position }}</span>
                                    </div>
                                    @empty
                                    <div><strong>DEDE SAMSUL MUHAROM</strong> <span class="badge bg-cream-light text-brown-dark ms-2">Komisaris Utama</span></div>
                                    <div><strong>ENDAH NURAENI</strong> <span class="badge bg-cream-light text-brown-dark ms-2">Komisaris</span></div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Direksi -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#direksi">
                                <i class="fas fa-user-tie me-3"></i>Direksi
                            </button>
                        </h2>
                        <div id="direksi" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="d-flex flex-column gap-3">
                                    @forelse($direksi ?? [] as $item)
                                    <div>
                                        <strong>{{ $item->name }}</strong>
                                        <span class="badge bg-cream-light text-brown-dark ms-2">{{ $item->position }}</span>
                                    </div>
                                    @empty
                                    <div><strong>MURIA CIPTA, ST</strong> <span class="badge bg-cream-light text-brown-dark ms-2">Direktur Utama</span></div>
                                    <div><strong>ANDRI HENDRAWAN</strong> <span class="badge bg-cream-light text-brown-dark ms-2">Direktur</span></div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Divisi -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#divisi">
                                <i class="fas fa-layer-group me-3"></i>Divisi Operasional ({{ $jumlahDivisi }})
                            </button>
                        </h2>
                        <div id="divisi" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    @forelse($divisi ?? [] as $item)
                                    <li><i class="fas fa-diagram-project me-2"></i>{{ $item->name }}</li>
                                    @empty
                                    <li>Divisi Pengembangan</li><li>Divisi Umum</li><li>Divisi Pemasaran, Pembina Relasi dan Promosi</li>
                                    <li>Divisi Administrasi dan Personalia</li><li>Divisi Keuangan dan Perlengkapan</li>
                                    <li>Divisi Tata Ruang</li><li>Divisi Arsitektur dan Landscaping</li>
                                    <li>Divisi Lingkungan</li><li>Divisi Sipil</li><li>Divisi Manajemen</li>
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Staff -->
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#staff">
                                <i class="fas fa-users me-3"></i>Tenaga Ahli & Staf
                            </button>
                        </h2>
                        <div id="staff" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <span class="badge bg-cream-dark me-1">Tenaga Ahli</span>
                                <span class="badge bg-cream-dark me-1">Staf Teknis</span>
                                <span class="badge bg-cream-dark me-1">Administrasi</span>
                                <span class="badge bg-cream-dark">Pendukung</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MANAGEMENT TEAM – 3D CARDS (gabungan komisaris & direksi) -->
    {{-- <section class="py-6 bg-white position-relative">
        <div class="container">
            <div class="section-header text-center mb-6">
                <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3">
                    <i class="fas fa-crown me-2"></i>MANAJEMEN
                </span>
                <h2 class="display-5 fw-bold text-brown-dark mb-3">Tim Manajemen</h2>
                <p class="lead text-brown-medium mx-auto" style="max-width: 600px;">
                    Pemimpin yang mengarahkan perusahaan menuju keunggulan.
                </p>
            </div>

            @php
                $management = collect();
                if(isset($komisaris)) $management = $management->concat($komisaris);
                if(isset($direksi)) $management = $management->concat($direksi);
            @endphp

            <div class="row g-4 justify-content-center">
                @forelse($management as $item)
                <div class="col-lg-3 col-md-6">
                    <div class="team-card-3d animate-on-scroll">
                        <div class="team-card-inner">
                            <div class="team-icon-wrapper mb-3">
                                <i class="fas fa-user-tie fa-3x text-brown-dark"></i>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-1">{{ $item->name }}</h5>
                            <p class="text-brown-medium small mb-2">
                                <span class="badge bg-cream-light text-brown-dark">{{ $item->position }}</span>
                            </p>
                            <div class="team-divider"></div>
                            <p class="text-brown-light small">
                                {{ $item->category == 'komisaris' ? 'Pengawasan dan arahan strategis' : 'Pengelola operasional perusahaan' }}
                            </p>
                            <div class="card-corner corner-1"></div>
                            <div class="card-corner corner-2"></div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <p class="text-brown-medium">Belum ada data tim manajemen.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section> --}}

    <!-- CTA SECTION -->
    <section class="py-6 cta-elegant">
        <div class="container">
            <div class="cta-content-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="display-6 fw-bold mb-3">Pelajari Lebih Lanjut</h2>
                        <p class="lead mb-0">
                            Ingin mengetahui detail tentang divisi atau tim kami? Hubungi kami untuk informasi lebih lanjut.
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
        <a href="{{ route('about') }}" class="btn btn-outline-brown-3d rounded-pill px-5 py-3 back-button">
            <i class="fas fa-arrow-left me-2"></i>Kembali ke Profil Perusahaan
        </a>
    </div>
@endsection

@push('styles')
<style>
    /* ===== INHERIT FULL STYLE FROM HOME PAGE (sama seperti sebelumnya) ===== */
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
    .org-hero {
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

    /* Typography & Badges */
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

    /* Typewriter Effect */
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

    /* Scroll Indicator */
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

    /* Breadcrumb */
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

    /* 3D Stat Card */
    .stat-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .stat-card-inner {
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
    .stat-card-3d:hover .stat-card-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }
    .stat-icon-wrapper {
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
    .stat-card-3d:hover .stat-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* Org Chart 3D */
    .org-chart-3d {
        background: rgba(255,255,255,0.5);
        backdrop-filter: blur(5px);
        border-radius: 2rem;
        padding: 3rem 2rem;
        border: 1px solid rgba(93,64,55,0.1);
        box-shadow: var(--shadow-3d);
    }
    .org-chart-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
    }
    .org-level {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .level-label-wrapper {
        margin-bottom: 1rem;
    }
    .level-label {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        padding: 0.5rem 2rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 0.5px;
    }
    .org-card {
        perspective: 1000px;
        width: 100%;
        max-width: 320px;
    }
    .org-card-inner {
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        text-align: center;
    }
    .org-card:hover .org-card-inner {
        transform: rotateY(-2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.3);
    }
    .komisaris-card .org-card-inner { background: linear-gradient(135deg, #4A342E, var(--brown-dark)); }
    .direksi-card .org-card-inner { background: linear-gradient(135deg, var(--brown-medium), var(--brown-dark)); }
    .org-icon-wrapper {
        width: 70px;
        height: 70px;
        background: rgba(255,255,255,0.2);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s;
    }
    .org-card:hover .org-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }
    .org-members {
        display: flex;
        flex-direction: column;
        gap: 0.75rem;
    }
    .org-member {
        background: rgba(255,255,255,0.1);
        border-radius: 1rem;
        padding: 0.75rem;
    }
    .member-name {
        display: block;
        font-weight: 600;
        margin-bottom: 0.25rem;
    }
    .member-role {
        font-size: 0.75rem;
        padding: 0.25rem 0.5rem;
        border: 1px solid #302574;
    }
    .org-connector {
        width: 2px;
        height: 40px;
        background: linear-gradient(to bottom, var(--cream-gold), var(--brown-light));
    }

    /* Divisions Grid 3D */
    .divisions-grid-3d {
        width: 100%;
    }
    .division-card-3d {
        perspective: 1000px;
        height: 100%;
    }
    .division-inner {
        background: white;
        border-radius: 1.5rem;
        padding: 1.5rem 1rem;
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
    .division-card-3d:hover .division-inner {
        transform: rotateY(2deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.2);
        border-color: var(--cream-gold);
    }
    .division-icon-wrapper {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--cream-gold), var(--brown-light));
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1rem;
        transition: all 0.3s;
    }
    .division-card-3d:hover .division-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    /* Staff Card */
    .staff-card-3d {
        perspective: 1000px;
        width: 100%;
        max-width: 320px;
    }
    .staff-inner {
        background: linear-gradient(135deg, var(--brown-light), var(--brown-medium));
        border-radius: 2rem;
        padding: 2rem;
        box-shadow: var(--shadow-3d);
        transition: all 0.4s;
        transform-style: preserve-3d;
        transform: rotateY(0deg) rotateX(1deg);
        position: relative;
        overflow: hidden;
        text-align: center;
    }
    .staff-card-3d:hover .staff-inner {
        transform: rotateY(1deg) rotateX(1deg) translateY(-5px);
        box-shadow: 0 30px 60px rgba(93,64,55,0.25);
    }

    /* Team Card 3D */
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
    .team-divider {
        width: 50px;
        height: 2px;
        background: var(--cream-gold);
        margin: 1rem auto;
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

    /* Background decorations */
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

    /* CTA Section */
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

    /* Animations */
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

    /* ===== PERBAIKAN UTAMA: WARNA TEKS PUTIH PADA BAGIAN GELAP (DIPAKSA) ===== */
    /* Semua teks di dalam card komisaris, direksi, dan staff dipaksa putih */
    .org-card-inner,
    .org-card-inner *,
    .staff-inner,
    .staff-inner *,
    .level-label,
    .level-label * {
        color: #ffffff !important;
    }

    /* Badge role di dalam struktur (Komisaris Utama, Direktur Utama, dll) */
    .org-member .member-role {
        background-color: rgba(0, 0, 0, 0.7) !important;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
    }

    /* Badge staff (Tenaga Ahli, Staf Teknis, Administrasi, Pendukung) */
    .staff-badges .badge {
        background-color: rgba(0, 0, 0, 0.7) !important;
        color: #ffffff !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
    }

    /* ===== PERBAIKAN WARNA TOMBOL KEMBALI KE PROFIL PERUSAHAAN (HITAM) ===== */
    .back-button,
    .back-button i,
    .back-button span {
        color: #000000 !important;
        border-color: #000000 !important;
    }
    .back-button:hover {
        background: #000000 !important;
        color: #ffffff !important;
    }
    .back-button:hover i,
    .back-button:hover span {
        color: #ffffff !important;
    }

    /* Utilities */
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

    /* Responsive */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .org-hero { padding: 5rem 0 3rem; }
        .org-chart-3d { padding: 2rem 1rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }
    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .typewriter-text { font-size: 1.5rem !important; }
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
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('visible'); });
        }, { threshold: 0.2, rootMargin: '0px 0px -50px 0px' });
        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));

        // 3D tilt effect
        const cards = document.querySelectorAll('.stat-card-inner, .org-card-inner, .division-inner, .team-card-inner, .staff-inner');
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
