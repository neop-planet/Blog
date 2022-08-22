@extends('website.layout.app')
@section('title', $post->title)
@section('content')
<x-page-header :title="__('main.posts')" url="{{ route('store.index') }}" img_class="bg-article" />

<div class="article-page article-section-details">
   <div class="container">
      <div class="row">
         <!--Right-part-->
         <div class="col-lg-8 col-md-7 col-sm-12">
            <div class="article-details">
               <div class="img">
                  <img src="{{ $post->img }}" alt="{{ $post->title }}">
               </div>
               <div class="description">
                  <ul class="publish-in">
                     {{-- <li> @lang('web.published_at') {{ $post->created_at->format('Y F d') }}</li>
                     <li>@lang('web.by') {{ $post->author->name }}</li> --}}
                  </ul>
                  <h4>{{ $post->title }}</h4>
                  {!! $post->content !!}
               </div>
            </div>
         </div>
         <!--Left-part-->
         <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="other-article">
               <div class="card">
                  <div class="card-header">
                     <p>@lang('web.other_articles')</p>
                  </div>
                  <div class="card-body">
                     <!--Item1-->
                     @foreach ($otherPosts as $opost)
                     <ul class="divide-box">
                        <li>
                           <div class="img">
                              <a href="{{ route('posts.show',$opost->slug) }}"> <img src="{{ $opost->img }}"
                                    alt="{{ $opost->title }}" /></a>
                           </div>
                        </li>
                        <li>
                           <p><a href="{{ route('posts.show',$opost->slug) }}">{{$opost->title}}</a>
                           </p>
                           {{-- <ul class="publish-in">
                              <li> @lang('web.published_at') {{ $opost->created_at->format('Y F d') }}</li>
                              <li>@lang('web.by') {{ $opost->author->name }}</li>
                           </ul> --}}
                        </li>
                     </ul>
                     @endforeach
                  </div>
               </div>
               <!--Related-Words-->
               <div class="card">
                  <div class="card-header">
                     <p>@lang('web.related_tags')</p>
                  </div>
                  <div class="card-body">
                     <ul class="tags-ul">
                        @forelse ($post->blogTags as $tag)
                        <li><a href="{{route('posts.index','search='.$tag->id)}}">{{$tag->title}}</a></li>
                        @empty
                        <div class="alert alert-info text-center">@lang('web.no_related_tags')</div>
                        @endforelse
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <img class="icon-article" src="{{asset('website/images/article/article-icon.svg')}}">
      <img class="icon-article-left" src="{{asset('website/images/article/article-icon.svg')}}">
   </div>
</div>
@endsection