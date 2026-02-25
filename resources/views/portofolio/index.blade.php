@extends('layouts.app')

@section('title', 'Portofolio Proyek | PT Mitra Nusa Konsulindo')
@section('description', 'Jelajahi proyek-proyek unggulan kami di bidang konsultansi konstruksi dan non-konstruksi.')

@section('content')
    <!-- HERO SECTION – PREMIUM, SAME STYLE AS HOME -->
    <section class="portfolio-hero position-relative overflow-hidden">
        <!-- Background Pattern (same as home) -->
        <div class="hero-bg-pattern">
            <div class="pattern-circle circle-1"></div>
            <div class="pattern-circle circle-2"></div>
            <div class="pattern-square square-1"></div>
        </div>

        <div class="container position-relative z-3">
            <div class="row min-vh-60 align-items-center">
                <div class="col-lg-8 mx-auto text-center">
                    <!-- Badge – same style -->
                    <div class="company-badge mb-5">
                        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 fs-6 fw-normal">
                            <i class="fas fa-folder-open me-2"></i>KARYA TERBARU
                        </span>
                    </div>

                    <!-- Main Heading with gradient -->
                    <h1 class="display-2 fw-bold mb-4 text-brown-dark">
                        Portofolio <span class="text-gradient-brown">Proyek</span>
                    </h1>

                    <!-- Subtitle -->
                    <p class="lead fs-4 text-brown-medium lh-lg mx-auto" style="max-width: 700px;">
                        Telusuri karya terbaik kami dalam menyelesaikan berbagai proyek konsultansi
                        dengan standar profesional tertinggi.
                    </p>

                    <!-- Stats – same style as home -->
                    <div class="stats-wrapper mt-6">
                        <div class="row g-4 justify-content-center">
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-brown-dark">50+</div>
                                    <div class="stat-label text-brown-medium">Proyek Selesai</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-brown-dark">8</div>
                                    <div class="stat-label text-brown-medium">Bidang Keahlian</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-brown-dark">15+</div>
                                    <div class="stat-label text-brown-medium">Klien Puas</div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="stat-item">
                                    <div class="stat-number display-4 fw-bold text-brown-dark">5+</div>
                                    <div class="stat-label text-brown-medium">Tahun Pengalaman</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FILTER & SEARCH SECTION – SAME STYLE -->
    <section class="py-5 bg-cream-light">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-4">
                    <div class="search-box position-relative">
                        <i class="fas fa-search text-brown-medium"></i>
                        <input type="text" id="portfolioSearch" placeholder="Cari proyek..." class="form-control border-brown-light">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="filter-section">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-filter active" data-filter="all">
                                <i class="fas fa-th-large me-2"></i>Semua
                            </button>
                            <button class="btn btn-filter" data-filter="arsitektur">
                                <i class="fas fa-drafting-compass me-2"></i>Arsitektur
                            </button>
                            <button class="btn btn-filter" data-filter="teknik-sipil">
                                <i class="fas fa-industry me-2"></i>Teknik Sipil
                            </button>
                            <button class="btn btn-filter" data-filter="sumber-daya-air">
                                <i class="fas fa-water me-2"></i>Sumber Daya Air
                            </button>
                            <button class="btn btn-filter" data-filter="tata-ruang">
                                <i class="fas fa-map-marked-alt me-2"></i>Tata Ruang
                            </button>
                            <button class="btn btn-filter" data-filter="lingkungan">
                                <i class="fas fa-leaf me-2"></i>Lingkungan
                            </button>
                            <button class="btn btn-filter" data-filter="manajemen-proyek">
                                <i class="fas fa-chart-line me-2"></i>Manajemen Proyek
                            </button>
                            <button class="btn btn-filter" data-filter="jasa-survey">
                                <i class="fas fa-search me-2"></i>Jasa Survey
                            </button>
                            <button class="btn btn-filter" data-filter="desain-interior">
                                <i class="fas fa-couch me-2"></i>Desain Interior
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="active-filters mt-4" id="activeFilters"></div>
        </div>
    </section>

    <!-- PORTOFOLIO GRID – LANGSUNG TAMPIL -->
    <section class="py-6 bg-white">
        <div class="container">
            <div class="row g-4 portfolio-wrapper" id="portfolioGrid">
                @forelse($portofolios as $portofolio)
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="{{ Str::slug($portofolio['category']) }}">
                    <div class="portfolio-card h-100">
                        <div class="portfolio-image">
                            <img src="{{ asset('images/' . $portofolio['image']) }}"
                                 alt="{{ $portofolio['title'] }}"
                                 onerror="this.onerror=null; this.src='https://placehold.co/600x400/5D4037/FFFFFF?text={{ urlencode($portofolio['title']) }}';">
                            <div class="portfolio-overlay">
                                <span><i class="fas fa-search-plus me-2"></i>Lihat Detail</span>
                            </div>
                        </div>
                        <div class="portfolio-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="category-badge">
                                    <i class="fas fa-folder me-1"></i>{{ $portofolio['category'] }}
                                </span>
                                <span class="text-brown-medium small">
                                    <i class="fas fa-calendar me-1"></i>{{ $portofolio['year'] }}
                                </span>
                            </div>
                            <h5 class="fw-bold text-brown-dark mb-3">{{ $portofolio['title'] }}</h5>
                            <p class="text-brown-medium mb-4">{{ $portofolio['short_description'] }}</p>
                            <div class="portfolio-footer">
                                <div class="d-flex justify-content-between align-items-center">
                                    @if(isset($portofolio['location']))
                                    <span class="text-brown-light small">
                                        <i class="fas fa-map-marker-alt me-1"></i>{{ $portofolio['location'] }}
                                    </span>
                                    @endif
                                    <a href="{{ route('portofolio.details', $portofolio['id']) }}" class="btn btn-sm btn-brown-dark rounded-pill">
                                        Detail <i class="fas fa-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-6">
                    <div class="empty-state">
                        <i class="fas fa-folder-open fa-4x text-brown-light mb-4"></i>
                        <h4 class="text-brown-dark mb-3">Belum Ada Proyek</h4>
                        <p class="text-brown-medium">Portofolio akan segera hadir.</p>
                    </div>
                </div>
                @endforelse
            </div>

            <!-- No Results (hidden by default) -->
            <div id="noResults" class="text-center py-6" style="display: none;">
                <div class="empty-state">
                    <i class="fas fa-search fa-4x text-brown-light mb-4"></i>
                    <h4 class="text-brown-dark mb-3">Proyek tidak ditemukan</h4>
                    <p class="text-brown-medium mb-4">Coba kata kunci atau filter yang berbeda</p>
                    <button class="btn btn-brown-dark rounded-pill px-4" id="resetSearch">
                        <i class="fas fa-redo me-2"></i>Reset Pencarian
                    </button>
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
                        <h2 class="display-6 fw-bold mb-3">Siap Mewujudkan Proyek Impian Anda?</h2>
                        <p class="lead mb-0">
                            Konsultasikan kebutuhan proyek konstruksi atau non-konstruksi Anda dengan tim ahli kami.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="{{ route('contact') }}" class="btn btn-brown btn-lg px-5 rounded-pill">
                            <i class="fas fa-paper-plane me-2"></i>Hubungi Kami
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

    /* ----- Hero Section (Portfolio specific) ----- */
    .portfolio-hero {
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

    /* ----- Stats (same as home) ----- */
    .stats-wrapper {
        background: rgba(255, 255, 255, 0.1);
        padding: 2.5rem 2rem;
        border-radius: 1rem;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(93,64,55,0.2);
        animation: fadeInUp 0.8s ease-out 0.6s both;
    }

    .stat-item {
        text-align: center;
        padding: 0.5rem;
    }

    .stat-number {
        font-weight: 700;
        line-height: 1;
        margin-bottom: 0.75rem !important;
        font-size: 3.5rem !important;
        color: var(--brown-dark);
    }

    .stat-label {
        font-size: 0.95rem;
        color: var(--brown-medium);
        font-weight: 500;
        letter-spacing: 0.3px;
    }

    /* ----- Search & Filter (custom but matching) ----- */
    .search-box i {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--brown-medium);
        z-index: 10;
    }

    .search-box input {
        padding-left: 50px;
        height: 50px;
        border-radius: 12px;
        border: 2px solid var(--brown-light);
        background: white;
        font-size: 0.95rem;
        transition: all 0.3s ease;
    }

    .search-box input:focus {
        border-color: var(--brown-dark);
        box-shadow: 0 0 0 0.25rem rgba(93,64,55,0.25);
    }

    .btn-filter {
        background: white;
        border: 2px solid var(--brown-light);
        color: var(--brown-medium);
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-filter.active,
    .btn-filter:hover {
        background: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-sm);
    }

    /* ----- Portfolio Cards (premium, matching home service cards) ----- */
    .portfolio-card {
        background: white;
        border-radius: 1.5rem;
        overflow: hidden;
        border: 1px solid rgba(93,64,55,0.1);
        box-shadow: var(--shadow-sm);
        transition: all 0.4s cubic-bezier(0.4,0,0.2,1);
        height: 100%;
    }

    .portfolio-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-lg);
        border-color: var(--brown-light);
    }

    .portfolio-image {
        position: relative;
        height: 220px;
        overflow: hidden;
    }

    .portfolio-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s ease;
    }

    .portfolio-card:hover .portfolio-image img {
        transform: scale(1.1);
    }

    .portfolio-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(93,64,55,0.9) 0%, rgba(0,0,0,0.1) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .portfolio-card:hover .portfolio-overlay {
        opacity: 1;
    }

    .portfolio-overlay span {
        background: rgba(255,255,255,0.2);
        backdrop-filter: blur(10px);
        padding: 12px 25px;
        border-radius: 50px;
        border: 1px solid rgba(255,255,255,0.3);
        transform: translateY(20px);
        transition: transform 0.4s ease;
        color: white;
        font-weight: 600;
    }

    .portfolio-card:hover .portfolio-overlay span {
        transform: translateY(0);
    }

    .portfolio-body {
        padding: 1.75rem;
    }

    .category-badge {
        display: inline-block;
        background: rgba(93,64,55,0.1);
        color: var(--brown-dark);
        font-weight: 600;
        padding: 6px 16px;
        border-radius: 50px;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .portfolio-card:hover .category-badge {
        background: var(--brown-dark);
        color: white;
    }

    .portfolio-body h5 {
        font-size: 1.25rem;
        margin-bottom: 0.75rem;
        line-height: 1.4;
        color: var(--brown-dark);
        font-weight: 700;
    }

    .portfolio-body p {
        color: var(--brown-medium);
        line-height: 1.6;
        margin-bottom: 1.25rem;
        font-size: 0.95rem;
    }

    .portfolio-footer {
        border-top: 1px solid rgba(93,64,55,0.1);
        padding-top: 1rem;
        margin-top: 1rem;
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

    .btn-sm {
        padding: 0.5rem 1.2rem;
        font-size: 0.9rem;
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
        -webkit-background-clip: text;
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

    .rounded-pill {
        border-radius: 50rem !important;
    }

    .bg-cream-light {
        background-color: var(--cream-light) !important;
    }

    /* ----- Empty State ----- */
    .empty-state i {
        color: var(--brown-light);
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

    /* ----- Responsive (same as home) ----- */
    @media (max-width: 992px) {
        .display-2 { font-size: 3rem !important; }
        .stat-number { font-size: 2.75rem !important; }
        .stats-wrapper { padding: 2rem 1.5rem; }
        .cta-content-wrapper { padding: 2rem 1.5rem; }
    }

    @media (max-width: 768px) {
        .display-2 { font-size: 2.5rem !important; }
        .stat-number { font-size: 2.25rem !important; }
        .portfolio-image { height: 200px; }
        .portfolio-body { padding: 1.5rem; }
        .btn-filter { padding: 6px 15px; font-size: 0.9rem; }
    }

    @media (max-width: 576px) {
        .display-2 { font-size: 2rem !important; }
        .stat-number { font-size: 2rem !important; }
        .stats-wrapper { padding: 1.5rem 1rem; }
        .btn-filter { width: 100%; margin-bottom: 0.5rem; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ----- ELEMENTS -----
        const filterButtons = document.querySelectorAll('.btn-filter');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        const noResults = document.getElementById('noResults');
        const searchInput = document.getElementById('portfolioSearch');
        const resetBtn = document.getElementById('resetSearch');

        // ----- FILTER & SEARCH FUNCTION -----
        function filterItems() {
            const activeFilter = document.querySelector('.btn-filter.active')?.dataset.filter || 'all';
            const searchTerm = searchInput?.value.toLowerCase().trim() || '';
            let visibleCount = 0;

            portfolioItems.forEach(item => {
                const category = item.dataset.category;
                const title = item.querySelector('h5')?.innerText.toLowerCase() || '';
                const desc = item.querySelector('p')?.innerText.toLowerCase() || '';

                const matchFilter = activeFilter === 'all' || category === activeFilter;
                const matchSearch = searchTerm === '' || title.includes(searchTerm) || desc.includes(searchTerm);

                if (matchFilter && matchSearch) {
                    item.style.display = 'block';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });

            if (noResults) {
                noResults.style.display = visibleCount === 0 ? 'block' : 'none';
            }
        }

        // ----- FILTER BUTTON CLICK -----
        filterButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                filterItems();
            });
        });

        // ----- SEARCH INPUT -----
        if (searchInput) {
            searchInput.addEventListener('input', filterItems);
        }

        // ----- RESET BUTTON -----
        if (resetBtn) {
            resetBtn.addEventListener('click', function() {
                searchInput.value = '';
                document.querySelector('.btn-filter[data-filter="all"]')?.click();
                filterItems();
            });
        }

        // ----- STATS ANIMATION (like home) -----
        const observerOptions = { threshold: 0.5 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const stats = entry.target.querySelectorAll('.stat-number');
                    stats.forEach(stat => {
                        const target = parseInt(stat.textContent);
                        let current = 0;
                        const increment = target / 50;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                current = target;
                                clearInterval(timer);
                            }
                            stat.textContent = Math.floor(current) + (stat.textContent.includes('+') ? '+' : '');
                        }, 30);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const statsSection = document.querySelector('.stats-wrapper');
        if (statsSection) observer.observe(statsSection);
    });
</script>
@endpush
