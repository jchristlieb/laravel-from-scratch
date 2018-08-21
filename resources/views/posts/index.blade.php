@extends('layouts.master')

@section('header')

    <section class="jumbotron text-center base-col">
        <div class="container">
            <h1 class="jumbotron-heading">A simple blog project</h1>
            <p class="lead text-muted">Build with Laravel by Jan Christlieb and inspired by Jeffrey Way's Laravel from
                Scratch course.</p>
            <p>
                <a href="/blog/create" class="btn btn-primary my-2">Create blog post</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
        </div>
    </section>

@endsection
@section('content')

    <div class="album base-col__darker">
        <div class="row">

            @foreach($posts as $post)

                <div class="col-md-6">
                    <div class="card mb-4 box-shadow">
                        <a href="/blog/{{ $post->id }}">
                            <img class="card-img-top"
                                 src="https://placeimg.com/640/480/any"
                                 alt="Card image cap">
                            <div class="card-body">
                                <h3>{{ $post->headline }}</h3>
                                <p class="card-text">{{ str_limit($post->body, 50, '...') }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit
                                        </button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection

