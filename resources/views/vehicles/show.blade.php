@extends('layouts.layout')
@section('content')


@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            @if (isset($vehicle->photos) && count($vehicle->photos) > 0)
                @foreach($vehicle->photos as $photo)
                    <img src="{{ $photo->path }}" alt="" style="width: 600px; height: 800px; padding-bottom: 30px"/>
                @endforeach
            @else
                <img src="{{ asset('images/placeholders/vehicle.jpg') }}" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            @endif
        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span>{{$vehicle->name}}</span>




            <p>Osoby korzystające z {{$vehicle->name}} to
                : @foreach($vehicle->characters as $character)
                    <br>
                    {{$character->name}}
                @endforeach</p>
        </div>
    </div>
    <hr>
@endsection
