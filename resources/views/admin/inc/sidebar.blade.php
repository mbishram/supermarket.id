<section id="sidebar">
  <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
      <div class="sidebar-brand-text mx-2 brand">
        <div>Supermarket<span class="text-coder">.id</span><br></div>
      </div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
  
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
      <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
  
    <!-- Heading -->
    <div class="sidebar-heading">
      Databases
    </div>
  
      <!-- Nav Item - Posts -->
      <li class="nav-item {{ Request::is('dashboard/items') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard/items">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Items</span></a>
      </li>
  
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Sidebar Toggler (Sidebar) -->
    {{-- <div class="text-center d-none d-md-inline ">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div> --}}
  
  </ul>
  <!-- End of Sidebar -->
</section>
