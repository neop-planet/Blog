@extends('website.layout.app')
@section('title', __('main.posts'))
@section('content')
<x-page-header :title="__('main.posts')" url="{{ route('store.index') }}" img_class="bg-article" />

<div class="article-page">
   <div class="container">
      <div class="row justify-content-center">
         @if (count($posts))
         <div class="col-xxl-9 col-lg-10 col-md-12 col-12">
            @foreach ($posts as $post)
            <div class="item-article">
               <span dir="rtl">@lang('web.by') {{ $post->author->name }} /</span>
               <span>{{ $post->created_at->format('Y F d') }}</span>
               <h4><a href="{{ route('posts.show',$post->slug) }}">{{ $post->title }}</a></h4>
               <p>{{ $post->trimContent }}</p>
               <div class="img-article">
                  <a href="{{ route('posts.show',$post->slug) }}"> <img src="{{ $post->img }}" alt="img"></a>
               </div>
            </div>
            @endforeach
         </div>
         <div class="row">
            <div class="col-12">
               {{ $posts->links() }}
            </div>
         </div>
         @else
         <div class="alert alert-info text-center">@lang('web.no_articles')</div>
         @endif
      </div>
      <img class="icon-article" src="{{ asset('website/images/article/article-icon.svg') }}">
      <img class="icon-article-left" src="{{ asset('website/images/article/article-icon.svg') }}">
   </div>
</div>
@endsection