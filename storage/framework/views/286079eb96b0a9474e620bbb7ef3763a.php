<?php $__env->startSection('content'); ?>
<div class="about-section" id="aboutus"><!--King Of The North Section-->

    <div class="about-grids">

        <div class="col-md-6 left-grid">

            <div class="right-grid1-icon">
            </div>
            <img src="<?php echo e(asset('images/planet.jpeg')); ?>" /><!--Put your Right Image HERE-->
        </div>
        <div class="col-md-6 right-grid">
            <div class="right-top">
                <ul class="nav navbar-nav top">
                    <li><a href="<?php echo e(route('planets')); ?>">View All planets</a></li>
                    <li>
                        <h1>Create </h1>
                    </li>
                </ul>

                <form action="<?php echo e(route('planets.store')); ?>" method="POST">
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
                                <strong>Terrain</strong>
                                <input type="text" class="form-control" name="terrain">
                                <?php if($errors->has('terrain')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('terrain')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">

                                <input type="hidden" class="form-control" value="https://swapi.py4e.com/api/planets/"
                                    name="url">
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
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/planets/create.blade.php ENDPATH**/ ?>