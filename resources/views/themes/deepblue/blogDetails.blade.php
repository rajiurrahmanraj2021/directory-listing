@extends($theme.'layouts.app')
@section('title',trans('Blog Details'))

@section('content')
     <!-- blog section -->
      <section class="blog-section blog-page">
         <div class="container">
            <div class="row g-lg-5">
               <div class="col-lg-8">
                  <div class="blog-box">
                     <div class="img-box">
                        <img
                           class="img-fluid"
                           src="{{ getFile(config('location.blog.path'). @$singleBlog->image) }}"
                           alt=""
                        />
                        <span class="category">@lang($blogCategory->name)</span>
                     </div>
                     <div class="text-box">
                        <div class="date-author mb-3">
                           <span class="author">
                              <i class="fad fa-pencil"></i>@lang($singleBlog->details->author)
                           </span>
                           <span class="float-end">
                              <i
                                 class="fad fa-calendar-alt"
                                 aria-hidden="true"
                              ></i
                              >{{ dateTime(@$blog->created_at, 'M d, Y') }}
                           </span>
                        </div>
                        <a href="blog-details.html" class="title"
                           >@lang($singleBlog->details->title)
                        </a>
                        <p>
                           @lang($singleBlog->details->details)
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
                                 src="{{ asset('assets/themes/deepblue/img/blog/blog-3.jpg') }}"
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
                                 src="{{ asset('assets/themes/deepblue/img/blog/blog-2.jpg') }}"
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
                                 src="{{ asset('assets/themes/deepblue/img/blog/blog-1.jpg') }}"
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
@endsection
