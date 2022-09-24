
<?php $__env->startSection('title',trans('Home')); ?>

<?php $__env->startSection('content'); ?>
    
      <?php echo $__env->make($theme.'partials.heroBanner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <!-- categroy section -->
      <section class="category-section">
         <div class="container">
            <div class="row g-3 g-lg-4">
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-bed"></i>
                        </div>
                        <div>
                           <h5>Hotel & hostel</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-burger-soda"></i>
                        </div>
                        <div>
                           <h5>Food & Drink</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-shopping-bag"></i>
                        </div>
                        <div>
                           <h5>Shopping</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-popcorn"></i>
                        </div>
                        <div>
                           <h5>Entertainment</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-gas-pump"></i>
                        </div>
                        <div>
                           <h5>Fuel station</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-dumbbell"></i>
                        </div>
                        <div>
                           <h5>Fitness</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-heartbeat"></i>
                        </div>
                        <div>
                           <h5>Health Care</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-plane"></i>
                        </div>
                        <div>
                           <h5>Tour & Travel</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-calendar-week"></i>
                        </div>
                        <div>
                           <h5>Events</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-cat"></i>
                        </div>
                        <div>
                           <h5>Pet shops</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-dumbbell"></i>
                        </div>
                        <div>
                           <h5>Fitness</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
               <div class="col-xl-3 col-md-6 col-6">
                  <a href="">
                     <div class="category-box">
                        <div class="icon-box">
                           <i class="fal fa-ellipsis-h-alt"></i>
                        </div>
                        <div>
                           <h5>Explore more</h5>
                           <span>43 Places</span>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>
      </section>

     <!-- popular listings -->
      <section class="popular-listings">
         <div class="overlay">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="header-text text-center mb-5">
                        <h3>Popular listings</h3>
                        <p class="mx-auto">
                           Explore the greates places in the city. You won’t be
                           disappointed.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row g-4">
                  <div class="col-lg-3 col-md-6">
                     <div class="listing-box">
                        <div class="img-box">
                           <img
                              class="img-fluid"
                              src="<?php echo e(asset('assets/themes/deepblue/img/item/16.jpg')); ?>"
                              alt=""
                           />
                           <button class="save">
                              <i class="fal fa-heart"></i>
                           </button>
                           <span class="price"> $49 </span>
                        </div>
                        <div class="text-box">
                           <div class="review">
                              <span>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half"></i>
                              </span>
                              <span>(45 reviews)</span>
                           </div>
                           <a class="title" href="listing-details.html">
                              Wize Shopping Mall
                           </a>
                           <p>Biggest shopping amll in NY</p>
                           <p class="address">
                              <i class="fal fa-map-marker-alt"></i>
                              75 Prince St, NY, USA
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="listing-box">
                        <div class="img-box">
                           <img
                              class="img-fluid"
                              src="<?php echo e(asset('assets/themes/deepblue/img/item/28.jpg')); ?>"
                              alt=""
                           />
                           <button class="save">
                              <i class="fal fa-heart"></i>
                           </button>
                           <span class="price"> $49 </span>
                        </div>
                        <div class="text-box">
                           <div class="review">
                              <span>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half"></i>
                              </span>
                              <span>(45 reviews)</span>
                           </div>
                           <a class="title" href="listing-details.html">
                              Wize Shopping Mall
                           </a>
                           <p>Biggest shopping amll in NY</p>
                           <p class="address">
                              <i class="fal fa-map-marker-alt"></i>
                              75 Prince St, NY, USA
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="listing-box">
                        <div class="img-box">
                           <img
                              class="img-fluid"
                              src="<?php echo e(asset('assets/themes/deepblue/img/item/28.jpg')); ?>"
                              alt=""
                           />
                           <button class="save">
                              <i class="fal fa-heart"></i>
                           </button>
                           <span class="price"> $49 </span>
                        </div>
                        <div class="text-box">
                           <div class="review">
                              <span>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half"></i>
                              </span>
                              <span>(45 reviews)</span>
                           </div>
                           <a class="title" href="listing-details.html">
                              Wize Shopping Mall
                           </a>
                           <p>Biggest shopping amll in NY</p>
                           <p class="address">
                              <i class="fal fa-map-marker-alt"></i>
                              75 Prince St, NY, USA
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <div class="listing-box">
                        <div class="img-box">
                           <img
                              class="img-fluid"
                              src="<?php echo e(asset('assets/themes/deepblue/img/item/9.jpg')); ?>"
                              alt=""
                           />
                           <button class="save">
                              <i class="fal fa-heart"></i>
                           </button>
                           <span class="price"> $49 </span>
                        </div>
                        <div class="text-box">
                           <div class="review">
                              <span>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star"></i>
                                 <i class="fas fa-star-half"></i>
                              </span>
                              <span>(45 reviews)</span>
                           </div>
                           <a class="title" href="listing-details.html">
                              Wize Shopping Mall
                           </a>
                           <p>Biggest shopping amll in NY</p>
                           <p class="address">
                              <i class="fal fa-map-marker-alt"></i>
                              75 Prince St, NY, USA
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row text-center mt-5">
                  <div class="col">
                     <a href="listing.html" class="btn-custom">
                        view all
                        <i class="fal fa-angle-double-right"></i
                     ></a>
                  </div>
               </div>
            </div>
         </div>
      </section>

     <!-- how it works section -->
      <?php echo $__env->make($theme.'sections.how-it-work', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <!-- testimonial section -->
      <?php echo $__env->make($theme.'sections.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <!-- blog section -->
      <section class="blog-section">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="header-text text-center mb-5">
                     <h5>News & Articles</h5>
                     <h3>Popular blog post</h3>
                     <p class="mx-auto">
                        Explore the greates places in the city. You won’t be
                        disappointed.
                     </p>
                  </div>
               </div>
            </div>
            <div class="row gy-3 g-md-5">
               <div class="col-lg-4 col-md-6">
                  <div class="blog-box">
                     <div class="img-box">
                        <img
                           class="img-fluid"
                           src="<?php echo e(asset('assets/themes/deepblue/img/blog/blog-1.jpg')); ?>"
                           alt=""
                        />
                     </div>
                     <div class="text-box">
                        <span class="category">Drink & Food</span>
                        <a href="blog-details.html" class="title"
                           >Best Luxury Switzerland Tours & Travel Packages
                        </a>
                        <div class="date-author">
                           <span class="author"> Moderator </span>
                           <span class="float-end"> Apr 21, 2021 </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="blog-box">
                     <div class="img-box">
                        <img
                           class="img-fluid"
                           src="<?php echo e(asset('assets/themes/deepblue/img/blog/blog-2.jpg')); ?>"
                           alt=""
                        />
                     </div>
                     <div class="text-box">
                        <span class="category">Drink & Food</span>
                        <a href="blog-details.html" class="title"
                           >5 Bangkok Restaurants That Spotlight Sustainability
                        </a>
                        <div class="date-author">
                           <span class="author"> Moderator </span>
                           <span class="float-end"> Apr 21, 2021 </span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 mx-auto">
                  <div class="blog-box">
                     <div class="img-box">
                        <img
                           class="img-fluid"
                           src="<?php echo e(asset('assets/themes/deepblue/img/blog/blog-4.jpg')); ?>"
                           alt=""
                        />
                     </div>
                     <div class="text-box">
                        <span class="category">Shopping</span>
                        <a href="blog-details.html" class="title">
                           10 Most Amazing Shopping Malls in the World now
                        </a>
                        <div class="date-author">
                           <span class="author"> Moderator </span>
                           <span class="float-end"> Apr 21, 2021 </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row text-center mt-5">
               <div class="col">
                  <a href="blog.html" class="btn-custom">
                     Explore more
                     <i class="fal fa-angle-double-right"></i
                  ></a>
               </div>
            </div>
         </div>
      </section>

     <!-- newsletter -->
      <?php if(isset($templates['news-letter'][0]) && $news_letter = $templates['news-letter'][0]): ?>
            <section class="newsletter-section">
               <div class="overlay">
                  <div class="container">
                     <div class="row">
                        <div class="col text-center">
                           <h3><?php echo app('translator')->get($news_letter->description->title); ?></h3>
                           <p>
                              <?php echo app('translator')->get($news_letter->description->sub_title); ?>
                           </p>
                           <div class="input-group mt-5">
                              <input
                                 type="email"
                                 class="form-control"
                                 placeholder="<?php echo app('translator')->get('Enter Email'); ?>"
                                 aria-label="Subscribe Newsletter"
                                 aria-describedby="basic-addon"
                              />
                              <button class="btn-custom"><?php echo app('translator')->get('subscribe'); ?></button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
      <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/home.blade.php ENDPATH**/ ?>