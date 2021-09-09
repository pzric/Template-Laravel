<?php

namespace Database\Factories;

use App\Models\Report;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Report::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
     public function definition()
     {
       return [
           'date' => '26/08/1999',
           'payment_country' => $this->faker->randomElement(['mexico','chile','peru']),
           'currency' => $this->faker->randomElement(['usd','mxn','eur']),
           'amount' => $this->faker->randomElement(['mexico','chile','peru']),
           'dollar_amount' =>  '333',
           'accrual' => '222',
           'project' => $this->faker->randomElement(['proyecto1','proyecto2','proyecto3']),
           'cost' => '111',
           'description' => 'Esta es una prueba desde la fabrica de datos',
           'state' => $this->faker->randomElement(['No autorizado','Autoizado']),
           'username' => $this->faker->name(),
           'user_area' => $this->faker->randomElement(['area1','area2','area3']),
       ];
     }
}
