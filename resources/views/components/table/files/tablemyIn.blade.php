<div class="card">
    <div class="card-header bg-white">
    <button style="margin-left: 10px;" class="buttonSpacing widget_btn btn btn-primary pull-right" data-toggle="modal" data-target="#modal-upload-file"><i class="fa fa-plus" aria-hidden="true"></i> UPLOAD INDEPENDENT FILE</button>
        <h3 style="padding-top:15px;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}'s Independent Files</h3>
    </div>
    <div class="card-body">
        @include('errors.error')
        @include('errors.success')
        <div class="table-responsive m-t-35">
            <table class="table" style="background-color:white">
                <thead>
                <tr style="background-color:#21c1ed;color:white;">
                    <th>File Name</th>
                    <th>File Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($files as $file)
                            <tr>
                                <td>{{ $file->name }}</td>
                                <td>{{ $file->mime }}</td>
                                <td>
                                    <a href="/lessons/{{ $file->lesson_id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW FILE</button></a>
                                    <a href="/file/download/{{ $file->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> DOWNLOAD FILE</button></a>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                <button class="buttonSpacing widget_btn btn btn-primary" data-toggle="modal" data-target="#modal-upload-file"><i class="fa fa-plus" aria-hidden="true"></i> UPLOAD INDEPENDENT FILE</button>
            </div>
        </div>
    </div>
</div>
