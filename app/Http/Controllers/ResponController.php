<?php

namespace App\Http\Controllers;

use App\Models\staff;
use App\Models\jadwal;
use App\Models\Respon;
use Illuminate\Http\Request;
use App\Models\status_penjemputan;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreResponRequest;
use App\Http\Requests\UpdateResponRequest;
use App\Models\Permintaan;

class ResponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pindahkanData()
    {
        // Mulai transaksi database untuk menjaga konsistensi
        DB::beginTransaction();

        try {
            // Ambil semua data dari tabel 'respon' dengan status 'selesai'
            $dataSelesai = Respon::where('status', 'selesai')->get();

            foreach ($dataSelesai as $data) {
                // Pindahkan data ke tabel 'transaksi'
                // Transaksi::create([
                //     'deskripsi' => 
                //     'id_gudang' => 
                //     'id_kualitas_kopi' => 
                //     'id_pembayaran' => 
                // ]);

                // Hapus data dari tabel 'respon'
                $data->delete();
            }

            // Commit transaksi jika berhasil
            DB::commit();

            return redirect()->route('pembayaran');
        } catch (\Exception $e) {
            // Rollback jika terjadi error
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function index()
    {
        $respons = DB::table('respons')
            ->join('permintaans', 'respons.permintaan_id', '=', 'permintaans.id')
            ->join('users', 'permintaans.id_user', '=', 'users.id')
            ->join('staff', 'respons.staff_id', '=', 'staff.id')
            ->join('jadwals', 'respons.jadwal_id', '=', 'jadwals.id')
            ->get();
        // pindahkanData();
        // $respons = Permintaan::all();
        return view('Pengepul.pages.respon', compact('respons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $statuses = status_penjemputan::all();
        $staffs = staff::all();
        $i = (int)$id;
    //    dd($id);
        return view('Pengepul.pages.respons.respon', compact('i', 'statuses', 'staffs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // dd($request->all());

        $request->validate([
            'tanggal' => 'required',
            'status' => 'required',
            'karyawan' => 'required',
        ]);
        jadwal::create([
            'waktu_penjemputan' => $request->tanggal,
            "status_id" => $request->status
        ]);
        $idp = Jadwal::latest('id')->value('id');
        $idpin = (int)$idp;
        Respon::create([
            'permintaan_id' => $request->id,
            "staff_id" => $request->karyawan,
            "jadwal_id" => $idpin,
        ]);
        // $respons = DB::table('respons')
        // ->join('permintaans', 'permintaans.id', '=', 'respons.permintaan_id')
        // ->join('staffs', 'staffs.id', '=', 'respons.staff_id')
        // ->join('jadwals', 'jadwals.id', '=', 'respons.jadwal_id')
        // ->get();    
        return redirect()->route('show_permintaan')->with('success', 'Jadwal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Respon $respon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Respon $respon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateResponRequest $request, Respon $respon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Respon $respon)
    {
        //
    }
}
