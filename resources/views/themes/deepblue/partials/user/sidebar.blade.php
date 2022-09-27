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
        <a class="active" href="{{ route('user.home') }}"
            ><i class="fal fa-th-large"></i>@lang('Dashboard')</a
        >
    </li>
    <li>
        <a href="{{ route('user.profile') }}">
            <i class="fal fa-user-edit"></i>@lang('Edit Profile')
        </a>
    </li>
    <li>
        <a href="{{ route('user.allListing') }}"
            ><i class="fal fa-th-list"></i>All Listing</a
        >
    </li>
    <li>
        <a href="{{ route('user.addListing') }}"
            ><i class="fal fa-file-edit"></i>Add Listing</a
        >
    </li>
    <li>
        <a href="getpaid.html"
            ><i class="fal fa-wallet"></i>Sign Out</a
        >
    </li>
    </ul>
</div>