@extends('admin.layouts.app')

@section('title', 'Edit Project - Admin')

@push('styles')
<style>
    /* Premium styling konsisten dengan index */
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #ef332d;
        --cream: #ffffff;
        --cream-dark: #f5ede0;
        --white: #ffffff;
        --gold: #d4af37;
    }

    .page-header {
        margin-bottom: 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .page-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--brown-dark);
        margin: 0;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .page-title i {
        font-size: 2rem;
        color: var(--brown-light);
    }
    .stat-badge {
        background: var(--cream);
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-size: 0.85rem;
        font-weight: 500;
        color: var(--brown-dark);
        border: 1px solid #e5dbd1;
    }
    .card-premium {
        background: var(--white);
        border-radius: 1.25rem;
        border: none;
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05), 0 0 0 1px rgba(0,0,0,0.02);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }
    .card-premium:hover {
        transform: translateY(-3px);
        box-shadow: 0 20px 30px -12px rgba(0,0,0,0.1);
    }
    .form-label {
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .form-control, .form-select {
        background: var(--cream);
        border: 1px solid rgba(36,27,100,0.14);
        border-radius: 0.75rem;
        padding: 0.6rem 1rem;
        transition: all 0.2s;
        font-size: 0.95rem;
        width: 100%;
    }
    .form-control:focus, .form-select:focus {
        border-color: var(--brown-light);
        box-shadow: 0 0 0 4px rgba(239,51,45,0.18);
        background: white;
        outline: none;
    }
    .btn-premium {
        background: linear-gradient(135deg, var(--brown-dark), #4a342e);
        border: none;
        border-radius: 2rem;
        padding: 0.6rem 1.5rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }
    .btn-premium:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(36,27,100,0.18);
        background: linear-gradient(135deg, #4a342e, var(--brown-dark));
    }
    .btn-outline-premium {
        background: transparent;
        border: 1px solid var(--brown-dark);
        border-radius: 2rem;
        padding: 0.6rem 1.5rem;
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
    }
    .info-readonly {
        background: var(--cream);
        border-radius: 0.75rem;
        padding: 0.75rem 1rem;
        border: 1px solid rgba(36,27,100,0.09);
        margin-bottom: 1.5rem;
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: space-between;
    }
    /* Animasi */
    @keyframes fadeSlideUp {
        from {
            opacity: 0;
            transform: translateY(15px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .card-premium, .page-header {
        animation: fadeSlideUp 0.5s ease-out forwards;
    }
    /* Responsif */
    @media (max-width: 768px) {
        .page-title {
            font-size: 1.4rem;
        }
        .form-label {
            font-size: 0.85rem;
        }
        .form-control, .form-select {
            padding: 0.5rem 0.8rem;
            font-size: 0.85rem;
        }
        .btn-premium, .btn-outline-premium {
            padding: 0.5rem 1.2rem;
            font-size: 0.85rem;
        }
        .info-readonly {
            flex-direction: column;
            gap: 0.5rem;
        }
    }
    @media (max-width: 576px) {
        .stat-badge {
            font-size: 0.75rem;
            padding: 0.3rem 0.8rem;
        }
        .page-title i {
            font-size: 1.5rem;
        }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0">
    <!-- Header -->
    <div class="page-header">
        <div class="d-flex align-items-center gap-3">
            <div class="page-title">
                <i class="fas fa-pencil-alt"></i>
                Edit Project
            </div>
            <div class="stat-badge">
                <i class="fas fa-edit me-1"></i>
                Formulir Edit Project
            </div>
        </div>
        <div class="d-flex gap-2">
            <div class="stat-badge">
                <i class="fas fa-calendar-alt me-1"></i>
                {{ now()->format('d M Y') }}
            </div>
        </div>
    </div>

    <!-- Informasi Readonly -->
    <div class="info-readonly">
        <div><i class="fas fa-id-card me-1"></i> <strong>ID:</strong> {{ $project->id }}</div>
        <div><i class="fas fa-clock me-1"></i> <strong>Dibuat:</strong> {{ $project->created_at ? $project->created_at->format('d M Y H:i') : '-' }}</div>
        <div><i class="fas fa-edit me-1"></i> <strong>Diperbarui:</strong> {{ $project->updated_at ? $project->updated_at->format('d M Y H:i') : '-' }}</div>
    </div>

    <!-- Alert Error -->
    @if($errors->any())
    <div class="alert alert-premium bg-white border-l-4 border-danger rounded-lg p-4 mb-4 d-flex align-items-center justify-content-between shadow-sm">
        <div class="d-flex align-items-center gap-2">
            <i class="fas fa-exclamation-circle text-danger"></i>
            <span class="text-brown-dark">Terjadi kesalahan, periksa kembali input Anda.</span>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Form Card -->
    <div class="card-premium">
        <div class="card-body p-4 p-md-5">
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-4">
                    <!-- Judul Project -->
                    <div class="col-md-6">
                        <label class="form-label">
                            <i class="fas fa-heading text-brown-light"></i> Judul Project <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="title" value="{{ old('title', $project->title) }}"
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Contoh: Renovasi Gedung Utama" required>
                        @error('title') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                    </div>

                    <!-- Slug -->
                    <div class="col-md-6">
                        <label class="form-label">
                            <i class="fas fa-link text-brown-light"></i> Slug (opsional)
                        </label>
                        <input type="text" name="slug" value="{{ old('slug', $project->slug) }}" class="form-control" placeholder="renovasi-gedung-utama">
                        <small class="text-muted d-block mt-1">Kosongkan untuk generate otomatis dari judul.</small>
                    </div>

                    <!-- Kategori -->
                    <div class="col-md-6">
                        <label class="form-label">
                            <i class="fas fa-tag text-brown-light"></i> Kategori <span class="text-danger">*</span>
                        </label>
                        <select name="category" class="form-select">
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category }}"
                                    {{ old('category', $project->category ?? '') == $category ? 'selected' : '' }}>
                                    {{ $category }}
                                </option>
                            @endforeach
                        </select>
                        @error('category') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                    </div>

                    <!-- Lokasi -->
                    <div class="col-md-6">
                        <label class="form-label">
                            <i class="fas fa-location-dot text-brown-light"></i> Lokasi
                        </label>
                        <input type="text" name="location" value="{{ old('location', $project->location) }}" class="form-control" placeholder="Jakarta Selatan">
                    </div>

                    <!-- Tahun -->
                    <div class="col-md-6">
                        <label class="form-label">
                            <i class="fas fa-calendar text-brown-light"></i> Tahun
                        </label>
                        <input type="number" name="year" value="{{ old('year', $project->year) }}" class="form-control"
                               min="2000" max="{{ date('Y') + 5 }}" placeholder="{{ date('Y') }}">
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex flex-wrap justify-content-end gap-3 mt-5 pt-3 border-top border-brown-dark/10">
                    <a href="{{ route('admin.projects.index') }}" class="btn-outline-premium">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn-premium">
                        <i class="fas fa-save"></i> Update Project
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer Note -->
    <div class="text-end text-brown-medium small mt-3">
        <i class="fas fa-shield-alt me-1"></i> Data akan tersimpan dengan aman
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto generate slug dari title jika slug kosong
    const titleInput = document.querySelector('input[name="title"]');
    const slugInput = document.querySelector('input[name="slug"]');
    if (titleInput && slugInput) {
        titleInput.addEventListener('input', function() {
            if (!slugInput.value.trim()) {
                slugInput.value = this.value.toLowerCase()
                    .replace(/[^\w\s-]/g, '')
                    .replace(/\s+/g, '-')
                    .replace(/--+/g, '-')
                    .trim();
            }
        });
    }

    // Auto dismiss alert setelah 5 detik
    setTimeout(() => {
        const alert = document.querySelector('.alert-premium');
        if (alert) alert.style.display = 'none';
    }, 5000);
</script>
@endpush


