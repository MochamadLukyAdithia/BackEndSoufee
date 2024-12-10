@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('store-kualitas') }}">

            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kualitas Kopi</label>
                <input type="text" name="kualitas" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan Kualitas">
            </div>
            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
