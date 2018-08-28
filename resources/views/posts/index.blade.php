@extends('layouts.master')

@section('header')

    <section class="header base-col">
        <div class="container">
            <blockquote class="blockquote text-center p-4">
                <h1 class="display-2">Never stop learning, testing and trying.</h1>
                <footer class="blockquote-footer">Ben Hardy <cite title="Source Title">on Medium.com</cite></footer>
            </blockquote>
        </div>
    </section>

@endsection
@section('content')

    <div class="album">
        <div class="row">


            @foreach($posts as $post)

                <?php
                $raw = ['animals', 'architecture', 'nature', 'people', 'tech'];
                $image = array_rand($raw);

                ?>
                <div class="col-md-6">
                    <div class="card mb-4 box-shadow">
                        <a href="/posts/{{ $post->id }}">
                            <img class="card-img-top"
                                 src="https://placeimg.com/640/480/{{ $image }}"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h3 class="m-0">{{ $post->title }}</h3>
                                <small class="text-muted">By {{ $post->user->name }}
                                    written {{ $post->created_at->diffForHumans() }}</small>
                                <p class="card-text">{{ str_limit($post->body, 50, '...') }}</p>
                            </div>
                            <div class="card-footer text-muted">
                                @if( $post->comments->count() < 1)
                                    <small>Write the first comment</small>
                                @elseif( $post->comments->count() < 2 )
                                    <small>{{ $post->comments->count() }} comment written</small>
                                @else
                                    <small>{{ $post->comments->count() }} comments written</small>
                                    @endif
                            </div>
                        </a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection

