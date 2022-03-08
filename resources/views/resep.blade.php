<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="/resep/tambah/">Tambah Resep</a>
    @foreach ($resep as $r)
        <p>{{ $r->recipe_name }}</p>
        <p>{{ $r->id_user }}</p>
        <img src="gambar/{{ $r->image }}" alt="">
        <p>Cooking time: {{ $r->cooking_time }} minutes</p>
        <a href="/resep/view/{{ $r->id }}">Lihat Selengkapnya</a>
    @endforeach
</body>

</html>
