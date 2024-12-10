@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('update-user', $user->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ $user->name}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput1" value="{{ $user->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Role</label>
                <input type="text" name="role" class="form-control" id="exampleFormControlInput1" value="{{ $user->role}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Gambar</label>
                <input type="file" enctype="" name="gambar" class="form-control" id="exampleFormControlInput1" value="{{ $user->role}}">
            </div>
            

            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
