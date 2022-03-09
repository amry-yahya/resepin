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
        <div class="container">
            <div class="header text-center">ABOUT US</div>
            <br><br>
            <div class="header">
                Resepin
            </div>
            <div class="text">
                <b>Resepin</b> adalah sebuah aplikasi berbasis web
            </div>
            <br><br>
            <div class="header">
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

    <img src={{ URL::asset('images/background.png') }} class="background">
</body>
</html>
