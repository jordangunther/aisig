@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    {{ $lessons->lesson_title }}
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
                    {{ $lessons->lesson_title }}
                </h4>
            </div>
            <div class="col-lg-6 col-sm-7">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="/courses">
                            <i class="fa fa-home" aria-hidden="true"></i> Courses
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        @if($lessons->course === 'independent')
                            @foreach ($category as $categories)
                                @if($lessons->course_id === $categories->id)
                                    <a href="/category/{{ $categories->id }}">
                                        {{ $categories->name }}
                                    </a>
                                @endif
                            @endforeach
                        @else
                            <a href="/courses/{{ $course[0]->id }}">
                                {{ $course[0]->course_title }}
                            </a>
                        @endif
                        
                    </li>
                    <li class="breadcrumb-item active">{{ $lessons->lesson_title }}</li>
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
                                <img src="{{ asset("storage/image/$lessons->image") }}" alt="Image missing" class="img-fluid"/>
                            </div><br>
                            <div>
                                <h1>{{ $lessons->lesson_title }}</h1>
                                <hr>
                            </div>
                            <div class="bg-white image_text">
                                <h4>Created By: {{ $user[0]->first_name }} {{ $user[0]->last_name }}</h4>

                                @if($lessons->course === 'independent')
                                    @foreach ($category as $categories)
                                        @if($lessons->course_id === $categories->id)
                                            <span>Category: {{ $categories->name }}</span><br /><br />
                                        @endif
                                    @endforeach
                                @else
                                    <span>Course: {{ $course[0]->course_title }} | Category: {{ $course[0]->category }}</span><br /><br />
                                @endif

                                <p>File Description: {{ $lessons->description }}</p>
                                <a href="/lessons/download/{{ $lessons->id }}" class="widget_btn btn btn-primary"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD ALL FILES</a>
                            </div>
                            <div class="row m-t-35">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <h3>Files</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive m-t-35">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>File Name</th>
                                                        <th>File Type</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($file as $files)
                                                            <tr>
                                                                <td>{{ $files->name }}</td>
                                                                <td>{{ $files->mime }}</td>
                                                                <td>
                                                                    <a href="/file/download/{{ $files->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> DOWNLOAD FILE</button></a>
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
                                    <div class="text-primary font_18">About File Author</div>
                                    <div class="left_media">
                                        <div class=" user-media">
                                            <div class="user-wrapper">
                                                <a class="user-link" href="/author/{{ $user[0]->id }}">
                                                    <img class="media-object img-thumbnail user-img rounded-circle " alt="User Picture" src="{{ asset('storage/image/'.$user[0]->user_image) }}" >
                                                </a>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                    <h3 class="m-t-10" style="padding:60px 0;">{{ $user[0]->first_name }}</h3>
                                    <p>{{ $user[0]->description }}</p>
                                    <a href="/author/{{ $user[0]->id }}" class="widget_btn btn btn-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> More About the Author</a>
                                </div>
                            </div>
                            @if($lessons->course === 'independent')
                                @foreach ($category as $categories)
                                    @if($lessons->course_id === $categories->id)
                                    <div class="row sideBarRow">
                                        <div class="col-12">
                                            <div class="text-primary font_18">File Info</div>
                                            <hr>
                                            <p>File Status: {{ $lessons->status }}</p>
                                            <p>Category: {{ $categories->name }}</p>
                                            <p>Created: {{ $lessons->created_at->format('Y-m-d') }}</p>
                                        </div>
                                    </div>
                                    <div class="row sideBarRow">
                                        <div class="col-12">
                                            <div class="text-primary font_18">Go to Category</div>
                                            <hr>
                                            <a href="/category/{{ $categories->id }}"><button class="widget_btn btn btn-block btn-outline-primary">{{ $categories->name }}</button></a><br>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            @else
                                <div class="row sideBarRow">
                                    <div class="col-12">
                                        <div class="text-primary font_18">File Info</div>
                                        <hr>
                                        <p>File Status: {{ $lessons->status }}</p>
                                        <p>Course: {{ $course[0]->course_title }}</p>
                                        <p>Course Status: {{ $course[0]->status }}</p>
                                        <p>Category: {{ $course[0]->category }}</p>
                                        <p>Created: {{ $lessons->created_at->format('Y-m-d') }}</p>
                                    </div>
                                </div>
                                <div class="row sideBarRow">
                                    <div class="col-12">
                                        <div class="text-primary font_18">Go to Course</div>
                                        <hr>
                                        <a href="/courses/{{ $course[0]->id }}"><button class="widget_btn btn btn-block btn-outline-primary">{{ $course[0]->course_title }}</button></a><br>
                                    </div>
                                </div>
                            @endif
                            
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
