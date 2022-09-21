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
                          omnis corporis nobis illum. Lorem ipsum dolor sit
                          amet consectetur, adipisicing elit. Sequi,
                          consectetur excepturi ipsam obcaecati laudantium
                          repellat quidem dolor! Quam, saepe aspernatur in
                          delectus rerum et porro iste illum, atque voluptatem
                          voluptatum. Lorem ipsum dolor sit amet consectetur,
                          adipisicing elit. Minima eum reiciendis eos error
                          provident magni ducimus doloremque consequatur
                          doloribus praesentium, pariatur, adipisci, repellat
                          ipsam dolorum quidem omnis corporis nobis illum.
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











{{-- 
    
    
    <section style="padding: 120px 0"id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card-blog card wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
                        <div class="fig-container">
                            <img class="br-4 w-fill w-25" src="{{$singleItem['image']}}" alt="{{$singleItem['title']}}">
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between w-fill mt-15 mb-15">
                                <p class="text">{{trans('Posted By- Admin')}}</p>
                                <p class="text">{{$singleItem['date']}}</p>
                            </div>

                            <h5 class="h5 mb-15 mt-15">{{$singleItem['title']}}</h5>
                            <div class="paragraph mb-10">
                                @lang($singleItem['description'])
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog-sidebar">

                        @if(isset($popularContentDetails['blog']))
                            <div class="sidebar-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
                                <h6 class="h6 mb-20">{{trans('Recent Post')}}</h6>
                                <div class="recent-post">
                                    @foreach($popularContentDetails['blog']->sortDesc() as $data)
                                        <a class="media align-items-center" href="{{route('blogDetails',[slug($data->description->title), $data->content_id])}}">
                                            <div class="media-img">
                                                <img class="br-4 w-25" src="{{getFile(config('location.content.path').'thumb_'.@$data->content->contentMedia->description->image)}}"
                                                     alt="{{@$data->description->title}}">
                                            </div>
                                            <div class="media-body ml-15">
                                                <p class="text hover-text">{{\Str::limit($data->description->title,40)}}</p>
                                                <p class="text">{{dateTime($data->created_at)}}</p>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </section>
    
    --}}
