{{-- resources/views/admin/about/organization/edit.blade.php --}}
@extends('admin.layouts.app')

@section('title', 'Edit Anggota Organisasi - Admin Panel')

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

    @keyframes fadeInScale {
        0% { opacity: 0; transform: scale(0.96); }
        100% { opacity: 1; transform: scale(1); }
    }

    .card-ultra {
        background: var(--white);
        border-radius: 2rem;
        border: none;
        box-shadow: var(--shadow-3d);
        transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        overflow: hidden;
        animation: fadeInScale 0.5s ease forwards;
    }
    .card-ultra:hover {
        transform: translateY(-6px) scale(1.01);
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
        padding: 2rem;
    }
    .form-title {
        font-size: 1.8rem;
        font-weight: 800;
        background: linear-gradient(135deg, var(--brown-dark), #6b4c3b);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 2rem;
    }
    .form-title i {
        background: linear-gradient(135deg, var(--gold), #b8860b);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 2rem;
    }
    .form-group {
        margin-bottom: 1.5rem;
    }
    label {
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
        display: block;
        font-size: 0.95rem;
    }
    .form-control-premium {
        background: var(--cream);
        border: 1px solid rgba(141,110,99,0.25);
        border-radius: 1rem;
        padding: 0.85rem 1.2rem;
        width: 100%;
        transition: all 0.2s;
        font-size: 1rem;
        color: var(--brown-dark);
    }
    .form-control-premium:focus {
        border-color: var(--gold);
        outline: none;
        box-shadow: 0 0 0 3px rgba(212,175,55,0.2);
        background: var(--white);
    }
    select.form-control-premium {
        cursor: pointer;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%235a3d31' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
    }
    .info-text {
        font-size: 0.7rem;
        color: var(--brown-light);
        margin-top: 0.3rem;
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
    .alert-danger {
        background: #fff0f0;
        border-left: 5px solid #b22234;
        border-radius: 1rem;
        padding: 1rem;
        margin-bottom: 1.5rem;
        color: #8b3c3c;
    }
    @media (max-width: 768px) {
        .form-container { padding: 1.5rem; }
        .form-title { font-size: 1.5rem; }
        .action-buttons { justify-content: center; }
        .btn-premium-ultra, .btn-outline-premium { width: 100%; justify-content: center; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="card-ultra">
                <div class="form-container">
                    <div class="form-title">
                        <i class="fas fa-user-edit"></i>
                        <span>Edit Anggota Organisasi</span>
                    </div>

                    @if ($errors->any())
                        <div class="alert-danger">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.about.organization.update', $data->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Kategori -->
                        <div class="form-group">
                            <label for="category">Kategori <span class="text-danger">*</span></label>
                            <select name="category" id="category" class="form-control-premium" required>
                                <option value="">Pilih Kategori</option>
                                <option value="direksi" {{ old('category', $data->category) == 'direksi' ? 'selected' : '' }}>Direksi</option>
                                <option value="komisaris" {{ old('category', $data->category) == 'komisaris' ? 'selected' : '' }}>Komisaris</option>
                                <option value="pemegang_saham" {{ old('category', $data->category) == 'pemegang_saham' ? 'selected' : '' }}>Pemegang Saham</option>
                                <option value="divisi" {{ old('category', $data->category) == 'divisi' ? 'selected' : '' }}>Divisi</option>
                            </select>
                            <div class="info-text">Pilih jenis posisi dalam struktur organisasi.</div>
                        </div>

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="name">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" class="form-control-premium" value="{{ old('name', $data->name) }}" required placeholder="Contoh: Ir. Ahmad Sudirman, M.M.">
                        </div>

                        <!-- Posisi / Jabatan -->
                        <div class="form-group">
                            <label for="position">Jabatan / Posisi</label>
                            <input type="text" name="position" id="position" class="form-control-premium" value="{{ old('position', $data->position) }}" placeholder="Contoh: Ketua Dewan Komisaris">
                            <div class="info-text">Opsional, diisi jika ada.</div>
                        </div>

                        <!-- Saham (khusus Pemegang Saham) -->
                        <div class="form-group" id="shares-group">
                            <label for="shares">Persentase Saham (%)</label>
                            <input type="text" name="shares" id="shares" class="form-control-premium" value="{{ old('shares', $data->shares) }}" placeholder="Contoh: 25.5">
                            <div class="info-text">Hanya untuk kategori Pemegang Saham. Kosongkan jika tidak ada.</div>
                        </div>

                        <!-- Nilai (opsional) -->
                        <div class="form-group">
                            <label for="value">Nilai / Keterangan Tambahan</label>
                            <input type="text" name="value" id="value" class="form-control-premium" value="{{ old('value', $data->value) }}" placeholder="Contoh: Komisaris Independen">
                            <div class="info-text">Opsional, bisa diisi untuk informasi tambahan.</div>
                        </div>

                        <div class="action-buttons">
                            <a href="{{ route('admin.about.organization.index') }}" class="btn-outline-premium">
                                <i class="fas fa-arrow-left"></i> Batal
                            </a>
                            <button type="submit" class="btn-premium-ultra">
                                <i class="fas fa-save"></i> Update Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categorySelect = document.getElementById('category');
        const sharesGroup = document.getElementById('shares-group');
        const sharesInput = document.getElementById('shares');

        function toggleSharesField() {
            if (categorySelect.value === 'pemegang_saham') {
                sharesGroup.style.display = 'block';
                sharesInput.setAttribute('required', 'required');
            } else {
                sharesGroup.style.display = 'block'; // tetap tampil, tapi tidak wajib
                sharesInput.removeAttribute('required');
            }
        }

        categorySelect.addEventListener('change', toggleSharesField);
        toggleSharesField(); // inisialisasi
    });
</script>
@endpush
@endsection


