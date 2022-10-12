@extends('layouts.simple')

@section('content')
    <div class="bg-image" style="background-image: url('{{ asset('media/photos/bg-login.jpg') }}');">
        <div class="row g-0">
        <!-- Main Section -->
            <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                <div class="p-3 w-100">
                    <div class="mb-3 text-center">
                        <a class="link-fx fw-bold fs-1" href="index.html">
                        <span class="text-dark">PPK</span><span class="text-danger">IJK</span>
                        </a>
                        <p class="text-uppercase fw-bold fs-sm text-muted">Sign In</p>
                    </div>
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-8 col-xl-6">
                            <form class="js-validation-signin" action="be_pages_auth_all.html" method="POST">
                                <div class="py-3">
                                    <div class="mb-4">
                                        <input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="login-username" placeholder="Username">
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="login-password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <a href="/dashboard" type="submit" class="btn w-100 btn-lg btn-hero btn-danger">
                                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                <div class="p-3">
                    <p class="display-4 fw-bold text-dark mb-3">
                        Welcome Back
                    </p>
                    <p class="fs-lg fw-semibold text-white-75 mb-0">
                        Copyright &copy; <span data-toggle="year-copy"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
