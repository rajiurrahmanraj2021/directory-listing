@extends($theme.'layouts.app')
@section('title',trans('Listing Details'))

@section('content')

     <!-- listing details -->
      <section class="listing-details">
         <div class="overlay">
            <div class="container">
               <div class="row g-lg-5">
                  <div class="col-lg-8">
                     <div class="listing-img-box">
                        <img
                           src="{{ asset('assets/themes/deepblue/img/pexels-pixabay-271624.jpg') }}"
                           alt=""
                           class="img-fluid rounded mb-3"
                        />
                        <span class="view-count">
                           <i class="fas fa-eye"></i> 432 Views
                        </span>
                     </div>
                     <div id="shareBlock"></div>
                     <div class="info-box mb-5">
                        <!-- <span class="category">Hotel & Motel</span> -->
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
                        <a class="title" href="listing-details.html">
                           Wize Shopping Mall
                        </a>
                        <p>Biggest shopping amll in NY</p>
                        <p class="address">
                           <i class="fas fa-map-marker-alt"></i>
                           75 Prince St, NY, USA
                        </p>
                     </div>
                     <div class="navigation">
                        <a class="short-nav-item active" href="#description"
                           >Description</a
                        >
                        <a class="short-nav-item" href="#products">Products</a>
                        <a class="short-nav-item" href="#reviews">Reviews</a>
                        <a class="short-nav-item" href="#listings"
                           >Related Listings</a
                        >
                     </div>
                     <div id="description" class="description-box">
                        <h4>Description</h4>
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing
                           elit. Commodi quidem impedit optio facilis ratione
                           tempora assumenda eligendi, quasi perferendis
                           provident, adipisci corporis consectetur vel facere
                           quam inventore sint ullam tenetur. <br />
                           <br />
                           Lorem ipsum, dolor sit amet consectetur adipisicing
                           elit. Nihil cum itaque explicabo. Tempore itaque
                           tempora vitae laborum sequi incidunt quisquam ea
                           deserunt! Velit, quas ab, dolor quidem autem quasi
                           maiores dicta atque asperiores veniam nesciunt?
                           Repellendus voluptatum id voluptatem, quis ullam
                           adipisci assumenda harum, quae ducimus quos similique
                           temporibus ipsum laudantium tempora distinctio facere
                           incidunt modi inventore? Qui placeat corporis eaque
                           assumenda quaerat consequuntur, modi esse doloremque
                           debitis veniam ipsam quo, voluptatum facilis
                           exercitationem corrupti dignissimos, amet porro! Ab
                           deserunt vero ratione? Alias dolores, tempore optio
                           voluptatem sit eos dolore rem velit, corporis ex
                           beatae neque molestias earum, explicabo qui!
                        </p>
                     </div>
                     <div class="video-box">
                        <h4>Video</h4>
                        <iframe
                           width="100%"
                           height="100%"
                           src="https://www.youtube.com/embed/LXb3EKWsInQ?controls=0"
                           frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen
                        ></iframe>
                     </div>
                     <div id="products" class="products mb-5">
                        <h4>Products</h4>
                        <div class="owl-carousel products-slider">
                           <div class="product-box">
                              <div class="img-box">
                                 <img
                                    class="img-fluid"
                                    src="{{ asset('assets/themes/deepblue/img/product/Champagne-Price-Guide-2.jpg') }}"
                                    alt=""
                                 />
                                 <button class="save">
                                    <i class="fal fa-heart"></i>
                                 </button>
                                 <span class="price"> $49 </span>
                              </div>
                              <div class="text-box">
                                 <a class="title" href="listing-details.html">
                                    champagne
                                 </a>
                                 <p>In stock</p>
                                 <button
                                    class="btn-custom"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productDetailsModal"
                                 >
                                    view details
                                 </button>
                              </div>
                           </div>
                           <div class="product-box">
                              <div class="img-box">
                                 <img
                                    class="img-fluid"
                                    src="{{ asset('assets/themes/deepblue/img/product/Grilled-Beef-Steak-thumbnail.jpg') }}"
                                    alt=""
                                 />
                                 <button class="save">
                                    <i class="fal fa-heart"></i>
                                 </button>
                                 <span class="price"> $49 </span>
                              </div>
                              <div class="text-box">
                                 <a class="title" href="listing-details.html">
                                    champagne
                                 </a>
                                 <p>In stock</p>
                                 <button
                                    class="btn-custom"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productDetailsModal"
                                 >
                                    view details
                                 </button>
                              </div>
                           </div>
                           <div class="product-box">
                              <div class="img-box">
                                 <img
                                    class="img-fluid"
                                    src="{{ asset('assets/themes/deepblue/img/product/Champagne-Price-Guide-2.jpg') }}"
                                    alt=""
                                 />
                                 <button class="save">
                                    <i class="fal fa-heart"></i>
                                 </button>
                                 <span class="price"> $49 </span>
                              </div>
                              <div class="text-box">
                                 <a class="title" href="listing-details.html">
                                    champagne
                                 </a>
                                 <p>In stock</p>
                                 <button
                                    class="btn-custom"
                                    data-bs-toggle="modal"
                                    data-bs-target="#productDetailsModal"
                                 >
                                    view details
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="reviews" class="reviews">
                        <div class="customer-review">
                           <h4>Reveiws</h4>
                           <div class="review-box">
                              <div class="text">
                                 <img src="{{ asset('assets/themes/deepblue/img/client/client-1.jpg') }}" alt="" />
                                 <span class="name">EmmanuelSamson</span>
                                 <p class="mt-3">
                                    Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Distinctio at facere
                                    earum, iste autem voluptas?
                                 </p>
                              </div>
                              <div class="review-date">
                                 <span class="review">
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                 </span>
                                 <br />
                                 <span class="date">29 May, 2022</span>
                              </div>
                           </div>
                           <div class="review-box">
                              <div class="text">
                                 <img src="{{ asset('assets/themes/deepblue/img/client/client-2.jpg') }}" alt="" />
                                 <span class="name">EmmanuelSamson</span>
                                 <p class="mt-3">
                                    Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Distinctio at facere
                                    earum, iste autem voluptas?
                                 </p>
                              </div>
                              <div class="review-date">
                                 <span class="review">
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                 </span>
                                 <br />
                                 <span class="date">22 Apr, 2022</span>
                              </div>
                           </div>
                           <div class="review-box">
                              <div class="text">
                                 <img src="{{ asset('assets/themes/deepblue/img/client/client-3.jpg') }}" alt="" />
                                 <span class="name">EmmanuelSamson</span>
                                 <p class="mt-3">
                                    Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Distinctio at facere
                                    earum, iste autem voluptas?
                                 </p>
                              </div>
                              <div class="review-date">
                                 <span class="review">
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                    <i
                                       class="fas fa-star"
                                       aria-hidden="true"
                                    ></i>
                                 </span>
                                 <br />
                                 <span class="date">29 Apr, 2022</span>
                              </div>
                           </div>

                           <div class="row mt-5">
                              <div class="col">
                                 <nav aria-label="Page navigation example">
                                    <ul
                                       class="pagination justify-content-center"
                                    >
                                       <li class="page-item">
                                          <a class="page-link">Previous</a>
                                       </li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">1</a>
                                       </li>
                                       <li class="page-item active">
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
                           </div>
                        </div>
                        <div class="add-review mb-5">
                           <h4>Add Review</h4>
                           <form action="">
                              <div class="mb-3">
                                 <p>
                                    Writing great reviews may help others
                                    discover the places that are just apt for
                                    them. Here are a few tips to write a good
                                    review:
                                 </p>
                                 <!-- <span>Your rating for this  listing</span> -->
                                 <div id="half-stars-example">
                                    <div class="rating-group">
                                       <input
                                          class="rating__input rating__input--none"
                                          checked=""
                                          name="rating2"
                                          id="rating2-0"
                                          value="0"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="0 stars"
                                          class="rating__label"
                                          for="rating2-0"
                                          >&nbsp;</label
                                       >
                                       <label
                                          aria-label="0.5 stars"
                                          class="rating__label rating__label--half"
                                          for="rating2-05"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star-half"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-05"
                                          value="0.5"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="1 star"
                                          class="rating__label"
                                          for="rating2-10"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-10"
                                          value="1"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="1.5 stars"
                                          class="rating__label rating__label--half"
                                          for="rating2-15"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star-half"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-15"
                                          value="1.5"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="2 stars"
                                          class="rating__label"
                                          for="rating2-20"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-20"
                                          value="2"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="2.5 stars"
                                          class="rating__label rating__label--half"
                                          for="rating2-25"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star-half"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-25"
                                          value="2.5"
                                          type="radio"
                                          checked=""
                                       />
                                       <label
                                          aria-label="3 stars"
                                          class="rating__label"
                                          for="rating2-30"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-30"
                                          value="3"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="3.5 stars"
                                          class="rating__label rating__label--half"
                                          for="rating2-35"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star-half"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-35"
                                          value="3.5"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="4 stars"
                                          class="rating__label"
                                          for="rating2-40"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-40"
                                          value="4"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="4.5 stars"
                                          class="rating__label rating__label--half"
                                          for="rating2-45"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star-half"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-45"
                                          value="4.5"
                                          type="radio"
                                       />
                                       <label
                                          aria-label="5 stars"
                                          class="rating__label"
                                          for="rating2-50"
                                          ><i
                                             class="rating__icon rating__icon--star fa fa-star"
                                             aria-hidden="true"
                                          ></i
                                       ></label>
                                       <input
                                          class="rating__input"
                                          name="rating2"
                                          id="rating2-50"
                                          value="5"
                                          type="radio"
                                       />
                                    </div>
                                 </div>
                              </div>
                              <div>
                                 <label
                                    for="exampleFormControlTextarea1"
                                    class="form-label"
                                    >Your message</label
                                 >
                                 <textarea
                                    class="form-control"
                                    id="exampleFormControlTextarea1"
                                    rows="5"
                                    placeholder="Opinion"
                                 ></textarea>
                              </div>
                              <button class="btn-custom">Submit now</button>
                           </form>
                        </div>
                     </div>
                     <div id="listings" class="related-listing">
                        <h4>Related Listings</h4>
                        <div class="row g-4">
                           <div class="col-lg-4 col-md-6">
                              <div class="listing-box">
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
                                    <a
                                       class="title"
                                       href="listing-details.html"
                                    >
                                       Wize Shopping Mall
                                    </a>
                                    <p>Biggest shopping amll in NY</p>
                                    <p class="address">
                                       <i class="fal fa-map-marker-alt"></i>
                                       75 Prince St, NY, USA
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="listing-box">
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
                                    <a
                                       class="title"
                                       href="listing-details.html"
                                    >
                                       Wize Shopping Mall
                                    </a>
                                    <p>Biggest shopping amll in NY</p>
                                    <p class="address">
                                       <i class="fal fa-map-marker-alt"></i>
                                       75 Prince St, NY, USA
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6">
                              <div class="listing-box">
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
                                    <a
                                       class="title"
                                       href="listing-details.html"
                                    >
                                       Wize Shopping Mall
                                    </a>
                                    <p>Biggest shopping amll in NY</p>
                                    <p class="address">
                                       <i class="fal fa-map-marker-alt"></i>
                                       75 Prince St, NY, USA
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="side-bar">
                        <div class="side-box">
                           <h5>Created By</h5>
                           <div class="creator-box">
                              <div class="img-box">
                                 <img
                                    src="{{ asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg') }}"
                                    alt=""
                                    class="img-fluid cover"
                                 />
                                 <img
                                    src="{{ asset('assets/themes/deepblue/img/client/client-1.jpg') }}"
                                    class="img-fluid profile"
                                    alt=""
                                 />
                              </div>
                              <div class="text-box">
                                 <a class="creator-name" href="profile.html">
                                    Jobanico Mina
                                    <i
                                       class="fas fa-check-circle"
                                       aria-hidden="true"
                                    ></i>
                                 </a>
                                 <span>Member since Nov 2021</span>
                                 <div
                                    class="d-flex justify-content-between my-3"
                                 >
                                    <span>80 Listings</span>
                                    <span>245 Followers</span>
                                 </div>
                                 <button class="btn-custom">
                                    Visit Profile
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="side-box">
                           <h5>Opening Hours</h5>
                           <ul>
                              <li>
                                 Monday
                                 <span class="float-end">9 AM - 5 PM</span>
                              </li>
                              <li>
                                 Tuesday
                                 <span class="float-end">9 AM - 5 PM</span>
                              </li>
                              <li>
                                 Wednesday
                                 <span class="float-end">9 AM - 5 PM</span>
                              </li>
                              <li>
                                 Thursday
                                 <span class="float-end">9 AM - 5 PM</span>
                              </li>
                              <li>
                                 Friday
                                 <span class="float-end">9 AM - 5 PM</span>
                              </li>
                              <li>
                                 Saturday
                                 <span class="float-end">9 AM - 5 PM</span>
                              </li>
                              <li>
                                 Sunday <span class="float-end">Closed</span>
                              </li>
                           </ul>
                        </div>
                        <div class="side-box">
                           <h5>Contact Seller</h5>
                           <ul>
                              <li>
                                 <i
                                    class="far fa-phone-alt"
                                    aria-hidden="true"
                                 ></i>
                                 <span>+880 654 321 23</span>
                              </li>
                              <li>
                                 <i
                                    class="far fa-envelope"
                                    aria-hidden="true"
                                 ></i>
                                 <span>contact@bugfinder.net</span>
                              </li>
                              <li>
                                 <i
                                    class="far fa-map-marker-alt"
                                    aria-hidden="true"
                                 ></i>
                                 <span>457 Morningview, New York USA</span>
                              </li>
                           </ul>

                           <div class="social-links mt-4">
                              <a href="#">
                                 <i
                                    class="fab fa-facebook"
                                    aria-hidden="true"
                                 ></i>
                              </a>
                              <a href="#">
                                 <i
                                    class="fab fa-discord"
                                    aria-hidden="true"
                                 ></i>
                              </a>
                              <a href="#">
                                 <i
                                    class="fab fa-twitter"
                                    aria-hidden="true"
                                 ></i>
                              </a>
                           </div>
                        </div>
                        <div class="side-box">
                           <h5>Send a Message</h5>
                           <form action="">
                              <div class="row g-3">
                                 <div class="input-box col-12">
                                    <input
                                       class="form-control"
                                       type="text"
                                       placeholder="Full name"
                                    />
                                 </div>
                                 <div class="input-box col-12">
                                    <select
                                       class="form-select"
                                       aria-label="Default select example"
                                    >
                                       <option selected>Subject</option>
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
                                       placeholder="Your message"
                                    ></textarea>
                                 </div>
                                 <div class="input-box col-12">
                                    <button class="btn-custom w-100">
                                       submit
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="side-box claim-business">
                           <div class="d-flex align-items-center">
                              <img
                                 src="{{ asset('assets/themes/deepblue/img/company/company-2.png') }}"
                                 class="img-fluid"
                                 alt=""
                              />
                              <div>
                                 <h5>Claim this business</h5>
                                 <button class="btn-custom">
                                    suggest an edit
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

     <!-- Modal -->
     <div
        class="modal fade product-query-modal"
        id="productDetailsModal"
        tabindex="-1"
        aria-labelledby="productDetailsModalLabel"
        aria-hidden="true"
     >
        <div class="modal-dialog modal-dialog-centered modal-lg">
           <div class="modal-content">
              <div class="modal-header">
                 <h5 class="modal-title" id="productDetailsModalLabel">
                    Beaf Steak
                 </h5>
                 <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                 ></button>
              </div>
              <div class="modal-body">
                 <div class="row">
                    <div class="col-lg-4">
                       <img
                          src="{{ asset('assets/themes/deepblue/img/product/Grilled-Beef-Steak-thumbnail.jpg') }}"
                          alt=""
                          class="img-fluid rounded"
                       />
                    </div>
                    <div class="col-lg-8">
                       <h5>Beaf Steak</h5>
                       <p>
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Dolorum, consectetur nemo animi esse maiores
                          perferendis rem minima culpa ex voluptatem doloribus
                          ad sed, harum incidunt unde fugit, praesentium a
                          magni.
                       </p>
                       <h4>$765</h4>
                       <p class="text-success">In Stock</p>
                       <form action="">
                          <div class="row g-3">
                             <div class="input-box col-12">
                                <input
                                   class="form-control"
                                   type="text"
                                   placeholder="Full name"
                                />
                             </div>
                             <div class="input-box col-12">
                                <select
                                   class="form-select"
                                   aria-label="Default select example"
                                >
                                   <option selected="">Subject</option>
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
                                   placeholder="Your message"
                                ></textarea>
                             </div>
                             <div class="input-box col-12">
                                <button class="btn-custom w-100">
                                   send query
                                </button>
                             </div>
                          </div>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
@endsection