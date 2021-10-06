<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;
    protected $fillable = [
      'mounth1',
      'mounth2',
      'mounth3',
      'mounth4',
      'mounth5',
      'mounth6',
      'mounth7',
      'mounth8',
      'mounth9',
      'mounth10',
      'mounth11',
      'mounth12',
      'total',
    ];
    public function report(){
      return $this->hasOne('App\Models\Report');
    }
}
