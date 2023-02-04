@extends('layouts.layout')
@section('content')
    <div class="row">

        <div class="col-md-3 right-grid">
            @if(file_exists($vehicle->photos))

                @foreach($vehicle->photos as $photo)

                    <img src="{{$photo->path}}" alt=""
                         style="width: 700px; height: 800px; padding-bottom: 30px "/>>

                @endforeach
            @else
                <img src="{{url ($placeholder->path)}}" alt=""
                     style="width: 800px; height: 800px; padding-bottom: 30px "/>
            @endif

            <!--Put your Right Image HERE-->
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <h3><span>{{$vehicle->name}}</span></h3>


                    <p class="lable1"> Osoby korzystające z {{$vehicle->name}} to
                        : @foreach($vehicle->characters as $character)
                            <br>
                            {{$character->name}}
                        @endforeach
                    </p>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
