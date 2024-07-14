<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add photo to items')): ?>
        <div class="container mt-5">

            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <div class="card bg-dark text-white">
                <div class="card-header text-center font-weight-bold">
                    <h2>Uploading Image for <?php echo e(request()->parameter); ?></h2>
                </div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="upload-image" action="<?php echo e(route('image.uploaded')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="image" placeholder="Choose image" id="image">
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="form-group">
                                    <strong>Type: <?php echo e($model); ?></strong>
                                    <input type="text" name="photoable_type" hidden value="App\Models\<?php echo e($model); ?>" class="form-control" style="background-color: #2b2a2a">
                                    <?php if($errors->has('photoable_type')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('photoable_type')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <strong>Record:</strong>
                                <select style="color: black" name="photoable_id" required>
                                    <option selected disabled>Choose Record</option>
                                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option style="background-color: grey" value="<?php echo e($record->id); ?>">
                                            <?php echo e($record->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('add photo to items')): ?>
        <div class="card bg-dark">
            <a href="<?php echo e(route('myAccount')); ?>" class="card-header text-center font-weight-bold text-white">
                <h2>Your range is too low</h2>
            </a>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/account/imageUpload.blade.php ENDPATH**/ ?>