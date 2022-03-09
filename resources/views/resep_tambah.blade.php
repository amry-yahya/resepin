<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="post" action="/resep/store">

        {{ csrf_field() }}

        <div class="form-group">
            <input type="text" name="recipe_name" class="form-control" placeholder="nama resep">
            @if ($errors->has('recipe_name'))
                <div class="text-danger">
                    {{ $errors->first('recipe_name') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="number" name="cooking_time" class="form-control" placeholder="waktu memasak">
            @if ($errors->has('cooking_time'))
                <div class="text-danger">
                    {{ $errors->first('cooking_time') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="number" name="id_user" class="form-control" placeholder="id user">
            @if ($errors->has('id_user'))
                <div class="text-danger">
                    {{ $errors->first('id_user') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <input type="text" name="tag" class="form-control" placeholder="tag">
            @if ($errors->has('tag'))
                <div class="text-danger">
                    {{ $errors->first('tag') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <textarea name="description" id="" cols="30" rows="10" placeholder="description"></textarea>
            @if ($errors->has('description'))
                <div class="text-danger">
                    {{ $errors->first('description') }}
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
            <textarea name="ingredients" id="" cols="30" rows="10" placeholder="ingredients"></textarea>
            @if ($errors->has('ingredients'))
                <div class="text-danger">
                    {{ $errors->first('ingredients') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <textarea name="steps" id="" cols="30" rows="10" placeholder="steps"></textarea>
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
