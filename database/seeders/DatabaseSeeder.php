<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Factory;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->call(RolSeeder::class);
      $this->call(UserSeeder::class);
      User::factory(30)->create();
    }
}
