<div class="modal fade" id="modal-update-{{ $categories->id }}" role="dialog" aria-labelledby="modalLabelsuccess">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="modalLabelsuccess">Update Category</h4>
                <button class="widget_btn btn btn-success" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="GET" action="/category/update/{{ $categories->id }}" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="form-group">
                                <label for="name" class="control-label">Update Category Name *</label>
                                <input id="name" name="name" type="text" value="{{ $categories->name }}" class="form-control required" maxlength="200">
                            </div>
                            <button type="submit" class="buttonSpacing widget_btn btn btn-success">UPDATE CATEGORY</button>
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