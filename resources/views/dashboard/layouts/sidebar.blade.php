<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

   <!-- Sidebar - Brand -->
   <a class="sidebar-brand d-flex align-items-center justify-content-center {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
       <div class="sidebar-brand-icon rotate-n-15">
           <i class="fas fa-laugh-wink"></i>
       </div>
       <div class="sidebar-brand-text mx-3">Ocoding</div>
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
       Data
   </div>

   <!-- Nav Item - Post -->
   <li class="nav-item {{ Request::is('dashboard/post', 'dashboard/post/create', '  dashboard/post/edit', 'dashboard/post/detail') ? 'active' : '' }}">
       <a class="nav-link" href="/dashboard/post"> 
           <i class="fas fa-fw fa-table"></i>
           <span>Post</span></a>
   </li>

   <!-- Nav Item - Kategori -->
   <li class="nav-item {{ Request::is('dashboard/kategori', 'dashboard/kategori/create', 'dashboard/kategori/edit', 'dashboard/post/detail') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/kategori"> 
        <i class="fas fa-fw fa-table"></i>
           <span>Kategori</span></a>
   </li>

   <!-- Nav Item - Tag -->
   <li class="nav-item {{ Request::is('dashboard/tag', 'dashboard/tag/create', 'dashboard/tag/edit') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/tag">
           <i class="fas fa-fw fa-table"></i>
           <span>Tag</span></a>
   </li>
   <!-- Nav Item - Post -->
   <li class="nav-item {{ Request::is('dashboard/meta', 'dashboard/meta/create', '  dashboard/meta/edit', 'dashboard/meta/detail') ? 'active' : '' }}">
    <a class="nav-link" href="/dashboard/meta"> 
        <i class="fas fa-fw fa-table"></i>
        <span>Meta</span></a>
</li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

   <!-- Sidebar Toggler (Sidebar) -->
   <div class="text-center d-none d-md-inline">
       <button class="rounded-circle border-0" id="sidebarToggle"></button>
   </div>

</ul>
<!-- End of Sidebar -->