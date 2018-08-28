<!doctype html>
<html>
<head>
    @include('snippets.head')
</head>
<body>

<header>
    @include('snippets.nav')
</header>

<section class="intro base-col__darker">
    @yield('header')
</section>

<section class="main base-col__darker">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-12 mt-4">
                @yield('content')
            </div>
            <div class="col-md-4 col-12 mt-4">
                @include('posts.sidebar')
            </div>
        </div>
    </div>
</section>

<footer class="base-col pt-4 pb-4">
    @include('snippets.footer')
</footer>

</body>
</html>
