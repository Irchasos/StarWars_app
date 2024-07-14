<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

            <?php
                Session::forget('success')
            ?>
        </div>
    <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-secondary">
                        <div class="row">
                            <div class="col-md-6">
                                <h3><?php echo e(trans('characters_views.characters_list')); ?></h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('make a character in base')): ?>
                                    <a class="btn btn-dark" href="<?php echo e(route('characters.create')); ?>"><?php echo e(trans('characters_views.create')); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form action="<?php echo e(route('characters')); ?>" method="GET" role="search">
                                    <div class="input-group col-md-12 ">
                                        <input style="width: 40%" value="<?php echo e(Request::get('term')); ?>" type="text" class="form-control" name="term" placeholder="<?php echo e(trans('characters_views.all_of_characters_or_type_and_searchenter')); ?>" id="term">
                                        <input style="width: 40%" value="<?php echo e(Request::get('homeworld')); ?>" type="text" class="form-control" name="homeworld" placeholder="<?php echo e(trans('characters_views.homeworld')); ?>" id="homeworld">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit"><?php echo e(trans('characters_views.search')); ?></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped table-dark">
                                <thead>
                                <tr>
                                    <th><?php echo e(trans('characters_views.name')); ?></th>
                                    <th><?php echo e(trans('characters_views.homeworld2')); ?></th>
                                    <th><?php echo e(trans('characters_views.kind2')); ?></th>
                                    <th><?php echo e(trans('characters_views.starships')); ?></th>
                                    <th><?php echo e(trans('characters_views.vehicles')); ?></th>
                                    <th><?php echo e(trans('characters_views.films')); ?></th>
                                    <th><?php echo e(trans('characters_views.action')); ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($character->name); ?> </td>
                                        <td><a href="planets/<?php echo e($character->planet->id); ?>"><?php echo e($character->planet->name); ?></a></td>
                                        <td><a href="kinds/<?php echo e($character->kind->id); ?>"><?php echo e($character->kind->name); ?></a></td>
                                        <td>
                                            <?php $__currentLoopData = $character->starships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $starship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="starships/<?php echo e($starship->id); ?>"><?php echo e($starship->name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $character->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="vehicles/<?php echo e($vehicle->id); ?>"><?php echo e($vehicle->name); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $character->films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="films/<?php echo e($film->id); ?>"><?php echo e($film->title); ?></a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-block btn-secondary" href="<?php echo e(route('characters.show',$character->id)); ?>"><i class="fa-solid fa-face-grin-beam"> </i></a>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit character in base')): ?>
                                                <form action="<?php echo e(route('characters.destroy',$character->id)); ?>" method="POST">
                                                    <a class="btn btn-block btn-info" href="<?php echo e(route('characters.edit',$character->id)); ?>"><i class="fa-solid fa-user-pen"></i></a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-block btn-danger"><i class="fa-solid fa-person-falling-burst"></i></button>
                                                </form>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo e($characters->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/characters/index.blade.php ENDPATH**/ ?>