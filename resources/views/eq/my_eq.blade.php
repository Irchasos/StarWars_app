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
                        <h3> {{$user->name}} with rank @foreach ($user->roles as $role)
                                {{$role->name}}
                            @endforeach</h3>

                        <h3> My Equipment </h3>

                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Helmet</th>
                            <th scope="col">Chest Plate</th>
                            <th scope="col">Ammo Belt</th>
                            <th scope="col">Boots</th>
                            <th scope="col">Holster</th>
                            <th scope="col">Weapon</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>

                        </tbody>
                    </table>
                    <button type="button" class="btn btn-lg btn-outline-success">Buy Equipment</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
