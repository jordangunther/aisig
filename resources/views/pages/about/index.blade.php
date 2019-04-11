@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    About IASIG
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
        <div class="row">
            <div class="col-lg-12 col-12 m-t-35">
                <div class="bg-white left_align_img">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{asset("assets/img/iasig-soundboard-banner.jpg")}}" alt="Image missing" class="img-fluid" />
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-8 m-t-35">
                            <div>
                                <h1>About IASIG</h1>
                                <hr>
                            </div>
                            <div class="about-p col-12">
                              ‘Game Audio’ encompasses a diverse set of skills and concepts: from recording a tank, to hardcore DSP programming; from writing a tune for a mobile phone, to writing out string parts for a recording session with the London Symphony Orchestra... so defining a "game audio curriculum" is no simple task. Universities and Colleges around the world are interested in developing courses in this area, so the aim of the EDU Working Group is to provide guidance for course developers, which students may also use to understand what courses may be available to them.
                            </div>
                            <div class="col-12 m-t-35">
                              The EDUWG also maintains the industry's only dedicated, online game audio resource for educators and students - The IASIG Interactive Audio Wiki --- <a href="http://www.iasig.org/wiki/">http://www.iasig.org/wiki/</a>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="about-list-title col-12 m-t-35">
                              <h3>The EDUWG goals include:</h3>
                            </div>
                            <div class="about-list col-12">
                              <ul class="list-group">
                                <li class="list-group-item">Shortening the learning curve of new audio personnel in game audio by providing resources that people can learn from.</li>
                                <li class="list-group-item">Creating a clear reference for terminology and creation methods in the world of game audio.</li>
                                <li class="list-group-item">Supplying schools with information to integrate game audio education into their curricula.</li>
                              </ul>
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
