@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('update-gudang', $gudang->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kapasitas</label>
                <input type="text" name="kapasitas" class="form-control" id="exampleFormControlInput1" value="{{ $gudang->kapasitas}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3">{{$gudang->deskripsi}}</textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
