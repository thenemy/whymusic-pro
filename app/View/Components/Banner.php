<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Banner extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image_banner;
    public function __construct()
    {
        $this->image_banner =  new BannerImg(asset('assets/images/banner.png'));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.banner');
    }
}

class BannerImg{
    public $image;

    public function __construct($image){
        $this->image= $image;
    }

}
