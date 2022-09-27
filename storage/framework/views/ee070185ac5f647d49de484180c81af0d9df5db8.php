<!DOCTYPE html>
<html class="no-js" lang="en" <?php if(session()->get('rtl') == 1): ?> dir="rtl" <?php endif; ?> >
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <?php echo $__env->make('partials.seo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- bootstrap 5 -->
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/bootstrap.min.css')); ?>" />
        <!-- select 2 -->
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/select2.min.css')); ?>" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/animate.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/owl.carousel.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/owl.theme.default.min.css')); ?>" />
        <!-- range slider -->
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/range-slider.css')); ?>" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/magnific-popup.css')); ?>"/>
        <!-- xzoom -->
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/xzoom.min.css')); ?>" />

        <!-- font awesome 5 -->
        <script src="<?php echo e(asset($themeTrue.'js/fontawesomepro.js')); ?>"></script>

        <!-- custom css -->
        <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/style.css')); ?>" />

        <?php echo $__env->yieldPushContent('css-lib'); ?>

        <!----  Push your custom css  ----->
        <?php echo $__env->yieldPushContent('style'); ?>

    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    <img src="<?php echo e(getFile(config('location.logoIcon.path').'logo.png')); ?>"
                         alt="<?php echo e(config('basic.site_title')); ?>">
                 </a>
                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo e(route('home')); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('pricing')); ?>">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('listing')); ?>">Listing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('category')); ?>">Category</a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('blog')); ?>">Blogs</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-text">
                    <!-- user panel -->
                    <div class="dropdown user-dropdown d-inline-block">
                        <button class="dropdown-toggle">
                            <i class="far fa-user"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fal fa-hand-holding-usd"></i>
                                    make a deposit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fal fa-wallet"></i>
                                    withdraw funds
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fal fa-user-friends"></i>
                                    invite friends
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fal fa-user"></i>
                                    personal profile
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fal fa-history"></i>
                                    bet history
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fal fa-cog"></i>
                                    account settings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- notification panel -->
                    <div class="notification-panel">
                        <button class="dropdown-toggle">
                            <i class="far fa-bell"></i>
                            <span class="count">34</span>
                        </button>
                        <ul class="notification-dropdown">
                            <div class="dropdown-box">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fal fa-bell"></i>
                                        <div class="text">
                                            <p>Notification</p>
                                            <span>Lorem ipsum dolor sit amet.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fal fa-bell"></i>
                                        <div class="text">
                                            <p>Notification</p>
                                            <span>Lorem ipsum dolor sit amet. </span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fal fa-bell"></i>
                                        <div class="text">
                                            <p>Notification</p>
                                            <span>Lorem ipsum dolor sit amet.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fal fa-bell"></i>
                                        <div class="text">
                                            <p>Notification</p>
                                            <span>Lorem ipsum dolor sit amet.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="fal fa-bell"></i>
                                        <div class="text">
                                            <p>Notification</p>
                                            <span>Lorem ipsum dolor sit amet.</span>
                                        </div>
                                    </a>
                                </li>
                            </div>
                            <div class="clear-all fixed-bottom">
                            <a href="">Clear all</a>
                            </div>
                        </ul>
                    </div>
                    <!-- login register button -->
                    <a href="<?php echo e(route('login')); ?>" class="btn-custom">Sign in</a>
                </div>
            </div>
        </nav>

        <?php echo $__env->make($theme.'partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>


        <?php echo $__env->make($theme.'partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        

        <?php echo $__env->yieldPushContent('extra-content'); ?>


        <!-- bootstrap -->
        <script src="<?php echo e(asset($themeTrue.'js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- jquery cdn -->
        <script src="<?php echo e(asset($themeTrue.'js/jquery-3.6.0.min.js')); ?>"></script>
        <!-- select 2 -->
        <script src="<?php echo e(asset($themeTrue.'js/select2.min.js')); ?>"></script>
        <!-- owl carousel -->
        <script src="<?php echo e(asset($themeTrue.'js/owl.carousel.min.js')); ?>"></script>
        <!-- range slider -->
        <script src="<?php echo e(asset($themeTrue.'js/range-slider.min.js')); ?>"></script>
        <!-- leaflet js -->
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
    
        <!-- social share -->
        <script src="<?php echo e(asset($themeTrue.'js/socialSharing.js')); ?>"></script>
        <!-- magnific popup -->
        <script src="<?php echo e(asset($themeTrue.'js/magnific-popup.js')); ?>"></script>
        <!-- xzoom -->
        <script src="<?php echo e(asset($themeTrue.'js/xzoom.min.js')); ?>"></script>
        <!-- custom script -->
        <script src="<?php echo e(asset($themeTrue.'js/script.js')); ?>"></script>

        <?php echo $__env->yieldPushContent('extra-js'); ?>

        <script src="<?php echo e(asset('assets/global/js/notiflix-aio-2.7.0.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/global/js/pusher.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/global/js/vue.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/global/js/axios.min.js')); ?>"></script>
        
        <?php echo $__env->yieldPushContent('script'); ?>

        <?php if(auth()->guard()->check()): ?>
            <script>
                'use strict';
                let pushNotificationArea = new Vue({
                    el: "#pushNotificationArea",
                    data: {
                        items: [],
                    },
                    beforeMount() {
                        this.getNotifications();
                        this.pushNewItem();
                    },
                    methods: {
                        getNotifications() {
                            let app = this;
                            axios.get("<?php echo e(route('user.push.notification.show')); ?>")
                                .then(function (res) {
                                    app.items = res.data;
                                })
                        },
                        readAt(id, link) {
                            let app = this;
                            let url = "<?php echo e(route('user.push.notification.readAt', 0)); ?>";
                            url = url.replace(/.$/, id);
                            axios.get(url)
                                .then(function (res) {
                                    if (res.status) {
                                        app.getNotifications();
                                        if (link != '#') {
                                            window.location.href = link
                                        }
                                    }
                                })
                        },
                        readAll() {
                            let app = this;
                            let url = "<?php echo e(route('user.push.notification.readAll')); ?>";
                            axios.get(url)
                                .then(function (res) {
                                    if (res.status) {
                                        app.items = [];
                                    }
                                })
                        },
                        pushNewItem() {
                            let app = this;
                            // Pusher.logToConsole = true;
                            let pusher = new Pusher("<?php echo e(env('PUSHER_APP_KEY')); ?>", {
                                encrypted: true,
                                cluster: "<?php echo e(env('PUSHER_APP_CLUSTER')); ?>"
                            });
                            let channel = pusher.subscribe('user-notification.' + "<?php echo e(Auth::id()); ?>");
                            channel.bind('App\\Events\\UserNotification', function (data) {
                                app.items.unshift(data.message);
                            });
                            channel.bind('App\\Events\\UpdateUserNotification', function (data) {
                                app.getNotifications();
                            });
                        }
                    }
                });
            </script>
        <?php endif; ?>

        <?php echo $__env->make($theme.'partials.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if($errors->any()): ?>
            <?php
                $collection = collect($errors->all());
                $errors = $collection->unique();
            ?>
            <script>
                "use strict";
                <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    Notiflix.Notify.Failure("<?php echo e(trans($error)); ?>");
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </script>
        <?php endif; ?>
        
        <script>
            $(document).ready(function () {
                $(".language").find("select").change(function () {
                    window.location.href = "<?php echo e(route('language')); ?>/" + $(this).val()
                })
            })
        </script>

    </body>
</html>
<?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/layouts/app.blade.php ENDPATH**/ ?>