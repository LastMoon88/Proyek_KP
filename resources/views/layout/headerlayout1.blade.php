<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
      <a class="navbar-brand brand-logo" href="{{ url('/') }}">
        <img src="{{ url('assets/images/logo-perusahaan.png') }}" alt="logo" /> </a>
      <a class="navbar-brand brand-logo-mini" href="{{ url('/') }}">
        <img src="{{ url('assets/images/logo-perusahaan.png') }}" alt="logo" /> </a>
    </div>
    <form action="/produkVulkanisir/filterNamaProduct" method="post">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        {{ csrf_field() }}
        <input type="text" class="form-control" name="filterNamaProduct" placeholder="Nama Product" style="width: 500pt; height: 40px;  padding: 0.375rem 0.75rem; ">
        <input class="btn btn-primary submit-btn btn-block" type="submit" value="Filter" style="width: 200pt; height: 40px;  padding: 0.375rem 0.75rem; " />
        </form>
        <ul class="navbar-nav navbar-nav-left header-links">

            @if (isset($userLogin) && $user[0]->Jenis_customer == "agent")
            <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link dropdown-toggle px-3" id="quickDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Ukuran </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-3" aria-labelledby="quickDropdown">
                  <a href="/produkVulkanisir/filter1200-20" class="dropdown-item"> 1200-20 </a>
                  <a href="/produkVulkanisir/filter1100-20" class="dropdown-item"> 1100-20 </a>
                  <a href="/produkVulkanisir/filter1000-20" class="dropdown-item"> 1000-20 </a>
                  <a href="/produkVulkanisir/filter900-20" class="dropdown-item"> 900-20 </a>
                  <a href="/produkVulkanisir/filter750-16" class="dropdown-item"> 750-16 </a>
                  <a href="/produkVulkanisir/filter750-15" class="dropdown-item"> 750-15 </a>
                  <a href="/produkVulkanisir/filter700-16" class="dropdown-item"> 700-16 </a>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link dropdown-toggle px-3" id="quickDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Tread </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-3" aria-labelledby="quickDropdown">
                  <a href="/produkVulkanisir/filterAB" class="dropdown-item">AB</a>
                  <a href="/produkVulkanisir/filterAL" class="dropdown-item">AL</a>
                  <a href="/produkVulkanisir/filterCB" class="dropdown-item">CB</a>
                  <a href="/produkVulkanisir/filterCE" class="dropdown-item">CE</a>
                  <a href="/produkVulkanisir/filterCZ" class="dropdown-item">CZ</a>
                  <a href="/produkVulkanisir/filterTK" class="dropdown-item">TK</a>
                  <a href="/produkVulkanisir/filterVL" class="dropdown-item">VL</a>
                  <a href="/produkVulkanisir/filterELG" class="dropdown-item">ELG</a>
                  <a href="/produkVulkanisir/filterABR" class="dropdown-item">ABR</a>
                  <a href="/produkVulkanisir/filterCBR" class="dropdown-item">CBR</a>
                  <a href="/produkVulkanisir/filterJZR" class="dropdown-item">JZR</a>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link dropdown-toggle px-3" id="quickDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Merk </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-3" aria-labelledby="quickDropdown">
                  <a href="/produkVulkanisir/filterCROWN-19" class="dropdown-item">CROWN-19</a>
                  <a href="/produkVulkanisir/filterCROWNRETREAD" class="dropdown-item">CROWN RETREAD</a>
                  <a href="/produkVulkanisir/filterHEBAT" class="dropdown-item">HEBAT</a>
                  <a href="/produkVulkanisir/filterTREADONE" class="dropdown-item">TREAD ONE</a>
                </div>
              </li>
            @else
            <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link dropdown-toggle px-3" id="quickDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Ukuran </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-3" aria-labelledby="quickDropdown">
                  <a href="/produkVulkanisir/filter1200-20" class="dropdown-item"> 1200-20 </a>
                  <a href="/produkVulkanisir/filter1100-20" class="dropdown-item"> 1100-20 </a>
                  <a href="/produkVulkanisir/filter1000-20" class="dropdown-item"> 1000-20 </a>
                  <a href="/produkVulkanisir/filter900-20" class="dropdown-item"> 900-20 </a>
                  <a href="/produkVulkanisir/filter750-16" class="dropdown-item"> 750-16 </a>
                  <a href="/produkVulkanisir/filter750-15" class="dropdown-item"> 750-15 </a>
                  <a href="/produkVulkanisir/filter700-16" class="dropdown-item"> 700-16 </a>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link dropdown-toggle px-3" id="quickDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Tread </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-3" aria-labelledby="quickDropdown">
                  <a href="/produkVulkanisir/filterAB" class="dropdown-item">AB</a>
                  <a href="/produkVulkanisir/filterAL" class="dropdown-item">AL</a>
                  <a href="/produkVulkanisir/filterCB" class="dropdown-item">CB</a>
                  <a href="/produkVulkanisir/filterCE" class="dropdown-item">CE</a>
                  <a href="/produkVulkanisir/filterCZ" class="dropdown-item">CZ</a>
                  <a href="/produkVulkanisir/filterTK" class="dropdown-item">TK</a>
                  <a href="/produkVulkanisir/filterVL" class="dropdown-item">VL</a>
                  <a href="/produkVulkanisir/filterELG" class="dropdown-item">ELG</a>
                  <a href="/produkVulkanisir/filterABR" class="dropdown-item">ABR</a>
                  <a href="/produkVulkanisir/filterCBR" class="dropdown-item">CBR</a>
                  <a href="/produkVulkanisir/filterJZR" class="dropdown-item">JZR</a>
                </div>
              </li>
              <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link dropdown-toggle px-3" id="quickDropdown" href="#" data-toggle="dropdown" aria-expanded="false"> Merk </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-3" aria-labelledby="quickDropdown">
                  <a href="/produkVulkanisir/filterCROWN-19" class="dropdown-item">CROWN-19</a>
                  <a href="/produkVulkanisir/filterCROWNRETREAD" class="dropdown-item">CROWN RETREAD</a>
                  <a href="/produkVulkanisir/filterHEBAT" class="dropdown-item">HEBAT</a>
                </div>
              </li>
            @endif

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu icon-menu"></span>
        </button>
      </div>
    </nav>
