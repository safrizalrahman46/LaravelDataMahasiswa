<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('AdminLTE-3.2.0/dist/img/logosmk.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LSP | Data Siswa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE-3.2.0/dist/img/logo1.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <a href="#" class="d-block">SANG AKSA</a> --}}
          <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item">
            <a href="{{ ('/dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Form Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ url('/siswa') }}" class="nav-link">
              <i class="nav-icon fas fa-solid fa-users"></i>
              <p>
               Siswa

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/guru') }}" class="nav-link">
              <i class="nav-icon fas fa-solid fa-user-tie"></i>
              <p>
               Guru
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ url('/mapel') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Mapel
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/nilai') }}" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Nilai Siswa
              </p>
            </a>
          </li>

        </li>
        </ul>

        {{-- ahir dropdown --}}

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-coins"></i>
              <p>
                Input Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ ('/siswa/create') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Input Data Siswa
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/guru/create') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Data Guru
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/mapel/create') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Mapel
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{ url('/nilai/create') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Nilai
              </p>
            </a>
          </li>

        </li>
    </ul>
          {{-- ahir dropdown --}}


           <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link">
              {{-- <i class="fa-solid fa-right-from-bracket"></i> --}}
              <i class='nav-icon fas fas fa-sign-out-alt'></i>
              <p>
                logout
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
