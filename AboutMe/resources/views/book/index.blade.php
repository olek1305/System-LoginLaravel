@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-fluid rounded" src="{{ asset('image\books\PracticalLaravelMVC.webp') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Practical Laravel Develop clean MVC web applications</h5>
                        <p class="card-text">Daniel Correa – Paola Vallejo.
                        </p>
                        <div class="justify-content-center d-flex">
                            <a href="https://www.amazon.com/Practical-Laravel-Develop-clean-applications/dp/B09S69MHRB"
                                class="btn btn-primary">Link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-fluid rounded" src="{{ asset('image\books\PracticalLaravelMVC.webp') }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Practical Laravel Develop clean MVC web applications</h5>
                        <p class="card-text">Daniel Correa – Paola Vallejo.
                        </p>
                        <div class="justify-content-center d-flex">
                            <a href="https://www.amazon.com/Practical-Laravel-Develop-clean-applications/dp/B09S69MHRB"
                                class="btn btn-primary">Link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
