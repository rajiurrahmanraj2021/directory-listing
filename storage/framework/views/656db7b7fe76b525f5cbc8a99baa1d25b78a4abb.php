<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get($title); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('banner_heading'); ?>
    <?php echo app('translator')->get($title); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- POLICY -->
    <section style="padding: 120px 0"id="policy">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="heading-container">
                        <h3 class="heading text-center"><?php echo app('translator')->get(@$title); ?></h3>
                    </div>
                </div>
            </div>

            <div class="policy wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
                <?php echo app('translator')->get(@$description); ?>
            </div>
        </div>
    </section>
    <!-- /POLICY -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/getLink.blade.php ENDPATH**/ ?>