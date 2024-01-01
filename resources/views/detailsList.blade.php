@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content">
            <div class="d-flex align-items-center" style="margin-left: 30px">
                <a href="/daftarKustomisasiUser"><img src=" {{ asset('img/arrow_back.png') }}" alt="Image"
                        style="width: 40px; height: 40px; margin-right: 30px;"></a>
                <h1 class="fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22);">
                    {{ $kustomisasi->name }}
                </h1>
            </div>
            <div class="" style="">
                @if ($kustomisasi->status == 0)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 0%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:80px; margin-right: 10px;">Bill</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto" style="width: 30rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-process-card-title">Sorry, your customization is rejected!</h5>
                            <p class="card-text text-justify text-process-card my-4 mx-4">{{ $kustomisasi->reasoning }}
                            </p>
                            <a href="/daftarKustomisasiUser" class="btn btn-process-one text-light px-4">Yes</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status == 1)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 10%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:80px; margin-right: 10px;">Bill</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-process-card-title">Please Wait</h5>
                            <p class="card-text text-justify text-process-card my-4 mx-4">Your custom is being checked
                                by admin. Please wait and come back in some minutes.</p>
                            <a href="/daftarKustomisasiUser" class="btn btn-process-one text-light px-4">Yes</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status == 2)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 29%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:80px; margin-right: 10px;">Bill</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-process-card-title">Do You Want To Continue</h5>
                            <p class="card-text text-justify text-process-card my-4 mx-4">You need to prepare your
                                custom in
                                detail. This stage may take some time also it requires you to complete it to the end</p>
                            <a href="{{ route('kustomisasiAdvance', ['id' => $kustomisasi->id]) }}"
                                class="btn btn-process-one text-light px-4">Yes</a>
                            <a href="#" class="btn btn-process-second text-light px-4">Cancel</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status == 3)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 47%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:80px; margin-right: 10px;">Bill</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-process-card-title">Please Wait</h5>
                            <p class="card-text text-justify text-process-card my-4 mx-4">Your custom is being checked
                                by admin. Please wait and come back in some minutes.</p>
                            <a href="/daftarKustomisasiUser" class="btn btn-process-one text-light px-4">Yes</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status== 4)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 64%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:80px; margin-right: 10px;">Bill</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto pb-3" style="width: 60rem;">
                        <div class="card-body">
                            <h5 class="card-title text-process-card-title ml-4 mt-2">Contact Woodcraftify
                                Below</h5>
                            <p class="card-text text-justify text-process-card my-3 mx-3">You will be a taken to a
                                3rd
                                party application for further discussion. You can discuss customization in more
                                detail
                                including prices. After reaching an agreement, you can return to this menu to
                                procees to
                                payment</p>
                            <a href="https://line.me/ti/p/cRVdD3yoH8" class="btn btn-process-one text-light px-4 ml-4"
                                target="_blank">Line</a>
                            <a href="https://t.me/ihsanmuhammadi24" class="btn btn-process-one text-light px-4 ml-4"
                                target="_blank">Telegram</a>
                            <a href="https://wa.me/6281224830995" class="btn btn-process-one text-light px-4 ml-4"
                                target="_blank">Whatsapp</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status== 5)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 80px">
                    <div class="progress-bar" style="width: 78%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:80px; margin-right: 10px;">Bill</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="row">
                    <div class="col-md-7 d-flex mt-5 justify-content-center">
                        <div class="card prototype-card"
                            style="width: 40rem; margin-left: 70px; background-color: #F4F4F4; border: 2px solid #D1D1D1; border-radius: 15px;">
                            <div class="card-body text-center">
                                <h5 class="card-title text-process-card-title my-4">Invoice Details</h5>

                                <div class="bill-details">
                                    <p class="my-2"><strong>Product:</strong> {{ $kustomisasi->name }}</p>
                                    <p class="my-2"><strong>Quantity:</strong> {{ $kustomisasi->quantity }}</p>
                                    <p class="my-2"><strong>Dimensions:</strong> {{ $kustomisasi->length }} cm x
                                        {{ $kustomisasi->width }} cm x {{ $kustomisasi->height }} cm</p>
                                    <p class="my-2"><strong>Special Notes:</strong> {{ $kustomisasi->notes }}</p>
                                    <p class="mt-3" style="font-size: 1.2em;"><strong>Total Price:</strong> <span
                                            style="color: #2E3A87;">Rp. {{ $kustomisasi->harga }},-</span></p>
                                </div>
                                <div class="mt-4">
                                    <p class="text-success mt-2">Thank you for choosing us!</p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="col-md-4 d-flex mt-5 justify-content-center">
                        <div class="card prototype-card">
                            <div class="card-body">
                                <h5 class="card-title label-form" style="font-weight: 500;">
                                    {{ $kustomisasi->name }}
                                </h5>
                            </div>
                            <img src="{{ asset('storage/' . $kustomisasi->image) }}" class="card-img-top mx-auto"
                                alt="{{ $kustomisasi->name }}" style="width: 300px; height: 200px">
                            <div class="card-body">
                                <p class="card-text"
                                    style="color: var(--M3-sys-light-on-surface-variant, #49454F); font-size: 13px">
                                    {{ $kustomisasi->description }}</p>
                            </div>
                        </div>
                    </div>
                    <form id="statusUpdateForm" action="{{ route('updateBillStatus', ['id' => $kustomisasi->id]) }}"
                        method="POST">
                        @csrf
                        <button type="submit" class="btn btn-reference-pick text-light fs-6"
                            style="margin-left: 260px; margin-top: 20px">
                            Make A Deal
                        </button>
                    </form>
                </div>
            </div>
            @else
            @endif
    </div>
    </main>
</div>
</div>
@endsection