<div class="modal fade" id="modal-create-course" role="dialog" aria-labelledby="modalLabelprimary">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="modalLabelprimary">Create a Course</h4>
                <button class="widget_btn btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="POST" action="/courses" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
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
                                    <select id="category" name="category" type="text" class="form-control required">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($category as $categories)
                                            <option value="{{ $categories->id}}">{{ $categories->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">Course
                                    Description *</label>
                                <textarea id="description" name="description" type="text"
                                        placeholder="Must be at least 200 words..."
                                        class="form-control required" minlength="200"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label">Course Image (1600 x 900) *</label>
                                <input id="input-fa" name="image" type="file" class="form-control required" enctype="multipart/form-data">
                            </div>
                            <button type="submit" class="buttonSpacing widget_btn btn btn-primary">CREATE COURSE</button>
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