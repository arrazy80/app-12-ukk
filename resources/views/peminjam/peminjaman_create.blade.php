@extends('layout.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Kategori</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </head>

    <body>

        <div class="container">
            <h2 class="mt-5">Buat Peminjaman</h2>

            <form action="{{ route('pustaka.pinjam', $model->id) }}" method="post">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="kategori">Tanggal Pengembalian</label>
                    <input type="date" class="form-control" id="kategori" name="return_date">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>

            </form>


        </div>

    </body>

    </html>
@endsection
