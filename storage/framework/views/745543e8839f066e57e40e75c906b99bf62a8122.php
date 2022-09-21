<?php $__env->startSection('title','405'); ?>


<?php $__env->startSection('content'); ?>
    <section style="padding: 120px 0"id="add-recipient-form" class="wow fadeInUp" data-wow-delay=".2s" data-wow-offset="300">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-12 text-center">
                    <span class="display-1 d-block"><?php echo e(trans('405')); ?></span>
                    <div class="mb-4 lead"><?php echo e(trans("Method Not Allowed")); ?></div>
                    <a class="btn btn-primary " href="<?php echo e(url('/')); ?>" ><?php echo app('translator')->get('Back To Home'); ?></a>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/errors/405.blade.php ENDPATH**/ ?>