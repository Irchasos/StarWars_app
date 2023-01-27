@extends('layout')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success')
            @endphp
        </div>
    @endif
    <table class="table table-dark">
        <thead>
        <tr>
            <th>Name</th>
            <th>Model</th>
            <th>Class</th>
            <th>Manufacturer</th>
            <th>Length</th>
            <th>Cost in credits</th>
            <th>Crew</th>
            <th>Passenger</th>
            <th>Max Atmosphering speed</th>
            <th>Cargo Capacity</th>
            <th>Consumables</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td>{{$vehicle->name}}</td>
                <td>{{$vehicle->model}}</td>
                <td>{{$vehicle->vehicle_class}}</td>
                <td>{{$vehicle->manufacturer}}</td>
                <td>{{$vehicle->length}}</td>
                <td>{{$vehicle->cost_in_credits}}</td>
                <td>{{$vehicle->crew}}</td>
                <td>{{$vehicle->passengers}}</td>
                <td>{{$vehicle->max_atmosphering_speed}}</td>
                <td>{{$vehicle->cargo_capacity}}</td>
                <td>{{$vehicle->consumables}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('vehicles.show',$vehicle->id) }}"><i
                            class="fa-solid fa-face-grin-beam"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
