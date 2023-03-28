@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/img/' . $viewData['book']['image']) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['book']['name'] }} (${{ $viewData['book']['author'] }})
                    </h5>
                    <p class="card-text">{{ $viewData['book']['description'] }}</p>
                    <p class="card-text"><small class="text-muted">Add to Cart</small></p>
                </div>
            </div>
        </div>
    </div>

@endsection
