<!DOCTYPE html>
<html>

<head>
    <title>Upload</title>

</head>

<body>
			<p>upload gambar makanan hasil resep anda</p>
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
                    <b>File Gambar</b><br />
                    <input type="file" name="file">
                </div>

                <div class="form-group" hidden>
                    <b>Keterangan</b>
                    <input type="text" name="image" value="{{ $resep->id }}">
                </div>


                <input type="submit" value="Upload" class="btn btn-primary">
            </form>
</body>

</html>
