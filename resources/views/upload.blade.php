<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src={{ URL::asset('js/script.js') }}></script>
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }}>
    <title>Resep Saya</title>

</head>

<body>
    <div class="modal active" id="modalUpload">
        <div class="modal-body" style="display:flex; flex-direction: column; width: 100%;">
            <div class="tittle-text">
                Upload gambar makanan <br> hasil resep anda
            </div>
            
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif

            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <input type="file" name="file">
                </div>

                <div class="form-group" hidden>
                    <b>Keterangan</b>
                    <input type="text" name="image" value="{{ $resep->id }}">
                </div>


                <input type="submit" value="Upload" class="button">
            </form>
    
        </div>
    </div>
    

            <div id ="overlay" class="active"></div>
            <img src="{{ URL::asset('./images/background.png') }}" alt="" class="background">

</body>

</html>
