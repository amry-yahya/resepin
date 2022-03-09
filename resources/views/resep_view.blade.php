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
        </a>@if (is_null(Auth::id()))
        <div class="nav-bar">
            <div class="nav-item">About</div>
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
        <div class="container">
            
            <div class="resep-view-button-wrapper">
                @if ($resep->id_user===Auth::id())        
                    <a href="/resep/edit/{{ $resep->id }}">
                    <div class="button resep-view-button">Edit</div>
                    </a>
                    <a href="/resep/hapus/{{ $resep->id }}">
                    <div class="button resep-view-button">Hapus</div>
                    </a>
                @endif

            </div>

            <div class="resep-heading">
                <div class="resep-heading-item">
                    <div class="resep-tittle">
                        ayam bakar pak bobi
                        {{ $resep->recipe_name }}
                    </div>
                    <div class="author">
                        Anonymous
                        {{ $resep->id_user }}
                    </div><br>
                    <div class="tag">
                        {{ $resep->tag }}
                    </div>
                </div>
                <div class="resep-heading-item">
                    <div class="view-resep-img-container">
                        <img src="{{ URL::to('/') }}/gambar/{{ $resep->id }}/{{ $resep->image }}" class="view-resep-img">
                    </div>
                    
                    <div class="time">
                        <img src={{ URL::asset('images\explore\back-in-time.png') }} alt="">
                        
                        {{ $resep->cooking_time }} menit
                    </div>

                </div>

            </div>

            <div class="resep-desc">
                <div class="header-text">
                    Deskripsi
                </div>
                <div class="text">
                    <div style="white-space: pre-line">{{ $resep->description }}</div>
                </div>
            </div>
            <div class="resep-desc">
                <div class="header-text">
                    Bahan
                </div>
                <div class="text">
                    <div style="white-space: pre-line">{{ $resep->ingredients }}</div>
                </div>
            </div>
            
            <div class="resep-desc">
                <div class="header-text">
                    Langkah
                </div>
                <div class="text">
                    <div style="white-space: pre-line">{{ $resep->steps }}</div>
                </div>
            </div>

            <div class="resep-desc">
                <div class="header-text">
                    Ulasan <span class="rating"> ({{ $resep->rating }})</span> 
                    @for ($i = 0; $i < $resep->rating; $i++)
                        <img id="star" src={{ URL::asset('images\rating\star.png') }} alt="">
                    @endfor
                    @for ($i = 0; $i < 5 - $resep->rating; $i++)
                        <img id="star" src={{ URL::asset('images\rating\no-star.png') }} alt="">
                    @endfor 
                </div>
            </div>

            <br>
            <br>
        
        
            @foreach ($komentar as $k)
                @if ($k->id_recipe === $resep->id)
                    <p>{{ $k->user_name }}</p>
                    <p>{{ $k->rating }}</p>
                    <p>{{ $k->komen }}</p>
                @endif
            @endforeach
        
            <form method="post" action="/komentar/store">
                {{ csrf_field() }}
                <div class="form-group" hidden>
                    <input type="number" name="id_recipe" class="form-control" value="{{ $resep->id }}">
                    @if ($errors->has('id_recipe'))
                        <div class="text-danger">
                            {{ $errors->first('id_recipe') }}
                        </div>
                    @endif
                </div>
                <div class="form-group" hidden>
                    <input type="number" name="id_user" class="form-control" value="{{ Auth::id() }}">
                    @if ($errors->has('id_user'))
                        <div class="text-danger">
                            {{ $errors->first('id_user') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="number" name="rating" class="form-control" placeholder="rating">
                    @if ($errors->has('rating'))
                        <div class="text-danger">
                            {{ $errors->first('rating') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <textarea name="komen" id="" cols="30" rows="10" placeholder="beri komenter..."></textarea>
                    @if ($errors->has('komen'))
                        <div class="text-danger">
                            {{ $errors->first('komen') }}
                        </div>
                    @endif
                </div>
        
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

        </div>
    </div>
    <a href="/explore">Back</a>


        <img src={{ URL::asset('images/background.png') }} class="background">
    </form>
</body>

</html>
