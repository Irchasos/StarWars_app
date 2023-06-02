@extends('layouts.layout')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success')
            @endphp
        </div>
    @endif
    <div class="row">

        <div class="col-md-3 right-grid">

            <img style="width: 700px; height: 800px; padding-bottom: 30px "
                 src="{{ asset('storage/eq/equipment.jpg') }}" alt="" title="">


        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <table class="table table-bordered table-dark">
                        <thead>
                        <h3> {{$user->name}}{{$user->credits}} with rank @foreach ($user->roles as $role)
                                {{$role->name}}
                            @endforeach</h3>

                        <h3> My Equipment </h3>

                        <tr>

                            <th scope="col">Armor</th>
                            <th scope="col">LightSaber</th>
                            <th scope="col">CQC</th>
                            <th scope="col">Ordnance</th>
                            <th scope="col">Guns</th>
                            <th scope="col">Weapon</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->equipment as $item)
                            <tr>


                                @if($item->type =='Armor')
                                    <td>{{$item->name}}</td>
                                @endif
                                @if($item->type =='LightSaber')
                                    <td>{{$item->name}}</td>
                                @endif
                                @if($item->type =='CQC')
                                    <td>{{$item->name}}</td>
                                @endif
                                @if($item->type =='Ordnance')
                                    <td>{{$item->name}}</td>
                                @endif
                                @if($item->type =='Weapon')
                                    <td>{{$item->name}}</td>
                                @endif
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <a type="button" href="{{ route('store') }}"class="btn btn-lg btn-outline-success">Buy Equipment</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
