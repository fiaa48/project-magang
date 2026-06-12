@extends('admin.layouts.app')

@section('title', 'Tambah Layanan Baru - Admin Panel')

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
        --shadow-3d: 0 20px 35px -10px rgba(0,0,0,0.2), 0 0 0 1px rgba(255,255,255,0.1) inset;
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

    /* ========== PAGE HEADER PREMIUM ========== */
    .page-header-premium {
        margin-bottom: 2rem;
        animation: fadeSlideUp 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1) forwards;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
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
        font-size: 2rem;
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
        border-radius: 2rem 2rem 0 0;
    }

    /* ========== FORM STYLE PREMIUM ========== */
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
        font-family: 'Inter', sans-serif;
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

    .item-card {
        background: var(--cream);
        border-radius: 1.2rem;
        padding: 1.2rem;
        margin-bottom: 1.5rem;
        transition: all 0.2s;
        border: 1px solid transparent;
        position: relative;
    }
    .item-card:hover {
        background: var(--white);
        border-color: var(--gold-light);
        box-shadow: var(--shadow-sm);
    }
    .remove-item {
        position: absolute;
        top: 0.8rem;
        right: 0.8rem;
        background: rgba(179,58,58,0.1);
        border: none;
        border-radius: 40px;
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.2s;
        color: #B33A3A;
    }
    .remove-item:hover {
        background: #B33A3A;
        color: white;
    }
    .btn-add-item {
        background: rgba(212,175,55,0.15);
        border: 1px dashed var(--gold);
        border-radius: 60px;
        padding: 0.6rem 1.2rem;
        font-weight: 600;
        color: var(--brown-dark);
        transition: all 0.2s;
        width: 100%;
        cursor: pointer;
        margin-top: 1rem;
    }
    .btn-add-item:hover {
        background: var(--gold);
        color: white;
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
        text-decoration: none;
    }
    .btn-outline-premium:hover {
        background: var(--brown-dark);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 12px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
        .page-header-premium { flex-direction: column; align-items: flex-start; }
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
        .d-flex.gap-3 { flex-direction: column; }
        .input-group-premium .input-icon { left: 0.8rem; }
        .item-card { padding: 1rem; }
        .remove-item { width: 28px; height: 28px; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="page-title-premium">
            <i class="fas fa-plus-circle"></i>
            <span>Tambah Layanan Baru</span>
        </div>
        <!-- Tombol Kembali di header dihapus -->
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

            <form action="{{ route('admin.services.store') }}" method="POST" id="premiumForm">
                @csrf

                <!-- Bagian Utama -->
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-layer-group"></i> Bagian Utama <span class="text-danger">*</span></label>
                    <div class="input-group-premium">
                        <i class="fas fa-tag input-icon"></i>
                        <select name="section" id="section" class="form-select-premium" required>
                            <option value="" disabled {{ old('section') ? '' : 'selected' }}>Pilih Bagian Utama</option>
                            <option value="construction" {{ old('section') == 'construction' ? 'selected' : '' }}>🏗️ Construction</option>
                            <option value="non_construction" {{ old('section') == 'non_construction' ? 'selected' : '' }}>📋 Non-Construction</option>
                            <option value="construction_consultancy" {{ old('section') == 'construction_consultancy' ? 'selected' : '' }}>🏗️ Construction Consultancy</option>
                            <option value="non_construction_consultancy" {{ old('section') == 'non_construction_consultancy' ? 'selected' : '' }}>📊 Non-Construction Consultancy</option>
                            <option value="architectural" {{ old('section') == 'architectural' ? 'selected' : '' }}>🏛️ Architectural</option>
                            <option value="engineering" {{ old('section') == 'engineering' ? 'selected' : '' }}>⚙️ Engineering</option>
                        </select>
                    </div>
                </div>

                <!-- Container untuk item layanan (dinamis) -->
                <div id="items-container">
                    <div class="item-card" data-index="0">
                        <button type="button" class="remove-item" onclick="removeItem(this)"><i class="fas fa-trash-alt"></i></button>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-heading"></i> Judul Data</label>
                            <div class="input-group-premium">
                                <i class="fas fa-pen input-icon"></i>
                                <input type="text" name="items[0][title]" class="form-control-premium" placeholder="Judul layanan">
                            </div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-tag"></i> Kategori Data (Item)</label>
                            <div class="input-group-premium">
                                <i class="fas fa-folder input-icon"></i>
                                <input type="text" name="items[0][category]" class="form-control-premium" placeholder="Misal: Jasa Survey, Jasa Konsultasi">
                            </div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-code"></i> Kode Data</label>
                            <div class="input-group-premium">
                                <i class="fas fa-barcode input-icon"></i>
                                <input type="text" name="items[0][code]" class="form-control-premium" placeholder="Kode layanan (contoh: AR001)">
                            </div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-align-left"></i> Deskripsi Data</label>
                            <div class="input-group-premium">
                                <i class="fas fa-quote-left input-icon" style="top: 1.2rem;"></i>
                                <textarea name="items[0][description]" class="form-control-premium" rows="3" placeholder="Deskripsi layanan..."></textarea>
                            </div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-list-ul"></i> Layanan Data (satu per baris)</label>
                            <div class="input-group-premium">
                                <i class="fas fa-bars input-icon" style="top: 1.2rem;"></i>
                                <textarea name="items[0][services_text]" class="form-control-premium" rows="4" placeholder="Tulis setiap layanan dalam satu baris"></textarea>
                            </div>
                            <div class="text-muted small mt-1"><i class="fas fa-info-circle"></i> Untuk Non-Construction Consultancy akan disimpan sebagai 'services'.</div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-chalkboard"></i> Ruang Lingkup Data</label>
                            <div class="input-group-premium">
                                <i class="fas fa-expand-alt input-icon" style="top: 1.2rem;"></i>
                                <textarea name="items[0][scope]" class="form-control-premium" rows="4" placeholder="Tulis setiap ruang lingkup dalam satu baris"></textarea>
                            </div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-cogs"></i> Proses Data</label>
                            <div class="input-group-premium">
                                <i class="fas fa-sync-alt input-icon" style="top: 1.2rem;"></i>
                                <textarea name="items[0][process]" class="form-control-premium" rows="4" placeholder="Tulis setiap proses dalam satu baris"></textarea>
                            </div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-project-diagram"></i> Proyek Data</label>
                            <div class="input-group-premium">
                                <i class="fas fa-building input-icon" style="top: 1.2rem;"></i>
                                <textarea name="items[0][projects]" class="form-control-premium" rows="4" placeholder="Tulis setiap proyek dalam satu baris"></textarea>
                            </div>
                        </div>
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-layer-group"></i> Tahapan Data</label>
                            <div class="input-group-premium">
                                <i class="fas fa-layer-group input-icon" style="top: 1.2rem;"></i>
                                <textarea name="items[0][phases]" class="form-control-premium" rows="8" placeholder="Tulis tahapan atau fase layanan. Contoh:
Phase 1: Nama Tahap
- Detail tahap 1
- Detail tahap 2

Phase 2: Nama Tahap Lain
- Detail tahap lainnya"></textarea>
                            </div>
                            <div class="text-muted small mt-1"><i class="fas fa-info-circle"></i> Gunakan format teks biasa. Pisahkan antar fase dengan baris kosong.</div>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn-add-item" id="addItemBtn">
                    <i class="fas fa-plus-circle"></i> Tambah Item
                </button>

                <div class="d-flex flex-wrap justify-content-between gap-3 mt-4 pt-3">
                    <a href="{{ route('admin.services.index') }}" class="btn-outline-premium"><i class="fas fa-arrow-left"></i> Batal</a>
                    <button type="submit" class="btn-premium-ultra" id="submitBtn"><i class="fas fa-save"></i> Simpan Layanan</button>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center mt-4 small text-brown-medium opacity-75"><i class="fas fa-shield-alt me-1"></i> Data akan disimpan dengan aman</div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('items-container');
        const addBtn = document.getElementById('addItemBtn');
        let itemCount = document.querySelectorAll('.item-card').length;

        function updateIndices() {
            const cards = document.querySelectorAll('.item-card');
            cards.forEach((card, newIdx) => {
                card.setAttribute('data-index', newIdx);
                const inputs = card.querySelectorAll('input, textarea');
                inputs.forEach(input => {
                    const name = input.getAttribute('name');
                    if (name) {
                        const newName = name.replace(/items\[\d+\]/, `items[${newIdx}]`);
                        input.setAttribute('name', newName);
                    }
                });
            });
            itemCount = cards.length;
        }

        window.removeItem = function(btn) {
            const card = btn.closest('.item-card');
            if (document.querySelectorAll('.item-card').length > 1) {
                card.remove();
                updateIndices();
            } else {
                alert('Minimal harus ada satu item.');
            }
        };

        addBtn.addEventListener('click', function() {
            const newIndex = itemCount;
            const newCard = document.createElement('div');
            newCard.className = 'item-card';
            newCard.setAttribute('data-index', newIndex);
            newCard.innerHTML = `
                <button type="button" class="remove-item" onclick="removeItem(this)"><i class="fas fa-trash-alt"></i></button>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-heading"></i> Judul Data</label>
                    <div class="input-group-premium">
                        <i class="fas fa-pen input-icon"></i>
                        <input type="text" name="items[${newIndex}][title]" class="form-control-premium" placeholder="Judul layanan">
                    </div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-tag"></i> Kategori Data (Item)</label>
                    <div class="input-group-premium">
                        <i class="fas fa-folder input-icon"></i>
                        <input type="text" name="items[${newIndex}][category]" class="form-control-premium" placeholder="Misal: Jasa Survey">
                    </div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-code"></i> Kode Data</label>
                    <div class="input-group-premium">
                        <i class="fas fa-barcode input-icon"></i>
                        <input type="text" name="items[${newIndex}][code]" class="form-control-premium" placeholder="Kode layanan">
                    </div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-align-left"></i> Deskripsi Data</label>
                    <div class="input-group-premium">
                        <i class="fas fa-quote-left input-icon" style="top: 1.2rem;"></i>
                        <textarea name="items[${newIndex}][description]" class="form-control-premium" rows="3" placeholder="Deskripsi layanan..."></textarea>
                    </div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-list-ul"></i> Layanan Data (satu per baris)</label>
                    <div class="input-group-premium">
                        <i class="fas fa-bars input-icon" style="top: 1.2rem;"></i>
                        <textarea name="items[${newIndex}][services_text]" class="form-control-premium" rows="4" placeholder="Tulis setiap layanan dalam satu baris"></textarea>
                    </div>
                    <div class="text-muted small mt-1"><i class="fas fa-info-circle"></i> Untuk Non-Construction Consultancy akan disimpan sebagai 'services'.</div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-chalkboard"></i> Ruang Lingkup Data</label>
                    <div class="input-group-premium">
                        <i class="fas fa-expand-alt input-icon" style="top: 1.2rem;"></i>
                        <textarea name="items[${newIndex}][scope]" class="form-control-premium" rows="4" placeholder="Tulis setiap ruang lingkup dalam satu baris"></textarea>
                    </div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-cogs"></i> Proses Data</label>
                    <div class="input-group-premium">
                        <i class="fas fa-sync-alt input-icon" style="top: 1.2rem;"></i>
                        <textarea name="items[${newIndex}][process]" class="form-control-premium" rows="4" placeholder="Tulis setiap proses dalam satu baris"></textarea>
                    </div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-project-diagram"></i> Proyek Data</label>
                    <div class="input-group-premium">
                        <i class="fas fa-building input-icon" style="top: 1.2rem;"></i>
                        <textarea name="items[${newIndex}][projects]" class="form-control-premium" rows="4" placeholder="Tulis setiap proyek dalam satu baris"></textarea>
                    </div>
                </div>
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-layer-group"></i> Tahapan Data</label>
                    <div class="input-group-premium">
                        <i class="fas fa-layer-group input-icon" style="top: 1.2rem;"></i>
                        <textarea name="items[${newIndex}][phases]" class="form-control-premium" rows="8" placeholder="Tulis tahapan atau fase layanan. Contoh:
Phase 1: Nama Tahap
- Detail tahap 1
- Detail tahap 2

Phase 2: Nama Tahap Lain
- Detail tahap lainnya"></textarea>
                    </div>
                    <div class="text-muted small mt-1"><i class="fas fa-info-circle"></i> Gunakan format teks biasa. Pisahkan antar fase dengan baris kosong.</div>
                </div>
            `;
            container.appendChild(newCard);
            updateIndices();
        });

        const form = document.getElementById('premiumForm');
        const submitBtn = document.getElementById('submitBtn');
        if (form) {
            form.addEventListener('submit', function() {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
            });
        }

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        tooltipTriggerList.map(function (el) {
            return new bootstrap.Tooltip(el);
        });
    });
</script>
@endpush

