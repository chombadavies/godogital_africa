 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Go Digital Africa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
           
          
          </li>
      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right"></span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('services.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>total services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('services.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create servives</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Sub Services
                <i class="fas fa-angle-left right"></i>
                {{-- <span class="badge badge-info right"></span> --}}
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('subservices.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub-service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('subservices.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub-servives</p>
                </a>
              </li>
           
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Blogs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('blogs.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('blogs.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Available Blogs</p>
                </a>
              </li>
             
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Industries
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('industries.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Industry</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('industries.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Toal Industries</p>
                </a>
              </li>
          
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
              Clients
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('clients.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('clients.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Clients</p>
                </a>
              </li>
          
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-question"></i>
              <p>
              Frequentry Asked Questions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('questions.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Question</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('questions.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Questions</p>
                </a>
              </li>
          
            </ul>
          </li>
   
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
             Admin Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('register') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('clients.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Total Admin Users</p>
                </a>
              </li>
          
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>