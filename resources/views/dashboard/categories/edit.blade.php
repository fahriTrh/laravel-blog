@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-danger">Edit Post</h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/categories/{{ $category->slug }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $category->name) }}" id="name" name="name" required>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $category->slug) }}" id="slug" name="slug" required>
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <button type="submit" class="btn btn-danger mb-5">Update Category</button>
        </form>
    </div>
</main>
<script>
    const name = document.querySelector('#name')
    const slug = document.querySelector('#slug')

    name.addEventListener('change', function()
    {
        fetch('/dashboard/categories/checkSlug?name=' + name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    })
    
    document.addEventListener('trix-file-accept', function(e)
    {
        e.preventDefault()
    })
</script>
@endsection