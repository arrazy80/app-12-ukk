<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $buku = Buku::latest()->paginate(5);
        $kategori = Kategori::latest()->get();
        return view('buku.buku', compact('buku', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data = [
            'kategori' => Kategori::get(),
        ];
        return view('buku.create', $data);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'penulis'   => 'required',
            'penerbit'  => 'required',
            'thn_terbit' => 'required',
            'deskripsi' => 'required',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_kategori' => 'required',
            'stok' => 'required',
        ]);
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/buku', $gambar->hashName());

        $model = Buku::create([
            'gambar'     => $gambar->hashName(),
            'judul'     => $request->get('judul'),
            'penulis'   => $request->get('penulis'),
            'penerbit'  => $request->get('penerbit'),
            'thn_terbit' => $request->get('thn_terbit'),
            'deskripsi' => $request->get('deskripsi'),
            'id_kategori' => $request->get('id_kategori'),
            'stok' => $request->get('stok'),
        ]);
        return redirect()->route('buku.index', $model);

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $kategori = Kategori::all();
        return view('buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $this->validate($request, [
            'judul'     => 'required',
            'penulis'   => 'required',
            'penerbit'  => 'required',
            'thn_terbit' => 'required',
            'deskripsi' => 'required',
            'gambar'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'id_kategori' => 'required',
            'stok' => 'required',
        ]);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/buku', $gambar->hashName());

            //delete old image
            Storage::delete('public/buku/'.$buku->image);

            //update post with new image
            $buku->update([
                'gambar'     => $gambar->hashName(),
                'judul'     => $request->get('judul'),
                'penulis'   => $request->get('penulis'),
                'penerbit'  => $request->get('penerbit'),
                'thn_terbit' => $request->get('thn_terbit'),
                'deskripsi' => $request->get('deskripsi'),
                'id_kategori' => $request->get('id_kategori'),
                'stok' => $request->get('stok'),
            ]);

        } else {

            //update post without image
            $buku->update([
                'judul'     => $request->get('judul'),
                'penulis'   => $request->get('penulis'),
                'penerbit'  => $request->get('penerbit'),
                'thn_terbit' => $request->get('thn_terbit'),
                'deskripsi' => $request->get('deskripsi'),
                'id_kategori' => $request->get('id_kategori'),
                'stok' => $request->get('stok'),

            ]);
        }
        //redirect to index
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {


        // Delete the image file from storage
        Storage::delete('public/img/buku/'.$buku->gambar);

        // Delete the book record from the database
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
