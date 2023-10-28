@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            @if (isset($planet->photos) && count($planet->photos) > 0)
                @foreach($planet->photos as $photo)
                    <img src="{{ $photo->path }}" alt="" style="width: 600px; height: 800px; padding-bottom: 30px"/>
                @endforeach
            @else
                <img src="{{ asset('images/placeholders/planet.jpg') }}" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            @endif
        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span>{{$planet->name}}</span> {{$planet->terrain}}  </span>
            </h4> <br> <br> <br>
            <p>Characters from this Planet:
            </p> <br>


            <p {{ trans('planets_views.characters_from', ['name' => $planet->name]) }} @foreach($planet->characters as $character)
                <br>
                {{$character->name}}
            @endforeach
        </div>
   </div>
    <hr>
@endsection
