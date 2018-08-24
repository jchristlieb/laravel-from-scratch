@extends('layouts.master')

@section('header')

    <section class="jumbotron text-center base-col">
        <div class="container">
            <h1 class="jumbotron-heading">A simple blog project</h1>
            <p class="lead text-muted">Build with Laravel by Jan Christlieb and inspired by Jeffrey Way's Laravel from
                Scratch course.</p>
            <p>
                <a href="/register" class="btn btn-primary my-2">Register</a>
                <a href="/login" class="btn btn-secondary my-2">Login</a>
            </p>
        </div>
    </section>

@endsection
@section('content')

    <div class="album base-col__darker">
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
                                <h3>{{ $post->title }}</h3>
                                <p class="card-text">{{ str_limit($post->body, 50, '...') }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit
                                        </button>
                                    </div>
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection

