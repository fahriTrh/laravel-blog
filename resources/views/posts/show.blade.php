@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5 mt-3">
        <div class="col-md-9">
            <h1 class="text-danger mb-3">{{$post->title}}</h1>
            <h5 class="text-muted mb-3">by: <a href="/posts?author={{ $post->user->user_name }}" class="text-decoration-none text-danger">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-danger">{{ $post->category->name }}</a></h5>
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid" style="max-height: 350px; overflow: hidden;">
            @else
                <img src="http://source.unsplash.com/1000x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
            @endif
            <article class="my-3 fs-5">
                {!! $post->article !!}
            </article>

            <a href="/posts" class="mt-4 text-danger fs-5 text-decoration-none">Back</a>
        </div>
    </div>
</div>
@endsection