<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="padding-top: 20px">
        <div class="row">
            <div class="col-md-6 col-12">
                <?php if(isset($planet->photos) && count($planet->photos) > 0): ?>
                    <?php $__currentLoopData = $planet->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e($photo->path); ?>" alt="" class="img-fluid" style="padding-bottom: 30px"/>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <img src="<?php echo e(asset('images/placeholders/planet.jpg')); ?>" alt="" class="img-fluid" style="padding-bottom: 30px"/>
                <?php endif; ?>
            </div>
            <div class="col-md-6 col-12" style="text-align: center">
                <h4>
                    <span><?php echo e($planet->name); ?></span> <?php echo e($planet->terrain); ?>

                </h4>
                <br>
                <br>
                <br>
                <p><?php echo e(trans('planets_views.characters_from', ['name' => $planet->name])); ?></p>
                <br>
                <?php $__currentLoopData = $planet->characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p><?php echo e($character->name); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/planets/show.blade.php ENDPATH**/ ?>