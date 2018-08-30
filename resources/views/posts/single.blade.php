@extends('layouts.master')

@section('header')

    <section class="header base-col">
        <div class="container pt-4 pb-2">
            <h1 class="display-2">{{ $post->title }}</h1>
            <p class="text-muted">Written <strong>{{ $post->created_at->diffForHumans() }}</strong> by
                <strong>{{ $post->user->name }}</strong>.</p>
            @if(count($post->tags))
                @foreach($post->tags as $tag)
                    <a href="/posts/tags/{{ $tag->name }}"> <span
                            class="badge badge-primary p-2 mr-2">{{ $tag->name }}</span></a>
                @endforeach
            @endif
        </div>
    </section>


@endsection


@section('content')

    <div class="container">

        <div class="row">
            <p>{{ $post->body }}</p>
        </div>

    </div>

    <hr>

    @if( $post->comments->count() <  1 )

        <h3 class="mb-3">Write the first comment</h3>

        <form method="post" action="/posts/{{ $post->id }}/comments">

            {{ csrf_field() }}

            <div class="form-group">
                <textarea class="form-control" name="body" id="body"></textarea>
                <button type="submit" class="btn btn-primary mt-3">Add your comment</button>
            </div>


        </form>

    @else

        <h3 class="mb-3">Comments</h3>

        <ul class="list-group">

            @foreach( $comments as $comment )

                <li class="list-group-item mb-2">
                    <p class="text-muted mb-0">Commented <strong>{{ $comment->created_at->DiffForHumans() }}</strong> by
                        <strong>{{ $comment->user->name }}</strong></p>
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

    @endif



@endsection

@section('sidebar')

    @include('posts.sidebar')

@endsection
