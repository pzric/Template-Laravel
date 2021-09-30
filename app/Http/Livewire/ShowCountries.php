<?php

namespace App\Http\Livewire;

use App\Models\Country;
use Livewire\Component;

class ShowCountries extends Component
{
    public $search;
    public $sort = 'id';
    public $direction = "asc";

    public function render()
    {
        $countries = Country::where([['pais', 'like', '%' . $this->search . '%']])
        ->orderby($this->sort, $this->direction)
        ->get();
        return view('livewire.show-countries',compact('countries'));
    }

    public function order($sort){
      $this->sort = $sort;
    }
}
