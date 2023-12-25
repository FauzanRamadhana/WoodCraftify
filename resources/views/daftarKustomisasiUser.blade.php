@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-8 sidebar">
            <ul class="nav flex-column">
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'fw-bold sidebar-bg' : '' }}">
                    <img src="img/reference.png" alt="Reference Icon" class="sidebar-icon">
                    <a href="{{ route('dashboard') }}" class="ml-2">Reference</a>
                </li>
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold ' : '' }}">
                    <img src="img/customization.png" alt="Customization Icon" class="sidebar-icon">
                    <a href="{{ route('daftaKustomisasi') }}" class="ml-2">Customization</a>
                </li>
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
                    <img src="img/transaction.png" alt="Transactions Icon" class="sidebar-icon">
                    <a href="{{ route('dashboard') }}" class="ml-2">Transactions</a>
                </li>
                <li
                    class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
                    <img src="img/history.png" alt="History Icon" class="sidebar-icon">
                    <a href="{{ route('dashboard') }}" class="ml-2">History</a>
                </li>
                <li class="nav-item d-flex align-items-center side-bottom-text fw-bold">
                    <p>Woodcraftify Copyright @ 2023</p>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content">
            <h1 class="ml-4 mt-2 fs-3 fw-bold" style="color: var(--csk-776-a-3-c-800, #443D22);">Customization List</h1>
            <div class="card ml-4 mt-3 mr-5" style="border: 2px solid var(--csk-776-a-3-c-600, #887944);">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Name</th>
                            <th class="text-center" scope="col">Description</th>
                            <th class="text-center" scope="col">Status</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        @foreach ($customizations as $customization)
                        <tr>
                            <td class="text-center pt-3">{{ $customization->id }}</td>
                            <td class="text-center pt-3">{{ $customization->name }}</td>
                            <td class="text-center pt-3">{{ $customization->description }}</td>
                            <td class="text-center pt-3">
                                @if ($customization->status == 1)
                                Persetujuan
                                @elseif ($customization->status == 2)
                                Setuju
                                @elseif ($customization->status == 3)
                                Tolak
                                @else
                                Status Tidak Dikenali
                                @endif
                            </td>
                            <td>
                                <a href=><button class=" btn btn-success">Actions</button>
                                </a>
                                <a><button class="btn btn-danger">Edit</button>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                        <tr id="actionsContent1" class="hidden-content" style="display: none;">
                            <td colspan="6">
                                <div class="progress mx-4 my-2" role="progressbar" aria-label="Example 20px high"
                                    aria-valuemin="0" aria-valuemax="100" style="height: 10px">
                                    <div class="progress-bar" style="width: 100%; background:#443D22"></div>
                                </div>
                                <span style="display: inline-block; margin-left:145px;">Reference</span>
                                <span
                                    style="display: inline-block; margin-left: 95px; margin-right: 10px">Approved</span>
                                <span style="display: inline-block; margin-left: 60px; margin-right: 10px;">Advanced
                                    Custom</span>
                                <span id="discussButton" class="toggleActions btn"
                                    style="margin-left: 45px">Discuss</span>
                                <span id="prototypeButton" class="toogleActions btn"
                                    style="display: inline-block; margin-left:60px; margin-right: 10px;">Prototype</span>
                                <span style="display: inline-block; margin-left:110px">Deal</span>
                            </td>
                        </tr>
                        <tr id="discussContent" class="hidden-content" style="display: none;">
                            <td colspan="6">
                                <div class="card mx-4 my-4"
                                    style="border-radius: 12px; background: var(--csk-776-a-3-c-200, #DDD6BB);">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1 class="my-4 ml-5">Contact Woodcraftify Here!</h1>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <button class="btn btn-customization my-3 mr-4">Line</button>
                                            <button class="btn btn-customization my-3 mr-4">Telegram</button>
                                            <button class="btn btn-customization my-3 mr-4">Whatsapp</button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr id="prototypeContent" class="hidden-content" style="display: none;">
                            <td colspan="6">
                                <div class="card mx-4 my-4"
                                    style="border-radius: 12px; background: var(--csk-776-a-3-c-200, #DDD6BB);">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1 class="my-4 ml-5">ini prototype</h1>
                                        </div>
                                        <div class="col-md-4 text-right">
                                            <h1>ini prototype juga</h1>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</div>
@endsection