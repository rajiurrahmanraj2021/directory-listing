
<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Pricing List'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">

        <div class="card-body">

            <div class="media mb-4 float-right">
                <a href="<?php echo e(route('admin.pricingCreate')); ?>" class="btn btn-sm btn-primary mr-2">
                    <span><i class="fa fa-plus-circle"></i> <?php echo app('translator')->get('Add New'); ?></span>
                </a>
            </div>


            
        </div>
    </div>



    <!-- Delete Modal -->
    <div id="delete-modal" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="primary-header-modalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header modal-colored-header bg-primary">
                   <h4 class="modal-title" id="primary-header-modalLabel"><?php echo app('translator')->get('Delete Confirmation'); ?>
                   </h4>
                   <button type="button" class="close" data-dismiss="modal"
                           aria-hidden="true">×
                   </button>
               </div>
               <div class="modal-body">
                   <p><?php echo app('translator')->get('Are you sure to delete this?'); ?></p>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-light"
                           data-dismiss="modal"><?php echo app('translator')->get('Close'); ?></button>
                   <form action="" method="post" class="deleteRoute">
                       <?php echo csrf_field(); ?>
                       <?php echo method_field('delete'); ?>
                       <button type="submit" class="btn btn-primary"><?php echo app('translator')->get('Yes'); ?></button>
                   </form>
               </div>
           </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

<?php $__env->stopSection(); ?>
<?php $__env->startPush('style-lib'); ?>
    <link href="<?php echo e(asset('assets/admin/css/dataTables.bootstrap4.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('assets/admin/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/admin/js/datatable-basic.init.js')); ?>"></script>


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

    <script>
        'use strict'
        $(document).ready(function () {
            $('.notiflix-confirm').on('click', function () {
                var route = $(this).data('route');
                $('.deleteRoute').attr('action', route)
            })
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/admin/pricing/index.blade.php ENDPATH**/ ?>