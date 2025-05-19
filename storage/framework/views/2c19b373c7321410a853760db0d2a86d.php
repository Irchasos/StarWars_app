<?php $__env->startSection('content'); ?>
    <div class="container-fluid" style="padding-top: 20px">
        <div class="left-top col-md-6">
            <?php if(isset($character->photos) && count($character->photos) > 0): ?>
            <img src="<?php echo e($character->photo); ?>" alt="" style="width: 400px; height: 500; padding-bottom: 30px" />
            <?php $__currentLoopData = $character->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($photo->path); ?>" alt="" style="width: 400px; height: 500; padding-bottom: 30px" />
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <img src="<?php echo e(asset('images/placeholders/character.jpg')); ?>" alt=""
                     style="width: 600px; height: 600px; padding-bottom: 30px"/>

            <?php endif; ?>
        </div>
        <div class="right-bottom right-top col-md-14 right-grid" style="text-align: center; color: gold;">
            <div class="right-top"><h3><span><?php echo e($character->name); ?></span><br> from <?php echo e($character->planet->name); ?></h3>


                <a class="btn btn-secondary"
                   href="<?php echo e(route('characters')); ?>"><?php echo e(trans('characters_views.view_all_characters')); ?></a>


                <p class="lable1"><?php echo e(trans('characters_views.details_of_character')); ?>:
                </p>


                <form action="<?php echo e(route('characters.update',$character->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><?php echo e(trans('characters_views.name')); ?>:</strong>
                                <input type="text" name="name" value="<?php echo e($character->name); ?>" class="form-control"
                                       placeholder="Name">
                                <?php if($errors->has('name')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><?php echo e(trans('characters_views.homeworld')); ?>:</strong>
                                <select class="form-select" name="homeworld" aria-label="Default select example">
                                    <option selected><?php echo e(trans('characters_views.before')); ?>

                                        :<?php echo e($character->planet->name); ?></option>
                                    <?php $__currentLoopData = $planets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($planet->id); ?>"><?php echo e($planet->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('homeworld')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('homeworld')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><?php echo e(trans('characters_views.gender')); ?>:</strong>
                                <input type="text" name="gender" value="<?php echo e($character->gender); ?>"
                                       class="form-control" placeholder="<?php echo e($character->gender); ?>">
                                <?php if($errors->has('gender')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('gender')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><?php echo e(trans('characters_views.hair_color')); ?>:</strong>
                                <input type="text" name="hair_color" value="<?php echo e($character->hair_color); ?>"
                                       class="form-control" placeholder="<?php echo e($character->hair_color); ?>">
                                <?php if($errors->has('hair_color')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('hair_color')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><?php echo e(trans('characters_views.height')); ?>:</strong>
                                <input type="text" name="height" value="<?php echo e($character->height); ?>"
                                       class="form-control" placeholder="<?php echo e($character->height); ?>">
                                <?php if($errors->has('height')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('height')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong><?php echo e(trans('characters_views.mass')); ?>:</strong>
                                <input type="text" name="mass" value="<?php echo e($character->mass); ?>" class="form-control"
                                       placeholder="<?php echo e($character->mass); ?>">
                                <?php if($errors->has('mass')): ?>
                                    <span class="text-danger"><?php echo e($errors->first('mass')); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group ">
                            <strong><?php echo e(trans('characters_views.starships')); ?>:</strong>
                            <select id='myselect' multiple class="form-control" name="starships[]"
                                    aria-label="Default select example">
                                <?php $__currentLoopData = $starships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $starship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($starship->id); ?>"><?php echo e($starship->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('starships')): ?>
                                <span class="text-danger"><?php echo e($errors->first('starships')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('characters_views.submit')); ?></button>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <script>
        $('#myselect').select2({
            width: '78%',
            placeholder: "Select an Option",
            allowClear: true,
            multiple: true,
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/characters/edit.blade.php ENDPATH**/ ?>