<?php $__env->startSection('content'); ?>
<div class="row">

    <div class="col-md-3 right-grid">
        <img src="<?php echo e(asset('images/millennium-falcon.jpg')); ?>" style="width: 700px; height: 800px " />

        <!--Put your Right Image HERE-->
    </div>

    <div class="col-md-9 right-grid" style="text-align: center ">
        <div class="right-top">

            <div class="right-bottom " style="color: gold ">

                
                <h2>Edit <?php echo e($starship->name); ?></h2>
                <form action="<?php echo e(route('starships.update',$starship->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="<?php echo e($starship->name); ?>">
                                <?php if($errors->has('name')): ?>
                                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Model</strong>
                                <input type="text" class="form-control" placeholder="<?php echo e($starship->model); ?>" name="model">
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
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/starships/edit.blade.php ENDPATH**/ ?>