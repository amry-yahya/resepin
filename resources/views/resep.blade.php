<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
            @foreach ($resep as $r)
                <p>{{ $r->recipe_name }}</p>
                <p>{{ $r->id_user }}</p>
                <p>{{ $r->cooking_time }}</p>
                <p>{{ $r->tag }}</p>
                <p>{{ $r->description }}</p>
                <p>{{ $r->rating }}</p>
                <p>{{ $r->ingredients }}</p>
                <p>{{ $r->steps }}</p>
            @endforeach

            <form method="post" action="/pegawai/store">
 
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
                    @if($errors->has('recipe_name'))
                        <div class="text-danger">
                            {{ $errors->first('recipe_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="number" name="cooking_time" class="form-control" placeholder="waktu memasak">
                    @if($errors->has('cooking_time'))
                        <div class="text-danger">
                            {{ $errors->first('cooking_time')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="id_user" class="form-control" placeholder="nama user">
                    @if($errors->has('id_user'))
                        <div class="text-danger">
                            {{ $errors->first('id_user')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
                    @if($errors->has('recipe_name'))
                        <div class="text-danger">
                            {{ $errors->first('recipe_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
                    @if($errors->has('recipe_name'))
                        <div class="text-danger">
                            {{ $errors->first('recipe_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
                    @if($errors->has('recipe_name'))
                        <div class="text-danger">
                            {{ $errors->first('recipe_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
                    @if($errors->has('recipe_name'))
                        <div class="text-danger">
                            {{ $errors->first('recipe_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
                    @if($errors->has('recipe_name'))
                        <div class="text-danger">
                            {{ $errors->first('recipe_name')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
                    @if($errors->has('recipe_name'))
                        <div class="text-danger">
                            {{ $errors->first('recipe_name')}}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>
</body>

</html>
