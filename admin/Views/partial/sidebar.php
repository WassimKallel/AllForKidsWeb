
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img  src="<?php $GLOBALS["AllForKids"]["data_folder"] . $current_user->avatar_path ?>" alt="Image not found"class="img-circle" >
        </div>
        <div class="pull-left info">
          <p><?= AuthenticationController::getCurrentUser()->getFullName() ;?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="."><i class="fa fa-circle-o"></i> Main Dashboard </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Profile</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="users"><i class="fa fa-circle-o"></i> List Users </a></li>
            <li><a href="user?action=create"><i class="fa fa-circle-o"></i> Add User </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Blog Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="blog_posts"><i class="fa fa-circle-o"></i> List posts </a></li>
            <li><a href="blog_post?action=create"><i class="fa fa-circle-o"></i> Add Post </a></li>
          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-comments"></i> <span>Forum Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="forum_topics"><i class="fa fa-circle-o"></i> List Topics </a></li>
            <li><a href="forum_topic?action=create"><i class="fa fa-circle-o"></i> Add Topic </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Product Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="products"><i class="fa fa-circle-o"></i> List Products </a></li>
            <li><a href="categories"><i class="fa fa-circle-o"></i> List Categories </a></li>
            <li><a href="category?action=create"><i class="fa fa-circle-o"></i> Add category </a></li>
            <li><a href="product?action=create"><i class="fa fa-circle-o"></i> Add Product </a></li>
            <li><a href="stores"><i class="fa fa-circle-o"></i> List Stores </a></li>
            <li><a href="store?action=create"><i class="fa fa-circle-o"></i> Add Store </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Order Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="customers"><i class="fa fa-circle-o"></i> List Customers </a></li>
            <li><a href="orders"><i class="fa fa-circle-o"></i> List Orders </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-truck"></i> <span>Shipping Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="shipping_methods"><i class="fa fa-circle-o"></i> List Shipping Methods </a></li>
            <li><a href="shipping_method?action=create"><i class="fa fa-circle-o"></i> Add shipping Method </a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  
  <div class="content-wrapper">
    
  <?php 

if (isset($_SESSION["alerts"])) {
    foreach ($_SESSION["alerts"] as $alert) {
        ?>
      <div class="alert <?= AlertType::getTypeClass($alert["type"]) ?> alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h4><i class="icon fa fa-ban"></i> <?= $alert["type"] == AlertType::Error ? "Error" : "Info" ?>!</h4>
           <?= $alert["message"] ?>
      </div>
  <?php
    }
    unset($_SESSION["alerts"]);
}
