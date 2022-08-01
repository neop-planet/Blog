<?php

namespace Neop\Blog\Traits;

use Neop\Blog\Models\Post;

trait HasPosts
{
   public function posts()
   {
      return $this->morphMany(Post::class, 'author');
   }
}
