<?php $__env->startSection('content'); ?>
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('login.custom')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                           required
                                           autofocus>
                                    <?php if($errors->has('email')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    <?php if($errors->has('password')): ?>
                                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Sign In</button>
                                    <br>
                                    <a href="sign-in/github" type="submit" class="btn btn-dark btn-block">Have you
                                        account on <i class="fa-brands fa-github"></i></a>
                                    <a href="sign-in/google" type="submit" class="btn btn-dark btn-block">Log in with <i
                                                class="fa-brands fa-google"></i></a>
                                    <a href="sign-in/facebook" type="submit" class="btn btn-dark btn-block">Use account
                                        from <i class="fa-brands fa-facebook"></i></a>
                                    <a href="sign-in/twitter" type="submit" class="btn btn-dark btn-block">Try connect
                                        with <i class="fa-brands fa-twitter"></i></a>
                                    <a href="sign-in/slack" type="submit" class="btn btn-dark btn-block">Or use <i
                                                class="fa-brands fa-slack"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/auth/login.blade.php ENDPATH**/ ?>