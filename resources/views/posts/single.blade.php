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

@endsection

@section('sidebar')

    @include('posts.sidebar')

@endsection
