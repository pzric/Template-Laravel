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
  public $count;
  public $coin;
    public function render(){
        $namecountries = Country::pluck('pais', 'id');
        $countries = Country::all();
        return view('livewire.form-users',compact('namecountries','countries'));
    }

    #public function updatedcount($country_origin){
    #  $this->coin = Country::where('id', $country_origin)->pluck('coin_type')->first();
      #$this->countries = Country::where('id', '!=',$country_origin)->get();
  #  }
}
