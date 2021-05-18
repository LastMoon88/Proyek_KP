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
                <div class="dropdown-menu" aria-labelledby="UsersettingsDropdown">
                  <a class="dropdown-item p-0">
                    <div class="d-flex border-bottom">
                      <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                      </div>
                      <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                        <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                      </div>
                      <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                      </div>
                    </div>
                  </a>
                  <a class="dropdown-item mt-2"> Manage Accounts </a>
                  <a class="dropdown-item"> Change Password </a>
                  <a class="dropdown-item"> Check Inbox </a>
                  <a class="dropdown-item"> Sign Out </a>
                </div>
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
            <li class="nav-item {{ active_class(['user-pages/register']) }}">
              <a class="nav-link" href="{{ url('/user-pages/register') }}">Produk Paling laku</a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
