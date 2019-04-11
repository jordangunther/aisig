<div class="card">
    <div class="card-header bg-white">
        <h3>Manage All Courses</h3>
    </div>
    <div class="card-body">
        @include('errors.error')
        @include('errors.success')
        <div class="top_search_box d-none d-md-flex">
            <form id="commentForm" method="get" action="/manage/courses/search" class="header_input_search" enctype="multipart/form-data">
                <input type="text" placeholder="Search" name="search">
                <button type="submit">
                    <span class="font-icon-search"></span>
                </button>
                <div class="overlay"></div>
            </form>
        </div>
        <div class="table-responsive m-t-35">
            <table class="table">
                <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Course Author</th>
                    <th>Course Catgory</th>
                    <th>Course Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($course as $courses)
                        <tr>
                            <td>{{$courses->course_title}}</td>
                            @foreach ($user as $users)
                                @if($courses->user_id == $users->id)
                                    <td>{{$users->first_name}} {{$users->last_name}}</td>
                                @endif
                            @endforeach
                            <td>{{$courses->category}}</td>
                            <td>{{$courses->status}}</td>
                            <td>
                                <a href="/courses/{{ $courses->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW</button></a>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-success" data-toggle="modal" data-target="#course-update-{{ $courses->id }}"><i class="fa fa-upload" aria-hidden="true"></i> UPDATE</button>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#course-delete-{{ $courses->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>