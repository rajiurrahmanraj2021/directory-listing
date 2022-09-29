@extends($theme.'layouts.app')
@section('title',trans('Pricing'))

@section('banner_heading')
   @lang('Our Best Pricing')
@endsection

@section('content')

     <section class="pricing-section">
        <div class="container">
           <div class="row">
              <div class="col">
                 <div class="header-text text-center mb-5">
                    <h2>packages</h2>
                    <p class="mx-auto">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit
                       id cupiditate. <br />
                       Repudiandae blanditiis ullam natus quas explicabo
                    </p>
                 </div>
              </div>
           </div>
           <div class="row gy-3 g-md-5">
               @foreach ($Packages as $item)
                  <div class="col-lg-4 col-md-6">
                     <div class="box">
                        <div class="icon-box">
                           <img src="{{ asset('assets/themes/deepblue/img/icon/online-shop.png') }}" alt="" />
                        </div>
                        <div class="text-box">
                           <h5>@lang($item->details->title)</h5>
                           <h3>{{ $item->expiry_time }} {{ $item->expiry_time_type }}</h3>
                           <ul>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Package
                                    expiry
                                 </span>
                                 <span class="float-end">365 Days</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Business
                                    Listing
                                 </span>
                                 <span class="float-end">1</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-times-circle"></i>About
                                    Company
                                 </span>
                                 <span class="float-end">No</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-times-circle"></i>Product List
                                 </span>
                                 <span class="float-end">No</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Category
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-times-circle"></i>Return &
                                    Refund Policy Company
                                 </span>
                                 <span class="float-end">No</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Brand
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Logo
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Price Range
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                              <li>
                                 <span>
                                    <i class="fal fa-check-circle"></i>Package
                                    Currency
                                 </span>
                                 <span class="float-end">Yes</span>
                              </li>
                           </ul>
                           <button class="btn-custom">choose plan</button>
                        </div>
                     </div>
                  </div>
               @endforeach

           </div>
        </div>
        <img
           src="{{ asset('assets/themes/deepblue/img/rose-flower.png') }}"
           alt=""
           class="flower aos-init aos-animate"
           data-aos="fade-up"
           data-aos-duration="800"
           data-aos-anchor-placement="center-bottom"
        />
     </section>
@endsection