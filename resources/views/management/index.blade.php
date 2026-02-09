@extends('layouts.app')

@section('title', 'Manajemen Perusahaan - PT Mitra Nusa Konsulindo')

@section('content')

<style>
/* style management */

.management-hero {
    padding: 5rem 0 3rem;
    text-align: center;
}

.management-hero h1 {
    font-weight: 800;
    font-size: 3rem;
    background: linear-gradient(135deg, #5D4037, #8B6B61);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.management-hero p {
    max-width: 720px;
    margin: 1rem auto 0;
    color: #6c757d;
    font-size: 1.05rem;
    line-height: 1.7;
}

/* Section title */
.management-section-title {
    text-align: center;
    margin: 4rem 0 2.5rem;
}

.management-section-title h4 {
    font-weight: 700;
    color: #5D4037;
    position: relative;
    display: inline-block;
    padding-bottom: .75rem;
}

.management-section-title h4::after {
    content: '';
    width: 60px;
    height: 3px;
    background: linear-gradient(135deg, #D4AF37, #8B6B61);
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    border-radius: 10px;
}

/* Cards */
.management-card {
    background: rgba(255,255,255,.9);
    border-radius: 1.25rem;
    padding: 1.75rem 1.5rem;
    text-align: center;
    border: 1px solid rgba(93,64,55,.12);
    box-shadow: 0 10px 30px rgba(0,0,0,.06);
    transition: all .4s ease;
    height: 100%;
}

.management-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 45px rgba(0,0,0,.12);
}

.management-card .role {
    font-weight: 700;
    color: #5D4037;
    font-size: 1rem;
}

/* Division cards */
.division-card {
    background: linear-gradient(135deg, #EFEBE9, #F5F0ED);
    border-radius: 1.25rem;
    padding: 1.75rem 1.5rem;
    text-align: center;
    border: 1px solid rgba(93,64,55,.1);
    transition: all .4s ease;
    height: 100%;
}

.division-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 16px 40px rgba(0,0,0,.1);
}

.division-card span {
    font-weight: 600;
    color: #5D4037;
}

/* Support team */
.support-card {
    background: linear-gradient(135deg, #5D4037, #8B6B61);
    color: white;
    border-radius: 1.25rem;
    padding: 2rem 1.5rem;
    text-align: center;
    font-weight: 600;
    box-shadow: 0 15px 35px rgba(93,64,55,.4);
    transition: all .4s ease;
}

.support-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 22px 50px rgba(93,64,55,.5);
}

/* Responsive */
@media (max-width: 768px) {
    .management-hero h1 {
        font-size: 2.3rem;
    }
}
</style>

<div class="container">

    {{-- HERO --}}
    <div class="management-hero">
        <h1>Manajemen Perusahaan</h1>
        <p>
            Struktur organisasi PT Mitra Nusa Konsulindo disusun untuk memastikan
            pengelolaan perusahaan yang profesional, efektif, dan berorientasi pada
            kualitas layanan.
        </p>
    </div>

    {{-- TOP MANAGEMENT --}}
    <div class="row justify-content-center g-4">
        @foreach($management['top'] as $item)
        <div class="col-md-4">
            <div class="management-card">
                <div class="role">{{ $item }}</div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- DIVISI --}}
    <div class="management-section-title">
        <h4>Divisi Perusahaan</h4>
    </div>

    <div class="row g-4 justify-content-center">
        @foreach($management['divisions'] as $division)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="division-card">
                <span>{{ $division }}</span>
            </div>
        </div>
        @endforeach
    </div>

    {{-- SUPPORT --}}
    <div class="management-section-title">
        <h4>Tim Pendukung</h4>
    </div>

    <div class="row justify-content-center g-4 mb-5">
        @foreach($management['support'] as $support)
        <div class="col-md-3 col-sm-6">
            <div class="support-card">
                {{ $support }}
            </div>
        </div>
        @endforeach
    </div>

</div>
@endsection
