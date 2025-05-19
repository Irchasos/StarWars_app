@extends('layouts.layout')
@section('content')


    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            @if (isset($starship->photos) && count($starship->photos) > 0)
                @foreach($starship->photos as $photo)
                    <img src="{{ $photo->path }}" alt="" style="width: 600px; height: 800px; padding-bottom: 30px"/>
                @endforeach
            @else
                <img src="{{ asset('images/placeholders/starship.jpg') }}" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            @endif


        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span>{{$starship->name}}   </span>
            </h4>
            <p >details:
            </p>

            <p>Model:<span>{{$starship->model}}</span><br></p>
            <p>  MGLT: <span>{{$starship->MGLT}}</span><br></p>
            <p>  Cargo Capacity: <span>{{$starship->cargo_capacity}}</span><br></p>
            <p>  Consumambles: <span>{{$starship->consumables}}</span><br></p>
            <p>   Cost in Credits: <span>{{$starship->cost_in_credits}}</span><br></p>
            <p>  Min-Max Crew: <span>{{$starship->crew}}</span><br>
            <p>  Hyperdrive: <span>{{$starship->hyperdrive_rating}}</span><br></p>
            <p>  Length:<span>{{$starship->length}}</span><br>
            <p>  Manufacturer: <span>{{$starship->manufacturer}}</span><br></p>
            <p>  Max speed in atmospher: <span>{{$starship->max_atmosphering_speed}}</span><br></p>
            <p> Class: <span>{{$starship->starship_class}}</span><br></p>

            <p>  Passenger: <span>{{$starship->passengers}}</span><br>         </p>
        </div>


        

    </div>


    <hr>
@endsection
