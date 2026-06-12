@extends('admin.layouts.app')

@section('title', 'Tambah Sejarah - Admin Panel')

@push('styles')
<style>
    /* ========== VARIABEL WARNA PREMIUM ========== */
    :root {
        --brown-dark: #171247;
        --brown-medium: #241b64;
        --brown-light: #4b3dad;
        --cream: #ffffff;
        --cream-dark: #f8fafc;
        --white: #FFFFFF;
        --gold: #D4AF37;
        --gold-light: #F3E5AB;
        --shadow-sm: 0 10px 20px rgba(0,0,0,0.02), 0 6px 6px rgba(0,0,0,0.03);
        --shadow-md: 0 20px 30px -12px rgba(0,0,0,0.1), 0 8px 12px rgba(0,0,0,0.05);
        --shadow-lg: 0 30px 40px -15px rgba(0,0,0,0.2);
    }

    /* ========== ANIMASI ========== */
    @keyframes fadeSlideUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInScale {
        from { opacity: 0; transform: scale(0.96); }
        to { opacity: 1; transform: scale(1); }
    }

    body {
        background: linear-gradient(145deg, #F9F5EF 0%, #FDF9F4 100%);
        font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
    }

    /* ========== PAGE HEADER ========== */
    .page-header-premium {
        margin-bottom: 2rem;
        animation: fadeSlideUp 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1) forwards;
    }
    .page-title-premium {
        font-size: 2rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--brown-dark), var(--brown-medium));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        letter-spacing: -0.02em;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
    }
    .page-title-premium i {
        background: linear-gradient(135deg, var(--gold), #B8860B);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 2.2rem;
        filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }

    /* ========== CARD ULTRA PREMIUM ========== */
    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-md);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        position: relative;
        animation: fadeInScale 0.5s ease forwards;
    }
    .card-ultra:hover {
        transform: translateY(-6px) scale(1.01);
        box-shadow: var(--shadow-lg), 0 0 0 1px rgba(212,175,55,0.2);
    }
    .card-ultra::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, var(--gold), var(--brown-light), var(--gold));
        z-index: 2;
    }

    /* ========== FORM STYLE ========== */
    .form-group-premium {
        margin-bottom: 1.75rem;
    }
    .form-label-premium {
        font-weight: 700;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.9rem;
        letter-spacing: 0.3px;
    }
    .form-label-premium i {
        color: var(--gold);
        font-size: 1rem;
        width: 1.25rem;
    }
    .input-group-premium {
        position: relative;
    }
    .input-group-premium .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--gold);
        pointer-events: none;
        z-index: 2;
        font-size: 1rem;
    }
    .input-group-premium textarea ~ .input-icon {
        top: 1.2rem;
        transform: none;
    }
    .form-control-premium,
    .form-select-premium {
        background: var(--cream);
        border: 1px solid rgba(141,110,99,0.2);
        border-radius: 1rem;
        padding: 0.85rem 1.2rem 0.85rem 2.8rem;
        font-size: 0.95rem;
        color: var(--brown-dark);
        transition: all 0.3s ease;
        width: 100%;
        appearance: none;
    }
    textarea.form-control-premium {
        padding-left: 2.8rem;
        resize: vertical;
        min-height: 100px;
    }
    .form-control-premium:focus,
    .form-select-premium:focus {
        border-color: var(--gold);
        outline: none;
        box-shadow: 0 0 0 4px rgba(212,175,55,0.2);
        background: var(--white);
        transform: translateY(-2px);
    }
    .alert-premium {
        background: #FFF2F0;
        border-left: 5px solid #D32F2F;
        border-radius: 1rem;
        padding: 1rem 1.2rem;
        color: #B71C1C;
        margin-bottom: 1.5rem;
        font-weight: 500;
    }
    .text-error {
        color: #D32F2F;
        font-size: 0.75rem;
        margin-top: 0.3rem;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }
    .btn-premium-ultra {
        background: linear-gradient(105deg, var(--brown-dark) 0%, #171247 100%);
        border: none;
        border-radius: 60px;
        padding: 0.85rem 2rem;
        font-weight: 700;
        color: white;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        box-shadow: 0 8px 18px rgba(62,39,35,0.2);
        letter-spacing: 0.3px;
    }
    .btn-premium-ultra:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 25px -8px rgba(62,39,35,0.4);
        background: linear-gradient(105deg, #171247, var(--brown-dark));
        color: var(--gold-light);
    }
    .btn-outline-premium {
        background: transparent;
        border: 1px solid var(--brown-dark);
        border-radius: 60px;
        padding: 0.85rem 2rem;
        font-weight: 600;
        color: var(--brown-dark);
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .btn-outline-premium:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(0,0,0,0.1);
    }
    .info-text {
        font-size: 0.75rem;
        color: var(--brown-light);
        margin-top: 0.25rem;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 768px) {
        .page-title-premium { font-size: 1.6rem; }
        .card-ultra { border-radius: 1.5rem; }
        .form-control-premium, .form-select-premium { padding: 0.7rem 1rem 0.7rem 2.5rem; font-size: 0.9rem; }
        .btn-premium-ultra, .btn-outline-premium { padding: 0.7rem 1.5rem; width: 100%; justify-content: center; }
        .d-flex.gap-3 { flex-direction: column; }
        .input-group-premium .input-icon { left: 0.8rem; }
    }
    @media (max-width: 576px) {
        .container-fluid { padding-left: 0.75rem; padding-right: 0.75rem; }
        .form-group-premium { margin-bottom: 1.25rem; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2">
    <div class="page-header-premium">
        <div class="page-title-premium">
            <i class="fas fa-plus-circle"></i>
            <span>Tambah Momen Sejarah</span>
        </div>
        <p class="text-brown-medium mt-2">Rekam perjalanan penting perusahaan Anda.</p>
    </div>

    <div class="card-ultra">
        <div class="card-body p-4 p-lg-5">
            @if ($errors->any())
                <div class="alert-premium">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>Periksa kembali data Anda:</strong>
                    <ul class="mb-0 mt-2 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.about.history.store') }}" method="POST" id="premiumForm">
                @csrf

                <div class="row">
                    <!-- TAHUN -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-calendar-alt"></i> Tahun <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-calendar input-icon"></i>
                                <input type="number" name="year" class="form-control-premium @error('year') is-invalid @enderror" value="{{ old('year') }}" placeholder="2024" min="1900" max="{{ date('Y') }}" required>
                            </div>
                            @error('year')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- JUDUL -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-heading"></i> Judul <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-tag input-icon"></i>
                                <input type="text" name="title" class="form-control-premium @error('title') is-invalid @enderror" value="{{ old('title') }}" placeholder="Pendirian Perusahaan" required>
                            </div>
                            @error('title')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- DESKRIPSI -->
                    <div class="col-12">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-align-left"></i> Deskripsi <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-paragraph input-icon" style="top: 1.2rem;"></i>
                                <textarea name="description" class="form-control-premium @error('description') is-invalid @enderror" rows="4" placeholder="Ceritakan momen penting ini...">{{ old('description') }}</textarea>
                            </div>
                            @error('description')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- DETAIL (JSON) - SAMA SEPERTI DI INDEX -->
                    <div class="col-12">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-list-ul"></i> Detail (Opsional)</label>
                            <div class="input-group-premium">
                                <i class="fas fa-rectangle-list input-icon" style="top: 1.2rem;"></i>
                                <textarea name="details" class="form-control-premium @error('details') is-invalid @enderror" rows="3">{{ old('details') }}</textarea>
                            </div>
                            <div class="info-text">
                                <i class="fas fa-info-circle"></i> Setiap baris akan menjadi satu item detail yang ditampilkan di halaman sejarah.
                            </div>
                            @error('details')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between gap-3 mt-4 pt-3">
                    <a href="{{ route('admin.about.history.index') }}" class="btn-outline-premium"><i class="fas fa-arrow-left"></i> Batal</a>
                    <button type="submit" class="btn-premium-ultra" id="submitBtn"><i class="fas fa-save"></i> Simpan Sejarah</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center mt-4 small text-brown-medium opacity-75"><i class="fas fa-shield-alt me-1"></i> Data akan tersimpan dengan aman</div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('premiumForm');
        const submitBtn = document.getElementById('submitBtn');
        if (form) {
            form.addEventListener('submit', function() {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
            });
        }
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        tooltipTriggerList.map(function (el) { return new bootstrap.Tooltip(el); });
    });
</script>
@endpush


