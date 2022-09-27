@extends($theme.'layouts.user')
@section('title',trans('All Listing'))

@section('content')

    <!-- main -->
    <div class="container-fluid">
        <div class="switcher navigator">
           <button tab-id="tab1" class="tab active">
              Basic Info
           </button>
           <button tab-id="tab2" class="tab">Video</button>
           <button tab-id="tab3" class="tab">Amenities</button>
           <button tab-id="tab4" class="tab">Products</button>
           <button tab-id="tab5" class="tab">Photos</button>
        </div>
        <div id="tab1" class="add-listing-form content active">
           <div class="main row gy-4">
              <div class="col-xl-6">
                 <h3 class="mb-3">Basic Info</h3>

                 <form action="" class="">
                    <div class="row g-3">
                       <div class="input-box col-md-6">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Title"
                          />
                       </div>
                       <div class="input-box col-md-6">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Price"
                          />
                       </div>
                       <div class="input-box col-md-6">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Email"
                          />
                       </div>
                       <div class="input-box col-md-6">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Phone"
                          />
                       </div>
                       <!-- <div class="input-box col-md-12">
                          <input
                             class="form-control"
                             type="file"
                             id="formFile"
                          />
                       </div> -->
                       <div class="input-box col-12">
                          <select
                             class="form-select"
                             aria-label="Default select example"
                          >
                             <option selected="">Category</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                          </select>
                       </div>
                       <div class="input-box col-12">
                          <textarea
                             class="form-control"
                             cols="30"
                             rows="3"
                             placeholder="Description"
                          ></textarea>
                       </div>
                    </div>
                 </form>
              </div>

              <div class="col-xl-6">
                 <h3 class="mb-3">
                    Video <span class="optional">(optional)</span>
                 </h3>

                 <form action="" class="">
                    <div class="row g-3">
                       <div class="input-box col-md-12">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="URL"
                             name="video_id"
                          />
                       </div>
                       <div class="col-12">
                          <div class="youtube nk-plain-video">
                             <span class="nk-video-plain-toggle">
                                <span class="nk-video-icon">
                                   <svg
                                      class="svg-inline--fa fa-play fa-w-14 pl-5"
                                      aria-hidden="true"
                                      data-prefix="fa"
                                      data-icon="play"
                                      role="img"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 448 512"
                                      data-fa-i2svg
                                   >
                                      <path
                                         fill="#184af9"
                                         d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"
                                      />
                                   </svg>
                                </span>
                             </span>
                          </div>
                       </div>
                    </div>
                 </form>
              </div>

              <div class="col-xl-12">
                 <h3 class="mb-3">Location</h3>
                 <div class="map-box">
                    <div class="row">
                       <div class="col-xl-6">
                          <form
                             action="#"
                             method="post"
                          >
                             <div class="row g-3">
                                <div class="input-box col-md-6">
                                   <select
                                      class="js-example-basic-single form-control"
                                      name="state"
                                   >
                                      <option value="Bangladesh">
                                         Bangladesh
                                      </option>
                                      <option value="Pakistan">
                                         Pakistan
                                      </option>
                                      <option value="Afganistan">
                                         Afganistan
                                      </option>
                                      <option value="Palestine">
                                         Palestine
                                      </option>
                                      <option value="Istanbul">
                                         Istanbul
                                      </option>
                                   </select>
                                </div>
                                <div class="input-box col-md-6">
                                   <input
                                      id="address-search"
                                      class="form-control"
                                      name="place"
                                      type="text"
                                      placeholder="Search Location"
                                      autocomplete="off"
                                   />
                                </div>
                                <div class="input-box col-md-6">
                                   <input
                                      class="form-control"
                                      id="lat"
                                      name="lat"
                                      type="text"
                                      placeholder="Lat"
                                   />
                                </div>
                                <div class="input-box col-md-6">
                                   <input
                                      class="form-control"
                                      id="lng"
                                      name="lng"
                                      placeholder="Long"
                                      type="text"
                                   />
                                </div>
                             </div>
                          </form>
                       </div>
                       <div class="col-xl-6">
                          <div id="map">
                             <p>
                                You can also set location moving
                                marker
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>

              <div class="col-xl-6">
                 <h3 class="mb-3">Business Hours</h3>

                 <form action="" class="business-hour">
                    <div class="d-sm-flex justify-content-between">
                       <div class="input-box w-100 my-1 mx-sm-1">
                          <select
                             class="js-example-basic-single form-control"
                             name="day"
                          >
                             <option value="Satureday">
                                Satureday
                             </option>
                             <option value="Sunday">Sunday</option>
                             <option value="Monday">Monday</option>
                             <option value="Tuesday">Tuesday</option>
                             <option value="Wednesday">
                                Wednesday
                             </option>
                             <option value="Thursday">
                                Thursday
                             </option>
                             <option value="Friday">Friday</option>
                          </select>
                       </div>
                       <div class="d-flex">
                          <div class="input-box w-100 my-1 me-1">
                             <input
                                type="time"
                                class="form-control"
                                placeholder="Start Hour"
                             />
                          </div>
                          <div class="input-box w-100 my-1 me-1">
                             <input
                                type="time"
                                class="form-control"
                                placeholder="End Hour"
                             />
                          </div>
                          <div class="input-box my-1 me-1">
                             <button class="btn-custom add-new">
                                <i class="fal fa-plus"></i>
                             </button>
                          </div>
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-xl-6">
                 <h3 class="mb-3">Websites And Social Links</h3>
                 <form action="" class="">
                    <div class="d-flex justify-content-between">
                       <div class="input-box w-100 my-1 me-1">
                          <select
                             class="js-example-basic-single form-control"
                             name="social"
                          >
                             <option value="Facebook">
                                Facebook
                             </option>
                             <option value="Instagram">
                                Instagram
                             </option>
                             <option value="Twitter">Twitter</option>
                             <option value="Whatsapp">
                                Whatsapp
                             </option>
                             <option value="LinkedIn">
                                LinkedIn
                             </option>
                          </select>
                       </div>
                       <div class="input-box w-100 my-1 me-1">
                          <input
                             type="text"
                             class="form-control"
                             placeholder="URL"
                          />
                       </div>
                       <div class="my-1 me-1">
                          <button class="btn-custom add-new">
                             <i class="fal fa-plus"></i>
                          </button>
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-12 mb-3">
                 <button class="btn-custom">
                    <i
                       class="fal fa-check-circle"
                       aria-hidden="true"
                    ></i
                    >Submit changes
                 </button>
              </div>
           </div>
        </div>
        <div id="tab2" class="add-listing-form content">
           <div class="main row gy-4">
              <div class="col-xl-6">
                 <h3 class="mb-3">
                    Video <span class="optional">(optional)</span>
                 </h3>

                 <form action="" class="">
                    <div class="row g-3">
                       <div class="input-box col-md-12">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="URL"
                             name="video_id"
                          />
                       </div>
                       <div class="col-12">
                          <div class="youtube nk-plain-video">
                             <span class="nk-video-plain-toggle">
                                <span class="nk-video-icon">
                                   <svg
                                      class="svg-inline--fa fa-play fa-w-14 pl-5"
                                      aria-hidden="true"
                                      data-prefix="fa"
                                      data-icon="play"
                                      role="img"
                                      xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 448 512"
                                      data-fa-i2svg
                                   >
                                      <path
                                         fill="#184af9"
                                         d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"
                                      />
                                   </svg>
                                </span>
                             </span>
                          </div>
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-12 mb-3">
                 <button class="btn-custom">
                    <i
                       class="fal fa-check-circle"
                       aria-hidden="true"
                    ></i
                    >Submit changes
                 </button>
              </div>
           </div>
        </div>
        <div id="tab3" class="add-listing-form content">
           <div class="main row gy-4">
              <div class="col-xl-6">
                 <h3 class="mb-3">Amenities</h3>

                 <form action="" class="">
                    <div class="row g-3">
                       <div class="input-box col-md-12">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Title"
                          />
                       </div>
                       <div class="input-box col-md-12">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Icon"
                          />
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-12 mb-3">
                 <button class="btn-custom">
                    <i
                       class="fal fa-check-circle"
                       aria-hidden="true"
                    ></i
                    >Submit changes
                 </button>
              </div>
           </div>
        </div>
        <div id="tab4" class="add-listing-form content">
           <div class="main row gy-4">
              <div class="col-xl-6">
                 <h3 class="mb-3">Basic Info</h3>

                 <form action="" class="">
                    <div class="row g-3">
                       <div class="input-box col-md-6">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Title"
                          />
                       </div>
                       <div class="input-box col-md-6">
                          <input
                             class="form-control"
                             type="text"
                             placeholder="Price"
                          />
                       </div>
                       <div class="input-box col-md-12">
                          <input
                             class="form-control"
                             type="file"
                             id="formFile"
                          />
                       </div>
                       <div class="input-box col-12">
                          <select
                             class="form-select"
                             aria-label="Default select example"
                          >
                             <option selected="">Category</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                          </select>
                       </div>
                       <div class="input-box col-12">
                          <textarea
                             class="form-control"
                             cols="30"
                             rows="3"
                             placeholder="Description"
                          ></textarea>
                       </div>
                    </div>
                 </form>
              </div>
              <div class="col-12 mb-3">
                 <button class="btn-custom">
                    <i
                       class="fal fa-check-circle"
                       aria-hidden="true"
                    ></i
                    >Submit changes
                 </button>
              </div>
           </div>
        </div>
        <div id="tab5" class="add-listing-form content">
           <div class="main row gy-4">
              <div class="col-xl-6">
                 <h3 class="mb-3">Image</h3>
                 <div class="upload-img thumbnail">
                    <form>
                       <div class="img-box">
                          <input
                             accept="image/*"
                             type="file"
                             onchange="previewImage('frame')"
                          />
                          <span class="select-file"
                             >Select Image</span
                          >
                          <img
                             id="frame"
                             src="./img/product/product-1.jpg"
                             class="img-fluid"
                          />
                       </div>
                    </form>
                 </div>
                 <div class="more-images">
                    <div class="row g-3">
                       <div class="col-4 col-md-3 col-lg-2">
                          <img
                             src="./img/product/Champagne-Price-Guide-2.jpg"
                             alt=""
                             class="img-fluid rounded"
                          />
                       </div>
                       <div class="col-4 col-md-3 col-lg-2">
                          <img
                             src="./img/product/product-1.jpg"
                             alt=""
                             class="img-fluid rounded"
                          />
                       </div>
                       <div class="col-4 col-md-3 col-lg-2">
                          <img
                             src="./img/product/product-2.jpg"
                             alt=""
                             class="img-fluid rounded"
                          />
                       </div>
                       <div class="col-4 col-md-3 col-lg-2">
                          <button class="btn-custom">add more</button>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-12 mb-3">
                 <button class="btn-custom">
                    <i
                       class="fal fa-check-circle"
                       aria-hidden="true"
                    ></i
                    >Submit changes
                 </button>
              </div>
           </div>
        </div>
     </div>

@endsection