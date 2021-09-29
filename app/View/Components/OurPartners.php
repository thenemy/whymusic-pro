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
            new OP(__('messages.rfc'),"RFC",asset("assets/images/brands/rfc.png"),__('messages.rfc_country')),
            new OP(__('messages.shure'),"SHURE",asset("assets/images/brands/shure.png"),__('messages.shure_country')),
            new OP(__('messages.beyerdynamic'),"BEYERDYNAMIC",asset("assets/images/brands/beyerdynamic.png"),__('messages.beyerdynamic_country')),
            new OP(__('messages.allen'),"ALLEN&HEATH",asset("assets/images/brands/allenAhealth.png"),__('messages.allen_country')),
            new OP(__('messages.dsppa'),"DSPPA",asset("assets/images/brands/dsppa.jpg"),__('messages.dsppa_country')),
            new OP(__('messages.chauvet'),"CHAUVET",asset("assets/images/brands/chauvet.jpg"),__('messages.chauvet_country')),
            new OP(__('messages.sennenheiser'),"Sennheiser",asset("assets/images/brands/sennheiser.svg"),__('messages.sennenheiser_country'))
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
