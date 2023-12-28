<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   */
  public function run(): void {
    // \App\Models\User::factory(10)->create();
    $user = User::factory()->create([
      'name' => 'JohnDuo',
      'email' => 'john@mail.com',
      'username' => 'john_duo',
    ]);

    Job::factory(5)->create([
      'user_id' => $user->id
    ]);


    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}