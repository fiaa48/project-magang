@extends('admin.layouts.app')

@section('title', 'Edit User - Admin')

@push('styles')
<style>
    :root {
        --brown-dark: #241b64;
        --brown-medium: #302574;
        --brown-light: #ef332d;
        --white: #ffffff;
    }

    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 2rem;
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
        color: var(--brown-light);
    }

    .card-premium {
        background: var(--white);
        border-radius: 1.25rem;
        border: none;
        box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05), 0 0 0 1px rgba(0,0,0,0.02);
        overflow: hidden;
    }

    .form-label {
        font-weight: 600;
        color: var(--brown-dark);
    }

    .form-control {
        border-radius: 0.9rem;
        border: 1px solid rgba(36,27,100,0.14);
        padding: 0.75rem 1rem;
    }

    .form-control:focus {
        border-color: var(--brown-medium);
        box-shadow: 0 0 0 0.2rem rgba(48,37,116,0.12);
    }

    /* Gaya untuk input dengan toggle password */
    .password-wrapper {
        position: relative;
    }

    .password-wrapper .form-control {
        padding-right: 2.8rem;
    }

    .toggle-password {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #6c757d;
        background: transparent;
        border: none;
        font-size: 1.1rem;
        z-index: 5;
    }

    .toggle-password:hover {
        color: var(--brown-dark);
    }

    .btn-brown {
        background: var(--brown-dark);
        border-color: var(--brown-dark);
        color: #ffffff;
        border-radius: 999px;
        font-weight: 600;
        padding: 0.65rem 1.5rem;
    }

    .btn-brown:hover {
        background: var(--brown-medium);
        border-color: var(--brown-medium);
        color: #ffffff;
    }

    .btn-outline-brown {
        border: 1px solid rgba(36,27,100,0.2);
        color: var(--brown-dark);
        border-radius: 999px;
        font-weight: 600;
        padding: 0.65rem 1.5rem;
    }

    .btn-outline-brown:hover {
        background: var(--brown-dark);
        color: #ffffff;
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0">
    <div class="page-header">
        <h1 class="page-title">
            <i class="fas fa-user-edit"></i>
            Edit User
        </h1>
    </div>

    <div class="card-premium">
        <div class="card-body p-4 p-lg-5">
            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- PASSWORD BARU dengan toggle --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Password Baru</label>
                    <div class="password-wrapper">
                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password">
                        <button type="button" class="toggle-password" data-target="password">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    <small class="text-muted">Kosongkan jika password tidak ingin diubah.</small>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- KONFIRMASI PASSWORD dengan toggle --}}
                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                    <div class="password-wrapper">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" autocomplete="new-password">
                        <button type="button" class="toggle-password" data-target="password_confirmation">
                            <i class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-brown">
                        <i class="fas fa-arrow-left me-1"></i> Batal
                    </a>
                    <button type="submit" class="btn btn-brown">
                        <i class="fas fa-save me-1"></i>
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle password visibility untuk semua tombol .toggle-password
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const icon = this.querySelector('i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    input.type = 'password';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });
        });
    });
</script>
@endpush
