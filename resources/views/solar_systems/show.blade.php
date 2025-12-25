<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $solar_system->name }}</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>

    <h1>{{ $solar_system->name }}</h1>

    <h3>Planets in the solar system:</h3>

    <ul>
        @foreach ($solar_system->planets as $planet)
        <li>
            {{ $planet->name }}
        </li>
        @endforeach
    </ul>

    <br>

    <a href="{{ route('solarsystems.index')}}">Back to the list</a>
    
</body>
</html>