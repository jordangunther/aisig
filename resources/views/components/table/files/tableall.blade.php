<div class="card">
    <div class="card-header bg-white">
        <h3>Manage All Lessons</h3>
    </div>
    <div class="card-body">
        @include('errors.error')
        @include('errors.success')
        <div class="top_search_box d-none d-md-flex">
            <form id="commentForm" method="get" action="/manage/lessons/search" class="header_input_search" enctype="multipart/form-data">
                <input type="text" placeholder="Search" name="search">
                <button type="submit">
                    <span class="font-icon-search"></span>
                </button>
                <div class="overlay"></div>
            </form>
        </div>
        <div class="table-responsive m-t-35">
            <table class="table">
                <thead>
                <tr>
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
                                <a href="/file/download/{{ $file->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> DOWNLOAD FILE</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>