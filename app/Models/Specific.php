<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specific extends Model
{
    use HasFactory;
    protected $fillable = [
      'Pais',
      'Area',
      'Indice',
      'Concepto_global',
      'Concepto_especifico',
      'TBCode',
      'Cuenta',
      'Naturaleza_cuenta',
    ];
}
