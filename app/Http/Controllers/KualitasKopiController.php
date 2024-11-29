<?php

namespace App\Http\Controllers;

use App\Models\kualitas_kopi;
use App\Http\Requests\Storekualitas_kopiRequest;
use App\Http\Requests\Updatekualitas_kopiRequest;

class KualitasKopiController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storekualitas_kopiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(kualitas_kopi $kualitas_kopi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kualitas_kopi $kualitas_kopi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatekualitas_kopiRequest $request, kualitas_kopi $kualitas_kopi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kualitas_kopi $kualitas_kopi)
    {
        //
    }
}
