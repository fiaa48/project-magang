@extends('layoutss.admin')

@section('content')

<div class="container" style="max-width:700px">

<h4 class="mb-4">Edit Profile</h4>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

<div class="card shadow-sm border-0">

<div class="card-body p-4">

<form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">

@csrf

<div class="text-center mb-4">

@if(Auth::user()->photo)

<img src="{{ asset('profile/'.Auth::user()->photo) }}" width="90" style="border-radius:50%">

@else

<img src="https://i.pravatar.cc/90" style="border-radius:50%">

@endif

</div>

<div class="mb-3">

<label>Nama</label>

<input type="text" name="name" class="form-control"
value="{{ Auth::user()->name }}">

</div>

<div class="mb-3">

<label>Email</label>

<input type="email" name="email" class="form-control"
value="{{ Auth::user()->email }}">

</div>

<div class="mb-3">

<label>Foto Profile</label>

<input type="file" name="photo" class="form-control">

</div>

<button class="btn btn-dark">
Simpan Profile
</button>

</form>

</div>

</div>

</div>

@endsection
