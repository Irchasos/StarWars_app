<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/saper.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>{{ trans('mainpage.star_wars_app') }}</title>
    <script src="https://kit.fontawesome.com/43af320612.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/navbar.css') }}">
    <script src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="{{secure_asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    {{--
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css" media="all">--}}
    {{--
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" media="all">--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="{{secure_asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
    {{--
    <link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css" media="all">--}}
    {{--
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" media="all">--}}
    <link href="{{secure_asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
    {{--
    <link href="{{asset('css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" media="all">--}}
    <link href="{{secure_asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{secure_asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{secure_asset('css/footer.css')}}" rel="stylesheet" type="text/css" media="all" />
    {{--
    <link href="{{asset('css/swipebox.css')}}" rel="stylesheet" type="text/css" media="all" />--}}
    {{--
    <link href="{{asset('css/choices.css')}}" rel="stylesheet" type="text/css" media="all" />--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{secure_asset('css/swipebox.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

</head>