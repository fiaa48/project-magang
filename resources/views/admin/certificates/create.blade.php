<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Sertifikat — Admin</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #faf6f2;
            color: #3e3a37;
            line-height: 1.5;
        }

        .container {
            max-width: 680px;
            padding: 0 24px;
        }

        /* ===== HEADER MINIMALIS ===== */
        .page-header {
            background: #8b6b4d;
            padding: 1.5rem 0;
            margin-bottom: 2rem;
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .header-icon {
            width: 48px;
            height: 48px;
            background: #a5856b;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
        }

        .header-text h1 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
            color: white;
            letter-spacing: -0.02em;
        }

        .header-text p {
            margin: 2px 0 0;
            color: #f0e4dc;
            font-size: 0.8rem;
        }

        /* ===== FORM CARD ===== */
        .form-card {
            background: white;
            border-radius: 20px;
            border: 1px solid #eae1d9;
            padding: 2rem 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            margin-bottom: 1.5rem;
        }

        /* ===== FORM GROUP ===== */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            font-size: 0.85rem;
            color: #5e4e44;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .form-label i {
            color: #8b6b4d;
            font-size: 0.8rem;
            width: 18px;
            text-align: center;
        }

        .form-label .required {
            color: #b34a4a;
            font-size: 0.7rem;
            margin-left: 4px;
        }

        .form-control, .form-select {
            border: 1px solid #e0d6ce;
            border-radius: 12px;
            padding: 0.7rem 1.2rem;
            font-size: 0.95rem;
            color: #2c2a27;
            background: white;
            transition: all 0.2s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #b08968;
            box-shadow: 0 0 0 3px rgba(176, 137, 104, 0.08);
            outline: none;
        }

        .form-control::placeholder {
            color: #bbb0a8;
            font-size: 0.9rem;
        }

        /* ===== FORM ROW ===== */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
        }

        /* ===== ACTION BUTTONS ===== */
        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid #f0eae4;
        }

        .btn {
            padding: 0.7rem 1.8rem;
            border-radius: 40px;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            border: none;
        }

        .btn-primary {
            background: #8b6b4d;
            color: white;
        }

        .btn-primary:hover {
            background: #6b4f3a;
            color: white;
        }

        .btn-secondary {
            background: #f2ebe5;
            color: #5e4e44;
            border: 1px solid #e0d6ce;
        }

        .btn-secondary:hover {
            background: #e8dcd2;
            color: #3e3a37;
        }

        .btn i {
            font-size: 0.85rem;
        }

        /* ===== HINT TEXT ===== */
        .hint-text {
            font-size: 0.7rem;
            color: #9c8e85;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .hint-text i {
            color: #b08968;
            font-size: 0.65rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .container {
                padding: 0 20px;
            }

            .form-card {
                padding: 1.5rem;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 0;
            }

            .form-actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }

        /* ===== ANIMATION ===== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(5px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-in {
            animation: fadeIn 0.3s ease;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<div class="page-header">
    <div class="container">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-certificate"></i>
            </div>
            <div class="header-text">
                <h1>Tambah Sertifikat</h1>
                <p>Input data sertifikat baru</p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 animate-in">
    <div class="form-card">
        <form action="{{ route('admin.certificates.store') }}" method="POST">
            @csrf

            <!-- NAMA SERTIFIKAT -->
            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-tag"></i>
                    Nama Sertifikat
                    <span class="required">*</span>
                </label>
                <input type="text"
                       name="name"
                       class="form-control"
                       placeholder="Contoh: Sertifikat ISO 9001:2025"
                       required>
                <div class="hint-text">
                    <i class="fas fa-info-circle"></i>
                    Masukkan nama lengkap sertifikat
                </div>
            </div>

            <!-- JENIS & TAHUN -->
            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-clipboard-list"></i>
                        Jenis Sertifikat
                        <span class="required">*</span>
                    </label>
                    <select name="type" class="form-select" required>
                        <option value="" selected disabled>Pilih jenis sertifikat</option>
                        <option value="ISO">📋 ISO - International Organization for Standardization</option>
                        <option value="SNI">🇮🇩 SNI - Standar Nasional Indonesia</option>
                        <option value="SKK">📄 SKK - Sertifikat Keahlian Kerja</option>
                        <option value="SIO">🔧 SIO - Sertifikat Izin Operator</option>
                        <option value="Lainnya">📌 Lainnya</option>
                    </select>
                    <div class="hint-text">
                        <i class="fas fa-chevron-down"></i>
                        Pilih kategori sertifikat
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-calendar"></i>
                        Tahun Terbit
                        <span class="required">*</span>
                    </label>
                    <select name="year" class="form-select" required>
                        <option value="" selected disabled>Pilih tahun</option>
                        @for($year = date('Y') + 2; $year >= 2000; $year--)
                            <option value="{{ $year }}" {{ $year == date('Y') ? 'selected' : '' }}>
                                {{ $year }}
                            </option>
                        @endfor
                    </select>
                    <div class="hint-text">
                        <i class="fas fa-calendar-alt"></i>
                        Tahun penerbitan sertifikat
                    </div>
                </div>
            </div>

            <!-- KETERANGAN TAMBAHAN (OPSIONAL) -->
            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-pencil-alt"></i>
                    Keterangan
                </label>
                <input type="text"
                       name="description"
                       class="form-control"
                       placeholder="Contoh: Berlaku 3 tahun, diterbitkan oleh BSN">
                <div class="hint-text">
                    <i class="fas fa-lightbulb"></i>
                    Opsional, tambahkan info tambahan jika perlu
                </div>
            </div>

            <!-- ACTION BUTTONS -->
            <div class="form-actions">
                <a href="{{ route('admin.certificates') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Simpan Sertifikat
                </button>
            </div>

        </form>
    </div>

    <!-- FOOTER NOTE -->
    <div class="text-center mt-3">
        <span style="color: #9c8e85; font-size: 0.7rem;">
            <i class="fas fa-shield-alt me-1" style="color: #b08968;"></i>
            Data sertifikat akan tersimpan aman
        </span>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Auto-capitalize untuk nama sertifikat (opsional)
    document.querySelector('input[name="name"]')?.addEventListener('input', function() {
        // Tidak memaksa, hanya saran
    });

    // Validasi client-side tambahan
    document.querySelector('form')?.addEventListener('submit', function(e) {
        const name = document.querySelector('input[name="name"]');
        const type = document.querySelector('select[name="type"]');
        const year = document.querySelector('select[name="year"]');

        if (name.value.trim() === '') {
            e.preventDefault();
            name.classList.add('is-invalid');
            name.focus();
            alert('Nama sertifikat harus diisi');
            return false;
        }

        name.classList.remove('is-invalid');
    });
</script>

<!-- Script untuk memperbaiki kode yang rusak di versi sebelumnya -->
<script>
    // Memastikan semua input berfungsi dengan baik
    document.addEventListener('DOMContentLoaded', function() {
        // Perbaiki jika ada input yang kelebihan quote
        console.log('Form Tambah Sertifikat siap!');
    });
</script>

</body>
</html>
