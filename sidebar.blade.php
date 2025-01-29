<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #FFE00B;">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html" style="color: #000;">
    <div class="sidebar-brand-text mx-3" style="font-size: 1.5rem;">PPIC</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0" style="border-top: 1px solid #000;">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}" style="color: #000;">
      <i class="fas fa-fw fa-tachometer-alt" style="color: #000; font-size: 0.8rem;"></i>
      <span style="font-size: 0.85rem;">Dashboard</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider" style="border-top: 1px solid #000;">

  <!-- Heading -->
  <div class="sidebar-heading" style="color: #000; font-size: 0.75rem; letter-spacing: 0.5px;">Production Schedule</div>

  <li class="nav-item">
    <a class="nav-link py-2" href="{{ route('products') }}" style="color: #000;">
      <i class="fas fa-fw fa-industry" style="color: #000; font-size: 0.8rem;"></i>
      <span style="font-size: 0.85rem;">Injection Molding</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider my-0" style="border-top: 1px solid #000;">

  <li class="nav-item">
    <a class="nav-link py-2" href="/profile" style="color: #000;">
      <i class="fas fa-fw fa-user" style="color: #000; font-size: 0.8rem;"></i>
      <span style="font-size: 0.85rem;">Profile</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" style="border-top: 1px solid #000;">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>