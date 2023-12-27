@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')

        <!-- Main Content -->
        <main role="main" class="main-content">
            <!-- Your content goes here -->
            <div class="col-md-12">
                <h1 class="ml-4 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22); padding-left:20px">
                    Personal
                    Customization
                </h1>
            </div>
            <div class="col-md-12">
                <div class="row row-cols-md-3">
                    <form action="{{ route('kustomisasi') }}" method="post" enctype="multipart/form-data"
                        style="max-width: 700px; width: 100%; margin-left: 35px; margin-top: 35px">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control rounded-form" style="border-color:
                                    var(--csk-776-a-3-c-200, #DDD6BB);" id="name" placeholder="Your Customization Name"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3 mt-3 pt-2">
                            <div class="col">
                                <label for="description" class="form-label">Tell Us More About Your Custom</label>
                                <textarea class="form-control rounded-form"
                                    style="height: 180px; border-color: var(--csk-776-a-3-c-200, #DDD6BB);"
                                    name="description" id="description" placeholder="More Description"
                                    required></textarea>
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
                        <button type="submit" class="btn btn-reference-pick text-light fs-6">Make A Request</button>
                    </form>
                    <div class="card personal-card">
                        <div class="card-body">
                            <h5 class="card-title">Image Preview</h5>
                        </div>
                        <img id="previewImage" src="img/addpic.png" class="img-fluid" alt="Image preview"
                            style="width:300px; height:150px">
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural
                                lead-in
                                to
                                additional content. This content is a little bit longer.</p>
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