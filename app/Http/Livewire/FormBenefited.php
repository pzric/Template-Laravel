<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class FormBenefited extends Component
{
    public $area = [
      'Comercial' => 'Comercial',
      'Finanzas' => 'Finanzas',
      'Logistica' => 'Logistica',
      'Capital humano' => 'Capital humano',
      'Marketing' => 'Marketing',
      'TI' => 'TI',
    ];

    public function render()
    {
      $countries = User::find(auth()->user()->id)->countries()->get();
      $countries = $countries->pluck('pais', 'id');
      return view('livewire.form-benefited',compact('countries'));
    }
}
