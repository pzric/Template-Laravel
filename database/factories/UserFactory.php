<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
          'username' => $this->faker->name(),
          'password' => Hash::make('password'),
          'email' => $this->faker->unique()->safeEmail(),
          'rol' =>
          'state' => random(1,0);
          'rememberToken' => Str::random(10),
        ];
    }
}
