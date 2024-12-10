@extends('partials.main')
@section('title', 'Soufee | Login')
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ 'img/logo.png' }}" alt="">
                                    
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login ke Akunmu</h5>
                                        <p class="text-center small">Masukkan username & password untuk login</p>
                                    </div>
                                    {{-- @include('_message') --}}
                                    <form class="row g-3 " method="POST"
                                        action="{{ route('login-proses') }}">

                                        @csrf
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="email" class="form-control" id="yourEmail"
                                                    required>
                                                <div class="invalid-feedback">Please enter your Email.</div>
                                            </div>
                                        </div>
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword">
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        @error('username')
                                            <p>{{ $message }}</p>
                                        @enderror


                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Ingat aku</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0 ">Belum memiliki akun? <a
                                                    href="{{ route('register') }}"><span class="text-blue-500">Buat akun sekarang</span></a></p>
                                        </div>
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                        @if ($message = Session::get('error'))
                                            <script>
                                                Swal.fire('{{ $message }}');
                                            </script>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ 'assets/vendor/apexcharts/apexcharts.min.js' }}"></script>
    <script src="{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
    <script src="{{ 'assets/vendor/chart.js/chart.umd.js' }}"></script>
    <script src="{{ 'assets/vendor/echarts/echarts.min.js' }}"></script>
    <script src="{{ 'assets/vendor/quill/quill.js' }}"></script>
    <script src="{{ 'assets/vendor/simple-datatables/simple-datatables.js' }}"></script>
    <script src="{{ 'assets/vendor/tinymce/tinymce.min.js' }}"></script>
    <script src="{{ 'assets/vendor/php-email-form/validate.js' }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ 'assets/js/main.js' }}"></script>
   
@endsection
