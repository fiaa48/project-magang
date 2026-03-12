@extends('user.layouts.app')

@section('title', ($project['title'] ?? 'Proyek') . ' | PT Mitra Nusa Konsulindo')
@section('description', $project['short_description'] ?? '')

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
                                <a href="{{ route('projects') }}" class="text-brown-medium">Project</a>
                            </li>
                            <li class="breadcrumb-item active text-brown-dark" aria-current="page">
                                {{ $project['title'] ?? '' }}
                            </li>
                        </ol>
                    </nav>

                    <!-- Category Badge – same style as home badge -->
                    <div class="company-badge mb-4">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-tag me-2"></i>{{ $project['category'] ?? 'Proyek' }}
                        </span>
                    </div>

                    <!-- Main Title – with gradient -->
                    <h1 class="display-4 fw-bold mb-4 text-brown-dark">
                        {{ $project['title'] ?? '' }}
                    </h1>

                    <!-- Short Description -->
                    <p class="lead fs-5 text-brown-medium lh-lg mx-auto mb-5" style="max-width: 800px;">
                        {{ $project['short_description'] ?? '' }}
                    </p>

                    <!-- Project Meta – like stats on home, with hover effect -->
                    <div class="project-meta row justify-content-center g-4">
                        @if(isset($project['year']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-calendar-alt fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Tahun</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $project['year'] }}</div>
                            </div>
                        </div>
                        @endif
                        @if(isset($project['location']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-map-marker-alt fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Lokasi</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $project['location'] }}</div>
                            </div>
                        </div>
                        @endif
                        @if(isset($project['client']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-user-tie fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Klien</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $project['client'] }}</div>
                            </div>
                        </div>
                        @endif
                        @if(isset($project['duration']))
                        <div class="col-md-3 col-6">
                            <div class="meta-item">
                                <i class="fas fa-clock fa-2x text-brown-dark mb-2"></i>
                                <div class="meta-label text-brown-medium">Durasi</div>
                                <div class="meta-value fw-bold text-brown-dark">{{ $project['duration'] }}</div>
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
                <a href="{{ route('projects') }}" class="btn btn-outline-brown-dark rounded-pill px-4">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Project
                </a>
            </div>

            <div class="row g-5">
                <!-- LEFT COLUMN: MAIN IMAGE, GALLERY, DESCRIPTION -->
                <div class="col-lg-8">
                    <!-- Main Image – premium shadow, hover effect -->
                    <div class="main-image-wrapper rounded-4 overflow-hidden shadow-lg mb-4">
                        <img src="{{ asset('images/' . ($project['image'] ?? 'default.jpg')) }}"
                             alt="{{ $project['title'] ?? '' }}"
                             class="img-fluid w-100"
                             id="mainImage"
                             onerror="this.onerror=null; this.src='https://placehold.co/1200x800/5D4037/FFFFFF?text={{ urlencode($project['title'] ?? 'Proyek') }}';">
                    </div>

                    <!-- Gallery Thumbnails – with onclick to change main image -->
                    @if(!empty($project['gallery']) && count($project['gallery']) > 0)
                    <div class="thumbnail-gallery mb-5">
                        <h5 class="fw-bold text-brown-dark mb-3">
                            <i class="fas fa-images me-2"></i>Galeri Proyek
                        </h5>
                        <div class="row g-3">
                            @foreach($project['gallery'] as $image)
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
                        <p class="text-brown-medium fs-5 mb-4">{{ $project['description'] ?? '' }}</p>

                        <!-- Detailed Work List -->
                        @if(!empty($project['details']) && count($project['details']) > 0)
                        <div class="detailed-info mt-5">
                            <h4 class="fw-bold text-brown-dark mb-3">Detail Pekerjaan</h4>
                            <ul class="list-unstyled">
                                @foreach($project['details'] as $detail)
                                <li class="d-flex mb-3">
                                    <i class="fas fa-check-circle text-brown-dark mt-1 me-3"></i>
                                    <span class="text-brown-medium">{{ $detail }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Tags -->
                        @if(!empty($project['tags']) && count($project['tags']) > 0)
                        <div class="project-tags mt-5">
                            <h4 class="fw-bold text-brown-dark mb-3">
                                <i class="fas fa-tags me-2"></i>Tags
                            </h4>
                            @foreach($project['tags'] as $tag)
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
                                        {{ $project['start_date'] ?? 'N/A' }} – {{ $project['end_date'] ?? 'N/A' }}
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
                                        {{ $project['team_size'] ?? 'N/A' }}
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
                                        {{ $project['scope'] ?? 'N/A' }}
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
                                            {{ $project['status'] ?? 'Selesai' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Card – if available -->
                    @if(!empty($project['testimonial']))
                    <div class="testimonial-card shadow-lg rounded-4 overflow-hidden mb-5">
                        <div class="card-header bg-cream-light py-4">
                            <h3 class="h4 fw-bold mb-0 text-brown-dark">
                                <i class="fas fa-quote-left me-2"></i>Testimoni
                            </h3>
                        </div>
                        <div class="card-body p-4">
                            <blockquote class="blockquote mb-0">
                                <p class="text-brown-medium fst-italic">"{{ $project['testimonial'] }}"</p>
                                <footer class="blockquote-footer mt-2 text-brown-dark">
                                    {{ $project['client'] ?? 'Klien' }}
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
    /* ... semua CSS tetap sama ... */
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
    });
</script>
@endpush
