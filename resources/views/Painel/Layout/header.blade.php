  <!-- Navbar -->
  
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</ul>
    <ul class="navbar-nav ml-auto">      
        <div class="input-group input-group-sm w-100">
            <div class="input-group input-group-sm w-100">
               <div class="input-group-append float-right">
                <a href="" class="float-right" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit()">Sair</a>
                  
     </div>
  <form href="#" id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
  
</nav>
  <!-- /.navbar -->
