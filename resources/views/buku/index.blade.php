<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center m-3">SISTEM INFORMASI BUKU</h1>
    <a href="{{ route('buku.create') }}" class="btn btn-primary float-end m-3">Tambah Buku</a>
    <table class="table m-3" border="1">
        <thead>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            @foreach($data_buku as $index => $buku)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp. ".number_format($buku->harga, 2, ",", ".") }}</td>
                    <td>{{ $buku->tgl_terbit }}</td>
                    <td>
                        <form action="{{  route('buku.destroy', $buku->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin mau di hapus?')" type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('buku.edit', $buku->id) }}">Update</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p class="h4 text-center">jumlah buku: <span>{{ $data_buku->count() }}</span></p>
    <p class="h4 text-center">jumlah harga buku: <span>{{ $data_buku->pluck('harga')->sum() }}</span></p>
</body>
</html>
