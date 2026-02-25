<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project — Admin</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            background: #f7f0ea;  /* Cream soft */
            color: #4a3b33;
            line-height: 1.6;
        }

        .container {
            max-width: 880px;
            padding: 0 24px;
        }

        /* ===== HEADER MINIMAL ===== */
        .page-header {
            background: #8b6b4d;  /* Coklat solid */
            padding: 2rem 0;
            margin-bottom: 2.5rem;
        }

        .header-content {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .header-icon {
            width: 52px;
            height: 52px;
            background: #a5856b;  /* Coklat lebih muda */
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.4rem;
        }

        .header-text h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin: 0;
            color: white;
            letter-spacing: -0.02em;
        }

        .header-text p {
            margin: 4px 0 0;
            color: #f0e2d8;
            font-size: 0.9rem;
        }

        /* ===== FORM CARD - PURE WHITE ===== */
        .form-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 24px rgba(100, 70, 50, 0.06);
        }

        /* ===== FORM SECTION ===== */
        .form-section {
            margin-bottom: 2.5rem;
        }

        .form-section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1.75rem;
        }

        .form-section-title i {
            width: 32px;
            height: 32px;
            background: #f0e7e0;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b6b4d;
            font-size: 1rem;
        }

        .form-section-title h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0;
            color: #4a3b33;
        }

        /* ===== FORM GROUP ===== */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            font-size: 0.9rem;
            color: #5e4e44;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .form-label i {
            color: #8b6b4d;
            font-size: 0.85rem;
            width: 18px;
        }

        .form-label .required {
            color: #c0392b;
            font-size: 0.75rem;
            margin-left: 4px;
        }

        .form-control, .form-select {
            border: 1px solid #e3dbd4;
            border-radius: 12px;
            padding: 0.75rem 1.2rem;
            font-size: 0.95rem;
            color: #3a2e28;
            background-color: white;
            transition: all 0.2s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #8b6b4d;
            box-shadow: 0 0 0 3px rgba(139, 107, 77, 0.08);
            outline: none;
        }

        .form-control::placeholder {
            color: #bbb0a8;
            font-size: 0.9rem;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        /* ===== FORM ROW ===== */
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
        }

        /* ===== FILE UPLOAD - SIMPLE ===== */
        .file-upload {
            border: 1px dashed #cbbeb6;
            border-radius: 12px;
            padding: 1.5rem;
            background-color: #faf7f4;
            text-align: center;
            transition: all 0.2s;
            cursor: pointer;
        }

        .file-upload:hover {
            border-color: #8b6b4d;
            background-color: #f8f2ed;
        }

        .file-upload i {
            font-size: 2rem;
            color: #8b6b4d;
            margin-bottom: 0.5rem;
        }

        .file-upload p {
            margin-bottom: 0.25rem;
            font-weight: 500;
            color: #5e4e44;
        }

        .file-upload small {
            color: #9a8a80;
            font-size: 0.75rem;
        }

        /* ===== PREVIEW IMAGE ===== */
        .image-preview {
            margin-top: 1rem;
            display: none;
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #e3dbd4;
        }

        .image-preview.show {
            display: block;
        }

        .image-preview img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
        }

        .image-preview-overlay {
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem;
        }

        .image-preview-overlay button {
            background: white;
            border: none;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #b33a3a;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: all 0.2s;
        }

        .image-preview-overlay button:hover {
            background: #ffeeed;
        }

        /* ===== FILE INFO ===== */
        .file-info {
            display: none;
            margin-top: 1rem;
            padding: 0.75rem 1rem;
            background-color: #f4eee9;
            border-radius: 10px;
            font-size: 0.9rem;
            color: #5e4e44;
            align-items: center;
            justify-content: space-between;
        }

        .file-info.show {
            display: flex;
        }

        .file-info i {
            color: #8b6b4d;
            margin-right: 8px;
        }

        .file-remove {
            color: #b3594a;
            cursor: pointer;
            padding: 4px 10px;
            border-radius: 6px;
        }

        .file-remove:hover {
            background-color: #ffe8e5;
        }

        /* ===== BUTTONS - SIMPLE ===== */
        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid #eee7e2;
        }

        .btn {
            padding: 0.7rem 1.8rem;
            border-radius: 30px;
            font-weight: 500;
            font-size: 0.95rem;
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
            background: #f0e8e2;
            color: #5e4e44;
            border: 1px solid #e0d6cf;
        }

        .btn-secondary:hover {
            background: #e6dbd3;
            color: #3a2e28;
        }

        /* ===== HINT TEXT ===== */
        .hint-text {
            font-size: 0.75rem;
            color: #9a8a80;
            margin-top: 0.5rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .hint-text i {
            color: #a5856b;
            font-size: 0.7rem;
        }

        /* ===== EMPTY STATE ===== */
        .helper-text {
            color: #8c7a6e;
            font-size: 0.85rem;
            background: #f4efea;
            padding: 10px 20px;
            border-radius: 40px;
            display: inline-block;
        }

        /* ===== VALIDATION ===== */
        .form-control.is-invalid {
            border-color: #c0392b;
            background-color: #fff8f7;
        }

        .invalid-feedback {
            font-size: 0.75rem;
            color: #c0392b;
            margin-top: 0.4rem;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .form-card {
                padding: 1.75rem;
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

            .header-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .header-text h1 {
                font-size: 1.5rem;
            }
        }

        /* ===== ANIMATION ===== */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-in {
            animation: fadeIn 0.3s ease;
        }
    </style>
</head>
<body>

<!-- HEADER - COKLAT SOLID -->
<div class="page-header">
    <div class="container">
        <div class="header-content">
            <div class="header-icon">
                <i class="fas fa-plus"></i>
            </div>
            <div class="header-text">
                <h1>Tambah Project</h1>
                <p>Isi form berikut untuk menambahkan project baru</p>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 animate-in">
    <div class="form-card">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" id="projectForm">
            @csrf

            <!-- INFORMASI DASAR -->
            <div class="form-section">
                <div class="form-section-title">
                    <i class="fas fa-info"></i>
                    <h3>Informasi Dasar</h3>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-heading"></i>
                        Judul Project
                        <span class="required">*</span>
                    </label>
                    <input type="text"
                           name="title"
                           class="form-control"
                           placeholder="Contoh: Renovasi Gedung Utama"
                           required>
                </div>

                <div class="form-group">
                    <label class="form-label">
                        <i class="fas fa-align-left"></i>
                        Deskripsi
                        <span class="required">*</span>
                    </label>
                    <textarea name="description"
                              class="form-control"
                              placeholder="Jelaskan detail project..."
                              required></textarea>
                </div>
            </div>

            <!-- LOKASI & TAHUN -->
            <div class="form-section">
                <div class="form-section-title">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Lokasi & Waktu</h3>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-location-dot"></i>
                            Lokasi
                        </label>
                        <input type="text"
                               name="location"
                               class="form-control"
                               placeholder="Jakarta Selatan">
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-calendar"></i>
                            Tahun
                        </label>
                        <input type="number"
                               name="year"
                               class="form-control"
                               placeholder="{{ date('Y') }}"
                               min="2000"
                               max="{{ date('Y') + 5 }}">
                    </div>
                </div>
            </div>

            <!-- STATUS & GAMBAR -->
            <div class="form-section">
                <div class="form-section-title">
                    <i class="fas fa-cog"></i>
                    <h3>Status & Media</h3>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-tag"></i>
                            Status
                        </label>
                        <select name="status" class="form-select">
                            <option value="ongoing" selected>Ongoing - Berjalan</option>
                            <option value="completed">Completed - Selesai</option>
                            <option value="pending">Pending - Ditunda</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">
                            <i class="fas fa-image"></i>
                            Gambar
                        </label>

                        <div class="file-upload" onclick="document.getElementById('imageInput').click()">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Klik untuk upload</p>
                            <small>JPG, PNG, WebP (Max 2MB)</small>
                        </div>

                        <input type="file"
                               id="imageInput"
                               name="image"
                               accept="image/jpeg, image/png, image/webp"
                               style="display: none;">

                        <!-- Preview -->
                        <div id="imagePreview" class="image-preview">
                            <img id="previewImg" src="" alt="Preview">
                            <div class="image-preview-overlay">
                                <button type="button" onclick="removeImage()">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <!-- File Info -->
                        <div id="fileInfo" class="file-info">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-check-circle"></i>
                                <span id="fileName"></span>
                            </div>
                            <span class="file-remove" onclick="removeImage()">
                                <i class="fas fa-trash-alt"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BUTTONS -->
            <div class="form-actions">
                <a href="{{ route('admin.projects') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>
            </div>
        </form>
    </div>

    <!-- FOOTER -->
    <div class="text-center">
        <span class="helper-text">
            <i class="fas fa-shield-alt me-1"></i>
            Data tersimpan aman
        </span>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Image upload
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            if (file.size > 2 * 1024 * 1024) {
                alert('Maksimal 2MB');
                this.value = '';
                return;
            }

            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('imagePreview').classList.add('show');
                document.getElementById('fileName').textContent = file.name;
                document.getElementById('fileInfo').classList.add('show');
                document.querySelector('.file-upload p').textContent = 'Ganti gambar';
            }
            reader.readAsDataURL(file);
        }
    });

    function removeImage() {
        document.getElementById('imageInput').value = '';
        document.getElementById('imagePreview').classList.remove('show');
        document.getElementById('fileInfo').classList.remove('show');
        document.querySelector('.file-upload p').textContent = 'Klik untuk upload';
    }

    // Validation
    document.getElementById('projectForm').addEventListener('submit', function(e) {
        const title = document.querySelector('input[name="title"]');
        const desc = document.querySelector('textarea[name="description"]');

        if (!title.value.trim()) {
            e.preventDefault();
            title.classList.add('is-invalid');
        }
        if (!desc.value.trim()) {
            e.preventDefault();
            desc.classList.add('is-invalid');
        }
    });

    document.querySelector('input[name="title"]')?.addEventListener('input', function() {
        this.classList.remove('is-invalid');
    });
    document.querySelector('textarea[name="description"]')?.addEventListener('input', function() {
        this.classList.remove('is-invalid');
    });

    // Year
    document.querySelector('input[name="year"]')?.addEventListener('input', function() {
        let year = parseInt(this.value);
        let currentYear = new Date().getFullYear();
        if (year < 2000) this.value = 2000;
        if (year > currentYear + 5) this.value = currentYear + 5;
    });
</script>

</body>
</html>
