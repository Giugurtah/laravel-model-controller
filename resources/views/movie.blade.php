<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/">
        <h1>HOME</h1>
    </a>
    <h1>Il film cercato è:</h1>
    @include('includes.card', compact('movie'))
</body>
</html>