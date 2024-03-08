<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanadminController extends Controller
{
    public function index(Request $request, $id)
    {
        $model = Buku::findOrFail($id);
        return view('admin.peminjaman-admin', compact('model'));
    }
    public function pinjam(Request $request, $id)
    {
        $request->validate([
            'return_date' => 'required|date|after_or_equal:today'
        ]);

        $buku = Buku::findOrFail($id);
        if ($buku->stok < 1) {
            return redirect()->route('pustaka.index');
        }

        $pinjam = new Peminjaman();
        $pinjam->user_id = auth()->id(); // ID pengguna yang melakukan peminjaman
        $pinjam->buku_id = $id;
        $pinjam->return_date = $request->return_date;
        $pinjam->status = 'DIpinjam';
        $pinjam->save();

        $buku->stok--;
        $buku->save();
        return redirect()->route('pustaka.index');
    }

    public function kembalikan($id)
    {
        $pinjam = Peminjaman::findOrFail($id);
        $pinjam->status = 'dikembalikan';
        $pinjam->returned_at = date('Y-m-d');
        $pinjam->buku->stok++;
        $pinjam->save();
        return redirect()->back();
    }

    public function dataPeminjaman()
    {
        $userId = Auth::id();
        $data = Peminjaman::with('buku', 'user')->where('user_id', $userId)->get();
        return view('admin.data.peminjaman', compact('data'));
    }

    public function dataPeminjamanadmin()
    {
        $data = Peminjaman::with('buku', 'user')->where('status', 'DIpinjam')->get();
        return view('admin.data-peminjaman', compact('data'));
    }


}
