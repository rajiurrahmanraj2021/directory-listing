<!-- HeroBanner section -->
@if(isset($templates['banner-heading'][0]) && $banner_heading = $templates['banner-heading'][0])
    @push('style')
        <style>
            .home-section {
                background: url({{getFile(config('location.content.path').@$banner_heading->templateMedia()->image)}});
            }
        </style>
    @endpush
<section class="home-section">
   <div class="overlay h-100">
      <div class="container h-100">
         <div class="row h-100 align-items-center">
            <div class="col-lg-12">
               <div class="text-box text-center">
                  <h3>@lang(@$banner_heading->description->top_title)</h3>
                  <h1>
                     @lang(@$banner_heading->description->main_title)
                  </h1>
                  <p>
                     @lang(@$banner_heading->description->sub_title)
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
@endif





















{{-- 
@if(isset($templates['hero'][0]) && $hero = $templates['hero'][0])
    @push('style')
        <style>
            #hero {
                position: relative;
                padding: 170px 0;
                background-image: linear-gradient(90deg, rgba(7, 11, 40, 0.8) 0%, rgba(7, 11, 40, 0.8) 100%), url({{getFile(config('location.content.path').@$hero->templateMedia()->image)}});
                background-position: center center;
                background-size: cover;
                background-repeat: no-repeat;
                background-color: #ffffff;
            }
        </style>
    @endpush

    <header id="hero">
        <div class="container">
            <div class="d-flex align-content-center justify-content-center">
                <div class="col-md-8">
                    <div class="hero-content h-100 text-center">
                        <h1 class="h1 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.4s">@lang(@$hero['description']->title)</h1>
                        <h1 class="h1 mt-10 mb-25 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            @lang(@$hero['description']->sub_title)
                        </h1>
                        <h6 class="h6 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                            @lang(@$hero['description']->short_description)
                        </h6>
                        <a class="btn-hero mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s"
                           href="{{@$hero->templateMedia()->button_link}}">
                            <span>@lang(@$hero['description']->button_name)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif --}}
