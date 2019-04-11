<div class="modal fade" id="modal-update-{{ $users->id }}" role="dialog" aria-labelledby="modalLabelsuccess">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white" id="modalLabelsuccess">Update User</h4>
                <button class="widget_btn btn btn-success" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form id="commentForm" method="POST" action="/users/updates/{{ $users->id }}" class="validate" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input name="image" type="hidden" value="{{ $users->image }}">
                        <div class="tab-content">
                            <div class="form-group">
                                <label for="first_name" class="control-label">User
                                    First Name</label>
                                <input id="first_name" name="first_name" type="text"
                                        value="{{ $users->first_name }}"
                                        class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="control-label">User
                                    Last Name</label>
                                <input id="last_name" name="last_name" type="text"
                                        value="{{ $users->last_name }}"
                                        class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label">User
                                    Email</label>
                                <input id="email" name="email" type="email"
                                        value="{{ $users->email }}"
                                        class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="description" class="control-label">User
                                    Description</label>
                                <textarea id="description" name="description" type="text"
                                        value="{{ $users->description }}"
                                        class="form-control required" minlength="200">{{ $users->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="user_image" class="control-label">Update User's Image</label>
                                <input id="input-fa" name="user_image" type="file" class="form-control">
                            </div>
                            <input type="hidden" name="background_image" value="{{ $users->background_image }}" >
                            <div class="form-group">
                                <label for="user_type" class="control-label">User
                                    Status</label>
                                    <select id="user_type" name="user_type" type="text" class="form-control required" value="{{ $users->user_type }}">
                                            <option value="basic" @if($users->user_type == "basic" || $users->user_type == 'request_basic_admin')selected @endif>Basic </option>
                                            <option value="advance" @if($users->user_type == "advance" || $users->user_type == 'request_advance_admin')selected @endif>Contributor</option>
                                            <option value="admin" @if ($users->user_type == "admin")selected @endif>Admin</option>
                                    </select>
                            </div>
                            <button type="submit" class="buttonSpacing widget_btn btn btn-success">UPDATE USER</button>
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