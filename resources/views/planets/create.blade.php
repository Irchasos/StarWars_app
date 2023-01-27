@extends('layout')
@section('content')
    <div class="about-section" id="aboutus"><!--King Of The North Section-->

        <div class="about-grids">

            <div class="col-md-6 left-grid">

                <div class="right-grid1-icon">
                </div>
                <img src="{{asset('images/planet.jpeg')}}"/><!--Put your Right Image HERE-->
            </div>
            <div class="col-md-6 right-grid">
                <div class="right-top">
                    <ul class="nav navbar-nav top">
                        <li><a href="{{ route('planets') }}">View All planets</a></li>
                        <li><h1>Create </h1></li>
                    </ul>

                    <form action="{{ route('planets.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control">
                                    @if ($errors->has('name'))
                                        <span
                                            class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Terrain</strong>
                                    <input type="text" class="form-control"
                                           name="terrain">
                                    @if ($errors->has('terrain'))
                                        <span
                                            class="text-danger">{{ $errors->first('terrain') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">

                                    <input type="hidden" class="form-control"
                                           value="https://swapi.py4e.com/api/planets/"
                                           name="url">
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
