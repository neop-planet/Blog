<?php

namespace Neop\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
   public function boot()
   {
      $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
      $this->loadRoutesFrom(__DIR__ . '/../../routes/admin.php');

      $this->loadViewsFrom(__DIR__ . '/../../resources/views/', 'neop-blog');

      $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
   }
}
