<?php $__env->startSection('content'); ?>

<div class="container-fluid" style="padding-top: 20px">
    <div class="left-top col-md-6">
        <?php if(isset($starship->photos) && count($starship->photos) > 0): ?>
        <?php $__currentLoopData = $starship->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e($photo->path); ?>" alt="" style="width: 600px; height: 800px; padding-bottom: 30px" />
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <img src="<?php echo e(asset('images/placeholders/starship.jpg')); ?>" alt=""
            style="width: 600px; height: 600px; padding-bottom: 30px" />

        <?php endif; ?>


    </div>
    <div class="row" style="color:gold; text-align: center;">
       
            
                <h1>Create </h1>
        

        <form action="<?php echo e(route('starships.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control">
                        <?php if($errors->has('name')): ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Model</strong>
                        <input type="text" class="form-control" name="model">
                        <?php if($errors->has('model')): ?>
                        <span class="text-danger"><?php echo e($errors->first('model')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                
                

                
                
                
                
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>

    </div>

    <div class="clearfix"></div>
</div>
<hr>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/starships/create.blade.php ENDPATH**/ ?>