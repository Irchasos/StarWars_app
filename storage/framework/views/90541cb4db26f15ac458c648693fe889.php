<?php $__env->startSection('content'); ?>


    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            <?php if(isset($starship->photos) && count($starship->photos) > 0): ?>
                <?php $__currentLoopData = $starship->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e($photo->path); ?>" alt="" style="width: 600px; height: 800px; padding-bottom: 30px"/>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <img src="<?php echo e(asset('images/placeholders/starship.jpg')); ?>" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            <?php endif; ?>


        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center">
            <h4><span><?php echo e($starship->name); ?>   </span>
            </h4>
            <p >details:
            </p>

            <p>Model:<span><?php echo e($starship->model); ?></span><br></p>
            <p>  MGLT: <span><?php echo e($starship->MGLT); ?></span><br></p>
            <p>  Cargo Capacity: <span><?php echo e($starship->cargo_capacity); ?></span><br></p>
            <p>  Consumambles: <span><?php echo e($starship->consumables); ?></span><br></p>
            <p>   Cost in Credits: <span><?php echo e($starship->cost_in_credits); ?></span><br></p>
            <p>  Min-Max Crew: <span><?php echo e($starship->crew); ?></span><br>
            <p>  Hyperdrive: <span><?php echo e($starship->hyperdrive_rating); ?></span><br></p>
            <p>  Length:<span><?php echo e($starship->length); ?></span><br>
            <p>  Manufacturer: <span><?php echo e($starship->manufacturer); ?></span><br></p>
            <p>  Max speed in atmospher: <span><?php echo e($starship->max_atmosphering_speed); ?></span><br></p>
            <p> Class: <span><?php echo e($starship->starship_class); ?></span><br></p>

            <p>  Passenger: <span><?php echo e($starship->passengers); ?></span><br>         </p>
        </div>


        

    </div>


    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/starships/show.blade.php ENDPATH**/ ?>