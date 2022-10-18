<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = array(
      array(
        'page' => null,
        'caption' => 'carrier-apply-title',
        'text' => 'Карьера
в Lady Healthcare',
      ),
      array(
        'page' => 'drugs',
        'caption' => 'to-drug',
        'text' => 'К препарату',
      ),
      array(
        'page' => 'drugs-show',
        'caption' => 'similar-title',
        'text' => 'Похожие препараты',
      ),
      array(
        'page' => null,
        'caption' => 'home-link',
        'text' => 'Главная',
      ),
      array(
        'page' => null,
        'caption' => 'drug-link',
        'text' => 'Все препараты',
      ),
      array(
        'page' => 'drugs-show',
        'caption' => 'download-instruction',
        'text' => 'Скачать
инструкцию',
      ),
      array(
        'page' => 'drugs-show',
        'caption' => 'drugs-buy',
        'text' => 'Приобрести
препарат',
      ),
      array(
        'page' => 'drugs-show',
        'caption' => 'similar-drugs-title',
        'text' => 'Похожие препараты',
      ),
    );

    foreach ($texts as $text) {
      Text::create([
        'page' => $text['page'],
        'caption' => $text['caption'],
        'text' => $text['text'],
      ]);
    }
  }
}
