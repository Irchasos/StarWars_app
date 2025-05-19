<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

            <?php
                Session::forget('success')
            ?>
        </div>
    <?php endif; ?>

    <div class="col-md-6 right-grid">
        <div class="right-top">

            <button class="btn btn btn-lg btn-warning"><a href="<?php echo e(route('characters')); ?>"><?php echo e(trans('auth.view_all_characters')); ?> </a><i
                        class="fa-solid fa-person-chalkboard"></i></button>
            <h1><?php echo e(trans('auth.here_you_can_create_a_new_hero_for_your_story')); ?> </h1>

            <form action="<?php echo e(route('characters.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.name2')); ?></strong>
                            <input type="text" name="name" class="form-control">
                            <?php if($errors->has('name')): ?>
                                <span
                                        class="text-danger"><?php echo e($errors->first('name')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xs-10 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.kind')); ?></strong>
                            <select class="form-select" name="kind" aria-label="<?php echo e(trans('auth.default_select_example')); ?>">
                                <?php $__currentLoopData = $kinds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($kind->id); ?>"><?php echo e($kind->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('kind')): ?>
                                <span class="text-danger"><?php echo e($errors->first('kind')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="col-xs-10 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.homeworld')); ?></strong>
                            <select class="form-select" name="homeworld" aria-label="<?php echo e(trans('auth.default_select_example')); ?>">
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
                            <strong><?php echo e(trans('auth.gender')); ?></strong>
                            <input type="text" name="gender" class="form-control">
                            <?php if($errors->has('gender')): ?>
                                <span class="text-danger"><?php echo e($errors->first('gender')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.hair_color')); ?></strong>
                            <input type="text" name="hair_color" class="form-control">
                        </div>
                        <?php if($errors->has('hair_color')): ?>
                            <span class="text-danger"><?php echo e($errors->first('hair_color')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.birth')); ?></strong>
                            <input type="text" name="birth_year" class="form-control">
                        </div>
                        <?php if($errors->has('birth_year')): ?>
                            <span class="text-danger"><?php echo e($errors->first('birth_year')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.eye_color')); ?></strong>
                            <input type="text" name="eye_color" class="form-control">
                        </div>
                        <?php if($errors->has('eye_color')): ?>
                            <span class="text-danger"><?php echo e($errors->first('eye_color')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.skin_color')); ?></strong>
                            <input type="text" name="skin_color" class="form-control">
                        </div>
                        <?php if($errors->has('skin_color')): ?>
                            <span class="text-danger"><?php echo e($errors->first('skin_color')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.height')); ?></strong>
                            <input type="text" name="height" class="form-control">
                        </div>
                        <?php if($errors->has('height')): ?>
                            <span class="text-danger"><?php echo e($errors->first('height')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong><?php echo e(trans('auth.mass')); ?></strong>
                            <input type="text" name="mass" class="form-control">
                            <?php if($errors->has('mass')): ?>
                                <span
                                        class="text-danger"><?php echo e($errors->first('mass')); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong><?php echo e(trans('auth.starship')); ?></strong>
                        <select id='myselect' multiple class="form-select" name="starships[]"
                                aria-label="<?php echo e(trans('auth.default_select_example')); ?>">
                            <?php $__currentLoopData = $starships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $starship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($starship->id); ?>"><?php echo e($starship->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php if($errors->has('starships')): ?>
                            <span class="text-danger"><?php echo e($errors->first('starships')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-lg btn-primary"><i class="fa-regular fa-floppy-disk"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>

    <script>
        $('#myselect').select2({
            width: '100%',
            placeholder: "Select an Option",
            allowClear: true,
            multiple: true,
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/characters/create.blade.php ENDPATH**/ ?>