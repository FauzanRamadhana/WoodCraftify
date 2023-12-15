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
                    // Mengubah nilai status menjadi label yang diinginkan
                    var statusLabel = '';
                    switch (data) {
                        case 1:
                            statusLabel = 'Persetujuan';
                            break;
                        case 2:
                            statusLabel = 'Setuju';
                            break;
                        case 3:
                            statusLabel = 'Tolak';
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