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
    <table class="table table-dark">
        @can('make a character in base')
            <a class="btn btn-success" href="{{ route('planets.create') }}">create</a>
        @endcan
        <thead>
        <tr>
            <th>Name</th>
            <th>Terrain</th>
            <th>Url</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($planets as $planet)
            <tr>
                <td>{{$planet->name}}</td>
                <td>{{$planet->terrain}}</td>
                <td>{{$planet->url}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('planets.show',$planet->id) }}">Show</a>
                    @can('edit character in base')
                        <form action="{{ route('planets.destroy',$planet->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('planets.edit',$planet->id) }}">Edit</a>


                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
