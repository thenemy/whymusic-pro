
<section class="pb_section pb_bg-half" data-section="practicing-areas" id="section-our-works">
    <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-7">
                <h2 class="mt-0 heading-border-top font-weight-normal">{{__('messages.our_works')}}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="single-item pb_slide_v2">
                    @foreach($arrayproject as $object_of_OW)
                    <div>

                        <div class="d-lg-flex d-md-block slide_content">
                            <div  style="url('')";>
                                <img class="image-size " src="{{$object_of_OW->image_of_project}}" alt="">
                            </div>
                            <div class="slide_content-text text-center ">
                                <div class="pb_icon_v1 "><img class="icon-size" src="{{$object_of_OW->image_of_logo}}" alt=""></div>
                                <h3 class="font-weight-normal mt-0 mb-4">{{$object_of_OW->name_of_project}}</h3>
                                <p class="">{{$object_of_OW->description}}</p>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->
