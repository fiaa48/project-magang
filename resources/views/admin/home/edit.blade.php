{{-- resources/views/admin/home/edit.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Edit Homepage - Admin Panel')

@push('styles')
<link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800&display=swap" rel="stylesheet">
<style>
    /* ========== VARIABEL KONTRAST TINGGI ========== */
    :root {
        --brown-dark: #2c1a12;
        --brown-medium: #5a3d31;
        --brown-light: #a18472;
        --cream: #fff9f0;
        --white: #ffffff;
        --gold: #d4af37;
        --shadow-sm: 0 10px 25px -5px rgba(0,0,0,0.05), 0 8px 10px -6px rgba(0,0,0,0.02);
        --shadow-md: 0 20px 30px -12px rgba(0,0,0,0.1);
        --shadow-lg: 0 30px 45px -15px rgba(0,0,0,0.2);
        --shadow-3d: 0 15px 35px -10px rgba(0,0,0,0.3), 0 0 0 1px rgba(212,175,55,0.1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: radial-gradient(circle at 10% 20%, #fcf8f2, #f5efe7);
        font-family: 'Inter', sans-serif;
        color: var(--brown-dark);
        line-height: 1.5;
    }

    @keyframes fadeSlideUp {
        0% { opacity: 0; transform: translateY(35px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInScale {
        0% { opacity: 0; transform: scale(0.96); }
        100% { opacity: 1; transform: scale(1); }
    }

    /* ========== HEADER ========== */
    .page-header-premium {
        margin-bottom: 2rem;
        animation: fadeSlideUp 0.6s ease forwards;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .page-title-premium {
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--brown-dark), #6b4c3b);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .page-title-premium i {
        background: linear-gradient(135deg, var(--gold), #b8860b);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 2rem;
    }
    .stat-badge-premium {
        background: rgba(255,248,235,0.9);
        backdrop-filter: blur(8px);
        padding: 0.6rem 1.3rem;
        border-radius: 60px;
        font-weight: 600;
        color: var(--brown-dark);
        border: 1px solid rgba(212,175,55,0.4);
        font-size: 0.9rem;
    }

    /* ========== CARD 3D ========== */
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-3d);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        animation: fadeInScale 0.5s ease forwards;
        margin-bottom: 2rem;
    }
    .card-ultra:hover {
        transform: translateY(-6px);
        box-shadow: 0 30px 45px -12px rgba(0,0,0,0.25), 0 0 0 1px rgba(212,175,55,0.3);
    }
    .card-ultra::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: linear-gradient(90deg, var(--gold), var(--brown-light), var(--gold));
        z-index: 2;
    }

    .form-container {
        padding: 1.8rem 2rem;
    }
    .section-title {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--brown-dark);
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
        border-left: 5px solid var(--gold);
        padding-left: 1rem;
    }
    .section-title i {
        color: var(--gold);
        font-size: 1.2rem;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    label {
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
        display: block;
        font-size: 0.9rem;
    }
    .form-control-premium {
        background: var(--cream);
        border: 1px solid rgba(141,110,99,0.25);
        border-radius: 1rem;
        padding: 0.85rem 1.2rem;
        width: 100%;
        transition: all 0.2s;
        font-size: 0.95rem;
        color: var(--brown-dark);
    }
    .form-control-premium:focus {
        border-color: var(--gold);
        outline: none;
        box-shadow: 0 0 0 3px rgba(212,175,55,0.2);
        background: var(--white);
    }
    textarea.form-control-premium {
        resize: vertical;
        min-height: 100px;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
        margin: -0.75rem;
    }
    .col-md-6, .col-12 {
        padding: 0.75rem;
    }
    .alert-danger {
        background: #fff0f0;
        border-left: 5px solid #b22234;
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1.5rem;
        color: #8b3c3c;
    }
    .text-error {
        color: #d32f2f;
        font-size: 0.7rem;
        margin-top: 0.3rem;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }
    .action-buttons {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        margin-top: 2rem;
        flex-wrap: wrap;
    }
    .btn-premium-ultra {
        background: linear-gradient(105deg, var(--brown-dark) 0%, #4a2e26 100%);
        border: none;
        border-radius: 60px;
        padding: 0.75rem 2rem;
        font-weight: 700;
        color: white;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        text-decoration: none;
    }
    .btn-premium-ultra:hover {
        transform: translateY(-3px);
        background: linear-gradient(105deg, #4a2e26, var(--brown-dark));
        color: var(--gold);
    }
    .btn-outline-premium {
        background: transparent;
        border: 1.5px solid var(--brown-dark);
        border-radius: 60px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        color: var(--brown-dark);
        transition: all 0.25s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .btn-outline-premium:hover {
        background: var(--brown-dark);
        color: white;
    }
    .info-text {
        font-size: 0.7rem;
        color: var(--brown-light);
        margin-top: 0.3rem;
    }
    @media (max-width: 768px) {
        .form-container { padding: 1rem; }
        .page-title-premium { font-size: 1.5rem; }
        .action-buttons { justify-content: center; }
        .btn-premium-ultra, .btn-outline-premium { width: 100%; justify-content: center; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="page-header-premium">
        <div class="d-flex flex-column align-items-start">
            <div class="page-title-premium">
                <i class="fas fa-edit"></i>
                <span>Edit Beranda</span>
            </div>
            <div class="stat-badge-premium mt-2">
                <i class="fas fa-home me-2"></i>
                Halaman Utama Website
            </div>
        </div>
        <div class="stat-badge-premium">
            <i class="fas fa-calendar-alt me-2"></i>
            {{ now()->translatedFormat('d F Y') }}
        </div>
    </div>

    @if ($errors->any())
        <div class="alert-danger">
            <i class="fas fa-exclamation-triangle me-2"></i>
            <strong>Periksa kembali data Anda:</strong>
            <ul class="mb-0 mt-2 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.home.update') }}" method="POST" id="editForm">
        @csrf
        @method('PUT')

        <!-- Bagian Utama -->
        <div class="card-ultra">
            <div class="form-container">
                <div class="section-title">
                    <i class="fas fa-star"></i>
                    <span>Bagian Utama</span>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Judul Utama</label>
                            <input type="text" name="hero_title" class="form-control-premium" value="{{ old('hero_title', $home->hero_title ?? '') }}" placeholder="Judul utama Beranda">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Deskripsi Utama</label>
                            <textarea name="hero_description" class="form-control-premium" rows="3" placeholder="Deskripsi bagian utama">{{ old('hero_description', $home->hero_description ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keahlian (Contoh: Developer, Desain)</label>
                            <textarea name="hero_specialist" class="form-control-premium" rows="3" placeholder="Spesialisasi atau keahlian">{{ old('hero_specialist', $home->hero_specialist ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tentang Perusahaan -->
        <div class="card-ultra">
            <div class="form-container">
                <div class="section-title">
                    <i class="fas fa-info-circle"></i>
                    <span>Tentang Perusahaan</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Deskripsi Tentang 1</label>
                            <textarea name="about_desc_1" class="form-control-premium" rows="4" placeholder="Tentang perusahaan bagian 1">{{ old('about_desc_1', $home->about_desc_1 ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Deskripsi Tentang 2</label>
                            <textarea name="about_desc_2" class="form-control-premium" rows="4" placeholder="Tentang perusahaan bagian 2">{{ old('about_desc_2', $home->about_desc_2 ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latar Belakang Perusahaan -->
        <div class="card-ultra">
            <div class="form-container">
                <div class="section-title">
                    <i class="fas fa-building"></i>
                    <span>Latar Belakang Perusahaan</span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Latar Belakang Deskripsi 1</label>
                            <textarea name="background_desc_1" class="form-control-premium" rows="4" placeholder="Latar belakang perusahaan bagian 1">{{ old('background_desc_1', $home->background_desc_1 ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Latar Belakang Deskripsi 2</label>
                            <textarea name="background_desc_2" class="form-control-premium" rows="4" placeholder="Latar belakang perusahaan bagian 2">{{ old('background_desc_2', $home->background_desc_2 ?? '') }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Daftar Latar Belakang (pisahkan dengan baris baru)</label>
                            <textarea name="background_list" class="form-control-premium" rows="4" placeholder="Contoh:&#10;Berdiri sejak 2010&#10;Terpercaya di seluruh Indonesia">{{ old('background_list', is_array($home->background_list ?? null) ? implode("\n", $home->background_list) : ($home->background_list ?? '')) }}</textarea>
                            <div class="info-text">Setiap baris akan menjadi item list.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik -->
        <div class="card-ultra">
            <div class="form-container">
                <div class="section-title">
                    <i class="fas fa-chart-line"></i>
                    <span>Statistik Perusahaan</span>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Tahun Pengalaman</label>
                            <input type="number" name="experience_years" class="form-control-premium" value="{{ old('experience_years', $home->experience_years ?? '') }}" placeholder="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Project Selesai</label>
                            <input type="number" name="projects_done" class="form-control-premium" value="{{ old('projects_done', $home->projects_done ?? '') }}" placeholder="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Sertifikasi</label>
                            <input type="number" name="certifications" class="form-control-premium" value="{{ old('certifications', $home->certifications ?? '') }}" placeholder="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Ahli di Bidangnya</label>
                            <input type="number" name="experts" class="form-control-premium" value="{{ old('experts', $home->experts ?? '') }}" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ajakan Bertindak -->
        <div class="card-ultra">
            <div class="form-container">
                <div class="section-title">
                    <i class="fas fa-bullhorn"></i>
                    <span>Ajakan Bertindak</span>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Judul Ajakan</label>
                            <input type="text" name="cta_title" class="form-control-premium" value="{{ old('cta_title', $home->cta_title ?? '') }}" placeholder="Judul tombol ajakan">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Deskripsi Ajakan</label>
                            <textarea name="cta_description" class="form-control-premium" rows="3" placeholder="Deskripsi ajakan">{{ old('cta_description', $home->cta_description ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="action-buttons">
            <a href="{{ route('admin.home.index') }}" class="btn-outline-premium">
                <i class="fas fa-arrow-left"></i> Batal
            </a>
            <button type="submit" class="btn-premium-ultra" id="submitBtn">
                <i class="fas fa-save"></i> Update Beranda
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('editForm');
        const submitBtn = document.getElementById('submitBtn');
        if (form) {
            form.addEventListener('submit', function() {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
            });
        }
    });
</script>
@endpush


