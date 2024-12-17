<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorejadwalRequest;
use App\Http\Requests\UpdatejadwalRequest;

class JadwalController extends Controller
{
    public function index()
    { 
        $jadwals = DB::table('jadwals')
        ->join('status_penjemputans','status_penjemputans.id', '=', 'jadwals.status_id')
        ->get();
        return view("Pengepul.pages.jadwal", compact("jadwals"));
            
    }

    public function create()
    {
        return view("create");
    }

    // public function store(Request $request)
    // {
    //     Jadwal::create([
    //         "name" => $request->name,
    //         "email" => $request->email,
    //         "phone" => $request->phone
    //     ]);

    //     return redirect()->route("homepage");
    // }

    public function edit(Jadwal $jadwal) {
        return view("edit", compact("jadwal"));
    }

    // public function update(Request $request, Jadwal $jadwal) {
    //     $jadwal->update([
    //         "name" => $request->name,
    //         "email" => $request->email,
    //         "phone" => $request->phone
    //     ]);

    //     return redirect()->route("homepage");
    // }

    public function delete(Jadwal $jadwal) {
        $jadwal->delete();

        return redirect()->route("Pengepul.pages.jadwal");
    }

}
