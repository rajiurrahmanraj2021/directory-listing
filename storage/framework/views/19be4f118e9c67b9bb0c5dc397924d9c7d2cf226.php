<?php if(!request()->routeIs('home')): ?>
    <section class="banner-section">
        <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header-text text-center">
                    <h3><?php echo $__env->yieldContent('banner_heading'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\directory-listing\resources\views/themes/deepblue/partials/banner_section.blade.php ENDPATH**/ ?>