<!DOCTYPE html>
<html>
<head>

</head>
<body>
<h1>My morning routine</h1>
<ul>
    @foreach ($tasks as $task)
        <li>{{ $task->body }}</li>
        @endforeach
</ul>

</body>
</html>



