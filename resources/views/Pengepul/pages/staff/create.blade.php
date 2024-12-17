@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('store-staff') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan Nama">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Handphone</label>
                <input type="text" name="handphone" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan Nomor Handphone">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan Alamat">
            </div>
            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
            @if ($message = Session::get('success'))
                <script>
                    Swal.fire('{{ $message }}');
                </script>
            @endif
        </form>
    </main>
@endsection
