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

    <div class="content">
        <div class="container ">
            <form method="post" action="/resep/store">
                            
                <div class="modal active" id="modalTambah">
                    <div class="modal-body" style="display:flex; flex-direction: column; width: 100%;">
                {{ csrf_field() }}
        
                <img src="{{ URL::asset('./images/new-recipe.png') }}" alt="" class="small-img">
                <div class="header-text">
                    Resep Baru
                </div>

                <div class="grid">
                    <div class="modal-grid">
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
                        <div class="form-group" hidden> 
                            <input type="number" name="id_user" class="form-control" value="{{ Auth::id() }}">
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
                        
                    </div>
    
                    <div class="modal-grid">
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
                    </div>

                </div>
                
        
                <div class="form-group">
                    <input type="submit" class="btn btn-success button" value="Simpan">
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

        </div>
    </div>
        <img src="{{ URL::asset('./images/background.png') }}" alt="" class="background">

        <div id ="overlay" class="active"></div>
    </form>
</body>

</html>

