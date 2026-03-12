@extends('layouts.app')

@section('content')

<div class="container py-5">

<div class="text-center mb-5">
<h2 class="fw-bold">Sertifikat ISO Perusahaan</h2>
<p class="text-muted">
Sertifikasi standar internasional yang dimiliki perusahaan
</p>
</div>

<div class="card shadow-sm">

<div class="card-body">

<div class="table-responsive">

<table class="table table-bordered text-center align-middle">

<thead class="table-light">
<tr>
<th>No</th>
<th>Nama Sertifikat</th>
<th>Tahun</th>
</tr>
</thead>

<tbody>

@if($certificates->count())

@foreach($certificates as $cert)

<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $cert->name }}</td>
<td>{{ $cert->year }}</td>
</tr>

@endforeach

@else

<tr>
<td colspan="3">Belum ada sertifikat ISO.</td>
</tr>

@endif

</tbody>

</table>

</div>

</div>

</div>

</div>

@endsection
