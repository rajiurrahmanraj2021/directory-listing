@extends($theme.'layouts.app')
@section('title', trans($title))

@section('banner_heading')
   @lang('Our Blogs')
@endsection

@section('content')
    <!-- BLOG -->
     @if (count($allBlogs) > 0)
         <section class="blog-section blog-page">
            <div class="container">
               <div class="row g-lg-5">
                  <div class="col-lg-8">
                     @foreach ($allBlogs as $blog)
                        <div class="blog-box">
                           <div class="img-box">
                              <img
                                 class="img-fluid"
                                 src="{{ getFile(config('location.blog.path'). @$blog->image) }}"
                                 alt=""
                              />
                              <span class="category"></span>
                           </div>
                           <div class="text-box">
                              <div class="date-author mb-3">
                                 <span class="author">
                                    <i class="fad fa-pencil"></i>@lang(@$blog->details->author)
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
                                 >{{ \Illuminate\Support\Str::limit(@$blog->details->title, 100) }}
                                 

                                 
                              </a>
                              <p>
                                 {{Illuminate\Support\Str::limit(strip_tags(@$blog->details->details),500)}}
                              </p>
                              <a href="{{route('blogDetails',[slug(@$blog->details->title), $blog->id])}}" class="btn-custom"
                                 >@lang('Read more')</a
                              >
                           </div>
                        </div>
                     @endforeach
                     

                     <nav aria-label="Page navigation example mt-5">
                        <ul class="pagination justify-content-center mt-5">
                           <li class="page-item disabled">
                              <a class="page-link">Previous</a>
                           </li>
                           <li class="page-item active">
                              <a class="page-link" href="#">1</a>
                           </li>
                           <li class="page-item">
                              <a class="page-link" href="#">2</a>
                           </li>
                           <li class="page-item">
                              <a class="page-link" href="#">3</a>
                           </li>
                           <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  
                  <div class="col-lg-4">
                     <div class="right-bar">
                        <div class="side-box">
                           <form action="">
                              <h4>Search</h4>
                              <div class="input-group">
                                 <input
                                    type="email"
                                    class="form-control"
                                    placeholder="search"
                                 />
                                 <button><i class="fal fa-search"></i></button>
                              </div>
                           </form>
                        </div>

                        <div class="side-box">
                           <h4>categories</h4>
                           <ul class="links">
                              <li><a href="">Albums</a></li>
                              <li><a href="">Dress</a></li>
                              <li><a href="">Events</a></li>
                              <li><a href="">Festivals</a></li>
                           </ul>
                        </div>

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
      @else
         <h3 class="text-center mt-5 mb-5">@lang('No Blogs Available Here')</h3>
     @endif  
    <!-- /BLOG -->
@endsection

    

