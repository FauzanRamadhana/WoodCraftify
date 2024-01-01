@extends('layouts.login')
@section('content')
<div id="hero">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}"
                    style="max-width: 400px; width: 100%; margin: 0 auto;">
                    @csrf
                    <h1 class="pb-4 mb-3 fw-bold" style="font-size: 28px;">LOGIN</h1>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control rounded-form" style="height: 50px"
                            id="email" placeholder="Email address" required>
                    </div>
                    <div class="mb-4 mt-4 pt-2">
                        <input type="password" name="password" class="form-control rounded-form" style="height: 50px"
                            id="password" placeholder="Password" required>
                    </div>
                    <!-- <div class="mb-3 form-check d-flex justify-content-between align-items-center">
                        <div>
                            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-custom rounded-form mt-4 fw-bold"
                        style="width: 100%; height: 60px">LOGIN</button>
                    <p class="mt-4 pt-2">Don't have an account? <a href="{{ route('register') }}"
                            class="fw-bold">Register</a></p>
                </form>
            </div>
            <div class="col-md-6 bg-login">
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
document.addEventListener('DOMContentLoaded', function() {
    var rememberCheckbox = document.getElementById('exampleCheck1');

    // Check if the checkbox is checked
    if (rememberCheckbox && rememberCheckbox.checked) {
        // Set a cookie with a name, value, and expiration time (e.g., 30 days)
        document.cookie = "remember_me=true; expires=" + new Date(Date.now() + 30 * 24 * 60 * 60 * 1000)
            .toUTCString() + "; path=/";
    }
});
</script>

@endsection