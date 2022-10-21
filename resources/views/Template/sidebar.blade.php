<aside class="main-sidebar sidebar-light-olive elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="{{asset('gambar/stempel SMK.png')}}" alt="smki" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <marquee class="brand-text font-weight-light"><font color="#3d9970">PT KREASI SEJAHTERA TEKNOLOGI</font></marquee>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="{{asset('gambar/hay.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info" >
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/beranda" class="nav-link {{ e($__env->yieldContent('menu')) =='dashboard' ? 'active' : '' }}">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="# " class="nav-link {{ e($__env->yieldContent('menu')) =='mainmenu' ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item" >
                <a href="{{route('jenis_gaji')}}" class="nav-link {{ e($__env->yieldContent('submenu')) =='jenis_gaji' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Jenis Gaji</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('jabatan')}}" class="nav-link {{ e($__env->yieldContent('submenu')) =='jabatan' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Jabatan</p>
                </a>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('karyawan')}}" class="nav-link {{ e($__env->yieldContent('submenu')) =='karyawan' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon text-success"></i>
                  <p>Karyawan</p>
                </a>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('penggajian')}}" class="nav-link {{ e($__env->yieldContent('submenu')) =='penggajian' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Penggajian</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link" onClick="return confirm('Apakah anda yakin ingin keluar?')">
              <i class="nav-icon fas fa-outdent"></i>
              <p>
                Logout
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>