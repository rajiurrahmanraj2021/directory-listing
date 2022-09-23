
<?php $__env->startSection('title', trans($title)); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('Our Blogs'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- BLOG -->

     <!-- blog section -->
     <?php if(count($allBlogs) > 0): ?>
         <section class="blog-section blog-page">
            <div class="container">
               <div class="row g-lg-5">
                  <div class="col-lg-8">
                     <?php $__currentLoopData = $allBlogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                        <div class="blog-box">
                           <div class="img-box">
                              <img
                                 class="img-fluid"
                                 src="<?php echo e(getFile(config('location.blog.path'). @$blog->image)); ?>"
                                 alt=""
                              />
                              <span class="category"></span>
                           </div>
                           <div class="text-box">
                              <div class="date-author mb-3">
                                 <span class="author">
                                    <i class="fad fa-pencil"></i><?php echo app('translator')->get(@$blog->details->author); ?>
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
                                 ><?php echo e(\Illuminate\Support\Str::limit(@$blog->details->title, 100)); ?>

                                 

                                 
                              </a>
                              <p>
                                 <?php echo e(Illuminate\Support\Str::limit(strip_tags(@$blog->details->details),500)); ?>

                              </p>
                              <a href="<?php echo e(route('blogDetails',[slug(@$blog->details->title), $blog->id])); ?>" class="btn-custom"
                                 ><?php echo app('translator')->get('Read more'); ?></a
                              >
                           </div>
                        </div>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     

                     <nav aria-label="Page navigation example mt-5">
                        <ul class="pagination justify-content-center mt-5">
                           <li class="page-item disabled">
                              <a class="page-link">Previous</a>
                           </li>
                           <li class="page-item active">
                              <a class="page-link" href="#">1</a>
                           </li>
                           <li class="page-item">
                              <a class="page-link" href="#">2</a>
                           </li>
                           <li class="page-item">
                              <a class="page-link" href="#">3</a>
                           </li>
                           <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  
                  <div class="col-lg-4">
                     <div class="right-bar">
                        <div class="side-box">
                           <form action="">
                              <h4>Search</h4>
                              <div class="input-group">
                                 <input
                                    type="email"
                                    class="form-control"
                                    placeholder="search"
                                 />
                                 <button><i class="fal fa-search"></i></button>
                              </div>
                           </form>
                        </div>

                        <div class="side-box">
                           <h4>categories</h4>
                           <ul class="links">
                              <li><a href="">Albums</a></li>
                              <li><a href="">Dress</a></li>
                              <li><a href="">Events</a></li>
                              <li><a href="">Festivals</a></li>
                           </ul>
                        </div>

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
      <?php else: ?>
         <h3 class="text-center mt-5 mb-5"><?php echo app('translator')->get('No Blogs Available Here'); ?></h3>
     <?php endif; ?>
     
    <!-- /BLOG -->

<?php $__env->stopSection(); ?>






    
    


<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\directory-listing\resources\views/themes/deepblue/blog.blade.php ENDPATH**/ ?>