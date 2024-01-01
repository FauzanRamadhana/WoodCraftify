@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content" style="padding-left:310px; padding-right: 55px">
            <h1 class="ml-4 fs-3 fw-bold mb-4" style="color: var(--csk-776-a-3-c-800, #443D22);">History List
            </h1>
            <div class="card ml-4 mt-4 mr-5"
                style="border: 2px solid var(--csk-776-a-3-c-600, #887944); border-radius: 12px">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Quantity</th>
                            <th class="text-center" scope="col">Price</th>
                            <th class="text-center" scope="col">Payment Method</th>
                            <th class="text-center" scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($historys as $history)
                        <tr>
                            <td class="text-center">{{ $history->id }}</td>
                            <td class="text-center">{{ $history->name }}</td>
                            <td class="text-center">{{ $history->quantity }}</td>
                            <td class="text-center">Rp. {{ $history->harga }},-</td>
                            <td class="text-center">{{ $history->pembayaran }}</td>
                            <td class="text-center pt-3">
                                @if ($history->status == 7)
                                Lunas
                                @else
                                Status Tidak Dikenali
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </main>
    </div>
</div>
@endsection