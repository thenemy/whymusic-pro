<!-- Footer -->

<footer class="text-center text-white text-lg-start text-muted pt-1 footer-color ">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-3">
            <!-- Grid row -->
            <div class="row mt-3 text-light">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4 text-white">
                       WHY MUSIC PRO
                    </h6>
                    <p>
                        {{__('messages.banner')}}
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-5 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase mb-4 text-white">
                        Contact
                    </h6>
                    <p class="pb_font-13"><i class=" me-3"></i>{{__('messages.location')}}</p>
                    <p class="pb_font-13"><i class=" me-3></y
                        <i class="pb_font-13 me-3"></i>
                        info@whymusicpro.uz
                    </p>
                    <p><i class=" me-3"></i>+998 90 975 10 90</p>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4 text-white">{{__('messages.socials')}} </h6>
                    <div class="flex flex-row ">
                        @foreach($footer_image as $clickables)
                            <a href="{{$clickables->link}}"><img class="social-media-logos" src="{{$clickables->image}}" alt=""></a>
                        @endforeach
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

</footer>
<!-- Footer -->
