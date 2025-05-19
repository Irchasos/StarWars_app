<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-4">
            <img src="<?php echo e($character->photo); ?>" alt="" style="width: 400px; height: 500; padding-bottom: 30px" />
            <?php $__currentLoopData = $character->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($photo->path); ?>" alt="" style="width: 400px; height: 500; padding-bottom: 30px" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align:right">
            <h4><span><?php echo e($character->name); ?> <?php echo e(trans('characters_views.from')); ?> <?php echo e($character->planet->name); ?></span>
            </h4>
            <p class="lable1"><?php echo e(trans('characters_views.details_of_character')); ?>:
            </p>
            <p><?php echo e(trans('characters_views.kind')); ?> :<?php echo e(($character->kind->name)); ?><br></p>
            <p><?php echo e(trans('characters_views.gender')); ?> :<?php echo e($character->gender); ?></p>
            <p><?php echo e(trans('characters_views.height')); ?> :<?php echo e($character->height); ?></p>
            <p><?php echo e(trans('characters_views.mass')); ?> :<?php echo e($character->mass); ?></p>
            <p><?php echo e(trans('characters_views.hair_color')); ?> :<?php echo e($character->hair_color); ?></p>
            <p><?php echo e(trans('characters_views.starships_list')); ?> :
                <?php $__currentLoopData = $character->starships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $starship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php echo e($starship->name); ?>|
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        </div>
        <h4><?php echo e($character->description); ?>

        </h4>
    </div>
    <hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/characters/show.blade.php ENDPATH**/ ?>