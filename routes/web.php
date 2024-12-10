<?php

use App\Http\Controllers\JadwalController;
use App\Models\User;
use App\Http\Middleware\CekRole;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\GudangController;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Controllers\KualitasKopiController;
use App\Http\Controllers\PermintaanController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StatusPenjemputanController;
use vendor\laravel\framework\src\Illuminate\Database\Eloquent\Suport\Traits\InteractsWithData;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login',[AuthController::class, 'index'])->name('login');
Route::post('/login/proses',[AuthController::class, 'login_proses'])->name('login-proses');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::get('/register/proses',[AuthController::class, 'register_proses'])->name('register-proses');
Route::get('/form-{tableName}', [UserController::class, 'showForm']);



Route::middleware('auth')->group(function () {
    Route::get('/homepage-pengepul',[UserController::class, 'index'])->middleware('cekrole:pengepul')->name('homepage-pengepul');
    Route::get('/homepage-petani',[UserController::class, 'homepage_petani'])->middleware('cekrole:petani')->name('homepage-petani');
});
Route::middleware('cekrole:pengepul')->group(function (){
    Route::get('/gudang',[GudangController::class, 'index'])->name('gudang');
    Route::get('/users',[UserController::class, 'show_user'])->name('users');
    Route::get('/staffs',[StaffController::class, 'index'])->name('staffs');
    Route::get('/kopis',[KualitasKopiController::class, 'index'])->name('kopis');
    Route::get('/status',[StatusPenjemputanController::class, 'index'])->name('status');
    
    // Gudang
    Route::get('/create-gudang',[GudangController::class, 'create'])->name('create-gudang');
    Route::post('/store-gudang',[GudangController::class, 'store'])->name('store-gudang');
    Route::get('/edit-gudang-{gudang}',[GudangController::class, 'edit'])->name('edit-gudang');
    // Route::get("/edit-user/{user}", [UserController::class, "edit"])->name("edit-user");
    Route::put("/update-gudang-{gudang}", [GudangController::class, "update"])->name("update-gudang");
    Route::delete("/delete-gudang-{gudang}", [GudangController::class, "delete"])->name("delete-gudang");
    
    // User
    Route::get('/create-user',[UserController::class, 'create'])->name('create-user');
    Route::post('/store-user',[UserController::class, 'store'])->name('store-user');
    Route::get('/edit-user-{user}',[UserController::class, 'edit'])->name('edit-user');
    // Route::get("/edit-user/{user}", [UserController::class, "edit"])->name("edit-user");
    Route::put("/update-user-{user}", [UserController::class, "update"])->name("update-user");
    Route::delete("/delete-user-{user}", [UserController::class, "delete"])->name("delete-user");
    
    //Kualitas
    Route::get('/create-kualitas',[KualitasKopiController::class, 'create'])->name('create-kualitas');
    Route::post('/store-kualitas',[KualitasKopiController::class, 'store'])->name('store-kualitas');
    Route::get('/edit-kualitas-{kualitas}',[KualitasKopiController::class, 'edit'])->name('edit-kualitas');
    Route::put("/update-kualitas-{kualitas}", [KualitasKopiController::class, "update"])->name("update-kualitas");
    Route::delete("/delete-kualitas-{kualitas}", [KualitasKopiController::class, "delete"])->name("delete-kualitas");
    
    //Staff
    Route::get('/create-staff',[StaffController::class, 'create'])->name('create-staff');
    Route::post('/store-staff',[StaffController::class, 'store'])->name('store-staff');
    Route::get('/edit-staff-{staff}',[StaffController::class, 'edit'])->name('edit-staff');
    Route::put("/update-staff-{staff}", [StaffController::class, "update"])->name("update-staff");
    Route::delete("/delete-staff-{staff}", [StaffController::class, "delete"])->name("delete-staff");
    
    
    Route::post('/store-jadwal',[JadwalController::class, 'store'])->name('store-jadwal');
    Route::post('/store-kopis',[KualitasKopiController::class, 'store'])->name('store-kopis');
    Route::post('/store-staff',[StaffController::class, 'store'])->name('store-staff');
    
});
Route::middleware('cekrole:petani')->group(function (){
    Route::get('/create-permintaan',[PermintaanController::class, 'create'])->name('create-permintaan');
    Route::post('/store-permintaan',[PermintaanController::class, 'store'])->name('store-permintaan');
    // Route::get('/homepage-pengepul',[UserController::class, 'index'])->name('homepage-pengepul');
    
});