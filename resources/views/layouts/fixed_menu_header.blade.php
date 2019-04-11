<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        | IASIG
        @show
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
    @yield('header_styles')
</head>

<body class="fixedMenu_left fixedNav_position">
<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="{{asset('assets/img/loader.gif')}}" style=" width: 40px;" alt="loading...">
    </div>
</div>
<div id="wrap">
    <div id="top" class="fixed">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand" href="/courses">
                    <img src="{{asset('assets/img/IASIG_logo.png')}}" class="admin_img" alt="logo">
                </a>
                <div class="menu mr-sm-auto">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="top_search_box d-none d-md-flex">
                    <form id="commentForm" method="get" action="/search" class="header_input_search" enctype="multipart/form-data">
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit">
                            <span class="font-icon-search"></span>
                        </button>
                        <div class="overlay"></div>
                    </form>
                </div>
                <div class="topnav dropdown-menu-right">
                    <div class="btn-group small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">

                                <img src="{{ asset('storage/image/'.Auth::user()->user_image) }}" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                     alt="avatar"> <strong>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>
                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    User Information</a>
                                <a class="dropdown-item" href="/manage/accountSettings/{{ Auth::user()->id }}"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div class="wrapper fixedNav_top">
        <div id="left" class="fixed">
            <div class="menu_scroll left_scrolled">
                <div class="left_media">
                    <div class="media user-media">
                        <div class="user-media-toggleHover">
                            <span class="fa fa-user"></span>
                        </div>
                        <div class="user-wrapper">
                            <a class="user-link" href="/author/{{ Auth::user()->id }}">

                                <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="{{ asset('storage/image/'.Auth::user()->user_image) }}" />
                                <p class="user-info menu_hide">Welcome {{ Auth::user()->first_name }}</p>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </div>
                <ul id="menu">
                    <li {!! (Request::is('courses')? 'class="active"':"") !!}>
                        <a href="{{ URL::to('courses') }} ">
                            <i class="fa fa-home"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Courses</span>
                        </a>
                    </li>
                    <li {!! (Request::is('lessons')? 'class="active"':"") !!}>
                        <a href="{{ URL::to('lessons') }} ">
                            <i class="fa fa-file"></i>
                            <span class="link-title menu_hide">&nbsp;&nbsp;Files</span>
                        </a>
                    </li>
                    <li {!! (Request::is('authors')|| Request::is ('author')? 'class="active"':"") !!}>
                    <a href="{{ URL::to('authors') }} ">
                        <i class="fa fa-users"></i>
                        <span class="link-title menu_hide">&nbsp;Authors
                            </span>
                    </a>
                    </li>
                    @if(Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin' || Auth::user()->user_type == 'admin')
                        <li {!! (Request::is('mycourses')|| Request::is ('courses/create')? 'class="active"':"") !!}>
                            <a href="{{ URL::to('mycourses') }} ">
                                <i class="fa fa-tachometer"></i>
                                <span class="link-title menu_hide">&nbsp;My Content
                                    </span>
                            </a>
                        </li>
                    @endif
                    @if(Auth::user()->user_type == 'admin')
                    <li class="dropdown_menu {!! (Request::is('category')|| Request::is('manage/courses/pending')|| Request::is('manage/courses')|| Request::is('manage/lessons')|| Request::is('manage/lessons/pending') || Request::is('manage/courses/search') ? 'active':'' )!!}">
                        <a href="javascript:;">
                            <i class="fa fa-th-large"></i>
                            <span class="link-title menu_hide">&nbsp; Manage Content</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li {!! (Request::is('manage/courses')|| Request::is('manage/courses/search')? 'class="active"':"") !!}>
                                <a href="{{URL::to('/manage/courses')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Courses
                                </a>
                            </li>
                            <li {!! (Request::is('manage/lessons')? 'class="active"':"") !!}>
                                <a href="{{URL::to('/manage/lessons')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Files
                                </a>
                            </li>
                            <li {!! (Request::is('manage/courses/pending')? 'class="active"':"") !!}>
                                <a href="{{URL::to('/manage/courses/pending')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Pending Courses
                                </a>
                            </li>
                            <li {!! (Request::is('manage/lessons/pending')? 'class="active"':"") !!}>
                                <a href="{{URL::to('/manage/lessons/pending')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Pending Files
                                </a>
                            </li>
                            <li {!! (Request::is('category')? 'class="active"':"") !!}>
                                <a href="{{URL::to('/category')}} ">
                                    <i class="fa fa-angle-right"></i>
                                    &nbsp; Categories
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li  class="dropdown_menu {!! (Request::is('manage')|| Request::is('manage/advance/pending')|| Request::is('manage/admin/pending') || Request::is('manage/users')? 'active':'')!!}">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="link-title menu_hide">&nbsp; Manage Users</span>
                            <span class="fa arrow menu_hide"></span>
                        </a>
                        <ul>
                            <li {!! (Request::is('manage/advance/pending')? 'class="active"':"") !!}>
                            <a href="{{URL::to('/manage/advance/pending')}} ">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Pending Contributors
                            </a>
                            </li>
                            <li {!! (Request::is('manage/admin/pending')? 'class="active"':"") !!}>
                            <a href="{{URL::to('/manage/admin/pending')}} ">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Pending Admins
                            </a>
                            </li>
                            <li {!! (Request::is('manage/users')? 'class="active"':"") !!}>
                            <a href="{{URL::to('/manage/users')}} ">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Users
                            </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    <li {!! (Request::is('about')? 'class="active"':"") !!}>
                        <a href="{{ URL::to('/about') }} ">
                            <i class="fa fa-question"></i>
                            <span class="link-title menu_hide">&nbsp;About IASIG
                                </span>
                        </a>
                    </li>
                    <li {!! (Request::is('contact')? 'class="active"':"") !!}>
                        <a href="{{ URL::to('/contact') }} ">
                            <i class="fa fa-phone"></i>
                            <span class="link-title menu_hide">&nbsp;Contact Us
                                </span>
                        </a>
                    </li>
                </ul>
                <!-- /#menu -->
            </div>
        </div>
        <!-- /#left -->

        <div id="content" class="bg-container">
            <!-- Content -->
            @yield('content')
            <!-- Content end -->
        </div>
        <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
             aria-hidden="true">
            <form>
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span class="float-right" aria-hidden="true">&times;</span>
                        </button>
                        <div class="input-group search_bar_small">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <span class="input-group-append">
        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
      </span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#content -->


</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="{{asset('assets/js/components.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!-- end of global scripts-->
<!-- page level js -->
@yield('footer_scripts')
<!-- end page level js -->
</body>
</html>