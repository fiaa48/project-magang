@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Portfolio</h1>

    <div class="row">
        @foreach($portfolios as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5>{{ $item['title'] }}</h5>
                        <p>{{ $item['description'] }}</p>
                        <span class="badge bg-secondary">{{ $item['category'] }}</span>
                        <div class="mt-3">
                            <a href="{{ $item['link'] }}" target="_blank" class="btn btn-sm btn-primary">
                                View Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
