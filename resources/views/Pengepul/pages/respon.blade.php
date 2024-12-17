@extends('Pengepul.layouts.app')
@section('content')
{{-- @dd($respons); --}}
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Datatables</h5>
                            <a name="" id="" class="btn btn-success" href="" role="button">Create
                                New
                            </a>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Penjual</th>
                                        <th>Jumlah Kopi</th>
                                        <th>Hanphone</th>
                                        <th>Alamat</th>
                                        <th>Status Penjemputan</th>
                                        <th>Karyawan Penjemput</th>
                                        <th>Tanggal Penjemputan</th>
                                        {{-- <th  style="text-align: justify">Edit</th>
                                        <th style="text-align: justify">Delete</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($respons as $respon)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $respon->name }}</td>
                                            <td>{{ $respon->jumlah_kopi }}</td>
                                            <td>{{ $respon->handphone }}</td>
                                            <td>{{ $respon->new_alamat }}</td>
                                            <td>{{ $respon->new_status }}</td>
                                            <td>{{ $respon->nama }}</td>
                                            <td>{{ $respon->waktu_penjemputan }}</td>
                                            {{-- <td>
                                                <a href="{{ route('edit-jadwal', $status->id) }}"
                                                    class="px-2 py-1 rounded-lg text-white bg-yellow-500 hover:bg-yellow-700">Edit</a>
                                            </td> 
                                            <td>
                                                <form action="{{ route('delete-jadwal', $status->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="px-2 py-1 rounded-lg text-white bg-red-500 hover:bg-red-700"
                                                        type="submit">Delete</button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
