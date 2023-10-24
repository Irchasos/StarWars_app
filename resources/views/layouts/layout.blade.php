<!DOCTYPE HTML>
<html>
@include('layouts.header')
<body>
@include('layouts.navbar')
@yield('content')
@yield('errors')

@include('layouts.slider')

<div class="col-md-14 right-grid" style="text-align: right ">
        <div class="right-top"><h4><span>The website is based on data provided by https://swapi.dev/.</span><br></h4>

            <div class="right-bottom">

                <p class="lable1">Star Wars API is a web application aimed at developing programming skills. <br>
                                The logic and purpose of some elements on the site may not make sense as the intention was to make extensive use of PHP capabilities using Laravel.</p>
        
                
            </div>
        </div>
   <div class="right-bottom" style="padding-right:330px">
            <p>Unauthenticated users can browse the database.<br>
                Registered users receive the first level of access (Range Corporal),<br> allowing them to send messages on Slack, upload photos, and generate passports for characters in PDF format.<br>
                 Each registered user can send a message to their superior, and the superior can send a message to their subordinate. </p>

        </div>

    </div>





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
