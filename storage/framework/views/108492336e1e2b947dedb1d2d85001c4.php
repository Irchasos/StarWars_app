<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

            <?php
                Session::forget('success')
            ?>
        </div>
    <?php endif; ?>
    <body>
    <main>
        <div class="album py-5 ">
            <div class="container">

                    <div class="right-top">
                        <span>Gra w Saper</span>

                        <div id="game-board"></div>
                    </div>


                </div>

            </div>


    </main>


    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/games/index.blade.php ENDPATH**/ ?>