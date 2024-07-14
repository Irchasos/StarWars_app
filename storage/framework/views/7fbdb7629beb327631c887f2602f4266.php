<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            <?php if(isset($kind->photos) && count($kind->photos) > 0): ?>
                <?php $__currentLoopData = $kind->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e($photo->path); ?>" alt="" style="width: 600px; height: 800px; padding-bottom: 30px"/>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <img src="<?php echo e(asset('images/placeholders/kind.jpeg')); ?>" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            <?php endif; ?>
        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span><?php echo e($kind->name); ?></span> <?php echo e($kind->terrain); ?>  </span>
            </h4> <br> <br> <br>




           <p>Osoby z gatunku <?php echo e($kind->name); ?> to : <?php $__currentLoopData = $kind->characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <br>
                <?php echo e($character->name); ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></p>
        </div>
    </div>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/kinds/show.blade.php ENDPATH**/ ?>