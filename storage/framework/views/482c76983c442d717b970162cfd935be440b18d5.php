<!-- HeroBanner section -->
<?php if(isset($templates['banner-heading'][0]) && $banner_heading = $templates['banner-heading'][0]): ?>
    <?php $__env->startPush('style'); ?>
        <style>
            .home-section {
                background: url(<?php echo e(getFile(config('location.content.path').@$banner_heading->templateMedia()->image)); ?>);
            }
        </style>
    <?php $__env->stopPush(); ?>
<section class="home-section">
   <div class="overlay h-100">
      <div class="container h-100">
         <div class="row h-100 align-items-center">
            <div class="col-lg-12">
               <div class="text-box text-center">
                  <h3><?php echo app('translator')->get(@$banner_heading->description->top_title); ?></h3>
                  <h1>
                     <?php echo app('translator')->get(@$banner_heading->description->main_title); ?>
                  </h1>
                  <p>
                     <?php echo app('translator')->get(@$banner_heading->description->sub_title); ?>
                  </p>
                  <div class="search-bar">
                     <div class="row g-0">
                        <div class="input-box col-lg-3 col-md-6">
                           <div class="input-group">
                              <span class="input-group-prepend">
                                 <i class="fal fa-search"></i>
                              </span>
                              <input
                                 type="text"
                                 class="form-control"
                                 placeholder="What are you looking for?"
                              />
                           </div>
                        </div>
                        <div class="input-box col-lg-3 col-md-6">
                           <div class="input-group">
                              <span class="input-group-prepend">
                                 <i class="fal fa-map-marker-alt"></i>
                              </span>
                              <input
                                 type="text"
                                 class="form-control"
                                 placeholder="Enter location"
                              />
                           </div>
                        </div>
                        <div class="input-box col-lg-3 col-md-6">
                           <div class="input-group">
                              <span class="input-group-prepend">
                                 <i class="fal fa-globe-americas"></i>
                              </span>
                              <select
                                 class="js-example-basic-single form-control"
                                 name="state"
                              >
                                 <option value="Audi">Audi</option>
                                 <option value="Bmw">Bmw</option>
                                 <option value="Cadillac">
                                    Cadillac
                                 </option>
                                 <option value="Dodge">Dodge</option>
                                 <option value="Ferrari">Ferrari</option>
                                 <option value="Hennessey">
                                    Hennessey
                                 </option>
                                 <option value="Jaguar">Jaguar</option>
                              </select>
                           </div>
                        </div>
                        <div class="input-box col-lg-3 col-md-6">
                           <button class="btn-custom w-100 h-100">
                              <i class="fal fa-search"></i> search
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php endif; ?>






















<?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/partials/heroBanner.blade.php ENDPATH**/ ?>