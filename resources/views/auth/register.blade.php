@extends('layouts.login')
@section('content')
<div id="hero">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('register') }}"
                    style="max-width: 400px; width: 100%; margin: 0 auto;">
                    @csrf
                    <h1 class="pb-4 mb-2 fw-bold" style="font-size: 28px;">SIGN UP</h1>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control rounded-form" style="height: 50px" id="name"
                            placeholder="Nama Lengkap">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="email" name="email" class="form-control rounded-form" style="height: 50px"
                            id="email" placeholder="Email">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="password" name="password" class="form-control rounded-form" style="height: 50px"
                            id="password" placeholder="Password">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="password" name="password_confirmation" class="form-control rounded-form"
                            style="height: 50px" id="password_confirmation" placeholder="Konfirmasi Password">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="text" name="phone" class="form-control rounded-form" style="height: 50px"
                            id="phone" placeholder="Nomor Handphone">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="text" name="address" class="form-control rounded-form" style="height: 50px"
                            id="address" placeholder="Alamat">
                    </div>
                    <button type="submit" class="btn btn-custom rounded-form mt-2 fw-bold"
                        style="width: 100%; height: 60px">SIGN UP</button>
                    <p class="mt-4 pt-2">Have an account? <a href="{{ route('login') }}" class="fw-bold">Login</a></p>
                </form>
            </div>
            <div class="col-md-6 bg-login">
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <div class="row d-flex align-content-center align-items-center">
            <h1 class="my-4 fw-bold" style="font-size: 22px">Copyright @ 2023. All rights reserved</h1>
        </div>
    </div>
</div>
@endsection