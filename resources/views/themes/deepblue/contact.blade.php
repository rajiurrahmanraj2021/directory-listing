@extends($theme.'layouts.app')
@section('title',trans($title))

@section('banner_heading')
    @lang('Contact Us')
@endsection

@section('content')

     <!-- contact section -->
     <div class="contact-section">
        <div class="container">
           <div class="row gy-5 g-lg-5 align-items-top">
              <div class="col-lg-6">
                 <form class="contact-form" action="{{route('contact.send')}}" method="post">
                  @csrf
                    <div class="header-text">
                       <h5>Contact Us</h5>
                       <h3>@lang(@$contact->left_title)</h3>
                       <p>
                          @lang(@$contact->left_details)
                       </p>
                    </div>
                    <div class="row g-3">

                       <div class="input-box col-md-6">
                          <input class="form-control" name="name" value="{{old('name')}}" type="text" placeholder="@lang('Full name')" />
                          @error('name')
                              <span class="text-danger">{{$message}}</span>
                           @enderror
                       </div>

                       <div class="input-box col-md-6">
                          <input class="form-control" name="email" value="{{old('email')}}" type="email" placeholder="@lang('Email address')" />
                          @error('email')
                              <span class="text-danger">{{$message}}</span>
                           @enderror
                       </div>

                       <div class="input-box col-12">
                           <input class="form-control" type="text" name="subject" value="{{old('subject')}}" placeholder="@lang('Subject')">
                           @error('subject')
                              <span class="text-danger">{{$message}}</span>
                           @enderror
                       </div>

                       <div class="input-box col-12">
                           <textarea class="form-control" cols="30" rows="5" name="message" placeholder="@lang('Message')">{{old('message')}}</textarea>
                           @error('message')
                              <span class="text-danger">{{$message}}</span>
                           @enderror
                       </div>

                       <div class="input-box col-12">
                          <button class="btn-custom">submit</button>
                       </div>

                    </div>
                 </form>
              </div>
              <div class="col-lg-1"></div>
              <div class="col-lg-5">
                 <div class="text-box">
                    <div class="header-text"></div>
                    <div class="header-text">
                       <h3>@lang(@$contact->heading)</h3>
                       <p>
                          @lang(@$contact->short_details)
                       </p>
                    </div>
                    <div class="row">
                       <div class="info-box col-md-12">
                          <div class="icon-box">
                             <i class="fal fa-map-marker-alt"></i>
                          </div>
                          <div class="text">
                             <h5>Address</h5>
                             <p>
                              @lang(@$contact->address)
                             </p>
                          </div>
                       </div>
                       <div class="info-box col-md-12">
                          <div class="icon-box">
                             <i class="fal fa-envelope"></i>
                          </div>
                          <div class="text">
                             <h5>Email</h5>
                             <p>@lang(@$contact->email)</p>
                          </div>
                       </div>
                       <div class="info-box col-md-12">
                          <div class="icon-box">
                             <i class="fal fa-phone-alt"></i>
                          </div>
                          <div class="text">
                             <h5>Phone</h5>
                             <p>@lang(@$contact->phone)</p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    <!-- /CONTACT -->
@endsection


{{-- 
    
    <section style="padding: 120px 0"id="contact">
        <div class="container">
            <div class="contact-wrapper">
                <div class="d-flex align-items-start justify-content-center">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-details wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.35s">
                                    <div class="d-flex justify-content-center">
                                        <div class="mb-40 pb-40">
                                            <h2 class="h2 font-weight-medium text-uppercase">@lang(@$contact->heading)</h2>
                                            <h6 class="h6 fontlato">@lang(@$contact->sub_heading)</h6>
                                        </div>
                                    </div>

                                    <div class="contact-info">
                                        <h4 class="h4 mb-30 font-weight-medium">@lang(@$contact->title)</h4>
                                        <div class="media mb-30">
                                            <img class="w-100" src="{{asset($themeTrue.'images/icon/contact_icon_1.png')}}" alt="Image Missing">
                                            <div class="media-body ml-20">
                                                <p class="p">@lang(@$contact->address)</p>
                                            </div>
                                        </div>
                                        <div class="media mb-30">
                                            <img class="w-100" src="{{asset($themeTrue.'images/icon/contact_icon_2.png')}}" alt="Image Missing">
                                            <div class="media-body ml-20">
                                                <p class="p">@lang(@$contact->email)</p>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <img class="w-100" src="{{asset($themeTrue.'images/icon/contact_icon_3.png')}}" alt="Image Missing">
                                            <div class="media-body ml-20">
                                                <p class="p">@lang(@$contact->phone)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-wrapper wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.35s">
                                    <form class="contact-form" action="{{route('contact.send')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <h6 class="h6 fontlato mb-10">@lang('Name')</h6>

                                            <input class="form-control " name="name" value="{{old('name')}}" type="text"
                                                   placeholder="@lang('Name')">
                                            @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <h6 class="h6 fontlato mb-10">@lang('Email Address')</h6>
                                            <input class="form-control " name="email" value="{{old('email')}}"
                                                   type="email" placeholder="@lang('Email Address')">
                                            @error('email')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <h6 class="h6 fontlato mb-10">@lang('Subject')</h6>
                                            <input class="form-control" type="text" name="subject"
                                                   value="{{old('subject')}}" placeholder="@lang('Subject')">

                                            @error('subject')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <h6 class="h6 fontlato mb-10">@lang('Message')</h6>
                                            <textarea class="textarea-control" cols="30" rows="5" name="message" placeholder="@lang('Message')">{{old('message')}}</textarea>
                                            @error('message')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror

                                        </div>
                                        <button class="btn btn-primary" type="submit">{{trans('Send Message')}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    --}}