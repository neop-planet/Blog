@extends('dashboard.layout.app')
@section('title', $tag->title)
@section('main_folder', __('main.dashboard'))
@section('sub_folder', $tag->title)
@section('content')
@can('delete blogtag')
@include('dashboard.components.delete-modal', [
'action' => route('admin.posts.tags.destroy', $tag->id),
'id' => $tag->id,
])
@endcan
<form method="POST" action="{{ route('admin.posts.tags.update', $tag->id) }}" enctype="multipart/form-data">
   @csrf
   @method('PATCH')
   <div class="row">
      <div class="col-lg-12 text-right d-flex justify-content-end">
         @can('delete blogtag')
         <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $tag->id }}"
            class="btn btn-outline-danger mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.delete')</button>
         @endcan
         <button type="submit"
            class="btn btn-primary mb-0 ms-2 me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="card">
         <div class="card-header">
            <h5 class="font-weight-bolder">{{ $tag->title }}</h5>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-6">
                  <label>@lang('main.title_en')</label>
                  <input value="{{ old('title.en',$tag->getTranslation('title','en')) }}" name="title[en]"
                     class="form-control" type="text" />
                  @error('title.en')
                  <div class="text text-danger">
                     {{ $message }}
                  </div>
                  @enderror
               </div>
               <div class="col-6">
                  <label>@lang('main.title_ar')</label>
                  <input value="{{ old('title.ar',$tag->getTranslation('title','ar')) }}" name="title[ar]"
                     class="form-control" type="text" />
                  @error('title.ar')
                  <div class="text text-danger">
                     {{ $message }}
                  </div>
                  @enderror
               </div>
            </div>
         </div>
      </div>
   </div>
</form>
@endsection