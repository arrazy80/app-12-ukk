@extends('layout.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Form</title>

    </head>

    <body>
        <div class="container mt-5">
            <h2>Form Tambah data petugas</h2>
            <form action="{{ route('user.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="penulis">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama" name="name">
                </div>
                <div class="form-group">
                    <label for="penulis">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="penulis">telepon:</label>
                    <input type="number" class="form-control" id="telepon" name="telepon">
                </div>
                <div class="form-group">
                    <label for="ulasan">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div
                <div class="form-group">
                    <select class="form-select mt-3 mb-3" aria-label="Default select example" name="role">
                        <option selected>Role</option>
                        <option value="admin">admin</option>
                        <option value="petugas">petugas</option>
                        <option value="peminjam">peminjam</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">tambah</button>

            </form>
        </div>


    </body>

    </html>
@endsection

