@extends('dashboard.layouts.main')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2 text-danger">{{ auth()->user()->user_name }} Posts</h1>
    </div>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="table-responsive">
      @if($posts->count())
      <a href="/dashboard/posts/create" class="btn btn-danger mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td><a href="/dashboard/posts?category={{ $post->category->slug }}" class="text-decoration-none text-danger">{{ $post->category->name }}</a></td>
              <td>
                  <a href="/dashboard/posts/{{ $post->slug }}" class="text-decoration-none text-white badge bg-info">show</a>
                  <a href="/dashboard/posts/{{ $post->slug }}/edit" class="text-decoration-none text-white badge bg-warning">edit</a>
                  <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="border-0 badge bg-danger" onclick="return confirm('Delete?')">delete</button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $posts->links() }}
        <a href="{{ (request('search') || request('category')) ? '/dashboard/posts' : '/dashboard' }}" class="text-danger fs-5 text-decoration-none h-1">Back</a>
      @else
      <div class="d-flex flex-column">
        <h1 class="text-danger mx-auto mb-3">No Post!</h1>
        <a href="/dashboard/posts/create" class="btn btn-danger mb-3 mx-auto">Create New Post</a>
      </div>
      @endif
    </div>
</main>
@endsection