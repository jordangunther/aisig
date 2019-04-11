@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    {{ $courses->course_title }}
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/c3/css/c3.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/toastr/css/toastr.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/switchery/css/switchery.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/new_dashboard.css')}}"/>
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/swiper/css/swiper.min.css')}}"/>
    <!-- end of page level styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/pages/widgets.css')}}">
@stop
@section('content')
<header class="head">
    <div class="main-bar">
        <div class="row no-gutters">
            <div class="col-lg-6 col-sm-5">
                <h4 class="nav_top_align">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    {{ $courses->course_title }}
                </h4>
            </div>
            <div class="col-lg-6 col-sm-7">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="/courses">
                            <i class="fa fa-home" aria-hidden="true"></i> Courses
                        </a>
                    </li>
                    <li class="breadcrumb-item active">{{ $courses->course_title }}</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="row">
            <div class="col-lg-12 col-12 m-t-35">
                <div class="bg-white left_align_img">
                    <div class="row">

                        <div class="col-md-8 col-12">
                            <div class="left_image">
                                <img src="{{ asset('storage/image/'.$courses->image) }}" alt="Image missing" class="img-fluid"/>
                            </div><br>
                            <div>
                                <h1>{{ $courses->course_title }}</h1>
                                <hr>
                            </div>
                            <div class="bg-white image_text">
                                <h4>Created By: {{ $courses->author }}</h4>
                                <span>Course Type: {{ $courses->category }}</span><br /><br />
                                <p>Course Description: {{ $courses->description }}</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h3>Courses Files</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive m-t-35">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>File Name</th>
                                                        <th>File Description</th>
                                                        <th>View</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($lessons as $lesson)
                                                            <tr>
                                                                <td>{{$lesson->lesson_title}}</td>
                                                                <td>{{ str_limit($lesson->description, 50) }}</td>
                                                                <td>
                                                                    <a href="/lessons/{{ $lesson->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW FILE</button></a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-12 text-justify left_img_text">
                            <div class="row sideBarRow">
                                <div class="col-12">
                                    <div class="text-primary font_18">About Course Author</div>
                                    <div class="left_media">
                                        <div class=" user-media">
                                            <div class="user-wrapper">
                                                <a class="user-link" href="/author/{{ $author[0]->id }}">
                                                    <img class="media-object img-thumbnail user-img rounded-circle " alt="User Picture" src="{{ asset('storage/image/'.$author[0]->user_image) }}">

                                                </a>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                    <h3 class="m-t-10" style="padding:60px 0;">{{ $courses->author }}</h3>
                                    <p>{{ $author[0]->description }}</p>
                                    <a href="/author/{{ $author[0]->id }}" class="widget_btn btn btn-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> More Courses from the Author</a>
                                </div>
                            </div>
                            <div class="row sideBarRow">
                                <div class="col-12">
                                    <div class="text-primary font_18">Course Info</div>
                                    <hr>
                                    <p>Category: {{ $courses->category }}</p>
                                    <p>Status: {{ $courses->status }}</p>
                                    <p>Created: {{ $courses->created_at->format('Y-m-d') }}</p>
                                </div>
                            </div>
                            <div class="row sideBarRow">
                                <div class="col-12">
                                    <div class="text-primary font_18">Course Files</div>
                                    <hr>
                                    @foreach ($lessons as $lesson)
                                        <a href="/lessons/{{ $lesson->id }}"><button class="widget_btn btn btn-block btn-outline-primary">{{ $lesson->lesson_title }}</button></a><br>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row sideBarRow">
                                <div class="col-12">
                                    <div class="text-primary font_18">IASIG Categories</div>
                                    <hr>
                                    @foreach ($category as $categories)
                                        <a href="/category/{{ $categories->id }}"><button class="widget_btn btn btn-block btn-outline-primary">{{ $categories->name }}</button></a><br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.inner -->
    </div>
    <!-- /.outer -->
</div>
    <!-- /#content -->
@stop
@section('footer_scripts')
    <script type="text/javascript" src="{{asset('assets/vendors/slimscroll/js/jquery.slimscroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/raphael/js/raphael.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/d3/js/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/c3/js/c3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/toastr/js/toastr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/switchery/js/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.resize.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.stack.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.time.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotspline/js/jquery.flot.spline.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.categories.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/flotchart/js/jquery.flot.pie.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/jquery_newsTicker/js/newsTicker.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/moment/js/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/slimscroll/js/jquery.slimscroll.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/countUp.js/js/countUp.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/swiper/js/swiper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/widget2.js')}}"></script>
    <!--end of plugin scripts-->
    <!--<script type="text/javascript" src="{{asset('assets/js/pages/new_dashboard.js')}}"></script>-->

@stop
