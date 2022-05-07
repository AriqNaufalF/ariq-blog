@extends('layouts/main')

@section('container')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>By <a href="/blog/?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mx-auto">
                </div>
            @else
                <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mx-auto">
            @endif
            <article class="my-3 fs-5">
                {!! $post->body !!}
                <a href="/blog">Go back</a>
            </article>
        </div>
    </div>
@endsection