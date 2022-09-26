<?php $__currentLoopData = $listingCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <div class="col-lg-3 col-md-4 col-6">
        <a href="" class="category-btn">
        <i class="<?php echo e($category->icon); ?>" aria-hidden="true"></i>
        <?php echo app('translator')->get(optional(@$category->details)->name); ?> (9)
        </a>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/includes/listing/category.blade.php ENDPATH**/ ?>