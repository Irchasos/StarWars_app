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
            <th>Model</th>
            <th>Class</th>
            <th>Manufacturer</th>
            <th>Length</th>
            <th>Cost in credits</th>
            <th>Crew</th>
            <th>Passenger</th>
            <th>Max Atmosphering speed</th>
            <th>Cargo Capacity</th>
            <th>Consumables</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($vehicle->name); ?></td>
                <td><?php echo e($vehicle->model); ?></td>
                <td><?php echo e($vehicle->vehicle_class); ?></td>
                <td><?php echo e($vehicle->manufacturer); ?></td>
                <td><?php echo e($vehicle->length); ?></td>
                <td><?php echo e($vehicle->cost_in_credits); ?></td>
                <td><?php echo e($vehicle->crew); ?></td>
                <td><?php echo e($vehicle->passengers); ?></td>
                <td><?php echo e($vehicle->max_atmosphering_speed); ?></td>
                <td><?php echo e($vehicle->cargo_capacity); ?></td>
                <td><?php echo e($vehicle->consumables); ?></td>
                <td>
                    <a class="btn btn-info" href="<?php echo e(route('vehicles.show',$vehicle->id)); ?>"><i
                                class="fa-solid fa-face-grin-beam"></i></a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/vehicles/index.blade.php ENDPATH**/ ?>