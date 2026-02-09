@extends('layouts.app')

@section('title', 'Sertifikasi ISO - Sertifikasi & Lisensi')
@section('description', 'Sertifikasi Sistem Manajemen ISO PT Mitra Nusa Konsulindo: ISO 9001, ISO 14001, ISO 45001, dan ISO 37001.')

@section('content')
    <!-- Page Header -->
    <section class="page-header bg-gradient-brown text-white py-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-light">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('certifications.index') }}">Sertifikasi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sertifikasi ISO</li>
                        </ol>
                    </nav>
                    
                    <div class="header-content mt-4">
                        <div class="badge-certification mb-3">
                            <span>SISTEM MANAJEMEN ISO</span>
                        </div>
                        <h1 class="display-5 fw-bold mb-4">Sertifikasi Sistem Manajemen ISO</h1>
                        <p class="lead mb-0">Standar internasional untuk sistem manajemen mutu, lingkungan, K3, dan anti-suap</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ISO Overview -->
    <section class="py-6 bg-cream-light">
        <div class="container">
            <div class="row mb-6">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="card-title mb-0">Sistem Manajemen Terintegrasi</h2>
                                <span class="badge bg-brown-light text-brown-dark">Terakreditasi Internasional</span>
                            </div>
                            <p class="text-muted mb-4">PT Mitra Nusa Konsulindo telah menerapkan dan tersertifikasi untuk berbagai standar sistem manajemen ISO</p>
                            
                            <div class="row g-4">
                                <!-- ISO 9001 -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="iso-card text-center h-100">
                                        <div class="iso-icon mb-3">
                                            <div class="icon-wrapper bg-brown-light">
                                                <i class="fas fa-chart-line fa-2x text-brown-dark"></i>
                                            </div>
                                        </div>
                                        <h5 class="iso-title mb-2">ISO 9001:2015</h5>
                                        <p class="iso-description">Sistem Manajemen Mutu</p>
                                        <div class="iso-details">
                                            <p class="small mb-1"><strong>No. Sertifikat:</strong> 01.002.2022.1234</p>
                                            <p class="small mb-1"><strong>Masa Berlaku:</strong> 2022-2025</p>
                                            <p class="small mb-0"><strong>Sertifikasi:</strong> TUV Rheinland</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- ISO 14001 -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="iso-card text-center h-100">
                                        <div class="iso-icon mb-3">
                                            <div class="icon-wrapper bg-cream-dark">
                                                <i class="fas fa-leaf fa-2x text-brown-dark"></i>
                                            </div>
                                        </div>
                                        <h5 class="iso-title mb-2">ISO 14001:2015</h5>
                                        <p class="iso-description">Sistem Manajemen Lingkungan</p>
                                        <div class="iso-details">
                                            <p class="small mb-1"><strong>No. Sertifikat:</strong> 02.003.2022.1235</p>
                                            <p class="small mb-1"><strong>Masa Berlaku:</strong> 2022-2025</p>
                                            <p class="small mb-0"><strong>Sertifikasi:</strong> TUV Rheinland</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- ISO 45001 -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="iso-card text-center h-100">
                                        <div class="iso-icon mb-3">
                                            <div class="icon-wrapper bg-brown-light">
                                                <i class="fas fa-shield-alt fa-2x text-brown-dark"></i>
                                            </div>
                                        </div>
                                        <h5 class="iso-title mb-2">ISO 45001:2018</h5>
                                        <p class="iso-description">Sistem Manajemen K3</p>
                                        <div class="iso-details">
                                            <p class="small mb-1"><strong>No. Sertifikat:</strong> 03.004.2022.1236</p>
                                            <p class="small mb-1"><strong>Masa Berlaku:</strong> 2022-2025</p>
                                            <p class="small mb-0"><strong>Sertifikasi:</strong> TUV Rheinland</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- ISO 37001 -->
                                <div class="col-lg-3 col-md-6">
                                    <div class="iso-card text-center h-100">
                                        <div class="iso-icon mb-3">
                                            <div class="icon-wrapper bg-cream-dark">
                                                <i class="fas fa-handshake fa-2x text-brown-dark"></i>
                                            </div>
                                        </div>
                                        <h5 class="iso-title mb-2">ISO 37001:2016</h5>
                                        <p class="iso-description">Sistem Manajemen Anti-Suap</p>
                                        <div class="iso-details">
                                            <p class="small mb-1"><strong>No. Sertifikat:</strong> 04.005.2022.1237</p>
                                            <p class="small mb-1"><strong>Masa Berlaku:</strong> 2022-2025</p>
                                            <p class="small mb-0"><strong>Sertifikasi:</strong> TUV Rheinland</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- ISO Details -->
            <div class="row mb-6">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Detail Sertifikasi ISO</h3>
                            
                            <div class="accordion" id="isoAccordion">
                                <!-- ISO 9001 -->
                                <div class="accordion-item border-brown-light">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button bg-cream-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                            <i class="fas fa-chart-line me-3 text-brown-dark"></i>
                                            ISO 9001:2015 - Sistem Manajemen Mutu
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#isoAccordion">
                                        <div class="accordion-body bg-cream-lighter">
                                            <p><strong>Ruang Lingkup:</strong> Penyediaan jasa konsultansi konstruksi dan non-konstruksi</p>
                                            <p><strong>Tujuan:</strong> Memastikan konsistensi dalam memberikan layanan yang memenuhi persyaratan klien dan peraturan yang berlaku</p>
                                            <p><strong>Manfaat:</strong></p>
                                            <ul class="list-brown">
                                                <li>Peningkatan kepuasan pelanggan</li>
                                                <li>Proses kerja yang terstandarisasi</li>
                                                <li>Pengurangan kesalahan dan biaya</li>
                                                <li>Peningkatan efisiensi operasional</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- ISO 14001 -->
                                <div class="accordion-item border-brown-light">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed bg-cream-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            <i class="fas fa-leaf me-3 text-brown-dark"></i>
                                            ISO 14001:2015 - Sistem Manajemen Lingkungan
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#isoAccordion">
                                        <div class="accordion-body bg-cream-lighter">
                                            <p><strong>Ruang Lingkup:</strong> Operasional kantor dan kegiatan lapangan konsultansi</p>
                                            <p><strong>Tujuan:</strong> Mengelola dampak lingkungan dari kegiatan perusahaan secara efektif</p>
                                            <p><strong>Manfaat:</strong></p>
                                            <ul class="list-brown">
                                                <li>Pengurangan dampak lingkungan</li>
                                                <li>Kepatuhan terhadap regulasi lingkungan</li>
                                                <li>Penggunaan sumber daya yang efisien</li>
                                                <li>Reputasi perusahaan yang baik</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- ISO 45001 -->
                                <div class="accordion-item border-brown-light">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed bg-cream-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            <i class="fas fa-shield-alt me-3 text-brown-dark"></i>
                                            ISO 45001:2018 - Sistem Manajemen K3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#isoAccordion">
                                        <div class="accordion-body bg-cream-lighter">
                                            <p><strong>Ruang Lingkup:</strong> Tempat kerja dan kegiatan operasional perusahaan</p>
                                            <p><strong>Tujuan:</strong> Menyediakan tempat kerja yang aman dan sehat bagi seluruh karyawan</p>
                                            <p><strong>Manfaat:</strong></p>
                                            <ul class="list-brown">
                                                <li>Pengurangan kecelakaan kerja</li>
                                                <li>Peningkatan produktivitas</li>
                                                <li>Kepatuhan terhadap peraturan K3</li>
                                                <li>Budaya keselamatan yang kuat</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- ISO 37001 -->
                                <div class="accordion-item border-brown-light">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed bg-cream-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            <i class="fas fa-handshake me-3 text-brown-dark"></i>
                                            ISO 37001:2016 - Sistem Manajemen Anti-Suap
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#isoAccordion">
                                        <div class="accordion-body bg-cream-lighter">
                                            <p><strong>Ruang Lingkup:</strong> Seluruh aktivitas bisnis perusahaan</p>
                                            <p><strong>Tujuan:</strong> Mencegah, mendeteksi, dan merespon perilaku suap</p>
                                            <p><strong>Manfaat:</strong></p>
                                            <ul class="list-brown">
                                                <li>Reputasi bisnis yang baik</li>
                                                <li>Pengurangan risiko hukum</li>
                                                <li>Transparansi dalam bisnis</li>
                                                <li>Keunggulan kompetitif</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-5">
                            <h5 class="card-title mb-4">Dokumen Sertifikasi</h5>
                            
                            <div class="document-list">
                                <!-- Dokumen 1 -->
                                <div class="document-item mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="document-icon me-3">
                                            <i class="fas fa-file-pdf fa-2x text-brown-dark"></i>
                                        </div>
                                        <div class="document-info flex-grow-1">
                                            <h6 class="mb-1">ISO 9001:2015 Certificate</h6>
                                            <p class="text-muted small mb-0">Sertifikat Sistem Manajemen Mutu</p>
                                        </div>
                                        <div class="document-actions">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-brown-light dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ asset('documents/iso9001-certificate.pdf') }}" download>
                                                            <i class="fas fa-download me-2"></i> Download PDF
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" onclick="printCertificate('iso9001')">
                                                            <i class="fas fa-print me-2"></i> Cetak
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="mailto:?subject=Sertifikat ISO 9001&body=Berikut sertifikat ISO 9001:2015 kami:%0D%0A{{ url('/documents/iso9001-certificate.pdf') }}">
                                                            <i class="fas fa-envelope me-2"></i> Kirim Email
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="https://wa.me/?text=Sertifikat ISO 9001:2015 - PT Mitra Nusa Konsulindo%0A{{ url('/documents/iso9001-certificate.pdf') }}" target="_blank">
                                                            <i class="fab fa-whatsapp me-2"></i> Kirim WA
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Dokumen 2 -->
                                <div class="document-item mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="document-icon me-3">
                                            <i class="fas fa-file-pdf fa-2x text-brown-dark"></i>
                                        </div>
                                        <div class="document-info flex-grow-1">
                                            <h6 class="mb-1">Integrated ISO Certificate</h6>
                                            <p class="text-muted small mb-0">Sertifikat Terintegrasi ISO</p>
                                        </div>
                                        <div class="document-actions">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-brown-light dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ asset('documents/integrated-iso-certificate.pdf') }}" download>
                                                            <i class="fas fa-download me-2"></i> Download PDF
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" onclick="printCertificate('integrated')">
                                                            <i class="fas fa-print me-2"></i> Cetak
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="mailto:?subject=Sertifikat ISO Terintegrasi&body=Berikut sertifikat ISO terintegrasi kami:%0D%0A{{ url('/documents/integrated-iso-certificate.pdf') }}">
                                                            <i class="fas fa-envelope me-2"></i> Kirim Email
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="https://wa.me/?text=Sertifikat ISO Terintegrasi - PT Mitra Nusa Konsulindo%0A{{ url('/documents/integrated-iso-certificate.pdf') }}" target="_blank">
                                                            <i class="fab fa-whatsapp me-2"></i> Kirim WA
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Dokumen 3 -->
                                <div class="document-item mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="document-icon me-3">
                                            <i class="fas fa-file-alt fa-2x text-brown-dark"></i>
                                        </div>
                                        <div class="document-info flex-grow-1">
                                            <h6 class="mb-1">ISO Audit Report 2024</h6>
                                            <p class="text-muted small mb-0">Laporan Audit Tahunan 2024</p>
                                        </div>
                                        <div class="document-actions">
                                            <div class="btn-group" role="group">
                                                <button type="button" class="btn btn-sm btn-brown-light dropdown-toggle" data-bs-toggle="dropdown">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ asset('documents/iso-audit-report-2024.pdf') }}" download>
                                                            <i class="fas fa-download me-2"></i> Download PDF
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" onclick="printCertificate('audit')">
                                                            <i class="fas fa-print me-2"></i> Cetak
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="mailto:?subject=Laporan Audit ISO 2024&body=Berikut laporan audit ISO tahun 2024:%0D%0A{{ url('/documents/iso-audit-report-2024.pdf') }}">
                                                            <i class="fas fa-envelope me-2"></i> Kirim Email
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="https://wa.me/?text=Laporan Audit ISO 2024 - PT Mitra Nusa Konsulindo%0A{{ url('/documents/iso-audit-report-2024.pdf') }}" target="_blank">
                                                            <i class="fab fa-wasapp me-2"></i> Kirim WA
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Quick Actions -->
                            <div class="quick-actions mt-4">
                                <h6 class="mb-3">Aksi Cepat</h6>
                                <div class="row g-2">
                                    <div class="col-6">
                                        <button class="btn btn-brown btn-sm w-100" onclick="downloadAllCertificates()">
                                            <i class="fas fa-download me-1"></i> Download Semua
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-cream-dark btn-sm w-100" onclick="shareAllCertificates()">
                                            <i class="fas fa-share-alt me-1"></i> Bagikan Semua
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="alert alert-brown-light mt-4">
                                <i class="fas fa-sync-alt me-2"></i>
                                <strong>Audit Berkala:</strong> Sertifikasi ISO dilakukan audit surveilance setiap tahun dan audit re-sertifikasi setiap 3 tahun.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Certification Body -->
            <div class="row">
                <div class="col-12">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5">
                            <h3 class="card-title mb-4">Lembaga Sertifikasi</h3>
                            
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-4 mb-md-0">
                                    <div class="cert-body-logo p-4 bg-cream-lighter rounded">
                                        <img src="{{ asset('images/certificates/tuv-rheinland-logo.png') }}" 
                                             alt="TUV Rheinland" 
                                             class="img-fluid"
                                             style="max-height: 80px;">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <h4 class="text-brown-dark">TUV Rheinland Indonesia</h4>
                                    <p class="text-muted">Lembaga sertifikasi internasional yang terakreditasi</p>
                                    
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <p class="mb-2">
                                                <i class="fas fa-map-marker-alt text-brown-dark me-2"></i>
                                                <strong>Alamat:</strong> MidPlaza 2, Jl. Jend. Sudirman, Jakarta
                                            </p>
                                            <p class="mb-2">
                                                <i class="fas fa-phone text-brown-dark me-2"></i>
                                                <strong>Telepon:</strong> (021) 570-1505
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-2">
                                                <i class="fas fa-globe text-brown-dark me-2"></i>
                                                <strong>Website:</strong> www.tuv.com/id-id
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-envelope text-brown-dark me-2"></i>
                                                <strong>Email:</strong> info@tuv.com
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    function printCertificate(certType) {
        let url = '';
        switch(certType) {
            case 'iso9001':
                url = '{{ asset('documents/iso9001-certificate.pdf') }}';
                break;
            case 'integrated':
                url = '{{ asset('documents/integrated-iso-certificate.pdf') }}';
                break;
            case 'audit':
                url = '{{ asset('documents/iso-audit-report-2024.pdf') }}';
                break;
        }
        
        // Membuka PDF di tab baru untuk dicetak
        window.open(url, '_blank').print();
    }
    
    function downloadAllCertificates() {
        // Array semua sertifikat
        const certificates = [
            '{{ asset('documents/iso9001-certificate.pdf') }}',
            '{{ asset('documents/integrated-iso-certificate.pdf') }}',
            '{{ asset('documents/iso-audit-report-2024.pdf') }}'
        ];
        
        // Membuat zip atau men-download satu per satu
        certificates.forEach((cert, index) => {
            setTimeout(() => {
                const link = document.createElement('a');
                link.href = cert;
                link.download = cert.split('/').pop();
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }, index * 1000); // Delay 1 detik antara setiap download
        });
    }
    
    function shareAllCertificates() {
        const message = `Sertifikat ISO PT Mitra Nusa Konsulindo:
        
1. ISO 9001:2015 - Sistem Manajemen Mutu
2. ISO 14001:2015 - Sistem Manajemen Lingkungan  
3. ISO 45001:2018 - Sistem Manajemen K3
4. ISO 37001:2016 - Sistem Manajemen Anti-Suap

Untuk detail lengkap, kunjungi: ${window.location.href}`;
        
        // Untuk WhatsApp
        const whatsappUrl = `https://wa.me/?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    }
    
    // Toast notification
    function showToast(message, type = 'info') {
        // Implementasi toast notification sesuai framework yang digunakan
        console.log(`${type}: ${message}`);
    }
</script>
@endpush

@push('styles')
<style>
    /* Warna Theme Coklat dan Cream */
    :root {
        --brown-dark: #5D4037;
        --brown: #795548;
        --brown-light: #D7CCC8;
        --cream-dark: #F5E8D0;
        --cream: #F9F3E9;
        --cream-light: #FDF8F0;
        --cream-lighter: #FFFCF8;
    }
    
    .bg-gradient-brown {
        background: linear-gradient(135deg, var(--brown-dark) 0%, var(--brown) 50%, #8D6E63 100%);
    }
    
    .bg-cream-light {
        background-color: var(--cream-light);
    }
    
    .bg-cream-lighter {
        background-color: var(--cream-lighter);
    }
    
    .bg-brown-light {
        background-color: var(--brown-light);
    }
    
    .text-brown-dark {
        color: var(--brown-dark);
    }
    
    .border-brown-light {
        border-color: var(--brown-light) !important;
    }
    
    .btn-brown {
        background-color: var(--brown);
        border-color: var(--brown);
        color: white;
    }
    
    .btn-brown:hover {
        background-color: var(--brown-dark);
        border-color: var(--brown-dark);
        color: white;
    }
    
    .btn-brown-light {
        background-color: var(--brown-light);
        border-color: var(--brown-light);
        color: var(--brown-dark);
    }
    
    .btn-cream-dark {
        background-color: var(--cream-dark);
        border-color: var(--cream-dark);
        color: var(--brown-dark);
    }
    
    .badge.bg-brown-light {
        background-color: var(--brown-light);
        color: var(--brown-dark);
        font-weight: 600;
        padding: 0.5rem 1rem;
    }
    
    /* Breadcrumb */
    .breadcrumb-light .breadcrumb-item a {
        color: rgba(255, 255, 255, 0.9);
    }
    
    .breadcrumb-light .breadcrumb-item.active {
        color: var(--cream-dark);
    }
    
    /* Header Badge */
    .badge-certification {
        display: inline-block;
        background: rgba(245, 232, 208, 0.2);
        color: var(--cream-dark);
        padding: 0.5rem 1.5rem;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        border: 1px solid rgba(245, 232, 208, 0.4);
        backdrop-filter: blur(5px);
    }
    
    /* ISO Cards */
    .iso-card {
        padding: 2rem 1.5rem;
        background: white;
        border-radius: 12px;
        border: 2px solid var(--cream-dark);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }
    
    .iso-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--brown), var(--brown-light));
    }
    
    .iso-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 30px rgba(93, 64, 55, 0.1);
        border-color: var(--brown-light);
    }
    
    .icon-wrapper {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        transition: all 0.3s ease;
    }
    
    .iso-card:hover .icon-wrapper {
        transform: scale(1.1);
        background: linear-gradient(135deg, var(--brown-light), var(--cream-dark));
    }
    
    .iso-title {
        color: var(--brown-dark);
        font-weight: 700;
        font-size: 1.1rem;
    }
    
    .iso-description {
        color: var(--brown);
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
        font-weight: 500;
    }
    
    .iso-details {
        background: var(--cream-light);
        padding: 1rem;
        border-radius: 8px;
        border-left: 3px solid var(--brown);
    }
    
    /* Accordion */
    .accordion-button {
        font-weight: 600;
        background: var(--cream);
        color: var(--brown-dark);
        border: 1px solid var(--cream-dark);
    }
    
    .accordion-button:not(.collapsed) {
        background: var(--cream-dark);
        color: var(--brown-dark);
        box-shadow: none;
    }
    
    .accordion-button:focus {
        box-shadow: 0 0 0 0.25rem rgba(93, 64, 55, 0.25);
        border-color: var(--brown-light);
    }
    
    .list-brown li {
        color: var(--brown);
        padding-left: 1rem;
        position: relative;
    }
    
    .list-brown li::before {
        content: '✓';
        color: var(--brown);
        position: absolute;
        left: 0;
        font-weight: bold;
    }
    
    /* Document Items */
    .document-item {
        padding: 1.25rem;
        background: var(--cream-lighter);
        border-radius: 10px;
        border: 1px solid var(--cream-dark);
        border-left: 4px solid var(--brown);
        transition: all 0.3s ease;
    }
    
    .document-item:hover {
        background: white;
        border-color: var(--brown-light);
        transform: translateX(5px);
    }
    
    .document-icon {
        transition: transform 0.3s ease;
    }
    
    .document-item:hover .document-icon {
        transform: scale(1.1);
    }
    
    /* Alert */
    .alert-brown-light {
        background-color: var(--cream-dark);
        border-color: var(--brown-light);
        color: var(--brown-dark);
    }
    
    /* Certification Body */
    .cert-body-logo {
        border: 2px solid var(--cream-dark);
        background: white;
    }
    
    /* Dropdown Menu */
    .dropdown-menu {
        border: 1px solid var(--cream-dark);
        box-shadow: 0 5px 15px rgba(93, 64, 55, 0.1);
    }
    
    .dropdown-item {
        color: var(--brown-dark);
        padding: 0.5rem 1rem;
    }
    
    .dropdown-item:hover {
        background-color: var(--cream-light);
        color: var(--brown-dark);
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .header-content h1 {
            font-size: 2rem;
        }
        
        .card-body {
            padding: 2rem !important;
        }
        
        .iso-card {
            margin-bottom: 1.5rem;
        }
        
        .document-actions .btn-group {
            margin-left: auto;
        }
        
        .quick-actions .btn {
            font-size: 0.8rem;
        }
    }
    
    @media (max-width: 576px) {
        .page-header {
            padding: 4rem 0;
        }
        
        .badge-certification {
            font-size: 0.8rem;
            padding: 0.4rem 1rem;
        }
        
        .document-item {
            padding: 1rem;
        }
    }
</style>
@endpush