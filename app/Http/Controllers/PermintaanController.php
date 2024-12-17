<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\gudang;
use App\Models\Respon;
use App\Models\Transaksi;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePermintaanRequest;
use App\Http\Requests\UpdatePermintaanRequest;

class PermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function penjemputan() {
        $respons = DB::table('respons')
            ->join('permintaans', 'respons.permintaan_id', '=', 'permintaans.id')
            ->join('users', 'permintaans.id_user', '=', 'users.id')
            ->join('staff', 'respons.staff_id', '=', 'staff.id')
            ->join('jadwals', 'respons.jadwal_id', '=', 'jadwals.id')
            ->get();
        // $permintaans = Permintaan::where('status_id', 1)->get();
        return view('Petani.pages.penjemputan', compact('respons'));
    }
    public function index()
    {
        //
    }
    public function show() {
        $permintaans
         = Permintaan::all();
        return view('Pengepul.pages.permintaan', compact('permintaans'));
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
    public function store(Request $request, Gudang $gudang)
    {
        // Ambil gudang tertentu (misalnya ID pertama, sesuaikan logika Anda)
        $gudang = Gudang::first(); // Ambil gudang pertama
        // dd($gudang);

        // Cek apakah gudang ditemukan
        if (!$gudang) {
            return redirect()->back()->with('error', 'Gudang tidak ditemukan.');
        }

        // Kapasitas gudang sekarang
        $nd = $gudang->kapasitas;

        // Validasi input, termasuk cek jumlah tidak melebihi kapasitas
        $request->validate([
            'alamat' => 'required',
            'jumlah' => 'required|numeric|min:1',
        ]);

        // Cek apakah jumlah melebihi kapasitas
        $jumlah = (int)$request->jumlah;
        if ($jumlah > $nd) {
            return redirect()->back()->with('error', 'Jumlah permintaan melebihi kapasitas maksimal gudang (' . $nd . ').');
        }

        // Hitung kapasitas baru
        $nk = $nd - $jumlah;

        // Simpan permintaan baru
        $users = Auth::user();
        // dd($users->id);
        Permintaan::create([
            'id_user' => $users->id,
            'jumlah_kopi' => $jumlah,
            'new_alamat' => $request->alamat,
            'handphone' => $users->handphone
        ]);

        // Update kapasitas gudang
        $gudang->update([
            'kapasitas' => $nk
        ]);

        return redirect()->route('homepage-petani')->with('success', 'Permintaan berhasil dikirim');
    }
}
