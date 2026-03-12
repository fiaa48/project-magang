@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">Dokumen NIB</h2>
        <p class="text-muted">
            Nomor Induk Berusaha yang dimiliki perusahaan
        </p>
    </div>

    <div class="card shadow-sm">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-bordered text-center align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Dokumen</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($certificates as $cert)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $cert->name }}</td>
                            <td>{{ $cert->year }}</td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="3">
                                Belum ada dokumen NIB.
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection
