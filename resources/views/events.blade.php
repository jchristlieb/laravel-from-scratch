<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

</head>
<body>
<h1>Events</h1>

<ul>

    @foreach($events as $event)

        <li>{{ $event->name }} located in {{ $event->location }}</li>

        @endforeach

</ul>

</body>
</html>

