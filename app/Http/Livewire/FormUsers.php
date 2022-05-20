<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Country;
use App\Models\User;
use Countries;


class FormUsers extends Component
{
  public $user_code,$user_name, $user_password, $password_confirm, $user_email, $country_origin, $user_rol, $user_area,
           $start_date, $end_date, $cod_manager, $email_manager, $countries, $selctcountries=[];

  public $state= 1;

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

  protected $rules = [
    'user_code' => 'required|min:0||integer|numeric|unique:App\Models\User,code',
    'user_name' => 'required|string|regex:/^[a-zA-Z ]+$/',
    'user_password' => [
            'required',
            'string',
            'min:6',
            'regex:/[a-z]/',
            'regex:/[A-Z]/',
            'regex:/[0-9]/',
        ],
    'password_confirm' => 'required|same:user_password|min:6',
    'user_email'=>'required|email',
    'country_origin' => 'required',
    'user_rol' => 'required',
    'user_area' => 'required',
    'start_date' => 'required|after_or_equal:fechaInicial',
    'cod_manager' => 'required|numeric|exists:App\Models\User,code',
    'email_manager' => 'required|email',
  ];

  public function messages()
  {
      return [
          'user_password.required' => 'El campo password es requerido.',
          'user_password.min' => 'El campo password debe contener almenos 6 caracteres',
          'user_password.regex' => 'El campo password debe contener letras minusculas, mayusculas y numeros',
      ];
  }

  public function save(){
    $this->validate();
    $user = User::create([
      'code' => $this->user_code,
      'name' => $this->user_name,
      'password' => bcrypt($this->user_password),
      'email' => $this->user_email,
      'country_origin' => $this->country_origin,
      'rol' => $this->user_rol,
      'area' => $this->user_area,
      'start_date' => $this->start_date,
      'end_date' => $this->end_date,
      'state' => $this->state,
      'cod_manager' => $this->cod_manager,
      'email_manager' => $this->email_manager,
    ]);
    $this->selctcountries = array_merge($this->selctcountries, array($this->country_origin));
    if ($this->selctcountries) {
       $user->countries()->attach($this->selctcountries);
     }
     return redirect()->route('users.index');
  }

  public function updatedCountryorigin($country_origin){
      $this->countries = Country::where('id','<>', $country_origin)->get();
  }

  public function render(){
      $allcountries = Country::pluck('country', 'id');
      return view('livewire.form-users',compact('allcountries'));
  }
}
