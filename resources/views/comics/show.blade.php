<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $comic->title }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <div class="row g-4">
            <div class="col-8">
                <h2>{{ $comic->title }}</h2>
                <h5>{{ $comic->series }}</h5>
                <p>{{ $comic->description }}</p>
                <p>TYPE: {{ $comic->type }}</p>
                <h4>{{ $comic->price }}£</h4>
                <p>SALE DATE: {{ $comic->sale_date }}</p>
            </div>
        </div>
    </div>
</body>
</html>
