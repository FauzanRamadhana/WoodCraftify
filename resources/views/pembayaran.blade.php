@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <main role="main" class="col-md-12 main-content">
            <h1 class="ml-4 mt-2 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22);">Transaction Form</h1>
            <div class="row">
                <div class="col-md-5" style="margin-left:30px">
                    <form action=" {{ route('processTransaction', ['id' => $transaction->id]) }}" method="POST"
                        enctype="multipart/form-data" style="max-width: 700px; width: 100%; margin: 0 auto; border:">
                        @csrf

                        <!-- Display Harga -->
                        <div class="row mb-3 mt-3 pt-2">
                            <div class="col">
                                <label class="form-label">Harga</label>
                                <input type="text" name="harga" class="form-control prototype-card" style="width: 640px"
                                    value=" Rp. {{ $harga }},-" readonly>
                            </div>
                        </div>

                        <!-- Pembayaran Radio Buttons -->
                        <div class="card prototype-card" style="width: 40rem; margin-left:">
                            <div class="card-body">
                                <h5 class="card-title text-process-card-title">Payment List</h5>
                                <p>Choose your payment method</p>
                                <div class="form-check my-4">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran"
                                        value="Bank BRI">
                                    <label class="form-check-label d-flex align-items-center" for="bri">
                                        <div class="col-auto">
                                            <img src="{{ asset('img/bri.png') }}" alt="bank bri" class="payment-icon">
                                        </div>
                                        <div class="col">
                                            <span class="ml-2">Bank BRI</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check my-4">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran"
                                        value="Bank BNI">
                                    <label class="form-check-label d-flex align-items-center" for="bni">
                                        <div class="col-auto">
                                            <img src="{{ asset('img/bni.png') }}" alt="bank bri" class="payment-icon">
                                        </div>
                                        <div class="col">
                                            <span class="ml-2">Bank BNI</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check my-4">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran"
                                        value="Dana">
                                    <label class="form-check-label d-flex align-items-center" for="gopay">
                                        <div class="col-auto">
                                            <img src="{{ asset('img/dana.png') }}" alt="bank bri" class="payment-icon">
                                        </div>
                                        <div class="col">
                                            <span class="ml-2">Dana</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check my-4">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran"
                                        value="Gopay">
                                    <label class="form-check-label d-flex align-items-center" for="mandrii">
                                        <div class="col-auto">
                                            <img src="{{ asset('img/logo gopay.png') }}" alt="bank bri"
                                                class="payment-icon">
                                        </div>
                                        <div class="col">
                                            <span class="ml-2">Gopay</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check mt-4 mb-2">
                                    <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran"
                                        value="Bank Mandiri">
                                    <label class="form-check-label d-flex align-items-center" for="creditCard">
                                        <div class="col-auto">
                                            <img src="{{ asset('img/mandiri.png') }}" alt="bank bri"
                                                class="payment-icon">
                                        </div>
                                        <div class="col">
                                            <span class="ml-2">Bank Mandiri</span>
                                        </div>
                                    </label>
                                </div>
                                <!-- Add more radio buttons for other payment methods if needed -->
                            </div>
                        </div>

                        <!-- Bukti Transfer Image Upload -->
                        <div class="row mt-3 pt-2">
                            <div class="col">
                                <label for="buktitf" class="form-label label-form">Upload Your evidence of
                                    transfer</label>
                                <div class="card mb-3" style="width: 17rem;">
                                    <input type="file" name="buktitf" accept="image/*" style="cursor: pointer;"
                                        onchange="previewImage(this);">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-reference-pick text-light fs-6 mb-4"
                            style="margin-left: 10px;">
                            Make A Deal
                        </button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card personal-card" style="margin-left:200px; width:300px">
                        <div class=" card-body">
                            <h5 class="card-title label-form" style="font-weight: 500;">Image Preview</h5>
                        </div>
                        <img id="previewImage" src="{{ asset('img/addevidence.png') }}" class="img-fluid"
                            alt="Image preview" style="width:300px; height:150px">
                        <div class="card-body">
                            <p class="card-text label-form">Please make sure that the picture is the exact evident
                                of your payment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
function previewImage(input) {
    var preview = document.getElementById('previewImage');
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection