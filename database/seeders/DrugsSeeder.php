<?php

namespace Database\Seeders;

use App\Models\Drug;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DrugsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $faker = Faker::create('ru_RU');

    $prescription = ['ОТС', 'RX', 'БАД'];

    foreach (range(1, 33) as $key) {
      Drug::create([
        'direction_id' => $faker->numberBetween($min = 1, $max = 11),
        'title' => 'Милдрокард',
        'slug' => SlugService::createSlug(Drug::class, 'slug', 'Милдрокард'),
        'min_composition' => '2мл',
        'max_composition' => '5мл',
        'prescription' => $prescription[$faker->numberBetween($min = 0, $max = 2)],
        'description' => 'Милдрокард обладает стимулирующим действием на центральную нервную систему (ЦНС) — повышение двигательной активности и физической выносливости.',
        'category' => $key % 2 == 0 ? 'for-kids' : 'for-women',
        'img' => 'img/products/mildrokard.png',
        'instruction' => 'files/products/mildrokard.pdf',
        'compound' => '1 капсула содержит:
3-(2,2,2-Триметилгидразиний)-пропионата дигидрат – 250мг или 500мг.
Вспомогательные вещества: крахмал картофельный, аэросил, кальция стеарат.',
        'indications' => 'Следует применять при следующих показаниях:
В составе комплексной терапии в следующих случаях:
при физических и психо-эмоциональных перегрузках, сопровождающихся снижением работоспособности;
в период восстановления после перенесенных цереброваскулярных заболеваний, черепно-мозговой травмы и энцефалита (по рекомендациям врача).',
        'mode' => 'Внутрь.
Суточная доза для взрослых составляет 500 мг (2 капсулы). Всю дозу применяют с утра в один прием или разделив ее на 2 приема. Курс лечения – 10-14 дней.
При необходимости лечение повторяют через 2-3 недели.
В связи с возможным возбуждающим эффектом препарат рекомендуется применять в первой половине дня.',
        'url' => 'https://salomat.tj/index.php/main/product/2102',
      ]);
    }
  }
}
