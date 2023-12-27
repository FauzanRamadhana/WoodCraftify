  <!-- Sidebar -->
  <div class="col-md-8 sidebar">
      <ul class="nav flex-column">
          <li
              class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') || request()->is('kustomisasi') ? 'fw-bold sidebar-bg' : '' }}">
              <img src="{{ asset('img/reference.png') }}" alt="Reference Icon" class="sidebar-icon">
              <a href="{{ route('dashboard') }}" class="ml-4">Reference</a>
          </li>
          <li
              class=" nav-item sidetext-color d-flex align-items-center
                  {{ request()->is('daftarKustomisasiUser') || request()->is('kustomisasi/*') ? 'fw-bold sidebar-bg' : '' }}">
              <img src="{{ asset('img/customization.png') }}" alt="Customization Icon" class="sidebar-icon">
              <a href="{{ route('daftarKustomisasiUser') }}" class="ml-4">Customization</a>
          </li>
          <li
              class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
              <img src="{{ asset('img/transaction.png') }}" alt="Transactions Icon" class="sidebar-icon">
              <a href="{{ route('dashboard') }}" class="ml-4">Transactions</a>
          </li>
          <li
              class="nav-item sidetext-color d-flex align-items-center {{ request()->is('dashboard') ? 'font-weight-bold' : '' }}">
              <img src="{{ asset('img/history.png') }}" alt="History Icon" class="sidebar-icon">
              <a href="{{ route('dashboard') }}" class="ml-4">History</a>
          </li>
          <li class="nav-item d-flex align-items-center side-bottom-text fw-bold">
              <p>Woodcraftify Copyright @ 2023</p>
          </li>
      </ul>
  </div>