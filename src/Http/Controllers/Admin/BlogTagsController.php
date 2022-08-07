<?php

namespace Neop\Blog\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Neop\Blog\Http\Requests\Admin\PostTagRequest;
use Neop\Blog\Models\BlogTag;

class BlogTagsController extends Controller
{
   /**
    * Display a listing of posts.
    *
    * @return \Illuminate\Contracts\View\View
    */
   public function index()
   {
      $tags = BlogTag::latest()->paginate(15);

      return view('neop-blog::blog-tags.admin.index', get_defined_vars());
      // return view('neop.blog-tags.admin.index', get_defined_vars());
   }
   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Contracts\View\View
    */
   public function create()
   {
      return view('neop-blog::blog-tags.admin.create');
      // return view('neop.blog-tags.admin.create');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(PostTagRequest $request)
   {
      BlogTag::create($request->validated());

      toast(trans('main.tag_created'), 'success');
      return redirect()->route('admin.posts.tags.index');
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  BlogTag $tag
    * @return \Illuminate\Contracts\View\View
    */
   public function edit(BlogTag $tag)
   {
      return view('neop-blog::blog-tags.admin.edit', get_defined_vars());

      // return view('neop.blog.admin.edit', get_defined_vars());
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Neop\Blog\Http\Requests\Admin\PostTagRequest $request
    * @param  BlogTag $tag
    * @return \Illuminate\Http\Response
    */
   public function update(PostTagRequest $request, BlogTag $tag)
   {
      $tag->update($request->validated());

      toast(trans('main.tag_updated'), 'success');
      return redirect()->route('admin.posts.tags.index');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  BlogTag $tag
    * @return \Illuminate\Http\Response
    */
   public function destroy(BlogTag $tag)
   {
      $tag->delete();

      toast(trans('main.tag_deleted'), 'success');
      return redirect()->route('admin.posts.tags.index');
   }
}
