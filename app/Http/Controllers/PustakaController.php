<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PustakaController extends Controller
{
    public function index()
    {
        $buku = Buku::latest()->paginate(10);
        $kategori = Kategori::all();
        return view('peminjaman.index',[
            'routePrefix' => 'buku',
            'title' => 'Data Buku',
        ])->with('buku', $buku)->with('kategori', $kategori);
    }
}
