<?php

namespace App\Providers;

use App\Helpers\Helper;
use App\Models\SocialLink;
use App\Models\Vacancy;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    Schema::defaultStringLength(191);

    Paginator::useBootstrap();

    view()->composer('*', function ($view) {
      $mainTexts = Helper::getGlobalTexts();
      $socialLinks = SocialLink::get();
      $vacancies = Vacancy::select('id', 'title')->get();

      return $view->with([
        'route' => \Route::currentRouteName(),
        'mainTexts' => $mainTexts,
        'socialLinks' => $socialLinks,
        'vacancies' => $vacancies,
      ]);
    });
  }
}
