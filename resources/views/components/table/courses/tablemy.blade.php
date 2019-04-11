<div class="card">
    <div class="card-header bg-white">
    <button style="margin-left: 10px;" class="buttonSpacing widget_btn btn btn-primary pull-right" data-toggle="modal" data-target="#modal-upload-file"><i class="fa fa-plus" aria-hidden="true"></i> UPLOAD INDEPENDENT FILE</button>
    <button style="margin-left: 10px;" class="buttonSpacing widget_btn btn btn-primary pull-right" data-toggle="modal" data-target="#modal-create-lesson"><i class="fa fa-plus" aria-hidden="true"></i> CREATE NEW FILE</button>
    <button class="buttonSpacing widget_btn btn btn-primary pull-right" data-toggle="modal" data-target="#modal-create-course"><i class="fa fa-plus" aria-hidden="true"></i> CREATE NEW COURSE</button>
        <h3 style="padding-top:15px;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}'s Courses</h3>
    </div>
    <div class="card-body">
        @include('errors.error')
        @include('errors.success')
        <div class="table-responsive m-t-35">
            <table class="table">
                <thead>
                <tr style="background-color:#21c1ed;color:white;">
                    <th>Course Name</th>
                    <th>Course Catgory</th>
                    <th>Course Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($course as $courses)
                        <tr>
                            <td>{{$courses->course_title}}</td>
                            <td>{{$courses->category}}</td>
                            <td>{{$courses->status}}</td>
                            <td>
                                <button id="C{{ $courses->id }}" class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> SHOW FILES</button>
                                <a href="/courses/{{ $courses->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW COURSE</button></a>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-success" data-toggle="modal" data-target="#course-myupdate-{{ $courses->id }}"><i class="fa fa-upload" aria-hidden="true"></i> UPDATE COURSE</button>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#course-delete-{{ $courses->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE COURSE</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8" id="L{{ $courses->id }}" style="display:none;">
                                @include('components.table.lessons.tablemy')
                            </td>
                        </tr>
                        <script>
                            $(document).ready(function(){
                                $("#C{{ $courses->id }}").click(function(){
                                    $("#L{{ $courses->id }}").toggle();
                                });
                            });
                        </script>
                    @endforeach
                </tbody>
            </table>
            <div>
                <button class="buttonSpacing widget_btn btn btn-primary" data-toggle="modal" data-target="#modal-create-course"><i class="fa fa-plus" aria-hidden="true"></i> CREATE NEW COURSE</button>
                <button class="buttonSpacing widget_btn btn btn-primary" data-toggle="modal" data-target="#modal-create-lesson"><i class="fa fa-plus" aria-hidden="true"></i> CREATE NEW FILE</button>
            </div>
        </div>
    </div>
</div>
