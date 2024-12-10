<?php

namespace App\Http\Controllers;
use App\Models\kualitas_kopi;
use Illuminate\Http\Request;
use App\Http\Requests\Storekualitas_kopiRequest;
use App\Http\Requests\Updatekualitas_kopiRequest;

class KualitasKopiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kopis = kualitas_kopi::all();
        return view('Pengepul.pages.kopis', compact('kopis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Pengepul.pages.kopis.create");
    }
    public function store(Request $request)
    {
        // bcrypt($request->password);
        // dd($request->all());
        $request->validate([
            'kualitas' =>'required',
          ]);
        
        kualitas_kopi::create([
            "kulitas_kopi" => $request->kualitas
        ]);

        return redirect()->route("kopis");
    }

    public function edit(kualitas_kopi $kualitas) {
        return view("Pengepul.pages.kopis.update", compact("kualitas"));
    }

    public function update(Request $request, kualitas_kopi $kualitas_kopi) {
        $kualitas_kopi->update([
            "kulitas_kopi" => $request->kualitas
        ]);

        return redirect()->route("users");
    }

    public function delete(kualitas_kopi $kualitas_kopi) {
        $kualitas_kopi->delete();

        return redirect()->route("Pengepul.pages.user");
    }
}
