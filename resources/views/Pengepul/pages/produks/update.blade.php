@extends('Pengepul.layouts.app')
@section('content')
    <main class="main" id="main">
        <form class="row g-3" method="POST" action="{{ route('update-produk', $produk->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Input Nama Produk -->
            <div class="mb-3">
                <label for="namaProduk" class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control" id="namaProduk" placeholder="Nama produk"
                    value="{{ $produk->nama }}" required>
                @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Input Gambar Produk -->
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Produk</label>
                <input type="file" name="gambar" id="gambar"
                    class="form-control file:mr-4 file:rounded-lg file:border-0 file:px-4 file:py-2 file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                    accept="image/*">
                <div class="mt-3">
                    <img src="{{ asset('images/' . $produk->gambar) }}" alt="Gambar produk" class="w-36 h-36">
                </div>
                @error('gambar')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol Simpan -->
            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
