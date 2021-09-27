<section class="pb_section">
    <div class="multiple-items pb_slide_v1">
        @foreach ($carousel as $carouselimage)
        <div>

            <a href="#" class="link-block">
                <img class="image-size" src="{{$carouselimage->image}}" alt="" class="img-fluid">
                <div class="slide-text">
                    <h2>{{$carouselimage->description}}</h2>
                </div>
            </a>


        </div>
        @endforeach
    </div>

</section>
<!-- END section -->
