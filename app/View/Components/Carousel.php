<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Carousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $carousel;

    public function __construct()
    {
        $this->carousel = [
            new CarouselArr(asset('assets/images/sponsors/ALMK.png')),
            new CarouselArr(asset('assets/images/sponsors/bbb.png')),
            new CarouselArr(asset('assets/images/sponsors/Fahrenheit.png')),
            new CarouselArr(asset('assets/images/sponsors/seven.png')),
            new CarouselArr(asset('assets/images/sponsors/more.png')),
            new CarouselArr(asset('assets/images/sponsors/onemore.png')),
            new CarouselArr(asset('assets/images/sponsors/alisher.png')),
            new CarouselArr(asset('assets/images/sponsors/amadeus.png')),
            new CarouselArr(asset('assets/images/sponsors/british.png')),
            new CarouselArr(asset('assets/images/sponsors/cmi.png')),
            new CarouselArr(asset('assets/images/sponsors/enter.png')),
            new CarouselArr(asset('assets/images/sponsors/fahrenheit.png')),
            new CarouselArr(asset('assets/images/sponsors/gfu.png')),
            new CarouselArr(asset('assets/images/sponsors/goethe.png')),
            new CarouselArr(asset('assets/images/sponsors/humo.png')),
            new CarouselArr(asset('assets/images/sponsors/ilkhom.png')),
            new CarouselArr(asset('assets/images/sponsors/iosis.png')),
            new CarouselArr(asset('assets/images/sponsors/matbuot.png')),
            new CarouselArr(asset('assets/images/sponsors/obi.png')),
            new CarouselArr(asset('assets/images/sponsors/pasado.png')),
            new CarouselArr(asset('assets/images/sponsors/penson.png')),
            new CarouselArr(asset('assets/images/sponsors/plov.png')),
            new CarouselArr(asset('assets/images/sponsors/polymedia.png')),
            new CarouselArr(asset('assets/images/sponsors/prokuratura.png')),
            new CarouselArr(asset('assets/images/sponsors/radio.png')),
            new CarouselArr(asset('assets/images/sponsors/shelby.png')),
            new CarouselArr(asset('assets/images/sponsors/teleset.png')),
            new CarouselArr(asset('assets/images/sponsors/velvet.png')),
            new CarouselArr(asset('assets/images/sponsors/yastreb.png')),

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel');
    }
}
class  CarouselArr{
    public $image;


    public function __construct ($image){
        $this->image = $image;

    }

}
