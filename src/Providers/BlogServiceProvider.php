<?php

namespace Neop\Blog\Providers;

use Illuminate\Support\ServiceProvider;

class BlogServiceProvider extends ServiceProvider
{
   public function boot()
   {
      $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
      $this->loadRoutesFrom(__DIR__ . '/../../routes/admin.php');

      $this->loadViewsFrom(__DIR__ . '/../../resources/views/website', 'website-blog');
      $this->loadViewsFrom(__DIR__ . '/../../resources/views/admin', 'admin-blog');

      $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

      // if ($this->app->runningInConsole()) {
      //    if (!class_exists('CreatePostsTable')) {
      //       $this->publishes([
      //          __DIR__ . '/../../database/migrations/create_posts_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_posts_table.php'),
      //       ], 'laravel-assets');
      //    }
      // }
   }
}
