@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content">
            <!-- Your content goes here -->
            <h1 class="ml-4 mt-2 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22); margin-left:25px">
                Catalogue Customization
            </h1>
            <!--  -->
            <div class="row">
                <div class="col-md-7" style="margin-left: 25px">
                    <form action="{{ route('referensiUser') }}" method="POST" enctype="multipart/form-data"
                        style="max-width: 700px; width: 100%; margin: 0 auto; border:">
                        @csrf
                        <input type="hidden" name="name" value="{{ $reference->name }}">
                        <input type="hidden" name="image" value="{{ $reference->image }}">
                        <input type="hidden" name="description" value="{{ $reference->description }}">

                        <div class="row mb-3 mt-3 pt-2">
                            <div class="col">
                                <label class="form-label label-form ml-3">Fill How Many Do You Want</label>
                                <input type=" number" name="quantity" class="form-control rounded-form"
                                    style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="quantity"
                                    placeholder="Quantity" required>
                            </div>
                        </div>

                        <div class="row mb-3 mt-3 pt-2">
                            <div class="col">
                                <label class="form-label ml-3 label-form">Fill What Color Do You Want</label>
                                <input type="text" name="color" class="form-control rounded-form"
                                    style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="color"
                                    placeholder="Color" required>
                            </div>
                        </div>

                        <div class="row mb-3 mt-3 pt-2">
                            <h1 class="mb-3 ml-3 label-form">Fill In The Dimensions You Want (In centimeter)</h1>
                            <div class="col">
                                <input type="number" name="length" class="form-control rounded-form"
                                    style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="length"
                                    placeholder="Length" required>
                            </div>
                            <div class="col">
                                <input type="number" name="width" class="form-control rounded-form"
                                    style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="width"
                                    placeholder="Width" required>
                            </div>
                            <div class="col">
                                <input type="number" name="height" class="form-control rounded-form"
                                    style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="height"
                                    placeholder="Height" required>
                            </div>
                        </div>

                        <div class="row mb-3 mt-3 pt-2">
                            <div class="col">
                                <label for="exampleInputPassword4" class="form-label ml-3 label-form">Fill Your Side
                                    Notes</label>
                                <textarea name="notes" class="form-control rounded-form"
                                    style="height: 100px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="notes"
                                    placeholder="Side Notes" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-reference-pick text-light fs-6">Make A Request</button>
                    </form>
                </div>

                <div class="col-md-2">
                    <div class="card personal-card">
                        <div class="card-body">
                            <h5 class="card-title label-form" style="font-weight: 500;">{{ $reference->name }}</h5>
                        </div>
                        <img src="{{ asset('storage/' . $reference->image) }}" class="card-img-top mx-auto"
                            alt="{{ $reference->name }}" style="width: 200px; height: 200px">
                        <div class="card-body">
                            <p class="card-text"
                                style="color: var(--M3-sys-light-on-surface-variant, #49454F); font-size: 13px">
                                {{ $reference->description }}</p>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
@endsection