<div class="modal fade" id="lesson-delete-{{ $lessons->id }}" role="dialog" aria-labelledby="modalLabeldanger">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white" id="modalLabeldanger">Delete Lesson</h4>
                <button class="widget_btn btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to DELETE <strong>{{ $lessons->lesson_title}}</strong>?
                </p>

                <form id="commentForm" method="GET" action="/lessons/delete/{{ $lessons->id }}" class="validate" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="tab-content">
                        <div class="form-group">
                            <label for="description" class="control-label">Explain to User why you're deleting the lesson:</label>
                            <textarea id="description" name="description" type="text" class="form-control required" placeholder="Explain Why"></textarea>
                        </div>
                        <button type="submit" class="buttonSpacing widget_btn btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE LESSON</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>