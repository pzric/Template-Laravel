<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;

class FormBenefited extends Component
{
    public function render()
    {
      $area = [
        'Comercial' => 'Comercial',
        'Finanzas' => 'Finanzas',
        'Logistica' => 'Logistica',
        'Capital humano' => 'Capital humano',
        'Marketing' => 'Marketing',
        'TI' => 'TI',
      ];
      $users = User::find(auth()->user()->id)->countries()->get();
      $namecountries = $users->pluck('pais', 'id');
      return view('livewire.form-benefited',compact('area','namecountries'));
    }
}
