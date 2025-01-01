<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

            <?php
                Session::forget('success')
            ?>
        </div>
    <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('make a character in base')): ?>
        <a class="btn btn-success" href="<?php echo e(route('planets.create')); ?>"><?php echo e(trans('planets_views.create')); ?></a>
    <?php endif; ?>

    <table class="table table-dark">
        <thead>
        <tr>
            <th><?php echo e(trans('planets_views.name')); ?></th>
            <th><?php echo e(trans('planets_views.terrain')); ?></th>
            <th><?php echo e(trans('planets_views.url2')); ?></th>
            <th><?php echo e(trans('planets_views.action')); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $planets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($planet->name); ?></td>
                <td><?php echo e($planet->terrain); ?></td>
                <td><?php echo e($planet->url); ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('planets.show',$planet->id)); ?>"><?php echo e(trans('planets_views.show')); ?></a>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit character in base')): ?>
                        <form action="<?php echo e(route('planets.destroy',$planet->id)); ?>" method="POST">
                            <a class="btn btn-primary" href="<?php echo e(route('planets.edit',$planet->id)); ?>"><?php echo e(trans('planets_views.edit')); ?></a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger"><?php echo e(trans('planets_views.delete')); ?></button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/planets/index.blade.php ENDPATH**/ ?>