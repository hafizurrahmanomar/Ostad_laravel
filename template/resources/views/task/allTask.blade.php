<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title>Hello all Blade</title>
</head>

<body>
    <h1>This is all Task Blade File</h1>
    <h1>My Name is {{ $name }}</h1>
    <h1>My Age is {{ $age }}</h1>

    <h1>My Tasks show with foreach loop</h1>
    @foreach ($tasks as $task)
        <div>
            <h1>{{ $task['id'] }}-{{ $task['title'] }}</h1>
            <p>{{ $task['description'] }}</p>
            <p>{{ $task['status'] }}</p>
            <p>{{ $task['priority'] }}</p>
        </div>
    @endforeach
    @include('task.partials.footer')
</body>

</html>

