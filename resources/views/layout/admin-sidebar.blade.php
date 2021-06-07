<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile not-navigation-link">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
            </div>
            <div class="text-wrapper">
              <p class="profile-name">Pitono</p>
              <div class="dropdown" data-display="static">
                <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <small class="designation text-muted">Manager</small>
                  <span class="status-indicator online"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item {{ active_class(['home-admin']) }}">
        <a class="nav-link" href="{{ url('/home-admin') }}">
          <i class="menu-icon mdi mdi-account-key"></i>
          <span class="menu-title">Customer</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['produk_admin']) }}">
        <a class="nav-link" href="{{ url('/produk_admin') }}">
          <i class="menu-icon mdi mdi-buffer"></i>
          <span class="menu-title">Produk</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['produk_vulkanisir_admin']) }}">
        <a class="nav-link" href="{{ url('produk_vulkanisir_admin') }}">
          <i class="menu-icon mdi mdi-truck"></i>
          <span class="menu-title">Produk Vulkanisir</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['user-pages/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
          <i class="menu-icon mdi mdi-file"></i>
          <span class="menu-title">Report</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ active_class(['report_penjualan']) }}">
              <a class="nav-link" href="{{ url('report_penjualan') }}">Pembelian Customer</a>
            </li>
            <li class="nav-item {{ active_class(['report_produk']) }}">
              <a class="nav-link" href="{{ url('/report_produk') }}">Produk Paling laku</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ active_class(['login']) }}">
        <a class="nav-link" href="{{ url('login') }}">
          <i class="menu-icon mdi mdi-truck"></i>
          <span class="menu-title">Log Out</span>
        </a>
      </li>
    </ul>
  </nav>
