@extends('layouts/master')

@section('header')
    <h1 class="blog-title">Sign in</h1>
@endsection

@section('content')
    <form method="POST" action="/login">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email Address: </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection