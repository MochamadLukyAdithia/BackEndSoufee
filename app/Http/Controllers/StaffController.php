<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorestaffRequest;
use App\Http\Requests\UpdatestaffRequest;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = staff::all();
        return view('Pengepul.pages.staff', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Pengepul.pages.staff.create");
    }
    public function store(Request $request)
    {
        // bcrypt($request->password);
        // dd($request->all());
        $request->validate([
            "nama" => "required",
            "handphone" => "required",
            "alamat" => "required",
          ]);
        $userid = Auth::user()->id;
        // dd($request->all());
        staff::create([
            "nama" => $request->nama,
            "phone_number" => $request->handphone,
            "address" => $request->alamat,
            'user_id' => $userid
        ]);

        return redirect()->route("staffs")->with('success','Data Berhasil Ditambahkan');
    }

    public function edit(staff $staff) {
        return view("Pengepul.pages.staff.update", compact("staff"));
    }

    public function update(Request $request, staff $staff) {
        $staff->update([
            "kulitas_kopi" => $request->kualitas
        ]);

        return redirect()->route("staffs");
    }

    public function delete(staff $staff) {
        $staff->delete();

        return redirect()->back()->with('success', 'Staff deleted successfully');
    }
}
