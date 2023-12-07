@extends('layouts.app')
@section('content')
<div id="hero">
    <div class="container">
        <div class="row d-flex align-content-center align-items-center">
            {{-- text (12) --}}
            <div class="col-md-12 mt-4 text-center" style="color: var(--csk-776-a-3-c-800, #443D22)">
                <h1 class="fw-bold mb-4 pb-4" style="font-size: 30px">REFERENSI PRIBADI</h1>
            </div>
            {{-- end of text --}}
            {{-- preview image --}}
            <div class="d-flex col-md-4 justify-content-center mb-4">
                <div class="card">
                    <img id="previewImage" class="img-fluid" src="/img/imgpreview.png" alt="Image Preview"
                        style="width: 400px; height: 400px;">
                </div>
            </div>
            {{-- column --}}
            <div class="d-flex col-md-8 justify-content-center mb-4">
                <form action="{{ route('kustomisasi') }}" method="post" class="w-100 mx-4"
                    enctype="multipart/form-data">

                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="fw-bold text-dark mb-1 fs-5">NAMA FURNITURE</label>
                        <input type="text" name="name" class="form-control rounded-3" id="name" placeholder="Nama"
                            required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="fw-bold text-dark mb-1 fs-5">DESKRIPSI</label>
                        <input type="text" name="description" class="form-control rounded-3" id="description"
                            placeholder="Deskripsi" required>
                    </div>
                    <div class="card mb-3" style="width: 17rem;">
                        <input type="file" name="image" accept="image/*" class="card-img-top" style="cursor: pointer;"
                            onchange="previewImage(this);">
                    </div>
                    <button type="submit" class="btn btn-custom btn-lg fw-bold w-100" style="border-radius: 15px"
                        req>AJUKAN</button>
                    <p class="mt-2" style="color: var(--csk-776-a-3-c-800, #443D22);">Tidak memiliki referensi? <a
                            class="fw-bold" href="referensi">Pilih Template</a></p>
                </form>
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