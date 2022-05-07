@extends('dashboard.layouts.main')

@section('container')    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show col-lg-9" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive col-lg-9">
  <a href="/dashboard/posts/create" class="btn btn-primary">Create new post</a>
    <table class="table table-striped table-sm mt-2">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($posts as $post)       
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="bedge bg-info link-light p-1"><i class="bi bi-eye-fill fs-6"></i></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="bedge bg-warning link-light p-1"><i class="bi bi-pencil-square fs-6"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="bedge bg-danger text-light border-0" onclick="return confirm('Are you sure?')" type="submit"><i class="bi bi-trash fs-6"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection