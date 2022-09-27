
<?php $__env->startSection('title',trans('Profile')); ?>

<?php $__env->startSection('banner_heading'); ?>
   <?php echo app('translator')->get('Profile'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section class="profile-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cover-wrapper">
                        <div class="row gy-4">
                        <div class="col-lg-6">
                            <div class="about d-md-flex">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
                                    class="img-fluid profile"
                                    alt=""
                                />
                                <div>
                                    <h4 class="name">
                                    Trista Francis
                                    <i
                                        class="fas fa-check-circle"
                                        aria-hidden="true"
                                    ></i>
                                    </h4>
                                    <p class="bio">
                                    My name is Trista Francis &amp; change my
                                    occupation after five years of working in
                                    sales. I still like drawing.
                                    </p>
                                    <div class="links">
                                    <a href="">
                                        <i class="fas fa-globe"></i
                                        >tristafrancis.io
                                    </a>
                                    <a href="">
                                        <i class="fas fa-location-arrow"></i>Bran
                                        Street New York, USA
                                    </a>
                                    <a href="">
                                        <i class="fas fa-calendar-alt"></i>Joined
                                        March 2010
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-wrapper">
                                <div class="button-group">
                                    <button class="user-id">
                                    iaho5451sdf51d
                                    <i
                                        class="fal fa-copy"
                                        aria-hidden="true"
                                    ></i>
                                    </button>
                                    <button class="share">
                                    <div id="shareBlock"></div>
                                    <i
                                        class="fal fa-share-alt"
                                        aria-hidden="true"
                                    ></i>
                                    </button>
                                    <button class="btn-custom follow-btn disabled">
                                    <i
                                        class="fal fa-plus"
                                        aria-hidden="true"
                                    ></i
                                    >following
                                    </button>
                                </div>
                                <div class="social-links">
                                    <a href="facebook.com">
                                    <i
                                        class="fab fa-facebook"
                                        aria-hidden="true"
                                    ></i>
                                    </a>
                                    <a href="facebook.com">
                                    <i
                                        class="fab fa-linkedin-in"
                                        aria-hidden="true"
                                    ></i>
                                    </a>
                                    <a href="facebook.com">
                                    <i
                                        class="fab fa-twitter"
                                        aria-hidden="true"
                                    ></i>
                                    </a>
                                    <a href="facebook.com">
                                    <i
                                        class="fab fa-youtube"
                                        aria-hidden="true"
                                    ></i>
                                    </a>
                                </div>
                                <div class="counts">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="profile-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="followers">
                        <h4>Followers</h4>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-2.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-3.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="followers">
                        <h4>Following</h4>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-2.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-3.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                        <div class="follower">
                        <a href="profile.html">
                            <img
                                src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
                                class="img-fluid"
                                alt="follower"
                            />
                        </a>
                        <div class="creator-box">
                            <div class="img-box">
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/pexels-sebastian-voortman-214574.jpg')); ?>"
                                    alt=""
                                    class="img-fluid cover"
                                />
                                <img
                                    src="<?php echo e(asset('assets/themes/deepblue/img/client/client-1.jpg')); ?>"
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
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="created-listing">
                        <h4>Other Listings by Kim Jong Un</h4>
                        <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="listing-box">
                                <div class="img-box">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo e(asset('assets/themes/deepblue/img/item/16.jpg')); ?>"
                                    alt=""
                                    />
                                    <button class="save">
                                    <i class="fal fa-heart"></i>
                                    </button>
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
                                    <a class="title" href="listing-details.html">
                                    Wize Shopping Mall
                                    </a>
                                    <p>Biggest shopping amll in NY</p>
                                    <a class="author" href="profile.html">
                                    John Wick</a
                                    >
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
                    <div class="side-box">
                        <h5>Contact Creator</h5>
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
                                <button class="btn-custom w-100">send</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make($theme.'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/profile.blade.php ENDPATH**/ ?>