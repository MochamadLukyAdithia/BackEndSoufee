<?php

namespace App\Http\Controllers;

use App\Models\status_penjemputan;
use App\Http\Requests\Storestatus_penjemputanRequest;
use App\Http\Requests\Updatestatus_penjemputanRequest;

class StatusPenjemputanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuss = status_penjemputan::all();
        return view("Pengepul.pages.status", compact("statuss"));
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
    public function store(Storestatus_penjemputanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(status_penjemputan $status_penjemputan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(status_penjemputan $status_penjemputan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatestatus_penjemputanRequest $request, status_penjemputan $status_penjemputan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(status_penjemputan $status_penjemputan)
    {
        //
    }
}
