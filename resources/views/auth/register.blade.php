@extends('layouts.master-fullscreen')

@section('header')

    <div class="container pt-4 pb-4">
        <h1 class="display-2">Register</h1>
        <p class="text-muted">As a registered user you can publish articles and write comments.</p>
    </div>




@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <form method="post" action="/register">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <label for="ename">E-Mail</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm your password</label>
                        <input class="form-control" type="password" name="password_confirmation"
                               id="password_confirmation">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>

                </form>

                @include('layouts.errors')

            </div>
        </div>
    </div>

@endsection
