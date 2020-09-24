<?php
      $uri = service('uri');
     ?>
 
      <!-- Page Wrapper -->
<div id="wrapper">
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">

    <img src="/assets/uploads/img/<?= session()->get('value') ?>" height='<?= session()->get('height') ?>'>

  <div class="sidebar-brand-text mx-3"><?= session()->get('full_name') ?> </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
  <a class="nav-link" href="/dashboard">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span><?= lang('PageAdmin.Dashboard') ?></span>
  </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<li class="nav-item">
  <a class="nav-link" href="/examples/Users">
    <i class="fas fa-user "></i>

    <span><?= lang('PageAdmin.User') ?></span>
  </a>
</li>

<!-- Nav Item - Pages Collapse Menu
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Components</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Components:</h6>
      <a class="collapse-item" href="buttons.html">Buttons</a>
      <a class="collapse-item" href="cards.html">Cards</a>
    </div>
  </div>
</li>
 -->


<!-- Divider -->
<hr class="sidebar-divider">
<!-- Nav Item - Tables -->
<li class="nav-item">
<a class="nav-link" href="/logout">
	  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 "></i>
    <span><?= lang('PageAdmin.Logout') ?></span>
	 </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
     
        <!-- End of Topbar -->