@extends('website.layout.app')
@section('title', __('main.posts'))
@section('content')
<x-page-header :title="__('main.posts')" url="{{ route('store.index') }}" img_class="bg-store" />

<div class="article-page">
   <div class="container">
      <div class="row">
         @if (count($posts))
         <div class="col-12">
            @foreach ($posts as $post)
            <div class="item-article">
               <span dir="rtl">بواسطة {{ $post->author->name }} /</span>
               <span>{{ $post->created_at->format('Y F d') }}</span>
               <h4><a href="article-details.html">{{ $post->title }}</a></h4>
               <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                  يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                  التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                  النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد</p>
               <div class="img-article">
                  <a href="article-details.html"> <img src="assets/images/article/article-details-1.png" alt="img"></a>
               </div>
            </div>
            @endforeach
            {{-- <div class="item-article">
               <span>بواسطة أدمن / 13فبراير 2021</span>
               <h4><a href="article-details.html">الملوحي جريدة الرياض</a></h4>
               <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                  يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                  التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                  النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد</p>
               <div class="img-article">
                  <a href="article-details.html"> <img src="assets/images/article/article-details2.png" alt="img"></a>
               </div>
            </div>
            <div class="item-article">
               <span>بواسطة أدمن / 13فبراير 2021</span>
               <h4><a href="article-details.html">الملوحي جريدة الرياض</a></h4>
               <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                  يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                  التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                  النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد</p>
               <div class="img-article">
                  <a href="article-details.html"> <img src="assets/images/article/artcle-deatls3.png" alt="img"></a>
               </div>
            </div> --}}
         </div>
         {{ $posts->links() }}
         @else
         <div class="alert alert-info text-center">@lang('web.no_aritcles')</div>
         @endif
      </div>
      <img class="icon-article" src="{{ asset('website/images/article/article-icon.svg') }}">
      <img class="icon-article-left" src="{{ asset('website/images/article/article-icon.svg') }}">
   </div>
</div>
@endsection