<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\gudang;
use App\Models\Produk;
use App\Models\Permintaan;
use Illuminate\Http\Request;
use App\Models\kualitas_kopi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class UserController extends Controller
{
    public function index()
    {
        $permintaans = Permintaan::all();
            foreach ($permintaans as $permintaan);
                $id = $permintaan->id_user;
                $username = User::where('id', $id)->pluck('name');
                // foreach ($permintaans as $permintaan);

                $jumlah = $permintaan->id;

        return view('Pengepul.homepage', compact('permintaans', 'username', 'jumlah'));
    }

    // public function notifications(Request $request)
    // {
    //     $viewAll = $request->query('view_all', false); // Cek apakah "view_all" ada di URL
    //     $limit = $viewAll ? null : 4; // Jika "view_all" true, tampilkan semua; jika tidak, batasi 4

    //     $permintaans = Permintaan::orderBy('created_at', 'desc')->limit($limit)->get();
    //     $totalNotifications = Permintaan::count(); // Hitung total notifikasi

    //     return view('Pengepul.homepage', [
    //         'permintaans' => $permintaans,
    //         'totalNotifications' => $totalNotifications,
    //         'viewAll' => $viewAll,
    //     ]);
    // }

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
        $id = User::where('role', 'pengepul')->pluck('id');
        $gudangs = gudang::where('id', $id)->get();
        $produks = Produk::all();
        foreach ($hargas as $harga) {
            return view('Petani.pages.home', compact('names', 'hargas', 'gudangs', 'produks'));
        }
        // $gudangs = gudang::all();

    }
    public function create_gambar(Request $request, User $user)
    {

        if ($request->hasFile('foto')) {
            $gambar = $request->file('foto');
            $newName = time() . "." . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('img'), $newName);
        }
        DB::table('users')
            ->where('id', $user->id)
            ->update([
                'gambar' => $newName
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
