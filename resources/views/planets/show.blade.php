@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-md-3 right-grid">


            @if($planet->photos)
                @foreach($planet->photos as $photo)
                    <img src="{{$photo->path}}" alt="" style="width: 800px; height: 800px; padding-bottom: 30px "/>
                @endforeach

            @endif
            <!--Put your Right Image HERE-->
        </div>


        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <h3><span>{{$planet->name}}</span> {{$planet->terrain}}</h3>


                    <p class="lable1"> {{ trans('planets_views.characters_from', ['name' => $planet->name]) }} @foreach($planet->characters as $character)
                            <br>
                            {{$character->name}}
                        @endforeach
                    </p>
                </div>
                <div class="right-bottom">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
