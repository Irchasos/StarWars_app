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
    <body>
    <main>

        <div class="album py-5 ">
            <div class="container">


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($models as $model)


                    {{( $photo= $photos->where('photoable_type','=', 'App\Models\\'.$model ))->first()}}
                        @foreach($photos as $photo)


                        <div class="col">
                            <div class="card shadow-sm"><a href="{{route('image.upload',['parameter'=>$model])}}">

                                    <img src="{{$photo->path}}" alt="" style="width: 421px; height: 648px "/>
                                </a>
                                <div class="card-body" style="text-align: center">
                                    <p class="card-text">{{$model}}</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endforeach


                </div>

            </div>
        </div>

    </main>


    </body>
@endsection
