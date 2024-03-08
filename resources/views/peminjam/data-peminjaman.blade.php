@extends('layout.app')
@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Buku yang dipinjam</h3>



                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Buku yang dipinjam</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Data Peminjaman
                    </h5>
                </div>
                <div class="card-body">
                    <table class="table table-dark border-dark" id="table1">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>gambar</th>
                                <th>judul buku</th>
                                <th>Tanggal Peminjaman</th>
                                <th>status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td><img src="{{ Storage::url('public/buku/').$item->buku->gambar }}" class="rounded" style="width: 150px"></td>
                                <td>{{$item->buku->judul}}</td>
                                <td>{{$item->created_at->format('d-m-Y')}}</td>
                                <td>{{$item->status }}</td>
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
