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
      'password',
      'email',
      'rol',
      'country_origin',
      'area',
      'money',
      'start_date',
      'end_date',
      'toggle',
      'cod_manager',
      'email_manager',
    ];

}
