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
                    @foreach($films as $film)

                        <div class="col">
                            <div class="card shadow-sm"><a href="films/{{$film->id}}">

                                    <img src="{{asset(asset("storage/episode_image/".$film->episode_id.".jpg"))}}"
                                         alt="" style="width: 421px; height: 648px "/>
                                </a>
                                <div class="card-body">
                                    <p class="card-text">{{$film->title}}</p>
                                    <div class="d-flex justify-content-between align-items-center">

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>

    </main>


    </body>
@endsection
