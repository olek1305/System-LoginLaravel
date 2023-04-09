@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container text-center bg-primary mx-auto">
        <div class="row">
            <div class="col-md-12 col-lg-12 mb-2 text-center bg-primary">
                <h1 class="font-weight-bold text-warning"> Update-List </h1>
                <div class="accordion" id="accordionExample">
                    <div class="card bg-dark" x-data="{ open: false }">
                        <div class="card-header bg-dark">
                            <h2 class="mb-0">
                                <button class="btn btn-link" @click="open = ! open">
                                    Update 1.02
                                </button>
                            </h2>
                        </div>
                        <div class="card-body bg-success" x-show="open" @click.outside="open = false">
                            Add Home Page
                        </div>
                    </div>

                    <div class="card bg-dark" x-data="{ open: false }">
                        <div class="card-header bg-dark">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" @click="open = ! open">
                                    Update 1.03
                                </button>
                            </h2>
                        </div>
                        <div class="card-body bg-success" x-show="open" @click.outside="open = false">
                            Add /About</br> Add /Book</br> Change HTTP

                        </div>
                    </div>

                    <div class="card bg-dark" x-data="{ open: false }">
                        <div class="card-header">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" @click="open = ! open">
                                    Update 1.04
                                </button>
                            </h2>
                        </div>
                        <div class="card-body bg-success" x-show="open" @click.outside="open = false">
                            Update home page</br>
                            Update book
                        </div>
                    </div>
                    <div class="card bg-dark" x-data="{ open: false }">
                        <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" @click="open = ! open">
                                    Update 1.05
                                </button>
                            </h2>
                        </div>
                        <div class="card-body bg-success" x-show="open" @click.outside="open = false">
                            some update</br>
                            add system login(No Database yet)</br>
                            hard ass to fix div Arcylisz - AboutMe to center</br>
                            UI change for system login</br>
                            Composer: Add Vue.js and Laravel/ui
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection