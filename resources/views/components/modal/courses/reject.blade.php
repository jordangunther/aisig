<div class="modal fade" id="course-reject-{{ $courses->id }}" role="dialog" aria-labelledby="modalLabeldanger">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white" id="modalLabeldanger">Reject Course</h4>
                <button class="widget_btn btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to REJECT <strong>{{ $courses->course_title}}</strong>?</p>

                <form id="commentForm" method="GET" action="/courses/reject/{{ $courses->id }}" class="validate" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="tab-content">
                        <div class="form-group">
                            <label for="description" class="control-label">Explain to User why you're rejecting the course:</label>
                            <textarea id="description" name="description" type="text" class="form-control required" placeholder="Explain Why"></textarea>
                        </div>
                        <button type="submit" class="buttonSpacing widget_btn btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> REJECT COURSE</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>