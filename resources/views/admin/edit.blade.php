@extends('dashboard.layout.app')
@section('title', trans('main.edit_brand'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.edit_brand'))
@section('content')
    @can('delete brand')
        @include('dashboard.components.delete-modal', [
            'action' => route('admin.brands.destroy', $brand->id),
            'id' => $brand->id,
        ])
    @endcan
    <form method="post" action="{{ route('admin.brands.update', $brand->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-lg-12 text-right d-flex justify-content-end">
                @can('delete brand')
                    <button type="button" data-bs-toggle="modal" data-bs-target="#modal-delete_{{ $brand->id }}"
                        class="btn btn-outline-danger mb-0 ms-lg-auto me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.delete')</button>
                @endcan
                <button type="submit"
                    class="btn btn-primary mb-0 ms-2 me-lg-0 me-auto mt-lg-0 mt-2">@lang('main.save')</button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="font-weight-bolder">@lang('main.edit_brand')</h5>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>@lang('main.name')</label>
                            <input value="{{ old('name', $brand->name) }}" name="name" class="form-control" type="text"
                                placeholder="{{ __('main.enter_name') }}" />
                            @error('name')
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

                </div>
            </div>
        </div>
    </form>


@endsection

@push('script')
@endpush
