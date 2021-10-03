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
            new OP(__('messages.rfc'),"RFC",asset("assets/images/brands/rfc.png"),__('messages.rfc_country'),asset('assets/images/brands/rfc-img.png')),
            new OP(__('messages.shure'),"SHURE",asset("assets/images/brands/shure.png"),__('messages.shure_country'),asset('assets/images/brands/shure-img.png')),
            new OP(__('messages.beyerdynamic'),"BEYERDYNAMIC",asset("assets/images/brands/beyerdynamic.png"),__('messages.beyerdynamic_country'),asset('assets/images/brands/beyerdynamic-img.png')),
            new OP(__('messages.allen'),"ALLEN&HEATH",asset("assets/images/brands/allenAhealth.png"),__('messages.allen_country'),asset('assets/images/brands/allen-img.png')),
            new OP(__('messages.dsppa'),"DSPPA",asset("assets/images/brands/dsppa.png"),__('messages.dsppa_country'),asset('assets/images/brands/rfc-img.png')),
            new OP(__('messages.chauvet'),"CHAUVET",asset("assets/images/brands/chauvlet.png"),__('messages.chauvet_country'),asset('assets/images/brands/chauvet-img.png')),
            new OP(__('messages.sennenheiser'),"Sennheiser",asset("assets/images/brands/sennheiser.png"),__('messages.sennenheiser_country'),asset('assets/images/brands/sennheiser-img.png')),
            new OP(__('messages.hk'),"HK",asset("assets/images/brands/hk.png"),__('messages.hk_country'),asset('assets/images/brands/hk-img.png'))
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
    public $main_img;

    public function __construct($description,$name,$image,$country,$main_img)
    {
        $this->description = $description;
        $this->name = $name;
        $this->image = $image;
        $this->country = $country;
        $this->main_img = $main_img;

    }
}
