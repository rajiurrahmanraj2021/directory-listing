@extends($theme.'layouts.user')
@section('title',trans('Profile Settings'))

@section('content')
 
    <!-- main -->
    <div class="container-fluid">
        <div class="main row">
           <div class="col-12">
              <!-- edit profile section -->
              <section class="edit-profile-section">
                 <div class="row g-4">
                    <div class="col-xl-4">
                       <div class="sidebar-wrapper">
                          <div class="cover">
                             <div class="img">
                                <img
                                   id="cover"
                                   src="./img/pexels-darya-sannikova-2422386.jpg"
                                   alt=""
                                   class="img-fluid"
                                />
                                <button class="upload-img">
                                   <i
                                      class="fal fa-camera"
                                      aria-hidden="true"
                                   ></i>
                                   <input
                                      class="form-control"
                                      accept="image/*"
                                      type="file"
                                      onchange="previewImage('cover')"
                                   />
                                </button>
                             </div>
                          </div>
                          <div class="profile">
                             <div class="img">
                                <img
                                   id="profile"
                                   src="./img/client/client-1.jpg"
                                   alt=""
                                   class="img-fluid"
                                />
                                <button class="upload-img">
                                   <i
                                      class="fal fa-camera"
                                      aria-hidden="true"
                                   ></i>
                                   <input
                                      class="form-control"
                                      accept="image/*"
                                      type="file"
                                      onchange="previewImage('profile')"
                                   />
                                </button>
                             </div>
                             <div>
                                <h4 class="name">Trista Francis</h4>
                                <span>@Kalla.ban</span>
                             </div>
                          </div>
                          <div class="about mt-4">
                             <div>
                                <p class="bio">
                                   My name is Trista Francis &amp;
                                   change my occupation after five
                                   years of working in sales. I still
                                   like drawing.
                                </p>
                                <div class="links">
                                   <a href="">
                                      <i
                                         class="fas fa-globe"
                                         aria-hidden="true"
                                      ></i
                                      >tristafrancis.io
                                   </a>
                                   <a href="">
                                      <i
                                         class="fas fa-location-arrow"
                                         aria-hidden="true"
                                      ></i
                                      >Bran Street New York, USA
                                   </a>
                                   <a href="">
                                      <i
                                         class="fas fa-calendar-alt"
                                         aria-hidden="true"
                                      ></i
                                      >Joined March 2010
                                   </a>
                                </div>
                             </div>
                          </div>
                          <div class="counts mt-4">
                             <div class="count">
                                Listing
                                <span>78</span>
                             </div>
                             <div class="count">
                                Views
                                <span>950</span>
                             </div>
                             <div class="count">
                                Follower
                                <span>470</span>
                             </div>
                             <div class="count">
                                Following
                                <span>360</span>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-xl-8">
                       <form action="">
                          <h3 class="mb-3">Basic Info</h3>
                          <div class="row g-4">
                             <div class="input-box col-md-6">
                                <label for="">First Name</label>
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="First Name"
                                />
                             </div>
                             <div class="input-box col-md-6">
                                <label for="">Last Name</label>
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="Last Name"
                                />
                             </div>
                             <div class="input-box col-md-6">
                                <label for="">Email Address</label>
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="Email Address"
                                />
                             </div>
                             <div class="input-box col-md-6">
                                <label for="">Phone number</label>
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="Phone number"
                                />
                             </div>
                             <div class="input-box col-md-6">
                                <label for="">Username</label>
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="Username"
                                />
                             </div>
                             <div class="input-box col-md-6">
                                <label for="">Website</label>
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="Website"
                                />
                             </div>
                             <div class="input-box col-md-12">
                                <label for="">Address</label>
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="Address"
                                />
                             </div>
                             <div class="input-box col-12">
                                <label for="">Bio</label>
                                <textarea
                                   class="form-control"
                                   cols="30"
                                   rows="3"
                                   placeholder="Bio"
                                ></textarea>
                             </div>
                             <div class="input-box col-12">
                                <button class="btn-custom">
                                   <i
                                      class="fal fa-check-circle"
                                      aria-hidden="true"
                                   ></i
                                   >Submit changes
                                </button>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </section>
           </div>
        </div>
     </div>

@endsection




{{-- @push('css-lib')
    <link rel="stylesheet" href="{{asset($themeTrue.'css/bootstrap-fileinput.css')}}">
@endpush

@push('extra-js')
    <script src="{{asset($themeTrue.'js/bootstrap-fileinput.js')}}"></script>
@endpush

@push('script')
    <script>
        "use strict";
        $(document).on('click', '#image-label', function () {
            $('#image').trigger('click');
        });
        $(document).on('change', '#image', function () {
            var _this = $(this);
            var newimage = new FileReader();
            newimage.readAsDataURL(this.files[0]);
            newimage.onload = function (e) {
                $('#image_preview_container').attr('src', e.target.result);
            }
        });

        $(document).on('change', "#identity_type", function () {
            let value = $(this).find('option:selected').val();
            window.location.href = "{{route('user.profile')}}/?identity_type=" + value
        });
    </script>
@endpush --}}
