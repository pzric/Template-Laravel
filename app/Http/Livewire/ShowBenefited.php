<?php

namespace App\Http\Livewire;

use App\Models\Benefited;
use App\Models\Country;
use Livewire\Component;

class ShowBenefited extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = "asc";

    public function render()
    {
        $benefiteds = Benefited::where([['name', 'like', '%' . $this->search . '%']])
        ->orderby($this->sort, $this->direction)
        ->get();
        return view('livewire.show-benefited',compact('benefiteds'));
    }

    public function order($sort){
      $this->sort = $sort;
    }
}
