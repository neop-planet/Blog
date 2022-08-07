@extends('dashboard.layout.app')
@section('title', trans('main.Tags'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.Tags'))
@section('content')
<div class="row">
   <div class="col-12">
      <div class="card">
         <!-- Card header -->
         <div class="card-header pb-0">
            <div class="d-lg-flex">
               <div>
                  <h5 class="mb-0">@lang('main.Tags')</h5>
               </div>
               <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                     @can('add post')
                     <a href="{{ route('admin.posts.create') }}" class="btn  btn-primary btn-sm mb-0"
                        target="_blank">+&nbsp; @lang('main.new_post') </a>
                     @endcan
                  </div>
               </div>
            </div>
            <div class="card-body px-0 pb-0">
               <div class="table-responsive">
                  <table class="table table-flush" id="posts-list">
                     <thead class="thead-light">
                        <tr>
                           <th>#</th>
                           <th>
                              @lang('main.name')
                           </th>
                           <th>
                              @lang('main.image')
                           </th>
                           <th>
                              @lang('main.author')
                           </th>
                           <th>
                              @lang('main.action')
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @forelse($posts as $post)
                        <tr>
                           <td>
                              {{ $loop->iteration }}
                           </td>
                           <td>
                              <div class="d-flex">
                                 <h6 class="ms-3 my-auto">{{ $post->title }}</h6>
                              </div>
                           </td>
                           <td>
                              <img class="w-10 ms-3" src="{{ $post->img }}" alt="post_image" />
                           </td>
                           <td>
                              {{ $post->author->name }}
                           </td>
                           <td class="text-sm">
                              @can('edit post')
                              <a href="{{ route('admin.posts.edit', $post->id) }}" class="mx-3" data-bs-toggle="tooltip"
                                 data-bs-original-title="Edit product">
                                 <i class="fas fa-user-edit text-secondary"></i>
                              </a>
                              @endcan
                              @can('delete post')
                              <a href="javascript:;" data-bs-toggle="modal"
                                 data-bs-target="#modal-delete_{{ $post->id }}">
                                 <i class="fas fa-trash text-secondary"></i>
                              </a>
                              @include('dashboard.components.delete-modal', [
                              'action' => route('admin.posts.destroy', $post->id),
                              'id' => $post->id,
                              ])
                              @endcan
                           </td>
                        </tr>
                        @empty
                        @endforelse
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="card-footer">
               {{ $posts->links() }}
            </div>
         </div>
      </div>
   </div>
</div>


@endsection

@push('script')
<script src="{{ asset('dashboard/js/plugins/datatables.js') }}"></script>
<script>
   if (document.getElementById('posts-list')) {
                const dataTableSearch = new simpleDatatables.DataTable("#posts-list", {
                    searchable: false,
                    fixedHeight: false,
                    paging: false
                });
            };
</script>
@endpush