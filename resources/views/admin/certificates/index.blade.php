@extends('layoutss.admin')

@section('content')

<div class="container-fluid">

<div class="d-flex justify-content-between align-items-center mb-4">

<h4 class="fw-semibold">
<i class="fas fa-certificate me-2"></i>
Manajemen Sertifikat
</h4>

<a href="{{ route('admin.certificates.create') }}" class="btn btn-dark">
<i class="fas fa-plus me-1"></i>
Tambah Sertifikat
</a>

</div>


@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif


<div class="card shadow-sm border-0">

<div class="card-body">

<!-- SEARCH -->
<form method="GET" action="{{ route('admin.certificates') }}" class="mb-3">
<div class="input-group">

<input type="text"
name="search"
class="form-control"
placeholder="Cari nama sertifikat..."
value="{{ request('search') }}">

<button class="btn btn-outline-secondary">
<i class="fas fa-search"></i>
</button>

</div>
</form>

<div class="table-responsive">

@if($certificates->count() > 0)

<table class="table table-hover align-middle mb-0">

<thead class="table-light">
<tr>
<th width="60">No</th>
<th>Preview</th>
<th>Nama Sertifikat</th>
<th>Jenis</th>
<th>Tahun</th>
<th class="text-end">Aksi</th>
</tr>
</thead>

<tbody>

@foreach($certificates as $index => $certificate)

<tr>

<td>{{ $index+1 }}</td>

<td>
<img src="{{ asset($certificate->image) }}"
width="70"
class="rounded">
</td>

<td class="fw-medium">
{{ $certificate->name }}
</td>

<td>
<span class="badge bg-secondary">
{{ $certificate->type }}
</span>
</td>

<td>
{{ $certificate->year }}
</td>

<td class="text-end">

<a href="{{ route('admin.certificates.edit',$certificate->id) }}"
class="btn btn-sm btn-warning">
<i class="fas fa-edit"></i>
</a>

<form action="{{ route('admin.certificates.destroy',$certificate->id) }}"
method="POST"
class="d-inline"
onsubmit="return confirm('Yakin ingin menghapus sertifikat ini?')">

@csrf
@method('DELETE')

<button class="btn btn-sm btn-danger">
<i class="fas fa-trash"></i>
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@else

<div class="text-center p-5">

<i class="fas fa-certificate fa-3x text-muted mb-3"></i>

<h5>Belum ada sertifikat</h5>

<p class="text-muted">
Silakan tambah sertifikat terlebih dahulu
</p>

</div>

@endif

</div>

</div>

</div>

</div>

@endsection