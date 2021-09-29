<section class="pb_section">
    <div class="multiple-items pb_slide_v1">
        @foreach ($carousel as $carouselimage)
            <div class="main_hover hvrbox">
                <a href="#" class="link-block">
                    <img class="image-size carousel-image hvrbox-layer_bottom" src="{{$carouselimage->image}}" alt="" class="img-fluid">
                    <div class="slide-text carousel hvrbox-layer_top hvrbox-layer_slideup">
                        <h2 class="details remove"><span class="title">{{$carouselimage->description}}</span></h2>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

</section>
<script>

    $(".main_hover").hover(function () {
        $(this).find(".details").removeClass("remove").addClass("shadows_carousel_text");

    }, function () {
        $(this).find(".details").addClass("remove").removeClass("shadows_carousel_text");
    })
</script>
<!-- END section -->
