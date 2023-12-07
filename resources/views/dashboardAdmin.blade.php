@extends('layouts.adminLayout')
@section('content')
<div id="hero">
    <div class="container">
        <div class="row d-flex align-content-center align-items-center">
            <div class="col-md-12 hero-content">
                <h1 class="fw-bold" style="font-size: 50px">Laman Admin</h1>
                <a href="daftarUser"><button class=" btn btn-light btn-lg mt-5 mx-4 px-5"
                        style="border-radius: 15px">USERS</button></a>
                <a href="daftarKustomisasi"><button class=" btn btn-light btn-lg mt-5 mx-4 px-5"
                        style="border-radius: 15px">KUSTOMISASI</button></a>
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