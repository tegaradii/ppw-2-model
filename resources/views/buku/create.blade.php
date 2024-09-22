<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<div class="container m-3">
        <h1 class="text-center">SISTEM INFORMASI BUKU</h1>
        <h4>Tambah Buku</h4>
        <form method="post" action="{{route('buku.store')}}">
            @csrf
            <div>Judul <input class="form-control" type="text" name="judul"></div>
            <div>Penulis <input class="form-control" type="text" name="penulis"></div>
            <div>Harga <input class="form-control" type="text" name="harga"></div>
            <div>Tanggal Terbit <input class="form-control" type="date" name="tgl_terbit"></div>
            <button class="btn btn-primary m-3" type="submit">Simpan</button>
            <a class="btn btn-secondary" href="{{ '/buku' }}">Kembali</a>
        </form>
    </div>
</body>
</html>

