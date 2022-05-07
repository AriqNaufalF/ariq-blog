@extends('dashboard.layouts.main')

@section('container')
<div class="row my-3">
    <div class="col-lg-8">
        <h2>{{ $post->title }}</h2>
        <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-short"></i> Back To All Posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are you sure?')" type="submit"><i class="bi bi-trash"></i> Delete</button>
          </form>
        @if ($post->image)
          <div style="max-height: 350px; overflow:hidden">
              <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mx-auto mt-3">
          </div>
        @else
            <img src="https://source.unsplash.com/random/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mx-auto mt-3">
        @endif
        <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>
    </div>
</div>
@endsection