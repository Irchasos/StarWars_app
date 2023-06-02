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
        <thead>
        <tr>
            <th>Name</th>
            <th>Classification</th>
            <th>Designation</th>
            <th>Average Height</th>
            <th>Skin Colors</th>
            <th>Hair Colors</th>
            <th>Eye Colors</th>
            <th>Average Lifespan</th>
            <th>Language</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kinds as $kind)
            <tr>
                <td>{{$kind->name}}</td>
                <td>{{$kind->classification}}</td>
                <td>{{$kind->designation}}</td>
                <td>{{$kind->average_height}}</td>
                <td>{{$kind->skin_colors}}</td>
                <td>{{$kind->hair_colors}}</td>
                <td>{{$kind->eye_colors}}</td>
                <td>{{$kind->average_lifespan}}</td>
                <td>{{$kind->language}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('kinds.show',$kind->id) }}"><i class="fa-solid fa-face-grin-beam"></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
