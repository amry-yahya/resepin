<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src={{ URL::asset('js/script.js') }}></script>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <title>Landing</title>
</head>

<body>
    <header>
        <a href="./">
            <div class="logo">Resepin</div>
        </a>
        <div class="nav-bar">
            <div class="nav-item">About</div>
            <div class="nav-item">
                <div class="button"><a href="./join">Join</a></div>
            </div>
        </div>
    </header>

    <div class="content">
        <div class="tittle-text"><b>Temukan resep favoritmu</b> diantara ratusan resep lainnya</div>
        <img src={{ URL::asset('images/landing/woman.png') }} class="bg-illust" alt="">

        <div class="search">
            <div class="search-wrapper">
                <form action="/landing/cari" method="GET">
                    <input type="text" name="cari" placeholder="Cari resep .." value="{{ old('cari') }}">
                    <input type="submit" value="CARI">
                </form>
            </div>
        </div>
        <h1>Hasil Pencarian</h1>
        @foreach ($resep as $r)
            <p>{{ $r->recipe_name }}</p>
            <p>{{ $r->id_user }}</p>
            <img src="gambar/{{ $r->id }}/{{ $r->image }}" alt="">
            <p>Cooking time: {{ $r->cooking_time }} minutes</p>
            <a href="/resep/view/{{ $r->id }}">Lihat Selengkapnya</a>
        @endforeach

        <div class="category">
            <div class="category-item" type="dessert">Dessert</div>
            <div class="category-item" type="lunch">Lunch</div>
            <div class="category-item" type="dinner">Dinner</div>
            <div class="category-item" type="breakfast">Breakfast</div>
            <div class="category-item" type="beverage">Beverage</div>
        </div>

        <div class="button explore">
            <a href="{{ URL::to('/') }}/explore">Explore More</a>

        </div>

    </div>

    <img src={{ URL::asset('images/background.png') }} class="background">

</body>

</html>
