@extends('layouts.app')

@section('title', 'Proyek & Pengalaman | PT Mitra Nusa Konsulindo')
@section('description', 'Pengalaman dan lingkup pekerjaan PT Mitra Nusa Konsulindo di bidang konstruksi dan non-konstruksi.')

@section('content')

<!-- PROJECT HEADER -->
<section class="project-hero py-6">
    <div class="container text-center">
        <span class="badge bg-brown-dark text-white rounded-pill px-4 py-2 mb-3 shadow-sm">
            Pengalaman Perusahaan
        </span>
        <h1 class="display-5 fw-bold text-brown-dark mt-4">
            Proyek & Lingkup Pekerjaan
        </h1>
        <p class="lead text-brown-medium mt-3 mx-auto" style="max-width: 720px;">
            Berikut adalah lingkup pekerjaan dan pengalaman profesional
            PT Mitra Nusa Konsulindo dalam memberikan jasa konsultansi
            konstruksi dan non-konstruksi.
        </p>
    </div>
</section>

<!-- PROJECT GRID -->
<section class="py-6 bg-white">
    <div class="container">
        <div class="row g-4">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6">
                <div class="project-card h-100">
                    <div class="project-icon">
                        <i class="{{ $project['icon'] }}"></i>
                    </div>

                    <h5 class="fw-bold text-brown-dark mb-3">
                        {{ $project['title'] }}
                    </h5>

                    <p class="text-brown-medium mb-0">
                        {{ $project['description'] }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
/* css project match home */

/* HERO */
.project-hero {
    background: linear-gradient(
        135deg,
        rgba(239,235,233,1) 0%,
        rgba(245,240,237,1) 100%
    );
}

/* PROJECT CARD */
.project-card {
    background: rgba(255,255,255,.95);
    border-radius: 1.5rem;
    padding: 2.75rem 2.25rem;
    box-shadow: var(--shadow-sm);
    border: 1px solid rgba(93,64,55,.12);
    transition: all .45s cubic-bezier(.4,0,.2,1);
    text-align: center;
    position: relative;
    overflow: hidden;
}

/* Gradient accent */
.project-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(212,175,55,.12),
        rgba(93,64,55,.08)
    );
    opacity: 0;
    transition: opacity .4s ease;
}

.project-card:hover::before {
    opacity: 1;
}

.project-card:hover {
    transform: translateY(-12px);
    box-shadow: var(--shadow-lg);
    border-color: var(--brown-light);
}

/* ICON */
.project-icon {
    width: 90px;
    height: 90px;
    margin: 0 auto 1.75rem;
    border-radius: 50%;
    background: linear-gradient(
        135deg,
        rgba(93,64,55,.15),
        rgba(212,175,55,.15)
    );
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .4s ease;
    position: relative;
    z-index: 1;
}

.project-icon i {
    font-size: 2.3rem;
    color: var(--brown-dark);
    transition: transform .4s ease;
}

.project-card:hover .project-icon {
    transform: scale(1.08);
}

.project-card:hover .project-icon i {
    transform: rotate(-5deg);
}

/* TEXT */
.project-card h5 {
    position: relative;
    z-index: 1;
}

.project-card p {
    position: relative;
    z-index: 1;
    line-height: 1.7;
}

/* ANIMATION ON LOAD */
.project-card {
    animation: fadeUp .7s ease both;
}

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
    .project-card {
        padding: 2.25rem 1.75rem;
    }

    .project-icon {
        width: 80px;
        height: 80px;
    }

    .project-icon i {
        font-size: 2rem;
    }
}
</style>
@endpush
