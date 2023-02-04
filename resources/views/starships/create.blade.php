@extends('layouts.layout')
@section('content')
    <div class="about-section" id="aboutus"><!--King Of The North Section-->

        <div class="about-grids">

            <div class="col-md-6 left-grid">

                <div class="right-grid1-icon">
                </div>
                <img src="{{asset('images/millennium-falcon.jpg')}}"/><!--Put your Right Image HERE-->
            </div>
            <div class="col-md-6 right-grid">
                <div class="right-top">
                    <ul class="nav navbar-nav top">
                        <li><a href="{{ route('starships') }}">View All starships</a></li>
                        <li><h1>Create </h1></li>
                    </ul>

                    <form action="{{ route('starships.store') }}" method="POST">
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
                                    <strong>Model</strong>
                                    <input type="text" class="form-control"
                                           name="model">
                                    @if ($errors->has('model'))
                                        <span
                                                class="text-danger">{{ $errors->first('model') }}</span>
                                    @endif
                                </div>
                            </div>
                            {{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
                            {{--                                <div class="form-group">--}}

                            {{--                                    <input type="hidden" class="form-control"  value="https://swapi.py4e.com/api/starships/"--}}
                            {{--                                           name="url">--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
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
