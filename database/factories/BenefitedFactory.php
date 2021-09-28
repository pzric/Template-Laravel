<?php

namespace Database\Factories;

use App\Models\Benefited;
use Illuminate\Database\Eloquent\Factories\Factory;

class BenefitedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Benefited::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
        'name' => 'Paco',
        'area' => 'paco@paco.com',
        'country_origin' => '1',
        'toggle' => 'on',
      ];
    }
}
