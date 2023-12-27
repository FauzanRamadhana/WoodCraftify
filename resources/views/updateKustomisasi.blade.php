@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content">
            <!-- Your content goes here -->
            <h1 class="ml-4 mt-2 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22);">Personal Customization
            </h1>
            <form action="{{ route('processUpdateKustomisasi', ['id' => $kustomisasi->id]) }}" method="POST"
                enctype="multipart/form-data" style="max-width: 700px; width: 100%; margin: 0 auto; border:">
                @csrf
                <input type="hidden" name="name" value="{{ $kustomisasi->name }}">
                <input type="hidden" name="image" value="{{ $kustomisasi->image }}">
                <input type="hidden" name="description" value="{{ $kustomisasi->description }}">
                <div class="row row-cols-md-3 g-4">
                    <div class="card personal-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $kustomisasi->name }}</h5>
                        </div>
                        <img src="{{ asset('storage/' . $kustomisasi->image) }}" class="card-img-top"
                            alt="{{ $kustomisasi->name }}">
                        <div class="card-body">
                            <p class="card-text">{{ $kustomisasi->description }}</p>
                        </div>
                    </div>

                    <div class="row mb-3 mt-3 pt-2">
                        <div class="col">
                            <label class="form-label">Fill How Many Do You Want</label>
                            <input type="number" name="quantity" class="form-control rounded-form"
                                style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="quantity"
                                placeholder="Quantity">
                        </div>
                    </div>


                    <div class="row mb-3 mt-3 pt-2">
                        <div class="col">
                            <label class="form-label">Fill What Color Do You Want</label>
                            <input type="text" name="color" class="form-control rounded-form"
                                style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="color"
                                placeholder="Color">
                        </div>
                    </div>

                    <div class="row mb-3 mt-3 pt-2">
                        <h1 class="mb-3">Fill In The Dimensions You Want</h1>
                        <div class="col">
                            <input type="number" name="length" class="form-control rounded-form"
                                style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="length"
                                placeholder="Length">
                        </div>
                        <div class="col">
                            <input type="number" name="width" class="form-control rounded-form"
                                style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="width"
                                placeholder="Width">
                        </div>
                        <div class="col">
                            <input type="number" name="height" class="form-control rounded-form"
                                style="height: 50px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="height"
                                placeholder="Height">
                        </div>
                    </div>
                    <div class="row mb-3 mt-3 pt-2">
                        <div class="col">
                            <label for="exampleInputPassword4" class="form-label">Fill Your Side Notes</label>
                            <textarea name="notes" class="form-control rounded-form"
                                style="height: 100px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);" id="notes"
                                placeholder="Side Notes"></textarea>
                        </div>
                    </div>
                    <button type="submit" class=" btn btn-success">submit</button>
                </div>
            </form>
    </div>
    </main>
</div>
</div>
@endsection