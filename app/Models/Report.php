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
    ];
}
