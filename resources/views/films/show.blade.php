@extends('layouts.layout')
@section('content')
    <div class="row">

        <div class="col-md-3 right-grid">
            @foreach($film->trailers as $trailer)
                <iframe style="padding: 50px" width="800" height="500" src="{{$trailer->path}}" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

            @endforeach
            @foreach($film->photos as $photo)

                <img src="{{$photo->path}}" alt=""
                     style="width: 700px; height: 800px; padding-bottom: 30px "/>>
            @endforeach

            <!--Put your Right Image HERE-->
        </div>


        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <h3><span>{{$film->title}}</span> -Episode{{$film->episode_id}}</h3>

                    <p>{{$film->opening_crawl}}</p>

                    <p class="lable1"> Director: {{$film->director}} <br></br>Producer: {{$film->producer}}<br>

                    <p class="lable1"> Osoby pojawiające się w filmie to : @foreach($film->characters as $character)
                            <br>
                    {{$character->name}}
                    @endforeach
                    <p class="lable1"> Statki pojawiające się w filmie to : @foreach($film->starships as $starship)
                            <br>
                    {{$starship->name}}
                    @endforeach
                    <p class="lable1"> Planety pojawiające się w filmie to : @foreach($film->planets as $planet)
                            <br>
                            {{$planet->name}}
                        @endforeach
                    </p>
                    <p class="lable1"> Pojazdy pojawiające się w filmie to : @foreach($film->vehicles as $vehicle)
                            <br>
                    {{$vehicle->name}}
                    @endforeach
                    <p class="lable1"> Gatunki pojawiające się w filmie to : @foreach($film->kinds as $kind)
                            <br>
                            {{$kind->name}}
                        @endforeach
                    </p>
                </div>
                <div class="right-bottom">
                    <h4>Release Date : {{$film->release_date}}</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
