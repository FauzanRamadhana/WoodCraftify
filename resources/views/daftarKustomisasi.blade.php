@extends('layouts.adminLayout')
@section('content')
<script type="text/javascript">
$(document).ready(function() {
    $('#datatable').DataTable({
        ajax: '{{ url("getAllCustomisations") }}',
        serverSide: false,
        processing: true,
        deferRender: true,
        type: 'GET',
        destroy: true,
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'image',
                name: 'image'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'namaPengaju',
                name: 'namaPengaju'
            },
        ]
    });
});
</script>
<div id="hero">
    <div class="container pt-4">
        <div class="row d-flex align-content-center align-items-center">
            <div class="col-md-12">
                {{-- data table --}}
                <div class="card">
                    <div class="card-header">Daftar Kustomisasi</div>
                    <div class="card-body">
                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File Gambar</th>
                                    <th>Nama</th>
                                    <th>Deksripsi</th>
                                    <th>Nama Pengaju</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer">
    <div class="container">
        <div class="row d-flex align-content-center align-items-center">
            <h1 class="my-4 fw-bold" style="font-size: 22px">Copyright @ 2023. All rights
                reserved</h1>
        </div>
    </div>
</div>
@endsection