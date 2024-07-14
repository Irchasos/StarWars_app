<!DOCTYPE HTML>
<html>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->yieldContent('errors'); ?>
<?php echo $__env->make('layouts.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="right-top">
        <h4><span>The website is based on data provided by<a href=" https://swapi.dev/">Swapi</a>
                </span><br></h4>
        <div class="right-bottom">
            <p class="lable1">Star Wars API is a web application aimed at developing programming skills. <br>
                The logic and purpose of some elements on the site may not make sense as the intention was to make
                extensive use of PHP capabilities using Laravel.</p>
        </div>
    </div>
    <div class="right-bottom" style="text-align:center">
        <p>Unauthenticated users can browse the database.<br>
            Registered users receive the first level of access (Range Corporal),<br> allowing them to send messages
            on Slack, upload photos, and generate passports for characters in PDF format.<br>
            Each registered user can send a message to their superior, and the superior can send a message to their
            subordinate. </p>
        <br>
    </div>
</div>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.js"></script>
<script src="<?php echo e(secure_asset('js/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(secure_asset('js/sweetalert2.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/layouts/layout.blade.php ENDPATH**/ ?>