@extends('layouts.app')

@section('title', 'Jasa Rekayasa Teknik')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Jasa Rekayasa Teknik</h1>

    @php
        $services = [
            [
                'code' => 'RK001',
                'title' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
                'description' => 'Jasa desain rekayasa struktur untuk kerangka load-bearing bangunan perumahan, komersial, institusi, dan industri, termasuk estimasi biaya, rencana akhir, dan layanan fase konstruksi.'
            ],
            [
                'code' => 'RK002',
                'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
                'description' => 'Jasa desain rekayasa untuk pekerjaan sipil keairan seperti dam, sistem irigasi, pengendalian banjir, pelabuhan, penyaluran air, sanitasi, dan sistem air limbah industri.'
            ],
            [
                'code' => 'RK003',
                'title' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
                'description' => 'Jasa desain rekayasa untuk pekerjaan sipil transportasi seperti jembatan, jalan layang, jalan raya, termasuk structural health monitoring system untuk jembatan.'
            ],
            [
                'code' => 'RK005',
                'title' => 'Jasa Rekayasa Lainnya',
                'description' => 'Jasa rekayasa teknik lainnya yang tidak termasuk dalam kategori sebelumnya, mencakup berbagai disiplin teknik sipil dan struktur.'
            ],
        ];
    @endphp

    @foreach($services as $service)
        <div class="card mb-4">
            <div class="card-body">
                <h5>{{ $service['code'] }} - {{ $service['title'] }}</h5>
                <p>{{ $service['description'] }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
