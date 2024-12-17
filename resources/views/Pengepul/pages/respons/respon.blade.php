@extends('Pengepul.layouts.app')
@section('content')
    {{-- @foreach ($staffs as $staff)
        @dd($staff)
    @endforeach --}}
    <main class="main" id="main">
        <form class="row g-3 " method="POST" action="{{ route('kirim_respon') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                <input type="datetime-local" name="tanggal" class="form-control" id="exampleFormControlInput1"
                    placeholder="Masukkan Tanggal" required>
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Select karyawan</label>
                <select id="disabledSelect" class="form-select" name="karyawan">
                    @foreach ($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Select status</label>
                <select id="disabledSelect" class="form-select" name="status">
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}">{{ $status->status_penjemputan }}</option>
                    @endforeach
                </select>
            </div>
            <input type="text" name="id" value="{{$i}}" hidden>


            <div class="col-12">
                <button class="btn btn-success w-100" type="submit">Simpan</button>
            </div>
        </form>
    </main>
@endsection
