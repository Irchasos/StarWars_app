@extends('layouts.layout')
@section('content')
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            @if (isset($character->photos) && count($character->photos) > 0)
            <img src="{{$character->photo}}" alt="" style="width: 400px; height: 500; padding-bottom: 30px" />
            @foreach($character->photos as $photo)
                <img src="{{ $photo->path }}" alt="" style="width: 400px; height: 500; padding-bottom: 30px" />
            @endforeach
            @else
                <img src="{{ asset('images/placeholders/character.jpg') }}" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            @endif
        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center; color: gold;">
            <div class="right-top"><h3><span>{{$character->name}}</span><br> from {{$character->planet->name}}</h3>


                <a class="btn btn-secondary"
                   href="{{ route('characters') }}">{{ trans('characters_views.view_all_characters') }}</a>


                <p class="lable1">{{ trans('characters_views.details_of_character') }}:
                </p>


                <form action="{{ route('characters.update',$character->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('characters_views.name') }}:</strong>
                                <input type="text" name="name" value="{{ $character->name }}" class="form-control"
                                       placeholder="Name">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('characters_views.homeworld') }}:</strong>
                                <select class="form-select" name="homeworld" aria-label="Default select example">
                                    <option selected>{{ trans('characters_views.before') }}
                                        :{{ $character->planet->name }}</option>
                                    @foreach($planets as $planet)
                                        <option value="{{$planet->id}}">{{$planet->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('homeworld'))
                                    <span class="text-danger">{{ $errors->first('homeworld') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('characters_views.gender') }}:</strong>
                                <input type="text" name="gender" value="{{ $character->gender }}"
                                       class="form-control" placeholder="{{ $character->gender }}">
                                @if ($errors->has('gender'))
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('characters_views.hair_color') }}:</strong>
                                <input type="text" name="hair_color" value="{{ $character->hair_color }}"
                                       class="form-control" placeholder="{{ $character->hair_color }}">
                                @if ($errors->has('hair_color'))
                                    <span class="text-danger">{{ $errors->first('hair_color') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('characters_views.height') }}:</strong>
                                <input type="text" name="height" value="{{ $character->height }}"
                                       class="form-control" placeholder="{{ $character->height }}">
                                @if ($errors->has('height'))
                                    <span class="text-danger">{{ $errors->first('height') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{ trans('characters_views.mass') }}:</strong>
                                <input type="text" name="mass" value="{{ $character->mass }}" class="form-control"
                                       placeholder="{{ $character->mass }}">
                                @if ($errors->has('mass'))
                                    <span class="text-danger">{{ $errors->first('mass') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group ">
                            <strong>{{ trans('characters_views.starships') }}:</strong>
                            <select id='myselect' multiple class="form-control" name="starships[]"
                                    aria-label="Default select example">
                                @foreach($starships as $starship)
                                    <option  value="{{$starship->id}}">{{$starship->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('starships'))
                                <span class="text-danger">{{ $errors->first('starships') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">{{ trans('characters_views.submit') }}</button>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script>
        $('#myselect').select2({
            width: '78%',
            placeholder: "Select an Option",
            allowClear: true,
            multiple: true,
        });
    </script>
@endsection

