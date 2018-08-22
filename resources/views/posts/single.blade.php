@extends('layouts.master')

@section('header')

    <section class="header base-col">
        <div class="container pt-4 pb-2">
            <h1 class="display-2">{{ $post->title }}</h1>
            <p class="text-muted">{{ $post->created_at->diffForHumans() }}</p>
        </div>
    </section>


@endsection


@section('content')

    <div class="container">

        <div class="row mt-4 mb-4">
            <p>{{ $post->body }}</p>
        </div>

    </div>

    <hr>

    <h3 class="mb-4">Comments</h3>

    <ul class="list-group"></ul>

    @foreach($comments as $comment)

        <li class="list-group-item mb-4">
            <small>{{ $comment->created_at->diffForHumans() }}</small>
            <p class="mb-0">{{ $comment->body }}</p>
        </li>


    @endforeach

    <hr>

    <h3 class="mb-4">Something to say?</h3>

    <form method="post" action="/posts/{{ $post->id }}/comments">

        {{ csrf_field() }}

        <div class="form-group">
            <textarea class="form-control" id="body" name="body" placeholder="Add a comment"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Join the conversation</button>
        </div>

    </form>

    @include('layouts.errors')

@endsection

@section('sidebar')

    @include('posts.sidebar')

@endsection
