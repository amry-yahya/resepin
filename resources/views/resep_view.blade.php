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
    <a href="/explore">Back</a>

    <div class="resep-tittle">
        {{ $resep->recipe_name }}
    </div>
    <p></p>
    <p>{{ $resep->user_name }}</p>
    <p>{{ $resep->cooking_time }}</p>
    <p>{{ $resep->tag }}</p>
    <p style="white-space: pre-line">{{ $resep->description }}</p>
    <p>{{ $resep->rating }}</p>
    <img src="{{ URL::to('/') }}/gambar/{{ $resep->id }}/{{ $resep->image }}" alt="gambar tidak ada">
    <p style="white-space: pre-line">{{ $resep->ingredients }}</p>
    <p style="white-space: pre-line">{{ $resep->steps }}</p>
    @if ($resep->id_user===Auth::id())        
        <a href="/resep/edit/{{ $resep->id }}">Edit</a>
        <a href="/resep/hapus/{{ $resep->id }}">Hapus</a>
    @endif
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

        <img src={{ URL::asset('images/background.png') }} class="background">
    </form>
</body>

</html>
