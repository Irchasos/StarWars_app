@extends('layouts.layout')
@section('content')
    <div class="row">

        <div class="col-md-3 right-grid">
            <img src="{{asset('images/planet.jpeg')}}"
                 style="width: 700px; height: 800px "/>

            <!--Put your Right Image HERE-->
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <ul class="nav navbar-nav top">
                        <li><a href="{{ route('planets') }}">View All planets</a></li>
                        <li><h1>Edit {{ $planet->name }}</h1></li>
                    </ul>
                    <form action="{{ route('planets.update',$planet->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $planet->name }}" class="form-control"
                                           placeholder="Name">
                                    @if ($errors->has('name'))
                                        <span
                                                class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Terrain:</strong>
                                    <input type="text" class="form-control" value="{{ $planet->terrain }}"
                                           name="terrain">
                                    @if ($errors->has('terrain'))
                                        <span
                                                class="text-danger">{{ $errors->first('terrain') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
@endsection
