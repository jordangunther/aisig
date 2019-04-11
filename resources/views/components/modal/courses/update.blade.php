<div class="modal fade" id="course-update-{{ $courses->id }}" role="dialog" aria-labelledby="modalLabelsuccess">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="modalLabelsuccess">Update Course</h4>
                <button class="widget_btn btn btn-success" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="POST" action="/courses/updates/{{ $courses->id }}" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="form-group">
                                <label for="courseTitle" class="control-label">Course
                                    Title</label>
                                <input id="courseTitle" name="course_title" type="text"
                                        value="{{ $courses->course_title }}"
                                        class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="user_id" class="control-label">Course
                                    User</label>
                                    <select id="user_id" name="user_id" type="text" class="form-control required">
                                        @foreach ($user as $users)
                                            <option value="{{ $users->id}}" @if($courses->user_id == $users->id)selected @endif>{{ $users->first_name}} {{ $users->last_name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="category" class="control-label">Course
                                    Category *</label>
                                    <select id="category" name="category" type="text" class="form-control required">
                                        @foreach ($category as $categories)
                                            <option value="{{ $categories->id}}" @if($courses->category == $categories->name)selected @endif>{{ $categories->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">Course
                                    Description</label>
                                <textarea id="description" name="description"
                                        value="{{ $courses->description }}"
                                        class="form-control required" minlength="200">{{ $courses->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label">Update New Main Image</label>
                                <input id="input-fa" name="image" type="file" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="status" class="control-label">Course
                                    Status</label>
                                    <select id="status" name="status" type="text" class="form-control required" value="{{ $courses->status }}">
                                        <option value="pending" @if($courses->status == "pending")selected @endif>Pending </option>
                                        <option value="active" @if ($courses->status == "active")selected @endif>Active</option>
                                        <option value="rejected" @if ($courses->status == "rejected")selected @endif>Rejected</option>
                                    </select>
                            </div>
                            <button type="submit" class="buttonSpacing widget_btn btn btn-success">UPDATE COURSE</button>
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