@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-3 right-grid">


            @if($character->photos)
                @foreach($character->photos as $photo)
                    <img src="{{$photo->path}}" alt="" style="width: 800px; height: 800px; padding-bottom: 30px "/>
                @endforeach

            @endif
            <!--Put your Right Image HERE-->
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top"><h3><span>{{$character->name}}</span><br> {{ trans('characters_views.from') }}  {{$character->planet->name}}</h3>

                <div class="right-bottom">

                    <p class="lable1">{{ trans('characters_views.details_of_character') }}:
                    </p>
                    <p>{{ trans('characters_views.kind') }} :{{($character->kind->name)}}<br></p>
                    <p>{{ trans('characters_views.gender') }} :{{$character->gender}}</p>
                    <p>{{ trans('characters_views.height') }} :{{$character->height}}</p>
                    <p>{{ trans('characters_views.mass') }}  :{{$character->mass}}</p>
                    <p>{{ trans('characters_views.hair_color') }} :{{$character->hair_color}}</p>
                    <p>{{ trans('characters_views.starships_list') }}  :
                        @foreach($character->starships as $starship)

                            {{$starship->name}}|
                        @endforeach
                    </p>
                </div>


                <h4>"There sits the only king I mean to bend my knee to:<br>the King in the North!" <br> ―Lord
                    Greatjon Umber, indicating King Robb Stark</h4>

            </div>

        </div>
@endsection
