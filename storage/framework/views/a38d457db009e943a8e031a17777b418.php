<?php $__env->startSection('content'); ?>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="col-md-4">
            Welcome <?php echo e($user->name); ?>

            Its your reports ::

        </div>
    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <div style="padding-left: 5px">



        <table class="table table-dark">



                <thead>
                <tr>
                    <th>From </th>
                    <th>Date incomming </th>

                    <th>Message </th>
                    <th>action</th>

                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td><?php echo e($message->employer_id); ?> </td>
                        <td>         ewe2
                        </td>
                        <td> <?php echo e($message->message); ?> </td>
                        <td>DELETE </td>


                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
        </table>



        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/account/reports.blade.php ENDPATH**/ ?>