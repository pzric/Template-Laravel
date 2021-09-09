<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
      'date',
      'payment_country',
      'currency',
      'amount',
      'dollar_amount',
      'accrual',
      'project',
      'cost',
      'description',
      'state',
      'username',
      'user_area',
    ];
}
