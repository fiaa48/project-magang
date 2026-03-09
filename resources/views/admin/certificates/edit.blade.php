<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Sertifikat — Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
body{
font-family:Inter,sans-serif;
background:#faf6f2;
color:#3e3a37;
}

.page-header{
background:#8b6b4d;
padding:20px;
color:white;
}

.form-card{
background:white;
padding:30px;
border-radius:20px;
margin-top:30px;
}

.form-control{
border-radius:10px;
}

.btn-primary{
background:#8b6b4d;
border:none;
}

.btn-primary:hover{
background:#6b4f3a;
}
</style>
</head>

<body>

<div class="page-header">
<h4>Edit Sertifikat</h4>
</div>

<div class="container">

<div class="form-card">

<form action="{{ route('admin.certificates.update',$certificate->id) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

<!-- INFO -->
<div class="mb-4">
<b>ID :</b> {{ $certificate->id }}
</div>

<!-- NAMA -->
<div class="mb-3">
<label>Nama Sertifikat</label>
<input type="text"
name="name"
value="{{ $certificate->name }}"
class="form-control"
required>
</div>

<!-- TYPE -->
<div class="mb-3">
<label>Jenis Sertifikat</label>
<input type="text"
name="type"
value="{{ $certificate->type }}"
class="form-control"
required>
</div>

<!-- YEAR -->
<div class="mb-3">
<label>Tahun</label>
<input type="number"
name="year"
value="{{ $certificate->year }}"
class="form-control"
required>
</div>

<!-- GAMBAR -->
<div class="mb-4">
<label>Gambar Sertifikat</label>

<input type="file" name="image" class="form-control">

@if($certificate->image)
<div style="margin-top:15px">
<p style="font-size:13px">Gambar saat ini :</p>

<img src="{{ asset('storage/'.$certificate->image) }}"
width="200"
style="border-radius:10px">
</div>
@endif

</div>

<!-- BUTTON -->
<div class="d-flex gap-2">

<a href="{{ route('admin.certificates') }}" class="btn btn-secondary">
Kembali
</a>

<button type="submit" class="btn btn-primary">
Update Sertifikat
</button>

</div>

</form>

</div>

</div>

</body>
</html>
