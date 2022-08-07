<?php

namespace Neop\Blog\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Neop\Blog\Http\Requests\Admin\StorePostRequest;
use Neop\Blog\Http\Requests\Admin\UpdatePostRequest;
use Neop\Blog\Models\BlogTag;
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
      $posts = Post::latest()->paginate(15);

      return view('neop-blog::blog.admin.index', get_defined_vars());
      // return view('neop.blog.admin.index', get_defined_vars());
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Contracts\View\View
    */
   public function create()
   {
      $tags = BlogTag::select('id', 'title')->latest()->get();
      return view('neop-blog::blog.admin.create', get_defined_vars());
      // return view('neop.blog.admin.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StorePostRequest $request)
   {
      $post = Post::create($request->validated());

      $post->blogTags()->sync($request->tags);

      toast(trans('main.post_created'), 'success');
      return redirect()->route('admin.posts.index');
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  Post $post
    * @return \Illuminate\Contracts\View\View
    */
   public function edit(Post $post)
   {
      $tags = BlogTag::select('id', 'title')->latest()->get();

      return view('neop-blog::blog.admin.edit', get_defined_vars());
      // return view('neop.blog.admin.edit', get_defined_vars());
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Neop\Blog\Http\Requests\Admin\UpdatePostRequest $request
    * @param  Post $post
    * @return \Illuminate\Http\Response
    */
   public function update(UpdatePostRequest $request, Post $post)
   {
      $post->update($request->validated());

      $post->blogTags()->sync($request->tags);

      toast(trans('main.post_updated'), 'success');
      return redirect()->route('admin.posts.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  Post $post
    * @return \Illuminate\Http\Response
    */
   public function destroy(Post $post)
   {
      $post->blogTags()->detach();

      $post->delete();

      toast(trans('main.post_deleted'), 'success');
      return redirect()->route('admin.posts.index');
   }
}
