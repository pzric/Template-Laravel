<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
      'pais',
      'coin_type',
      'current_change',
    ];
    //relacion usuario
    public function users(){
      return $this->belongsToMany('App\Models\User');
    }
    public function benefited(){
      return $this->belongsToMany('App\Models\Benefited');
    }
}
