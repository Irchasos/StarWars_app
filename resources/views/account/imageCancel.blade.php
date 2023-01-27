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
            <th>id</th>
            <th>type</th>
            <th>id modeel</th>
            <th>path</th>
            <th>name</th>
            <th>thumb</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($photos as $photo)
            <tr>

                <td>{{$photo->id}}</td>
                <td>{{$photo->photoable_type}}</td>
                <td>{{$photo->photoable_id}}</td>
                <td>{{$photo->path}}</td>

                <td>{{$photo->photoable->name . $photo->photoable->title}}</td>
                <td><img src="{{asset($photo->path)}}" alt=""
                         style="width: 400px; height:100px; "/></td>
                <td>
                    <form action="{{ route('image.destroy',$photo->id) }}" method="POST">


                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i
                                class="fa-solid fa-person-falling-burst"></i></button>
                    </form>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
