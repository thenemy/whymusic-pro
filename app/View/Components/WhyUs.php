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
    public $componentWhyUs_3;
    public function __construct()
    {
        $this->componentWhyUs_1 = new WhyUsImages(asset('assets/images/whyUs/whyUs_1.jpg'));
        $this->componentWhyUs_2 = new WhyUsImages(asset('assets/images/whyUs/whyUs_2.jpg'));
        $this->componentWhyUs_3 =[
            new WhyUsDesc(__('messages.installation_of_audio'),__('messages.description_installation_of_audio')),
            new WhyUsDesc(__('messages.installation_of_light_system'),__('messages.description_installation_of_light_system')),
            new WhyUsDesc(__('messages.installation_of_multimedia'),__('messages.description_installation_of_multimedia')),
            new WhyUsDesc(__('messages.installation_of_karaoke'),__('messages.description_installation_of_karaoke')),
            ];
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
class WhyUsDesc{
    public $title;
    public $description;

    public function __construct($title,$description){
        $this->title = $title;
        $this->description = $description;
        }
}
