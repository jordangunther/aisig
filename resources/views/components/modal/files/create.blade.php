<div class="modal fade" id="modal-upload-file" role="dialog" aria-labelledby="modalLabelprimary">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="modalLabelprimary">Create a Lesson</h4>
                <button class="widget_btn btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="POST" action="/files" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="form-group">
                                <label for="lessonTitle" class="control-label">File
                                    Title *</label>
                                <input id="lessonTitle" name="lesson_title" type="text"
                                        placeholder="Enter a Title"
                                        class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="category" class="control-label">File
                                    Category *</label>
                                    <select id="category" name="course_id" type="text" class="form-control required">
                                        <option value="" disabled selected>Select Category</option>
                                        @foreach ($category as $categories)
                                            <option value="{{ $categories->id}}">{{ $categories->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">File
                                    Description *</label>
                                <textarea id="description" name="description" type="text"
                                        placeholder="Must be at least 200 words..."
                                        class="form-control required" minlength="200"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label">File Image (1600 x 900) *</label>
                                <input id="input-fa" name="image" type="file" class="form-control required" enctype="multipart/form-data">
                            </div>
                            <div class="form-group">
                                <label for="file" class="control-label">Files Upload *</label>
                                <input id="input-fa" name="file[]" type="file" class="form-control required" enctype="multipart/form-data" multiple>
                                <p>By uploading this file, you certify that you are the copyright owner or a duly authorized representative of the copyright owner.</p>
                            </div>
                            <button type="submit" class="buttonSpacing widget_btn btn btn-primary">CREATE FILE</button>
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