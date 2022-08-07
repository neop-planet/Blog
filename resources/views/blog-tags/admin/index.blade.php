@extends('dashboard.layout.app')
@section('title', trans('main.tags'))
@section('main_folder', __('main.dashboard'))
@section('sub_folder', __('main.tags'))
@section('content')
<div class="row">
   <div class="col-12">
      <div class="card">
         <!-- Card header -->
         <div class="card-header pb-0">
            <div class="d-lg-flex">
               <div>
                  <h5 class="mb-0">@lang('main.tags')</h5>
               </div>
               <div class="ms-auto my-auto mt-lg-0 mt-4">
                  <div class="ms-auto my-auto">
                     @can('add blogtag')
                     <a href="{{ route('admin.posts.tags.create') }}" class="btn  btn-primary btn-sm mb-0"
                        target="_blank">+&nbsp; @lang('main.new_tag') </a>
                     @endcan
                  </div>
               </div>
            </div>
            <div class="card-body px-0 pb-0">
               <div class="table-responsive">
                  <table class="table table-flush" id="tags-list">
                     <thead class="thead-light">
                        <tr>
                           <th>#</th>
                           <th>
                              @lang('main.title_en')
                           </th>
                           <th>
                              @lang('main.title_ar')
                           </th>
                           <th>
                              @lang('main.action')
                           </th>
                        </tr>
                     </thead>
                     <tbody>
                        @forelse($tags as $tag)
                        <tr>
                           <td>
                              {{ $loop->iteration }}
                           </td>
                           <td>
                              {{ $tag->getTranslation('title','en') }}
                           </td>
                           <td>
                              {{ $tag->getTranslation('title','ar') }}
                           </td>
                           <td class="text-sm">
                              @can('edit blogtag')
                              <a href="{{ route('admin.posts.tags.edit', $tag->id) }}" class="mx-3"
                                 data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                                 <i class="fas fa-user-edit text-secondary"></i>
                              </a>
                              @endcan
                              @can('delete blogtag')
                              <a href="javascript:;" data-bs-toggle="modal"
                                 data-bs-target="#modal-delete_{{ $tag->id }}">
                                 <i class="fas fa-trash text-secondary"></i>
                              </a>
                              @include('dashboard.components.delete-modal', [
                              'action' => route('admin.posts.tags.destroy', $tag->id),
                              'id' => $tag->id,
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
               {{ $tags->links() }}
            </div>
         </div>
      </div>
   </div>
</div>


@endsection

@push('script')
<script src="{{ asset('dashboard/js/plugins/datatables.js') }}"></script>
<script>
   if (document.getElementById('tags-list')) {
                const dataTableSearch = new simpleDatatables.DataTable("#tags-list", {
                    searchable: false,
                    fixedHeight: false,
                    paging: false
                });
            };
</script>
@endpush