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
    $banners = array(
      array(
        'id' => 1,
        'img' => 'img-1.png',
        'title' => 'Нео Витес для иммунитета',
        'text' => 'НЕО ВИТЕС (для иммунитета) стимулирует как специфические, так и неспецифические факторы иммунитета.',
        'link' => 'К препарату',
        'url' => '#',
      ),
      array(
        'id' => 2,
        'img' => 'img-2.png',
        'title' => 'Нео Витес для иммунитета',
        'text' => 'НЕО ВИТЕС (для иммунитета) стимулирует как специфические, так и неспецифические факторы иммунитета.',
        'link' => 'К препарату',
        'url' => '#',
      ),
      array(
        'id' => 3,
        'img' => 'img-1.png',
        'title' => 'Нео Витес для иммунитета',
        'text' => null,
        'link' => null,
        'url' => null,
      ),
    );

    foreach ($banners as $banner) {
      Banner::create([
        'img' => $banner['img'],
        'title' => $banner['title'],
        'text' => $banner['text'],
        'link' => $banner['link'],
        'url' => $banner['url'],
      ]);
    }
  }
}
