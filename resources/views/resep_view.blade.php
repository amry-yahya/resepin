<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script defer src={{ URL::asset('js/script.js') }}></script>
        <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
        <title>{{ $resep->recipe_name }}</title>
    </head>

<body>
    
    <header>
        <a href="{{ URL::to('/') }}/">
            <div class="logo">Resepin</div>
        </a>
        @if (is_null(Auth::id()))
            <div class="nav-bar">
                <a href="./about">
                    <div class="nav-item">About</div>
                </a>
                <div class="nav-item">
                    <div class="button"><a href="./join">Join</a></div>
                </div>
            </div>
        @endif
    </header>

    <div class="content">
        <div class="container">
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

        </div>

    </div>

    
    <img src={{ URL::asset('images/background.png') }} class="background">
</body>

</html>
