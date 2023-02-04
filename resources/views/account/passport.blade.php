@extends('layouts.layout')
@section('content')
    @can('pasport generate')
        <div class="container" style="color: white">
            <div class="form-body">
                <div class="row">
                    <div class="form-holder">
                        <div class="form-content">
                            <div class="form-items">
                                <h3>Legay stay</h3>
                                <p>Fill in the data below.</p>
                                <form method="POST" action="{{ route('generatePassport') }}"
                                      class="requires-validation">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <select name="name" class="form-select mt-3" required>
                                                <option selected disabled value="">Character</option>
                                                @foreach( $characters as $character)
                                                    <option
                                                            value='{{$character->name}} Born {{$character->birth_year}} From {{$character->planet->name}} By {{$character->kind->name}}'>{{$character->name}}
                                                        <button> Birth:{{$character->birth_year}}</button>
                                                    </option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="text"
                                                       placeholder="enter things that have not passed border control">
                                                <div class="valid-feedback"></div>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <select name="time" class="form-select mt-3" required>
                                                <option selected disabled value="">Time of stay</option>
                                                <option value="1">24h</option>
                                                <option value="2">48h</option>
                                                <option value="999999">Unlimited</option>
                                            </select>
                                            <div class="valid-feedback">You selected a time of legal stay</div>
                                        </div>
                                        <div class="col-md-12">
                                            <select class="form-select mt-3" required name="planet">
                                                <option selected disabled value="">Planet</option>
                                                @foreach( $planets as $planet)
                                                    <option value="{{$planet->name}}">{{$planet->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">Planet for visit</div>
                                        </div>


                                        <div class="col-md-12 mt-3">
                                            <label class="mb-3 mr-1" for="type">Type of visit: </label>

                                            <input value="Tourist" type="radio" class="btn-check" name="type" id="male"
                                                   autocomplete="off"
                                                   required>
                                            <label class="btn btn-sm btn-outline-secondary" for="male">Tourist</label>

                                            <input value="Work" type="radio" class="btn-check" name="type" id="female"
                                                   autocomplete="off"
                                                   required>
                                            <label class="btn btn-sm btn-outline-secondary" for="female">Work</label>

                                            <input value="Politic" type="radio" class="btn-check" name="type"
                                                   id="secret"
                                                   autocomplete="off"
                                                   required>
                                            <label class="btn btn-sm btn-outline-secondary" for="secret">Politic</label>
                                            <div class="valid-feedback mv-up">You selected a reason of visit</div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                                   required>
                                            <label class="form-check-label">I confirm that all data are correct</label>
                                            <div class="invalid-feedback">You are rosponsible of make that data correct
                                            </div>
                                        </div>
                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    @cannot('pasport generate')
        <div class="card">
            <a a href="{{route('myAccount')}}" class="card-header text-center font-weight-bold">
                <h2>Your range is too low</h2></a>
        </div>

    @endcannot
@endsection
