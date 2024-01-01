@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebarAdmin')
        {{-- text (12) --}}
        <main role="main" class="main-content">
            <!-- Your content goes here -->
            <div class="col-md-12">
                <h1 class="ml-4 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22); padding-left:20px">
                    Add Reference/Template
                </h1>
            </div>
            <div class="col-md-12">
                <div class="row row-cols-md-3">
                    <form action="{{ route('referensi') }}" method="post" enctype="multipart/form-data"
                        style="max-width: 700px; width: 100%; margin-left: 35px; margin-top: 35px">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="name" class="form-label label-form">Name</label>
                                <input type="text" name="name" class="form-control rounded-form" style="border-color:
                                    var(--csk-776-a-3-c-200, #DDD6BB);" id="name" placeholder="Your Customization Name"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3 mt-3 pt-2">
                            <div class="col">
                                <label for="description" class="form-label label-form">Tell Us More About Your
                                    Custom</label>
                                <textarea class="form-control rounded-form"
                                    style="height: 180px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);"
                                    name="description" id="description" placeholder="More Description"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="row mb-3 mt-3 pt-2">
                            <div class="col">
                                <label for="image" class="form-label label-form">Input Your Image</label>
                                <div class="card mb-3" style="width: 17rem;">
                                    <input type="file" name="image" accept="image/*" style="cursor: pointer;"
                                        onchange="previewImage(this);" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-reference-pick text-light fs-6">Make A Template</button>
                    </form>
                    <div class="card personal-card">
                        <div class="card-body">
                            <h5 class="card-title label-form" style="font-weight: 500;">Image Preview</h5>
                        </div>
                        <img id="previewImage" src="img/addpic.png" class="img-fluid" alt="Image preview"
                            style="width:300px; height:150px">
                        <div class="card-body">
                            <p class="card-text label-form">Make sure that this picture is the furniture that will be
                                offered to users.
                            </p>
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