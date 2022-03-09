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
        <a href="../"><div class="logo">Resepin</div></a>
        <div class="nav-bar">
            <div class="nav-item">About</div>
            <div class="nav-item">
                <div class="button"><a href="./join/">Join</a></div>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="search">
        <div class="search-wrapper">
            <input type="search" class="search-bar" placeholder="Cari resep" >
            <img src={{ URL::asset('images/search-icon.png') }} alt="" class="search-icon">
        </div>
        </div>
        
        <div class="line"></div>

        <div class="resep-container">
            <div class="resep">
                <div class="img" id="gambar">
                    <img src="../assets/explore/dummy1.jpg" alt="" >

                </div>
                <a href="/resep/tambah/">Tambah Resep</a>
                @foreach ($resep as $r)
                    <p>{{ $r->recipe_name }}</p>
                    <p>{{ $r->id_user }}</p>
                    <img src="gambar/{{ $r->id }}/{{ $r->image }}" alt="">
                    <p>Cooking time: {{ $r->cooking_time }} minutes</p>
                    <a href="/resep/view/{{ $r->id }}">Lihat Selengkapnya</a>
                @endforeach

            </div>
            <div class="resep">as</div>
            <div class="resep">as</div>
            
            <div class="resep">as</div>
            <div class="resep">as</div>
            <div class="resep">as</div>
            
            <div class="resep">as</div>
            <div class="resep">as</div>
            <div class="resep">as</div>
            
            <div class="resep">as</div>
            <div class="resep">as</div>
            <div class="resep">as</div>

            
            <div class="resep">as</div>
            <div class="resep">as</div>
            <div class="resep">as</div>
            
            <div class="resep">as</div>
            <div class="resep">as</div>
            <div class="resep">as</div>

            
            <div class="resep">as</div>
            <div class="resep">as</div>
            <div class="resep">as</div>

            
            <div class="resep">as</div>
            <div class="resep">as</div>
            <div class="resep">as</div>
        </div>
    </div>

    <img src="../assets/background.png" class="background">
</body>
</html>
