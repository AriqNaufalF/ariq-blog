@extends('layouts/main')

@section('container')
    <h1 class="mb-4">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4">
                <a href="/blog?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/random/640x354?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center">
                        <h5 class="card-title flex-fill text-center py-4 fs-3" style="background-color: rgba(0, 0, 0, 0.6); border-radius: 10px">{{ $category->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection