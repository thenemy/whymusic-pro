<section class="sponsors mb-5" id="section-partners">
    <div class="box flex-di slick-track " style="max-width: 40rem">
        <h2 class="text-center mb-3">{{__('messages.partners')}}</h2>
        <div class="sponsors-images mt-2 multiple-items align-items-center">
            @foreach ($carousel as $carouselimage)
                <div class="image-sponsors"style="width: 100px !important;" >
                    <img class="flex carousel-image align-items-center"  src="{{$carouselimage->image}}"
                         alt="">
                </div>
            @endforeach
        </div>
    </div>
</section>
<script>
    // $('.multiple-items').remove(".slick-dots");
    $('.multiple-items').slick({
        slidesToShow: 8,
        slidesToScroll: 22
    });
</script>
