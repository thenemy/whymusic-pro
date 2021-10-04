
<section class="pb_section" data-section="why-us" id="section-why">
    <div class="container">
        <div class="row justify-content-md-center text-center mb-5">
            <div class="col-lg-7">
                <h2 class="mt-0 font-weight-normal">{{__('messages.why')}}</h2>
                <p>{{__('messages.why_us')}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="images right">
                    <img class="img1 img-fluid" src="{{$componentWhyUs_1->imageWhyUs}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 pl-md-5 pl-sm-0">
                <div id="exampleAccordion" class="pb_accordion mt-3" data-children=".item">
                    @foreach($componentWhyUs_3 as $itemwhyus)
                    <div class="item">
                        <a data-toggle="collapse" data-parent="#exampleAccordion" href="#exampleAccordion{{$loop->index}}" aria-expanded="false" aria-controls="exampleAccordion{{$loop->index}}" class="pb_font-18">{{$itemwhyus->title}}</a>
                        <div id="exampleAccordion{{$loop->index}}" class="collapse" role="tabpanel">
                            <p>{{$itemwhyus->description}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->
