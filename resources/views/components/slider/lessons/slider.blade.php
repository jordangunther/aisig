<div class="swiper-slide swiper_slide{{ $lessons->id }}">
    <div class="section_border">
        <a href="#">
            <img src="{{ asset("storage/image/$lessons->image") }}" alt="Image missing" class="img-fluid"/>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white image_text">
                        <h5>{{ $lessons->lesson_title }}</h5>
                        <span>Course: {{ $lessons->course }}</span><br /><br />
                        <p>{{ str_limit($lessons->description, 200) }}</p>
                        <a href="/lessons/{{ $lessons->id }}"><button class="widget_btn btn btn-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW FILE</button></a>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>