<!-- sidebar -->
<div id="sidebar" class="">
    <div class="sidebar-top">
    <a class="navbar-brand" href="index.html">
        <img src="./img/logo.png" alt="" />
    </a>
    <button
        class="sidebar-toggler d-md-none"
        onclick="toggleSideMenu()"
    >
        <i class="fal fa-times"></i>
    </button>
    </div>
    <ul class="main">
    <li>
        <a class="active" href="<?php echo e(route('user.home')); ?>"
            ><i class="fal fa-th-large"></i><?php echo app('translator')->get('Dashboard'); ?></a
        >
    </li>
    <li>
        <a href="<?php echo e(route('user.profile')); ?>">
            <i class="fal fa-user-edit"></i><?php echo app('translator')->get('Edit Profile'); ?>
        </a>
    </li>
    <li>
        <a href="<?php echo e(route('user.allListing')); ?>"
            ><i class="fal fa-th-list"></i>All Listing</a
        >
    </li>
    <li>
        <a href="<?php echo e(route('user.addListing')); ?>"
            ><i class="fal fa-file-edit"></i>Add Listing</a
        >
    </li>
    <li>
        <a href="getpaid.html"
            ><i class="fal fa-wallet"></i>Sign Out</a
        >
    </li>
    </ul>
</div><?php /**PATH D:\server\htdocs\project\resources\views/themes/deepblue/partials/user/sidebar.blade.php ENDPATH**/ ?>