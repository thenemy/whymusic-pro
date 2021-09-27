<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OurPartners extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $component_our_partners;

    public function __construct()
    {
        $this->component_our_partners = [
            new OP("“Самый продаваемый в мире бренд в направлениях professional/commercial audio.”","RFC",asset("assets/images/brands/rfc.png"),"Италия"),
            new OP("“Мировой лидер по производству микрофонов, наушников и конференц систем.”","SHURE",asset("assets/images/brands/shure.png"),"США  "),
            new OP("“Мировой лидер по производству микрофонов, наушников и конференц систем.”","BEYERDYNAMIC",asset("assets/images/brands/beyerdynamic.png"),"Германия"),
            new OP("Лидер по производству микшерных пультов и системных решений.”","ALLEN&HEATH",asset("assets/images/brands/allenAhealth.png"),"Англия"),
            new OP("“Профессиональные системы Commercial Audio, Smart Home, Conference System, Voice Evacuation System, Alarm, Audiovisual System, Digital System и многих других решений.”","DSPPA",asset("assets/images/brands/dsppa.jpg"),"Италия"),
            new OP("“Световое оборудование профессионального класса.”","CHAUVET",asset("assets/images/brands/chauvet.jpg"),"Франция"),
            new OP("“Мировой лидер по производству микрофонов, наушников и конференц систем.”","Sennheiser",asset("assets/images/brands/sennheiser.svg"),"Германия")
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.our-partners');
    }
}


class OP{
    public $description;
    public $name;
    public $image;
    public $country;

    public function __construct($description,$name,$image,$country)
    {
        $this->description = $description;
        $this->name = $name;
        $this->image = $image;
        $this->country = $country;

    }
}
