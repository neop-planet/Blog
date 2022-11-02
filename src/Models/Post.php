<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use INeop\FileUpload\Facades\FileUpload;
use Neop\Database\Factories\PostFactory;
use Spatie\Translatable\HasTranslations;

class Post extends Model
{

    use HasFactory, SoftDeletes, HasTranslations;
    protected $guarded = ['id'];

    public $translatable = ['title', 'content', 'slug'];

    protected static function newFactory()
    {
        return PostFactory::new ();
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
        return $query->where("slug->en", $slug)
            ->OrWhere("slug->ar", $slug);
    }

    public function scopeSimpleSearch($query, $search)
    {
        $query->whereHas('blogTags', function (Builder $query) use ($search) {
            $query->where('blog_tags.id', $search);
        });
    }

    public function scopeFilter($query)
    {
        $query->when(request('search'), fn($q) => $q->simpleSearch(request('search')));
    }
}