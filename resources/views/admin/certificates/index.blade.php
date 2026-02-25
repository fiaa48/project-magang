<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Sertifikat — Admin</title>

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
            max-width: 1200px;
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
            justify-content: space-between;
            align-items: center;
        }

        .header-title {
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

        .certificate-count {
            background: rgba(255, 255, 255, 0.15);
            padding: 8px 16px;
            border-radius: 40px;
            color: white;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .certificate-count i {
            color: #ffefd8;
        }

        /* ===== STATS CARD ===== */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 32px;
        }

        .stat-item {
            background: white;
            border-radius: 16px;
            padding: 1.25rem;
            border: 1px solid #eae1d9;
            display: flex;
            align-items: center;
            gap: 16px;
            transition: all 0.2s;
        }

        .stat-item:hover {
            border-color: #b08968;
            background: #fffdfb;
        }

        .stat-icon {
            width: 52px;
            height: 52px;
            background: #f5efea;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #8b6b4d;
            font-size: 1.4rem;
        }

        .stat-number {
            font-size: 1.6rem;
            font-weight: 600;
            line-height: 1;
            margin-bottom: 4px;
            color: #2c2a27;
        }

        .stat-label {
            font-size: 0.8rem;
            color: #7a6a60;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* ===== ALERT ===== */
        .alert-custom {
            background: #f3efe9;
            border-radius: 16px;
            padding: 1rem 1.5rem;
            color: #3e3a37;
            display: flex;
            align-items: center;
            margin-bottom: 32px;
            border: 1px solid #e0d6ce;
        }

        .alert-custom i {
            color: #8b6b4d;
        }

        /* ===== ACTION BAR ===== */
        .action-bar {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .btn-create {
            background: #8b6b4d;
            color: white;
            border: none;
            padding: 0.65rem 1.5rem;
            border-radius: 40px;
            font-weight: 500;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
        }

        .btn-create:hover {
            background: #6b4f3a;
            color: white;
        }

        .btn-create i {
            font-size: 0.85rem;
        }

        /* ===== TABLE CARD ===== */
        .table-wrapper {
            background: white;
            border-radius: 20px;
            border: 1px solid #eae1d9;
            overflow: hidden;
            margin-bottom: 24px;
        }

        .table {
            margin-bottom: 0;
            background: white;
        }

        .table thead th {
            background: #f8f4f0;
            color: #5e534b;
            font-weight: 600;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            padding: 1rem 1.25rem;
            border-bottom: 1px solid #e0d6ce;
            border-top: none;
        }

        .table td {
            padding: 1.1rem 1.25rem;
            vertical-align: middle;
            color: #3e3a37;
            font-size: 0.9rem;
            border-bottom: 1px solid #f0eae4;
            background: white;
        }

        .table tbody tr:last-child td {
            border-bottom: none;
        }

        .table tbody tr:hover td {
            background: #fcfaf8;
        }

        /* ===== BADGE ===== */
        .badge-type {
            padding: 0.4rem 1rem;
            font-weight: 500;
            font-size: 0.75rem;
            border-radius: 100px;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            border: 1px solid transparent;
            background: #f5efea;
            color: #6b4f3a;
            border-color: #e0d6ce;
        }

        .badge-type i {
            color: #8b6b4d;
        }

        .badge-year {
            background: white;
            padding: 0.35rem 0.8rem;
            border-radius: 30px;
            font-size: 0.75rem;
            border: 1px solid #e0d6ce;
            color: #5e4e44;
        }

        /* ===== ACTION BUTTONS ===== */
        .action-group {
            display: flex;
            gap: 6px;
            justify-content: flex-end;
        }

        .btn-action {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #e0d6ce;
            background: white;
            color: #6a5c53;
            transition: all 0.15s;
            padding: 0;
        }

        .btn-action:hover {
            background: #f5efea;
            border-color: #b08968;
            color: #6b4f3a;
        }

        .btn-delete:hover {
            background: #ffeceb;
            border-color: #d18a8a;
            color: #b33a3a;
        }

        .btn-action i {
            font-size: 0.85rem;
        }

        /* ===== EMPTY STATE ===== */
        .empty-state {
            padding: 3.5rem 1.5rem;
            text-align: center;
            background: white;
        }

        .empty-icon {
            width: 70px;
            height: 70px;
            background: #f5efea;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.25rem;
            color: #8b6b4d;
            font-size: 1.8rem;
        }

        .empty-state h4 {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #2c2a27;
        }

        .empty-state p {
            color: #7a6a60;
            margin-bottom: 1.5rem;
        }

        /* ===== TABLE FOOTER ===== */
        .table-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.25rem;
            background: white;
            border-top: 1px solid #eae1d9;
            font-size: 0.8rem;
            color: #6a5c53;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .container { padding: 0 20px; }

            .header-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .action-bar {
                justify-content: center;
            }

            .btn-create {
                width: 100%;
                justify-content: center;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .table-footer {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .action-group {
                justify-content: flex-start;
            }

            .table td {
                padding: 1rem 0.75rem;
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

        /* ===== FOOTER NOTE ===== */
        .footer-note {
            color: #9c8e85;
            font-size: 0.75rem;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 6px;
        }
    </style>
</head>
<body>

<!-- HEADER - COKLAT SOLID -->
<div class="page-header">
    <div class="container">
        <div class="header-content">
            <div class="header-title">
                <div class="header-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <div class="header-text">
                    <h1>Manajemen Sertifikat</h1>
                    <p>Kelola data sertifikat</p>
                </div>
            </div>
            <div class="certificate-count">
                <i class="fas fa-database"></i>
                <span>{{ $certificates->count() ?? 0 }} total</span>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5 animate-in">

    <!-- STATISTIK -->
    <div class="stats-grid">
        <div class="stat-item">
            <div class="stat-icon">
                <i class="fas fa-certificate"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $certificates->count() ?? 0 }}</div>
                <div class="stat-label">Total</div>
            </div>
        </div>
        <div class="stat-item">
            <div class="stat-icon">
                <i class="fas fa-tag"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $certificates->groupBy('type')->count() ?? 0 }}</div>
                <div class="stat-label">Jenis</div>
            </div>
        </div>
        <div class="stat-item">
            <div class="stat-icon">
                <i class="fas fa-calendar"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $certificates->groupBy('year')->count() ?? 0 }}</div>
                <div class="stat-label">Tahun</div>
            </div>
        </div>
        <div class="stat-item">
            <div class="stat-icon">
                <i class="fas fa-clock"></i>
            </div>
            <div class="stat-content">
                <div class="stat-number">{{ $certificates->where('created_at', '>=', now()->subDays(30))->count() ?? 0 }}</div>
                <div class="stat-label">Bulan ini</div>
            </div>
        </div>
    </div>

    <!-- ALERT -->
    @if(session('success'))
    <div class="alert-custom d-flex align-items-center" role="alert">
        <i class="fas fa-check-circle me-3" style="font-size: 1.2rem;"></i>
        <div style="flex:1;">{{ session('success') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- ACTION BAR - 1 TOMBOL -->
    <div class="action-bar">
        <a href="{{ route('admin.certificates.create') }}" class="btn-create">
            <i class="fas fa-plus"></i>
            Tambah Sertifikat
        </a>
    </div>

    <!-- TABLE -->
    <div class="table-wrapper">
        <div class="table-responsive">
            @if(isset($certificates) && $certificates->count() > 0)
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th style="width: 60px;">No</th>
                        <th>Nama Sertifikat</th>
                        <th>Jenis</th>
                        <th>Tahun</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($certificates as $index => $certificate)
                    <tr>
                        <td>
                            <span style="color: #6a5c53; font-weight: 500;">{{ $index + 1 }}</span>
                        </td>
                        <td class="fw-medium">{{ $certificate->name }}</td>
                        <td>
                            <span class="badge-type">
                                <i class="fas fa-tag"></i>
                                {{ $certificate->type }}
                            </span>
                        </td>
                        <td>
                            <span class="badge-year">
                                <i class="fas fa-calendar-alt me-1" style="color: #8b6b4d; font-size: 0.7rem;"></i>
                                {{ $certificate->year }}
                            </span>
                        </td>
                        <td class="text-end">
                            <div class="action-group">
                                <a href="{{ route('admin.certificates.edit', $certificate->id) }}"
                                   class="btn-action" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.certificates.destroy', $certificate->id) }}"
                                      method="POST"
                                      style="display:inline;"
                                      onsubmit="return confirm('Yakin ingin menghapus sertifikat ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-action btn-delete" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- TABLE FOOTER -->
            <div class="table-footer">
                <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-file" style="color: #b08968;"></i>
                    <span>Total {{ $certificates->count() }} sertifikat</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <i class="fas fa-layer-group" style="color: #b08968;"></i>
                    <span>{{ $certificates->groupBy('type')->count() }} jenis · {{ $certificates->groupBy('year')->count() }} tahun</span>
                </div>
            </div>

            @else
            <!-- EMPTY STATE - TANPA TOMBOL -->
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h4>Belum ada sertifikat</h4>
                <p class="text-muted">Gunakan tombol Tambah Sertifikat di atas</p>
            </div>
            @endif
        </div>
    </div>

    <!-- FOOTER NOTE -->
    @if(isset($certificates) && $certificates->count() > 0)
    <div class="footer-note">
        <i class="fas fa-chevron-left"></i>
        Diperbarui {{ date('d M Y') }}
    </div>
    @endif

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Auto close alert
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var alert = document.querySelector('.alert-custom');
            if (alert) {
                var bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 5000);
    });
</script>

</body>
</html>
