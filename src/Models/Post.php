<?php

namespace Neop\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

   use HasFactory, SoftDeletes;
   protected $guarded = [];

   public function author()
   {
      return $this->morphTo();
   }
}
