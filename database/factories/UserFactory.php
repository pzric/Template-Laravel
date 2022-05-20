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
          'code' => '1234',
          'name' => 'Admin',
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
          'email' => 'admin@admin.com',
          'country_origin' => '1',
          'rol' => 'Super usuario',
          'area' => 'TI',
          'start_date' => '2021-09-21',
          'end_date' => null,
          'state' => 'on',
          'cod_manager' => '1234',
          'email_manager' => 'admin@admin.com',
      ];
    }
}
