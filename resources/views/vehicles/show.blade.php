@extends('layout')
@section('content')
    <div class="row">

        <div class="col-md-3 right-grid">
            @foreach($vehicle->photos as $photo)

                <img src="{{$photo->path}}" alt=""
                     style="width: 700px; height: 800px; padding-bottom: 30px "/>>

            @endforeach

            <!--Put your Right Image HERE-->
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom" >

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
