<?php $__env->startSection('content'); ?>
    <?php if(Session::has('success')): ?>
        <div class="alert alert-success">
            <?php echo e(Session::get('success')); ?>

            <?php
                Session::forget('success')
            ?>
        </div>
    <?php endif; ?>
    <div class="row">

        <div class="col-md-3 right-grid">

            <img style="width: 700px; height: 800px; padding-bottom: 30px "
                 src="<?php echo e(asset('storage/eq/equipment.jpg')); ?>" alt="" title="">


        </div>

        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <table class="table table-bordered table-dark">
                        <thead>
                        <h3> <?php echo e($user->name); ?><?php echo e($user->credits); ?> with rank <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($role->name); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></h3>

                        <h3> My Equipment </h3>

                        <tr>

                            <th scope="col">Armor</th>
                            <th scope="col">LightSaber</th>
                            <th scope="col">CQC</th>
                            <th scope="col">Ordnance</th>
                            <th scope="col">Guns</th>
                            <th scope="col">Weapon</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $user->equipment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>


                                <?php if($item->type =='Armor'): ?>
                                    <td><?php echo e($item->name); ?></td>
                                <?php endif; ?>
                                <?php if($item->type =='LightSaber'): ?>
                                    <td><?php echo e($item->name); ?></td>
                                <?php endif; ?>
                                <?php if($item->type =='CQC'): ?>
                                    <td><?php echo e($item->name); ?></td>
                                <?php endif; ?>
                                <?php if($item->type =='Ordnance'): ?>
                                    <td><?php echo e($item->name); ?></td>
                                <?php endif; ?>
                                <?php if($item->type =='Weapon'): ?>
                                    <td><?php echo e($item->name); ?></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </tbody>
                    </table>
                    <a type="button" href="<?php echo e(route('store.index')); ?>"class="btn btn-lg btn-outline-success">Buy Equipment</a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/eq/my_eq.blade.php ENDPATH**/ ?>