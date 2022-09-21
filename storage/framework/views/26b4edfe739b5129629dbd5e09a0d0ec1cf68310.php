<?php $__env->startSection('title',trans('Blog Details')); ?>

<?php $__env->startSection('content'); ?>

    <!-- BLOG Details-->

        <!-- banner section -->
      <section class="banner-section">
        <div class="overlay">
           <div class="container">
              <div class="row">
                 <div class="col">
                    <div class="header-text text-center">
                       <h3>Our blogs</h3>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <!-- blog section -->
     <section class="blog-section blog-page">
        <div class="container">
           <div class="row g-lg-5">
              <div class="col-lg-8">
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
                       <div class="date-author mb-3">
                          <span class="author">
                             <i class="fad fa-pencil"></i>Moderator
                          </span>
                          <span class="float-end">
                             <i
                                class="fad fa-calendar-alt"
                                aria-hidden="true"
                             ></i
                             >Apr 21, 2021
                          </span>
                       </div>
                       <a href="blog-details.html" class="title"
                          >Best Luxury Switzerland Tours &amp; Travel Packages
                       </a>
                       <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Sequi, consectetur excepturi ipsam obcaecati
                          laudantium repellat quidem dolor! Quam, saepe
                          aspernatur in delectus rerum et porro iste illum,
                          atque voluptatem voluptatum. Lorem ipsum dolor sit
                          amet consectetur, adipisicing elit. Minima eum
                          reiciendis eos error provident magni ducimus
                          doloremque consequatur doloribus praesentium,
                          pariatur, adipisci, repellat ipsam dolorum quidem
                          omnis corporis nobis illum. Lorem ipsum dolor sit
                          amet consectetur, adipisicing elit. Sequi,
                          consectetur excepturi ipsam obcaecati laudantium
                          repellat quidem dolor! Quam, saepe aspernatur in
                          delectus rerum et porro iste illum, atque voluptatem
                          voluptatum. Lorem ipsum dolor sit amet consectetur,
                          adipisicing elit. Minima eum reiciendis eos error
                          provident magni ducimus doloremque consequatur
                          doloribus praesentium, pariatur, adipisci, repellat
                          ipsam dolorum quidem omnis corporis nobis illum.
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Sequi, consectetur excepturi ipsam obcaecati
                          laudantium repellat quidem dolor! Quam, saepe
                          aspernatur in delectus rerum et porro iste illum,
                          atque voluptatem voluptatum. Lorem ipsum dolor sit
                          amet consectetur, adipisicing elit. Minima eum
                          reiciendis eos error provident magni ducimus
                          doloremque consequatur doloribus praesentium,
                          pariatur, adipisci, repellat ipsam dolorum quidem
                          omnis corporis nobis illum.
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













<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/blogDetails.blade.php ENDPATH**/ ?>