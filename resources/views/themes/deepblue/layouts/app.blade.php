<!DOCTYPE html>
<html class="no-js" lang="en" @if(session()->get('rtl') == 1) dir="rtl" @endif >
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @include('partials.seo')

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('assets/themes/deepblue/assets/bootstrap/bootstrap.min.css') }}" />
        <!-- select 2 -->
        <link rel="stylesheet" href="{{ asset('assets/themes/deepblue/assets/plugins/select2/select2.min.css') }}" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="{{ asset('assets/themes/deepblue/assets/plugins/owlcarousel/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/themes/deepblue/assets/plugins/owlcarousel/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/themes/deepblue/assets/plugins/owlcarousel/owl.theme.default.min.css') }}" />
        <!-- range slider -->
        <link rel="stylesheet" href="{{ asset('assets/themes/deepblue/assets/plugins/rangeslider/range-slider.css') }}" />
        <!-- font awesome 5 -->
        <script src="{{ asset('assets/themes/deepblue/assets/fontawesome/fontawesomepro.js') }}"></script>
        <!---- Here is your Css Library----->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.scss')}}"/>
        <!-- custom css -->
        <link rel="stylesheet" href="{{ asset('assets/themes/deepblue/css/style.css') }}" />

        <!----  How to load Css Library, Here is an example ----->
        {{--    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>--}}
        @stack('css-lib')

        <!----  Push your custom css  ----->
        @stack('style')

    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{getFile(config('location.logoIcon.path').'logo.png')}}"
                         alt="{{config('basic.site_title')}}">
                 </a>
                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="far fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listing') }}">Listing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('category') }}">Category</a>
                         </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Blogs</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
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
                    <a href="{{ route('login') }}" class="btn-custom">Sign in</a>
                </div>
            </div>
        </nav>

        @include($theme.'partials.banner')

        @yield('content')


        @include($theme.'partials.footer')

        {{-- @include($theme.'partials.cookie') --}}

        @stack('extra-content')


        <!-- bootstrap -->
        <script src="{{ asset('assets/themes/deepblue/assets/bootstrap/bootstrap.bundle.min.js') }}"></script>
        <!-- jquery cdn -->
        <script src="{{ asset('assets/themes/deepblue/assets/jquery/jquery-3.6.0.min.js') }}"></script>
        <!-- select 2 -->
        <script src="{{ asset('assets/themes/deepblue/assets/plugins/select2/select2.min.js') }}"></script>
        <!-- owl carousel -->
        <script src="{{ asset('assets/themes/deepblue/assets/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
        <!-- range slider -->
        <script src="{{ asset('assets/themes/deepblue/assets/plugins/rangeslider/range-slider.min.js') }}"></script>
        <!-- leaflet js -->
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
        <!-- social share -->
        <script src="{{ asset('assets/themes/deepblue/assets/plugins/socialjs/socialSharing.js') }}"></script>
        <!-- magnific popup -->
        <script src="{{ asset('assets/themes/deepblue/assets/plugins/magnific-popup/magnific-popup.js') }}"></script>
        <!-- xzoom -->
        <script src="{{ asset('assets/themes/deepblue/assets/plugins/xZoom/xzoom.min.js') }}"></script>
        

        @stack('extra-js')

        <script src="{{asset('assets/global/js/notiflix-aio-2.7.0.min.js')}}"></script>
        <script src="{{asset('assets/global/js/pusher.min.js')}}"></script>
        <script src="{{asset('assets/global/js/vue.min.js')}}"></script>
        <script src="{{asset('assets/global/js/axios.min.js')}}"></script>
        <!-- custom script -->
        <script src="{{ asset('assets/themes/deepblue/js/script.js') }}"></script>

        @stack('script')

        @auth
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
                            axios.get("{{ route('user.push.notification.show') }}")
                                .then(function (res) {
                                    app.items = res.data;
                                })
                        },
                        readAt(id, link) {
                            let app = this;
                            let url = "{{ route('user.push.notification.readAt', 0) }}";
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
                            let url = "{{ route('user.push.notification.readAll') }}";
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
                            let pusher = new Pusher("{{ env('PUSHER_APP_KEY') }}", {
                                encrypted: true,
                                cluster: "{{ env('PUSHER_APP_CLUSTER') }}"
                            });
                            let channel = pusher.subscribe('user-notification.' + "{{ Auth::id() }}");
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
        @endauth

        @include($theme.'partials.notification')

        @if ($errors->any())
            @php
                $collection = collect($errors->all());
                $errors = $collection->unique();
            @endphp
            <script>
                "use strict";
                @foreach ($errors as $error)
                    Notiflix.Notify.Failure("{{trans($error)}}");
                @endforeach
            </script>
        @endif
        
        <script>
            $(document).ready(function () {
                $(".language").find("select").change(function () {
                    window.location.href = "{{route('language')}}/" + $(this).val()
                })
            })
        </script>

    </body>
</html>
