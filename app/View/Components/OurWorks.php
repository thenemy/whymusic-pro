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
            new OW(asset('assets/images/works/almk.png'),"ДК АГМК ",asset('assets/images/works/almk-icon.png'),"звук RCF, свет Arena, Led дисплеи Arena"),
            new OW(asset('assets/images/works/bbb.png'),"Bla Bla Bar Tashkent",asset('assets/images/works/bbb-icon.png'),"звук JBL, свет Kingstar, Led Displays"),
            new OW(asset('assets/images/works/Fahrenheit.png'),"Ресторан Fahrenheit",asset('assets/images/works/ff-icon.png'),"звук RCF, свет Arena, Led Display"),
            new OW(asset('assets/images/works/seven.png'),"Бар Семь Пятниц ",asset('assets/images/works/seven-icon.png'),"звук JBL, свет Arena, Led Display"),
            new OW(asset('assets/images/works/mosque.png'),"Мечать Ракат",asset('assets/images/works/mosque-icon.png'),"звук RCF, свет King Star"),
            new OW(asset('assets/images/works/more.png'),"Аква комплекс More ",asset('assets/images/works/more-icon.png'),"звук RCF, свет King Star, Led Display")
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
