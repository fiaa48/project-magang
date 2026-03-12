@extends('layoutss.admin')

@section('content')

<div class="container" style="max-width:880px">

<div class="d-flex align-items-center mb-4 gap-3">

<div style="
width:50px;
height:50px;
background:#8b6b4d;
border-radius:10px;
display:flex;
align-items:center;
justify-content:center;
color:white;
">
<i class="fas fa-plus"></i>
</div>

<div>
<h4 class="mb-0">Tambah Project</h4>
<small class="text-muted">
Isi form berikut untuk menambahkan project baru
</small>
</div>

</div>


<div class="card shadow-sm border-0">

<div class="card-body p-4">

<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">

@csrf


<div class="mb-3">

<label class="form-label fw-semibold">
Judul Project
</label>

<input type="text"
name="title"
class="form-control"
placeholder="Contoh: Renovasi Gedung Utama"
required>

</div>


<div class="mb-3">

<label class="form-label fw-semibold">
Deskripsi
</label>

<textarea
name="description"
class="form-control"
rows="4"
placeholder="Jelaskan detail project..."
required></textarea>

</div>



<div class="row">

<div class="col-md-6">

<div class="mb-3">

<label class="form-label fw-semibold">
Lokasi
</label>

<input type="text"
name="location"
class="form-control"
placeholder="Jakarta Selatan">

</div>

</div>


<div class="col-md-6">

<div class="mb-3">

<label class="form-label fw-semibold">
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



<div class="row">

<div class="col-md-6">

<div class="mb-3">

<label class="form-label fw-semibold">
Status
</label>

<select name="status" class="form-select">

<option value="ongoing">Ongoing - Berjalan</option>

<option value="completed">Completed - Selesai</option>

<option value="pending">Pending - Ditunda</option>

</select>

</div>

</div>


<div class="col-md-6">

<div class="mb-3">

<label class="form-label fw-semibold">
Gambar
</label>

<input type="file"
name="image"
class="form-control"
accept="image/*">

</div>

</div>

</div>



<div class="d-flex justify-content-end gap-2 mt-4">

<a href="{{ route('admin.projects') }}"
class="btn btn-light">

Kembali

</a>

<button type="submit"
class="btn btn-dark">

Simpan

</button>

</div>


</form>

</div>

</div>

</div>

@endsection
