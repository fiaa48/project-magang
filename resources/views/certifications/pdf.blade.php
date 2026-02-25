<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $cert['type'] }}</title>
    <style>
        body { font-family: DejaVu Sans; }
        .box { border: 2px solid #000; padding: 30px; }
        h1 { text-align: center; }
    </style>
</head>
<body>
    <div class="box">
        <h1>SERTIFIKAT</h1>
        <p><strong>Jenis:</strong> {{ $cert['type'] }}</p>
        <p><strong>Nomor:</strong> {{ $cert['number'] }}</p>
        <p><strong>Penerbit:</strong> {{ $cert['issuer'] }}</p>
        <p>
            <strong>Berlaku:</strong>
            {{ $cert['valid_from'] }}
            @if($cert['valid_until'])
                - {{ $cert['valid_until'] }}
            @else
                (Tanpa Batas)
            @endif
        </p>
    </div>
</body>
</html>
