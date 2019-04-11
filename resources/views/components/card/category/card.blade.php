<div class="col-12 col-lg-4 col-md-6 col-12 m-t-35">
    <div class="section_border cardHeight">
        <div class="row">
            <div class="col-lg-12">
                <div class="bg-white image_text">
                    <h5>{{ $categories->name }}</h5>
                    <a href="/category/{{ $categories->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-primary"><i class="fa fa-angle-double-right" aria-hidden="true"></i> VIEW CATEGORY</button></a>
                    <a href="/category/{{ $categories->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> UPDATE CATEGORY</button></a>
                    <a href="/category/{{ $categories->id }}"><button class="buttonSpacing widget_btn btn btn-sm btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> DELETE CATEGORY</button></a>
                </div>
            </div>
        </div>
    </div>
</div>