<!DOCTYPE HTML>
<html>
@include('layouts.header')
<body>
@include('layouts.navbar')
@yield('content')
@yield('errors')

@include('layouts.slider')
@include('layouts.footer')
@include('layouts.scripts')
@include('sweetalert::alert')

<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.js"></script>
<script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
</body>
</html>
