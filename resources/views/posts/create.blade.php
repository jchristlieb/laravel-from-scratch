@extends('layouts.master')

@section('header')
    <section class="header base-col">
        <div class="container">
            <h1 class="display-4 pt-4 pb-4">Create a new blog post</h1>
        </div>
    </section>

@endsection

@section('content')

    <div class="container pt-4 pb-4">
        <form method="post" action="/posts">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit your article</button>

        </form>

        @include('layouts.errors')

    </div>

@endsection
