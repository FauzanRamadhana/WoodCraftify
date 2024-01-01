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
                name: 'image',
                render: function(data, type, row, meta) {
                    var imageUrl = '{{ Storage::url("") }}' + data;
                    return '<img src="' + imageUrl +
                        '" alt="Product Image" class="img-thumbnail" style="max-width:150px; max-height:150px">';
                }
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
            {
                data: 'status',
                name: 'status',
                render: function(data, type, row, meta) {

                    var statusLabel = '';
                    switch (data) {
                        case 0:
                            statusLabel = 'Ditolak';
                            break;
                        case 1:
                            statusLabel = 'Pengajuan';
                            break;
                        case 2:
                            statusLabel = 'Customization Approve';
                            break;
                        case 3:
                            statusLabel = 'Check by admin';
                            break;
                        case 4:
                            statusLabel = 'Approve';
                            break;
                        case 5:
                            statusLabel = 'Bill';
                            break;
                        case 6:
                            statusLabel = 'Pembayaran';
                            break;
                        case 7:
                            statusLabel = 'Lunas';
                            break;
                        default:
                            statusLabel = 'Undefined';
                            break;
                    }
                    return statusLabel;
                }
            },
            {
                render: function(data, type, row, meta) {
                    return '<div class="btn-group">' +
                        '<a href="{{ url("kustomisasiStatus") }}/' + row.id +
                        '" class="btn btn-info btn-sm">Edit</a>' +
                        '</div>';
                }
            }

        ]
    });
});
</script>
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebarAdmin')
        <main role="main" class="col-md-12 main-content mb-5">
            <div class="container">
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
                                            <th>Gambar</th>
                                            <th>Nama</th>
                                            <th>Deksripsi</th>
                                            <th>Nama Pengaju</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        @endsection