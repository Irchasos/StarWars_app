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
        @can('make a character in base')
        <a class="btn btn-success" href="{{ route('planets.create') }}">{{ trans('planets_views.create') }}</a>
    @endcan

    <table class="table table-dark">
        <thead>
        <tr>
            <th>{{ trans('planets_views.name') }}</th>
            <th>{{ trans('planets_views.terrain') }}</th>
            <th>{{ trans('planets_views.url2') }}</th>
            <th>{{ trans('planets_views.action') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach($planets as $planet)
            <tr>
                <td>{{$planet->name}}</td>
                <td>{{$planet->terrain}}</td>
                <td>{{$planet->url}}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('planets.show',$planet->id) }}">{{ trans('planets_views.show') }}</a>
                    @can('edit character in base')
                        <form action="{{ route('planets.destroy',$planet->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('planets.edit',$planet->id) }}">{{ trans('planets_views.edit') }}</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">{{ trans('planets_views.delete') }}</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
