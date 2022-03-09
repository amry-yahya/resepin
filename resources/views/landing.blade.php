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
        @if (is_null(Auth::id()))
            <div class="nav-bar">
                <div class="nav-item">About</div>
                <div class="nav-item">
                    <div class="button"><a href="./join">Join</a></div>
                </div>
            </div>
        @endif
    </header>

    <div class="content">
        <div class="tittle-text"><b>Temukan resep favoritmu</b> diantara ratusan resep lainnya</div>
        <img src={{ URL::asset('images/landing/woman.png') }} class="bg-illust" alt="">

        <div class="search">
            <form action="/landing/cari" method="GET">
                <div class="search-wrapper">
                    <input type="search" class="search-bar" name="cari" placeholder="Cari resep"
                        value="{{ old('cari') }}" autocomplete="off">
                    <button type="submit" class="search-button" value="CARI">
                        <img src={{ URL::asset('images/search-icon.png') }} class="search-icon">
                    </button>
                </div>
            </form>
        </div>


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
