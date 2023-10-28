
@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            @if (isset($kind->photos) && count($kind->photos) > 0)
                @foreach($kind->photos as $photo)
                    <img src="{{ $photo->path }}" alt="" style="width: 600px; height: 800px; padding-bottom: 30px"/>
                @endforeach
            @else
                <img src="{{ asset('images/placeholders/kind.jpeg') }}" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            @endif
        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span>{{$kind->name}}</span> {{$kind->terrain}}  </span>
            </h4> <br> <br> <br>




           <p>Osoby z gatunku {{$kind->name}} to : @foreach($kind->characters as $character)
                <br>
                {{$character->name}}
            @endforeach</p>
        </div>
    </div>
    <hr>
@endsection
