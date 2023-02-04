<!DOCTYPE HTML>
<html>
<head>

    <title>{{ trans('mainpage.star_wars_app') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
                <ul>
                    <li class=" dropdown" style="padding-bottom: 40px">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()]['display'] }}
                        </a>
                        <div class="dropdown-menu" style="background:transparent"
                             aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a href="{{
    route('lang.switch', $lang) }}">{{$language['display']}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
                <span class="menu"> </span>

                <!--Menu-->
                <ul>
                    <li><a href="{{route('index')}}" class="active">{{ trans('mainpage.home') }}</a></li>
                    <li><a href="{{route('characters')}}" class="scroll">{{ __('mainpage.characters') }}</a></li>
                    <li><a href="{{route('starships')}}" class="scroll">{{ trans('mainpage.starships') }}</a></li>
                    <li><a href="{{route('planets')}}" class="scroll">{{ trans('mainpage.planets') }}</a></li>
                    <li><a href="{{route('kinds')}}" class="scroll">{{ trans('mainpage.kinds') }}</a></li>
                    <li><a href="{{route('vehicles')}}" class="scroll">{{ trans('mainpage.vehicles') }}</a></li>
                    <li><a href="{{route('films')}}" class="scroll">{{ trans('mainpage.films') }}</a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ trans('mainpage.login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">{{ trans('mainpage.register') }}</a>
                        </li>
                    @else
                        <li class="nav-item">

                        </li>


                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ trans('mainpage.account_menu') }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


                            <a class="dropdown-item" href=" {{ route('myAccount') }}"><i
                                        class="fa-solid fa-user"> {{ trans('mainpage.my_account') }}</i></a>
                            <a class="dropdown-item" href=" {{ route('passport') }}"><i class="fa-solid fa-file-pdf">
                                    {{ trans('mainpage.passport') }}</i></a>
                            <a class="dropdown-item" href=" {{ route('image.choose') }}"><i class="fa-solid fa-images">
                                    {{ trans('mainpage.add_photo') }}</i></a>
                            <a class="dropdown-item" href=" {{ route('image.cancel') }}"><i
                                        class="fa-solid fa-folder-minus"> {{ trans('mainpage.cancel_photo') }}</i></a>
                            <a class="dropdown-item" href=" {{ route('signout') }}"><i class="fa-solid fa-lock">
                                    {{ trans('mainpage.logout') }}</i></a>
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
    <div class="slider">
        <iframe width="1200" height="800" src="https://www.youtube.com/embed/CmygQFhjaKM" title="YouTube video player"
                frameborder="00"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>

    </div>

    @yield('errors')

</div>

@yield('slider')

<div class="container">
    {{--    @include('layouts.footer')--}}
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
