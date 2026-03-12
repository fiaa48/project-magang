@extends('layouts.app')

@section('content')

<div class="container py-5">

<div class="text-center mb-5">
<h2 class="fw-bold">Sertifikasi Perusahaan</h2>
<p class="text-muted">Dokumen legalitas dan sertifikasi resmi perusahaan</p>
</div>

<div class="row justify-content-center g-4">

{{-- ISO --}}
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="{{ route('certifications.category','iso') }}" class="text-decoration-none">
<div class="cert-card">
<div class="cert-icon">📄</div>
<h5>ISO</h5>
<p>Sertifikat standar internasional</p>
</div>
</a>
</div>

{{-- NIB --}}
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="{{ route('certifications.category','nib') }}" class="text-decoration-none">
<div class="cert-card">
<div class="cert-icon">🏢</div>
<h5>NIB</h5>
<p>Nomor Induk Berusaha</p>
</div>
</a>
</div>

{{-- NPWP --}}
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="{{ route('certifications.category','npwp') }}" class="text-decoration-none">
<div class="cert-card">
<div class="cert-icon">💳</div>
<h5>NPWP</h5>
<p>Nomor Pokok Wajib Pajak</p>
</div>
</a>
</div>

{{-- SPT --}}
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="{{ route('certifications.category','spt') }}" class="text-decoration-none">
<div class="cert-card">
<div class="cert-icon">🧾</div>
<h5>SPT</h5>
<p>Surat Pemberitahuan Tahunan</p>
</div>
</a>
</div>

{{-- Sertifikat Standar --}}
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="{{ route('certifications.category','sertifikat-standar') }}" class="text-decoration-none">
<div class="cert-card">
<div class="cert-icon">📑</div>
<h5>Sertifikat Standar</h5>
<p>Standar operasional perusahaan</p>
</div>
</a>
</div>

{{-- SBU Non Konstruksi --}}
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="{{ route('certifications.category','sbu-non-konstruksi') }}" class="text-decoration-none">
<div class="cert-card">
<div class="cert-icon">🏗</div>
<h5>SBU Non Konstruksi</h5>
<p>Sertifikat badan usaha non konstruksi</p>
</div>
</a>
</div>

{{-- SBU Konstruksi --}}
<div class="col-lg-3 col-md-4 col-sm-6">
<a href="{{ route('certifications.category','sbu-konstruksi') }}" class="text-decoration-none">
<div class="cert-card">
<div class="cert-icon">🏢</div>
<h5>SBU Konstruksi</h5>
<p>Sertifikat badan usaha konstruksi</p>
</div>
</a>
</div>

</div>

</div>



<style>

.cert-card{
background:white;
border-radius:18px;
padding:40px 25px;
text-align:center;
box-shadow:0 8px 25px rgba(0,0,0,0.07);
transition:all .35s ease;
border:1px solid #f2f2f2;
height:100%;
}

.cert-icon{
font-size:32px;
margin-bottom:15px;
}

.cert-card h5{
font-weight:600;
margin-bottom:8px;
color:#333;
}

.cert-card p{
font-size:14px;
color:#777;
margin:0;
}

.cert-card:hover{
transform:translateY(-8px);
box-shadow:0 15px 35px rgba(0,0,0,0.12);
border-color:#d6c4b8;
}

</style>

@endsection
