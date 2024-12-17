<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = $data = DB::table('transaksi')
        ->join('respons', 'transaksi.id_respon', '=','respons.id')
        ->join('permintaans', 'respons.permintaan_id', '=', 'permintaans.id')
        ->join('produks', 'permintaans.id_produk','=','produks.id')
        ->join('users', 'permintaans.id_user', '=', 'users.id')
        ->join('staff', 'respons.staff_id', '=', 'staff.id')
        ->join('jadwals', 'respons.jadwal_id', '=', 'jadwals.id') // Join respons
        ->join('kualitas_kopis', 'transaksi.id_kualitas_kopi', '=', 'kualitas_kopis.id') // Join kualitas_kopis
        ->join('pembayarans', 'transaksi.id_pembayaran', '=', 'pembayarans.id') // Join pembayarans
        ->join('gudangs', 'transaksi.id_gudang', '=', 'gudangs.id') // Join gudangs
        ->get();
    
        return view('Pengepul.pages.transaksi', compact('transaksis'));
    }
    public function riwayat()
    {
        $transaksis = $data = DB::table('transaksi')
        ->join('respons', 'transaksi.id_respon', '=','respons.id')
        ->join('permintaans', 'respons.permintaan_id', '=', 'permintaans.id')
        ->join('produks', 'permintaans.id_produk','=','produks.id')
        ->join('users', 'permintaans.id_user', '=', 'users.id')
        ->join('staff', 'respons.staff_id', '=', 'staff.id')
        ->join('jadwals', 'respons.jadwal_id', '=', 'jadwals.id') // Join respons
        ->join('kualitas_kopis', 'transaksi.id_kualitas_kopi', '=', 'kualitas_kopis.id') // Join kualitas_kopis
        ->join('pembayarans', 'transaksi.id_pembayaran', '=', 'pembayarans.id') // Join pembayarans
        ->join('gudangs', 'transaksi.id_gudang', '=', 'gudangs.id') // Join gudangs
        ->get();
    
        return view('Petani.pages.riwayat', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
