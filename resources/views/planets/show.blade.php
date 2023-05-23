@extends('layouts.layout')
@section('content')
    <div class="row">

        <div class="col-md-3 right-grid">
            @if(file_exists($planet->photos))

                @foreach($planet->photos as $photo)

                    <img src="{{$photo->path}}" alt=""
                         style="width: 700px; height: 800px; padding-bottom: 30px "/>>

                @endforeach
            @elseif(file_exists($placeholder))
                <img src="{{url ($placeholder->path)}}" alt=""
                     style="width: 800px; height: 800px; padding-bottom: 30px "/>
            @endif
        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <h3><span>{{$planet->name}}</span> {{$planet->terrain}}</h3>

                    <p>{{ trans('pagination.king_in_the_north_was_the_title_given_to_the_ruler') }}</p>
                    <p class="lable1">{{ trans('pagination.a_colloquial_title_also_used_for_the_rulers_of_the') }}
                    </p>
                    <p class="lable1"> {{ trans('pagination.osoby_pochodzce_z_to', ['name' => $planet->name]) }} @foreach($planet->characters as $character)
                            <br>
                            {{$character->name}}
                        @endforeach
                    </p>
                </div>
                <div class="right-bottom">
                    <h4>{!! trans('pagination.there_sits_the_only_king_i_mean_to_bend_my_knee_to') !!}</h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
