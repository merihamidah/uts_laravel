 @php
     function checkRouteActive($route){
         if(Route::current()->uri == $route) return 'active';
     } 
 @endphp
 
 <aside class="main-sidebar sidebar-dark-white elevation-4" style="background-color: #ee5b5b;">
    <!-- Brand Logo -->
    <h5 class="brand-link text-center">
          <span class="brand-text font-weight-light"><b>BEAUTYTalk</b></span>
    </h5>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
            <a href="{{ url('beranda') }}" class="nav-link {{ checkRouteActive('beranda') }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
               Beranda
              </p>
            </a>
          </li> 
           <li class="nav-item">
            <a href="{{ url('admin/artikel') }}" class="nav-link {{ checkRouteActive('artikel') }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Artikel
            </p>
            </a>
          </li>
         <li class="nav-item {{ checkRouteActive('kontak') }}">
            <a href="{{ url('admin/user') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
               User
            </p>
            </a>
          </li>
           <li class="nav-item {{ checkRouteActive('kontak') }}">
            <a href="{{ url('admin/komentar') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Komentar
            </p>
            </a>
          </li>
               <li class="nav-item ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('user/client') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Halaman client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('login') }}" class="nav-link">
                  <i class="far fa-sign-in-alt nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>