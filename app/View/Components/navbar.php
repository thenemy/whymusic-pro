<?php

namespace App\View\Components;

use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image_logo;
    public $navigation;
    public function __construct()
    {
        $this->image_logo = new NavBarLogo(asset('assets/logos/logo-why-music.png'));
        $this->navigation = [
            new NavBarItem(__('messages.home'),'home'),
            new NavBarItem(__('messages.about_us'),'about'),
            new NavBarItem(__('messages.why'),'why'),
            new NavBarItem(__('messages.our_brands'),'our-brands'),
            new NavBarItem(__('messages.our_works'),'our-works')
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
class NavBarLogo{
    public $image;

    public function __construct($image)
    {
        $this->image = $image;

    }

}
class NavBarItem{

    public $nav;
    public $section;
    public function __construct($nav,$section)
    {
        $this->nav = $nav;
        $this->section =$section;
    }
}

