<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Questi sono i nostri film</h1>
    @forelse ($movies as $movie) 
        @include('includes.card', compact('movie'))
    @empty
        <div>Non ci sono fil al momento, sorry :(</div>
    @endforelse
</body>
</html>