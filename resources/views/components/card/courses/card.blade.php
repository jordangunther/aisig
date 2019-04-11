<div class="col-lg-4 col-md-6 col-12 m-t-35">
    <div class="section_border cardHeight">
        <img src="{{ asset("storage/image/$courses->image") }}" alt="Image missing" class="img-fluid"/>
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white image_text">
                    <h5>{{ $courses->course_title }}</h5>
                    <span>{{ $courses->author }} | {{ $courses->category }}</span><br /><br />
                    <p>{{ str_limit($courses->description, 200) }}</p>
                    <a href="/courses/{{ $courses->id }}"><button class="widget_btn btn btn-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW COURSE</button></a>
                </div>
            </div>
        </div>
    </div>
</div>