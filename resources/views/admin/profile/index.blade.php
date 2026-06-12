@extends('admin.layouts.app')

@section('title', 'Edit Profile - Admin')

@push('styles')
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<style>
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #ef332d;
        --cream: #ffffff;
        --cream-dark: #f5ede0;
        --white: #ffffff;
        --gold: #d4af37;
    }

    .container-custom {
        max-width: 700px;
        margin: 0 auto;
        padding: 1rem;
    }

    .card-premium {
        background: var(--white);
        border-radius: 1.5rem;
        border: none;
        box-shadow: 0 15px 35px -12px rgba(0,0,0,0.1), 0 0 0 1px rgba(0,0,0,0.02);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .form-label {
        font-weight: 600;
        color: var(--brown-dark);
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
    }
    .form-control {
        background: var(--cream);
        border: 1px solid rgba(36,27,100,0.14);
        border-radius: 1rem;
        padding: 0.75rem 1rem;
        transition: all 0.2s;
        font-size: 0.95rem;
    }
    .form-control:focus {
        border-color: var(--brown-light);
        box-shadow: 0 0 0 4px rgba(239,51,45,0.18);
        background: white;
        outline: none;
    }

    .profile-photo {
        position: relative;
        width: 120px;
        height: 120px;
        margin: 0 auto 1.5rem;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid var(--brown-light);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        transition: all 0.3s;
    }
    .profile-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s;
    }
    .profile-photo:hover img {
        transform: scale(1.05);
    }
    .profile-photo .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0,0,0,0.6);
        color: white;
        font-size: 0.75rem;
        text-align: center;
        padding: 4px;
        opacity: 0;
        transition: opacity 0.3s;
    }
    .profile-photo:hover .overlay {
        opacity: 1;
    }

    .custom-file-input {
        position: relative;
        display: inline-block;
        width: 100%;
    }
    .custom-file-input input[type="file"] {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }
    .custom-file-label {
        background: var(--cream);
        border: 1px dashed rgba(36,27,100,0.18);
        border-radius: 1rem;
        padding: 0.75rem 1rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s;
        color: var(--brown-medium);
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }
    .custom-file-label:hover {
        background: var(--cream-dark);
        border-color: var(--brown-light);
    }

    .photo-preview {
        text-align: center;
        margin-top: 1rem;
        padding: 0.5rem;
        background: rgba(36,27,100,0.04);
        border-radius: 1rem;
    }
    .preview-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--brown-light);
        margin-top: 0.5rem;
    }

    .btn-premium {
        background: linear-gradient(135deg, var(--brown-dark), #4a342e);
        border: none;
        border-radius: 2rem;
        padding: 0.75rem 2rem;
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
        padding: 0.75rem 2rem;
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

    .alert-premium {
        background: linear-gradient(135deg, #e8f5e9, #c8e6c9);
        border-left: 5px solid #2e7d32;
        border-radius: 1rem;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
        color: #1b5e20;
        font-weight: 500;
    }

    .action-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .action-buttons .btn {
        flex: 1;
        justify-content: center;
    }
    @media (max-width: 576px) {
        .action-buttons {
            flex-direction: column;
        }
        .action-buttons .btn {
            width: 100%;
        }
    }

    @media (max-width: 768px) {
        .container-custom { padding: 0.75rem; }
        .profile-photo { width: 100px; height: 100px; }
        .btn-premium, .btn-outline-premium { padding: 0.6rem 1.5rem; font-size: 0.9rem; }
    }
    @media (max-width: 576px) {
        .profile-photo { width: 80px; height: 80px; }
        .custom-file-label { font-size: 0.85rem; padding: 0.6rem 0.8rem; }
    }
</style>
@endpush

@section('content')
<div class="container-custom py-4">
    <div class="d-flex align-items-center gap-3 mb-4 flex-wrap">
        <div class="bg-cream-light rounded-circle p-3" style="background: rgba(36,27,100,0.08);">
            <i class="fas fa-user-edit text-brown-dark fs-3"></i>
        </div>
        <div>
            <h3 class="fw-bold text-brown-dark mb-0">Edit Profile</h3>
            <p class="text-brown-medium mb-0">Perbarui informasi akun Anda</p>
        </div>
    </div>

    @if(session('success'))
    <div class="alert-premium">
        <i class="fas fa-check-circle fs-5"></i>
        {{ session('success') }}
    </div>
    @endif

    <div class="card-premium p-4 p-md-5">
        <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data" id="profileForm">
            @csrf

            <!-- Profile Photo -->
            <div class="text-center mb-4">
                <div class="profile-photo">
                    @if(Auth::user()->photo)
                        <img id="currentPhoto" src="{{ asset('storage/profile/'.Auth::user()->photo) }}" alt="Profile Photo">
                    @else
                        <img id="currentPhoto" src="https://ui-avatars.com/api/?background=241b64&color=fff&size=120&name={{ urlencode(Auth::user()->name) }}" alt="Profile Photo">
                    @endif
                    <div class="overlay">
                        <i class="fas fa-camera"></i> Klik untuk ganti
                    </div>
                </div>
                <div class="mt-2 text-brown-medium small">
                    Foto profil akan ditampilkan di dashboard dan profile
                </div>
            </div>

            <div id="photoPreview" class="photo-preview" style="display: none;">
                <p class="text-brown-medium mb-1">Preview Foto Baru:</p>
                <img id="previewImg" class="preview-img" src="#" alt="Preview">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <div class="input-group">
                    <span class="input-group-text bg-cream-light border-0 rounded-start-pill">
                        <i class="fas fa-user text-brown-medium"></i>
                    </span>
                    <input type="text" name="name" class="form-control rounded-end-pill" value="{{ Auth::user()->name }}" required>
                </div>
                @error('name') <small class="text-danger mt-1">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text bg-cream-light border-0 rounded-start-pill">
                        <i class="fas fa-envelope text-brown-medium"></i>
                    </span>
                    <input type="email" name="email" class="form-control rounded-end-pill" value="{{ Auth::user()->email }}" required>
                </div>
                @error('email') <small class="text-danger mt-1">{{ $message }}</small> @enderror
            </div>

            <!-- ========== TAMBAHAN FIELD WHATSAPP ========== -->
            <div class="mb-4">
                <label class="form-label">Nomor WhatsApp</label>
                <div class="input-group">
                    <span class="input-group-text bg-cream-light border-0 rounded-start-pill">
                        <i class="fab fa-whatsapp text-brown-medium"></i>
                    </span>
                    <input type="tel" name="whatsapp" class="form-control rounded-end-pill"
                           value="{{ Auth::user()->whatsapp ?? '' }}"
                           placeholder="6281234567890 (gunakan kode negara tanpa tanda +)">
                </div>
                <small class="text-muted d-block mt-1">Format internasional, contoh: 6281234567890. Kosongkan jika tidak ingin ditampilkan.</small>
                @error('whatsapp') <small class="text-danger mt-1">{{ $message }}</small> @enderror
            </div>

            <div class="mb-4">
                <label class="form-label">Foto Profile</label>
                <div class="custom-file-input">
                    <div class="custom-file-label" onclick="document.getElementById('photoInput').click()">
                        <i class="fas fa-cloud-upload-alt"></i> Pilih foto baru (JPG, PNG, max 2MB)
                    </div>
                    <input type="file" id="photoInput" name="photo" accept="image/jpeg,image/png,image/webp" onchange="previewPhoto(this)">
                </div>
                @error('photo') <small class="text-danger mt-1">{{ $message }}</small> @enderror
            </div>
        </form>

        <!-- Tombol aksi: Simpan (kiri) dan Kembali (kanan) -->
        <div class="action-buttons mt-4">
            <button type="submit" form="profileForm" class="btn-premium">
                <i class="fas fa-save"></i> Simpan Perubahan
            </button>

            @php
                try {
                    $dashboardUrl = route('admin.dashboard');
                } catch (\Exception $e) {
                    $dashboardUrl = url('/admin');
                }
            @endphp
            <a href="{{ $dashboardUrl }}" class="btn-outline-premium">
                <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>

@push('scripts')
<script>
    function previewPhoto(input) {
        const file = input.files[0];
        const previewDiv = document.getElementById('photoPreview');
        const previewImg = document.getElementById('previewImg');
        const currentPhoto = document.getElementById('currentPhoto');

        if (file) {
            if (file.size > 2 * 1024 * 1024) {
                alert('Ukuran file maksimal 2MB');
                input.value = '';
                previewDiv.style.display = 'none';
                if (currentPhoto) currentPhoto.style.opacity = '1';
                return;
            }
            if (!file.type.match('image.*')) {
                alert('Hanya file gambar yang diperbolehkan (JPG, PNG, WEBP)');
                input.value = '';
                previewDiv.style.display = 'none';
                if (currentPhoto) currentPhoto.style.opacity = '1';
                return;
            }
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewDiv.style.display = 'block';
                if (currentPhoto) currentPhoto.style.opacity = '0.5';
            }
            reader.readAsDataURL(file);
        } else {
            previewDiv.style.display = 'none';
            if (currentPhoto) currentPhoto.style.opacity = '1';
        }
    }
</script>
@endpush
@endsection
