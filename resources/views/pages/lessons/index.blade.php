@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    Files
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
<div class="outer">
    <div class="inner bg-container">
        <div class="row" id="recommended">
            <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35">
                <div>
                    <h1>File Categories</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="bg-white left_align_img">
                    <div class="row">
                        @foreach ($category as $categories)
                            <div class="col-md-4 col-sm-12">
                                <div class="m-t-15 text-center">
                                    <a href="/category/files/{{ $categories->id }}"><button class="widget_btn btn btn-block btn-outline-primary">{{ $categories->name }}</button></a><br>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="recommended">
            <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35">
                <div>
                    <h1>Recommended Files</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35">
                <div class="swiper-container widget_swiper2 p-b-20">
                    <div class="swiper-wrapper">
                        @foreach ($lesson as $lessons)
                            @include('components.slider.lessons.slider')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

         @foreach ($category as $categories)
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35">
                    <div>
                        <h1>{{ $categories->name }} Files</h1>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35">
                    <div class="swiper-container widget_swiper2 p-b-20">
                        <div class="swiper-wrapper">
                            @foreach ($course as $courses)
                                @foreach ($lesson as $lessons)
                                    @if($courses->category == $categories->name)
                                        @if($lessons->course === 'independent')
                                            @if($lessons->course_id === $categories->id)
                                                @include('components.slider.lessons.slider')
                                            @endif
                                        @elseif($lessons->course_id === $courses->id)
                                            @include('components.slider.lessons.slider')
                                        @endif
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35 spaceCategory">
                    <a href="/category/{{ $categories->id }}"><button class="widget_btn btn-lg btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> View All {{ $categories->name }} Files</button></a>
                </div>
            </div>
        @endforeach

        <div class="row" id="authors">
            <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35">
                <div>
                    <h1>Top Authors</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($author->slice(0, 3) as $authors)
                @include('components.slider.author.authorSlider')
            @endforeach
            <div class="col-12 col-lg-12 col-md-12 col-12 m-t-35 spaceCategory">
                <a href="{{URL::to('/authors')}}"><button class="widget_btn btn-lg btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> View All Authors</button></a>
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
    <script type="text/javascript" src="{{asset('assets/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
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
