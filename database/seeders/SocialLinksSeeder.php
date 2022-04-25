<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinksSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $socials = array(
      array(
        'title' => 'Фейсбук',
        'icon' => 'facebook.svg',
        'url' => '#',
      ),
      array(
        'title' => 'Инстаграмм',
        'icon' => 'instagram.svg',
        'url' => '#',
      ),
    );

    foreach ($socials as $social) {
      SocialLink::create([
        'title' => $social['title'],
        'icon' => $social['icon'],
        'url' => $social['url'],
      ]);
    }
  }
}
