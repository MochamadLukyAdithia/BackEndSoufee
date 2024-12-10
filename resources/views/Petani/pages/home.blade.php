@extends('Petani.layouts.app')

@section('title')
    SouFee | HomePage
@endsection

@section('content')
    <div class="grid grid-cols-4 gap-6" id="isi-katalog">
        @foreach ($names as $name)
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/1.jpg') }}" class="card-img-top" alt="...">
                @foreach ($hargas as $harga)
                    
              
                <div class="card-body">
                    <h5 class="card-title">{{ $name }}</h5>
                    <p class="card-text fw-bold">{{}}</p>
                    <p class="card-text">{{}}</p>
                    <p class="card-text"> </p>

                    <a href="{{route('create-permintaan')}}" class="btn" style="background-color: #1C3F3A; color: white;">Meminta</a>
                    <a href="#" class="btn btn-info">Lihat</a>
                </div>
                @endforeach
            </div>
        @endforeach
    </div>
    <div class="hidden" id="isi-riwayat">
        <h1>ini isinya riwayat</h1>
    </div>
    <div class="hidden" id="isi-penjemputan">
        <h1>ini isinya penjemputan</h1>
    </div>
@endsection
