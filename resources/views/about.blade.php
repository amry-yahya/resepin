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
            <div class=" text-center tittle">ABOUT US</div>
            <br><br>
            <div class="header-text">
                Resepin
            </div>
            <div class="text">
                <b>Resepin</b> adalah platform tempat kamu bisa berbagi resep, tutorial dan tips memasak dengan orang lain dari seluruh dunia.
                Dengan mengangkat tema open source, kamu dapat berkontribusi bersama dengan menambahkan resep, memberi rating, membuat blog dengan ribuan orang lainnya. 
                <br>
                Resepin hadir dengan ribuan resep yang mudah dipahami dan dapat diterapkan dengan mudah. Mulai dari aneka nasi, bakso, mie, seafood, minuman, roti dan masih banyak lagi.
                Konten pada setiap artikel sudah di review terlebih dahulu dan dikemas dengan menyenangkan, mudah dipahami dan mudah diterapkan.
                Harapan kami semua orang bisa memasak dengan cara yang mudah dan menyenangkan.
            </div>
            <br><br>
            <div class="header-text">
                Our Team
            </div>
            <div class="team">
                <div class="team-item">
                    <img src={{ URL::asset('images/about/guitar.png') }} class="">
                    <div class="text">
                        Ahmad Rolandi<br> Hernafahreza
                    </div>
                </div>
                
                <div class="team-item">
                    <img src={{ URL::asset('images/about/chopper.png') }} class="">
                    <div class="text">
                        Amry Yahya
                    </div>

                </div>
                
                <div class="team-item">
                    <img src={{ URL::asset('images/about/gudman.png') }} class="">
                    <div class="text">
                        Yosia Pangondian
                    </div>

                </div>
            </div>

        </div>

    </div>
    @for($i = 0; $i < 3; $i++)
        <br>
    @endfor

    <img src={{ URL::asset('images/background.png') }} class="background">
</body>
</html>
