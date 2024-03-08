@extends('layout.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detaik Buku</title>

    </head>

    <body>
        <div class="container mt-5">
            <h2>Detail Buku</h2>
                <div class="form-group">
                    <label for="judul">judul buku</label>
                    <input type="text" class="form-control" id="nomor" name="judul" disabled value="{{ $buku->judul }}">
                    <span class="text-danger">{{ $errors->first('judul') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">penulis</label>
                    <input type="text" class="form-control" id="nomor" name="penulis" disabled value="{{ $buku->penulis }}">
                    <span class="text-danger">{{ $errors->first('penulis') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">penerbit</label>
                    <input type="text" class="form-control" id="nomor" name="penerbit" disabled value="{{ $buku->penerbit }}">
                    <span class="text-danger">{{ $errors->first('penerbit') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">thn terbit</label>
                    <input type="date" class="form-control" id="nomor" name="thn_terbit" disabled value="{{ $buku->thn_terbit }}">
                    <span class="text-danger">{{ $errors->first('thn_terbit') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">DESKRIPSI</label>
                    <input type="text" class="form-control" id="nomor" name="deskripsi" disabled value="{{ $buku->deskripsi }}">
                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">STOK</label>
                    <input type="number" class="form-control" id="stok" name="stok" disabled value="{{ $buku->stok }}">
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <div class="form-group">
                    <label for="judul">Kategori</label>
                    <input class="form-control"name="stok" disabled value="{{ $buku->id_kategori }}">
                    <span class="text-danger">{{ $errors->first('stok') }}</span>
                </div>
                <div class="form-group">
                    <label for="penulis">gambar:</label>
                    <img src="{{ Storage::url('public/buku/').$buku->gambar }}" style="width: 600px;" alt="{{ $buku->judul }}">
                </div>
                {{-- <div class="form-group">
                    <label for="ulasan">kategori:</label>
                    <input type="number" class="form-control" id="stok" disabled value="{{ $buku->kategori->nm_kategori }}">
                </div> --}}
                <a href="{{ route('buku.index') }}"><button type="submit" class="btn btn-primary">Kembali</button></a>
            </form>
        </div>
    </body>

    </html>
@endsection
