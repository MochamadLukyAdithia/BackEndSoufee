<?php

namespace App\Http\Controllers;

use App\Models\staff;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\status_penjemputan;

class StatusController extends Controller
{
    public function index() {
        $statuss = Status::all();
        return view("Pengepul.pages.status", compact("statuss"));
    }
    public function create() {
        return view("create");
    }
    public function store(Request $request) {
        Status::create([
            "nama_status" => $request->nama_status
        ]);
        return redirect()->route("status");
    
        // $status = new Status;
        // $status->nama_status = $request->nama_status;
        // $status->save();

        // return redirect()->route("status");
    
        // Status::create($request->all());
    }
    public function edit(Status $status) {
        return view("edit", compact("status"));
    }
    public function update(Request $request, Status $status) {
        $status->update($request->all());
        return redirect()->route("status");
    
        // $status = Status::find($id);
        // $status->nama_status = $request->nama_status;
        // $status->save();

        // return redirect()->route("status");
    
        // $status->update($request->all());
    }
    public function del (staff $staff) {
        $staff->delete();
        return redirect()->route("Pengepul.pages.staff");
    }

   
}