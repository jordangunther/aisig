@extends(('layouts/fixed_menu_header'))
{{-- Page title --}}
@section('title')
    Create
    @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!--plugin style-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/fileinput/css/fileinput.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp_file_upload/css/jquery.fileupload.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp_file_upload/css/jquery.fileupload-ui.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/dropify/css/dropify.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/dropzone/css/dropzone.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/file_upload.css')}}">
    <!--End of page level styles-->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')}}"/>
    <!--page level styles-->
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/pages/wizards.css')}}"/>
    <!--End of page styles-->

@stop
@section('content')
<header class="head">
    <div class="main-bar">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-4 col-sm-4">
                <h4 class="nav_top_align">
                    <i class="fa fa-pencil"></i>
                    Create a Course
                </h4>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8">
                <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                    <li class="breadcrumb-item">
                        <a href="/mycourses">
                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                            My Courses
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Create Course</li>
                </ol>
            </div>
        </div>
    </div>
</header>
<div class="outer form_wizzards">
    <div class="inner bg-container">
        <div class="row">
            <div class="col">
                <div class="card m-t-35">
                    <div class="card-header bg-white">
                        <i class="fa fa-file-text-o"></i>
                        Your New Course
                    </div>
                    <div class="card-body m-t-20">
                        <!--main content-->
                        <div class="row">
                            <div class="col">
                                @if (count($errors) > 0)
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                <form id="commentForm" method="POST" action="/files" class="validate" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div id="rootwizard">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item m-t-15">
                                                <a class="nav-link" href="#tab1" data-toggle="tab">
                                                    <span class="userprofile_tab1">1</span>Course
                                                    Details</a>
                                            </li>
                                            <li class="nav-item m-t-15">
                                                <a class="nav-link" href="#tab2" data-toggle="tab">
                                                    <span class="userprofile_tab2">2</span>Image
                                                    Upload</a>
                                            </li>
                                            <li class="nav-item m-t-15">
                                                <a class="nav-link" href="#tab3"
                                                   data-toggle="tab"><span>3</span>Finish</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content m-t-20">
                                            <div class="tab-pane" id="tab1">
                                                <div class="form-group">
                                                    <label for="courseTitle" class="control-label">Course
                                                        Title *</label>
                                                    <input id="courseTitle" name="course_title" type="text"
                                                           placeholder="Enter a Title"
                                                           class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label for="category" class="control-label">Course
                                                       Category *</label>
                                                       <select id="catergory" name="category" type="text" class="form-control required">
                                                            <option value="" disabled selected>Select Category</option>
                                                            @foreach ($category as $categories)
                                                                <option value="{{ $categories->name}}">{{ $categories->name}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="description" class="control-label">Course
                                                        Description *</label>
                                                    <textarea id="description" name="description" type="text"
                                                           placeholder="Enter a Course Description"
                                                           class="form-control required"></textarea>
                                                </div>
                                                <ul class="pager wizard pager_a_cursor_pointer">
                                                    <li class="previous">
                                                        <a><i class="fa fa-long-arrow-left"></i>
                                                            Previous</a>
                                                    </li>
                                                    <li class="next">
                                                        <a>Next <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </li>
                                                    <li class="next finish" style="display:none;">
                                                        <a>Finish</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="row">
                                                    <div class="col m-t-35">
                                                        <h5>Course Image Upload</h5>
                                                        <input id="input-fa" name="image" type="file" multiple class="file-loading">
                                                    </div>
                                                </div>
                                                <!--<div class="row">
                                                    <div class="col-sm m-t-35 button_file">
                                                        <h5>Select File</h5>
                                                        <input id="input-4" name="input4[]" type="file" multiple class="file-loading" style="display: block">
                                                    </div>
                                                    <div class="col-sm m-t-35">
                                                        <h5>Image Upload</h5>
                                                        <input id="input-21" type="file" accept="image/*" class="file-loading">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 m-t-35">
                                                        <h5>Select Only File</h5>
                                                        <input id="input-22" name="input22[]" type="file" class="file-loading" accept="text/plain" multiple>
                                                    </div>
                                                </div>-->
                                                <ul class="pager wizard pager_a_cursor_pointer">
                                                    <li class="previous">
                                                        <a><i class="fa fa-long-arrow-left"></i>
                                                            Previous</a>
                                                    </li>
                                                    <li class="next">
                                                        <a>Next <i class="fa fa-long-arrow-right"></i>
                                                        </a>
                                                    </li>
                                                    <li class="next finish" style="display:none;">
                                                        <a>Finish</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <div class="form-group">
                                                    <span>Terms and Conditions *</span>
                                                    <br>
                                                    <label class="custom-control custom-checkbox wizard_label_block">
                                                        <input type="checkbox" id="acceptTerms"
                                                                name="acceptTerms"
                                                                class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description custom_control_description_color">I agree with the Terms and Conditions.</span>
                                                    </label>

                                                </div>
                                                <ul class="pager wizard pager_a_cursor_pointer">
                                                    <li class="previous">
                                                        <a><i class="fa fa-long-arrow-left"></i>
                                                            Previous</a>
                                                    </li>
                                                    <li>
                                                        <input class="upload" type="submit" value="Upload" />
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">

                                                    <h4 class="modal-title">Wizard</h4>
                                                    <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You Submitted Successfully.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                            data-dismiss="modal">
                                                        OK
                                                    </button>
                                                    <input type="submit" value="Submit">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--main content end-->
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- /.inner -->
@stop
@section('footer_scripts')
    <!--Plugin scripts-->
    <script type="text/javascript" src="{{asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/vendors/twitter-bootstrap-wizard/js/jquery.bootstrap.wizard.min.js')}}"></script>
    <!--End of plugin scripts-->
    <!--Page level scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/wizard.js')}}"></script>
    <!-- end page level scripts -->
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
    <script type="text/javascript" src="{{asset('assets/vendors/dropzone/js/dropzone.min.js')}}"></script>
    <!-- end of global scripts-->
    <script type="text/javascript" src="{{asset('assets/js/pages/file_upload.js')}}"></script>
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar bg-success" style="width:0%;"></div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start m-t-10" disabled>
                    <i class="fa fa-arrow-up"></i>
                    <span>Start</span>
                </button>
                {% } %} {% if (!i) { %}
                <button class="btn btn-warning cancel m-t-10">
                    <i class="fa fa-close"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}



</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a> {% } else { %}
                    <span>{%=file.name%}</span> {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete m-t-10" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                    <i class="fa fa-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                <button class="btn btn-warning cancel m-t-10">
                    <i class="fa fa-close"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}

</script>
@stop