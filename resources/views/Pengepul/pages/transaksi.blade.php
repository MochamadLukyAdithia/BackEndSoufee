@extends('Pengepul.layouts.app')
@section('content')
    <main id="main" class="main">
{{-- @dd($transaksis); --}}
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
                        
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Penjual</th>
                                        <th>Jumlah Kopi</th>
                                        <th>Harga</th>
                                        <th>Total Harga</th>
                                        <th>Kualitas Kopi</th>
                                        <th>Metode Pembayaran</th>
                                        <th>Proses</th>
                                        <th>Selesai</th>
                                        {{-- <th  style="text-align: justify">Edit</th>
                                        <th style="text-align: justify">Delete</th> --}}
                                    </tr>
                                </thead>
                                <tbody >
                                    @foreach ($transaksis as $transaksi)
                                        <tr >
                                            <td class="bg-success-subtle">{{ $loop->iteration }}</td>
                                            <td  class="bg-success-subtle">{{ $transaksi->name }}</td>
                                            <td class="bg-success-subtle">{{ $transaksi->jumlah_kopi }}</td>
                                            <td class="bg-success-subtle">{{ $transaksi->harga }}</td>
                                            <td class="bg-success-subtle">{{ $transaksi->harga * $transaksi->jumlah_kopi }}</td>
                                            <td class="bg-success-subtle">{{ $transaksi->kualitas_kopi }}</td>
                                            <td class="bg-success-subtle">{{ $transaksi->metode }}</td>
                                            <td class="bg-success-subtle">{{ $transaksi->created_at }}</td>
                                            <td class="bg-success-subtle">{{ $transaksi->updated_at }}</td>
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
