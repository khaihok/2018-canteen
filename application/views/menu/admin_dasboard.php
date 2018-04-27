<header class="app-header">
  <a class="app-header__logo" href="index.html">Canteen MS</a>
  <!-- Sidebar toggle button-->
  <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
   <!--  <span class="mdi mdi-format-list-bulleted"></span> -->
  </a>
  <!-- Navbar Right Menu-->
  <ul class="app-nav">
    <!--Notification Menu-->
    <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">&nbsp;&nbsp;<i class="mdi mdi-power md-80">Logout</i></a>
    </li>
  </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
    <div>
      <p class="app-sidebar__user-designation">User login</p>
      <p class="app-sidebar__user-name">&nbsp;&nbsp;<?php echo $this->session->login;?></p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="<?php echo base_url(); ?>Users/dry_food"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dry Food</span></a></li>

    <li><a class="app-menu__item" href="<?php echo base_url(); ?>Users/water_food"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Water Food</span></a></li>

    <li><a class="app-menu__item" href="<?php echo base_url(); ?>Users/create"><span class="mdi mdi-folder-plus"></span>&nbsp;&nbsp;<span class="app-menu__label">Create Menu</span></a></li> 
  </ul> 
</aside>
