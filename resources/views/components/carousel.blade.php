<section class="sponsors mb-5" id="section-partners">
    <div class="box flex-di slick-track slide-size" style="">
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

    $('.image-sponsors').find('.slick-list').find('.slick-track').attr('style','width: 300px!important');
</script>
