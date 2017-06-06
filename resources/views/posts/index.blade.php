@extends('layouts/master')

@section('header')

    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">An example blog template built with Bootstrap.</p>

@endsection

@section('content')

    @foreach($posts as $post)
        @include('posts/post')
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>


@endsection