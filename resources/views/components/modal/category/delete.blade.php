<div class="modal fade" id="modal-delete-{{ $categories->id }}" role="dialog" aria-labelledby="modalLabeldanger">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title text-white" id="modalLabeldanger">Delete Category</h4>
                <button class="widget_btn btn btn-danger" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to DELETE <strong>{{ $categories->name}}</strong>?
                </p>
                <p>All courses and lessons under this category will no longer be displayed.</p>

                <p>Consider <strong>UPDATING</strong> the {{ $categories->name}} category. All courses and lessons will be UPDATED to the new category name.</p>

                <a href="/category/delete/{{ $categories->id }}"><button class="buttonSpacing widget_btn btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE CATEGORY</button></a>
            </div>
            <div class="modal-footer">
                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary" data-dismiss="modal">CANCEL</button>
            </div>
        </div>
    </div>
</div>