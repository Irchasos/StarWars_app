@extends('layout')
@section('content')

    <div class="row">


        <div class="col-md-3 right-grid">
            @foreach($character->photos as $photo)

                <img src="{{$photo->path}}" alt=""
                     style="width: 800px; height: 800px; padding-bottom: 30px "/>>

            @endforeach
            <!--Put your Right Image HERE-->
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top"><h3><span>{{$character->name}}</span><br> from {{$character->planet->name}}</h3>

                <div class="right-bottom">

                    <p class="lable1">Details of character:
                    </p>
                    <p>Species:{{($character->kind->name)}}<br></p>
                    <p>Gender:{{$character->gender}}</p>
                    <p>Height:{{$character->height}}</p>
                    <p>mass:{{$character->mass}}</p>
                    <p>Hair Color:{{$character->hair_color}}</p>
                    <p>Starships list:
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
