@extends('layouts.adminLayout')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebarAdmin')
        <main role="main" class="col-md-12 main-content mb-5">
            <div class="container">
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
    </main>
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