<div class="modal fade" id="lesson-update-{{ $lessons->id }}" role="dialog" aria-labelledby="modalLabelsuccess">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="modalLabelsuccess">Update File</h4>
                <button class="widget_btn btn btn-success" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="post" action="/lessons/updates/{{ $lessons->id }}" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="form-group">
                                <label for="lessonTitle" class="control-label">File
                                    Title</label>
                                <input id="lessonTitle" name="lesson_title" type="text"
                                        value="{{ $lessons->lesson_title }}"
                                        class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="user_id" class="control-label">File
                                    User</label>
                                    <select id="user_id" name="user_id" type="text" class="form-control required">
                                        @foreach ($user as $users)
                                            <option value="{{ $users->id}}" @if($lessons->user_id == $users->id)selected @endif>{{ $users->first_name}} {{ $users->last_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="course_id" class="control-label">File
                                    Course</label>
                                    <select id="course_id" name="course_id" type="text" class="form-control required">
                                        @foreach ($course as $courses)
                                            <option value="{{ $courses->id}}" @if($lessons->course_id == $courses->id)selected @endif>{{ $courses->course_title}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">File
                                    Description</label>
                                <textarea id="description" name="description" type="text"
                                        value="{{ $lessons->description }}"
                                        class="form-control required" minlength="200">{{ $lessons->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label">Update File Image</label>
                                <input id="input-fa" name="image" type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status" class="control-label">File
                                    Status</label>
                                    <select id="status" name="status" type="text" class="form-control required" value="{{ $lessons->status }}">
                                        <option value="pending" @if($lessons->status == "pending")selected @endif>Pending </option>
                                        <option value="active" @if ($lessons->status == "active")selected @endif>Active</option>
                                        <option value="rejected" @if ($lessons->status == "rejected")selected @endif>Rejected</option>
                                    </select>
                            </div>
                            <button type="submit" class="buttonSpacing widget_btn btn btn-success">UPDATE FILE</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>