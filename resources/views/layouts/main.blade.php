<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ariq Web | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="/css/style.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
          <a class="navbar-brand" href="/">Ariq Web</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link @if($active == 'home')active @endif" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if($active == 'categories')active @endif" aria-current="page" href="/categories">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if($active == 'blog')active @endif" href="/blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if($active == 'about')active @endif" href="/about">About</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name }}
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
              @else
                <li class="nav-item">
                  <a class="nav-link @if($active == 'login')active @endif" href="/login">login <i class="bi bi-box-arrow-in-right"></i></a>
                </li>
              @endauth  
            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-3">
        @yield('container')
      </div>
</body>
</html>