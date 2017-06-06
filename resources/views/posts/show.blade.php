@extends('layouts/master')


@section('header')
    <h1 class="blog-title">{{ $post->title }}</h1>
@endsection

@section('content')
    {{ $post->body }}

    <hr>

    <div class="comments">
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}:&nbsp;
                    </strong>
                    {{ $comment->body }}
                </li>
            @endforeach
        </ul>
    </div>

    <hr>

    {{-- Add a comment --}}
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}

                <div class="form-group">
                    <textarea class="form-control" name="body" placeholder="Your comment here" rows="8" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>
            </form>

            @include('layouts/errors')
        </div>
    </div>
@endsection