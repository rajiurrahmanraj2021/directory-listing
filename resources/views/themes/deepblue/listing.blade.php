@extends($theme.'layouts.app')
@section('title',trans('Listing'))

@section('banner_heading')
   @lang('Best Listings')
@endsection

@section('content')

     <section class="listing-section">
        <div class="container-fluid">
           <div class="row">
              <div class="col-xl-2 col-lg-4 my-4">
                 <div class="filter-area">
                    <!-- INPUT FIELD -->
                    <div class="filter-box">
                       <h5>search</h5>
                       <div class="input-group mb-3">
                          <input
                             type="email"
                             class="form-control"
                             placeholder="search"
                          />
                       </div>
                       <div class="input-group mb-3">
                          <select
                             class="js-example-basic-single form-control"
                             name="state"
                          >
                             <option value="Audi">Select Region</option>
                             <option value="Bmw">Bmw</option>
                             <option value="Cadillac">Cadillac</option>
                             <option value="Dodge">Dodge</option>
                             <option value="Ferrari">Ferrari</option>
                             <option value="Hennessey">Hennessey</option>
                             <option value="Jaguar">Jaguar</option>
                          </select>
                       </div>
                       <div class="input-group">
                          <select
                             class="js-example-basic-single form-control"
                             name="state"
                          >
                             <option value="Audi">Select Region</option>
                             <option value="Bmw">Bmw</option>
                             <option value="Cadillac">Cadillac</option>
                             <option value="Dodge">Dodge</option>
                             <option value="Ferrari">Ferrari</option>
                             <option value="Hennessey">Hennessey</option>
                             <option value="Jaguar">Jaguar</option>
                          </select>
                       </div>
                    </div>
                    <!-- PRICE RANGE -->
                    <div class="filter-box">
                       <h5>Filter by price</h5>
                       <div class="input-box">
                          <input
                             type="text"
                             class="js-range-slider"
                             name="my_range"
                             value=""
                          />
                          <label for="customRange1" class="form-label mt-3">
                             $10 — $1,200</label
                          >
                       </div>
                    </div>
                    <div class="filter-box">
                       <h5>Filter by Ratings</h5>
                       <div class="check-box">
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="check1"
                             />
                             <label class="form-check-label" for="check1">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                             </label>
                          </div>
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="check2"
                             />
                             <label class="form-check-label" for="check2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                             </label>
                          </div>
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="check3"
                             />
                             <label class="form-check-label" for="check3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                             </label>
                          </div>
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="check4"
                             />
                             <label class="form-check-label" for="check4">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                             </label>
                          </div>
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="check5"
                             />
                             <label class="form-check-label" for="check5">
                                <i class="fas fa-star"></i>
                             </label>
                          </div>
                       </div>
                    </div>
                    <!-- SEARCH BY CATEGORIES -->
                    <div class="filter-box">
                       <h5>Categories</h5>
                       <div class="check-box">
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="categoryCheck1"
                             />
                             <label
                                class="form-check-label"
                                for="categoryCheck1"
                             >
                                Premium Services
                             </label>
                          </div>
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="categoryCheck2"
                             />
                             <label
                                class="form-check-label"
                                for="categoryCheck2"
                             >
                                Verified Services
                             </label>
                          </div>
                          <div class="form-check">
                             <input
                                class="form-check-input"
                                type="checkbox"
                                value=""
                                id="categoryCheck3"
                             />
                             <label
                                class="form-check-label"
                                for="categoryCheck3"
                             >
                                Trending Services
                             </label>
                          </div>
                       </div>
                    </div>
                    <button class="btn-custom w-100">submit</button>
                 </div>
              </div>
              <div class="col-xl-6 col-lg-8 my-4">
                 <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                       <div
                          class="listing-box listing-map-box active"
                          data-lat="51.509865" data-long="-0.118092" data-title="Wize Shopping Mall">
                          <div class="img-box">
                             <img
                                class="img-fluid"
                                src="{{ asset('assets/themes/deepblue/img/item/16.jpg') }}"
                                alt=""
                             />
                             <button class="save">
                                <i class="fal fa-heart"></i>
                             </button>
                             <span class="price"> $49 </span>
                          </div>
                          <div class="text-box">
                             <div class="review">
                                <span>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star-half"></i>
                                </span>
                                <span>(45 reviews)</span>
                             </div>
                             <h5 class="title">Wize Shopping Mall</h5>
                             <p>Biggest shopping amll in NY</p>
                             <p class="address">
                                <i class="fal fa-map-marker-alt"></i>
                                75 Prince St, NY, USA
                             </p>
                             <a href="{{ route('listing-details') }}" class="btn-custom"
                                >View details</a
                             >
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <div
                          class="listing-box listing-map-box"
                          data-lat="41.902782" data-long="12.496366" data-title="Wize Shopping Mall 2">
                          <div class="img-box">
                             <img
                                class="img-fluid"
                                src="{{ asset('assets/themes/deepblue/img/item/28.jpg') }}"
                                alt=""
                             />
                             <button class="save">
                                <i class="fal fa-heart"></i>
                             </button>
                             <span class="price"> $49 </span>
                          </div>
                          <div class="text-box">
                             <div class="review">
                                <span>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star-half"></i>
                                </span>
                                <span>(45 reviews)</span>
                             </div>
                             <h5 class="title">Wize Shopping Mall</h5>
                             <p>Biggest shopping amll in NY</p>
                             <p class="address">
                                <i class="fal fa-map-marker-alt"></i>
                                75 Prince St, NY, USA
                             </p>
                             <a href="listing-details.html" class="btn-custom"
                                >View details</a
                             >
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <div
                          class="listing-box listing-map-box"
                          data-lat="40.416775" data-long="-3.703790" data-title="Wize Shopping Mall 3">
                          <div class="img-box">
                             <img
                                class="img-fluid"
                                src="{{ asset('assets/themes/deepblue/img/item/28.jpg') }}"
                                alt=""
                             />
                             <button class="save">
                                <i class="fal fa-heart"></i>
                             </button>
                             <span class="price"> $49 </span>
                          </div>
                          <div class="text-box">
                             <div class="review">
                                <span>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star-half"></i>
                                </span>
                                <span>(45 reviews)</span>
                             </div>
                             <h5 class="title">Wize Shopping Mall</h5>
                             <p>Biggest shopping amll in NY</p>
                             <p class="address">
                                <i class="fal fa-map-marker-alt"></i>
                                75 Prince St, NY, USA
                             </p>
                             <a href="listing-details.html" class="btn-custom"
                                >View details</a
                             >
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                       <div
                          class="listing-box listing-map-box"
                          data-lat="39.925533" data-long="32.866287" data-title="Wize Shopping Mall 4">
                          <div class="img-box">
                             <img
                                class="img-fluid"
                                src="{{ asset('assets/themes/deepblue/img/item/9.jpg') }}"
                                alt=""
                             />
                             <button class="save">
                                <i class="fal fa-heart"></i>
                             </button>
                             <span class="price"> $49 </span>
                          </div>
                          <div class="text-box">
                             <div class="review">
                                <span>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star"></i>
                                   <i class="fas fa-star-half"></i>
                                </span>
                                <span>(45 reviews)</span>
                             </div>
                             <h5 class="title">Wize Shopping Mall</h5>
                             <p>Biggest shopping amll in NY</p>
                             <p class="address">
                                <i class="fal fa-map-marker-alt"></i>
                                75 Prince St, NY, USA
                             </p>
                             <a href="listing-details.html" class="btn-custom"
                                >View details</a
                             >
                          </div>
                       </div>
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
              {{-- <div class="col-xl-4 col-lg-12">
                  <img src="img/blog/g-map.jpg" alt="" class="img-fluid" /> 
                 <div class="h-100" id="map"></div>
              </div> --}}
              
           </div>
        </div>
     </section>

@endsection