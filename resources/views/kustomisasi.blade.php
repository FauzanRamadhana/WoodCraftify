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
            <div class="row row-cols-md-3 g-4">
                <div class="card personal-card">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <img id="previewImage" src="img/addpic.png" class="img-fluid" alt="Image preview"
                        style="width:300px; height:150px">
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
                <form action="{{ route('kustomisasi') }}" method="post" enctype="multipart/form-data"
                    style="max-width: 700px; width: 100%; margin: 0 auto; border:">
                    @csrf
                    <div class="row mb-3 mt-4 pt-2">
                        <div class="col">
                            <label for="name" class="form-label">NAMA FURNITURE</label>
                            <input type="text" name="name" class="form-control rounded-3" id="name" placeholder="Nama"
                                required>
                        </div>
                    </div>
                    <div class=" row mb-3 mt-3 pt-2">
                        <div class="col">
                            <label for="description" class="form-label">Tell Us More About Your Custom</label>
                            <textarea class="form-control rounded-form"
                                style="height: 300px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);"
                                name="description" id="description" placeholder="More Description" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3 mt-3 pt-2">
                        <div class="col">
                            <label for="image" class="form-label">Fill How Many Do You Want</label>
                            <div class="card mb-3" style="width: 17rem;">
                                <input type="file" name="image" accept="image/*" style="cursor: pointer;"
                                    onchange="previewImage(this);">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-reference-pick text-light fs-6">Make A Deal</button>
                </form>
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