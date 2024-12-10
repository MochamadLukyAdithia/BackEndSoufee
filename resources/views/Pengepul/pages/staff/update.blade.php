@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('update-kualitas', $kopi->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kualitas</label>
                <input type="text" name="kualitas" class="form-control" id="exampleFormControlInput1" value="{{ $kopi->name}}">
            </div>

            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
