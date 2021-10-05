<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $footer_image;
    public function __construct()
    {
        $this->footer_image =[
            new ClickableImage("https://www.instagram.com/whymusicprofessional/",asset("assets/logos/ig-logo.png")),
            new ClickableImage("https://www.facebook.com/whymusicprofessional/",asset("assets/logos/fb-logo.png")),
            new ClickableImage("https://t.me/whymusicprofessional",asset("assets/logos/tg-logo.png"))
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer');
    }
}
class ClickableImage{
    public $link;
    public $image;

    public function __construct($link, $image)
    {
        $this->image=$image;
        $this->link=$link;
    }

}
