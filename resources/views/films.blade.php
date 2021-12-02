<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Film page!</title>
</head>
<body>
    <h1>Films</h1>
    @foreach($films as $film)
    <h2>{{$film->name}}</h2>
    <h3>{{$film->rating}} stars</h3>
    @endforeach
</body>
</html>
