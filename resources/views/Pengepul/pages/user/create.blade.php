@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('store-user') }}">

            @csrf
       
        
            <div class="mb-3" >
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Nama">
            </div>
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Email">
            </div>
        
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan Password">
            </div>
        
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">select role</label>
                <select id="disabledSelect" class="form-select" name="role">
                  <option value="pengepul">Pengepul</option>
                  <option value="petani">Petani</option>
                </select>
              </div>
            

            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
