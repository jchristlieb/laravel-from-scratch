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

    <h3 class="mb-3w">Comments</h3>

    <ul class="list-group">

        @foreach( $comments as $comment )

            <li class="list-group-item mb-2">
                <p class="text-muted mb-0">{{ $comment->created_at->DiffForHumans() }}</p>
                <p class="mb-0">{{ $comment->body }}</p>
            </li>

        @endforeach

    </ul>

    <hr>

    <h3 class="mb-3">Join the conversation</h3>

    <form method="post" action="/posts/{{ $post->id }}/comments">

        {{ csrf_field() }}

        <div class="form-group">
            <textarea class="form-control" name="body" id="body"></textarea>
            <button type="submit" class="btn btn-primary mt-3">Add your comment</button>
        </div>


    </form>


@endsection

@section('sidebar')

    @include('posts.sidebar')

@endsection
