<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sertifikat — Admin</title>

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

        .form-control {
            border: 1px solid #e0d6ce;
            border-radius: 12px;
            padding: 0.7rem 1.2rem;
            font-size: 0.95rem;
            color: #2c2a27;
            background: white;
            transition: all 0.2s;
        }

        .form-control:focus {
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

        /* ===== INFO CARD ===== */
        .info-card {
            background: #f8f4f0;
            border-radius: 16px;
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            border: 1px solid #eae1d9;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .info-icon {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b6b4d;
            font-size: 1.1rem;
            border: 1px solid #e0d6ce;
        }

        .info-text {
            font-size: 0.9rem;
            color: #5e4e44;
        }

        .info-text strong {
            color: #3e3a37;
        }

        /* ===== ACTION BUTTONS ===== */
        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 1.5rem;
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

        /* ===== CURRENT VALUE TAG ===== */
        .current-value {
            display: inline-block;
            background: #f5efea;
            padding: 0.2rem 0.8rem;
            border-radius: 30px;
            font-size: 0.7rem;
            color: #6b4f3a;
            margin-left: 8px;
            border: 1px solid #e0d6ce;
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
                <h1>Edit Sertifikat</h1>
                <p>Perbarui informasi sertifikat</p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 animate-in">
    <div class="form-card">
        <form action="{{ route('admin.certificates.update', $certificate->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- INFO CARD - DATA LAMA -->
            <div class="info-card">
                <div class="info-icon">
                    <i class="fas fa-info"></i>
                </div>
                <div class="info-text">
                    <strong>ID: {{ $certificate->id }}</strong> ·
                    Dibuat: {{ $certificate->created_at ? date('d M Y', strtotime($certificate->created_at)) : '-' }}
                </div>
            </div>

            <!-- NAMA SERTIFIKAT -->
            <div class="form-group">
                <label class="form-label">
                    <i class="fas fa-tag"></i>
                    Nama Sertifikat
                    <span class="required">*</span>
                </label>
                <input type="text"
                       name="name"
                       value="{{ $certificate->name }}"
                       class="form-control"
                       placeholder="Contoh: Sertifikat ISO 9001"
                       required>
                <div style="font-size: 0.7rem; color: #9c8e85; margin-top: 6px; display: flex; align-items: center; gap: 6px;">
                    <i class="fas fa-info-circle" style="color: #b08968;"></i>
                    Edit nama sertifikat sesuai dokumen
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
                    <input type="text"
                           name="type"
                           value="{{ $certificate->type }}"
                           class="form-control"
                           placeholder="Contoh: ISO, SNI, dll"
                           required>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-calendar"></i>
                        Tahun Terbit
                        <span class="required">*</span>
                    </label>
                    <input type="number"
                           name="year"
                           value="{{ $certificate->year }}"
                           class="form-control"
                           placeholder="{{ date('Y') }}"
                           min="2000"
                           max="{{ date('Y') + 5 }}"
                           required>
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
                    Update Sertifikat
                </button>
            </div>

        </form>
    </div>

    <!-- FOOTER NOTE -->
    <div class="text-center mt-3">
        <span style="color: #9c8e85; font-size: 0.7rem;">
            <i class="fas fa-shield-alt me-1" style="color: #b08968;"></i>
            Perubahan akan langsung tersimpan
        </span>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Auto format tahun
    document.querySelector('input[name="year"]')?.addEventListener('input', function() {
        let year = parseInt(this.value);
        let currentYear = new Date().getFullYear();

        if (year < 2000) {
            this.value = 2000;
        } else if (year > currentYear + 5) {
            this.value = currentYear + 5;
        }
    });

    // Confirm sebelum keluar jika ada perubahan (opsional)
    let formChanged = false;
    document.querySelectorAll('input').forEach(input => {
        input.addEventListener('input', function() {
            formChanged = true;
        });
    });

    document.querySelector('.btn-secondary')?.addEventListener('click', function(e) {
        if (formChanged) {
            if (!confirm('Ada perubahan yang belum disimpan. Yakin ingin kembali?')) {
                e.preventDefault();
            }
        }
    });
</script>

</body>
</html>
