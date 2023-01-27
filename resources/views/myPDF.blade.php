<body>
<h1 style="text-align: center">Here is your Passport {{$date}}</h1>

<hr>


<br>
<h4>Character data: </h4>{{$request->name}}<br>
<h4>Planet:</h4>{{$request->planet}}<br>
<h4>Time of expiring:</h4>{{$date2}}<br>
<h4>More infos:</h4>{{$request->text}}<br>
<h4>Type of visit :</h4><br>{{$request->type}}
<hr>
<h3> Certificated by starfleet @foreach (Auth::user()->roles as $role){{$role->name}}  @endforeach {{$auth->name}}</h3>{{$auth->email }}{{$now }}


</body>

