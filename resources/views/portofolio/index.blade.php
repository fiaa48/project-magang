@extends('layouts.app')

@section('title', 'Portofolio Proyek | PT Mitra Nusa Konsulindo')

@section('content')

<!-- PORTOFOLIO HERO -->
<section class="portfolio-hero py-6">
    <div class="container text-center">
        <span class="badge bg-brown-dark text-black rounded-pill px-4 py-2 shadow-sm">
            Portofolio Perusahaan
        </span>

        <h1 class="display-5 fw-bold text-brown-dark mt-4">
            Portofolio Proyek
        </h1>

        <p class="lead text-brown-medium mt-3 mx-auto" style="max-width: 720px;">
            Rekam jejak proyek profesional PT Mitra Nusa Konsulindo
            dalam jasa konsultansi konstruksi dan non-konstruksi.
        </p>
    </div>
</section>

<!-- FILTER -->
<section class="py-4 bg-white">
    <div class="container text-center">
        <div class="portfolio-filter d-flex flex-wrap justify-content-center gap-2">
            <button class="filter-btn active" data-filter="all">Semua</button>
            @foreach(collect($portofolios)->pluck('category')->unique() as $cat)
                <button class="filter-btn" data-filter="{{ Str::slug($cat) }}">
                    {{ $cat }}
                </button>
            @endforeach
        </div>
    </div>
</section>

<!-- PORTOFOLIO GRID -->
<section class="py-6 bg-white">
    <div class="container">
        <div class="row g-4 portfolio-wrapper">
            @forelse ($portofolios as $portofolio)
                <div
                    class="col-lg-4 col-md-6 portfolio-item"
                    data-category="{{ Str::slug($portofolio['category']) }}"
                >
                    <div class="portfolio-card h-100">

                        <!-- IMAGE -->
                        <div class="portfolio-image">
                            <img
                                src="{{ asset('images/' . $portofolio['image']) }}"
                                alt="{{ $portofolio['title'] }}"
                            >
                            <div class="portfolio-overlay">
                                <span>Lihat Proyek</span>
                            </div>
                        </div>

                        <!-- BODY -->
                        <div class="portfolio-body">
                            <span class="category-badge mb-3">
                                {{ $portofolio['category'] }}
                            </span>

                            <h5 class="fw-bold text-brown-dark mb-3">
                                {{ $portofolio['title'] }}
                            </h5>

                            <p class="text-brown-medium mb-4">
                                {{ $portofolio['description'] }}
                            </p>

                            <a
                                href="{{ $portofolio['link'] }}"
                                target="_blank"
                                class="btn btn-outline-brown-dark w-100 rounded-pill"
                            >
                                Detail Proyek
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-6">
                    <p class="text-muted fs-5">
                        Belum ada data portofolio.
                    </p>
                </div>
            @endforelse
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* css portofolio */

.portfolio-hero {
    background: linear-gradient(
        135deg,
        #E7DED9,
        #F5F0ED
    );
}

/* FILTER */
.portfolio-filter .filter-btn {
    border: 1px solid rgba(93,64,55,.2);
    background: #fff;
    padding: .55rem 1.5rem;
    border-radius: 50rem;
    font-weight: 600;
    color: var(--brown-dark);
    transition: all .3s ease;
}

.portfolio-filter .filter-btn.active,
.portfolio-filter .filter-btn:hover {
    background: var(--brown-dark);
    color: #9c3e22;
}

/* CARD */
.portfolio-card {
    background: #fff;
    border-radius: 1.5rem;
    overflow: hidden;
    border: 1px solid rgba(93,64,55,.12);
    box-shadow: var(--shadow-sm);
    transition: all .45s cubic-bezier(.4,0,.2,1);
}

.portfolio-card:hover {
    transform: translateY(-14px);
    box-shadow: var(--shadow-lg);
}

/* IMAGE */
.portfolio-image {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.portfolio-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .6s ease;
}

.portfolio-card:hover img {
    transform: scale(1.12);
}

/* OVERLAY */
.portfolio-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(93,64,55,.75),
        rgba(0,0,0,.1)
    );
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-weight: 600;
    letter-spacing: .5px;
    opacity: 0;
    transition: opacity .4s ease;
}

.portfolio-card:hover .portfolio-overlay {
    opacity: 1;
}

/* BODY */
.portfolio-body {
    padding: 2.25rem 2rem;
    text-align: center;
}

.category-badge {
    background: rgba(93,64,55,.12);
    color: var(--brown-dark);
    font-weight: 600;
    padding: .5rem 1.25rem;
    border-radius: 50rem;
}

/* FILTER ANIMATION */
.portfolio-item {
    transition: all .4s ease;
}

.portfolio-item.hide {
    opacity: 0;
    transform: scale(.95);
    pointer-events: none;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .portfolio-image {
        height: 200px;
    }

    .portfolio-body {
        padding: 2rem 1.5rem;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.portfolio-item');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            items.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.classList.remove('hide');
                } else {
                    item.classList.add('hide');
                }
            });
        });
    });
});
</script>
@endpush
