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
                <div class="nav-item"><a href="{{ URL::to('/') }}/about">About</a></div>
                <div class="nav-item">
                    <div class="button"><a href="{{ URL::to('/') }}/register">Join</a></div>
                </div>
            </div>
        @else
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="nav-bar">
                    <div class="nav-item">
                        <x-jet-responsive-nav-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();" class="button">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </div>

                </div>
            </form>
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
            <div class="category-item" type="dessert"><a href="kategori/dessert">dessert</a></div>
            <div class="category-item" type="lunch"><a href="kategori/lunch">lunch</a></div>
            <div class="category-item" type="dinner"><a href="kategori/dinner">dinner</a></div>
            <div class="category-item" type="breakfast"><a href="kategori/breakfast">breakfast</a></div>
            <div class="category-item" type="beverage"><a href="kategori/beverage">beverage</a></div>
        </div>

        <div class="button explore">
            <a href="{{ URL::to('/') }}/explore">Explore More</a>
        </div>

    </div>

    <img src={{ URL::asset('images/background.png') }} class="background">

</body>

</html>
