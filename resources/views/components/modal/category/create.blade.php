<div class="modal fade" id="modal-create" role="dialog" aria-labelledby="modalLabelprimary">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="modalLabelprimary">Create a Category</h4>
                <button class="widget_btn btn btn-primary" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="POST" action="/category" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="tab-content">
                                <div class="form-group">
                                    <label for="name" class="control-label">Category Name *</label>
                                    <input id="name" name="name" type="text" placeholder="Enter a Name" class="form-control required" maxlength="200">
                                </div>
                                <button type="submit" class="buttonSpacing widget_btn btn btn-primary">CREATE CATEGORY</button>
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