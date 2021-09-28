<?php

namespace App\Http\Livewire;

use App\Models\Benefited;
use App\Models\Concept;
use Livewire\Component;
use App\Models\Country;
use App\Models\User;

class FormReports extends Component
{
  public $project = [
    '1' => 'Proyecto1',
    '2' => 'Proyecto2',
  ];
  public $cost = [
    '1' => 'Costo1',
    '2' => 'Costo2',
  ];
  public $devegar = [
    '1' => 'Lineal',
    '2' => 'Distribuido',
  ];
  public $count;
  public $coin;
  public $conv;
  public $number3;
  public $number4;
  public $con;
  public $global_concept;
  public $area;
  public $area_beneficted;
  public $beneficteds;
  public $concept;
  public $list;
  public $option;
  public $viewform;
  public $message;

    public function render()
    {
      $users = User::find(auth()->user()->id)->countries()->get();
      $countries = $users->pluck('pais', 'id');
      $cos = $users->pluck('id');
      return view('livewire.form-reports',compact('countries'));
    }
    public function updatedcon($id_concept){
      $this->global_concept = Concept::where('id', $id_concept)->pluck('global_concept')->first();
    }
    public function updatedcount($id_country){
      $this->coin = Country::where('id', $id_country)->pluck('coin_type')->first();
      $number3 = Country::where('id', $id_country)->pluck('current_change')->first();
      $this->number3 = $number3;
    }
    public function updatedconv($number1){
      $this-> number4 = $number1;
    }
    public function updatedbeneficteds($id_countryb){
      $this->beneficteds = Benefited::where('country_origin', $id_countryb)->pluck('name','id');
      $this->concept = Concept::where('country', $id_countryb)->pluck('specific_concept', 'id');
    }
    public function updatedarea($id_beneficted){
      $this->area_beneficted = Benefited::where('id', $id_beneficted)->pluck('area')->first();
    }
    public function updatedlist($calendar){
      $this->option = $calendar;
      $this->viewform = "display:flex";
    }
    public function form(){
      $this->viewform = "display:none";
    }
  }
