@extends($theme.'layouts.app')
@section('title',trans($title))

@section('banner_heading')
   @lang('Blog Details')
@endsection

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
                              @foreach ($allBlogCategory as $category)
                                 <a href="{{ route('CategoryWiseBlog', [slug(@$category->details->name), $category->id]) }}" > 
                                    <li>
                                       @lang(optional(@$category->details)->name)
                                    </li>  
                                 </a> 
                              @endforeach
                           </ul>
                        </div>
                        @if (count($relatedBlogs) > 0)
                           <div class="side-box">
                              <h4>@lang('Related Blogs')</h4>
                              
                              @foreach ($relatedBlogs as $blog)
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
                                       >{{ \Illuminate\Support\Str::limit(optional(@$blog->details)->title, 100) }}
                                          </a>
                                    </div>
                                 </div>
                              @endforeach
                           </div>
                        @endif
                     </div>
                  </div>
               
            </div>
         </div>
      </section>
    <!-- /BLOG Details -->
@endsection
