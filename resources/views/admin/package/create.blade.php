@extends('admin.layouts.app')

@section('title')
    @lang('Create Package')
@endsection

@section('content')

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            <div class="media mb-4 justify-content-end">
                <a href="{{route('admin.package')}}" class="btn btn-sm  btn-primary mr-2">
                    <span><i class="fas fa-arrow-left"></i> @lang('Back')</span>
                </a>
            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                @foreach($languages as $key => $language)
                    <li class="nav-item">
                        <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="#lang-tab-{{ $key }}" role="tab" aria-controls="lang-tab-{{ $key }}"
                           aria-selected="{{ $loop->first ? 'true' : 'false' }}">@lang($language->name)</a>
                    </li>
                @endforeach
            </ul>

            <div class="tab-content mt-2" id="myTabContent">
                @foreach($languages as $key => $language)

                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="lang-tab-{{ $key }}" role="tabpanel">
                        <form method="post" action="{{ route('admin.packageStore', $language->id) }}" class="mt-4" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                    <label for="name"> @lang('Package title') </label>
                                    <input type="text" name="title[{{ $language->id }}]"
                                            class="form-control  @error('title'.'.'.$language->id) is-invalid @enderror"
                                            value="{{ old('title'.'.'.$language->id) }}">
                                    <div class="invalid-feedback">
                                        @error('title'.'.'.$language->id) @lang($message) @enderror
                                    </div>
                                    <div class="valid-feedback"></div>
                                </div>

                                @if ($loop->index == 0)
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('Price')}}</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="price" value="{{ old('price') }}" class="form-control  @error('price') is-invalid @enderror" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> {{ $basic->currency ?? 'USD' }} </span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                @error('price') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                        <label> {{trans('Package Expiry')}} </label>
                                        <div class="input-group">
                                            <input type="text" name="expiry_time" class="form-control expiry_time @error('expiry_time') is-invalid @enderror" value="{{ old('expiry_time') }}">
                                            <div class="input-group-append">
                                                <select class="form-control expiry_time_type" id="expiry_time_type" name="expiry_time_type">
                                                    <option value="Days">@lang('Day(s)')</option>
                                                    <option value="Months">@lang('Month(s)')</option>
                                                    <option value="Years">@lang('Year(s)')</option>
                                                </select>
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="expiry_time_unlimited" value="-1" id="expiry_time_unlimited" class="expiry_time_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                @error('expiry_time') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            @if ($loop->index == 0)
                                <div class="row mb-3">
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Image')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" value="1" name="is_image" id="image_yes" checked {{ old('is_image') == "1" ? 'checked' : '' }}></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" value="0" name="is_image" id="image_no" {{ old('is_image') == "0" ? 'checked' : '' }}></span> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Video')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" name="is_video" id="video_yes" value="1" checked {{ old('is_video') == "1" ? 'checked' : '' }}></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" name="is_video" id="video_no" value="0" {{ old('is_video') == "0" ? 'checked' : '' }}></span> 
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Amenities')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" id="amenities_yes" name="is_amenities" value="1" checked {{ old('is_amenities') == "1" ? 'checked' : '' }}></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" id="amenities_no" name="is_amenities" value="0" {{ old('is_amenities') == "0" ? 'checked' : '' }}></span> 
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Product')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" name="is_product" id="product_yes" value="1" checked {{ old('is_product') == "1" ? 'checked' : '' }}></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" name="is_product" id="product_no" value="0" {{ old('is_product') == "0" ? 'checked' : '' }}></span> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Business Hour')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" name="is_business_hour" id="business_yes" value="1" checked {{ old('is_business_hour') == "1" ? 'checked' : '' }}></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" name="is_business_hour" id="business_no" value="0" {{ old('is_business_hour') == "0" ? 'checked' : '' }}></span> 
                                        </div>
                                    </div>
                                </div>
                            @endif

                            

                            @if ($loop->index == 0)
                                <div class="row">
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('No. of listing')}} </label>
                                        <div class="input-group mb-3">
                                            <input type="number" min="1" name="no_of_listing"  class="no_of_listing form-control @error('no_of_listing') is-invali @enderror" aria-describedby="basic-addon2" value="{{ old('no_of_listing') }}">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_listing_unlimited" value="-1" id="listing_unlimited" class="listing_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                @error('no_of_listing') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('No. of images')}} <span>@lang('per listing')</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_img_per_listing" min="1" value="{{ old('no_of_img_per_listing') }}" class="form-control no_of_img_per_listing @error('no_of_img_per_listing') is-invalid @enderror" aria-describedby="basic-addon2">
                                            
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_img_per_listing_unlimited" value="-1" id="listing_img_unlimited" class="listing_img_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                @error('no_of_img_per_listing') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-12">
                                        <label> {{trans('No. of amenities')}} <span>@lang('per listing')</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_amenities_per_listing" value="{{ old('no_of_amenities_per_listing') }}" min="1" class="form-control no_of_amenities_per_listing @error('no_of_img_per_product') is-invalid @enderror" aria-describedby="basic-addon2">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_amenities_per_listing_unlimited" value="-1" id="amenities_unlimited" class="amenities_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                @error('no_of_amenities_per_listing') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('No. of product')}} </label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_product" min="1"  class="no_of_product form-control @error('no_of_product') is-invalid @enderror" aria-describedby="basic-addon2" value="{{ old('no_of_product') }}">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_product_unlimited" value="-1" id="product_unlimited" class="product_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                @error('no_of_product') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('No. of images')}} <span>@lang('per product')</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_img_per_product" value="{{ old('no_of_img_per_product') }}" min="1" class="form-control no_of_img_per_product @error('no_of_img_per_product') is-invalid @enderror" aria-describedby="basic-addon2">

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_img_per_product_unlimited" value="-1" id="product_img_unlimited" class="product_img_unlimited"></span> 
                                            </div>
                                            <div class="invalid-feedback">
                                                @error('no_of_img_per_product') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                        <div class="form-group ">
                                            <label>@lang('Status')</label>
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
                                            <label for="image">{{ ('Image') }}</label>
                                            <div class="image-input ">
                                                <label for="image-upload" id="image-label"><i class="fas fa-upload"></i></label>
                                                <input type="file" name="image" placeholder="@lang('Choose image')" id="image">
                                                <img id="image_preview_container" class="preview-image"
                                                    src="{{ getFile(config('location.category.path')) }}"
                                                    alt="@lang('preview image')">
                                            </div>
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>   
                            @endif
                                
                            <button type="submit" class="btn waves-effect waves-light btn-rounded btn-primary btn-block mt-3">@lang('Save')</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/summernote.min.css')}}">
@endpush
@push('js-lib')
    <script src="{{ asset('assets/admin/js/summernote.min.js')}}"></script>
@endpush


@push('js')


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



    {{-- <script>

        "use strict";
        $(document).ready(function (e) {

            $('#image').change(function () {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#image_preview_container').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });

            $('.summernote').summernote({
                height: 250,
                callbacks: {
                    onBlurCodeview: function() {
                        let codeviewHtml = $(this).siblings('div.note-editor').find('.note-codable').val();
                        $(this).val(codeviewHtml);
                    }
                }
            });


        });

    </script> --}}

    
 
    

@endpush
