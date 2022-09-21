@extends($theme.'layouts.app')
@section('title', trans($title))

@section('banner_heading')
   @lang('Our Blogs')
@endsection

@section('content')
    <!-- BLOG -->

     <!-- blog section -->
     <section class="blog-section blog-page">
        <div class="container">
           <div class="row g-lg-5">
              <div class="col-lg-8">
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
                       <div class="date-author mb-3">
                          <span class="author">
                             <i class="fad fa-pencil"></i>Moderator
                          </span>
                          <span class="float-end">
                             <i
                                class="fad fa-calendar-alt"
                                aria-hidden="true"
                             ></i
                             >Apr 21, 2021
                          </span>
                       </div>
                       <a href="blog-details.html" class="title"
                          >Best Luxury Switzerland Tours &amp; Travel Packages
                       </a>
                       <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Sequi, consectetur excepturi ipsam obcaecati
                          laudantium repellat quidem dolor! Quam, saepe
                          aspernatur in delectus rerum et porro iste illum,
                          atque voluptatem voluptatum. Lorem ipsum dolor sit
                          amet consectetur, adipisicing elit. Minima eum
                          reiciendis eos error provident magni ducimus
                          doloremque consequatur doloribus praesentium,
                          pariatur, adipisci, repellat ipsam dolorum quidem
                          omnis corporis nobis illum.
                       </p>
                       <a href="{{ route('blog-details') }}" class="btn-custom"
                          >Read more</a
                       >
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
                       <div class="date-author mb-3">
                          <span class="author">
                             <i class="fad fa-pencil"></i>Moderator
                          </span>
                          <span class="float-end">
                             <i
                                class="fad fa-calendar-alt"
                                aria-hidden="true"
                             ></i
                             >Apr 21, 2021
                          </span>
                       </div>
                       <a href="blog-details.html" class="title"
                          >Best Luxury Switzerland Tours &amp; Travel Packages
                       </a>
                       <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Sequi, consectetur excepturi ipsam obcaecati
                          laudantium repellat quidem dolor! Quam, saepe
                          aspernatur in delectus rerum et porro iste illum,
                          atque voluptatem voluptatum. Lorem ipsum dolor sit
                          amet consectetur, adipisicing elit. Minima eum
                          reiciendis eos error provident magni ducimus
                          doloremque consequatur doloribus praesentium,
                          pariatur, adipisci, repellat ipsam dolorum quidem
                          omnis corporis nobis illum.
                       </p>
                       <a href="blog-details.html" class="btn-custom"
                          >Read more</a
                       >
                    </div>
                 </div>
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
                       <div class="date-author mb-3">
                          <span class="author">
                             <i class="fad fa-pencil"></i>Moderator
                          </span>
                          <span class="float-end">
                             <i
                                class="fad fa-calendar-alt"
                                aria-hidden="true"
                             ></i
                             >Apr 21, 2021
                          </span>
                       </div>
                       <a href="blog-details.html" class="title"
                          >Best Luxury Switzerland Tours &amp; Travel Packages
                       </a>
                       <p>
                          Lorem ipsum dolor sit amet consectetur, adipisicing
                          elit. Sequi, consectetur excepturi ipsam obcaecati
                          laudantium repellat quidem dolor! Quam, saepe
                          aspernatur in delectus rerum et porro iste illum,
                          atque voluptatem voluptatum. Lorem ipsum dolor sit
                          amet consectetur, adipisicing elit. Minima eum
                          reiciendis eos error provident magni ducimus
                          doloremque consequatur doloribus praesentium,
                          pariatur, adipisci, repellat ipsam dolorum quidem
                          omnis corporis nobis illum.
                       </p>
                       <a href="blog-details.html" class="btn-custom"
                          >Read more</a
                       >
                    </div>
                 </div>
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
    <!-- /BLOG -->

@endsection





{{-- 


    <section style="padding: 120px 0"id="blog">
        <div class="container">
            @if(isset($templates['blog'][0]) && $blog = $templates['blog'][0])
                <div class="d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="heading-container">
                            <h6 class="topheading">@lang(@$blog->description->title)</h6>
                            <h3 class="heading">@lang(@$blog->description->sub_title)</h3>
                            <p class="slogan">@lang(@$blog->description->short_title)</p>
                        </div>
                    </div>
                </div>
            @endif

            @if(isset($contentDetails['blog']))
            <div class="blog-wrapper">
                <div class="row">
                    @foreach($contentDetails['blog'] as $data)
                        <div class="col-md-6 col-lg-4">
                            <a class="card-blog card wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.15s"
                               href="{{route('blogDetails',[slug(@$data->description->title), $data->content_id])}}">
                                <div class="fig-container">
                                    <img
                                        class="w-100"
                                        src="{{getFile(config('location.content.path').'thumb_'.@$data->content->contentMedia->description->image)}}"
                                        alt="Image Missing">
                                </div>
                                <h5 class="h5 mt-5 mb-5">{{\Illuminate\Support\Str::limit(@$data->description->title,40)}}</h5>
                                <p class="text">
                                    {{Illuminate\Support\Str::limit(strip_tags(@$data->description->description),120)}}
                                </p>
                                <div class="date-wrapper colorbg-1">
                                    <h4 class="font-weight-medium fontubonto">{{dateTime(@$data->created_at,'d')}}</h4>
                                    <h4 class="font-weight-medium fontubonto">{{dateTime(@$data->created_at,'M')}}</h4>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </section> --}}
    
    

