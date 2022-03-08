<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/resep">Back</a>
    <p>{{ $resep->recipe_name }}</p>
    <p>{{ $resep->id_user }}</p>
    <p>{{ $resep->cooking_time }}</p>
    <p>{{ $resep->tag }}</p>
    <p>{{ $resep->image }}</p>
    <p>{{ $resep->description }}</p>
    <p>{{ $resep->rating }}</p>
    <p>{{ $resep->ingredients }}</p>
    <p>{{ $resep->steps }}</p>
    <a href="/resep/edit/{{ $resep->id }}">Edit</a>
    <a href="/resep/hapus/{{ $resep->id }}">Hapus</a>

</body>

</html>
