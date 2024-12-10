<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\gudang;
use App\Models\kualitas_kopi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        return view('Pengepul.homepage');
    }
    public function show_user()
    {
        $users = User::all();
        return view('Pengepul.pages.user', compact('users'));
    }
    public function showForm($tableName)
    {
        // Pastikan tabel yang dimasukkan valid
        if (!DB::getSchemaBuilder()->hasTable($tableName)) {
            return abort(404, "Tabel tidak ditemukan");
        }

        // Ambil kolom dari tabel
        $columns = DB::getSchemaBuilder()->getColumnListing($tableName);

        return view('Pengepul.pages.create', compact('columns', 'tableName'));
    }
    public function homepage_petani()
    {
        $names = User::where('role', 'pengepul')->pluck('name');
        $hargas = kualitas_kopi::all();
        $gudangs = gudang::all();
        return view('Petani.pages.home', compact('names', 'hargas'));
    }
    public function create_gambar(Request $request)
    {

        $nama = $request->foto;
        $namafile = $nama->getOriginalName();
        $user = new User();
        $user->foto = $namafile;
        // use Illuminate\Support\Facades\Request;
        $nama->move(public_path() . '/images', $namafile);
        $user->save();
        DB::table('users')
            ->where('id', $user->id)
            ->update([
                'gambar' => $namafile
            ]);
        return redirect()->route('users');
    }
    public function create()
    {
        return view("Pengepul.pages.user.create");
    }
    public function store(Request $request)
    {
        // bcrypt($request->password);
        // dd());
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            // 'telephone' =>'required',
        ]);

        Gudang::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => $request->role
        ]);

        return redirect()->route("users");
    }

    public function edit(User $user)
    {
        return view("Pengepul.pages.user.update", compact("user"));
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "role" => $request->role
        ]);
        // $nama = $request->gambar;
        // $file = str_replace(' ', '', $nama);
        // // $namafile = $nama->getOriginalName();
        // $user = new User();
        // $file->;
        // $user->gambar = $file;
        // $user->save();
        // DB::table('users')
        //     ->where('id', $user->id)
        //     ->update([
        //         "name" => $request->name,
        //         "email" => $request->email,
        //         "role" => $request->role,
        //         'gambar' => $nama
        //     ]);

        return redirect()->back()->with('success', 'User Berhasil Diperbarui');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->route("Pengepul.pages.user");
    }
}
