<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #001F3F;">
  <!-- Brand Logo -->
  <a href="{{route('admin.index')}}" class="brand-link" style="background-color: #001F3F;">
    <img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-light">ASP</span>
  </a>

  <div class="sidebar">
  
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{route('admin.index')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fas fa-swatchbook"></i>
            <p>
              Products
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{route('course.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Products</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{route('course.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Products</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fas fa-swatchbook"></i>
            <p>
              Orders
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{route('course.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Orders</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{route('course.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Orders</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fas fa-swatchbook"></i>
            <p>
              Shop
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            {{-- <li class="nav-item">
              <a href="{route('course.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Shop</p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{route('course.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Shop</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fas fa-swatchbook"></i>
            <p>
              Customers
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{route('course.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Customers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{route('course.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Customers</p>
              </a>
            </li>
          </ul>
        </li>


        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fas fa-swatchbook"></i>
            <p>
              Accounts Informatiom
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{route('course.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Customers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{route('course.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Customers</p>
              </a>
            </li>
          </ul>
        </li>
       
       
        
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>