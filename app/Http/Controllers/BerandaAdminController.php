<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaAdminController extends Controller
{
    public function index()
    {
        $buku = Buku::count();
        $user = User::count();
        $peminjaman = Peminjaman::count();
        $kategori = Kategori::count();
        return view('admin.beranda_index',[
            'routePrefix' => 'buku',
            'title' => 'Data Buku',
            'buku' => $buku,
            'peminjaman' => $peminjaman,
            'user' => $user,
            'kategori' => $kategori,
        ]);
    }
}
