<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src={{ URL::asset('js/script.js') }}></script>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <title>Explore</title>
</head>

<body>
    <header>
        <a href="./">
            <div class="logo">Resepin</div>
        </a>
        @if (is_null(Auth::id()))
            <div class="nav-bar">
                <a href="{{ URL::to('/') }}/about">
                    <div class="nav-item dark">About</div>
                </a>
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
        <div class="search">
            <div class="search-wrapper">
                <input type="search" class="search-bar" placeholder="Cari resep">
                <img src={{ URL::asset('images/search-icon.png') }} alt="" class="search-icon">
            </div>
        </div>

        <div class="line"></div>

        <div class="resep-container">
            @foreach ($resep as $r)
                <a href="/resep/view/{{ $r->id }}">
                    <div class="resep dark">
                        <div class="img" id="gambar">
                            <img src="{{ URL::to('/') }}/gambar/{{ $r->id }}/{{ $r->image }}" alt="">
                        </div>

                        <div class="desc">
                            <div class="desc-col">
                                <div class="rating">
                                    @if ($r->jumlah_rater== 0)
                                        <p>Belum dirating</p>
                                    @else
                                        @for ($i = 0; $i < ($r->rating / $r->jumlah_rater); $i++)
                                            <img id="star" src={{ URL::asset('images\rating\star.png') }} alt="">
                                        @endfor
                                        @for ($i = 0; $i < 5 - ($r->rating / $r->jumlah_rater); $i++)
                                            <img id="star" src={{ URL::asset('images\rating\no-star.png') }} alt="">
                                        @endfor
                                    @endif

                                </div>
                                <div class="time">
                                    <img src={{ URL::asset('images\explore\back-in-time.png') }} alt="">

                                    {{ $r->cooking_time }} menit
                                </div>
                            </div>
                            <div class="desc-col">
                                <div class="nama ">
                                    {{ $r->recipe_name }}
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <img src={{ URL::asset('images/background.png') }} class="background">
    
    @if (!is_null(Auth::id()))
        <a href="{{ URL::to('/') }}/resep_saya">
            <div class="resep-button bg-dark">
                <img src={{ URL::asset('images/explore/recipe-book.png') }} alt="">
            </div>
        </a>
    @endif
</body>

</html>
