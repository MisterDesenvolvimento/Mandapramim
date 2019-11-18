  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 ">
    <!-- Brand Logo -->
    <a href="{{ route('Painel.index') }}" class="brand-link">
      <img src="{{asset('AdminLTE/dist/img/acai.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">MandaPraMim</span>
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              
          <li class="nav-item">
            <a href="{{ route('Painel.index') }}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p class="text">Pagina Principal</p>
            </a>
              <li class="nav-header">Funções</li>
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                     <p>Cadastros</p>
                      <i class="fas fa-angle-left right"></i>
                       <ul class="nav nav-treeview">
                         </a>      
                           </li>
              <li class="nav-item">
                <a href="{{ asset('AdminLTE/pages/forms/advanced.html')}}" class="nav-link">
                  <i class="fa fa-shopping-bag"></i>
                  <p>Cadastrar produtos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="fa fa-user"  aria-hidden="true"></i>
                  <p>Cadastrar clientes</p>
                </a>
              </li>
            </ul>
          </li>
              </p>
            </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    </aside>

    <!-- /.sidebar -->