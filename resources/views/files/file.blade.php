@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    Manage Courses
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
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/fileinput/css/fileinput.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp_file_upload/css/jquery.fileupload.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp_file_upload/css/jquery.fileupload-ui.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/dropify/css/dropify.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/dropzone/css/dropzone.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/file_upload.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')
<!-- Content Header (Page header) -->
<header class="head">
    <div class="main-bar">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="nav_top_align">
                    <i class="fa fa-file-o"></i>
                    Upload a file here
                </h4>
            </div>
            <div class="col-lg-6">
                <div class="float-right">
                    <ol class="breadcrumb nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Components</a>
                        </li>
                        <li class="breadcrumb-item active">File Upload</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</header>
<form method="POST" action="/file-upload/" >
  <div class="outer">
      <div class="inner bg-container">
          <div class="row">
              <div class="col">
                  <div class="card file_input">
                      <div class="card-header bg-white">
                          Advanced File Upload
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col m-t-35">
                                  <h5>File Upload</h5>
                                  <input id="input-fa" name="file" type="file" class="validate" enctype="multipart/form-data">
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

</form>
@foreach($files as $file)
<div class="container">
  <div class="row">
    <div class="col-sm">
      {{$file->name}}
    </div>
    <div class="col-sm">
      {{$file->mime}}


    </div>
    <div class="col-sm">
      <a href="file-upload/download/{{$file->name}}">
          <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-download">download</i></button>
      </a>
    </div>
  </div>
</div>
<br />
@endforeach

@stop

{{-- page level scripts --}}
@section('footer_scripts')
<!--plugin script-->
<script type="text/javascript" src="{{asset('assets/vendors/fileinput/js/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/fileinput/js/theme.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.ui.widget.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp-tmpl/js/tmpl.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimploadimage/js/load-image.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp-canvas-to-blob/js/canvas-to-blob.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp-gallery-with-desc/js/jquery.blueimp-gallery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.iframe-transport.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.fileupload.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.fileupload-process.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.fileupload-image.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.fileupload-audio.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.fileupload-video.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.fileupload-validate.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/blueimp_file_upload/js/jquery.fileupload-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/dropify/js/dropify.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/vendors/dropzone/js/dropzone.js')}}"></script>
<!-- end of global scripts-->
<script type="text/javascript" src="{{asset('assets/js/pages/file_upload.js')}}"></script>
<script type="text/javascript">
$.ajaxSetup({
  headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
</script>
@stop


<!-- this is where the section begins -->
