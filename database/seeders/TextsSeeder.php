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
        'caption' => 'company-email',
        'text' => 'info@ladyhealthcare.com',
      ),
      array(
        'page' => null,
        'caption' => 'company-phone',
        'text' => '+44 203 598 2050',
      ),
      array(
        'page' => null,
        'caption' => 'footer-address-title',
        'text' => 'Адрес регионального офиса',
      ),
      array(
        'page' => null,
        'caption' => 'footer-contacts-title',
        'text' => 'Контакты регионального офиса',
      ),
      array(
        'page' => null,
        'caption' => 'address',
        'text' => '«Lady Healthcare», Блок 18, Норман Роуд, 53, Гринвич Центр Бизнес Парк, Лондон, Англия, SE10 9QF',
      ),
      array(
        'page' => null,
        'caption' => 'copyright',
        'text' => '© 2012-2021 Lady Healthcare
Все права защищены',
      ),
      array(
        'page' => 'home',
        'caption' => 'for-women',
        'text' => 'Для женщин',
      ),
      array(
        'page' => 'home',
        'caption' => 'for-kids',
        'text' => 'Для детей',
      ),
      array(
        'page' => 'home',
        'caption' => 'slogan',
        'text' => 'Нежная забота о вас',
      ),
      array(
        'page' => 'home',
        'caption' => 'about-text',
        'text' => 'Lady Healthcare представляет собой воплощение женщины, олицетворяющей материнскую заботу, спокойствие и любовь, несущую благо окружающим.',
      ),
      array(
        'page' => 'home',
        'caption' => 'foundation-title',
        'text' => 'Наша основа',
      ),
      array(
        'page' => 'home',
        'caption' => 'about-company-title',
        'text' => 'О компании',
      ),
      array(
        'page' => 'home',
        'caption' => 'about-company-text',
        'text' => 'Lady Healthcare – активно развивающаяся фармацевтическая компания основанная в 2005 году занимающаяся разработкой и дистрибуцией современных, качественных и доступных лекарственных препаратов.',
      ),
      array(
        'page' => 'home',
        'caption' => 'mission-title',
        'text' => 'Миссия',
      ),
      array(
        'page' => 'home',
        'caption' => 'mission-text',
        'text' => 'Применять, разрабатывать и модернизировать новейшие инновационные научные достижения для решения задач в сфере здравоохранения и находить новые пути лечения различных заболеваний.',
      ),
      array(
        'page' => 'home',
        'caption' => 'vision-title',
        'text' => 'Видение',
      ),
      array(
        'page' => 'home',
        'caption' => 'vision-text',
        'text' => 'Создать надежную и стабильную компанию, которая вносит улучшения в практику здравоохранения.',
      ),
      array(
        'page' => 'home',
        'caption' => 'value-title',
        'text' => 'Наши ценности',
      ),
      array(
        'page' => 'home',
        'caption' => 'care-ethics-title',
        'text' => 'Забота и этика',
      ),
      array(
        'page' => 'home',
        'caption' => 'care-ethics-text',
        'text' => 'Один из главных принципов нашей корпоративной культуры – забота о здоровье девушек, женщин и детей. С помощью нашей продукции мы стараемся повысить благополучие и уровень жизни людей, что является приоритетным путем развития для компании.',
      ),
      array(
        'page' => 'home',
        'caption' => 'perfection-title',
        'text' => 'Совершенствование',
      ),
      array(
        'page' => 'home',
        'caption' => 'perfection-text',
        'text' => 'Мы стараемся постоянно совершенствовать методы создания своей продукции и находимся в поиске инноваций для производства еще более качественных лекарств, чтобы улучшить доступ населения к необходимой и доступной медицинской помощи.',
      ),
      array(
        'page' => 'home',
        'caption' => 'opennes-trust-title',
        'text' => 'Открытость и доверие',
      ),
      array(
        'page' => 'home',
        'caption' => 'opennes-trust-text',
        'text' => 'Доверие между коллегами – основа деятельности нашей компании. Также мы ведем открытый бизнес с партнерами на законной и взаимовыгодной основах. Укрепление взаимопонимания является приоритетом при работе во всех направлениях.',
      ),
      array(
        'page' => 'home',
        'caption' => 'parner-interest-title',
        'text' => 'Интресы партнеров',
      ),
      array(
        'page' => 'home',
        'caption' => 'parner-interest-text',
        'text' => 'Наша компания взаимодействует со специалистами здравоохранения, пациентами, производителями фармацевтической продукции, деловыми партнерами. Мы учитываем потребности и пожелание каждой группы людей для продвижения деятельности бренда.',
      ),
      array(
        'page' => 'home',
        'caption' => 'carrier-title',
        'text' => 'Карьера',
      ),
      array(
        'page' => 'home',
        'caption' => 'carrier-text',
        'text' => 'Сотрудники - наш механизм и залог успеха, чьи способности и потенциал раскрываются, путем обеспечения достойных условий труда, постоянного профессионального обучения и поощрения здорового образа жизни.',
      ),
      array(
        'page' => 'home',
        'caption' => 'join-us',
        'text' => 'Присоеднись к нам',
      ),
      array(
        'page' => 'home',
        'caption' => 'drugs-title',
        'text' => 'Наши препараты',
      ),
      array(
        'page' => 'home',
        'caption' => 'all-drug',
        'text' => 'Все препараты',
      ),
      array(
        'page' => 'home',
        'caption' => 'women-drugs',
        'text' => 'Для женщин',
      ),
      array(
        'page' => 'home',
        'caption' => 'kids-drugs',
        'text' => 'Для детей',
      ),
      array(
        'page' => 'home',
        'caption' => 'go-link',
        'text' => 'Перейти',
      ),
      array(
        'page' => 'home',
        'caption' => 'benefit-1',
        'text' => 'Слияние и
приобретение',
      ),
      array(
        'page' => 'home',
        'caption' => 'benefit-2',
        'text' => 'Построение
системы продаж',
      ),
      array(
        'page' => 'home',
        'caption' => 'benefit-3',
        'text' => 'Маркетинговое
продвижение',
      ),
      array(
        'page' => 'home',
        'caption' => 'benefit-4',
        'text' => 'Совместные проекты с
зарубежными фармкомпаниями',
      ),
      array(
        'page' => 'home',
        'caption' => 'benefit-5',
        'text' => 'Контроль за
издержками',
      ),
      array(
        'page' => 'home',
        'caption' => 'benefit-6',
        'text' => 'Внедрение
новых препаратов',
      ),
      array(
        'page' => 'home',
        'caption' => 'benefits-title',
        'text' => 'Преимущества партнерам',
      ),
      array(
        'page' => null,
        'caption' => 'carrier-apply-title',
        'text' => 'Карьера в Lady Healthcare',
      ),
      array(
        'page' => 'drugs',
        'caption' => 'to-drug',
        'text' => 'К препарату',
      ),
      array(
        'page' => 'drugs',
        'caption' => 'our-drugs-title',
        'text' => 'Наши препараты',
      ),
      array(
        'page' => 'drugs',
        'caption' => 'for-women-label',
        'text' => 'Для женщин',
      ),
      array(
        'page' => 'drugs',
        'caption' => 'for-kids-label',
        'text' => 'Для детей',
      ),
      array(
        'page' => 'drugs',
        'caption' => 'attention-title',
        'text' => 'Внимание',
      ),
      array(
        'page' => 'drugs',
        'caption' => 'attention-text',
        'text' => 'Информация, представленная на сайте, не должна использоваться для самостоятельной диагностики и лечения и не может служить заменой очной консультации врача.',
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
