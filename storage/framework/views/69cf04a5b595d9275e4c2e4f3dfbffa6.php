<?php $__env->startSection('content'); ?>
    <div class="row">
        <img src="https://drive.proton.me/2a97b205-8c23-4776-a36f-4b822eb59a9c" alt="Your Image">

        <div class="col-md-3 right-grid">
            <?php $__currentLoopData = $film->trailers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trailer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <iframe style="padding: 50px" width="700" height="600" src="<?php echo e($trailer->path); ?>" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $film->photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <img src="<?php echo e($photo->path); ?>" alt=""
                     style="width: 400px; height: 500px; padding-bottom: 30px "/>>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!--Put your Right Image HERE-->
        </div>


        <div class="col-md-9 right-grid" style="text-align: right ">
            <div class="right-top">

                <div class="right-bottom">

                    <h3><span><?php echo e($film->title); ?></span> -Episode<?php echo e($film->episode_id); ?></h3>

                    <p><?php echo e($film->opening_crawl); ?></p>

                    <p class="lable1"> Director: <?php echo e($film->director); ?> <br></br>Producer: <?php echo e($film->producer); ?><br>

                    <p class="lable1"> Osoby pojawiające się w filmie to : <?php $__currentLoopData = $film->characters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $character): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <br>
                    <?php echo e($character->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <p class="lable1"> Statki pojawiające się w filmie to : <?php $__currentLoopData = $film->starships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $starship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <br>
                    <?php echo e($starship->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <p class="lable1"> Planety pojawiające się w filmie to : <?php $__currentLoopData = $film->planets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $planet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <br>
                            <?php echo e($planet->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                    <p class="lable1"> Pojazdy pojawiające się w filmie to : <?php $__currentLoopData = $film->vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <br>
                    <?php echo e($vehicle->name); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <p class="lable1"> Gatunki pojawiające się w filmie to : <?php $__currentLoopData = $film->kinds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kind): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <br>
                            <?php echo e($kind->name); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </p>
                </div>
                <div class="right-bottom">
                    <h4>Release Date : <?php echo e($film->release_date); ?></h4>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/films/show.blade.php ENDPATH**/ ?>