@extends('layouts.layout')
@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="col-md-4">
            Welcome {{$user->name}}
            Its your reports ::

        </div>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div style="padding-left: 5px">



        <table class="table table-dark">



                <thead>
                <tr>
                    <th>From </th>
                    <th>Date incomming </th>

                    <th>Message </th>
                    <th>action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                    <tr>

                        <td>{{$message->employer_id}} </td>
                        <td>         ewe2
                        </td>
                        <td> {{$message->message}} </td>
                        <td>DELETE </td>


                    </tr>
                @endforeach

                </tbody>
        </table>



        </div>
    </div>

@endsection
