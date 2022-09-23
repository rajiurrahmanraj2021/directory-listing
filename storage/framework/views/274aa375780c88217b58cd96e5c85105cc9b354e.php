

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Create Blog Category'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            <div class="media mb-4 justify-content-end">
                <a href="<?php echo e(route('admin.blogCategory')); ?>" class="btn btn-sm  btn-primary mr-2">
                    <span><i class="fas fa-arrow-left"></i> <?php echo app('translator')->get('Back'); ?></span>
                </a>
            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e($loop->first ? 'active' : ''); ?>" data-toggle="tab" href="#lang-tab-<?php echo e($key); ?>" role="tab" aria-controls="lang-tab-<?php echo e($key); ?>"
                           aria-selected="<?php echo e($loop->first ? 'true' : 'false'); ?>"><?php echo app('translator')->get($language->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <div class="tab-content mt-2" id="myTabContent">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="tab-pane fade <?php echo e($loop->first ? 'show active' : ''); ?>" id="lang-tab-<?php echo e($key); ?>" role="tabpanel">
                        <form method="post" action="<?php echo e(route('admin.blogCategoryStore', $language->id)); ?>" class="mt-4" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label for="name"> <?php echo app('translator')->get('Category Name'); ?> </label>
                                    <input type="text" name="name[<?php echo e($language->id); ?>]"
                                            class="form-control  <?php $__errorArgs = ['name'.'.'.$language->id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(old('name'.'.'.$language->id)); ?>">
                                    <div class="invalid-feedback">
                                        <?php $__errorArgs = ['name'.'.'.$language->id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="valid-feedback"></div>
                                </div>
                            </div>

                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3"><?php echo app('translator')->get('Save'); ?></button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/summernote.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js-lib'); ?>
    <script src="<?php echo e(asset('assets/admin/js/summernote.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('js'); ?>
 
    <?php if($errors->any()): ?>
        <?php
            $collection = collect($errors->all());
            $errors = $collection->unique();
        ?>
        <script>
            "use strict";
            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            Notiflix.Notify.Failure("<?php echo e(trans($error)); ?>");
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </script>
    <?php endif; ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\directory-listing\resources\views/admin/blog/blogCategoryCreate.blade.php ENDPATH**/ ?>