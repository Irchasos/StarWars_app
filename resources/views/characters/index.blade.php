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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-secondary">
                        <div class="row">
                            <div class="col-6">
                                <h3>{{ trans('characters_views.characters_list') }}</h3>
                            </div>
                            <div class="col-6 text-right">
                                @can('make a character in base')
                                    <a class="btn btn-dark" href="{{ route('characters.create') }}">{{ trans('characters_views.create') }}</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12">
                                <form action="{{ route('characters') }}" method="GET" role="search">
                                    <div class="input-group">
                                        <input value="{{ Request::get('term') }}" type="text" class="form-control" name="term" placeholder="{{ trans('characters_views.all_of_characters_or_type_and_searchenter') }}" id="term">
                                        <input value="{{ Request::get('homeworld') }}" type="text" class="form-control" name="homeworld" placeholder="{{ trans('characters_views.homeworld') }}" id="homeworld">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">{{ trans('characters_views.search') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-dark">
                                <thead>
                                <tr>
                                    <th>{{ trans('characters_views.name') }}</th>
                                    <th>{{ trans('characters_views.homeworld2') }}</th>
                                    <th>{{ trans('characters_views.kind2') }}</th>
                                    <th>{{ trans('characters_views.starships') }}</th>
                                    <th>{{ trans('characters_views.vehicles') }}</th>
                                    <th>{{ trans('characters_views.films') }}</th>
                                    <th>{{ trans('characters_views.action') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($characters as $character)
                                    <tr>
                                        <td>{{$character->name}}</td>
                                        <td><a href="planets/{{$character->planet->id}}">{{$character->planet->name}}</a></td>
                                        <td><a href="kinds/{{$character->kind->id}}">{{$character->kind->name}}</a></td>
                                        <td>
                                            @foreach($character->starships as $starship)
                                                <a href="starships/{{$starship->id}}">{{$starship->name}}</a>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($character->vehicles as $vehicle)
                                                <a href="vehicles/{{$vehicle->id}}">{{$vehicle->name}}</a>
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($character->films as $film)
                                                <a href="films/{{$film->id}}">{{$film->title}}</a>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a class="btn btn-block btn-secondary" href="{{ route('characters.show',$character->id) }}"><i class="fa-solid fa-face-grin-beam"></i></a>
                                            @can('edit character in base')
                                                <form action="{{ route('characters.destroy',$character->id) }}" method="POST">
                                                    <a class="btn btn-block btn-info mb-1" href="{{ route('characters.edit',$character->id) }}"><i class="fa-solid fa-user-pen"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa-solid fa-person-falling-burst"></i></button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $characters->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
