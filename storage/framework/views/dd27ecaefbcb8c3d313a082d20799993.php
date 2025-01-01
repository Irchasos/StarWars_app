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
        <thead>
        <tr>
            <th>Name</th>
            <th>Classification</th>
            <th>Designation</th>
            <th>Average Height</th>
            <th>Skin Colors</th>
            <th>Hair Colors</th>
            <th>Eye Colors</th>
            <th>Average Lifespan</th>
            <th>Language</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $kinds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($kind->name); ?></td>
                <td><?php echo e($kind->classification); ?></td>
                <td><?php echo e($kind->designation); ?></td>
                <td><?php echo e($kind->average_height); ?></td>
                <td><?php echo e($kind->skin_colors); ?></td>
                <td><?php echo e($kind->hair_colors); ?></td>
                <td><?php echo e($kind->eye_colors); ?></td>
                <td><?php echo e($kind->average_lifespan); ?></td>
                <td><?php echo e($kind->language); ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('kinds.show',$kind->id)); ?>"><i class="fa-solid fa-face-grin-beam"></i></a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/kinds/index.blade.php ENDPATH**/ ?>