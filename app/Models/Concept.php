<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    use HasFactory;
    protected $fillable = [
      'country',
      'account',
      'specific_concept',
      'global_concept',
      'TBCode',
      'indice',
      'area',
    ];
}
