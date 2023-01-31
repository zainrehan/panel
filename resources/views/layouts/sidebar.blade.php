 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4"style="background-color: #03254c">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="assets/img/Print-it-logo-2.png" alt="AdminLTE Logo"style="width:12%; margin-left:10px">
      <span class="brand-text font-weight-bold" style="color: white">PRINT IT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/demo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            {{Auth::user()->name}}

          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background-color: white ; color:#03254c">
          <div class="input-group-append">
            <button class="btn btn-sidebar"style="background-color: white">
              <i class="fas fa-search fa-fw" style="color: #03254c"></i>
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
                <a href="{{url('/home')}}" class="nav-link {{Route::is('dashboard')? 'active' : ''}}">
                  <i class="fa fa-server nav-icon" style="color: white"></i>
                  <p style="color: white">Dashboard</p>
                </a>
              </li>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link inactive">
                  <i class="nav-icon fa fa-print"></i>
                  <p>
                    Print Requests
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/')}}/currentorder" class="nav-link {{Route::is('currentorder')? 'active' : ''}}">
                      <i class="fa fa-list nav-icon"></i>
                      <p>Current Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/acceptedorder')}}" class="nav-link {{Route::is('acceptedorder')? 'active' : ''}}">
                      <i class="nav-icon fa fa-check"></i>
                      <p>Accepted Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/cancelledorder')}}" class="nav-link {{Route::is('cancelledorder')? 'active' : ''}}">
                      <i class="nav-icon fa fa-ban"></i>
                      <p>Cancelled Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/order-history')}}" class="nav-link {{Route::is('orderhistory')? 'active' : ''}}">
                      <i class="nav-icon fa fa-history"></i>
                      <p>Order History</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{url('/manage-account')}}" class="nav-link {{Route::is('manageaccount')? 'active' : ''}}">
                  <i class="nav-icon fa fa-cog"></i>
                  <p>Manage Account</p>
                </a>
              </li>

          {{-- <li class="nav-item menu-open">
            <a href="#" class="nav-link inactive">
              <i class="nav-icon fa fa-signal"></i>
              <p>
                Servers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/')}}/view-server" class="nav-link {{Route::is('view-server')? 'active' : ''}}">
                  <i class="fa fa-server nav-icon"></i>
                  <p>View Servers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/add-server')}}" class="nav-link {{Route::is('add-server')? 'active' : ''}}">
                  <i class="nav-icon fa fa-plus-circle"></i>
                  <p>Add Servers</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link inactive">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/')}}/view-user" class="nav-link {{Route::is('view-user')? 'active' : ''}}">
                  <i class="fa fa-address-card nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/add-user')}}" class="nav-link {{Route::is('add-user')? 'active' : ''}}">
                  <i class="nav-icon fa fa-user-plus"></i>
                  <p>Add Users</p>
                </a>
              </li>
            </ul>
              <li class="nav-item menu-open">
                <a href="#" class="nav-link inactive">
                  <i class="nav-icon fa fa-star"></i>
                  <p>
                    Packages
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('/')}}/view-package" class="nav-link {{Route::is('view-package')? 'active' : ''}}">
                      <i class="fa fa-hourglass nav-icon"></i>
                      <p>View Packages</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('/add-package')}}" class="nav-link {{Route::is('add-package')? 'active' : ''}}">
                      <i class="nav-icon fa fa-plus-circle"></i>
                      <p>Add Packages</p>
                    </a>
                  </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('/payment-data')}}" class="nav-link {{Route::is('payment-data')? 'active' : ''}}">
              <i class="nav-icon fa fa-user-plus"></i>
              <p>Payment Data</p>
            </a>
          </li> --}}

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
