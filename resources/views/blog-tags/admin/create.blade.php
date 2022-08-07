@extends('dashboard.layout.app')
@section('title', trans('main.create_tag'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.create_tag'))
@section('content')

<form method="POST" action="{{ route('admin.posts.tags.store') }}" enctype="multipart/form-data">
   @csrf
   <div class="row">
      <div class="col-lg-12 text-right d-flex flex-column justify-content-center">
         <button type="submit"
            class="btn btn-primary mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.save')</button>
      </div>
   </div>
   <div class="row mt-4">
      <div class="card">
         <div class="card-header">
            <h5 class="font-weight-bolder">@lang('main.new_tag')</h5>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-6">
                  <label>@lang('main.title_en')</label>
                  <input value="{{ old('title.en') }}" name="title[en]" class="form-control" type="text" />
                  @error('title.en')
                  <div class="text text-danger">
                     {{ $message }}
                  </div>
                  @enderror
               </div>
               <div class="col-6">
                  <label>@lang('main.title_ar')</label>
                  <input value="{{ old('title.ar') }}" name="title[ar]" class="form-control" type="text" />
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