@if(session()->has('message'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">×
        </button>
        {{ session()->get('message') }}
    </div>
@endif