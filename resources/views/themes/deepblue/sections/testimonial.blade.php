@if(isset($templates['testimonial'][0]) && $testimonial = $templates['testimonial'][0])

    <!-- testimonial section -->
     <section class="testimonial-section">
        <div class="container">
           <div class="row">
              <div class="col-12">
                 <div class="header-text text-center mb-5">
                    <h3>
                        @lang(@$testimonial->description->title)
                     </h3>
                    <p class="mx-auto">
                        @lang(@$testimonial->description->sub_title)
                    </p>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-12">
                 <div class="testimonials owl-carousel">
                  @if(isset($contentDetails['testimonial']))
                     @foreach($contentDetails['testimonial'] as $key=>$data)
                        <div class="review-box">
                           <div class="upper">
                              <div class="img-box">
                                 <img src="{{getFile(config('location.content.path').@$data->content->contentMedia->description->image)}}" alt="@lang('not found')" />
                              </div>
                              <div class="client-info">
                                 <h5>@lang(@$data->description->name)</h5>
                                 <span>{{ @$data->description->designation }}</span>
                              </div>
                           </div>
                           <p class="mb-0">
                              @lang(@$data->description->description)
                           </p>
                           <i class="fad fa-quote-right quote"></i>
                        </div>
                     @endforeach
                  @endif
                 </div>
              </div>
           </div>
        </div>
     </section>

@endif







{{-- 
    
    
        <!-- TESTIMONIAL -->
    <section style="padding: 120px 0"id="testimonial">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="heading-container">
                        <h6 class="topheading">@lang($testimonial->description->title)</h6>
                        <h3 class="heading">@lang($testimonial->description->sub_title)</h3>
                        <p class="slogan">@lang($testimonial->description->short_title)</p>
                    </div>
                </div>
            </div>

            <div class="slider-container wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.15s">
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="{{(session()->get('rtl') == 1) ? 'slider-testimonial-rtl': 'slider-testimonial'}}">

                            @if(isset($contentDetails['testimonial']))
                                @foreach($contentDetails['testimonial'] as $key=>$data)
                                    <div class="slider-item">
                                        <div class="testimonial-item">
                                            <div class="media align-items-center">
                                                <div class="client-fig">
                                                    <img
                                                        class="w-25"
                                                        src="{{getFile(config('location.content.path').@$data->content->contentMedia->description->image)}}"
                                                        alt="...">
                                                </div>
                                                <div class="media-body ml-20">
                                                    <h6 class="h6 mb-5"> @lang(@$data->description->name)</h6>
                                                    <p class="text">@lang(@$data->description->designation)</p>
                                                </div>
                                            </div>
                                            <p class="text fontubonto font-weight-medium mt-15">
                                                @lang(@$data->description->description)
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif


                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="slider  {{(session()->get('rtl') == 1) ? 'slider-nav-rtl': 'slider-nav'}}">
                            @if(isset($contentDetails['testimonial']))
                            @foreach($contentDetails['testimonial'] as $key=>$data)
                                <div class="slider-nav-item">
                                    <div class="testimonial-nav">
                                        <div class="slider-nav-center">
                                            <img class="w-100"class="w-25"
                                                src="{{getFile(config('location.content.path').@$data->content->contentMedia->description->image)}}"
                                                alt="...">
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /TESTIMONIAL -->
    
    
    --}}
