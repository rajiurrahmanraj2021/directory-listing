<?php $__env->startSection('title','404'); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('404'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="not-found">
        <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col">
                <div class="text-box text-center">
                    <img src="./img/404.svg" alt="" />
                    <h1>Oops!</h1>
                    <p>We can't seem to find the page you are looking for</p>
                    <a href="<?php echo e(route('home')); ?>">back to home</a>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/errors/404.blade.php ENDPATH**/ ?>