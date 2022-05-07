@extends('layouts/main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin">

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session()->has('logginFail'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('logginFail') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            <label for="email">Email address</label>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </form>
        <small class="text-center d-block mt-4">Don't have an account? <a href="/register">Register</a></small>
    </main>
  </div>
</div>
@endsection