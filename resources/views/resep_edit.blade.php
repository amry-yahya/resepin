<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post" action="/resep/update/{{ $resep->id }}">

        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="form-group">
            <input type="text" name="recipe_name" class="form-control" placeholder="nama resep" value="{{ $resep->recipe_name }}">
            @if ($errors->has('recipe_name'))
                <div class="text-danger">
                    {{ $errors->first('recipe_name') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="number" name="cooking_time" class="form-control" placeholder="waktu memasak" value="{{ $resep->cooking_time }}">
            @if ($errors->has('cooking_time'))
                <div class="text-danger">
                    {{ $errors->first('cooking_time') }}
                </div>
            @endif 
        </div>
        <div class="form-group">
            <input type="number" name="id_user" class="form-control" placeholder="id user" value="{{ $resep->id_user }}">
            @if ($errors->has('id_user'))
                <div class="text-danger">
                    {{ $errors->first('id_user') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" name="tag" class="form-control" placeholder="tag" value="{{ $resep->tag }}">
            @if ($errors->has('tag'))
                <div class="text-danger">
                    {{ $errors->first('tag') }}
                </div>
            @endif
        </div>
        {{-- <div class="form-group">
            <input type="text" name="image" class="form-control" placeholder="image" value="{{ $resep->image }}">
            @if ($errors->has('image'))
                <div class="text-danger">
                    {{ $errors->first('image') }}
                </div>
            @endif
        </div> --}}
        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="description" value="{{ $resep->description }}">
            @if ($errors->has('description'))
                <div class="text-danger">
                    {{ $errors->first('description') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="number" name="rating" class="form-control" placeholder="rating" value="{{ $resep->rating }}">
            @if ($errors->has('rating'))
                <div class="text-danger">
                    {{ $errors->first('rating') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" name="ingredients" class="form-control" placeholder="ingredients" value="{{ $resep->ingredients }}">
            @if ($errors->has('ingredients'))
                <div class="text-danger">
                    {{ $errors->first('ingredients') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" name="steps" class="form-control" placeholder="steps" value="{{ $resep->steps }}">
            @if ($errors->has('steps'))
                <div class="text-danger">
                    {{ $errors->first('steps') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Simpan">
        </div>

    </form>
</body>

</html>
