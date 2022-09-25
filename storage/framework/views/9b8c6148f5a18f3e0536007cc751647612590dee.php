<?php $__env->startSection('title','Reset Password'); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('Recover Password'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="login-section">
        <div class="overlay h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-md-6 offset-3 col-12">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
                            <?php echo e(trans(session('status'))); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="form-wrapper d-flex align-items-center h-100">
                    
                    <form action="<?php echo e(route('password.email')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row g-4">
                            <div class="col-12">
                                <h4><?php echo app('translator')->get('Recover password'); ?></h4>
                            </div>
                            <div class="input-box col-12">
                                <input
                                type="email"
                                autocomplete="off"
                                name="email"
                                class="form-control"
                                value="<?php echo e(old('email')); ?>"
                                placeholder="<?php echo app('translator')->get('Enter Your Email address'); ?>"
                                />
                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><span class="text-danger mt-1"><?php echo e(trans($message)); ?></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <button class="btn-custom w-100 mt-4"><?php echo app('translator')->get('submit'); ?></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/auth/passwords/email.blade.php ENDPATH**/ ?>