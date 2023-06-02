@extends('layouts.layout')

@section('content')
    @can('pasport generate')
        <div class="container">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title text-primary">Welcome to Legay Stay</h3>
                                <p class="card-text text-secondary">Please fill in the required information below.</p>
                                <form method="POST" action="{{ route('generatePassport') }}" class="requires-validation">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Select a Character</label>
                                        <select name="name" class="form-select" required>
                                            <option selected disabled value="">Select a Character</option>
                                            @foreach( $characters as $character)
                                                <option value='{{$character->name}} Born {{$character->birth_year}} From {{$character->planet->name}} By {{$character->kind->name}}'>
                                                    {{$character->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Items that have not passed border control</label>
                                        <input class="form-control" type="text" name="text" placeholder="Enter items that have not passed border control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="time" class="form-label">Select Time of Stay</label>
                                        <select name="time" class="form-select" required>
                                            <option selected disabled value="">Select Time of Stay</option>
                                            <option value="1">24 hours</option>
                                            <option value="2">48 hours</option>
                                            <option value="999999">Unlimited</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="planet" class="form-label">Select a Planet</label>
                                        <select class="form-select" required name="planet">
                                            <option selected disabled value="">Select a Planet</option>
                                            @foreach( $planets as $planet)
                                                <option value="{{$planet->name}}">{{$planet->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Select Type of Visit:</label>
                                        <div class="form-check">
                                            <input value="Tourist" type="radio" class="form-check-input" name="type" id="male" autocomplete="off" required>
                                            <label class="form-check-label" for="male">Tourist</label>
                                        </div>
                                        <div class="form-check">
                                            <input value="Work" type="radio" class="form-check-input" name="type" id="female" autocomplete="off" required>
                                            <label class="form-check-label" for="female">Work</label>
                                        </div>
                                        <div class="form-check">
                                            <input value="Politic" type="radio" class="form-check-input" name="type" id="secret" autocomplete="off" required>
                                            <label class="form-check-label" for="secret">Political</label>
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                        <label class="form-check-label" for="invalidCheck">I confirm that all the provided data are correct</label>
                                    </div>
                                    <div class="text-center">
                                        <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger mt-3">
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
            <a href="{{route('myAccount')}}" class="card-header text-center font-weight-bold text-danger">
                <h2>Your Access Level is Too Low</h2>
            </a>
        </div>
    @endcannot
@endsection