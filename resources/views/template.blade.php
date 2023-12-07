@extends('layouts.app')
@section('content')
<div id="hero">
    <div class="container">
        <div class="row d-flex align-content-center align-items-center">
            <div class="col-md-12 mt-4 text-center text-light" style="">
                <h1 class="fw-bold mb-4 pb-2" style="font-size: 30px">PILIH TEMPLATE</h1>
            </div>
            <div class="d-flex col-md-4 justify-content-center mb-4">
                <div class="card" style="width: 17rem;">
                    <img class="card-img-top" src="/img/wood1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Timeless Treasure Table</h5>
                        <a href="#" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <div class="d-flex col-md-4 justify-content-center mb-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="/img/wood2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Originally Throne</h5>
                        <a href="#" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <div class="d-flex col-md-4 justify-content-center mb-4">
                <div class="card" style="width: 17rem;">
                    <img class="card-img-top" src="/img/wood3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Original Elegance Table</h5>
                        <a href="#" class="btn btn-primary">Pilih</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center text-light" style="">
                <button class="px-5 btn btn-light btn-lg" style="border-radius: 15px"
                    onclick="window.location='{{ route('kustomisasi') }}'">REFERENSI PRIBADI</button>
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