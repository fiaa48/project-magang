@extends('layoutss.admin')

@section('content')

<h3 class="mb-4">Pesan Kontak</h3>

<div class="card shadow-sm">
<div class="card-body">

<table class="table table-bordered">

<thead>
<tr>
<th>Nama</th>
<th>Email</th>
<th>Telepon</th>
<th>Subject</th>
<th>Pesan</th>
</tr>
</thead>

<tbody>

@foreach($messages as $msg)

<tr>
<td>{{ $msg->name }}</td>
<td>{{ $msg->email }}</td>
<td>{{ $msg->phone }}</td>
<td>{{ $msg->subject }}</td>
<td>{{ $msg->message }}</td>
</tr>

@endforeach

</tbody>

</table>

</div>
</div>

@endsection
