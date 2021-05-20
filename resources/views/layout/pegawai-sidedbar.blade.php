<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile not-navigation-link">
        <div class="nav-link">
          <div class="user-wrapper">
            <div class="profile-image">
              <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item {{ active_class(['jadwal_penjemputan']) }}">
        <a class="nav-link" href="{{ url('/jadwal_penjemputan') }}">
          <i class="menu-icon mdi mdi-account-key"></i>
          <span class="menu-title">Jadwal Penjemputan</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['jadwal_pengantaran']) }}">
        <a class="nav-link" href="{{ url('/jadwal_pengantaran') }}">
          <i class="menu-icon mdi mdi-buffer"></i>
          <span class="menu-title">Jadwal Pengantaran</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['login']) }}">
        <a class="nav-link" href="{{ url('login') }}">
          <i class="menu-icon mdi mdi-truck"></i>
          <span class="menu-title">Log Out</span>
        </a>
      </li>
    </ul>
  </nav>
