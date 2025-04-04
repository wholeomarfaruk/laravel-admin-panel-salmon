
@extends('admin.layouts.admin')

@push('styles')
<style>
    .table-striped th:nth-child(2), .table-striped td:nth-child(2) {
    width: inherit;
    padding-bottom: inherit;
}
.table-striped th:nth-child(2), .table-striped td:nth-child(2) {
    width: inherit;
    padding-bottom: inherit;
}
.table-striped th:nth-child(1), .table-striped td:nth-child(1) {
    width: 100px;
    padding-bottom: inherit;
}
.table-striped th:nth-child(1), .table-striped td:nth-child(1) {
    width: 100px;
    padding-bottom: inherit;
}
</style>
@endpush
@section('content')

    <!-- content area start -->
    <div class="main-content-inner">
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Blogs</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="{{ route('admin.dashboard.index') }}">
                            <div class="text-tiny">Dashboard</div>
                        </a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">Blogs</div>
                    </li>
                </ul>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between gap10 flex-wrap">
                    <div class="wg-filter flex-grow">
                        {{-- <form class="form-search">
                            <fieldset class="name">
                                <input type="text" placeholder="Search here..." class="" name="name"
                                    tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <div class="button-submit">
                                <button class="" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form> --}}
                    </div>
                    <a class="tf-button style-1 w208" href="{{ route('admin.blog.add') }}"><i
                            class="icon-plus"></i>Add new</a>
                </div>
                <div class="wg-table">
                    <div class="table-responsive">
                        @if (Session::has('status'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('status') }}
                        </div>
                         @endif

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog )

                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td >
                                        <div class="flex items-center justify-start flex-wrap gap10">
                                            <div class="image">
                                                <img src="{{ asset($blog->thumbnail?->file) }}" alt="" class="image">
                                            </div>
                                            <div class="name">
                                                <a href="#" class="body-title-2">{{ $blog->title }}</a>
                                            </div>
                                        </div>


                                    </td>
                                    <td >
                                        {{ $blog->slug }}
                                    </td>
                                    <td>
                                        @if ($blog->status == \App\Enums\BlogStatus::PUBLISHED->value)
                                        <span class="badge bg-success  rounded-pill">Published</span>
                                        @elseif ($blog->status == \App\Enums\BlogStatus::DRAFT->value)
                                        <span class="badge bg-danger rounded-pill">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="list-icon-function">
                                            <a href="{{ route('admin.blog.edit', ['id'=>$blog->id]) }}">
                                                <div class="item edit">
                                                    <i class="icon-edit-3"></i>
                                                </div>
                                            </a>
                                            <form action="{{ route('admin.blog.delete', ['id'=>$blog->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button href="{{ route('admin.blog.delete', ['id'=>$blog->id]) }}"  type="submit" data-confirm-delete="true" class="item text-danger border-0 delete">
                                                    <i class="icon-trash-2" ></i>
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination mt-5">
                        {{ $blogs->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- content area end -->
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.delete').on('click', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
