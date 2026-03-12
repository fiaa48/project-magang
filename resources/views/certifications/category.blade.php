<h2>Daftar Sertifikat {{ $type }}</h2>

@foreach($certificates as $cert)
    <p>{{ $cert->name }}</p>
@endforeach
