@extends('admin.layouts.app')

@section('title')
    @lang('Create Pricing')
@endsection

@section('content')

    <div class="card card-primary m-0 m-md-4 my-4 m-md-0 shadow">
        <div class="card-body">
            <div class="media mb-4 justify-content-end">
                <a href="{{route('admin.pricing')}}" class="btn btn-sm  btn-primary mr-2">
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
                        <form method="post" action="{{ route('admin.pricingStore', $language->id) }}" class="mt-4" enctype="multipart/form-data">
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
                                            <div class="invalid-feedback">
                                                @error('price') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> {{ $basic->currency ?? 'USD' }} </span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                                        <label> {{trans('Package Expiry')}} </label>
                                        <div class="input-group">
                                            <input type="text" name="expiry_time" class="form-control expiry_time @error('expiry_time') is-invalid @enderror" value="{{ old('expiry_time') }}">
                                            <div class="invalid-feedback">
                                                @error('expiry_time') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('Day(S)')</button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#" id="days">@lang('Days')</a>
                                                    <input type="hidden" name="expiry_time_type" value="days" class="form-control expiry_time_type">
                                                </div>
                                            </div>
                                     
                                        </div>
                                    </div>
                                @endif
                            </div>

                            @if ($loop->index == 0)
                                <div class="row mb-3">
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Image')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" value="0" name="is_image" id="image_yes"></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" value="1" name="is_image" id="image_no"></span> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Video')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" name="is_video" id="video_yes" value="0"></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" name="is_video" id="video_no" value="1"></span> 
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Amenities')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" id="amenities_yes" name="is_amenities" value="0"></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" id="amenities_no" name="is_amenities" value="1"></span> 
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Product')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" name="is_product" id="product_yes" value="0"></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" name="is_product" id="product_no" value="1"></span> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-lg-2 col-md-2 col-6">
                                        <label> {{trans('Business Hour')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Yes')</span> <input type="radio" name="is_business_hour" id="business_yes" value="0"></span> 
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('No')</span> <input type="radio" name="is_business_hour" id="business_no" value="1"></span> 
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
                                            <div class="invalid-feedback">
                                                @error('no_of_listing') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_listing_unlimited" value="-1" id="listing_unlimited" class="listing_unlimited"></span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('No. of images')}} <span>@lang('per listing')</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_img_per_listing" min="1" value="{{ old('no_of_img_per_listing') }}" class="form-control no_of_img_per_listing @error('no_of_img_per_listing') is-invalid @enderror" aria-describedby="basic-addon2">
                                            <div class="invalid-feedback">
                                                @error('no_of_listing') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>

                                            <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_img_per_listing_unlimited" value="-1" id="listing_img_unlimited" class="listing_img_unlimited"></span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-12">
                                        <label> {{trans('No. of amenities')}} <span>@lang('per listing')</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_amenities_per_listing" value="{{ old('no_of_amenities_per_listing') }}" min="1" class="form-control no_of_amenities_per_listing @error('no_of_img_per_product') is-invalid @enderror" aria-describedby="basic-addon2">
                                            <div class="invalid-feedback">
                                                @error('no_of_amenities_per_listing') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>

                                            <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_amenities_per_listing_unlimited" value="-1" id="amenities_unlimited" class="amenities_unlimited"></span> 
                                            </div>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('No. of product')}} </label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_product" min="1"  class="no_of_product form-control @error('no_of_product') is-invalid @enderror" aria-describedby="basic-addon2" value="{{ old('no_of_product') }}">
                                            <div class="invalid-feedback">
                                                @error('no_of_product') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_product_unlimited" value="-1" id="product_unlimited" class="product_unlimited"></span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label> {{trans('No. of images')}} <span>@lang('per product')</span></label>
                                        <div class="input-group mb-3">
                                            <input type="number" name="no_of_img_per_product" value="{{ old('no_of_img_per_product') }}" min="1" class="form-control no_of_img_per_product @error('no_of_img_per_product') is-invalid @enderror" aria-describedby="basic-addon2">
                                            <div class="invalid-feedback">
                                                @error('no_of_img_per_product') @lang($message) @enderror
                                            </div>
                                            <div class="valid-feedback"></div>

                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"> <span class="mr-2">@lang('Unlimited')</span> <input type="checkbox" name="no_of_img_per_product_unlimited" value="-1" id="product_img_unlimited" class="product_img_unlimited"></span> 
                                            </div>
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
 
    @if ($errors->any())
        @php
            $collection = collect($errors->all());
            $errors = $collection->unique();
        @endphp
        <script>
            "use strict";
            @foreach ($errors as $error)
            Notiflix.Notify.Failure("{{trans($error)}}");
            @endforeach
        </script>
    @endif

    <script>
        'use strict'
       
           // For yes/no  
            $(document).on('click','#product_no', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_product').attr('disabled', true);
                    $('.product_unlimited').attr('disabled', true);
                    $('.no_of_img_per_product').attr('disabled', true);
                    $('.product_img_unlimited').attr('disabled', true);
                }
            });

            $(document).on('click','#product_yes', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_product').attr('disabled', false);
                    $('.product_unlimited').attr('disabled', false);
                    $('.no_of_img_per_product').attr('disabled', false);
                    $('.product_img_unlimited').attr('disabled', false);
                }
            });

            $(document).on('click','#image_no', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_img_per_listing').attr('disabled', true);
                    $('.listing_img_unlimited').attr('disabled', true);
                }
            });

            $(document).on('click','#image_yes', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_img_per_listing').attr('disabled', false);
                    $('.listing_img_unlimited').attr('disabled', false);
                }
            });

            $(document).on('click','#amenities_no', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_amenities_per_listing').attr('disabled', true);
                    $('.amenities_unlimited').attr('disabled', true);
                }
            });

            $(document).on('click','#amenities_yes', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_amenities_per_listing').attr('disabled', false);
                    $('.amenities_unlimited').attr('disabled', false);
                }
            });


            // unlimited js

            $(document).on('click','#listing_unlimited', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_listing').attr('disabled', true);
                } else{
                    $('.no_of_listing').attr('disabled', false);
                }
            });

            $(document).on('click','#listing_img_unlimited', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_img_per_listing').attr('disabled', true);
                } else{
                    $('.no_of_img_per_listing').attr('disabled', false);
                }
            });

            $(document).on('click','#product_img_unlimited', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_img_per_product').attr('disabled', true);
                } else{
                    $('.no_of_img_per_product').attr('disabled', false);
                }
            });

            $(document).on('click','#amenities_unlimited', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_amenities_per_listing').attr('disabled', true);
                } else{
                    $('.no_of_amenities_per_listing').attr('disabled', false);
                }
            });

            $(document).on('click','#product_unlimited', function(){

                if ($(this).prop("checked")) {
                    $('.no_of_product').attr('disabled', true);
                } else{
                    $('.no_of_product').attr('disabled', false);
                }
            });

    </script>

@endpush
