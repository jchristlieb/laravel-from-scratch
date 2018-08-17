@extends('layouts.master')

@section('content')

    <div class="container">

        <h1 class="display-2 pt-4 pb-4">{{ $post->headline }}</h1>
        <p>{{ $post->body }}</p>

    </div>

@endsection
