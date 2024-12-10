@extends('Pengepul.layouts.app')
@section('content')
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
                            <a name="" id="" class="btn btn-success" href="{{route('create-user')}}" role="button">Create
                                New
                            </a>
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Role</th>
                                        <th>Gambar</th>
                                        <th  style="text-align: justify">Edit</th>
                                        <th style="text-align: justify">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{$user->gambar}}</td>
                                            <td>
                                                <a href="{{ route('edit-user', $user->id) }}"
                                                    class="px-2 py-1 rounded-lg text-white bg-yellow-500 hover:bg-yellow-700">Edit</a>
                                            </td> 
                                            <td>
                                                <form action="{{ route('delete-user', $user->id) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="px-2 py-1 rounded-lg text-white bg-red-500 hover:bg-red-700"
                                                        type="submit">Delete</button>
                                                </form>
                                            </td>
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
