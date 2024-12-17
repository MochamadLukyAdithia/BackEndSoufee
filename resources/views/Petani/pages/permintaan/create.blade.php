@extends('Petani.layouts.app')
@section('title')
    SouFee | Request
@endsection

@section('content')
@if ($message = Session::get('error'))
    <script>
        Swal.fire('{{ $message }}');
    </script>
@endif
    <form class="row g-3 " method="POST" action="{{ route('store-permintaan') }}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Kopi</label>
            <input type="text" name="jumlah" class="form-control" id="exampleFormControlInput1"
                placeholder="Masukkan Jumlah Kopi satuan KiloGram" required>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="alamat" rows="3"
                placeholder="Masukkan Alamat Lengkap"></textarea>
                @error('alamat')
                    {{$message}}
                @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-success w-100" type="submit">Simpan</button>
        </div>
       
        @if ($message = Session::get('error'))
            <script>
                Swal.fire('{{ $message }}');
            </script>
        @endif
    </form>
@endsection
