

<?php $current_user = AuthenticationController::getCurrentUser();

?>
  <header class="main-header">
    <!-- Logo -->
    <a href="." class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>FK</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ALL FOR KIDS
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
<?php if (AuthenticationController::$is_logged_in ) { ?>
         
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img  class="user-image" src="<?= $GLOBALS["AllForKids"]["data_folder"] . $current_user->avatar_path ?>">
              <span class="hidden-xs"><?= AuthenticationController::getCurrentUser()->getFullName(); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img  class="img-circle" src="<?= $GLOBALS["AllForKids"]["data_folder"] . $current_user->avatar_path ?>">

                <p>
                  <?= AuthenticationController::getCurrentUser()->getFullName(); ?> - <?= AuthenticationController::getCurrentUser()->getRole(); ?>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
<?php } ?>
          
          </li>
        </ul>
      </div>
    </nav>
  </header>