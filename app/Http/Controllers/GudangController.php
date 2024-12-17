<?php

namespace App\Http\Controllers;

use App\Models\gudang;
use App\Http\Requests\StoregudangRequest;
use App\Http\Requests\UpdategudangRequest;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index()
    {
        // $gudangs = Gudang::all();
        $gudangs = gudang::all();


        return view("Pengepul.pages.gudan", compact('gudangs'));
    }

    public function create()
    {
        return view("Pengepul.pages.gudang.create");
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $string = $request->kapasitas;
        $int = (int)$string;
        Gudang::create([
            "kapasitas" => $int,
            "deskripsi" => $request->deskripsi,
        ]);

        return redirect()->route("gudang");
    }

    public function edit(Gudang $gudang) {
        return view("Pengepul.pages.gudang.update", compact("gudang"));
    }

    public function update(Request $request, Gudang $gudang) {
        $string = $request->kapasitas;
        $int = (int)$string;
        $gudang->update([
            "kapasitas" => $int,
            "deskripsi" => $request->deskripsi
        ]);

        return redirect()->route("gudang");
    }

    public function delete(Gudang $gudang) {
        $gudang->delete();

        return redirect()->route("Pengepul.pages.kopis");
    }
  
}
