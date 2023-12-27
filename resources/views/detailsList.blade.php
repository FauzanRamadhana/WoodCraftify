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

                @if ($kustomisasi->status == 1)
                <h1>
                    ini konten status 1
                </h1>
                @elseif ($kustomisasi->status == 2)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 10%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
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
                    <div class="progress-bar" style="width: 20%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-process-card-title">Please Wait</h5>
                            <p class="card-text text-justify text-process-card my-4 mx-4">Your custom is being checked
                                by admin. Please wait and come back in some minutes.</p>
                            <a href="#" class="btn btn-process-one text-light px-4">Yes</a>
                            <a href="#" class="btn btn-process-second text-light px-4">Cancel</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status== 4)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 20%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-process-card-title">Please Wait</h5>
                            <p class="card-text text-justify text-process-card my-4 mx-4">Your custom is being checked
                                by admin. Please wait and come back in some minutes.</p>
                            <a href="#" class="btn btn-process-one text-light px-4">Yes</a>
                            <a href="#" class="btn btn-process-second text-light px-4">Cancel</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status== 5)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 80px">
                    <div class="progress-bar" style="width: 20%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto pb-3" style="width: 60rem;">
                        <div class="card-body">
                            <h5 class="card-title text-process-card-title ml-4 mt-2">Contact Woodcraftify
                                Below</h5>
                            <p class="card-text text-justify text-process-card my-3 mx-3">You will be a taken to a 3rd
                                party application for further discussion. You can discuss customization in more detail
                                including prices. After reaching an agreement, you can return to this menu to procees to
                                payment</p>
                            <a href="#" class="btn btn-process-one text-light px-4 ml-4">Line</a>
                            <a href="#" class="btn btn-process-one text-light px-4 ml-4">Telegram</a>
                            <a href="#" class="btn btn-process-one text-light px-4 ml-4">Whatsapp</a>
                        </div>
                    </div>
                </div>
                @elseif ($kustomisasi->status== 6)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 20%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="row">
                    <div class="col-md-8 d-flex mt-5 justify-content-center">
                        <div class="card process-card mx-auto" style="width: 35rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title text-process-card-title">Please Wait</h5>
                                <p class="card-text text-justify text-process-card my-4 mx-4">Your custom is being
                                    checked by admin.
                                    Please wait and come back in some minutes.</p>
                                <a href="#" class="btn btn-process-one text-light px-4">Yes</a>
                                <a href="#" class="btn btn-process-second text-light px-4">Cancel</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex mt-5 justify-content-center">
                        <div class="card process-card mx-auto" style="width: 25rem;">
                            <div class="card-body text-center">
                                <h5 class="card-title text-process-card-title">Please Wait</h5>
                                <p class="card-text text-justify text-process-card my-4 mx-4">Your custom is being
                                    checked by admin.
                                    Please wait and come back in some minutes.</p>
                                <a href="#" class="btn btn-process-one text-light px-4">Yes</a>
                                <a href="#" class="btn btn-process-second text-light px-4">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>

                @elseif ($kustomisasi->status== 7)
                <div class="progress my-2 mt-4" role="progressbar" aria-label="Example 20px high" aria-valuemin="0"
                    aria-valuemax="100" style="height: 10px; margin-left: 80px; margin-right: 100px">
                    <div class="progress-bar" style="width: 20%; background:#443D22"></div>
                </div>
                <span style="display: inline-block; margin-left:145px;">Reference</span>
                <span style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced Custom</span>
                <span id="discussButton" class="toggleActions btn" style="margin-left: 45px">Discuss</span>
                <span id="prototypeButton" class="toogleActions btn"
                    style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
                <span style="display: inline-block; margin-left:110px">Deal</span>
                <div class="col-md-12 d-flex mt-5 justify-content-center">
                    <div class="card process-card mx-auto" style="width: 25rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-process-card-title">tujuh</h5>
                            <p class="card-text text-justify text-process-card my-4 mx-4">Your custom is being checked
                                by admin. Please wait and come back in some minutes.</p>
                            <a href="#" class="btn btn-process-one text-light px-4">Yes</a>
                            <a href="#" class="btn btn-process-second text-light px-4">Cancel</a>
                        </div>
                    </div>
                </div>
                @else
                @endif
            </div>
        </main>
    </div>
</div>
@endsection