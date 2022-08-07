@extends('dashboard.layout.app')
@section('title', $post->title)
@section('main_folder', __('main.dashboard'))
@section('sub_folder', $post->title)
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
            <div class="card-header">
                <h5 class="font-weight-bolder">{{ $post->title }}</h5>
            </div>
            <div class="card-img-top mt-3">
                <div class="avatar-upload mb-0">
                    <div class="avatar-edit">
                        <input type='file' id="imageUpload-1" accept=".png, .jpg, .jpeg" name="image" />
                        <label for="imageUpload-1"><img
                                src="{{asset('dashboard/js/plugins/imageUpload/camera.svg')}}"></label>
                    </div>
                    <div class="avatar-preview" style="height: 400px">
                        <div id="imagePreview-1" style="background-image: url('{{ $post->img }}');">
                        </div>
                    </div>
                </div>
                @error('col1.img')
                <div class="text text-danger">{{$message}}</div>
                @enderror
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>@lang('main.title_en')</label>
                        <input value="{{ old('title.en',$post->getTranslation('title','en')) }}" name="title[en]"
                            class="form-control" type="text" />
                        @error('title.en')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label>@lang('main.title_ar')</label>
                        <input value="{{ old('title.ar',$post->getTranslation('title','ar')) }}" name="title[ar]"
                            class="form-control" type="text" />
                        @error('title.ar')
                        <div class="text text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        @error('content_en')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                        <textarea class="form-control text-editor" name="content[en]"
                            style="overflow:hidden">{!! old('content.en',$post->getTranslation('content','en'))!!}</textarea>
                    </div>

                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                        @error('content_ar')
                        <div class="text text-danger">{{$message}}</div>
                        @enderror
                        <textarea class="form-control text-editor" name="content[ar]"
                            style="overflow:hidden">{{old('content.ar' ,$post->getTranslation('content','ar'))}}</textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                        <label for="choices-tags">@lang('main.tags')</label>
                        <select class="form-control" name="tags[]" id="choices-tags" multiple>
                            @forelse ($tags as $tag)
                            <option value="{{ $tag->id }}" @if (in_array($tag->id,
                                old('tags')??$post->blogTags->pluck('id')->toArray())) selected @endif>{{ $tag->title
                                }}
                            </option>
                            @empty
                            <option value="">@lang('main.no_tags')</option>
                            @endforelse
                        </select>
                        @error('tags')
                        <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
    </div>
</form>


@endsection

@push('style')
<link rel="stylesheet" href="{{asset('dashboard/js/plugins/imageUpload/upload.css')}}" type="text/css">
@endpush
@push('script')
<script>
    if (document.getElementById('choices-tags')) {
        var tags = document.getElementById('choices-tags');
        const examples = new Choices(tags, {
            removeItemButton: true
        });
    }
</script>
<script src="{{asset('dashboard/js/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('dashboard/js/plugins/tinymce/tinymce-init.js')}}"></script>
<script>
    function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $("#imagePreview-1").css(
                "background-image",
                "url("+ e.target.result + ")"
            );
            $("#imagePreview-1").hide();
            $("#imagePreview-1").fadeIn(650);
        };
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload-1").change(function () {
    readURL1(this);
});
</script>
@endpush