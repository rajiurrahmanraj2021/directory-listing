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
                     @forelse ($allBlogs as $blog)
      
                        <div class="blog-box">
                           <div class="img-box">
                              <img
                                 class="img-fluid"
                                 src="{{ getFile(config('location.blog.path'). @$blog->image) }}"
                                 alt=""
                              />
                              <span class="category"> @lang(optional($blog->blogCategory->details)->name)</span>
                           </div>
                           <div class="text-box">
                              <div class="date-author mb-3">
                                 <span class="author">
                                    <i class="fad fa-pencil"></i>@lang(optional(@$blog->details)->author)
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
                                 >{{ \Illuminate\Support\Str::limit(optional(@$blog->details)->title, 100) }}
                                 

                                 
                              </a>
                              <p>
                                 {{Illuminate\Support\Str::limit(strip_tags(optional(@$blog->details)->details),500)}}
                              </p>
                              <a href="{{route('blogDetails',[slug(@$blog->details->title), $blog->id])}}" class="btn-custom"
                                 >@lang('Read more')</a
                              >
                           </div>
                        </div>
                     @empty

                     @endforelse

                     <nav aria-label="Page navigation example mt-5">
                        {{-- <ul class="pagination justify-content-center mt-5">
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
                        </ul> --}}
                        {{ $allBlogs->links() }}
                     </nav>
                  </div>
                  
                  <div class="col-lg-4">
                     <div class="right-bar">
                        <div class="side-box">
                           <form action="{{ route('blogSearch') }}" method="get">
                              <h4>@lang('Search')</h4>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="search" id="search" placeholder="@lang('search')"
                                 />
                                 <button type="submit"><i class="fal fa-search"></i></button>
                              </div>
                           </form>
                        </div>

                        <div class="side-box">
                           <h4>@lang('Categories')</h4>
                           <ul class="links">
                              @foreach ($blogCategory as $category)
                                 <a href="{{ route('CategoryWiseBlog', [slug(@$category->details->name), $category->id]) }}" > 
                                    <li>
                                       @lang(optional(@$category->details)->name)
                                    </li>  
                                 </a> 
                              @endforeach
                           </ul>
                        </div>

                        <div class="side-box">
                           <h4>@lang('Recent Blogs')</h4>
                           @foreach ($allBlogs as $blog)
                              <div class="blog-box">
                                 <div class="img-box">
                                    <img
                                       class="img-fluid"
                                       src="{{ getFile(config('location.blog.path'). @$blog->image) }}"
                                       alt=""
                                    />
                                    <span class="category">@lang(optional($blog->blogCategory->details)->name)</span>
                                 </div>
                                 <div class="text-box">
                                    <a href="{{route('blogDetails',[slug(@$blog->details->title), $blog->id])}}" class="title"
                                       >{{ \Illuminate\Support\Str::limit(optional(@$blog->details)->title, 40) }}
                                    </a>
                                 </div>
                              </div>
                           @endforeach
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </section>
      @else
         <div class="justify-content-center d-flex flex-column">
            <h3 class="text-center mt-5 mb-5">@lang('No Blogs Available Here')</h3>
            <a class="btn btn-primary text-center mt-2 mb-4" href="{{ route('blog') }}">@lang('Back')</a>
         </div>
     @endif  
    <!-- /BLOG -->
@endsection

    

