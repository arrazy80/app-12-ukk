@extends('layout.app')
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
            <form action="{{ route('user.update', $user->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="penulis">Nama Lengkap:</label>
                    <input type="text" class="form-control" id="nama" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="penulis">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="penulis">telepon:</label>
                    <input type="number" class="form-control" id="telepon" name="telepon" value="{{ $user->telepon }}">
                </div>
                <div class="form-group">
                    <label for="ulasan">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="5" value="{{ $user->alamat }}">{{ $user->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div
                <div class="form-group">
                    <label for="">Role</label>
                    <select class="form-select mt-3 mb-3" aria-label="Default select example" name="role">
                        <option selected>{{ $user->role }}</option>
                        @if ($user->role == 'admin')
                            <option value="petugas">petugas</option>
                            <option value="peminjam">peminjam</option>
                        @elseif ($user->role == 'petugas')
                            <option value="admin">admin</option>
                            <option value="peminjam">peminjam</option>
                        @elseif ($user->role == 'peminjam')
                            <option value="admin">admin</option>
                            <option value="petugas">petugas</option>
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">tambah</button>

            </form>
        </div>

    </body>

    </html>
@endsection
