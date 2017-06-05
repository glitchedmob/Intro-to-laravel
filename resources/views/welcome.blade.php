<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<h1>Hello There</h1>
<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
</body>
</html>