
<section class="pb_section pb_testimonial_v1" data-section="testimonials" id="section-our-brands">
    <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-7">
                <h2 class="mt-0 heading-border-top font-weight-normal">{{__('messages.our_brands')}}</h2>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-md-10 col-sm-12 mb-5">
                <div class="single-item-no-arrow pb_slide_v1 ">
                    @foreach($component_our_partners as $objects_partners)
                    <div>
                        <div class="media">
                            <img class="d-flex img-fluid icon-size mb-sm-5" src="{{$objects_partners->image}}" alt="Generic placeholder image">
                            <div class="media-body pl-md-5 pl-sm-0">
                                <blockquote>
                                    <p>{{$objects_partners->description}}</p>
                                    <p class="pb_author"><cite class="text-uppercase">{{$objects_partners->name}}</cite> {{$objects_partners->country}}</p>
                                </blockquote>
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
