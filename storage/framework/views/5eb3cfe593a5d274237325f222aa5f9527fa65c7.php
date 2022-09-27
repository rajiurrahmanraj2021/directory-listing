<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
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
        
    <!-- jquery ui -->
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/jquery-ui.css')); ?>" />
    <!-- radial progress -->

    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/radialprogress.css')); ?>" />
    <!-- select 2 -->
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/select2.min.css')); ?>" />

    <!-- leaflet -->
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/esri-leaflet-geocoder.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/leaflet-search.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/leaflet.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/leaflet-search.css')); ?>" />

    <!-- font awesome 5 -->
    <script src="<?php echo e(asset($themeTrue.'js/fontawesomepro.js')); ?>"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo e(asset($themeTrue.'css/user-style.css')); ?>" />


    <?php echo $__env->yieldPushContent('css-lib'); ?>

    <!----  Push your custom css  ----->
    <?php echo $__env->yieldPushContent('style'); ?>

</head>

<body>
    
    <div class="dashboard-wrapper">
        
        <?php echo $__env->make($theme.'partials.user.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- content -->
        <div id="content">
            <div class="overlay">
               <!-- navbar -->
               <nav class="navbar navbar-expand-lg">
                  <div class="container-fluid">
                     <a class="navbar-brand" href="index.html"> Listing. ddd</a>
                     <button class="sidebar-toggler" onclick="toggleSideMenu()">
                        <i class="fal fa-bars"></i>
                     </button>
                     <span class="navbar-text">
                        <!-- notification panel -->
                        <div class="notification-panel">
                           <button class="dropdown-toggle">
                              <i class="fal fa-bell"></i>
                              <span class="count">3</span>
                           </button>
                           <ul class="notification-dropdown">
                              <div class="dropdown-box">
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="fal fa-bell"></i>
                                       <div>
                                          <p>Notification</p>
                                          <span
                                             >Lorem ipsum dolor sit amet.</span
                                          >
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="fal fa-bell"></i>
                                       <div>
                                          <p>Notification</p>
                                          <span
                                             >Lorem ipsum dolor sit amet.</span
                                          >
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="fal fa-bell"></i>
                                       <div>
                                          <p>Notification</p>
                                          <span
                                             >Lorem ipsum dolor sit amet.</span
                                          >
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="fal fa-bell"></i>
                                       <div>
                                          <p>Notification</p>
                                          <span
                                             >Lorem ipsum dolor sit amet.</span
                                          >
                                       </div>
                                    </a>
                                 </li>
                                 <li>
                                    <a class="dropdown-item" href="#">
                                       <i class="fal fa-bell"></i>
                                       <div>
                                          <p>Notification</p>
                                          <span
                                             >Lorem ipsum dolor sit amet.</span
                                          >
                                       </div>
                                    </a>
                                 </li>
                              </div>
                              <div class="clear-all fixed-bottom">
                                 <a href="">Clear all</a>
                              </div>
                           </ul>
                        </div>
                        <!-- user panel -->
                        <div class="user-panel">
                           <span class="profile">
                              <img
                                 src="./img/client/client-1.jpg"
                                 class="img-fluid"
                                 alt=""
                              />
                           </span>
                           <ul class="user-dropdown">
                              <li>
                                 <a href="">
                                    <i class="fal fa-user"></i> Profile
                                 </a>
                              </li>
                              <li>
                                 <a href="">
                                    <i class="fal fa-key"></i> Change Password
                                 </a>
                              </li>
                              <li>
                                 <a href="">
                                    <i class="fal fa-sign-out-alt"></i> Sign Out
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </span>
                  </div>
               </nav>

               <?php echo $__env->yieldContent('content'); ?>
               
            </div>
         </div>

    </div>


<?php echo $__env->yieldPushContent('loadModal'); ?>
<?php echo $__env->yieldPushContent('extra-content'); ?>

      <!-- bootstrap -->
      <script src="<?php echo e(asset($themeTrue.'js/bootstrap.bundle.min.js')); ?>"></script>
      <!-- jquery cdn -->
      <script src="<?php echo e(asset($themeTrue.'js/jquery-3.6.0.min.js')); ?>"></script>
      <!-- jquery ui -->
      <script src="<?php echo e(asset($themeTrue.'js/jquery-ui.js')); ?>"></script>
      <!-- radial progress -->
      <script src="<?php echo e(asset($themeTrue.'js/radialprogress.js')); ?>"></script>
      <!-- select 2 -->
      <script src="<?php echo e(asset($themeTrue.'js/select2.min.js')); ?>"></script>
      <!-- leaflet -->
      <script src="<?php echo e(asset($themeTrue.'js/leaflet.js')); ?>"></script>
      <script src="<?php echo e(asset($themeTrue.'js/esri-leaflet.js')); ?>"></script>
      <script src="<?php echo e(asset($themeTrue.'js/leaflet-search.js')); ?>"></script>
      <script src="<?php echo e(asset($themeTrue.'js/esri-leaflet-geocoder.js')); ?>"></script>
      <script src="<?php echo e(asset($themeTrue.'js/bootstrap-geocoder.js')); ?>"></script>
      <!-- custom script -->
      <script src="<?php echo e(asset($themeTrue.'js/user-script.js')); ?>"></script>

<?php echo $__env->yieldPushContent('extra-js'); ?>

<script src="<?php echo e(asset('assets/global/js/notiflix-aio-2.7.0.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/pusher.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/vue.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/global/js/axios.min.js')); ?>"></script>


<script>
    'use strict';
    let pushNotificationArea = new Vue({
        el: "#pushNotificationArea",
        data: {
            items: [],
        },
        mounted() {
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

<?php echo $__env->yieldPushContent('script'); ?>


<?php echo $__env->make($theme.'partials.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    $(document).ready(function () {
        $(".language").find("select").change(function () {
            window.location.href = "<?php echo e(route('language')); ?>/" + $(this).val()
        })
    })

</script>

</body>
</html>
<?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/layouts/user.blade.php ENDPATH**/ ?>