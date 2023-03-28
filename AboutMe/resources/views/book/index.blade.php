@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container my-4">
        <div class="row">
            @foreach($viewData["books"] as $book)
                <div class="col-md-6 col-lg-3 mb-2">
                    <div class="card" style="width: 18rem; margin-top: 2em">
                        <img class="card-img-top img-fluid rounded" src="{{ asset('storage\PracticalLaravelMVC.webp') }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$viewData->title}}</h5>
                            <p class="card-text">{{$viewData->author}}
                            </p>
                            <div class="justify-content-center d-flex">
                                <a href="{{$viewData->link}}"
                                    class="btn btn-primary">Link</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection