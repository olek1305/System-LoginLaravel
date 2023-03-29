@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-3 bg-primary text-white h3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/storage/books/' . $viewData['book']->getImage()) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        <span class="h2 text-warning"> Title: </span>{{ $viewData["book"]->getTitle() }}
                    </h5>
                    <h5 class="card-title">
                        <span class="h2 text-warning">Author: </span>{{ $viewData["book"]->getAuthor()}}
                    </h5>
                    <h5 class="card-title">
                        <span class="h2 text-warning">Link: </span>{{ $viewData["book"]->getLink()}}
                    </h5>
                    <p class="card-text">
                        <span class="h2 text-warning"> Description: </span>{{ $viewData["book"]->getDescription() }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection