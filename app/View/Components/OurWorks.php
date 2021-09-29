<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OurWorks extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $arrayproject;
    public function __construct()
    {
        $this->arrayproject = [
            new OW(asset('assets/images/works/ALMK.png'),"AGMK ",asset('assets/images/works/ALMK-icon.png'),__('messages.agmk')),
            new OW(asset('assets/images/works/bbb.png'),"Bla Bla Bar Tashkent",asset('assets/images/works/bbb-icon.png'),__('messages.bbb')),
            new OW(asset('assets/images/works/Fahrenheit.png'),"Fahrenheit",asset('assets/images/works/ff-icon.png'),__('messages.fh')),
            new OW(asset('assets/images/works/seven.png'),"Seven Fridays",asset('assets/images/works/seven-icon.png'),__('messages.seven')),
            new OW(asset('assets/images/works/mosque.png'),"Rakat",asset('assets/images/works/mosque-icon.png'),__('messages.mosque')),
            new OW(asset('assets/images/works/more.png'),"More Aqua Complex",asset('assets/images/works/more-icon.png'),__('messages.more'))
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.our-works');
    }
}
class OW{
    public $image_of_project;
    public $name_of_project;
    public $image_of_logo;
    public $description;

    public function __construct($image_of_project,$name_of_project,$image_of_logo,$description)
    {
        $this->image_of_project = $image_of_project;
        $this->name_of_project = $name_of_project;
        $this->image_of_logo = $image_of_logo;
        $this->description = $description;
    }

}
