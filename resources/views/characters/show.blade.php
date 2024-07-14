@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-4">
 <img src="{{$character->photo}}" alt="" style="width: 400px; height: 500; padding-bottom: 30px"/>
                @foreach($character->photos as $photo)
                    <img src="{{ $photo->path }}" alt="" style="width: 400px; height: 500; padding-bottom: 30px"/>
                @endforeach



        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span>{{$character->name}} {{ trans('characters_views.from') }}  {{$character->planet->name}}</span>
            </h4>
            <p class="lable1">{{ trans('characters_views.details_of_character') }}:
            </p>

            <p>{{ trans('characters_views.kind') }} :{{($character->kind->name)}}<br></p>
            <p>{{ trans('characters_views.gender') }} :{{$character->gender}}</p>
            <p>{{ trans('characters_views.height') }} :{{$character->height}}</p>
            <p>{{ trans('characters_views.mass') }} :{{$character->mass}}</p>
            <p>{{ trans('characters_views.hair_color') }} :{{$character->hair_color}}</p>
            <p>{{ trans('characters_views.starships_list') }} :
                @foreach($character->starships as $starship)

                    {{$starship->name}}|
                @endforeach
            </p>
        </div>


        <h4>{{$character->description}}
        </h4>

    </div>


    <hr>
@endsection
