<!doctype html>
<head>
    @include('snippets.head')
</head>
<body>

<header>
    @include('snippets.nav')
</header>

<section class="intro base-col">
    @yield('header')
</section>

<section class="main base-col__darker pt-4 pb-4">
        @yield('content')
</section>

<footer class="base-col pt-4 pb-4">
    @include('snippets.footer')
</footer>
</body>
</html>
