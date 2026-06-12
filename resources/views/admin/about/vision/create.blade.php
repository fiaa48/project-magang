@extends('admin.layouts.app')

@section('title', 'Tambah Visi & Misi - Admin Panel')

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
        margin-bottom: 1.8rem;
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
    textarea.form-control-premium {
        resize: vertical;
        min-height: 120px;
    }
    .dynamic-row {
        display: flex;
        gap: 1rem;
        margin-bottom: 1rem;
        align-items: center;
        flex-wrap: wrap;
    }
    .dynamic-row .form-control-premium {
        flex: 1;
        min-width: 180px;
    }
    .dynamic-row.dual .form-control-premium {
        flex: 1;
        min-width: 150px;
    }
    .btn-remove-row {
        background: #f0e7de;
        border: none;
        color: #b22234;
        cursor: pointer;
        padding: 0.6rem 1.2rem;
        border-radius: 2rem;
        transition: all 0.2s;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        white-space: nowrap;
        margin-left: 0.25rem;
    }
    .btn-remove-row:hover {
        background: #b22234;
        color: white;
    }
    .btn-add-row {
        background: transparent;
        border: 1.5px dashed var(--brown-light);
        border-radius: 60px;
        padding: 0.5rem 1.2rem;
        font-weight: 600;
        color: var(--brown-medium);
        transition: all 0.2s;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        margin-top: 0.5rem;
    }
    .btn-add-row:hover {
        background: var(--cream);
        border-color: var(--gold);
        color: var(--brown-dark);
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
        .dynamic-row { flex-direction: column; align-items: stretch; gap: 0.75rem; }
        .btn-remove-row { align-self: flex-start; margin-left: 0; }
        .action-buttons { justify-content: center; }
        .btn-premium-ultra, .btn-outline-premium { width: 100%; justify-content: center; }
    }
</style>
@endpush

@section('content')
<div class="container-fluid px-3 px-lg-4 py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card-ultra">
                <div class="form-container">
                    <div class="form-title">
                        <i class="fas fa-plus-circle"></i>
                        <span>Tambah Visi & Misi Perusahaan</span>
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

                    <form method="POST" action="{{ route('admin.about.vision.store') }}" id="mainForm">
                        @csrf

                        <!-- Visi (text) -->
                        <div class="form-group">
                            <label for="vision">Visi Perusahaan <span class="text-danger">*</span></label>
                            <textarea name="vision" id="vision" class="form-control-premium" rows="4" required placeholder="Tuliskan visi perusahaan..."></textarea>
                        </div>

                        <!-- Misi (array JSON) -->
                        <div class="form-group">
                            <label>Misi Perusahaan</label>
                            <div id="missions-container">
                                <div class="dynamic-row">
                                    <input type="text" class="form-control-premium" placeholder="Misi 1" name="missions[]">
                                    <button type="button" class="btn-remove-row" style="display: none;"><i class="fas fa-trash-alt"></i> Hapus</button>
                                </div>
                            </div>
                            <button type="button" id="add-mission-btn" class="btn-add-row">
                                <i class="fas fa-plus"></i> Tambah Misi
                            </button>
                            <div class="info-text">Masukkan misi perusahaan (bisa lebih dari satu).</div>
                        </div>

                        <!-- Values (object JSON) -->
                        <div class="form-group">
                            <label>Nilai-Nilai Perusahaan (Key & Value)</label>
                            <div id="values-container">
                                <div class="dynamic-row dual">
                                    <input type="text" class="form-control-premium" placeholder="Key (contoh: Integritas)" name="value_keys[]">
                                    <input type="text" class="form-control-premium" placeholder="Value (contoh: Jujur dan transparan)" name="value_values[]">
                                    <button type="button" class="btn-remove-row" style="display: none;"><i class="fas fa-trash-alt"></i> Hapus</button>
                                </div>
                            </div>
                            <button type="button" id="add-value-btn" class="btn-add-row">
                                <i class="fas fa-plus"></i> Tambah Nilai
                            </button>
                            <div class="info-text">Key bersifat unik, misal: Inovasi, Kepedulian.</div>
                        </div>

                        <div class="action-buttons">
                            <a href="{{ route('admin.about.vision.index') }}" class="btn-outline-premium">
                                <i class="fas fa-arrow-left"></i> Batal
                            </a>
                            <button type="submit" class="btn-premium-ultra">
                                <i class="fas fa-save"></i> Simpan Data
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
        const missionsContainer = document.getElementById('missions-container');
        const addMissionBtn = document.getElementById('add-mission-btn');
        const valuesContainer = document.getElementById('values-container');
        const addValueBtn = document.getElementById('add-value-btn');
        const form = document.getElementById('mainForm');

        function escapeHtml(str) {
            if (!str) return '';
            return str.replace(/[&<>]/g, function(m) {
                if (m === '&') return '&amp;';
                if (m === '<') return '&lt;';
                if (m === '>') return '&gt;';
                return m;
            });
        }

        function toggleRemoveButtons(container) {
            const rows = container.querySelectorAll('.dynamic-row');
            rows.forEach(row => {
                const btn = row.querySelector('.btn-remove-row');
                if (btn) btn.style.display = rows.length > 1 ? 'inline-flex' : 'none';
            });
        }

        function addMissionRow(value = '') {
            const div = document.createElement('div');
            div.className = 'dynamic-row';
            div.innerHTML = `
                <input type="text" class="form-control-premium" placeholder="Misi" name="missions[]" value="${escapeHtml(value)}">
                <button type="button" class="btn-remove-row"><i class="fas fa-trash-alt"></i> Hapus</button>
            `;
            missionsContainer.appendChild(div);
            div.querySelector('.btn-remove-row').addEventListener('click', () => {
                div.remove();
                toggleRemoveButtons(missionsContainer);
            });
            toggleRemoveButtons(missionsContainer);
        }

        function addValueRow(key = '', val = '') {
            const div = document.createElement('div');
            div.className = 'dynamic-row dual';
            div.innerHTML = `
                <input type="text" class="form-control-premium" placeholder="Key" name="value_keys[]" value="${escapeHtml(key)}">
                <input type="text" class="form-control-premium" placeholder="Value" name="value_values[]" value="${escapeHtml(val)}">
                <button type="button" class="btn-remove-row"><i class="fas fa-trash-alt"></i> Hapus</button>
            `;
            valuesContainer.appendChild(div);
            div.querySelector('.btn-remove-row').addEventListener('click', () => {
                div.remove();
                toggleRemoveButtons(valuesContainer);
            });
            toggleRemoveButtons(valuesContainer);
        }

        addMissionBtn.addEventListener('click', () => addMissionRow(''));
        addValueBtn.addEventListener('click', () => addValueRow('', ''));

        // Sebelum submit, ubah missions dan values menjadi JSON
        form.addEventListener('submit', function(e) {
            // Kumpulkan misi
            const missionInputs = document.querySelectorAll('input[name="missions[]"]');
            const missions = [];
            missionInputs.forEach(inp => {
                if (inp.value.trim() !== '') missions.push(inp.value.trim());
            });
            // Hapus name missions[] agar tidak terkirim sebagai array terpisah
            missionInputs.forEach(inp => inp.removeAttribute('name'));
            // Tambah hidden field untuk missions JSON
            let missionsJsonField = document.querySelector('input[name="missions_json"]');
            if (!missionsJsonField) {
                missionsJsonField = document.createElement('input');
                missionsJsonField.type = 'hidden';
                missionsJsonField.name = 'missions';
                form.appendChild(missionsJsonField);
            }
            missionsJsonField.value = JSON.stringify(missions);

            // Kumpulkan values (key-value)
            const keys = document.querySelectorAll('input[name="value_keys[]"]');
            const vals = document.querySelectorAll('input[name="value_values[]"]');
            const valuesObj = {};
            for (let i = 0; i < keys.length; i++) {
                let key = keys[i].value.trim();
                let value = vals[i].value.trim();
                if (key !== '' && value !== '') {
                    valuesObj[key] = value;
                }
            }
            // Hapus name value_keys[] dan value_values[]
            keys.forEach(inp => inp.removeAttribute('name'));
            vals.forEach(inp => inp.removeAttribute('name'));
            let valuesJsonField = document.querySelector('input[name="values_json"]');
            if (!valuesJsonField) {
                valuesJsonField = document.createElement('input');
                valuesJsonField.type = 'hidden';
                valuesJsonField.name = 'values';
                form.appendChild(valuesJsonField);
            }
            valuesJsonField.value = JSON.stringify(valuesObj);
        });

        toggleRemoveButtons(missionsContainer);
        toggleRemoveButtons(valuesContainer);
    });
</script>
@endpush
@endsection


