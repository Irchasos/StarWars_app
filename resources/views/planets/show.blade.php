@extends('layouts.layout')
@section('content')
    <div class="row">

        <div class="col-md-3 right-grid">
            @if(file_exists($planet->photos))

                @foreach($planet->photos as $photo)

                    <img src="{{$photo->path}}" alt=""
                         style="width: 700px; height: 800px; padding-bottom: 30px "/>>

                @endforeach
            @else
                <img src="{{url ($placeholder->path)}}" alt=""
                     style="width: 700px; height: 800px; padding-bottom: 30px "/>
            @endif
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <h3><span>{{$planet->name}}</span> {{$planet->terrain}}</h3>

                    <p>King in the North was the title given to the ruler of the North during its time as an independent
                        kingdom, before the coming of the Targaryens.</p>
                    <p class="lable1">A colloquial title also used for the rulers of the North was the "Kings of
                        Winter". House Stark ruled as Kings in the North for thousands of years.
                    </p>
                    <p class="lable1"> Osoby pochodzące z {{$planet->name}} to
                        : @foreach($planet->characters as $character)
                            <br>
                            {{$character->name}}
                        @endforeach
                    </p>
                </div>
                <div class="right-bottom">
                    <h4>"There sits the only king I mean to bend my knee to:<br>the King in the North!" <br> ―Lord
                        Greatjon Umber, indicating King Robb Stark</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
