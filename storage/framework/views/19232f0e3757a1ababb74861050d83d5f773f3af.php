
<?php $__env->startSection('title', trans($title)); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('Our Blogs'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- BLOG -->
     <?php if(count($allBlogs) > 0): ?>
         <section class="blog-section blog-page">
            <div class="container">
               <div class="row g-lg-5">
                  <div class="col-lg-8">
                     <?php $__empty_1 = true; $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      
                        <div class="blog-box">
                           <div class="img-box">
                              <img
                                 class="img-fluid"
                                 src="<?php echo e(getFile(config('location.blog.path'). @$blog->image)); ?>"
                                 alt=""
                              />
                              <span class="category"> <?php echo app('translator')->get(optional($blog->blogCategory->details)->name); ?></span>
                           </div>
                           <div class="text-box">
                              <div class="date-author mb-3">
                                 <span class="author">
                                    <i class="fad fa-pencil"></i><?php echo app('translator')->get(optional(@$blog->details)->author); ?>
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
                                 ><?php echo e(\Illuminate\Support\Str::limit(optional(@$blog->details)->title, 100)); ?>

                                 

                                 
                              </a>
                              <p>
                                 <?php echo e(Illuminate\Support\Str::limit(strip_tags(optional(@$blog->details)->details),500)); ?>

                              </p>
                              <a href="<?php echo e(route('blogDetails',[slug(@$blog->details->title), $blog->id])); ?>" class="btn-custom"
                                 ><?php echo app('translator')->get('Read more'); ?></a
                              >
                           </div>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                     <?php endif; ?>

                     <nav aria-label="Page navigation example mt-5">
                        
                        <?php echo e($allBlogs->links()); ?>

                     </nav>
                  </div>
                  
                  <div class="col-lg-4">
                     <div class="right-bar">
                        <div class="side-box">
                           <form action="<?php echo e(route('blogSearch')); ?>" method="get">
                              <h4><?php echo app('translator')->get('Search'); ?></h4>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="search" id="search" placeholder="<?php echo app('translator')->get('search'); ?>"
                                 />
                                 <button type="submit"><i class="fal fa-search"></i></button>
                              </div>
                           </form>
                        </div>

                        <div class="side-box">
                           <h4><?php echo app('translator')->get('Categories'); ?></h4>
                           <ul class="links">
                              <?php $__currentLoopData = $blogCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <a href="<?php echo e(route('CategoryWiseBlog', [slug(@$category->details->name), $category->id])); ?>" > 
                                    <li>
                                       <?php echo app('translator')->get(optional(@$category->details)->name); ?>
                                    </li>  
                                 </a> 
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </ul>
                        </div>

                        <div class="side-box">
                           <h4><?php echo app('translator')->get('Recent Blogs'); ?></h4>
                           <?php $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
               </div>
            </div>
         </section>
      <?php else: ?>
         <div class="justify-content-center d-flex flex-column">
            <h3 class="text-center mt-5 mb-5"><?php echo app('translator')->get('No Blogs Available Here'); ?></h3>
            <a class="btn btn-primary text-center mt-2 mb-4" href="<?php echo e(route('blog')); ?>"><?php echo app('translator')->get('Back'); ?></a>
         </div>
     <?php endif; ?>  
    <!-- /BLOG -->
<?php $__env->stopSection(); ?>

    


<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/blog.blade.php ENDPATH**/ ?>