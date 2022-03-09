<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src={{ URL::asset('js/script.js') }}></script>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <title>Menu</title>
</head>
<body>
    <header class="">
        <a href="../" class="top"><div class="logo">Resepin</div></a>
        <div class="nav-bar light top">
            Sudah punya akun?
            <div class="nav-item ">
                <div class="button" id="sign-in">Sign In</div>
            </div>
        </div>
        <div class="nav-bar light passive">
            Belum punya akun?
            <div class="nav-item">
                <div class="button" id="register">Register</div>
            </div>
        </div>
    </header>
    <div class="content">
        <img class="main-bg" src={{ URL::asset('images/main/main-bg.png') }} alt="">
    </div>

    <div id="overlay" class="active"></div>
    
    <img src={{ URL::asset('images/background.png') }}  class="background">
</body>
</html>

<div class="modal active" id="modalRegister">
    <div class="modal-body">
        <div class="modal-grid">
            Telusuri ratusan resep dan bergabung dengan komunitas kuliner bersama Resepin

            <form action="register.php" method="post">
                <input type="text" id="username" name="username" placeholder="Nama Pengguna">
                <input type="email" id="email" name="email" placeholder="E-mail">
                
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" value="Buat Akun">
            </form>

        </div>
        <div class="modal-grid">
            <img class="register-img" src={{ URL::asset('images\main\cook-illust.png') }}>

        </div>

    </div>
</div>

<div class="modal" id="modalSignIn">
    <div class="modal-body">
        <div class="modal-grid">
            <form action="/signin.php" method="post">
                <div class="tittle">Selamat Datang</div>
                <input type="email" id="email" name="email" placeholder="E-mail">
                
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="submit" value="Sign In">
                
                    <div class="text-center small" id="forgot-password"> Lupa Password? Klik <a href="" class="link">disini</a></div>
            </form>

        </div>
    </div>
</div>

<div class="modal" id="modalForgotPassword">
    <div class="modal-body">
        <div class="modal-grid">
            <form action="/forgotpassword.php" method="post">
                <div class="tittle">Lupa Password</div>
                <input type="email" id="email" name="email" placeholder="E-mail">
                
                <input type="submit" value="Reset">
            </form>

        </div>
    </div>
</div>