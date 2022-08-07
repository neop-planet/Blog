<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Neop\Blog\Factories\PostFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{

   use HasFactory, SoftDeletes, HasTranslations;
   protected $guarded = [];

   public $translatable = ['title', 'content', 'slug'];

   protected static function newFactory()
   {
      return PostFactory::new();
   }
   public function author()
   {
      return $this->morphTo();
   }
   public function blogTags()
   {
      return $this->belongsToMany(BlogTag::class);
   }
}
