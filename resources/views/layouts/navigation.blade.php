<nav class="navbar navbar-expand-lg bg-body-tertiary nav-color shadow-box">
    <div class="container">
        <a class="navbar-brand mt-3 mb-3" href="{{ route('dashboard') }}"><img src="/img/WOODCRAFTIFY.png"
                alt="logo Jabol" width="350"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav mx-auto" style="font-size: 20px">
            <li class="nav-item">
                <a class="nav-link mx-3 text-dark @if(request()->routeIs('referensi')) fw-bold @endif"
                    aria-current="page" href="{{ route('referensi') }}">REFERENSI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mx-3 text-dark @if(request()->routeIs('kustomisasi')) fw-bold @endif"
                    href="{{ route('kustomisasi') }}">KUSTOMISASI</a>
            </li>
        </ul>
        <div class="ml-4">
            <div class="dropdown">
                <img src="/img/contact.png" alt="" width="40" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu" style="min-width: 10px;">
                    <!-- Add your dropdown menu items here -->
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profil</a></li>
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>