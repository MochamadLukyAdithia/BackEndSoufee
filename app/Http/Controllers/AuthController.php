<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  public function index() {
    return view('auth.login');
  }
    // public function login_proses(Request $request) { 

    //   $request->validate([
    //     'email' => 'required|email',
    //     'password' => 'required|min:6',
    //   ]);
    //   $request->session()->regenerate();
      

    //   if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
    //     if($request->user()->role === 'pengepul') {
    //       return redirect()->route('homepage-pengepul');
    //     }
    //     else {
    //       return redirect()->route('homepage-petani');
    //     }
    //   } else {
    //     return redirect()->route('login')->with('error', 'Email atau password salah!');
    //   }  // Attempt to log in the user
    //   // If successful, redirect to the dashboard route
    //   // If not, redirect back to the login page with an error message
      
    // }

    public function login_proses(Request $request) { 
      // Validasi input
      $credentials = $request->validate([
          'email' => 'required|email',
          'password' => 'required|min:6',
      ]);
  
      // Proses autentikasi
      if (Auth::attempt($credentials)) {
          // Regenerasi session untuk keamanan
          $request->session()->regenerate();
  
          // Redirect berdasarkan role user
          $role = Auth::user()->role;
          if ($role === 'pengepul') {
              return redirect()->route('homepage-pengepul');
          } elseif ($role === 'petani') {
              return redirect()->route('homepage-petani');
          }
  
          // Jika role tidak dikenali, logout dan kembali ke login
          Auth::logout();
          return redirect()->route('login')->with('error', 'Role tidak dikenali. Silakan hubungi admin.');
      }
  
      // Jika autentikasi gagal
      return redirect()->route('login')->with('error', 'Email atau password salah!');
  }
  
    public function logout(){
      Auth::logout();
      return redirect()->route('login');
    }
    public function register(){ 
      return view('auth.register');
    }
    public function register_proses(Request $request){
      // dd($request->all());
      $request->validate([
        'name' =>'required|min:3',
        'email' =>'required|email|unique:users',
        'password' =>'required|min:6',
        'role' =>'required',
        // 'telephone' =>'required',
      ]);
      User::create([
        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
        // 'telephone =' => $request->telephone,
        'password' => Hash::make($request->password),
      ]);
    }
}
