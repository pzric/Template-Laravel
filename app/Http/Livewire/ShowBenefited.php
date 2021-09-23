<?php

namespace App\Http\Livewire;

use App\Models\Benefited;
use App\Models\Country;
use Livewire\Component;

class ShowBenefited extends Component
{
    public function render()
    {
        $benefiteds = Benefited::all();
        return view('livewire.show-benefited',compact('benefiteds'));
    }
}
