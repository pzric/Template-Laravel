<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
          'name' => $this->faker->name(),
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
          'email' => $this->faker->unique()->safeEmail(),
          'position' => $this->faker->randomElement(['admin','user']),
          'area_code' => '1',
          'country' => $this->faker->randomElement(['mexico','chile','peru']),
          'country_origin' => $this->faker->randomElement(['mexico','chile','peru']),
          'currency' => $this->faker->randomElement(['usd','mxn','eur']),
          'status' => $this->faker->randomElement(['activo','inactivo']),
          'start_date' => '26/08/1999',
          'cod_manager' => $this->faker->randomElement(['222','333','444']),
          'email_manager' => $this->faker->randomElement(['admin1@gmail.com','admin2@gmail.com']),
      ];
    }
}
