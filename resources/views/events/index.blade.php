<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

</head>
<body>
<h1>Events</h1>

<ul>

    @foreach($events as $event)

        <li><a href="/events/{{ $event->id }}">{{ $event->name }} located in {{ $event->location }}</a></li>

        @endforeach

</ul>

</body>
</html>

