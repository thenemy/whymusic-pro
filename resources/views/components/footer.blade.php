<!-- Footer -->

<footer class="text-center text-white text-lg-start text-muted pt-1 footer-color ">
    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3 text-light">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3 "></i>WHY MUSIC PRO
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-5 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class=" me-3"></i> Узбекистан, Ташкент, Мирзо-Улугбекский район, проспект Мустакиллик 59а. </p>
                    <p>
                        <i class=" me-3"></i>
                        info@whymusicpro.uz
                    </p>
                    <p><i class=" me-3"></i>+998 90 975 10 90</p>
                    <p><i class=" me-3"></i> </p>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Социальные сети </h6>
                    <div class="flex flex-row">
                        @foreach($footer_image as $clickables)
                            <a href="{{$clickables->link}}"><img src="{{$clickables->image}}" alt=""></a>
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
