<?php

namespace Neop\Blog\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Neop\Blog\Models\Post;

class BlogController extends Controller
{
   /**
    * Display a listing of posts.
    *
    * @return \Illuminate\Contracts\View\View
    */
   public function index()
   {
      $posts = Post::filter()->latest()->paginate(5);

      return view('neop-blog::blog.website.index', get_defined_vars());
   }


   /**
    * Display the specified post.
    *
    * @param  Post $post
    * @return \Illuminate\Contracts\View\View
    */
   public function show($slug)
   {
      $post = Post::slug($slug)->with('blogTags')->first();

      $otherPosts = Post::where('created_at', '>=', Carbon::now()->subdays(30))->get()->except($post->id)->take(4);

      if (!count($otherPosts)) {
         $otherPosts = Post::latest()->get()->except($post->id)->take(4);
      }

      return view('neop-blog::blog.website.show', compact('post', 'otherPosts'));
   }
}
