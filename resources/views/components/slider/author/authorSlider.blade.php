<div class="col-12 col-lg-4 m-t-35">
    <div class="section_border">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset("storage/image/{$authors->background_image}") }}" class="img-fluid" alt="Image missing"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-white">
                        <div class="row">
                            <div class="col-lg-12">

                                <img src="{{ asset("storage/image/{$authors->user_image}") }}" alt="Image missing"
                                        class="img-fluid rounded-circle image_align" width="100"/>
                                <span class="image_name">{{ $authors->first_name }} {{ $authors->last_name }} </span>
                                <span class="fa-stack fa-lg float-right icon_margin">
                                        <i class="fa fa-circle fa-stack-2x text-mint icon_bg"></i>
                                        <i class="fa fa-user fa-stack-1x text-white icon_fontsize"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 authorCard">
                                <p>{{ str_limit($authors->description, 100) }}</p>
                                <a href="/author/{{ $authors->id }}"><button class="widget_btn btn btn-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW AUTHOR</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>