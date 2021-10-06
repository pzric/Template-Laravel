<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefited extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area',
        'country_origin',
        'toggle',
    ];

    public function countries(){
      return $this->belongsToMany('App\Models\Country');
    }
}
