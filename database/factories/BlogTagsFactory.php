<?php

namespace Neop\Blog\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Neop\Blog\Models\BlogTag;

class BlogTagsFactory extends Factory
{
   protected $model = BlogTag::class;

   public function definition()
   {
      return [
         'title' => $this->faker->unique()->word(),
      ];
   }
}
