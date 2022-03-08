<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
            @foreach ($resep as $r)
                <p>{{ $r->recipe_name }}</p>
                <p>{{ $r->id_user }}</p>
                <p>{{ $r->cooking_time }}</p>
                <p>{{ $r->tag }}</p>
                <p>{{ $r->description }}</p>
                <p>{{ $r->rating }}</p>
                <p>{{ $r->ingredients }}</p>
                <p>{{ $r->steps }}</p>
            @endforeach
</body>

</html>
