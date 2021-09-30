<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;
use Countries;


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
  public $count, $coin, $country_origin;

    public function save(){

    }

    public function render(){
        $countries = country::all();
        $allcountries = Country::pluck('pais', 'id');
        return view('livewire.form-users',compact('allcountries','countries'));
    }
}
