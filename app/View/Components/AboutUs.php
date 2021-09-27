<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AboutUs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image_1;
    public $image_2;
    public function __construct()
    {

        $this->image_1 =  new Ab(asset('assets/images/aboutus/sound-image.png'));
        $this->image_2 = new Ab(asset('assets/images/aboutus/lighting-image.png'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.about-us');
    }
}
class Ab{
    public $imageAboutUs;

    public function __construct($imageAboutUs) {
        $this->imageAboutUs = $imageAboutUs;
    }
}
