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
            <a class="btn btn-success" href="{{ route('starships.create') }}">create</a>
        @endcan
        <thead>
        <tr>
            <th>Model</th>
            <th>Name</th>
            <th>Url</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($starships as $starship)
            <tr>
                <td>{{$starship->model}}</td>
                <td>{{$starship->name}}</td>
                <td>{{$starship->url}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('starships.show',$starship->id) }}">Show</a>

                    @can('edit character in base')
                        <form action="{{ route('starships.destroy',$starship->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('starships.edit',$starship->id) }}">Edit</a>
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
