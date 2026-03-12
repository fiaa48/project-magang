@extends('layoutss.admin')

@section('content')

<h3 class="mb-4">Users</h3>

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered">

<thead>
<tr>
<th>ID</th>
<th>Nama</th>
<th>Email</th>
<th>Dibuat</th>
</tr>
</thead>

<tbody>

@foreach($users as $user)

<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->created_at }}</td>
</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@endsection
