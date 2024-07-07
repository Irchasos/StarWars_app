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


                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                    <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>







                                <?php if($photo->photoable_id === 0): ?>
                            <div class="col">
                                <div class="card shadow-sm"><a
                                            href="<?php echo e(route('image.upload',['parameter'=>$photo->photoable_type])); ?>">

                                        <img src="<?php echo e($photo->path); ?>" alt="" style="width: 421px; height: 648px "/>
                                    </a>
                                    <div class="card-body" style="text-align: center">
                                        <p class="card-text"><?php echo e($photo->photoable_type); ?></p>
                                        <div class="d-flex justify-content-between align-items-center">

                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php endif; ?>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div>

            </div>
        </div>

    </main>


    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/account/chooseModel.blade.php ENDPATH**/ ?>