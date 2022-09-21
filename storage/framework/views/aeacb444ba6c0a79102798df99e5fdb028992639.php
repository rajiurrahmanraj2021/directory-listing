<?php if(isset($templates['testimonial'][0]) && $testimonial = $templates['testimonial'][0]): ?>

    <!-- testimonial section -->
     <section class="testimonial-section">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="header-text text-center mb-5">
                    <h3>
                        <?php echo app('translator')->get(@$testimonial->description->title); ?>
                     </h3>
                    <p class="mx-auto">
                        <?php echo app('translator')->get(@$testimonial->description->sub_title); ?>
                    </p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-12">
                 <div class="testimonials owl-carousel">
                  <?php if(isset($contentDetails['testimonial'])): ?>
                     <?php $__currentLoopData = $contentDetails['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="review-box">
                           <div class="upper">
                              <div class="img-box">
                                 <img src="<?php echo e(getFile(config('location.content.path').@$data->content->contentMedia->description->image)); ?>" alt="<?php echo app('translator')->get('not found'); ?>" />
                              </div>
                              <div class="client-info">
                                 <h5><?php echo app('translator')->get(@$data->description->name); ?></h5>
                                 <span><?php echo e(@$data->description->designation); ?></span>
                              </div>
                           </div>
                           <p class="mb-0">
                              <?php echo app('translator')->get(@$data->description->description); ?>
                           </p>
                           <i class="fad fa-quote-right quote"></i>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php endif; ?>
                 </div>
              </div>
           </div>
        </div>
     </section>

<?php endif; ?>








<?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/sections/testimonial.blade.php ENDPATH**/ ?>