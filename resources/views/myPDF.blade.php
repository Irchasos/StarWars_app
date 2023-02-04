
<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
        body, html {
            height: 100%;
            color: #777;
            line-height: 1.8;

        }




        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1600px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
                min-height: 400px;
            }
        }
    </style>
</head>
<body>
<div class=" w3-display-container w3-opacity-min">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">Here is your Passport<span class="w3-hide-small"></span>
            <br><br>
             Until : {{$date}}</span>
    </div>

<h4>Character data: </h4>{{$request->name}}<br>
<h4>Planet:</h4>{{$request->planet}}<br>
<h4>Time of expiring:</h4>{{$date2}}<br>
<h4>More infos:</h4>{{$request->text}}<br>
<h4>Type of visit :</h4><br>{{$request->type}}
<hr>
<h3> Certificated by starfleet @foreach (Auth::user()->roles as $role){{$role->name}}  @endforeach {{$auth->name}}</h3>{{$auth->email }}{{$now }}

</body>
</html>


