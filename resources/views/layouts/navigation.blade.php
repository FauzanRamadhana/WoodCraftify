<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary nav-color shadow-box">
    <div class="container">
        <a class="navbar-brand my-1" href="/dashboard"><img src="/img/logowc.png" alt="logo Jabol" width="220"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ml-4">
            <div class="dropdown">
                <img src="/img/contact.png" alt="" width="40" data-bs-toggle="dropdown" aria-expanded="false">
                <ul class="dropdown-menu" style="min-width: 10px;">
                    <!-- Add your dropdown menu items here -->
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Edit Profil</a></li>
                    <li>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>