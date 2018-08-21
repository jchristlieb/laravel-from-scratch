<!doctype html>
<html>
<head>
    @include('snippets.head')
</head>
<body>
@include('snippets.nav')
@yield('header')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-12">
            @yield('content')
        </div>
        <div class="col-md-4 col-12">
            @include('posts.sidebar')
        </div>
    </div>
</div>

@include('snippets.footer')
</body>
</html>
