@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    {{ $category->name }}
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
                    IASIG COURSES
                </h4>
            </div>
            <div class="col-lg-6 col-sm-7">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="/courses">
                            <i class="fa fa-home" aria-hidden="true"></i> Courses
                        </a>
                    </li>
                    <li class="breadcrumb-item active">{{ $category->name }}</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="row">
            <div class="col-12 m-t-35">
                <div>
                    <h1>{{ $category->name }} Courses</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($course as $courses)
                @include('components.card.courses.card')
            @endforeach
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
