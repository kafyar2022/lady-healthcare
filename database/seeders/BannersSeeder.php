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
        'content' => '<h2 class="glide__title">Нео Витес</h2><p class="glide__subtitle">для иммунитета</p><p class="glide__text">НЕО ВИТЕС (для иммунитета) стимулирует как специфические, так и неспецифические факторы иммунитета.</p><a class="button glide__link" href="#">К препарату</a>',
        'img' => 'img-' . $key . '.png',
      ]);
    }
  }
}
