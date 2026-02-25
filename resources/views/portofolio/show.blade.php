@extends('layouts.app')

@section('title', $portofolio['title'] . ' | Portofolio Proyek')

@section('content')

<!-- DETAIL HERO -->
<section class="portfolio-detail-hero py-6">
    <div class="container text-center">
        <span class="badge bg-brown-dark text-black rounded-pill px-4 py-2 shadow-sm">
            Detail Proyek
        </span>

        <h1 class="display-6 fw-bold text-brown-dark mt-4">
            {{ $portofolio['title'] }}
        </h1>

        <p class="lead text-brown-medium mt-3 mx-auto" style="max-width: 720px;">
            {{ $portofolio['description'] }}
        </p>
    </div>
</section>

<!-- DETAIL CONTENT -->
<section class="py-6 bg-white">
    <div class="container">

        <!-- BACK BUTTON -->
        <div class="mb-5">
            <a href="{{ route('portofolio') }}" class="btn btn-outline-brown-dark rounded-pill px-4">
                <i class="fas fa-arrow-left me-2"></i>
                Kembali ke Portofolio
            </a>
        </div>

        <div class="row align-items-center g-5">

            <!-- IMAGE -->
            <div class="col-lg-6">
                <div class="portfolio-detail-image">
                    <img
                        src="{{ asset('images/' . $portofolio['image']) }}"
                        alt="{{ $portofolio['title'] }}"
                    >
                </div>
            </div>

            <!-- INFO -->
            <div class="col-lg-6">
                <div class="portfolio-detail-info">

                    <span class="category-badge mb-3">
                        {{ $portofolio['category'] }}
                    </span>

                    <h2 class="fw-bold text-brown-dark mb-4">
                        {{ $portofolio['title'] }}
                    </h2>

                    <p class="text-brown-medium fs-5 mb-4">
                        {{ $portofolio['description'] }}
                    </p>

                    @if(!empty($portofolio['link']))
                        <a
                            href="{{ $portofolio['link'] }}"
                            target="_blank"
                            class="btn btn-brown-dark rounded-pill px-5 py-3"
                        >
                            Kunjungi Proyek
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    @endif

                </div>
            </div>

        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* HERO */
.portfolio-detail-hero {
    background: linear-gradient(135deg, #E7DED9, #F5F0ED);
}

/* IMAGE */
.portfolio-detail-image {
    border-radius: 1.75rem;
    overflow: hidden;
    box-shadow: var(--shadow-lg);
    transition: transform .6s ease;
}

.portfolio-detail-image img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    transition: transform .7s ease;
}

.portfolio-detail-image:hover img {
    transform: scale(1.08);
}

/* INFO */
.portfolio-detail-info {
    animation: fadeUp .8s ease both;
}

.category-badge {
    display: inline-block;
    background: rgba(93,64,55,.12);
    color: var(--brown-dark);
    font-weight: 600;
    padding: .55rem 1.5rem;
    border-radius: 50rem;
}

/* BUTTON */
.btn-brown-dark {
    background: var(--brown-dark);
    color: #fff;
    border: none;
    transition: all .35s ease;
}

.btn-brown-dark:hover {
    background: #4E342E;
    transform: translateY(-3px);
    box-shadow: var(--shadow-md);
}

/* ANIMATION */
@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .portfolio-detail-image img {
        height: 300px;
    }
}
</style>
@endpush
