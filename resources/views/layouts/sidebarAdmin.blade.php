  <!-- Sidebar -->
  <div class="col-md-8 sidebar">
      <ul class="nav flex-column">
          <li
              class="nav-item sidetext-color d-flex align-items-center {{ request()->is('daftarUser') ? 'fw-bold sidebar-bg' : '' }}">
              <img src="{{ asset('img/reference.png') }}" alt="Reference Icon" class="sidebar-icon">
              <a href="{{ route('daftarUser') }}" class="ml-4">Users</a>
          </li>
          <li
              class=" nav-item sidetext-color d-flex align-items-center
                  {{ request()->is('daftarKustomisasi') || request()->is('kustomisasi/*') || request()->is('kustomisasiStatus/*') ? 'fw-bold sidebar-bg' : '' }}">
              <img src="{{ asset('img/customization.png') }}" alt="Customization Icon" class="sidebar-icon">
              <a href="{{ route('daftarKustomisasi') }}" class="ml-4">Customization</a>
          </li>
          <li
              class="nav-item sidetext-color d-flex align-items-center {{ request()->is('daftarReferensi') ? 'fw-bold sidebar-bg' : '' }}">
              <img src="{{ asset('img/transaction.png') }}" alt="Transactions Icon" class="sidebar-icon">
              <a href="{{ route('daftarReferensi') }}" class="ml-4">Reference</a>
          </li>
          <li class="nav-item d-flex align-items-center side-bottom-text fw-bold" style="margin-top: 80px">
              <p>Woodcraftify Copyright @ 2023</p>
          </li>
      </ul>
  </div>