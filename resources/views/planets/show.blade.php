@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="row">
            <div class="col-md-6 col-12">
                @if (isset($planet->photos) && count($planet->photos) > 0)
                    @foreach($planet->photos as $photo)
                        <img src="{{ $photo->path }}" alt="" class="img-fluid" style="padding-bottom: 30px"/>
                    @endforeach
                @else
                    <img src="{{ asset('images/placeholders/planet.jpg') }}" alt="" class="img-fluid" style="padding-bottom: 30px"/>
                @endif
            </div>
            <div class="col-md-6 col-12" style="text-align: center">
                <h4>
                    <span>{{$planet->name}}</span> {{$planet->terrain}}
                </h4>
                <br>
                <br>
                <br>
                <p>{{ trans('planets_views.characters_from', ['name' => $planet->name]) }}</p>
                <br>
                @foreach($planet->characters as $character)
                    <p>{{$character->name}}</p>
                @endforeach
            </div>
        </div>
    </div>
    <hr>
@endsection
