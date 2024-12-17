@extends('Petani.layouts.app')
@section('title')
    SouFee | HomePage
@endsection
@section('content')
    <div class="grid-cols-4 gap-6 flex" id="isi-katalog">
        {{-- @dd($gudangs[0]->kapasitas) --}}
        @foreach ($produks as $produk)
            {{-- @foreach ($hargas as $harga) --}}
                @foreach ($names as $name)
                    @foreach ($gudangs as $gudang)
                        <div class="card max-h-[500px]" style="max-width: 18rem;">
                            <img src="{{ asset('images/'. $produk->gambar) }}" class="card-img-top max-h-60" alt="...">


                            <div class="card-body">
                                <h5 class="card-title">{{ $name }}</h5>
                                <p class="card-text fw-bold">{{ $produk->nama }}</p>
                                <p class="card-text  fw-bold mb-2">Harga : {{ $produk->harga }}</p>
                                {{-- <p class="card-text  mb-2"> Kualitas : {{ $harga->kulitas_kopi }}</p> --}}
                                {{-- <p class="card-text mb-2">Kapasitas Gudang : </p> --}}
                                Kapasitas Gudang
                                @php
                                    // $persentase =
                                    //     $gudang->max_kapasitas / ($gudang->max_kapasitas - $gudang->kapasitas);
                                    $vn = ($gudang->kapasitas / $gudang->max_kapasitas) * 100;
                                @endphp
                                <div class="progress mb-3 mt-3" role="progressbar" aria-label="Animated striped example"
                                    aria-valuenow="{{ $gudang->kapasitas }}" aria-valuemin="0"
                                    aria-valuemax="{{ $gudang->max_kapasitas }}">




                                    <div class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: {{ $vn }}%">{{ $gudang->kapasitas }}</div>
                                </div>
                                <p class="card-text"> </p>

                                <a href="{{ route('create-permintaan') }}" class="btn w-36 mr-4"
                                    style="background-color: #1C3F3A; color: white;">Jual</a>
                                {{-- <a href="#" class="btn btn-info w-20">Lihat</a> --}}
                            </div>

                        </div>
                    @endforeach
                {{-- @endforeach --}}
            @endforeach
        @endforeach
    </div>

    <div class="hidden" id="isi-riwayat">
        <h1>ini isinya riwayat</h1>
    </div>
    <div class="hidden" id="isi-penjemputan">
        <h1>ini isinya penjemputan</h1>
    </div>
@endsection
