@extends('dashboard.layout.app')
@section('title', trans('main.edit_post'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.edit_post'))
@section('content')
@can('delete post')
@include('dashboard.components.delete-modal', [
'action' => route('admin.posts.destroy', $post->id),
'id' => $post->id,
])
@endcan
<form method="post" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">
        <div class="col-lg-12 text-right d-flex justify-content-end">
            @can('delete post')
            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $post->id }}"
                class="btn btn-outline-danger mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.delete')</button>
            @endcan
            <button type="submit"
                class="btn btn-primary mb-0 ms-2 me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.save')</button>
        </div>
    </div>
    <div class="row mt-4">
        <div class="card">
            <div class="card-body">
                <h5 class="font-weight-bolder">@lang('main.edit_post')</h5>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label>@lang('main.title')</label>
                        <input value="{{ old('title', $post->title) }}" name="title" class="form-control" type="text"
                            placeholder="{{ __('main.enter_title') }}" />
                        @error('title')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-6">
                        <label>@lang('main.image')</label>
                        <input value="{{ old('image') }}" name="image" class="form-control" type="file"
                            placeholder="{{ __('main.enter_image') }}" />
                        @error('image')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <label for="content">@lang('main.content')</label>
                        <textarea name="content" id="content" class="form-control" cols="30"
                            rows="10">{{ $post->content }}</textarea>
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>


@endsection

@push('script')
@endpush