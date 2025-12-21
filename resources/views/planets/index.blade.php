<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet index</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>

    <h1>List of planets</h1>
    <ul>

        @foreach ($planets as $planet)
            <li>
                <a href="/planets/{{ $planet->name }}">
                    {{ $planet->name }}
                </a>
            </li>
        @endforeach 
        
    </ul>

</body>
</html>