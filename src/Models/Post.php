<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Neop\Blog\Factories\PostFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{

   use HasFactory, SoftDeletes;
   protected $guarded = [];

   /**
    * Interact with the user's first name.
    *
    * @return \Illuminate\Database\Eloquent\Casts\Attribute
    */
   protected function slug(): Attribute
   {
      return Attribute::make(
         set: fn ($value) => strtolower($value),
      );
   }

   protected static function newFactory()
   {
      return PostFactory::new();
   }
   public function author()
   {
      return $this->morphTo();
   }
}
