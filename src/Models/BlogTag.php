<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Neop\Database\Factories\BlogTagsFactory;
use Spatie\Translatable\HasTranslations;

class BlogTag extends Model
{

   use HasFactory, HasTranslations;

   protected $guarded = [];

   public $translatable = ['title'];

   protected static function newFactory()
   {
      return BlogTagsFactory::new();
   }
   public function posts()
   {
      return $this->belongsToMany(Post::class);
   }
}
