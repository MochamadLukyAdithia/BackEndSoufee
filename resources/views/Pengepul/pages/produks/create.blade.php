@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('store-produk') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Kopi Arabika">
            </div>
            <div>
                    <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700 dark:text-white">
                        Gambar Produk
                    </label>
                    <input type="file" name="gambar" id="gambar" "
                        class="w-full file:mr-4 file:rounded-lg file:border-0 file:px-4 file:py-2 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                        required />
                </div>

            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
