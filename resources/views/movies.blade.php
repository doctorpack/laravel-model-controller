<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($movies as $movie)
        <div>
            <div>Titolo: {{ $movie->title }}</div>
            <div>Original Title: {{ $movie->original_title }}</div>
            <div>Date: {{ $movie->date }}</div>
            <div>Vote: {{ $movie->vote }}</div>
            <br>
        </div>
    @endforeach
</body>
</html>