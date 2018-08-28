@extends('layouts.master')

@section('header')

    <div class="container">
        <h1 class="display-2">Login</h1>
        <p class="text-muted">Login to your account and start to write posts. If you do not have an account yet,
            <a href="/register">register</a> for free.</p>
    </div>


@endsection

@section('content')

    <form method="post" action="/login">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">E-Mail</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>

    </form>

    @include('layouts.errors')

@endsection
