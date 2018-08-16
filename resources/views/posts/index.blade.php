@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row mb-2">

            @foreach($posts as $post)

                <div class="col-md-6">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Category</strong>
                            <h3 class="mb-2">
                                <a class="text-dark" href="/posts/{{ $post->id }}">{{ $post->headline }}</a>
                            </h3>
                            <p class="card-text mb-2">{{ str_limit($post->body, 20, '...') }}</p>
                            <a href="/posts/{{$post->id}}">Continue reading</a>
                        </div>
                        <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                             alt="Card image cap">
                    </div>
                </div>

            @endforeach

        </div>
    </div>

@endsection
