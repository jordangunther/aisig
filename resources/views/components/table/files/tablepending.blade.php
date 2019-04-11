<div class="card">
    <div class="card-header bg-white">
        <h3>Manage Pending Lessons</h3>
    </div>
    <div class="card-body">
        @include('errors.error')
        @include('errors.success')
        <div class="table-responsive m-t-35">
            <table class="table">
                <thead>
                <tr>
                    <th>Lesson Name</th>
                    <th>Lesson Author</th>
                    <th>Lesson Course</th>
                    <th>Lesson Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($lesson as $lessons)
                        <tr>
                            <td>{{$lessons->lesson_title}}</td>
                            <td>{{$lessons->author}}</td>
                            <td>{{$lessons->course}}</td>
                            <td>{{$lessons->status}}</td>
                            <td>
                                <a href="/lessons/{{ $lessons->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD</button></a>
                                <a href="/lessons/{{ $lessons->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW</button></a>
                                <a href="/lessons/approve/{{ $lessons->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-success"><i class="fa fa-check" aria-hidden="true"></i> APPROVE</button></a>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#lesson-reject-{{ $lessons->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i> REJECT</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>