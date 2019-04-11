@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    Account Settings
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!-- plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}" />
    <!--end of page level css-->
    <style>
        .br-0{
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
    </style>
@stop
@section('content')
    <header class="head">
        <div class="main-bar">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <h4 class="nav_top_align skin_txt">
                        <i class="fa fa-pencil"></i>
                        Account Settings
                    </h4>
                </div>
            </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body m-t-25">
                            <div>
                                <h4>Personal Information</h4>
                            </div>
                            @include('errors.error')
                            @include('errors.success')
                            <form id="commentForm" method="POST" action="/users/update/{{ $users[0]->id }}" class="validate" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col">
                                        <!--<div class="form-group row m-t-15">
                                            <div class="col-12 col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Profile Pic</label>
                                            </div>
                                            <div class="col-12 col-lg-6 text-center text-lg-left">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new img-thumbnail text-center">
                                                        <img src="{{asset('assets/img/admin2.jpg')}}" data-src="img/admin2.jpg" alt="not found"></div>
                                                    <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                    <div class="m-t-20 text-center">
                                                            <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="...">
                                                            </span>
                                                        <a href="#" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="form-group row m-t-25">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="firstName" class="col-form-label">First Name </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                        <span class="input-group-text br-0"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                                    <input type="text" value="{{ $users[0]->first_name}}" name="first_name" id="firstName" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="lastName" class="col-form-label">Last Name </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                        <span class="input-group-text br-0"> <i class="fa fa-user text-primary"></i>
                                    </span>
                                                    <input type="text" value="{{ $users[0]->last_name}}" name="last_name" id="lastName" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="text" value="{{ $users[0]->email}}" id="email" name="email" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="description" class="col-form-label">Description
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-pencil text-primary"></i></span>
                                                    <textarea type="text" value="{{ $users[0]->description}}" id="description" name="description" class="form-control">{{ $users[0]->description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="user_image" class="col-form-label">Self Image</label><br>
                                                <label for="user_image" class="col-form-label">(200 x 200)</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <img src="{{ asset("image/{$users[0]->user_image}") }}" alt="Image missing" class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="user_image" class="col-form-label">Upload Self Image
                                                </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-file text-primary"></i></span>
                                                    <input type="file" id="user_image" name="user_image" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group gender_message row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label class="col-form-label">Background Color</label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="background_image" class="custom-control-input" value="banner_sky.jpg" @if($users[0]->background_image === "banner_sky.jpg") checked @endif >
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Blue</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="background_image" class="custom-control-input" value="banner_neutral.jpg" @if($users[0]->background_image === "banner_neutral.jpg") checked @endif >
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">White</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="background_image" class="custom-control-input" value="banner_watermelon.jpg" @if($users[0]->background_image === "banner_watermelon.jpg") checked @endif >
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Red</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input type="radio" name="background_image" class="custom-control-input" value="banner_carbon.jpg" @if($users[0]->background_image === "banner_carbon.jpg") checked @endif >
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Grey</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="pwd" class="col-form-label">Password </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" value="{{ $users[0]->password}}" name="password" id="pwd" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label for="cpwd" class="col-form-label">Confirm Password </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="input-group">
                                                    <span class="input-group-text  br-0"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" name="confirmpassword" value="" id="cpwd" class="form-control">
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="form-group gender_message row">
                                            <div class="col-12 col-lg-3 text-lg-right">
                                                <label class="col-form-label">User Access: </label>
                                            </div>
                                            <div class="col-12 col-xl-6 col-lg-8">
                                                <div class="custom-controls-stacked">
                                                    <label class="col-form-label">
                                                        @if($users[0]->user_type == 'basic')
                                                            Basic User
                                                        @elseif($users[0]->user_type == 'advance')
                                                            Contributor User
                                                        @elseif($users[0]->user_type == 'admin')
                                                            Admin User
                                                        @elseif($users[0]->user_type == 'request_advance')
                                                            Pending as Contributor User
                                                        @elseif($users[0]->user_type == 'request_basic_admin')
                                                            Pending as Admin User
                                                        @elseif($users[0]->user_type == 'request_advance_admin')
                                                            Pending as Admin User
                                                        @else
                                                            Pending User
                                                        @endif
                                                    </label>
                                                    <input type="hidden" name="user_type" class="custom-control-input" value="{{ $users[0]->user_type }}">
                                                </div>
                                            </div>
                                        </div>
                                        @if($users[0]->user_type == 'basic')
                                            <div class="form-group gender_message row">
                                                <div class="col-12 col-lg-3 text-lg-right">
                                                    <label class="col-form-label">Request Access: </label>
                                                </div>
                                                <div class="col-12 col-xl-6 col-lg-8">
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio2" type="radio" name="user_type" class="custom-control-input" value="request_advance">
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description">Contributor User: Request to view and upload own courses (Note, this will be reviewed before upload access is given)</span>
                                                        </label>
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio3" type="radio" name="user_type" class="custom-control-input" value="request_basic_admin">
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description">Admin User: Request to have admin access (Note, this will be reviewed before admin privileges are given)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        @elseif($users[0]->user_type == 'advance')
                                            <div class="form-group gender_message row">
                                                <div class="col-12 col-lg-3 text-lg-right">
                                                    <label class="col-form-label">Request Access: </label>
                                                </div>
                                                <div class="col-12 col-xl-6 col-lg-8">
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control custom-radio">
                                                            <input id="radio3" type="radio" name="user_type" class="custom-control-input" value="request_advance_admin">
                                                            <span class="custom-control-label"></span>
                                                            <span class="custom-control-description">Admin User: Request to have admin access (Note, this will be reviewed before admin privileges are given)</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if($users[0]->user_type == 'request_advance' || $users[0]->user_type == 'request_basic_admin' || $users[0]->user_type == 'request_advance_admin')
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <p>Cannot Update Account while account is pending</p>
                                            </div>
                                        </div>
                                        @else
                                        <div class="form-group row">
                                            <div class="col-12 col-lg-9 ml-auto">
                                                <button type="submit" class="widget_btn btn btn-success">SAVE</button>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
@stop
@section('footer_scripts')
    <!-- plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pluginjs/jasny-bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/holderjs/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <!-- end of plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/validation.js')}}"></script>
@stop
