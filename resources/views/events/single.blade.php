<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

</head>
<body>
<h1>{{ $event->name }}</h1>
<ul>
    <li>Location: {{ $event->location }}</li>
</ul>

<button class="btn btn-link"><a href="/events">Show all</a></button>


</body>
</html>
