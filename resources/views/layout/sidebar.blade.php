<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="">
                <i class="bi bi-menu-button-wide"></i><span>Data Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ route('pelanggan.index') }}">
                <i class="bi bi-circle"></i><span>Data Pelanggan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('kesenian/') }}">
                <i class="bi bi-circle"></i><span>Data Kesenian</span>
                </a>
            </li>
            {{-- <li>
                <a href="components-badges.html">
                <i class="bi bi-circle"></i><span>Data User</span>
                </a>
            </li> --}}
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('penyewaan.index') }}">
              <i class="bi bi-circle"></i><span>Data Penyewaan</span>
            </a>
          </li>
          {{-- <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Pengembalian</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Riwayat</span>
            </a>
          </li> --}}
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Profile</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->
    </ul>

  </aside><!-- End Sidebar-->
