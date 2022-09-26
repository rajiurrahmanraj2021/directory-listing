
<?php $__env->startSection('title',trans('Category')); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('Listing Category'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php if(count($listingCategory) > 0): ?>
      <section class="category-filter-section">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div
                     class="categories categories-alphabet owl-carousel"
                     id="categories"
                  >
                     <button class="character " data-character="a"><?php echo app('translator')->get('a'); ?></button>
                     <button class="character" data-character="b"><?php echo app('translator')->get('b'); ?></button>
                     <button class="character" data-character="c"><?php echo app('translator')->get('c'); ?></button>
                     <button class="character" data-character="d"><?php echo app('translator')->get('d'); ?></button>
                     <button class="character" data-character="f"><?php echo app('translator')->get('f'); ?></button>
                     <button class="character" data-character="g"><?php echo app('translator')->get('g'); ?></button>
                     <button class="character" data-character="h"><?php echo app('translator')->get('h'); ?></button>
                     <button class="character" data-character="i"><?php echo app('translator')->get('i'); ?></button>
                     <button class="character" data-character="j"><?php echo app('translator')->get('j'); ?></button>
                     <button class="character" data-character="k"><?php echo app('translator')->get('k'); ?></button>
                     <button class="character" data-character="l"><?php echo app('translator')->get('l'); ?></button>
                     <button class="character" data-character="m"><?php echo app('translator')->get('m'); ?></button>
                     <button class="character" data-character="n"><?php echo app('translator')->get('n'); ?></button>
                     <button class="character" data-character="o"><?php echo app('translator')->get('o'); ?></button>
                     <button class="character" data-character="p"><?php echo app('translator')->get('p'); ?></button>
                     <button class="character" data-character="q"><?php echo app('translator')->get('q'); ?></button>
                     <button class="character" data-character="r"><?php echo app('translator')->get('r'); ?></button>
                     <button class="character" data-character="s"><?php echo app('translator')->get('s'); ?></button>
                     <button class="character" data-character="t"><?php echo app('translator')->get('t'); ?></button>
                     <button class="character" data-character="u"><?php echo app('translator')->get('u'); ?></button>
                     <button class="character" data-character="v"><?php echo app('translator')->get('v'); ?></button>
                     <button class="character" data-character="w"><?php echo app('translator')->get('w'); ?></button>
                     <button class="character" data-character="x"><?php echo app('translator')->get('x'); ?></button>
                     <button class="character" data-character="y"><?php echo app('translator')->get('y'); ?></button>
                     <button class="me-5 character" data-character="z"><?php echo app('translator')->get('z'); ?></button>
                  </div>
               </div>
            </div>

            <div class="row g-3 mt-5" id="renderCategory">
               <?php echo $__env->make($theme.'includes.listing.category', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
      </section>
      <?php else: ?>

   <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

      <script>
         'use strict'
         $(document).ready(function(){
            $('.character').on('click', function(){
               let character = $(this).attr('data-character');

               $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "<?php echo e(route('categorySearch')); ?>",
                    type: "post",
                    data:{
                        character:character,
                    },
                    success: function(data)
                    {
                        $('.owl-item').removeClass('active');
                        if ((data.count)*1 <  1) {
                                $('#renderCategory').html('<div class="col-lg-12 col-md-12 col-6 text-center"><?php echo app('translator')->get("No Data Found"); ?></div>');
                                
                        } else {
                           console.log(this);
                           $('#renderCategory').html(data.data);
                           $(this).addClass('active');
                        }
                        

                    }
                });   

            });

         });
      </script>
   
<?php $__env->stopPush(); ?>


     
<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/category.blade.php ENDPATH**/ ?>