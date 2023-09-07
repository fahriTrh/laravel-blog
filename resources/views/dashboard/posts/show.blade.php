@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5 mt-3">
        <div class="col-md-8 offset-md-1">
            <h1 class="text-danger mb-3">{{$post->title}}</h1>
            <a href="/dashboard/posts" class="btn btn-info text-white">All Posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning text-white">Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('delete?')">Delete</button> 
            </form>
            @if($post->image)
                <p class="my-2 text-danger fs-5">{{ $post->category->name }}</p>
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="max-height: 350px; overflow: hidden;">
            @else
                <img src="http://source.unsplash.com/1000x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
                <p class="my-2 text-danger fs-5">{{ $post->category->name }}</p>
            @endif
            <article class="my-3 fs-5">
                {!! $post->article !!}
            </article>

            <a href="/dashboard/posts" class="mt-4 text-danger fs-5 text-decoration-none">Back</a>
        </div>
    </div>
</div>
@endsection