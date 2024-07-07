<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('passport generate')): ?>
        <div class="container">
            <div class="form-body">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="card bg-dark text-white">
                            <div class="card-body">
                                <h3 class="card-title text-primary">Welcome to Legay Stay</h3>
                                <p class="card-text text-secondary">Please fill in the required information below.</p>
                                <form method="POST" action="<?php echo e(route('generatePassport')); ?>" class="requires-validation">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3">
                                        <label for="name" class="form-label text-white">Select a Character</label>
                                        <select name="name" class="form-select" required>
                                            <option selected disabled value="">Select a Character</option>
                                            <?php $__currentLoopData = $characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option
                                                        value='<?php echo e($character->name); ?> Born <?php echo e($character->birth_year); ?> From <?php echo e($character->planet->name); ?> By <?php echo e($character->kind->name); ?>'>
                                                    <?php echo e($character->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="text" class="form-label text-white">Items that have not passed border
                                            control</label>
                                        <input class="form-control" type="text" name="text"
                                               placeholder="Enter items that have not passed border control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="time" class="form-label text-white">Select Time of Stay</label>
                                        <select name="time" class="form-select" required>
                                            <option selected disabled value="">Select Time of Stay</option>
                                            <option value="1">24 hours</option>
                                            <option value="2">48 hours</option>
                                            <option value="999999">Unlimited</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="planet" class="form-label text-white">Select a Planet</label>
                                        <select class="form-select" required name="planet">
                                            <option selected disabled value="">Select a Planet</option>
                                            <?php $__currentLoopData = $planets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($planet->name); ?>"><?php echo e($planet->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label text-white">Select Type of Visit:</label>
                                        <div class="form-check text-white">
                                            <input value="Tourist" type="radio" class="form-check-input" name="type"
                                                   id="male" autocomplete="off" required>
                                            <label class="form-check-label" for="male">Tourist</label>
                                        </div>
                                        <div class="form-check text-white">
                                            <input value="Work" type="radio" class="form-check-input" name="type"
                                                   id="female" autocomplete="off" required>
                                            <label class="form-check-label" for="female">Work</label>
                                        </div>
                                        <div class="form-check text-white">
                                            <input value="Politic" type="radio" class="form-check-input" name="type"
                                                   id="secret" autocomplete="off" required>
                                            <label class="form-check-label" for="secret">Political</label>
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                               required>
                                        <label class="form-check-label text-white" for="invalidCheck">I confirm that all the provided data
                                            are correct</label>
                                    </div>
                                    <div class="text-center">
                                        <button id="submit" type="submit" class="btn btn-primary">Register</button>
                                    </div>
                                    <?php if($errors->any()): ?>
                                        <div class="alert alert-danger mt-3">
                                            <ul>
                                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->denies('passport generate')): ?>
        <div class="card bg-dark">
            <a href="<?php echo e(route('myAccount')); ?>" class="card-header text-center font-weight-bold text-danger">
                <h2>Your Access Level is Too Low</h2>
            </a>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/account/passport.blade.php ENDPATH**/ ?>