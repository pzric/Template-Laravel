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
          'name' => 'Admin',
          'email' => 'admin@admin.com',
          'rol' => 'Super ususario',
          'area' => 'TI',
          'start_date' => '2021-09-21',
          'end_date' => '2021-10-09',
          'toggle' => 'on',
          'country_origin' =>'0',
          'code' => '12345',
          'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
          'cod_manager' => '90123',
          'email_manager' => 'jefe@jefe.com',
      ];
    }
}
