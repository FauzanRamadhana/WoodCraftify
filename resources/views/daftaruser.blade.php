@extends('layouts.adminLayout')
@section('content')
<div id="hero">
    <div class="container pt-4">
        <div class="row d-flex align-content-center align-items-center">
            <div class="col-md-12">
                {{-- data table --}}
                <div class="card">
                    <div class="card-header">Daftar User</div>
                    <div class="card-body">
                        {{ $dataTable->table() }}
                    </div>
                </div>
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
$(document).on('click', '.delete-btn', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    if (confirm('Are you sure you want to delete this data?')) {
        window.location.href = url;
    }
});
</script>
@endsection

@push('scripts')
{{ $dataTable->scripts() }}
@endpush