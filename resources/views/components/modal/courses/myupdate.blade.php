<div class="modal fade" id="course-myupdate-{{ $courses->id }}" role="dialog" aria-labelledby="modalLabelsuccess">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="modalLabelsuccess">Update Course</h4>
                <button class="widget_btn btn btn-success" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="POST" action="/courses/update/{{ $courses->id }}" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="user_id" type="hidden" value="{{ $courses->user_id }}">
                        @if ($courses->status === 'rejected')
                            <input name="status" type="hidden" value="pending">
                        @else
                            <input name="status" type="hidden" value="{{ $courses->status }}">
                        @endif
                        <div class="tab-content">
                            <div class="form-group">
                                <label for="courseTitle" class="control-label">Course
                                    Title</label>
                                <input id="courseTitle" name="course_title" type="text"
                                        value="{{ $courses->course_title }}"
                                        class="form-control required">
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
                                <textarea id="description" name="description" type="text"
                                        value="{{ $courses->description }}"
                                        class="form-control required" minlength="200">{{ $courses->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label">Update New Main Image</label>
                                <input id="input-fa" name="image" type="file" class="form-control required">
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