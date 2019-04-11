<div class="card">
    <div class="card-header bg-white">
        <h3>Manage All Users</h3>
    </div>
    <div class="card-body">
        @include('errors.error')
        @include('errors.success')
        <div class="top_search_box d-none d-md-flex">
            <form id="commentForm" method="get" action="/manage/users/search" class="header_input_search" enctype="multipart/form-data">
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
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($user as $users)
                        <tr>
                            <td>{{$users->first_name}} {{$users->last_name}}</td>
                            <td>{{$users->email}}</td>
                            @if($users->user_type == 'basic')
                                <td>Basic User</td>
                            @elseif($users->user_type == 'advance')
                                <td>Contributor User</td>
                            @elseif($users->user_type == 'admin')
                                <td>Admin User</td>
                            @elseif($users->user_type == 'request_advance')
                                <td>Basic User | Pending Advance</td>
                            @elseif($users->user_type == 'request_basic_admin')
                                <td>Basic User | Pending Admin</td>
                            @elseif($users->user_type == 'request_advance_admin')
                                <td>Contributor User | Pending Admin</td>
                            @else
                                <td>Pending User</td>
                            @endif
                            <td>
                                <a href="/author/{{ $users->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW USER</button></a>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modal-update-{{ $users->id }}"><i class="fa fa-upload" aria-hidden="true"></i> UPDATE</button>
                                <button class="buttonSpacing widget_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#modal-delete-{{ $users->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>