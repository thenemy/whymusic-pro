<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carousel extends Component
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
            new CarouselArr(asset('assets/images/projections/almk.png'),"ДК АГМК –звук RCF, свет Arena, Led дисплеи Arena. "),
            new CarouselArr(asset('assets/images/projections/bbb.png'),"Bla Bla Bar Tashkent – звук JBL, свет Kingstar, Led Display  "),
            new CarouselArr(asset('assets/images/projections/Fahrenheit.png'),"Ресторан Fahrenheit – звук RCF, свет Arena, Led Display "),
            new CarouselArr(asset('assets/images/projections/seven.png'),"Бар Семь Пятниц - звук JBL, свет Arena, Led Display"),
            new CarouselArr(asset('assets/images/projections/more.png'),"Аква комплекс More – звук RCF, свет King Star, Led Display")
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
    public $description;

    public function __construct ($image, $description){
        $this->image = $image;
        $this->description = $description;
    }

}
