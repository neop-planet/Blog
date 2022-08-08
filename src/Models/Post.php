<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Neop\Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use INeop\FileUpload\Facades\FileUpload;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;

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

   public function getTrimContentAttribute()
   {
      return Str::limit(strip_tags($this->content), 300, $end = ' ... ');
   }

   public function scopeSlug($query, $slug)
   {
      $locale = App::getLocale();
      return $query->where("slug->en", 'LIKE', '%' . $slug . '%')
         ->OrWhere("slug->ar", 'LIKE', '%' . $slug . '%');
   }

   public function scopeSimpleSearch($query, $search)
   {
      $query->whereHas('blogTags', function (Builder $query) use ($search) {
         $query->where('blog_tags.id', $search);
      });
   }

   public function scopeFilter($query)
   {
      $query->when(request('search'), fn ($q) => $q->simpleSearch(request('search')));
   }
}
