<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;

class FormReports extends Component
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
  public $project = [
    '1' => 'Proyecto1',
    '2' => 'Proyecto2',
  ];
  public $cost = [
    '1' => 'Costo1',
    '2' => 'Costo2',
  ];
  public $count;
  public $coin;
  public $conv;
  public $number3;
  public $number4;
    public function render()
    {
      $countries = Country::all();
      $allcountries = Country::pluck('pais');
      return view('livewire.form-reports',compact('allcountries', 'countries'));
    }
    public function updatedcount($id_country){
      $this->coin = Country::where('id', $id_country+1)->pluck('coin_type')->first();
      $this->number3 = Country::where('id', $id_country+1)->pluck('current_change')->first();
    }
    public function updatedconv($number1){
    $this-> number4 = $number1;
    }

}
