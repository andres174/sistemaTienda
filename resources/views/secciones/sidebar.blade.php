

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{url('/home')}}" class="brand-link">
        <img src="adminlte\img\logo-sistema-tienda.png" alt="AdminLTE Logo" class="brand-image elevation-3" >
        {{-- <i class="fa-solid fa-shop fa-lg"></i> --}}
        <span class="brand-text font-weight-light px-3">Sistema Tienda</span>
      </a>

    
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{url('categorias')}}" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-tags"></i>
                        </div>
                        <p>CATEGORIAS</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('productos')}}" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <p>PRODUCTOS</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                        </div>
                        <p>VENTAS</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <p>ROLES</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <p>PERMISOS</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-eye"></i>
                        </div>
                        <p>ASIGNAR</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <p>USUARIOS</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-coins"></i>
                        </div>
                        <p>MONEDAS</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-cash-register"></i>
                        </div>
                        <p>CAJA</p>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <div class="base-menu">
                        <div class="base-icons">
                            <i class="fa-solid fa-file-pdf"></i>
                        </div>
                        <p>REPORTES</p>
                    </div>
                </a>
            </li>
        </ul>
    
    </nav>
</aside>



{{-- ------------------------------------------------------------ --}}
{{-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> --}}