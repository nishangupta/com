<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #001F3F;">
  <!-- Brand Logo -->
  <a href="{{route('user.index')}}" class="brand-link" style="background-color:#001F3F;">
    <img src="{{asset('img/AdminLTELogo.png')}}" alt="Userlogo" class="brand-image img-circle elevation-3"
      style="opacity: .8">
    <span class="brand-text font-weight-">User Dashboard</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset(auth()->user()->avatar??'img/default_user.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{route('account.index')}}" class="d-block">{{auth()->user()->name}}</a>
      </div>
    </div>
    
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="{{route('user.index')}}" class="nav-link">
            <i class="nav-icon far fas fa-id-card-alt"></i>
            <p>
              Profile
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fas fa-paper-plane"></i>
            <p>
              Email
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('email.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create Email</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('email.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage Emails</p>
              </a>
            </li>
          </ul>
        </li>
       
        <li class="nav-item">
          <a href="{{route('study.index')}}" class="nav-link">
            <i class="fas far fa-paste nav-icon"></i>
            <p>Study Resources</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{route('my-news.index')}}" class="nav-link">
            <i class="fas far fa-pager nav-icon"></i>
            <p>News</p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon far fas fa-tools"></i>
            <p>
              Tools & Samples
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('sop.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>SOP Builder</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('calculate.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Financial Calculator</p>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a href="{{route('my-password.index')}}" class="nav-link">
            <i class="nav-icon fas fa-user-shield"></i>
            <p>
              Accounts Information
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>