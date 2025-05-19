<!-- Language  Navbar position items  -->
<a  class="dropdown-toggle" style="float: right; padding-right: 100px; text-decoration: none; color:#f0ad4e" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
   aria-haspopup="true" aria-expanded="false">
    <?php echo e(Config::get('languages')[App::getLocale()]['display']); ?>

    <i class="fas fa-<?php echo e(Config::get('languages')[App::getLocale()]['flag-icon']); ?>"></i>
</a>
<div class="dropdown-menu" style="background:transparent" aria-labelledby="navbarDropdownMenuLink">
    <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($lang != App::getLocale()): ?>
            <a style=" text-decoration: none; color:#f0ad4e" href="<?php echo e(route('lang.switch', $lang)); ?>"><?php echo e($language['display']); ?></a>
            <i class="fas fa-<?php echo e($language['flag-icon']); ?> fa-lg" style="color: #941010;"></i>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<!-- login register position  -->
<nav>
    <ul>

        <?php if(auth()->guard()->guest()): ?>

            <li class="nav-item">
                <a  href="<?php echo e(route('login')); ?>"><?php echo e(trans('mainpage.login')); ?></a>
            </li>
            <li class="nav-item">
                <a  href="<?php echo e(route('register-user')); ?>"><?php echo e(trans('mainpage.register')); ?></a>
            </li>

        <?php endif; ?>
    </ul>
</nav>

<!-- user option navbar posiition position  -->
<nav>
    <ul>
        <?php if(auth()->guard()->check()): ?>

            <li><a class="dropdown-item" href="<?php echo e(route('myAccount')); ?>"> <i class="fa-solid fa-user"></i>
                    <?php echo e(trans('mainpage.my_account')); ?></a>
            </li>
            <li><a class="dropdown-item" href="<?php echo e(route('myEq')); ?>"> <i class="fa-solid fa-user"></i>
                    <?php echo e(trans('mainpage.equipment')); ?></a>
            </li>
            <li><a class="dropdown-item" href="<?php echo e(route('passport')); ?>"><i class="fa-solid fa-file-pdf"></i>
                    <?php echo e(trans('mainpage.passport')); ?></a>
            </li>
            <li><a class="dropdown-item" href="<?php echo e(route('image.choose')); ?>"><i class="fa-solid fa-images"></i>
                    <?php echo e(trans('mainpage.add_photo')); ?></a>
            </li>
            <li><a class="dropdown-item" href="<?php echo e(route('image.cancel')); ?>"> <i class="fa-solid fa-folder-minus"></i>
                    <?php echo e(trans('mainpage.cancel_photo')); ?> </a>
            </li>
            <li><a class="dropdown-item" href="<?php echo e(route('signout')); ?>"> <i class="fa-solid fa-lock"></i>
                    <?php echo e(trans('mainpage.logout')); ?> </a>
            </li>
            </li>
        <?php endif; ?>
    </ul>


</nav>

<!-- main option navbar posiition position  -->
<div class="header" id="head">
    <nav>
        <ul>
            <li><a href="<?php echo e(route('index')); ?>" class="active"><?php echo e(trans('mainpage.home')); ?></a></li>
            <li><a href="<?php echo e(route('characters')); ?>" class="scroll"><?php echo e(__('mainpage.characters')); ?></a></li>
            <li><a href="<?php echo e(route('starships')); ?>" class="scroll"><?php echo e(trans('mainpage.starships')); ?></a></li>
            <li><a href="<?php echo e(route('planets')); ?>" class="scroll"><?php echo e(trans('mainpage.planets')); ?></a></li>
            <li><a href="<?php echo e(route('kinds')); ?>" class="scroll"><?php echo e(trans('mainpage.kinds')); ?></a></li>
            <li><a href="<?php echo e(route('vehicles')); ?>" class="scroll"><?php echo e(trans('mainpage.vehicles')); ?></a></li>
            <li><a href="<?php echo e(route('films')); ?>" class="scroll"><?php echo e(trans('mainpage.films')); ?></a></li>
        </ul>
    </nav>

</div>
</div><?php /**PATH /home/arek/PhpstormProjects/StarWars_app/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>