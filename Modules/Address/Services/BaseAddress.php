<?php

namespace Modules\Address\Services;

use Modules\Address\Entities\Country;

use Modules\Address\Entities\State;

use Modules\Address\Entities\Lga;


trait BaseAddress
{
	public $country;

    public function newCountry()
    {
    	$this->country = Country::firstOrCreate(['name'=>$this->data['country']]);
    }
    
    public $state;

    public function newState(Country $country)
    {
    	$this->state = $country->states()->firstOrCreate(['name'=>$this->data['state']]);
    }

    public $lga;

    public function newLga(State $state)
    {
    	$this->lga = $state->lgas()->firstOrCreate(['name'=>$this->data['lga']]);
    }

    public $town;

    public function newTown(Lga $lga)
    {
        $this->town = $lga->towns()->firstOrCreate(['name'=>$this->data['town']]);
    }
}