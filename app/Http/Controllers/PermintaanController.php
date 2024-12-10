<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Permintaan;
use App\Http\Requests\StorePermintaanRequest;
use App\Http\Requests\UpdatePermintaanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Permintaan $permintaan)
    {

        return view('Petani.pages.permintaan.create', compact('permintaan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'alamat' => 'required',
            'jumlah' => 'required|numeric',
        ]);
        Permintaan::create([
            'id_user' => $user->id,
            'jumlah_kopi' => $request->jumlah,
            'new_alamat' => $request->alamat,
            'handphone' => $user->handphone
        ]);
        return redirect()->route('homepage-petani')->with('success', 'Permintaan berhasil dikirim');
    }
}
