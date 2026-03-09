@extends('layoutss.admin')

@section('content')

<h3 class="mb-4">Dashboard</h3>

<div class="row">

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h6>Total Users</h6>
            <h2>{{ $totalUsers }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h6>Total Projects</h6>
            <h2>{{ $totalProjects }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow-sm">
            <h6>Total Sertifikat</h6>
            <h2>{{ $totalCertificates }}</h2>
        </div>
    </div>

</div>

@endsection
