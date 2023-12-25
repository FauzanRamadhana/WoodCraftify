@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-8 sidebar">
            <ul class="nav flex-column">
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'fw-bold sidebar-bg' : '' }}">
                    <img src="img/reference.png" alt="Reference Icon" class="sidebar-icon">
                    <a href="{{ route('dashboard') }}" class="ml-2">Reference</a>
                </li>
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold ' : '' }}">
                    <img src="img/customization.png" alt="Customization Icon" class="sidebar-icon">
                    <a href="{{ route('dashboard') }}" class="ml-2">Customization</a>
                </li>
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
                    <img src="img/transaction.png" alt="Transactions Icon" class="sidebar-icon">
                    <a href="{{ route('dashboard') }}" class="ml-2">Transactions</a>
                </li>
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
                    <img src="img/history.png" alt="History Icon" class="sidebar-icon">
                    <a href="{{ route('dashboard') }}" class="ml-2">History</a>
                </li>
                <li class="nav-item d-flex align-items-center side-bottom-text fw-bold">
                    <p>Woodcraftify Copyright @ 2023</p>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content">
            <!-- Your content goes here -->
            <h1 class="ml-4 mt-2 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22);">Personal Customization
            </h1>
            <form action="{{ route('referensiUser') }}" method="POST" enctype="multipart/form-data"
                style="max-width: 700px; width: 100%; margin: 0 auto; border:">
                @csrf
                <input type="hidden" name="name" value="{{ $reference->name }}">
                <input type="hidden" name="image" value="{{ $reference->image }}">
                <input type="hidden" name="description" value="{{ $reference->description }}">
                <div class="row row-cols-md-3 g-4">
                    <div class="card personal-card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $reference->name }}</h5>
                        </div>
                        <img src="{{ asset('storage/' . $reference->image) }}" class="card-img-top"
                            alt="{{ $reference->name }}">
                        <div class="card-body">
                            <p class="card-text">{{ $reference->description }}</p>
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