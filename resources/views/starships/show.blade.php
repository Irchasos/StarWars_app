@extends('layouts.layout')
@section('content')

    <div class="row">
        <div class="col-md-3 right-grid">


            @if($starship->photos)
                @foreach($starship->photos as $photo)
                    <img src="{{$photo->path}}" alt="" style="width: 800px; height: 800px; padding-bottom: 30px "/>
                @endforeach

            @endif
        </div>

    </div>

    <div class="col-md-9 right-grid" style="text-align: right ">
        <div class="right-top">

            <div class="right-bottom">


                <h2><span>{{$starship->name}}</span></h2>

            </div>
            <div class="right-bottom"><br>
                <h3> Model:<span>{{$starship->model}}</span><br>
                    MGLT: <span>{{$starship->MGLT}}</span><br>
                    Cargo Capacity: <span>{{$starship->cargo_capacity}}</span><br>
                    Consumambles: <span>{{$starship->consumables}}</span><br>
                    Cost in Credits: <span>{{$starship->cost_in_credits}}</span><br>
                    Min-Max Crew: <span>{{$starship->crew}}</span><br>
                    Hyperdrive: <span>{{$starship->hyperdrive_rating}}</span><br>
                    Length:<span>{{$starship->length}}</span><br>
                    Manufacturer: <span>{{$starship->manufacturer}}</span><br>
                    Max speed in atmospher: <span>{{$starship->max_atmosphering_speed}}</span><br>
                    Class: <span>{{$starship->starship_class}}</span><br>

                    Passenger: <span>{{$starship->passengers}}</span></h3>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    </div>

@endsection
