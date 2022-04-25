<?php

namespace Database\Seeders;

use App\Models\Direction;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;

class DirectionsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $directions = [
      'Аллергология',
      'Антимикробный препараты',
      'Витамины и препараты',
      'Гематология',
      'Гинекология',
      'Глюкокортикостероиды',
      'Дерматология',
      'Дыхательная система',
      'Иммунология',
      'Костно-мышечная система',
      'Неврология',
    ];

    for ($i=0; $i < count($directions); $i++) {
      Direction::create(['title' => $directions[$i]]);
    }
  }
}
