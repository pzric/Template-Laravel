<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class ShowCountries extends Component
{
    public function render()
    {
        $countries = Country::all();
        return view('livewire.show-countries', compact('countries'));
    }
}
