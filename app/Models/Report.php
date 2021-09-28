<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'coin',
        'id_country',
        'currency',
        'number1',
        'number2',
        'id_countryb',
        'id_concept',
        'concep',
        'description',
        'calendar',
        'cost',
        'project',
        'name_beneficted',
        'user_area',
        'calendar_id',
    ];
    public function users(){
      return $this->belongsToMany('App\Models\User');
    }
    public function calendar(){
      return $this->hasOne('App\Models\Calendar');
    }
}
