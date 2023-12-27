@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebar')
        <!-- Main Content -->
        <main role="main" class="col-md-12 main-content mb-5">
            <!-- Your content goes here -->
            <a href="{{ route('kustomisasi') }}">
                <button type="button" class="btn btn-reference text-light fs-4 mb-3">
                    + Personal Customization
                </button>
            </a>
            <div class=" row row-cols-1 row-cols-md-3 g-4">
                @foreach($references as $reference)
                <div class="card reference-card">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 500; color: var(--csk-776-a-3-c-800, #443D22)">
                            {{ $reference->name }}</h5>
                    </div>
                    <img src=" {{ asset('storage/' . $reference->image) }}" class="card-img-top"
                        alt="{{ $reference->name }}" style="width: 290px; height: 280px">
                    <div class="card-body">
                        <p class="card-text fs-7 mb-1"
                            style="color: var(--M3-sys-light-on-surface-variant, #49454F); font-size: 13px">
                            {{ $reference->description }}</p>
                        <a href="{{ route('personalAdvance', ['id' => $reference->id]) }}"
                            class="btn btn-reference-pick text-light fs-6">Start Customization</a>
                    </div>
                </div>
                @endforeach
            </div>
        </main>

    </div>
</div>
@endsection