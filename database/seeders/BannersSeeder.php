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
        'content' => '<h1>Нео Витес</h1><p>для иммунитета</p><p>НЕО ВИТЕС (для иммунитета) стимулирует как специфические, так и неспецифические факторы иммунитета.</p><a href="#">К препарату</a>',
        'img' => 'img-' . $key . '.png',
      ]);
    }
  }
}
