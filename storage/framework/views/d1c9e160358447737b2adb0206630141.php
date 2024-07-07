<?php $__env->startSection('content'); ?>

    <?php if(session('status')): ?>
        <div class="alert alert-success">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5" width="150px"
                         <?php if(!file_exists($user->avatar)): ?>
                             src="<?php echo e($user->avatar); ?>"
                    <?php else: ?>
                        <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

                    <?php endif; ?>


                    <span class="font-weight-bold"><?php echo e($user->name); ?><?php echo e($user->id); ?></span><span
                            class="text-black-50"><?php echo e($user->email); ?></span><span> </span>
                </div>
                <div class="card-header text-center font-weight-bold">
                    <h4>Uploading Image for your Avatar</h4>
                    <form method="POST" enctype="multipart/form-data" id="upload-image"
                          action="<?php echo e(route('avatar.uploaded')); ?>">
                        <?php echo csrf_field(); ?>
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


                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </form>
                </div>

            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3"><h4 class="text-right">
                            Profile
                            Settings</h4>
                    </div>
                    <form method="POST" action="<?php echo e(route('change.data')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Change Name</label>
                                <input type="text" name="new_name" class="form-control"
                                       placeholder="<?php echo e($user->name); ?>" value="<?php echo e($user->name); ?>">
                            </div>
                            <div class="col-md-12"><label class="labels">Change Password</label>
                                <input type="password" name="new_password" class="form-control" value="">
                            </div>
                            <div class="col-md-12"><label class="labels">Range</label>
                                <input type="text" disabled class="form-control" placeholder="Range"
                                       value=" <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php echo e($role->name); ?>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>">
                            </div>
                            <div class="col-md-12"><label class="labels">Chef name</label>
                                <input type="text" class="form-control" disabled placeholder="chef name" value="">
                            </div>

                            <div class="col-md-12"><label class="labels">Your tasks</label>
                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <input type="text" class="form-control" disabled
                                           placeholder="  <?php echo e($permission->name); ?>"
                                           value="">
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'Lieutenant|General|Imperator')): ?>
                    <div class="col-md-12"><label class="labels">Send message to your employers</label>
                        <input type="text" class="form-control" placeholder="" value="">
                    </div>
                    <br>
                    <?php endif; ?>
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'Lieutenant|General|Corporal')): ?>
                    <div class="col-md-12"><label class="labels">Send message to your boss</label>
                        <input type="text" class="form-control" placeholder="message to boss" value="">
                    </div>
                    <div class="col-md-12"><label for="story">Chef infos</label>
                        <textarea id="story" disabled name="story" rows="8"
                                  cols="33">It was a dark and stormy night...
                        </textarea>
                    </div>
                    <?php endif; ?>
                    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasAnyRole', 'Lieutenant|General|Imperator')): ?>
                    <div class="col-md-12"><label for="story">Raports</label>
                        <textarea id="story" disabled name="story" rows="8"
                                  cols="33">It was a dark and stormy night...
                        </textarea>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/account/profile.blade.php ENDPATH**/ ?>