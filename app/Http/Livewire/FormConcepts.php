<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\Specific;
use App\Models\User;

class FormConcepts extends Component
{
    public $pais;
    public $body;
    public $count;
    public $fills;
    public $indi;
    public $code;
    public $area;
    public $global_concept;
    public function render()
    {
      $concept = [
        '1' => 'A terceros logistica 1',
        '2' => 'A terceros logistica 2',
      ];
      $users = User::find(auth()->user()->id)->countries()->get();
      $countries = $users->pluck('pais', 'id');
        return view('livewire.form-concepts',compact('countries','concept'));
    }
    public function updatedcount($country){
      $pais = Specific::where('Pais', $country)->get();
      $this->pais = $pais->pluck('Cuenta', 'id');
    }
    public function updatedbody($account){
      $fills = Specific::where('id', $account)->get();
      $this->global_concept = $fills->pluck('Concepto_global')->first();;
      $this->code = $fills->pluck('TBCode')->first();
      $this->indi = $fills->pluck('Indice')->first();;
      $this->area = $fills->pluck('Area')->first();;
    }
}
