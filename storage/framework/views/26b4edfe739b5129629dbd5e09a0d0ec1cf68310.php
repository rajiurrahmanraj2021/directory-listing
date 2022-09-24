
<?php $__env->startSection('title',trans($title)); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('Blog Details'); ?>
<?php $__env->stopSection(); ?>

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
               <?php if(count($relatedBlogs) > 0): ?>
                  <div class="col-lg-4">
                     <div class="right-bar">
                        <div class="side-box">
                           <h4><?php echo app('translator')->get('Related Blogs'); ?></h4>
                           
                           <?php $__currentLoopData = $relatedBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <div class="blog-box">
                                 <div class="img-box">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo e(getFile(config('location.blog.path'). @$blog->image)); ?>"
                                    alt=""
                                    />
                                    <span class="category"><?php echo app('translator')->get(optional($blog->blogCategory->details)->name); ?></span>
                                 </div>
                                 <div class="text-box">
                                    <a href="<?php echo e(route('blogDetails',[slug(@$blog->details->title), $blog->id])); ?>" class="title"
                                    ><?php echo e(\Illuminate\Support\Str::limit(optional(@$blog->details)->title, 100)); ?>

                                       </a>
                                 </div>
                              </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                     </div>
                  </div>
               <?php endif; ?>
            </div>
         </div>
      </section>
    <!-- /BLOG Details -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/blogDetails.blade.php ENDPATH**/ ?>