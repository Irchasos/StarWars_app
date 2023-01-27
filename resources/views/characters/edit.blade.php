@extends('layout')
@section('content')
    <div class="row">

        <div class="col-md-3 right-grid">
            <img src="{{asset(asset("storage/characters_images/".$character->name.".jpg"))}}" alt=""
                 style="width: 700px; height: 800px "/>

            <!--Put your Right Image HERE-->
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top"><h3><span>{{$character->name}}</span><br> from {{$character->planet->name}}</h3>

                <div class="right-bottom" >

                    <p class="lable1">Details of character:
                    </p>
                    <ul class="nav navbar-nav top">
                        <li><a href="{{ route('characters') }}">View All characters</a></li>
                        <li><h1>Edit {{ $character->name }}</h1></li>
                    </ul>

                    <form action="{{ route('characters.update',$character->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $character->name }}" class="form-control"
                                           placeholder="Name">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-10 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Homeworld:</strong>
                                    <select class="form-select" name="homeworld" aria-label="Default select example">
                                        <option selected>Before:{{ $character->planet->name }}</option>
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
                                    <strong>Gender:</strong>
                                    <input type="text" name="gender" value="{{ $character->gender }}"
                                           class="form-control" placeholder="{{ $character->gender }}">
                                    @if ($errors->has('gender'))
                                        <span class="text-danger">{{ $errors->first('gender') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Hair Color:</strong>
                                    <input type="text" name="hair_color" value="{{ $character->hair_color }}"
                                           class="form-control" placeholder="{{ $character->hair_color }}">
                                    @if ($errors->has('hair_color'))
                                        <span class="text-danger">{{ $errors->first('hair_color') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Height:</strong>
                                    <input type="text" name="height" value="{{ $character->height }}"
                                           class="form-control" placeholder="{{ $character->height }}">
                                    @if ($errors->has('height'))
                                        <span class="text-danger">{{ $errors->first('height') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Mass:</strong>
                                    <input type="text" name="mass" value="{{ $character->mass }}" class="form-control"
                                           placeholder="{{ $character->mass }}">
                                    @if ($errors->has('mass'))
                                        <span class="text-danger">{{ $errors->first('mass') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Starships:</strong>
                                <select id='myselect' multiple class="form-select" name="starships[]"
                                        aria-label="Default select example">
                                    @foreach($starships as $starship)
                                        <option value="{{$starship->id}}">{{$starship->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('starships'))
                                    <span class="text-danger">{{ $errors->first('starships') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <script>
            $('#myselect').select2({
                width: '100%',
                placeholder: "Select an Option",
                allowClear: true,
                multiple: true,
            });
        </script>
@endsection

