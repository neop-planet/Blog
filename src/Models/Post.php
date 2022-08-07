<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Neop\Blog\Factories\PostFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use INeop\FileUpload\Facades\FileUpload;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{

   use HasFactory, SoftDeletes, HasTranslations;
   protected $guarded = ['id'];

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

   public function setImageAttribute($image)
   {
      if ($image) {
         $this->attributes['image'] = FileUpload::make($image)->store('posts');
      }
   }

   public function getImgAttribute()
   {
      return $this->image ? asset('storage/' . $this->image) : asset('dashboard/images/page.svg');
   }
}
