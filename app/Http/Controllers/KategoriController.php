<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::get();

        $posts = Kategori::latest()->paginate(5);
        return view('kategori.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nm_kategori' => 'required',
        ]);

        $model = Kategori::create([
            'nm_kategori' => $request->nm_kategori,
        ]);

        return redirect()->route('kategori.index', $model)->with('success', 'Data Berhasiltambah.'); {
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = Kategori::findOrFail($id);
        return view('kategori.edit')->with('kategori', $model);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->validate([
            'nm_kategori' => 'required',
        ]);
        $model = Kategori::findOrFail($id);
        $model->fill($requestData);
        $model->save();
        return redirect()->route('kategori.index')->with('success', 'Data Berhasiltambah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Kategori::findOrFail($id);
        $model->delete();
        return redirect()->back();
    }
}
