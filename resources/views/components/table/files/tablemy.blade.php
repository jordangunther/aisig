<table class="table" style="background-color:white;border:solid 1px #21c1ed;">
    <thead>
    <tr style="background-color:#21c1ed;color:white;">
        <th>File Name</th>
        <th>File Type</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($files as $file)
            @if($file->lesson_id === $lessons->id)
                <tr>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->mime }}</td>
                    <td>
                        <a href="/lessons/{{ $file->lesson_id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW FILE</button></a>
                        <a href="/file/download/{{ $file->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-outline-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> DOWNLOAD FILE</button></a>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>