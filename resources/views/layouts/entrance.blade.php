<!DOCTYPE HTML>
<html>

<head>
    <title>Star Wars App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="{{ asset('css/swipebox.css') }}">

    <style>
    </style>
</head>

<body style="background-image: url({{ asset('images/sky.jpg') }})" ><!--Body start-->
    <div class="wrapper">
        <a href="{{ route('index') }}">
            <img src="{{ asset('images/entrance.jpg') }}" style="width: 100%; height: 100%;" alt="Entrance Image">
        </a>
    </div>


</body>

</html>
