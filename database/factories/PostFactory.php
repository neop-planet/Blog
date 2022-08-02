<?php

namespace Neop\Blog\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Neop\Blog\Models\Post;

class PostFactory extends Factory
{
   protected $model = Post::class;

   public function definition()
   {
      return [
         'title' => $this->faker->unique()->word(),
         'slug' => $this->faker->unique()->slug(),
         'content' => \json_encode([]),
         'author_id' => Admin::first(),
         'author_type' => Admin::class
      ];
   }
}
