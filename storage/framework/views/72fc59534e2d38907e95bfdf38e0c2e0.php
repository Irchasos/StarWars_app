<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

            <?php
                Session::forget('success')
            ?>
        </div>
    <?php endif; ?>
    <table class="table table-dark">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('make a character in base')): ?>
            <a class="btn btn-success" href="<?php echo e(route('starships.create')); ?>">create</a>
        <?php endif; ?>
        <thead>
        <tr>
            <th>Model</th>
            <th>Name</th>
            <th>Url</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $starships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $starship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($starship->model); ?></td>
                <td><?php echo e($starship->name); ?></td>
                <td><?php echo e($starship->url); ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('starships.show',$starship->id)); ?>">Show</a>

                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit character in base')): ?>
                        <form action="<?php echo e(route('starships.destroy',$starship->id)); ?>" method="POST">
                            <a class="btn btn-primary" href="<?php echo e(route('starships.edit',$starship->id)); ?>">Edit</a>
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/starships/index.blade.php ENDPATH**/ ?>