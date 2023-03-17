@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container text-center bg-primary mx-auto">
        <div class="row">
            <div class="col-md-6 col-lg-12 mb-2 text-center bg-primary">
                <h1 class="font-weight-bold text-warning"> Update-List </h1>
                <div class="accordion" id="accordionExample">
                    <div class="card bg-dark">
                      <div class="card-header bg-dark" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Update 1.02
                          </button>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body bg-success">
                          Add Home Page
                        </div>
                      </div>
                    </div>
                    
                    <div class="card bg-dark">
                      <div class="card-header bg-dark" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Update 1.03
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body bg-success">
                            Add /About, /Book, Change HTTP
                        </div>
                      </div>
                    </div>
                    
                    <div class="card bg-dark">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Update 1.04
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body bg-success">
                          Update home page
                        </div>
                      </div>
                    </div>
                  </div>
                  

            </div>
        </div>
    </div>
@endsection
