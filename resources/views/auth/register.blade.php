@extends('partials.main')
@section('title', 'Soufee | Daftar')
@section('content')
    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="img/logo.png" alt="">
                                    
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>
                                    {{-- @include('_message') --}}

                                    <form class="row g-3 needs-validation" action="{{ route('register-proses') }}"
                                        method="get" id="daftar-penge">
                                        @csrf
                                        <!-- Button Group -->
                                        <div class="col-12 d-flex justify-content-center mb-3">
                                            <div class="btn-group" role="group" aria-label="Role selection">
                                                <input type="radio" class="btn-check" name="role" id="btnPengepul"
                                                    value="pengepul" autocomplete="off" required>
                                                <label class="btn btn-outline-success" for="btnPengepul">Pengepul</label>

                                                <input type="radio" class="btn-check" name="role" id="btnPetani"
                                                    value="petani" autocomplete="off">
                                                <label class="btn btn-outline-success" for="btnPetani">Petani</label>
                                            </div>
                                        </div>

                                        <!-- Name Field -->
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="yourName"
                                                value="{{ old('name') }}">
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                            @error('name')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Email Field -->
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                value="{{ old('email') }}" required>
                                            <div class="invalid-feedback">Please enter a valid Email address!</div>
                                            @error('email')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Telephone Field -->
                                        {{-- <div class="col-12">
                                            <label for="telephone" class="form-label">Your Telephone</label>
                                            <input type="text" name="telephone" class="form-control" id="yourTelephone"
                                                value="{{ old('telephone') }}" required>
                                            <div class="invalid-feedback">Please enter a valid Email address!</div>
                                            <div class="invalid-feedback">Please enter a valid Telephone</div>
                                            @error('telephone')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div> --}}


                                        <!-- Password Field -->
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword"
                                                required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                            @error('password')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <!-- Terms and Conditions -->
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">
                                                    I agree and accept the <a href="#">terms and conditions</a>
                                                </label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12">
                                            <button class="btn bg-[#1C3F3A] w-100 text-white w-100" type="submit">Create Account</button>
                                        </div>

                                        <!-- Already Registered -->
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a href="{{ route('login')}}"><span class="text-blue-500">Log
                                                    in</span></a></p>
                                        </div>
                                    </form>


                                </div>
                            </div>



                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->
@endsection
