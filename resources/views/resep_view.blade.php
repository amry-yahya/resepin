<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/explore">Back</a>
    <p>{{ $resep->recipe_name }}</p>
    <p>{{ $resep->id_user }}</p>
    <p>{{ $resep->cooking_time }}</p>
    <p>{{ $resep->tag }}</p>
    <p style="white-space: pre-line">{{ $resep->description }}</p>
    <p>{{ $resep->rating }}</p>
    <img src="{{ URL::to('/') }}/gambar/{{ $resep->id }}/{{ $resep->image }}" alt="gambar tidak ada">
    <p style="white-space: pre-line">{{ $resep->ingredients }}</p>
    <p style="white-space: pre-line">{{ $resep->steps }}</p>
    <a href="/resep/edit/{{ $resep->id }}">Edit</a>
    <a href="/resep/hapus/{{ $resep->id }}">Hapus</a>
    
</body>

</html>
