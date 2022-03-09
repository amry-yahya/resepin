<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src={{ URL::asset('js/script.js') }}></script>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <title>Resep Saya</title>
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
        <div class="container" style="padding:0.1rem;">
            <div class="header-text">
                Resep Saya
            </div>
            <a href="(tambah resep)">
                <div class="resep-button">Tambah Resep</div>
            </a>

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
                                    @for ($i = 0; $i < $r->rating; $i++)
                                        <img id="star" src={{ URL::asset('images\rating\star.png') }} alt="">
                                    @endfor
                                    @for ($i = 0; $i < 5 - $r->rating; $i++)
                                        <img id="star" src={{ URL::asset('images\rating\no-star.png') }} alt="">
                                    @endfor
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
    
                
             <img src={{ URL::asset('images/background.png') }} class="background">
        
    
            </div>
    

        </div>
    </div>
</body>

</html>
