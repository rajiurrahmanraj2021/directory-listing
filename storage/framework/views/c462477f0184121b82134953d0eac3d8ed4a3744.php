

<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('Create Package'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            <div class="media mb-4 justify-content-end">
                <a href="<?php echo e(route('admin.package')); ?>" class="btn btn-sm  btn-primary mr-2">
                    <span><i class="fas fa-arrow-left"></i> <?php echo app('translator')->get('Back'); ?></span>
                </a>
            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e($loop->first ? 'active' : ''); ?>" data-toggle="tab" href="#lang-tab-<?php echo e($key); ?>" role="tab" aria-controls="lang-tab-<?php echo e($key); ?>"
                           aria-selected="<?php echo e($loop->first ? 'true' : 'false'); ?>"><?php echo app('translator')->get($language->name); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <div class="tab-content mt-2" id="myTabContent">
                <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="tab-pane fade <?php echo e($loop->first ? 'show active' : ''); ?>" id="lang-tab-<?php echo e($key); ?>" role="tabpanel">
                        <form method="post" action="<?php echo e(route('admin.packageStore', $language->id)); ?>" class="mt-4" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                    <label for="name"> <?php echo app('translator')->get('Package title'); ?> </label>
                                    <input type="text" name="title[<?php echo e($language->id); ?>]"
                                            class="form-control  <?php $__errorArgs = ['title'.'.'.$language->id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            value="<?php echo e(old('title'.'.'.$language->id)); ?>">
                                    <div class="invalid-feedback">
                                        <?php $__errorArgs = ['title'.'.'.$language->id];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="valid-feedback"></div>
                                </div>

                                <?php if($loop->index == 0): ?>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> <?php echo e(trans('Price')); ?></label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="price" value="<?php echo e(old('price')); ?>" class="form-control  <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <?php echo e($basic->currency ?? 'USD'); ?> </span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                        <label> <?php echo e(trans('Package Expiry')); ?> </label>
                                        <div class="input-group">
                                            <input type="text" name="expiry_time" class="form-control expiry_time <?php $__errorArgs = ['expiry_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('expiry_time')); ?>">
                                            <div class="input-group-append">
                                                <select class="form-control expiry_time_type" id="expiry_time_type" name="expiry_time_type">
                                                    <option value="Days"><?php echo app('translator')->get('Day(s)'); ?></option>
                                                    <option value="Months"><?php echo app('translator')->get('Month(s)'); ?></option>
                                                    <option value="Years"><?php echo app('translator')->get('Year(s)'); ?></option>
                                                </select>
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Unlimited'); ?></span> <input type="checkbox" name="expiry_time_unlimited" value="-1" id="expiry_time_unlimited" class="expiry_time_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php $__errorArgs = ['expiry_time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <?php if($loop->index == 0): ?>
                                <div class="row mb-3">
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> <?php echo e(trans('Image')); ?></label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Yes'); ?></span> <input type="radio" value="1" name="is_image" id="image_yes" checked <?php echo e(old('is_image') == "1" ? 'checked' : ''); ?>></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('No'); ?></span> <input type="radio" value="0" name="is_image" id="image_no" <?php echo e(old('is_image') == "0" ? 'checked' : ''); ?>></span> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> <?php echo e(trans('Video')); ?></label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Yes'); ?></span> <input type="radio" name="is_video" id="video_yes" value="1" checked <?php echo e(old('is_video') == "1" ? 'checked' : ''); ?>></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('No'); ?></span> <input type="radio" name="is_video" id="video_no" value="0" <?php echo e(old('is_video') == "0" ? 'checked' : ''); ?>></span> 
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> <?php echo e(trans('Amenities')); ?></label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Yes'); ?></span> <input type="radio" id="amenities_yes" name="is_amenities" value="1" checked <?php echo e(old('is_amenities') == "1" ? 'checked' : ''); ?>></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('No'); ?></span> <input type="radio" id="amenities_no" name="is_amenities" value="0" <?php echo e(old('is_amenities') == "0" ? 'checked' : ''); ?>></span> 
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> <?php echo e(trans('Product')); ?></label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Yes'); ?></span> <input type="radio" name="is_product" id="product_yes" value="1" checked <?php echo e(old('is_product') == "1" ? 'checked' : ''); ?>></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('No'); ?></span> <input type="radio" name="is_product" id="product_no" value="0" <?php echo e(old('is_product') == "0" ? 'checked' : ''); ?>></span> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> <?php echo e(trans('Business Hour')); ?></label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Yes'); ?></span> <input type="radio" name="is_business_hour" id="business_yes" value="1" checked <?php echo e(old('is_business_hour') == "1" ? 'checked' : ''); ?>></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('No'); ?></span> <input type="radio" name="is_business_hour" id="business_no" value="0" <?php echo e(old('is_business_hour') == "0" ? 'checked' : ''); ?>></span> 
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                            

                            <?php if($loop->index == 0): ?>
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> <?php echo e(trans('No. of listing')); ?> </label>
                                        <div class="input-group mb-3">
                                            <input type="number" min="1" name="no_of_listing"  class="no_of_listing form-control <?php $__errorArgs = ['no_of_listing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invali <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="basic-addon2" value="<?php echo e(old('no_of_listing')); ?>">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Unlimited'); ?></span> <input type="checkbox" name="no_of_listing_unlimited" value="-1" id="listing_unlimited" class="listing_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php $__errorArgs = ['no_of_listing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> <?php echo e(trans('No. of images')); ?> <span><?php echo app('translator')->get('per listing'); ?></span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_img_per_listing" min="1" value="<?php echo e(old('no_of_img_per_listing')); ?>" class="form-control no_of_img_per_listing <?php $__errorArgs = ['no_of_img_per_listing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="basic-addon2">
                                            
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Unlimited'); ?></span> <input type="checkbox" name="no_of_img_per_listing_unlimited" value="-1" id="listing_img_unlimited" class="listing_img_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php $__errorArgs = ['no_of_img_per_listing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-12">
                                        <label> <?php echo e(trans('No. of amenities')); ?> <span><?php echo app('translator')->get('per listing'); ?></span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_amenities_per_listing" value="<?php echo e(old('no_of_amenities_per_listing')); ?>" min="1" class="form-control no_of_amenities_per_listing <?php $__errorArgs = ['no_of_img_per_product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="basic-addon2">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Unlimited'); ?></span> <input type="checkbox" name="no_of_amenities_per_listing_unlimited" value="-1" id="amenities_unlimited" class="amenities_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php $__errorArgs = ['no_of_amenities_per_listing'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> <?php echo e(trans('No. of product')); ?> </label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_product" min="1"  class="no_of_product form-control <?php $__errorArgs = ['no_of_product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="basic-addon2" value="<?php echo e(old('no_of_product')); ?>">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Unlimited'); ?></span> <input type="checkbox" name="no_of_product_unlimited" value="-1" id="product_unlimited" class="product_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php $__errorArgs = ['no_of_product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> <?php echo e(trans('No. of images')); ?> <span><?php echo app('translator')->get('per product'); ?></span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_img_per_product" value="<?php echo e(old('no_of_img_per_product')); ?>" min="1" class="form-control no_of_img_per_product <?php $__errorArgs = ['no_of_img_per_product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" aria-describedby="basic-addon2">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2"><?php echo app('translator')->get('Unlimited'); ?></span> <input type="checkbox" name="no_of_img_per_product_unlimited" value="-1" id="product_img_unlimited" class="product_img_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                <?php $__errorArgs = ['no_of_img_per_product'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo app('translator')->get($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="form-group ">
                                            <label><?php echo app('translator')->get('Status'); ?></label>
                                            <div class="custom-switch-btn">
                                                <input type='hidden' value='1' name='status'>
                                                <input type="checkbox" name="status" class="custom-switch-checkbox" id="status"
                                                       value="0">
                                                <label class="custom-switch-checkbox-label" for="status">
                                                    <span class="custom-switch-checkbox-inner"></span>
                                                    <span class="custom-switch-checkbox-switch"></span>
                                                </label>
                                            </div>
        
                                        </div>
                                    </div>
                                </div>
                 
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="image"><?php echo e(('Image')); ?></label>
                                            <div class="image-input ">
                                                <label for="image-upload" id="image-label"><i class="fas fa-upload"></i></label>
                                                <input type="file" name="image" placeholder="<?php echo app('translator')->get('Choose image'); ?>" id="image">
                                                <img id="image_preview_container" class="preview-image"
                                                    src="<?php echo e(getFile(config('location.category.path'))); ?>"
                                                    alt="<?php echo app('translator')->get('preview image'); ?>">
                                            </div>
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>   
                            <?php endif; ?>
                                
                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3"><?php echo app('translator')->get('Save'); ?></button>
                        </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startPush('style-lib'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/admin/css/summernote.min.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('js-lib'); ?>
    <script src="<?php echo e(asset('assets/admin/js/summernote.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('js'); ?>


    <script defer>
        'use strict'
        $(document).ready(function () {
            let selectors = {
                'input[name="is_product"]': ['.no_of_product', '.product_unlimited', '.no_of_img_per_product', '.product_img_unlimited'],
                'input[name="is_image"]': ['.no_of_img_per_listing', '.listing_img_unlimited'],
                'input[name="is_amenities"]': ['.no_of_amenities_per_listing', '.amenities_unlimited'],
                'input[name="no_of_listing_unlimited"]': ['.no_of_listing'],
                'input[name="no_of_img_per_listing_unlimited"]': ['.no_of_img_per_listing'],
                'input[name="no_of_img_per_product_unlimited"]': ['.no_of_img_per_product'],
                'input[name="no_of_amenities_per_listing_unlimited"]': ['.no_of_amenities_per_listing'],
                'input[name="no_of_product_unlimited"]': ['.no_of_product']
            }

            for (let selector in selectors) {
                setEnableDisable(selectors[selector], $(`${selector}:checked`));

                $(document).on('click', selector, function () {
                    setEnableDisable(selectors[selector], this);
                });
            }

            function setEnableDisable(selectors, parentSelector) {
                let disable = false;
                console.log($(parentSelector).val());
                if ($(parentSelector).val() == 0 || $(parentSelector).val() == -1) {
                    disable = true;
                }

                $(selectors).each(function (index, selector) {
                    $(selector).attr('disabled', disable);
                });
            }
        });
    </script>



    

    
 
    

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/admin/package/create.blade.php ENDPATH**/ ?>