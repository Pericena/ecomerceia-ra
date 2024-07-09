<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;

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
    // Forzar el uso de HTTPS en todas las URLs generadas por Laravel
    if ($this->app->environment('production')) {
      URL::forceScheme('https');
    }

    // Usar Bootstrap para la paginación
    Paginator::useBootstrap();
  }
}