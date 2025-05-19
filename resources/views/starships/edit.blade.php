@extends('layouts.layout')
@section('content')
<div class="row">

    <div class="col-md-3 right-grid">
        <img src="{{asset('images/millennium-falcon.jpg')}}" style="width: 700px; height: 800px " />

        <!--Put your Right Image HERE-->
    </div>

    <div class="col-md-9 right-grid" style="text-align: center ">
        <div class="right-top">

            <div class="right-bottom " style="color: gold ">

                
                <h2>Edit {{ $starship->name }}</h2>
                <form action="{{ route('starships.update',$starship->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="{{$starship->name}}">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Model</strong>
                                <input type="text" class="form-control" placeholder="{{$starship->model}}" name="model">
                                @if ($errors->has('model'))
                                <span class="text-danger">{{ $errors->first('model') }}</span>
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