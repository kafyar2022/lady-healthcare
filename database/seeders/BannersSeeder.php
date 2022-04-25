<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 2) as $key) {
      Banner::create([
        'content' => 'content',
        'img' => 'img-' . $key . '.png',
      ]);
    }
  }
}
