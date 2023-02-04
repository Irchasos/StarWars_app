@extends('layouts.layout')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success')
            @endphp
        </div>
    @endif

    <div class="col-md-6 right-grid">
        <div class="right-top">

            <button class="btn btn btn-lg btn-warning"><a href="{{ route('characters') }}">View All characters </a><i
                        class="fa-solid fa-person-chalkboard"></i></button>
            <h1>Here you can create a new hero for your story </h1>

            <form action="{{ route('characters.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control">
                            @if ($errors->has('name'))
                                <span
                                        class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-10 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Kind:</strong>
                            <select class="form-select" name="kind" aria-label="Default select example">
                                @foreach($kinds as $kind)
                                    <option value="{{$kind->id}}">{{$kind->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('kind'))
                                <span class="text-danger">{{ $errors->first('kind') }}</span>
                            @endif
                        </div>
                    </div>


                    <div class="col-xs-10 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Homeworld:</strong>
                            <select class="form-select" name="homeworld" aria-label="Default select example">
                                @foreach($planets as $planet)
                                    <option value="{{$planet->id}}">{{$planet->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('homeworld'))
                                <span class="text-danger">{{ $errors->first('homeworld') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Gender:</strong>
                            <input type="text" name="gender" class="form-control">
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Hair Color:</strong>
                            <input type="text" name="hair_color" class="form-control">
                        </div>
                        @if ($errors->has('hair_color'))
                            <span class="text-danger">{{ $errors->first('hair_color') }}</span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Birth:</strong>
                            <input type="text" name="birth_year" class="form-control">
                        </div>
                        @if ($errors->has('birth_year'))
                            <span class="text-danger">{{ $errors->first('birth_year') }}</span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Eye Color:</strong>
                            <input type="text" name="eye_color" class="form-control">
                        </div>
                        @if ($errors->has('eye_color'))
                            <span class="text-danger">{{ $errors->first('eye_color') }}</span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Skin Color:</strong>
                            <input type="text" name="skin_color" class="form-control">
                        </div>
                        @if ($errors->has('skin_color'))
                            <span class="text-danger">{{ $errors->first('skin_color') }}</span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Height:</strong>
                            <input type="text" name="height" class="form-control">
                        </div>
                        @if ($errors->has('height'))
                            <span class="text-danger">{{ $errors->first('height') }}</span>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Mass:</strong>
                            <input type="text" name="mass" class="form-control">
                            @if ($errors->has('mass'))
                                <span
                                        class="text-danger">{{ $errors->first('mass') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Starship:</strong>
                        <select id='myselect' multiple class="form-select" name="starships[]"
                                aria-label="Default select example">
                            @foreach($starships as $starship)
                                <option value="{{$starship->id}}">{{$starship->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('starships'))
                            <span class="text-danger">{{ $errors->first('starships') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-lg btn-primary"><i class="fa-regular fa-floppy-disk"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
    <script>
        $('#myselect').select2({
            width: '100%',
            placeholder: "Select an Option",
            allowClear: true,
            multiple: true,
        });
    </script>
@endsection
