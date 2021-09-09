<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;

class FormUsers extends Component
{
  public $rol = [
    'Super usuario' => 'Super usuario',
    'Administrador' => 'Administrador',
    'Usuario operativo' => 'Usuario operativo',
    'Usuario aprovador' => 'Usuario aprovador',
  ];
  public $area = [
    'Comercial' => 'Comercial',
    'Finanzas' => 'Finanzas',
    'Logistica' => 'Logistica',
    'Capital humano' => 'Capital humano',
    'Marketing' => 'Marketing',
    'TI' => 'TI',
  ];
  public $count;
  public $coin;
    public function render(){
        $countries = Country::all();
        $allcountries = Country::pluck('pais');
        return view('livewire.form-users',compact('allcountries', 'countries'));
    }

    public function updatedcount($id_country){
      $this->coin = Country::where('id', $id_country+1)->pluck('coin_type')->first();
    }
}
