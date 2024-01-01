@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content" style="padding-left:310px; padding-right: 55px">
            <h1 class="ml-4 fs-3 fw-bold mb-4" style="color: var(--csk-776-a-3-c-800, #443D22);">Transactions List
            </h1>
            <div class="card ml-4 mt-4 mr-5"
                style="border: 2px solid var(--csk-776-a-3-c-600, #887944); border-radius: 12px">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Status</th>
                            <th class="text-center" scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transactions as $transaction)
                        <tr>
                            <td class="text-center">{{ $transaction->id }}</td>
                            <td class="text-center">{{ $transaction->name }}</td>
                            <td class="text-center pt-3">
                                @if ($transaction->status == 6)
                                Pembayaran
                                @else
                                Status Tidak Dikenali
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('pembayaran', ['id' => $transaction->id]) }}"
                                    class="btn btn-customization-one text-light">Pay</a>
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