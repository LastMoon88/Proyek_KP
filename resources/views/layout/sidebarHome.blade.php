<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile not-navigation-link">
        <div class="nav-link">
          <div class="user-wrapper">

            <div class="text-wrapper">
              <p class="profile-name">Guest</p>
              <div class="dropdown" data-display="static">

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

                </div>
              </div>
            </div>
          </div>

        </div>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a class="nav-link" href="produk">
          <i class="menu-icon mdi mdi-car"></i>
          <span class="menu-title">Produk</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a class="nav-link" href="produkVulkanisir">
          <i class="menu-icon mdi mdi-camera-iris"></i>
          <span class="menu-title">Produk Vulkanisir</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="menu-icon mdi mdi-clipboard-check"></i>
          <span class="menu-title">History Pemesanan</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a class="nav-link" href="{{ url('/') }}">
          <i class="menu-icon mdi mdi-clipboard-text"></i>
          <span class="menu-title">Laporan Pemesanan</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
          <i class="menu-icon mdi mdi-lock-outline"></i>
          <span class="menu-title">Pengaturan</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
              <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Ganti Password</a>
            </li>
            <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
              <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Log Out</a>
            </li>
          </ul>
        </div>
      </li>


    </ul>
  </nav>
