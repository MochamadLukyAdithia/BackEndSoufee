@extends('Pengepul.layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="mb-4 text-center">Form untuk Tabel: {{ $tableName }}</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/submit/{{ $tableName }}" method="get" class="row g-3">
        @csrf
        @foreach ($columns as $column)
            <div class="col-md-6">
                <label for="{{ $column }}" class="form-label">
                    {{ ucfirst(str_replace('_', ' ', $column)) }}
                </label>
                <input type="text" class="form-control" id="{{ $column }}" name="{{ $column }}" placeholder="Masukkan {{ $column }}">
            </div>
        @endforeach

        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection
