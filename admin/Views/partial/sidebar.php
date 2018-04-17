  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
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
            <li><a href="."><i class="fa fa-circle-o"></i> List Users </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add User </a></li>
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
            <li><a href="."><i class="fa fa-circle-o"></i> List posts </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add Post </a></li>
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
            <li><a href="."><i class="fa fa-circle-o"></i> List Threads </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add Thread </a></li>
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
            <li><a href="."><i class="fa fa-circle-o"></i> List Products </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> List Categories </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> List Products </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add Thread </a></li>
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
            <li><a href="."><i class="fa fa-circle-o"></i> List Customers </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> List Orders </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> List Sotores </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add Store </a></li>
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
            <li><a href="."><i class="fa fa-circle-o"></i> List Shipping Methods </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add shipping Method </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span> Services Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="."><i class="fa fa-circle-o"></i> List Services </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> List categories </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add Service </a></li>
            <li><a href="profile"><i class="fa fa-circle-o"></i> Add Store </a></li>
          </ul>
        </li>
 

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
