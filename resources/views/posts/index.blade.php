@extends('layouts.main')
@section('container')
    <h1 class="text-danger mt-3">{{ $title }}</h1>
    <form action="/posts">
        @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if(request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search Something" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
    @if ($posts->count())   
        <div class="card my-4">
            @if($posts[0]->image)
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid" style="max-height: 350px; overflow: hidden;">
            @else
                <img src="http://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
            <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-danger">{{ $posts[0]->title }}</a></h2>
            <p class="card-text text-secondary">By: <a href="/posts?author={{ $posts[0]->user->user_name }}" class="text-decoration-none text-danger">{{ $posts[0]->user->user_name }}</a> in: <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-danger">{{ $posts[0]->category->name }}</a><small class="text-muted"> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-danger">Read More</a>
            </div>
        </div>
    <div class="container">
        <div class="row">
            @foreach($posts->skip(1) as $post)
                <div class="col-md-4 mb-4">
                   <div class="card overflow-hidden">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, .7)"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="max-height: 350px; max-width: 500px; overflow: hidden;">
                        @else
                            <img src="http://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-danger">{{ $post->title }}</a></h5>
                            <p class="card-text text-secondary">By: <a href="/posts?author={{ $post->user->user_name }}" class="text-decoration-none text-danger">{{ $post->user->user_name }}</a> <small class="text-muted"> {{ $post->created_at->diffForHumans() }}</small></p>
                            <p class="card-text"><small>{{ $post->excerpt }}</small></p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $posts->links() }}
    </div>
    @else
        <h1 class="text-center text-danger">No Result Found :(</h1>
    @endif
@endsection