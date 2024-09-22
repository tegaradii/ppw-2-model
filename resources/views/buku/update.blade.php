<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Update Buku</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<div class="container m-3">
        <h1 class="text-center">SISTEM INFORMASI BUKU</h1>
        <h4>Update Buku</h4>
        <form method="post" action="{{route('buku.update', $buku->id )}}">
            @csrf
            @method('PUT')
            <div>Judul <input class="form-control" type="text" name="judul" value="{{ $buku->judul }}"></div>
            <div>Penulis <input class="form-control" type="text" name="penulis" value="{{  $buku->penulis }}"></div>
            <div>Harga <input class="form-control" type="text" name="harga" value="{{ $buku->harga }}"></div>
            <div>Tanggal Terbit <input class="form-control" type="date" name="tgl_terbit" value="{{ $buku->tgl_terbit }}"></div>
            <button class="btn btn-primary m-3" type="submit">Update</button>
            <a class="btn btn-secondary" href="{{ '/buku' }}">Kembali</a>
        </form>
    </div>
</body>
</html>
