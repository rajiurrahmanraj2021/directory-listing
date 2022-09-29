
<?php $__env->startSection('title',trans('Pricing')); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('Our Best Pricing'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

     <section class="pricing-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="header-text text-center mb-5">
                    <h2>packages</h2>
                    <p class="mx-auto">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit
                       id cupiditate. <br />
                       Repudiandae blanditiis ullam natus quas explicabo
                    </p>
                 </div>
              </div>
           </div>
           <div class="row gy-3 g-md-5">
               <?php $__currentLoopData = $Packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-4 col-md-6">
                     <div class="box">
                        <div class="icon-box">
                           <img src="<?php echo e(asset('assets/themes/deepblue/img/icon/online-shop.png')); ?>" alt="" />
                        </div>
                        <div class="text-box">
                           <h5><?php echo app('translator')->get($item->details->title); ?></h5>
                           <h3><?php echo e($item->expiry_time); ?> <?php echo e($item->expiry_time_type); ?></h3>
                           <ul>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Package
                                    expiry
                                 </span>
                                 <span class="float-end">365 Days</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Business
                                    Listing
                                 </span>
                                 <span class="float-end">1</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-times-circle"></i>About
                                    Company
                                 </span>
                                 <span class="float-end">No</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-times-circle"></i>Product List
                                 </span>
                                 <span class="float-end">No</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Category
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-times-circle"></i>Return &
                                    Refund Policy Company
                                 </span>
                                 <span class="float-end">No</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Brand
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Logo
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Price Range
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Package
                                    Currency
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                           </ul>
                           <button class="btn-custom">choose plan</button>
                        </div>
                     </div>
                  </div>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

           </div>
        </div>
        <img
           src="<?php echo e(asset('assets/themes/deepblue/img/rose-flower.png')); ?>"
           alt=""
           class="flower aos-init aos-animate"
           data-aos="fade-up"
           data-aos-duration="800"
           data-aos-anchor-placement="center-bottom"
        />
     </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/pricing.blade.php ENDPATH**/ ?>