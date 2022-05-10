<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'login' => 'lady_healthcare@admin.tj',
      'role' => 'admin',
      'password' => bcrypt('&S7w#?Zf'),
    ]);

    $this->call([
      TextsSeeder::class,
      SocialLinksSeeder::class,
      VacanciesSeeder::class,
      DrugsSeeder::class,
      DirectionsSeeder::class,
      BannersSeeder::class,
    ]);
  }
}
