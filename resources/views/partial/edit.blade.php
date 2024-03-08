@extends('layouts.app')
@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Form</title>
    </head>

    <body>

        <div class="container mt-5">
            <h2>Edit form</h2>
            <form>
                <div class="form-group">
                    <label for="nomor">Nomor:</label>
                    <input type="text" class="form-control" id="nomor" placeholder="1" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama" placeholder="haris" readonly>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" rows="5" placeholder="pinang"></textarea>
                </div>

                <div class="form-group">
                    <select class="form-select mt-3" aria-label="Default select example">
                        <option selected>Role</option>
                        <option value="admin">admin</option>
                        <option value="user">user</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </form>
        </div>

    </body>

    </html>
@endsection
