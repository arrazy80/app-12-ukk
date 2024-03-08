@extends('layouts.app')
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
            <form>
                <div class="form-group">
                    <label for="judul">Nomor:</label>
                    <input type="text" class="form-control" id="nomor">
                </div>
                <div class="form-group">
                    <label for="penulis">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama" name="name">
                </div>
                <div class="form-group">
                    <label for="ulasan">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Password:</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                    <select class="form-select mt-3" aria-label="Default select example">
                        <option selected>Role</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <a href=""><button type="submit" class="btn btn-primary">tambah</button></a>

            </form>
        </div>


    </body>

    </html>
@endsection
