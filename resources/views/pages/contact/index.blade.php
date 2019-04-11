@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    Contact Us
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
            <div class="col-md-12 m-t-35">
                <img src="{{asset("assets/img/iasig-login-banner.jpg")}}" alt="Image missing" class="img-fluid"/>
            </div>
        </div>
        <div class="row m-t-35">
            <div class="col-md-8">
                    <div>
                        <h1>Contact Us</h1>
                        <hr>
                    </div>
                    <div class="bg-white image_text">
                        <h4>If you have a questions or comments, fill out the form below and an IASIG Representative with contact you within the next 1-2 business days.</h4><br />
                        @include('errors.error')
                        @include('errors.success')
                        <form id="commentForm" method="GET" action="/contact/send" class="validate" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="tab-content">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email *</label>
                                    <input id="email" name="email" type="text" @if(Auth::user() ) value="{{ Auth::user()->email }}" @else placeholder="Email" @endif class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label for="message" class="control-label">Message *</label>
                                    <textarea id="message" name="message" type="text" placeholder="Must be at least 200 words..." class="form-control required" minlength="200"></textarea>
                                </div>
                                <button type="submit" class="buttonSpacing widget_btn btn btn-primary">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                
            </div>
            <div class="col-md-4">
                <!-- <img src="{{asset("assets/img/IASIG_logo.png")}}" alt="Image missing" class="img-fluid"/> -->
                <legend><i class="fa fa-globe"></i> Our office</legend>
                <address>
                    <strong>IASIG / MMA</strong><br>
                    PO Box 3173<br>
                    La Habra, CA 90632<br>
                    <div title="Phone">
                        Phone: (123) 456-7890</div>

                </address>
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
