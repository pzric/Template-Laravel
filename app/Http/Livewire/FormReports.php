<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Report;
use App\Models\Country;
use App\Models\Concept;
use App\Models\Calendar;
use App\Models\Benefited;

class FormReports extends Component
{
  public $payment_country, $currency, $currency_value, $concept, $country_benefited, $specific_concept, $global_concept, $expense_description, $amount_value, $calendar,
         $cost_id, $project_id, $beneficteds, $service_user, $user_area, $calendar_id, $option, $form, $editform, $value_total, $val1, $val2, $val3, $val4, $val5, $val6,
         $val7, $val8, $val9, $val10, $val11, $val12, $date, $dollar_amount, $users, $valmounth, $mounthamount;

  protected $rules = [
    'date' => 'required',
    'payment_country' => ' required',
    'country_benefited' => 'required',
    'specific_concept' => 'required',
    'expense_description' => 'required',
    'amount_value' => 'required',
    'calendar' => 'required',
    'cost_id' => 'required',
    'project_id' => 'required',
    'service_user' => 'required',
  ];

  public function save(){
    $this->validate();
    $formcalendar = Calendar::create([
      'total' => $this->amount_value,
      'mounth1' => $this->val1,
      'mounth2' => $this->val2,
      'mounth3' => $this->val3,
      'mounth4' => $this->val4,
      'mounth5' => $this->val5,
      'mounth6' => $this->val6,
      'mounth7' => $this->val7,
      'mounth8' => $this->val8,
      'mounth9' => $this->val9,
      'mounth10' => $this->val10,
      'mounth11' => $this->val11,
      'mounth12' => $this->val12,
    ]);
    $formcalendar->save();
    $formreport = Report::create([
      'date' => $this->date,
      'coin' => $this->currency_value,
      'id_country' => $this->payment_country,
      'currency' => $this->currency,
      'number1' => $this->amount_value,
      'number2' => $this->dollar_amount,
      'id_countryb' => $this->country_benefited,
      'id_concept' => $this->specific_concept,
      'concep' => $this->global_concept,
      'description' => $this->expense_description,
      'cost' => $this->cost_id,
      'calendar' => $this->calendar,
      'project' => $this->project_id,
      'name_beneficted' => $this->service_user,
      'user_area' => $this->user_area,
      'calendar_id' =>  $formcalendar->id,
    ]);
     return redirect()->route('reports.index');
  }

  public function updatedPaymentCountry($payment_country){
    $this->currency_value = Country::where('id', $payment_country)->pluck('current_change')->first();
    $this->currency = Country::where('id', $payment_country)->pluck('coin_type')->first();
  }

  public function updatedCountryBenefited($country_benefited){
  $this->beneficteds = Benefited::where('country_origin', $country_benefited)->pluck('name','id');
  $this->concept = Concept::where('country', $country_benefited)->pluck('specific_concept', 'id');
  }

  public function updatedAmountValue($amount_value){
    $this->dollar_amount = ($amount_value/$this->currency_value);
  }

  public function updatedSpecificConcept($specific_concept){
  $this->global_concept = Concept::where('id', $specific_concept)->pluck('global_concept')->first();
  }

  public function updatedServiceUser($service_user){
    $this->user_area = Benefited::where('id', $service_user)->pluck('area')->first();
  }

  public function updatedCalendar($calendar_id){
    $this->option = $calendar_id;
    if ($calendar_id == 1) {
      $valmounth = $this->amount_value/12;
      $this->val1 = $valmounth;$this->val2 = $valmounth;$this->val3 = $valmounth;$this->val4 = $valmounth;$this->val5 = $valmounth;$this->val6 = $valmounth;
      $this->val7 = $valmounth;$this->val8 = $valmounth;$this->val9 = $valmounth;$this->val10 = $valmounth;$this->val11 = $valmounth;$this->val12 = $valmounth;
    }
    $this->form = "display:flex";
  }

  public function form(){
    $this->form = "display:none";
  }

  public function render(){
    $users = User::find(auth()->user()->id)->countries()->get();
    $countries = $users->pluck('pais', 'id');
    return view('livewire.form-reports',compact('countries'));
  }
}
