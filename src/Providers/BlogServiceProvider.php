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


      $this->publishes([
         // __DIR__ . '/../../resources/views/' => resource_path('views/neop/'),
         __DIR__ . '/../../database/migrations/create_posts_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_posts_table.php'),
         __DIR__ . '/../../database/migrations/create_blog_tags_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_blog_tags_table.php'),
         __DIR__ . '/../../database/migrations/create_blog_tag_post_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_blog_tag_post_table.php'),
      ], 'laravel-assets');


      // $this->publishes([
      //    __DIR__ . '/../../database/migrations/2022_07_06_142650_create_posts_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_posts_table.php'),
      // ], 'neop-blog-migrations');
   }
}
