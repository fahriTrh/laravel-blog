@extends('dashboard.layouts.main')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2 text-danger">{{ auth()->user()->user_name }} Categories</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="table-responsive">
      @if($categories->count())
      <a href="/dashboard/categories/create" class="btn btn-danger mb-3">Create New Category</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                  <a href="/dashboard/categories/{{ $category->slug }}/edit" class="text-decoration-none text-white badge bg-warning">edit</a>
                  <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="border-0 badge bg-danger" onclick="return confirm('Delete?')">delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $categories->links() }}
      @else
      <div class="d-flex flex-column">
        <h1 class="text-danger mx-auto mb-3">No Post!</h1>
        <a href="/dashboard/posts/create" class="btn btn-danger mb-3 mx-auto">Create New Post</a>
      </div>
      @endif
      <a href="/dashboard" class="text-danger text-decoration-none fs-5">Back</a>
    </div>
</main>
@endsection