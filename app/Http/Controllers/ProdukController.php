<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all( );
        return view('Pengepul.pages.produk', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Pengepul.pages.produks.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "nama" => "required",
            "gambar"  => "required|image|mimes:jpeg,png,jpg,gif,svg|max:2048",
        ]);
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $newName = time() . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $newName);
            $validatedData['gambar'] = $newName;
        }
        Produk::create($validatedData);
        return redirect()->route('produk')->with('success', 'Produk Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('Pengepul.pages.produks.update', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            "nama" => "required",
            "gambar" => "nullable|image|mimes:jpeg,png,jpg,gif,svg",
        ]);
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($produk->gambar && file_exists(public_path('images') . $produk->gambar)) {
                unlink(public_path('images' . $produk->gambar));
            }
            // Upload gambar baru
            $gambar = $request->file('gambar');
            $newName = time() . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('images'), $newName); // Pindahkan file ke public/img
            $validatedData['gambar'] = $newName; // Simpan path gambar relatif ke folder public
        }
        $produk->update($validatedData);
        return redirect()->route('produk')->with('success', 'Produk Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
