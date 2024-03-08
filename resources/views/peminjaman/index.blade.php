@extends('layout.app')
@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Buku</h3>



                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                        <a href="{{route('buku.create')}}" type="button" class="btn btn-secondary mb-4">Tambah Buku </a>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <a href="#" type="button" class="btn btn-secondary mb-4">Cetak Laporan </a>
                </div>
                <div class="card-body">
                    <table class="table table-dark border-dark" id="table1">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th> kategori</th>
                                <th>judul buku</th>
                                <th>penulis</th>
                                <th>penerbit</th>
                                <th>stok</th>
                                <th>tahun_terbit</th>
                                <th>gambar</th>
                                <th>tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buku as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $kategori->find($item->id_kategori)->nm_kategori }}</td>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->penulis}}</td>
                                <td>{{$item->penerbit}}</td>
                                <td>{{$item->stok}}</td>
                                <td>{{$item->thn_terbit}}</td>
                                <td><img src="{{ Storage::url('public/buku/').$item->gambar }}" class="rounded" style="width: 150px"></td>
                                <td>
                                    <a href="" type="button" class="btn btn-primary">Detail</a>
                                    <a href="{{ route('buku.pinjam.create', $item->id) }}" type="button" class="btn btn-success">Pinjam</a>
                                </td>
                            </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                    {{ $buku->links() }}
                </div>
            </div>

        </section>
    </div>
@endsection
