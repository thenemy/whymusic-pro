<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WhyUs extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $componentWhyUs_1;
    public $componentWhyUs_2;
    public function __construct()
    {
        $this->componentWhyUs_1 = new WhyUsImages(asset('assets/images/whyUs/whyUs_1.jpg'));
        $this->componentWhyUs_2 = new WhyUsImages(asset('assets/images/whyUs/whyUs_2.jpg'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.why-us');
    }
}

class WhyUsImages{

    public $imageWhyUs;

    public function __construct($imageWhyUs)
    {

        $this->imageWhyUs = $imageWhyUs;
    }
}
