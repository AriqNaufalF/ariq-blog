@extends('layouts/main')


@section('container')
    <h1>Halaman About</h1>
    @if (auth()->user())
        <h3>Halo, Saya {{ auth()->user()->name }}</h3>
        <h3>{{ auth()->user()->email }}</h3>
    @else
        <h5>This website was build for learning laravel framework</h5>
    @endif
@endsection