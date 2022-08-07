<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Neop\Blog\Factories\BlogTagsFactory;

class BlogTag extends Model
{

   use HasFactory;
   protected $guarded = [];
   protected static function newFactory()
   {
      return BlogTagsFactory::new();
   }
   public function posts()
   {
      return $this->belongsToMany(Post::class);
   }
}
