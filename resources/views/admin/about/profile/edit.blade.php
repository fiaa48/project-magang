@extends('admin.layouts.app')

@section('title', 'Edit Profil Perusahaan - Admin Panel')

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
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
        100% { transform: translateY(0px); }
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

    /* ========== CARD ULTRA PREMIUM 3D ========== */
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
    .form-select-premium {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%235D4037' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        background-size: 1rem;
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

    /* Tombol */
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

    /* Responsive */
    @media (max-width: 768px) {
        .page-title-premium { font-size: 1.6rem; }
        .card-ultra { border-radius: 1.5rem; }
        .form-control-premium, .form-select-premium {
            padding: 0.7rem 1rem 0.7rem 2.5rem;
            font-size: 0.9rem;
        }
        .btn-premium-ultra, .btn-outline-premium {
            padding: 0.7rem 1.5rem;
            width: 100%;
            justify-content: center;
        }
        .d-flex.gap-3 {
            flex-direction: column;
        }
        .input-group-premium .input-icon {
            left: 0.8rem;
        }
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
            <i class="fas fa-edit"></i>
            <span>Edit Profil Perusahaan</span>
        </div>
        <p class="text-brown-medium mt-2">Perbarui data perusahaan dengan informasi terbaru.</p>
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

            <form action="{{ route('admin.about.profile.update', $data->id) }}" method="POST" id="premiumForm">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Nama Perusahaan -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-building"></i> Nama Perusahaan <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-building input-icon"></i>
                                <input type="text" name="name" class="form-control-premium @error('name') is-invalid @enderror" value="{{ old('name', $data->name) }}" placeholder="PT. Nusantara Sejahtera" required>
                            </div>
                            @error('name')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Tipe Perusahaan -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-tag"></i> Tipe Perusahaan <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-building input-icon"></i>
                                <input type="text" name="type" class="form-control-premium @error('type') is-invalid @enderror" value="{{ old('type', $data->type) }}" placeholder="PT, CV, Firm, dll">
                            </div>
                            @error('type')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Alamat Utama -->
                    <div class="col-12">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-map-marker-alt"></i> Alamat Utama <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-location-dot input-icon" style="top: 1.2rem;"></i>
                                <textarea name="address_main" class="form-control-premium @error('address_main') is-invalid @enderror" rows="3" placeholder="Jl. Sudirman No. 123, Jakarta Pusat">{{ old('address_main', $data->address_main) }}</textarea>
                            </div>
                            @error('address_main')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Alamat Cabang -->
                    <div class="col-12">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-code-branch"></i> Alamat Cabang (Opsional)</label>
                            <div class="input-group-premium">
                                <i class="fas fa-location-dot input-icon" style="top: 1.2rem;"></i>
                                <textarea name="address_branch" class="form-control-premium @error('address_branch') is-invalid @enderror" rows="2" placeholder="Jl. Pemuda No. 45, Surabaya">{{ old('address_branch', $data->address_branch) }}</textarea>
                            </div>
                            @error('address_branch')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Tahun Berdiri -->
                    <div class="col-md-4">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-calendar-alt"></i> Tahun Berdiri</label>
                            <div class="input-group-premium">
                                <i class="fas fa-calendar input-icon"></i>
                                <input type="number" name="established_year" class="form-control-premium @error('established_year') is-invalid @enderror" value="{{ old('established_year', $data->established_year) }}" placeholder="2010" min="1900" max="{{ date('Y') }}">
                            </div>
                            @error('established_year')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- NPWP -->
                    <div class="col-md-4">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-file-invoice"></i> NPWP</label>
                            <div class="input-group-premium">
                                <i class="fas fa-hashtag input-icon"></i>
                                <input type="text" name="npwp" class="form-control-premium @error('npwp') is-invalid @enderror" value="{{ old('npwp', $data->npwp) }}" placeholder="12.345.678.9-012.345">
                            </div>
                            @error('npwp')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- NIB -->
                    <div class="col-md-4">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-id-card"></i> NIB</label>
                            <div class="input-group-premium">
                                <i class="fas fa-qrcode input-icon"></i>
                                <input type="text" name="nib" class="form-control-premium @error('nib') is-invalid @enderror" value="{{ old('nib', $data->nib) }}" placeholder="Nomor Induk Berusaha">
                            </div>
                            @error('nib')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Asosiasi -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-users"></i> Asosiasi</label>
                            <div class="input-group-premium">
                                <i class="fas fa-handshake input-icon"></i>
                                <input type="text" name="association" class="form-control-premium @error('association') is-invalid @enderror" value="{{ old('association', $data->association) }}" placeholder="APINDO, KADIN, dll">
                            </div>
                            @error('association')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- ========== 5 KOLOM BARU ========== -->
                    <!-- Telepon PT -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-phone-alt"></i> Telepon PT</label>
                            <div class="input-group-premium">
                                <i class="fas fa-phone input-icon"></i>
                                <input type="text" name="telepon_pt" class="form-control-premium @error('telepon_pt') is-invalid @enderror" value="{{ old('telepon_pt', $data->telepon_pt) }}" placeholder="(021) 1234567">
                            </div>
                            @error('telepon_pt')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Email PT -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-envelope"></i> Email PT</label>
                            <div class="input-group-premium">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" name="email_pt" class="form-control-premium @error('email_pt') is-invalid @enderror" value="{{ old('email_pt', $data->email_pt) }}" placeholder="info@perusahaan.com">
                            </div>
                            @error('email_pt')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Website PT -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-globe"></i> Website PT</label>
                            <div class="input-group-premium">
                                <i class="fas fa-globe input-icon"></i>
                                <input type="text" name="website_pt" class="form-control-premium @error('website_pt') is-invalid @enderror" value="{{ old('website_pt', $data->website_pt) }}" placeholder="www.perusahaan.com">
                            </div>
                            @error('website_pt')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Inkindo -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-certificate"></i> Inkindo</label>
                            <div class="input-group-premium">
                                <i class="fas fa-id-badge input-icon"></i>
                                <input type="text" name="inkindo" class="form-control-premium @error('inkindo') is-invalid @enderror" value="{{ old('inkindo', $data->inkindo) }}" placeholder="Nomor anggota Inkindo">
                            </div>
                            @error('inkindo')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Kadin -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-chamber-of-commerce"></i> Kadin</label>
                            <div class="input-group-premium">
                                <i class="fas fa-building input-icon"></i>
                                <input type="text" name="kadin" class="form-control-premium @error('kadin') is-invalid @enderror" value="{{ old('kadin', $data->kadin) }}" placeholder="Nomor anggota Kadin">
                            </div>
                            @error('kadin')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- ========== STATUS PKP ========== -->
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-check-circle"></i> Status PKP</label>
                            <div class="input-group-premium">
                                <i class="fas fa-toggle-on input-icon"></i>
                                <div style="display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap; background: var(--cream); border: 1px solid rgba(141,110,99,0.2); border-radius: 1rem; padding: 0.5rem 1rem 0.5rem 2.8rem; width: 100%;">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="is_pkp_active" name="is_pkp_active" value="1" {{ old('is_pkp_active', $data->is_pkp_active) ? 'checked' : '' }} style="cursor: pointer; width: 2.5rem; height: 1.3rem;">
                                        <label class="form-check-label" for="is_pkp_active" style="font-weight: 500; color: var(--brown-dark);">Aktif sebagai PKP</label>
                                    </div>
                                </div>
                            </div>
                            @error('is_pkp_active')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>

                    <!-- Tanggal Pengukuhan PKP (muncul jika checkbox aktif) -->
                    <div class="col-md-6" id="pkp_date_group" style="{{ old('is_pkp_active', $data->is_pkp_active) ? '' : 'display: none;' }}">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-calendar-alt"></i> Tanggal Pengukuhan PKP</label>
                            <div class="input-group-premium">
                                <i class="fas fa-calendar-day input-icon"></i>
                                <input type="date" name="pkp_activation_date" class="form-control-premium @error('pkp_activation_date') is-invalid @enderror" value="{{ old('pkp_activation_date', $data->pkp_activation_date ? $data->pkp_activation_date->format('Y-m-d') : '') }}">
                            </div>
                            <small class="text-muted" style="font-size: 0.7rem;">Diisi jika perusahaan sudah dikukuhkan sebagai PKP.</small>
                            @error('pkp_activation_date')<div class="text-error"><i class="fas fa-circle-exclamation"></i> {{ $message }}</div>@enderror
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between gap-3 mt-4 pt-3">
                    <a href="{{ route('admin.about.profile.index') }}" class="btn-outline-premium"><i class="fas fa-arrow-left"></i> Batal</a>
                    <button type="submit" class="btn-premium-ultra" id="submitBtn"><i class="fas fa-save"></i> Perbarui Profil</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center mt-4 small text-brown-medium opacity-75"><i class="fas fa-shield-alt me-1"></i> Data akan diperbarui dengan aman</div>
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

        // Toggle field tanggal PKP berdasarkan status checkbox
        const pkpCheckbox = document.getElementById('is_pkp_active');
        const pkpDateGroup = document.getElementById('pkp_date_group');
        if (pkpCheckbox && pkpDateGroup) {
            pkpCheckbox.addEventListener('change', function() {
                pkpDateGroup.style.display = this.checked ? 'block' : 'none';
            });
        }

        // Tooltip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        tooltipTriggerList.map(function (el) { return new bootstrap.Tooltip(el); });
    });
</script>
@endpush
