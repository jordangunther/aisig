<!DOCTYPE html>
<html>
<head>
    <title>Register | IASIG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- Global styles -->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/components.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/login3.css')}}"/>
    <!--End of Page level styles-->
</head>

<body class="login_backimg">
<div class="preloader" style="position: fixed;
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
<div class="container">
    <div class="row">
        <div class="col-10 mx-auto login_section">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12 mx-auto login_section login2_border register_section_top">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center text-white">
                            <a href="index"><img src="{{asset('assets/img/IASIG_logo_white.png')}}" class="admire_logo" alt="logo"></a><br />
                            <span class="m-t-15">SIGN UP</span>
                        </h3>
                    </div>
                    <div class="m-t-15">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="firstName" class="col-form-label text-white control-label">First Name *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control b_r_20" name="first_name" id="firstName" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-user text-white"></i>
                                    </span>
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="lastName" class="col-form-label text-white control-label">Last Name *</label>
                                <div class="input-group">
                                    <input type="text" class="form-control b_r_20" name="last_name" id="lastName" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-user text-white"></i>
                                    </span>
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-form-label text-white control-label">Email *</label>
                                <div class="input-group">
                                    <input type="email" placeholder="Email Address" name="email" id="email" class="form-control b_r_20" value="{{ old('email') }}" required>
                                    <span class="input-group-text  bl-0">
                                        <i class="fa fa-envelope text-white"></i>
                                    </span>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-form-label text-white">Password *</label>
                                <div class="input-group">
                                    <input type="password" placeholder="Password" id="password" name="password" class="form-control b_r_20" required>
                                    <span class="input-group-text  bl-0">
                                        <i class="fa fa-key text-white"></i>
                                    </span>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-form-label text-white">Confirm Password *</label>
                                <div class="input-group">
                                    <input type="password" placeholder="Confirm Password" name="password_confirmation" id="password-confirm" class="form-control b_r_20" required>
                                    <span class="input-group-text bl-0">
                                        <i class="fa fa-key text-white"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <label class="col-form-label text-white">Purpose for Signing Up</label>
                                </div>
                                <div class="col-12">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="user_type" class="custom-control-input form-control" value="basic" checked>
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">To Only View Courses</a>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="user_type" class="custom-control-input form-control" value="request_advance">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">To View and Upload Own Courses (Note, this will be reviewed before upload access is given)</a>
                                    </label>
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="user_type" class="custom-control-input form-control" value="request_basic_admin">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">To Have Admin Access (Note, this will be reviewed before Admin Privileges are given)</a>
                                    </label>
                                </div>
                            </div>
                            <!--<div class="form-group row">
                                <div class="col-12">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-label"></span>
                                        <a class="custom-control-description">Request Admin Access</a>
                                    </label>
                                </div>
                            </div>-->
                            <div class="form-group row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-block btn-success login_button b_r_20">Submit</button>
                                </div>
                                <div class="col-6">
                                    <button type="reset" class="btn btn-block btn-danger b_r_20">Reset</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="col-form-label text-white">Already have an account?</label>
                                    <a href="login" class="text-primary login_hover"><b>Log In</b></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/jquery.backstretch/js/jquery.backstretch.js')}}"></script>
<!--End of plugin js-->
<script type="text/javascript" src="{{asset('assets/js/pages/login3.js')}}"></script>
</body>

</html>
