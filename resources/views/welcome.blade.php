<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap5.min.js"></script>

    <!-- buttons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.bootstrap5.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.bootstrap5.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>

    <!-- select -->
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap.min.css">
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="{{asset('plugins/editor/js/dataTables.editor.js')}}"></script>
    <script src="{{asset('plugins/editor/js/editor.bootstrap5.min.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Styles --}}
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-box" style="">
        <div class="container">
            <a class="navbar-brand my-1"><img src="/img/logowc.png" alt="logo Jabol" width="220"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto d-flex">
                <a href="{{ route('login') }}"><button class="btn btn-custom-login"
                        style="width:111px; margin-right: 30px">
                        Login
                    </button></a>
                <a href="{{ route('register') }}"> <button class="btn ml-5 btn-custom-start" style="width:111px">
                        Start
                    </button></a>
            </div>
        </div>
    </nav>
    <div id="hero" style="">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center" style="height: 89vh;">
                <div class="col-md-12 mb-5 text-center">
                    <h1 class="font-welcome">We make your dream<br>come true</h1>
                    <h1 class="mt-5 mb-5" style="color: var(--csk-776-a-3-c-50, #F6F5EE); font-size: 26px;">Custom
                        Furniture, Crafted With Love</h1>
                    <a href="{{ route('register') }}"><button class="btn mr-4 btn-custom-login"
                            style="width:111px; height:53px">
                            Start
                        </button></a>
                </div>
            </div>
        </div>
    </div>
    <div id="introduce" style="background: var(--csk-776-a-3-c-50, #F6F5EE);">
        <div class="container">
            <div class="row d-flex justify-content-center" style="height: 100vh;">
                <div class="col-md-12 pt-5 text-justify">
                    <h1 style="color: var(--csk-776-a-3-c-800, #443D22); font-size: 50px;">About Us</h1>
                    <h1 class="mt-4"
                        style="color: var(--csk-776-a-3-c-800, #443D22); font-size: 25px; max-width: 2000px; text-align: justify; font-weight: 300">
                        Woodcraftify is a platform that provides amazing offers in terms of customization of wooden
                        furniture. We can provide references or you can use your references. Make your dream furniture
                        come true, enjoy your custom furniture as soon as possible. For further information, you can
                        contact here.</h1>
                    <h1 style="color: var(--csk-776-a-3-c-800, #443D22); font-size: 50px; margin-top: 30px;">
                        Meet
                        Woodcraftify's Persons
                    </h1>
                </div>
                <div class="col-md-3">
                    <div class="card welcome-card" style="width: 17rem;">
                        <div class="card-body">
                            <p class="card-text text-center welcome-card-name">Ananda Hawa Oktavia<br>(UI/UX)</p>
                        </div>
                        <img src="{{ asset('img/hawa.jpeg') }}" class="card-img-top" style="width:290px; height:290px"
                            alt=" ...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card welcome-card" style="width: 17rem;">
                        <div class="card-body">
                            <p class="card-text text-center welcome-card-name">Riefky Ahmad<br>(UI/UX)</p>
                        </div>
                        <img src="{{ asset('img/adhan.jpeg') }}" class="card-img-top" style="width:290px; height:290px"
                            alt=" ...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card welcome-card" style="width: 17rem;">
                        <div class="card-body">
                            <p class="card-text text-center welcome-card-name">Fauzan Ramadhana<br>(Back End)</p>
                        </div>
                        <img src="{{ asset('img/fauzan.jpeg') }}" class="card-img-top" style="width:290px; height:290px"
                            alt=" ...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card welcome-card" style="width: 17rem;">
                        <div class="card-body">
                            <p class="card-text text-center welcome-card-name">Ihsan Muhammad<br>(Front End)</p>
                        </div>
                        <img src="{{ asset('img/ihsan.jpeg') }}" class="card-img-top" style="width:290px; height:290px"
                            alt=" ...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end of hero section -->
</body>

</html>