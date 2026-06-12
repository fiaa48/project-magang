@extends('admin.layouts.app')

@section('title', 'Tambah Sertifikasi Perusahaan - Admin')

@push('styles')
<style>
    :root { --brown-dark:#171247; --brown-medium:#241b64; --brown-light:#4b3dad; --white:#fff; --gold:#D4AF37; --gold-light:#F3E5AB; --shadow-md:0 20px 30px -12px rgba(0,0,0,.1),0 8px 12px rgba(0,0,0,.05); }
    body { background:linear-gradient(145deg,#F9F5EF 0%,#FDF9F4 100%); }
    .page-header-premium { margin-bottom:2rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; }
    .page-title-premium { font-size:2rem; font-weight:800; background:linear-gradient(135deg,var(--brown-dark),var(--brown-medium)); -webkit-background-clip:text; background-clip:text; color:transparent; display:inline-flex; align-items:center; gap:.75rem; }
    .page-title-premium i { background:linear-gradient(135deg,var(--gold),#B8860B); -webkit-background-clip:text; background-clip:text; color:transparent; font-size:2.2rem; }
    .card-ultra { background:var(--white); border-radius:2rem; border:none; box-shadow:var(--shadow-md); overflow:hidden; position:relative; }
    .card-ultra::before { content:''; position:absolute; top:0; left:0; right:0; height:6px; background:linear-gradient(90deg,var(--gold),var(--brown-light),var(--gold)); z-index:2; }
    .form-group-premium { margin-bottom:1.5rem; }
    .form-label-premium { font-weight:700; color:var(--brown-dark); margin-bottom:.5rem; display:flex; align-items:center; gap:.5rem; font-size:.9rem; }
    .form-label-premium i { color:var(--gold); width:1.25rem; }
    .input-group-premium { position:relative; }
    .input-group-premium .input-icon { position:absolute; left:1rem; top:50%; transform:translateY(-50%); color:var(--gold); pointer-events:none; z-index:2; }
    .form-control-premium { background:#fff; border:1px solid rgba(36,27,100,.14); border-radius:1rem; padding:.85rem 1.2rem .85rem 2.8rem; font-size:.95rem; color:var(--brown-dark); width:100%; transition:all .25s; }
    .form-control-premium:focus { border-color:var(--gold); outline:none; box-shadow:0 0 0 4px rgba(212,175,55,.18); }
    textarea.form-control-premium { padding-top: .85rem; padding-bottom: .85rem; resize: vertical; min-height: 100px; }
    .btn-premium-ultra { background:linear-gradient(105deg,var(--brown-dark),#241b64); border:none; border-radius:60px; padding:.85rem 2rem; font-weight:700; color:white; display:inline-flex; align-items:center; gap:.6rem; text-decoration:none; transition: all 0.2s; }
    .btn-premium-ultra:hover { color:var(--gold-light); transform: translateY(-2px); box-shadow:0 10px 20px rgba(0,0,0,0.1); }
    .btn-outline-premium { background:transparent; border:1px solid var(--brown-dark); border-radius:60px; padding:.85rem 2rem; font-weight:600; color:var(--brown-dark); display:inline-flex; align-items:center; gap:.5rem; text-decoration:none; transition: all 0.2s; }
    .btn-outline-premium:hover { background:var(--brown-dark); color:white; }
    .alert-premium { background:#FFF2F0; border-left:5px solid #D32F2F; border-radius:1rem; padding:1rem 1.2rem; color:#B71C1C; margin-bottom:1.5rem; }
    .section-title-small { font-size: 1.2rem; font-weight: 700; margin: 1.5rem 0 1rem 0; color: var(--brown-dark); border-left: 4px solid var(--gold); padding-left: 1rem; }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="page-title-premium">
            <i class="fas fa-certificate"></i>
            <span>Tambah Data Sertifikasi</span>
        </div>
    </div>

    <div class="card-ultra">
        <div class="card-body p-4 p-lg-5">
            @if ($errors->any())
                <div class="alert-premium">
                    <strong>Periksa kembali data Anda:</strong>
                    <ul class="mb-0 mt-2 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.certificates.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-briefcase"></i> SIUJK</label>
                            <div class="input-group-premium">
                                <i class="fas fa-briefcase input-icon"></i>
                                <input type="text" name="siujk" value="{{ old('siujk') }}" class="form-control-premium" placeholder="Izin Usaha Jasa Konstruksi">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-store"></i> SIUP</label>
                            <div class="input-group-premium">
                                <i class="fas fa-store input-icon"></i>
                                <input type="text" name="siup" value="{{ old('siup') }}" class="form-control-premium" placeholder="Surat Izin Usaha Perdagangan">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-chart-line"></i> PKP</label>
                            <div class="input-group-premium">
                                <i class="fas fa-chart-line input-icon"></i>
                                <input type="text" name="pkp" value="{{ old('pkp') }}" class="form-control-premium" placeholder="Nomor Pengukuhan PKP">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-file-invoice"></i> SKT Pajak</label>
                            <div class="input-group-premium">
                                <i class="fas fa-file-invoice input-icon"></i>
                                <input type="text" name="skt_pajak" value="{{ old('skt_pajak') }}" class="form-control-premium" placeholder="Nomor SKT / NPWP">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-calendar-check"></i> Bukti SPT Tahunan</label>
                            <div class="input-group-premium">
                                <i class="fas fa-calendar-check input-icon"></i>
                                <input type="text" name="bukti_spt" value="{{ old('bukti_spt') }}" class="form-control-premium" placeholder="Contoh: SPT 1771 Tahun Pajak 2024, nihil">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-hard-hat"></i> SBU Konstruksi</label>
                    <div class="input-group-premium">
                        <i class="fas fa-hard-hat input-icon"></i>
                        <textarea name="sbu_konstruksi" class="form-control-premium" rows="3" placeholder="Contoh: AL001, AL002, AL003, AL004, AR001, AR002, AR003, RK001, RK002, RK003, RK005">{{ old('sbu_konstruksi') }}</textarea>
                    </div>
                    <small class="text-muted">Pisahkan dengan koma atau baris baru</small>
                </div>

                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-chalkboard-user"></i> SBU Non-Konstruksi</label>
                    <div class="input-group-premium">
                        <i class="fas fa-chalkboard-user input-icon"></i>
                        <textarea name="sbu_non_konstruksi" class="form-control-premium" rows="3" placeholder="Pertanian, Transportasi, Telematika, Manajemen, Jasa Khusus, Studi/Penelitian, Survey">{{ old('sbu_non_konstruksi') }}</textarea>
                    </div>
                </div>

                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-certificate"></i> Sertifikat ISO</label>
                    <div class="input-group-premium">
                        <i class="fas fa-certificate input-icon"></i>
                        <textarea name="iso" class="form-control-premium" rows="2" placeholder="Misal: ISO 9001:2015, nomor sertifikat, dan tahun">{{ old('iso') }}</textarea>
                    </div>
                </div>

                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-star-of-life"></i> Sertifikasi Baru (Tambahan)</label>
                    <div class="input-group-premium">
                        <i class="fas fa-star-of-life input-icon"></i>
                        <input type="text" name="sertifikasi_baru" value="{{ old('sertifikasi_baru') }}" class="form-control-premium" placeholder="Informasi sertifikasi terbaru lainnya">
                    </div>
                </div>

                <!-- ======== TIGA KOLOM AKTA YANG DITAMBAHKAN ======== -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-file-alt"></i> Akta Pendirian</label>
                            <div class="input-group-premium">
                                <i class="fas fa-file-alt input-icon"></i>
                                <input type="text" name="akta_pendirian" value="{{ old('akta_pendirian') }}" class="form-control-premium" placeholder="Nomor & tanggal Akta Pendirian">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-file-contract"></i> Akta Perubahan</label>
                            <div class="input-group-premium">
                                <i class="fas fa-file-contract input-icon"></i>
                                <input type="text" name="akta_perubahan" value="{{ old('akta_perubahan') }}" class="form-control-premium" placeholder="Nomor & tanggal Akta Perubahan terakhir">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-check-circle"></i> Pengesahan AHU</label>
                            <div class="input-group-premium">
                                <i class="fas fa-check-circle input-icon"></i>
                                <input type="text" name="pengesahan_ahu" value="{{ old('pengesahan_ahu') }}" class="form-control-premium" placeholder="Nomor & tanggal Pengesahan AHU">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- =========================================== -->

                <div class="d-flex flex-wrap justify-content-between gap-3 mt-4 pt-3">
                    <a href="{{ route('admin.certificates.index') }}" class="btn-outline-premium"><i class="fas fa-arrow-left"></i> Batal</a>
                    <button type="submit" class="btn-premium-ultra"><i class="fas fa-save"></i> Simpan Sertifikasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

{{-- @extends('admin.layouts.app')

@section('title', 'Tambah Sertifikat - Admin')

@push('styles')
<style>
    :root { --brown-dark:#171247; --brown-medium:#241b64; --brown-light:#4b3dad; --white:#fff; --gold:#D4AF37; --gold-light:#F3E5AB; --shadow-md:0 20px 30px -12px rgba(0,0,0,.1),0 8px 12px rgba(0,0,0,.05); }
    body { background:linear-gradient(145deg,#F9F5EF 0%,#FDF9F4 100%); }
    .page-header-premium { margin-bottom:2rem; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem; }
    .page-title-premium { font-size:2rem; font-weight:800; background:linear-gradient(135deg,var(--brown-dark),var(--brown-medium)); -webkit-background-clip:text; background-clip:text; color:transparent; display:inline-flex; align-items:center; gap:.75rem; }
    .page-title-premium i { background:linear-gradient(135deg,var(--gold),#B8860B); -webkit-background-clip:text; background-clip:text; color:transparent; font-size:2.2rem; }
    .card-ultra { background:var(--white); border-radius:2rem; border:none; box-shadow:var(--shadow-md); overflow:hidden; position:relative; }
    .card-ultra::before { content:''; position:absolute; top:0; left:0; right:0; height:6px; background:linear-gradient(90deg,var(--gold),var(--brown-light),var(--gold)); z-index:2; }
    .form-group-premium { margin-bottom:1.5rem; }
    .form-label-premium { font-weight:700; color:var(--brown-dark); margin-bottom:.5rem; display:flex; align-items:center; gap:.5rem; font-size:.9rem; }
    .form-label-premium i { color:var(--gold); width:1.25rem; }
    .input-group-premium { position:relative; }
    .input-group-premium .input-icon { position:absolute; left:1rem; top:50%; transform:translateY(-50%); color:var(--gold); pointer-events:none; z-index:2; }
    .form-control-premium { background:#fff; border:1px solid rgba(36,27,100,.14); border-radius:1rem; padding:.85rem 1.2rem .85rem 2.8rem; font-size:.95rem; color:var(--brown-dark); width:100%; transition:all .25s; }
    .form-control-premium:focus { border-color:var(--gold); outline:none; box-shadow:0 0 0 4px rgba(212,175,55,.18); }
    textarea.form-control-premium { padding-top: .85rem; padding-bottom: .85rem; resize: vertical; min-height: 100px; }
    .btn-premium-ultra { background:linear-gradient(105deg,var(--brown-dark),#241b64); border:none; border-radius:60px; padding:.85rem 2rem; font-weight:700; color:white; display:inline-flex; align-items:center; gap:.6rem; text-decoration:none; transition: all 0.2s; }
    .btn-premium-ultra:hover { color:var(--gold-light); transform: translateY(-2px); box-shadow:0 10px 20px rgba(0,0,0,0.1); }
    .btn-outline-premium { background:transparent; border:1px solid var(--brown-dark); border-radius:60px; padding:.85rem 2rem; font-weight:600; color:var(--brown-dark); display:inline-flex; align-items:center; gap:.5rem; text-decoration:none; transition: all 0.2s; }
    .btn-outline-premium:hover { background:var(--brown-dark); color:white; }
    .alert-premium { background:#FFF2F0; border-left:5px solid #D32F2F; border-radius:1rem; padding:1rem 1.2rem; color:#B71C1C; margin-bottom:1.5rem; }
</style>
@endpush

@section('content')
<div class="container-fluid px-0 px-lg-2 py-3">
    <div class="page-header-premium">
        <div class="page-title-premium">
            <i class="fas fa-plus-circle"></i>
            <span>Tambah Sertifikat Baru</span>
        </div>
    </div>

    <div class="card-ultra">
        <div class="card-body p-4 p-lg-5">
            @if ($errors->any())
                <div class="alert-premium">
                    <strong>Periksa kembali data Anda:</strong>
                    <ul class="mb-0 mt-2 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.certificates.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-tag"></i> Jenis Sertifikat <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-tag input-icon"></i>
                                <input type="text" name="jenis_sertifikat" value="{{ old('jenis_sertifikat') }}" class="form-control-premium" placeholder="Contoh: Sertifikat Standar, SBU Konstruksi, ISO, NIB, NPWP" required>
                            </div>
                            <small class="text-muted">Jenis dokumen / sertifikat</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-hashtag"></i> Nomor Sertifikat <span class="text-danger">*</span></label>
                            <div class="input-group-premium">
                                <i class="fas fa-hashtag input-icon"></i>
                                <input type="text" name="nomor_sertifikat" value="{{ old('nomor_sertifikat') }}" class="form-control-premium" placeholder="Nomor unik sertifikat" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-heading"></i> Nama Sertifikat</label>
                            <div class="input-group-premium">
                                <i class="fas fa-heading input-icon"></i>
                                <input type="text" name="nama_sertifikat" value="{{ old('nama_sertifikat') }}" class="form-control-premium" placeholder="Judul / nama dokumen">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-building"></i> Penerbit</label>
                            <div class="input-group-premium">
                                <i class="fas fa-building input-icon"></i>
                                <input type="text" name="penerbit" value="{{ old('penerbit') }}" class="form-control-premium" placeholder="Instansi penerbit">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-calendar-alt"></i> Tanggal Terbit</label>
                            <div class="input-group-premium">
                                <i class="fas fa-calendar-alt input-icon"></i>
                                <input type="date" name="tanggal_terbit" value="{{ old('tanggal_terbit') }}" class="form-control-premium">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-hourglass-end"></i> Berlaku Sampai</label>
                            <div class="input-group-premium">
                                <i class="fas fa-hourglass-end input-icon"></i>
                                <input type="date" name="tanggal_berlaku_sampai" value="{{ old('tanggal_berlaku_sampai') }}" class="form-control-premium">
                            </div>
                            <small class="text-muted">Kosongkan jika tidak terbatas</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-chart-simple"></i> Kualifikasi</label>
                            <div class="input-group-premium">
                                <i class="fas fa-chart-simple input-icon"></i>
                                <input type="text" name="kualifikasi" value="{{ old('kualifikasi') }}" class="form-control-premium" placeholder="Contoh: Kecil, Menengah Tinggi, dll">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group-premium">
                            <label class="form-label-premium"><i class="fas fa-barcode"></i> Kode KBLI</label>
                            <div class="input-group-premium">
                                <i class="fas fa-barcode input-icon"></i>
                                <input type="text" name="kode_kbli" value="{{ old('kode_kbli') }}" class="form-control-premium" placeholder="Contoh: 71101">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-globe"></i> Lingkup (Scope)</label>
                    <div class="input-group-premium">
                        <i class="fas fa-globe input-icon"></i>
                        <textarea name="scope" class="form-control-premium" rows="3" placeholder="Deskripsi ruang lingkup sertifikat">{{ old('scope') }}</textarea>
                    </div>
                </div>

                <div class="form-group-premium">
                    <label class="form-label-premium"><i class="fas fa-info-circle"></i> Keterangan</label>
                    <div class="input-group-premium">
                        <i class="fas fa-info-circle input-icon"></i>
                        <textarea name="keterangan" class="form-control-premium" rows="2" placeholder="Catatan tambahan (opsional)">{{ old('keterangan') }}</textarea>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between gap-3 mt-4 pt-3">
                    <a href="{{ route('admin.certificates.index') }}" class="btn-outline-premium"><i class="fas fa-arrow-left"></i> Batal</a>
                    <button type="submit" class="btn-premium-ultra"><i class="fas fa-save"></i> Simpan Sertifikat</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection --}}
