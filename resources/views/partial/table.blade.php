@extends('layouts.app')
@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">


                    <a href="/partial.create" type="button" class="btn btn-warning mb-4">Tambah data petugas</a>

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Data Petugas
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Role</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($model as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->role }}</td
                                <td>
                            <form onsubmit="return confirm('Apakah anda Yakin ?')" action="{{ route('user.destroy', $item->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                    <a href="{{ route('user.edit', $item->id) }}"> <button type="button"
                                            class="btn btn-primary">edit</button></a>
                                </td>
                            </form>
                            </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>

        </section>
    </div>
@endsection
