<!DOCTYPE HTML>
<html>
<head>

    <title>Star Wars App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/swipebox.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet"/>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

</head>
<body><!--Body start-->
<div class="header" id="head">
    <div class="header-top">
        <div class="container">

            <div class="top-menu">
                <span class="menu"> </span>
                <!--Menu-->
                <ul>
                    <li><a href="{{route('index')}}" class="active">Home</a></li>
                    <li><a href="{{route('characters')}}" class="scroll">Characters</a></li>
                    <li><a href="{{route('starships')}}" class="scroll">Starships</a></li>
                    <li><a href="{{route('planets')}}" class="scroll">Planets</a></li>
                    <li><a href="{{route('kinds')}}" class="scroll">Kinds</a></li>
                    <li><a href="{{route('vehicles')}}" class="scroll">Vehicles</a></li>
                    <li><a href="{{route('films')}}" class="scroll">Films</a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item">

                        </li>


                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


                            <a class="dropdown-item" href=" {{ route('myAccount') }}"><i class="fa-solid fa-user"> My Account</i></a>
                            <a class="dropdown-item" href=" {{ route('passport') }}"><i class="fa-solid fa-file-pdf"> Passport</i></a>
                            <a class="dropdown-item" href=" {{ route('image.choose') }}"><i class="fa-solid fa-images"> Add photo</i></a>
                            <a class="dropdown-item" href=" {{ route('image.cancel') }}"><i class="fa-solid fa-folder-minus"> Cancel Photo</i></a>
                            <a class="dropdown-item" href=" {{ route('signout') }}"><i class="fa-solid fa-lock"> Logout</i></a>
                        </div>
                    @endguest
                </ul>

                <!--End Menu-->
            </div>


        </div>
            <!--script-nav-->


        </div>
    </div>


<div class="content " style="margin-top: 20px"><!--Content Section-->

    @yield('content')

    @yield('errors')

</div>

@yield('slider')

    <div class="container">
@yield('footer')
        <div class="footer-top">

        </div>

        <a class="scroll" href="#head" id="toTop" style="display: block;"> <span id="toTopHover"
                                                                                 style="opacity: 1;"> </span></a>


    </div>

<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.js"></script>
@include('sweetalert::alert')
</body>
</html>
