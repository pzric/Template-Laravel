<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract {

    use Authenticatable;
    use HasFactory;
    protected $fillable = [
      'name',
      'email',
      'rol',
      'area',
      'start_date',
      'end_date',
      'toggle',
      'country_origin',
      'code',
      'password',
      'cod_manager',
      'email_manager',
      'money',
      'countries',
    ];
    //Relacion tabla paises
    public function countries(){
      return $this->belongsToMany('App\Models\Country');
    }
    public function reports(){
      return $this->belongsToMany('App\Models\Report');
    }
}
