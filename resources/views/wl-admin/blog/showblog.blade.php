@extends('wl-admin.layouts.app')


@section('content')

<div class="container mt-4">
    @include('wl-admin.layouts.sessionmessage')
    <!-- Header: Manage Blogs title on left, buttons on right -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Manage Blogs</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.addblog', ['redirect' => 'showblog']) }}" class="btn btn-success">+ Add Blog</a>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>

    <!-- Filter/Search Row -->
<form method="GET" action="{{ route('admin.blogs') }}">
    <div class="row mb-4">
        <div class="col-md-8 d-flex align-items-center">
            <label class="form-label me-2 mb-0" style="min-width: 130px;">Search Page</label>
            <input type="text" name="search" class="form-control" placeholder="Enter blog title or keyword" value="{{ request('search') }}">
        </div>
        <div class="col-md-4 d-flex align-items-end gap-2">
            <button type="submit" class="btn btn-primary w-50">Search</button>
            <a href="{{ route('admin.blogs') }}" class="btn btn-secondary w-50">Reset</a>
        </div>
    </div>
</form>




    <!-- Blog Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>S.No</th>
                    <th>Date</th>
                    <th>image</th>
                    <th>Title</th>
                    <th>Blog URL</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($blogs->count() > 0)
                    @foreach ($blogs as $key => $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->created_at->format('d M Y') }}</td>
                            <td>
                                @if(!empty($blog->image))
                                <img src="{{ asset($blog->image) }}" width="80" style="border-radius: 6px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                                @else
                                <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{ $blog->main_headline }}</td>
                            <td><a href="{{ url($blog->category . '/' . $blog->blog_url) }}" target="_blank" style="color: #0d6efd;">{{ $blog->category . '/' . $blog->blog_url }}</a>
                            </td>

                            <td>{{ $blog->category }}</td>
                            <td>
                            <div class="d-flex gap-2 justify-content-center">
                            <a href="{{ route('admin.editblog', $blog->id) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.deleteblog', $blog->id) }}" method="POST" class="d-inline delete-form" data-title="{{ $blog->main_headline }}">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="redirect" value="{{ url()->current() }}">
                            <button type="button" class="btn btn-sm btn-outline-danger delete-btn">Delete</button>
                            </form>
                            <a href="{{ url($blog->category . '/' . $blog->blog_url) }}" target="_blank" class="btn btn-sm btn-outline-secondary text-decoration-underline">View Page</a>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center text-danger">No blogs available.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center mt-4">
    {{ $blogs->links() }}
</div>

</div>
@endsection

<style>
    .btn-sm {
    min-width: 90px;
    height: 32px;
    line-height: 1.5;
    font-size: 0.875rem;
}

</style>    

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                const form = this.closest("form");
                const blogTitle = form.getAttribute("data-title");

                Swal.fire({
                    title: `Are you sure to delete "${blogTitle}"?`,
                    text: "This action cannot be undone.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>