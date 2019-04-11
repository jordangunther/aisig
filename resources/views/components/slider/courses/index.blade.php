<div style="padding: 0 10px;">
    <div style="border:white solid 1px;">
        <img src="{{ asset("storage/image/$courses->image") }}"" alt="Image missing" class="img-fluid"/>
        <div class="row" style="margin: 10px;">
            <div class="col-lg-12">
                <div class="image_text">
                    <h5>{{ $courses->course_title }}</h5>
                    <span>By: {{ $courses->author }}</span><br /><br />
                    <p>{{ str_limit($courses->description, 200) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>