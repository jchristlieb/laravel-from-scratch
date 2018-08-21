@extends('layouts.master')

@section('header')

    <div class="container">
        <h1 class="display-2 pt-4 pb-4">{{ $post->headline }}</h1>
    </div>


@endsection


@section('content')

    <div class="container">

        <div class="row">
            <p>{{ $post->body }}</p>
        </div>

    </div>

@endsection

@section('sidebar')

    @include('blog.sidebar')

@endsection
