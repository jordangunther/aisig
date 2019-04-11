<table class="table" style="background-color:white;border:solid 1px #21c1ed;padding:50px;">
    <thead>
        <tr style="background-color:#21c1ed;color:white;">
            <th>File Title</th>
            <th>File Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lesson as $lessons)
            @if($lessons->course_id === $courses->id)
                <tr>
                    <td>{{$lessons->lesson_title}}</td>
                    <td>{{$lessons->status}}</td>
                    <td>
                        <button id="L{{ $lessons->id }}" class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> SHOW FILE CONTENT</button>
                        <a href="/lessons/{{ $lessons->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW FILE</button></a>
                        <a href="/lessons/download/{{ $lessons->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-download" aria-hidden="true"></i> DOWNLOAD FILE</button></a>
                        <button class="buttonSpacing widget_btn btn btn-sm btn-outline-success" data-toggle="modal" data-target="#lesson-myupdate-{{ $lessons->id }}"><i class="fa fa-upload" aria-hidden="true"></i> UPDATE FILE</button>
                        <button class="buttonSpacing widget_btn btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#lesson-delete-{{ $lessons->id }}"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE FILE</button>
                    </td>
                </tr>
                <tr id="F{{ $lessons->id }}" style="display:none;">
                    <td colspan="8" >
                        @include('components.table.files.tablemy')
                    </td>
                </tr>
                <script>
                    $(document).ready(function(){
                        $("#L{{ $lessons->id }}").click(function(){
                            $("#F{{ $lessons->id }}").toggle();
                        });
                    });
                </script>
            @endif
        @endforeach
    </tbody>
</table>