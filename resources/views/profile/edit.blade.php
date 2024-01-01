@extends('layouts.app')
@section('content')
{{-- hero --}}

<div id="hero" class="mt-4">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <form method="POST" action="{{ route('userUpdate') }}"
                    style="max-width: 400px; width: 100%; margin: 0 auto;">
                    @method('PUT')
                    @csrf
                    <h1 class="pb-3 pt-3 fw-bold text-center" style="font-size: 28px; margin-top: 60px">PROFIL</h1>

                    <div class="form-group">
                        <input type="hidden" name="id" value="{{ $user->id }}">
                    </div>

                    <div class="mb-3">
                        <input type="text" name="name" id="name" class="form-control rounded-form" style="height: 50px"
                            id="name" placeholder="Nama Lengkap" value="{{ $user->name }}">
                    </div>
                    <div class=" mb-4 mt-4 pt-2 mt-2">
                        <input type="email" name="email" id="email" class="form-control rounded-form"
                            style="height: 50px" id="email" placeholder="Email" value="{{ $user->email }}">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="password" name="password" id="password" class="form-control rounded-form"
                            style="height: 50px" id="password" placeholder="Password">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="form-control rounded-form" style="height: 50px" id="password_confirmation"
                            placeholder="Konfirmasi Password">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="text" name="phone" id="phone" class="form-control rounded-form"
                            style="height: 50px" id="phone" placeholder="Nomor Handphone" value="{{ $user->phone }}">
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="text" name="address" id="address" class="form-control rounded-form"
                            style="height: 50px" id="address" placeholder="Alamat" value="{{ $user->address }}">
                    </div>
                    <button type="submit" class="btn btn-custom rounded-form mt-1 fw-bold"
                        style="width: 100%; height: 60px">UPDATE</button>
                </form>
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