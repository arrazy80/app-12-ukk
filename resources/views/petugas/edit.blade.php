@extends('layout.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Form</title>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </head>

    <body>
        <div class="container mt-5">
            <h2>Form Edit Buku</h2>
            <form action="{{ route('bukus.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">judul buku</label>
                    <input type="text" class="form-control" id="nomor" name="judul" value="{{ $buku->judul }}">
                    <span class="text-danger">{{ $errors->first('judul') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">penulis</label>
                    <input type="text" class="form-control" id="nomor" name="penulis" value="{{ $buku->penulis }}">
                    <span class="text-danger">{{ $errors->first('penulis') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">penerbit</label>
                    <input type="text" class="form-control" id="nomor" name="penerbit" value="{{ $buku->penerbit }}">
                    <span class="text-danger">{{ $errors->first('penerbit') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">thn terbit</label>
                    <input type="date" class="form-control" id="nomor" name="thn_terbit" value="{{ $buku->thn_terbit }}">
                    <span class="text-danger">{{ $errors->first('thn_terbit') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">DESKRIPSI</label>
                    <input type="text" class="form-control" id="nomor" name="deskripsi" value="{{ $buku->deskripsi }}">
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">STOK</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $buku->stok }}">
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <div class="form-group">
                    <label for="penulis">gambar:</label>
                    <input type="file" class="form-control" id="nama" name="gambar" value="{{ $buku->gambar }}">
                    <span class="text-danger">{{ $errors->first('gambar') }}</span>
                </div>
                <div class="form-group">
                    <label for="ulasan">kategori:</label>
                    <select class="form-select mt-3 mb-3" aria-label="Default select example" name="id_kategori">
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->nm_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <a href=""><button type="submit" class="btn btn-primary">tambah</button></a>

            </form>

        </div>
    </body>

    </html>
@endsection
