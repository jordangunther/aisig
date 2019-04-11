<div class="card">
    <div class="card-header bg-white">
        <h3>Course Categories</h3>
    </div>
    <div class="card-body">
        @include('errors.error')
        @include('errors.success')
        <div class="table-responsive m-t-35">
            <table class="table">
                <thead>
                <tr>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($category as $categories)
                        <tr>
                            <td>{{$categories->name}}</td>
                            <td>
                                <a href="/category/{{ $categories->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW CATEGORY</button></a>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modal-update-{{ $categories->id }}"><i class="fa fa-upload" aria-hidden="true"></i> UPDATE CATEGORY</button>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-delete-{{ $categories->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE CATEGORY</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <button class="widget_btn btn btn-primary" data-toggle="modal" data-target="#modal-create"><i class="fa fa-plus" aria-hidden="true"></i> CREATE NEW CATEGORY</button>
            </div>
        </div>
    </div>
</div>