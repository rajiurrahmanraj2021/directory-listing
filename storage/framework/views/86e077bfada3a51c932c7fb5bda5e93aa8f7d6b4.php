
<?php $__env->startSection('title',trans('Blog Details')); ?>

<?php $__env->startSection('content'); ?>

     <!-- blog section -->
     <section class="blog-section blog-page">
        <div class="container">
           <div class="row g-lg-5">
              <div class="col-lg-8">
                 <div class="blog-box">
                    <div class="img-box">
                       <img
                          class="img-fluid"
                          src="<?php echo e(getFile(config('location.blog.path'). @$singleBlog->image)); ?>"
                          alt=""
                       />
                       <span class="category"><?php echo app('translator')->get($blogCategory->name); ?></span>
                    </div>
                    <div class="text-box">
                       <div class="date-author mb-3">
                          <span class="author">
                             <i class="fad fa-pencil"></i><?php echo app('translator')->get($singleBlog->details->author); ?>
                          </span>
                          <span class="float-end">
                             <i
                                class="fad fa-calendar-alt"
                                aria-hidden="true"
                             ></i
                             ><?php echo e(dateTime(@$blog->created_at, 'M d, Y')); ?>

                          </span>
                       </div>
                       <a href="blog-details.html" class="title"
                          ><?php echo app('translator')->get($singleBlog->details->title); ?>
                       </a>
                       <p>
                        <?php echo app('translator')->get($singleBlog->details->details); ?>
                       </p>
                    </div>
                 </div>
              </div>
              <div class="col-lg-4">
                 <div class="right-bar">
                    <div class="side-box">
                       <h4>Related Posts</h4>
                       <div class="blog-box">
                          <div class="img-box">
                             <img
                                class="img-fluid"
                                src="<?php echo e(asset('assets/themes/deepblue/img/blog/blog-3.jpg')); ?>"
                                alt=""
                             />
                             <span class="category">Drink &amp; Food</span>
                          </div>
                          <div class="text-box">
                             <a href="blog-details.html" class="title"
                                >Best Luxury Switzerland Tours &amp; Travel
                                Packages
                             </a>
                          </div>
                       </div>
                       <div class="blog-box">
                          <div class="img-box">
                             <img
                                class="img-fluid"
                                src="<?php echo e(asset('assets/themes/deepblue/img/blog/blog-2.jpg')); ?>"
                                alt=""
                             />
                             <span class="category">Drink &amp; Food</span>
                          </div>
                          <div class="text-box">
                             <a href="blog-details.html" class="title"
                                >Best Luxury Switzerland Tours &amp; Travel
                                Packages
                             </a>
                          </div>
                       </div>
                       <div class="blog-box">
                          <div class="img-box">
                             <img
                                class="img-fluid"
                                src="<?php echo e(asset('assets/themes/deepblue/img/blog/blog-1.jpg')); ?>"
                                alt=""
                             />
                             <span class="category">Drink &amp; Food</span>
                          </div>
                          <div class="text-box">
                             <a href="blog-details.html" class="title"
                                >Best Luxury Switzerland Tours &amp; Travel
                                Packages
                             </a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
    
    <!-- /BLOG Details -->

<?php $__env->stopSection(); ?>













<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\directory-listing\resources\views/themes/deepblue/blogDetails.blade.php ENDPATH**/ ?>