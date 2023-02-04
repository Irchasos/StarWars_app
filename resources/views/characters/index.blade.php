@extends('layouts.layout')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success')
            @endphp
        </div>
    @endif
    <div style="padding-left: 5px">

        <table class="table table-dark">
            @can('make a character in base')
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <a class="btn btn-success" href="{{ route('characters.create') }}">create</a>
                    </div>
                    @endcan
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <form action="{{ route('characters') }}" method="GET" role="search">

                            <input value="{{Request::get("term")}}" type="text" class="form-control-plaintext"
                                   name="term"
                                   placeholder="All of characters or type and search(Enter)" id="term">

                        </form>
                    </div>
                </div>

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Homeworld</th>
                    <th>Kind</th>
                    <th>Starships</th>
                    <th>Vehicles</th>
                    <th>Films</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($characters as $character)

                    <tr>

                        <td>{{$character->name}} </td>
                        <td><a href="planets/{{$character->planet->id}}">{{$character->planet->name}}</a></td>
                        <td><a href="kinds/{{$character->kind->id}}">{{$character->kind->name}}</a></td>
                        <td>  @foreach($character->starships as $starship)
                                <a href="starships/{{$starship->id}}">{{$starship->name}}</a>

                            @endforeach
                        </td>
                        <td>  @foreach($character->vehicles as $vehicle)
                                <a href="vehicles/{{$vehicle->id}}">{{$vehicle->name}}</a>

                            @endforeach
                        </td>
                        <td> @foreach($character->films as $film)
                                <a href="films/{{$film->id}}">{{$film->title}}</a>

                            @endforeach</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('characters.show',$character->id) }}"><i
                                        class="fa-solid fa-face-grin-beam"></i></a>
                            @can('edit character in base')
                                <form action="{{ route('characters.destroy',$character->id) }}" method="POST">

                                    <a class="btn btn-warning" href="{{ route('characters.edit',$character->id) }}"><i
                                                class="fa-solid fa-user-pen"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i
                                                class="fa-solid fa-person-falling-burst"></i></button>
                                </form>
                            @endcan

                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
        {{ $characters->links() }}

    </div>
@endsection
