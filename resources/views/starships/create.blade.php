@extends('layouts.layout')
@section('content')

<div class="container-fluid" style="padding-top: 20px">
    <div class="left-top col-md-6">
        @if (isset($starship->photos) && count($starship->photos) > 0)
        @foreach($starship->photos as $photo)
        <img src="{{ $photo->path }}" alt="" style="width: 600px; height: 800px; padding-bottom: 30px" />
        @endforeach
        @else
        <img src="{{ asset('images/placeholders/starship.jpg') }}" alt=""
            style="width: 600px; height: 600px; padding-bottom: 30px" />

        @endif


    </div>
    <div class="row" style="color:gold; text-align: center;">
        <h1>
            Create
        </h1>
        <form action="{{ route('starships.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control">
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Model</strong>
                        <input type="text" class="form-control" name="model">
                        @if ($errors->has('model'))
                        <span class="text-danger">{{ $errors->first('model') }}</span>
                        @endif
                    </div>
                </div>
                {{-- <div class="col-xs-12 col-sm-12 col-md-12">--}}
                {{-- <div class="form-group">--}}

                {{-- <input type="hidden" class="form-control" value="https://swapi.py4e.com/api/starships/"
                                --}} {{-- name="url">--}}
                {{-- </div>--}}
                {{-- </div>--}}
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>

    </div>

    <div class="clearfix"></div>
</div>
<hr>


@endsection
