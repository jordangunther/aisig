<div class="modal fade" id="lesson-create" role="dialog" aria-labelledby="modalLabelprimary">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="modalLabelprimary">Create a Lesson</h4>
                <button class="widget_btn btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="POST" action="/lessons" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="form-group">
                                <label for="name" class="control-label">Lesson Name *</label>
                                <input id="name" name="name" type="text" placeholder="Enter a Name" class="form-control required">
                            </div>
                            <button type="submit" class="buttonSpacing widget_btn btn btn-primary">CREATE LESSON</button>
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