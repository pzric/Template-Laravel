<?php

namespace Database\Factories;

use App\Models\Specific;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpecificFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Specific::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'Pais' => '1',
          'Area' => 'comercial',
          'Indice' => '7050',
          'Concepto_global' => 'SELLING',
          'TBCode' => 'T06',
          'Cuenta' => '610-006-001',
        ];
    }
}
