<aside class="main-sidebar sidebar-dark-primary elevation-4" style=" background-color: #1f1f1f !important;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="border-bottom: none !important;">
      <img src="{{asset('images/logo/logo-about.png') }}" alt="AdminLTE Logo" class="brand-image"
           style="opacity: .8">
      <span class="brand-text text-white">E-sport <span class="badge badge-danger">Admin</span></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      {{-- <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom: none !important;">
        <div class="image">
          <img src="{{asset('image/user-photo-default.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview active">
            <a href="{{route('dashboard')}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt text-danger"></i>
              <p class="text-white">
                Dashboard
              </p>
            </a>
          </li>
            <li class="nav-item">
              <a href="{{route('player-home')}}" class="nav-link">
                <i class="fa fa-gamepad nav-icon text-danger" aria-hidden="true"></i>
                <p class="text-white">Player</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('coach-home')}}" class="nav-link">
                <i class="fa fa-user-secret nav-icon text-danger" aria-hidden="true"></i>
                <p class="text-white">Coach</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="{{route('team-home')}}" class="nav-link">
                <i class="fa fa-users nav-icon text-danger" aria-hidden="true"></i>
                <p class="text-white">Team</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('tournament-table')}}" class="nav-link">
                <i class="fa fa-sitemap nav-icon text-danger" aria-hidden="true"></i>
                <p class="text-white">Tournament</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('match-home')}}" class="nav-link">
                <i class="fa fa-gavel nav-icon text-danger" aria-hidden="true"></i>
                <p class="text-white">Match</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('category-table')}}" class="nav-link">
                <i class="fa fa-list nav-icon text-danger" aria-hidden="true"></i>
                <p class="text-white">Category</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('news-home')}}" class="nav-link">
                <i class="fa fa-paper-plane nav-icon text-danger" aria-hidden="true"></i>
                <p class="text-white">News</p>
              </a>
            </li>
          <li class="nav-item">
            <a href="{{route('profile-home')}}" class="nav-link">
              <i class="fa fa-user nav-icon text-danger" aria-hidden="true"></i>
              <p class="text-white">User</p>
            </a>
          </li>

          <!-- sidebar product -->
          <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-shopping-bag nav-icon text-danger" aria-hidden="true"></i>
                  <p class="text-white">Store <i class="right fas fa-angle-left"></i></p>
                </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('product-table')}}" class="nav-link">
                    <i class="fa fa-cube nav-icon text-danger" aria-hidden="true"></i>
                    <p class="text-white">Product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('order-table')}}" class="nav-link">
                    <i class="fa fa-shopping-bag nav-icon text-danger" aria-hidden="true"></i>
                    <p class="text-white">Order</p>
                  </a>
                </li>

                  
               
                
                

              </ul>
            </li>
            
            <!-- sign out -->

          
       </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>