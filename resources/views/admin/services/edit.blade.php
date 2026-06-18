@extends('admin.layouts.app')

@section('title', 'Edit Layanan - Admin Panel')

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
        font-size: 2.2rem;
        filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }

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
    }
    .item-card:hover {
        background: var(--white);
        border-color: var(--gold-light);
        box-shadow: var(--shadow-sm);
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
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="page-title-premium">
            <i class="fas fa-edit"></i>
            <span>Edit Layanan</span>
        </div>
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

            @php
                $dataArray = $service->data;
                $items = [];

                if (is_array($dataArray) && !empty($dataArray)) {
                    if (isset($dataArray['title']) && !isset($dataArray[0])) {
                        $items[] = $dataArray;
                    } else {
                        $items = $dataArray;
                    }
                }

                // Fungsi untuk mengubah array phases menjadi teks biasa (format daftar)
                function formatPhasesToText($phases) {
                    if (empty($phases)) return '';
                    if (is_string($phases)) return $phases;
                    if (is_array($phases)) {
                        $output = '';
                        foreach ($phases as $phaseName => $phaseItems) {
                            $output .= $phaseName . "\n";
                            if (is_array($phaseItems)) {
                                foreach ($phaseItems as $item) {
                                    $output .= "- " . $item . "\n";
                                }
                            } else {
                                $output .= "- " . $phaseItems . "\n";
                            }
                            $output .= "\n";
                        }
                        return trim($output);
                    }
                    return '';
                }
            @endphp

            <form action="{{ route('admin.services.update', $service->id) }}" method="POST" id="premiumForm">
                @csrf
                @method('PUT')

                <!-- Bagian Utama -->
                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-layer-group"></i> Bagian Utama <span class="text-danger">*</span></label>
                    <div class="input-group-premium">
                        <i class="fas fa-tag input-icon"></i>
                        <select name="section" class="form-select-premium" required>
                            <option value="construction" {{ $service->section == 'construction' ? 'selected' : '' }}>🏗️ Construction</option>
                            <option value="non_construction" {{ $service->section == 'non_construction' ? 'selected' : '' }}>📋 Non-Construction</option>
                            <option value="construction_consultancy" {{ $service->section == 'construction_consultancy' ? 'selected' : '' }}>🏗️ Construction Consultancy</option>
                            <option value="non_construction_consultancy" {{ $service->section == 'non_construction_consultancy' ? 'selected' : '' }}>📊 Non-Construction Consultancy</option>
                            {{-- <option value="architectural" {{ $service->section == 'architectural' ? 'selected' : '' }}>🏛️ Architectural</option>
                            <option value="engineering" {{ $service->section == 'engineering' ? 'selected' : '' }}>⚙️ Engineering</option> --}}
                        </select>
                    </div>
                </div>

                <!-- Daftar item JSON -->
                <div id="items-container">
                    @forelse($items as $idx => $item)
                        @php
                            $title = $item['title'] ?? ($item['code'] ?? '');
                            $itemCategory = $item['category'] ?? '';
                            $description = $item['description'] ?? '';
                            $code = $item['code'] ?? '';

                            // Ambil daftar layanan: prioritas 'services', lalu 'sub_services', lalu 'scope'
                            $servicesText = '';
                            if (isset($item['services']) && is_array($item['services'])) {
                                $servicesText = implode("\n", $item['services']);
                            } elseif (isset($item['sub_services']) && is_array($item['sub_services'])) {
                                $servicesText = implode("\n", $item['sub_services']);
                            } elseif (isset($item['scope']) && is_array($item['scope'])) {
                                $servicesText = implode("\n", $item['scope']);
                            }

                            $scope = isset($item['scope']) && is_array($item['scope']) ? implode("\n", $item['scope']) : '';
                            $process = isset($item['process']) && is_array($item['process']) ? implode("\n", $item['process']) : '';
                            $projects = isset($item['projects']) && is_array($item['projects']) ? implode("\n", $item['projects']) : '';
                            // Konversi phases ke teks biasa
                            $phasesText = '';
                            if (isset($item['phases'])) {
                                $phasesText = formatPhasesToText($item['phases']);
                            }
                        @endphp
                        <div class="item-card">
                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-heading"></i> Judul Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-pen input-icon"></i>
                                    <input type="text" name="items[{{ $idx }}][title]" class="form-control-premium" value="{{ old("items.$idx.title", $title) }}" placeholder="Judul layanan">
                                </div>
                            </div>

                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-tag"></i> Kategori Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-folder input-icon"></i>
                                    <input type="text" name="items[{{ $idx }}][category]" class="form-control-premium" value="{{ old("items.$idx.category", $itemCategory) }}" placeholder="Misal: Jasa Survey, Jasa Konsultasi, dll.">
                                </div>
                            </div>

                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-code"></i> Kode Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-barcode input-icon"></i>
                                    <input type="text" name="items[{{ $idx }}][code]" class="form-control-premium" value="{{ old("items.$idx.code", $code) }}" placeholder="Kode layanan (contoh: AR001)">
                                </div>
                            </div>

                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-align-left"></i> Deskripsi Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-quote-left input-icon" style="top: 1.2rem;"></i>
                                    <textarea name="items[{{ $idx }}][description]" class="form-control-premium" rows="3" placeholder="Deskripsi layanan...">{{ old("items.$idx.description", $description) }}</textarea>
                                </div>
                            </div>

                            <!-- Layanan Data (satu per baris) -->
                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-list-ul"></i> Layanan Data (satu per baris)</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-bars input-icon" style="top: 1.2rem;"></i>
                                    <textarea name="items[{{ $idx }}][services_text]" class="form-control-premium" rows="4" placeholder="Tulis setiap layanan dalam satu baris">{{ old("items.$idx.services_text", $servicesText) }}</textarea>
                                </div>
                                <div class="text-muted small mt-1"><i class="fas fa-info-circle"></i> Untuk data Non-Construction Consultancy, ini akan disimpan ke key 'services'.</div>
                            </div>

                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-chalkboard"></i> Ruang Lingkup Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-expand-alt input-icon" style="top: 1.2rem;"></i>
                                    <textarea name="items[{{ $idx }}][scope]" class="form-control-premium" rows="4" placeholder="Tulis setiap ruang lingkup dalam satu baris">{{ old("items.$idx.scope", $scope) }}</textarea>
                                </div>
                            </div>

                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-cogs"></i> Proses Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-sync-alt input-icon" style="top: 1.2rem;"></i>
                                    <textarea name="items[{{ $idx }}][process]" class="form-control-premium" rows="4" placeholder="Tulis setiap proses dalam satu baris">{{ old("items.$idx.process", $process) }}</textarea>
                                </div>
                            </div>

                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-project-diagram"></i> Proyek Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-building input-icon" style="top: 1.2rem;"></i>
                                    <textarea name="items[{{ $idx }}][projects]" class="form-control-premium" rows="4" placeholder="Tulis setiap proyek dalam satu baris">{{ old("items.$idx.projects", $projects) }}</textarea>
                                </div>
                            </div>

                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-layer-group"></i> Tahapan Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-layer-group input-icon" style="top: 1.2rem;"></i>
                                    <textarea name="items[{{ $idx }}][phases]" class="form-control-premium" rows="8" placeholder="Tulis tahapan atau fase layanan. Contoh:
Phase 1: Nama Tahap
- Detail tahap 1
- Detail tahap 2

Phase 2: Nama Tahap Lain
- Detail tahap lainnya">{{ old("items.$idx.phases", $phasesText) }}</textarea>
                                </div>
                                <div class="text-muted small mt-1"><i class="fas fa-info-circle"></i> Gunakan format teks biasa. Pisahkan antar fase dengan baris kosong.</div>
                            </div>
                        </div>
                    @empty
                        <div class="item-card">
                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-heading"></i> Judul Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-pen input-icon"></i>
                                    <input type="text" name="items[0][title]" class="form-control-premium" value="" placeholder="Judul layanan">
                                </div>
                            </div>
                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-tag"></i> Kategori Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-folder input-icon"></i>
                                    <input type="text" name="items[0][category]" class="form-control-premium" value="" placeholder="Misal: Jasa Survey">
                                </div>
                            </div>
                            <div class="form-group-premium">
                                <label class="form-label-premium"><i class="fas fa-code"></i> Kode Data</label>
                                <div class="input-group-premium">
                                    <i class="fas fa-barcode input-icon"></i>
                                    <input type="text" name="items[0][code]" class="form-control-premium" value="" placeholder="Kode layanan">
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
                    @endforelse
                </div>

                <div class="d-flex flex-wrap justify-content-between gap-3 mt-4 pt-3">
                    <a href="{{ route('admin.services.index') }}" class="btn-outline-premium"><i class="fas fa-arrow-left"></i> Batal</a>
                    <button type="submit" class="btn-premium-ultra" id="submitBtn"><i class="fas fa-save"></i> Perbarui Layanan</button>
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

        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
        tooltipTriggerList.map(function (el) {
            return new bootstrap.Tooltip(el);
        });
    });
</script>
@endpush

