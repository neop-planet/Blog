<?php

namespace Neop\Blog\Factories;

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
         'content' => [],

      ];
   }
}
