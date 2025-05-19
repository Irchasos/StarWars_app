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
    <body>
    <main>
        <div class="album py-5 ">
            <div class="container">

                    <div class="right-top">
                        <span>Gra w Saper</span>

                        <div id="game-board"></div>
                    </div>


                </div>

            </div>


    </main>


    </body>
@endsection
