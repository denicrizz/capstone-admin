
@extends('layout-aut.admin')

@section('main')
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                    <img src="assets/img/logo.png" alt="">
                    <span class="d-none d-lg-block">Artistik Kesenian</span>
                </a>
                </div><!-- End Logo -->

                <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                    <p class="text-center small">Masukkan Detail Akun</p>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                     @endif
                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="col-12">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                        <div class="invalid-feedback">Masukkan Nama Kamu</div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Masukkan Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                        <div class="invalid-feedback">Masukkan Email</div>
                    </div>

                    {{-- <div class="col-12">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Pilih Username</div>
                        </div>
                    </div> --}}

                    <div class="col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">Masukkan Password</div>
                    </div>

                    {{-- <div class="col-12">
                        <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div> --}}
                    <div class="col-12">
                        {{-- <p class="small mb-0">Already have an account? <a href="pages-login.html">Log in</a></p> --}}
                        <button class="btn btn-primary">Register</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </div>
@endsection

