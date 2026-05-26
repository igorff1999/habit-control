<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to home page!!!!!!!!</h1>

    <p>Olá, <strong>{{ $name }}</strong></p>

    <p>Seus hábitos são:</p>

        @foreach ($tasks as $tasks)
            <ul align="flex">
                <li align="center">
                    {{ $tasks }}
                </li>
            </ul>
        @endforeach
</body>
</html>
