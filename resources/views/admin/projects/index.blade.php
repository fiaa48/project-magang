@extends('layoutss.admin')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

<h4 class="fw-semibold">
<i class="fas fa-folder me-2"></i>
Manajemen Project
</h4>

<a href="{{ route('admin.projects.create') }}" class="btn btn-dark">
<i class="fas fa-plus me-1"></i>
Tambah Project
</a>

</div>


@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif


<div class="card shadow-sm border-0">

<div class="card-body p-0">

<div class="table-responsive">

@if($projects->count() > 0)

<table class="table table-hover align-middle mb-0">

<thead class="table-light">
<tr>
<th>No</th>
<th>Preview</th>
<th>Judul</th>
<th>Lokasi</th>
<th>Status</th>
<th>Tahun</th>
<th class="text-end">Aksi</th>
</tr>
</thead>

<tbody>

@foreach($projects as $index => $project)

<tr>

<td>{{ $index+1 }}</td>

<td>
@if($project->image)
<img src="{{ asset('storage/'.$project->image) }}"
width="70"
class="rounded">
@endif
</td>

<td class="fw-medium">
{{ $project->title }}
</td>

<td>
{{ $project->location }}
</td>

<td>

@if($project->status == 'completed')
<span class="badge bg-success">Selesai</span>
@elseif($project->status == 'ongoing')
<span class="badge bg-warning">Berjalan</span>
@else
<span class="badge bg-secondary">Pending</span>
@endif

</td>

<td>
{{ $project->year }}
</td>

<td class="text-end">

<a href="{{ route('admin.projects.edit',$project->id) }}"
class="btn btn-sm btn-warning">
<i class="fas fa-edit"></i>
</a>

<form action="{{ route('admin.projects.destroy',$project->id) }}"
method="POST"
class="d-inline"
onsubmit="return confirm('Yakin ingin menghapus project ini?')">

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

<i class="fas fa-folder-open fa-3x text-muted mb-3"></i>

<h5>Belum ada project</h5>

<p class="text-muted">
Silakan tambah project terlebih dahulu
</p>

</div>

@endif

</div>

</div>

</div>

@endsection
