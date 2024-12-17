@extends('Pengepul.layouts.app')
@section('title')
    Soufee | Permintaan
@endsection
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Data Permintaan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            @if ($message = Session::get('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: '{{ $message }}',
                        confirmButtonText: 'Ok'
                    });
                </script>
            @endif
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
                                        <th>Jumlah Kopi</th>
                                        <th>Alamat</th>
                                        <th>Handphone</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Action</th>
                                        {{-- <th  style="text-align: justify">Edit</th>
                                        <th style="text-align: justify">Delete</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permintaans as $permintaan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $permintaan->jumlah_kopi }}</td>
                                            <td>{{ $permintaan->new_alamat }}</td>
                                            <td>{{ $permintaan->handphone }}</td>
                                            {{-- <td>{{ $permintaan->status }}</td> --}}

                                            <td>
                                                <a href="{{ route('respond_to_permintaan', $permintaan->id) }}"
                                                    class="px-2 py-1 rounded-lg text-white bg-lime-600 hover:bg-lime-700">
                                                    Atur
                                                    Jadwal
                                                </a>
                                            </td>
                                            {{-- <td>
                                                <form action="{{ route('delete-gudang', $kopi->id) }}" method="POST">
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
