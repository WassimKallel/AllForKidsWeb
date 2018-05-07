<?php RoleController::adminAccessGrantedWithRedirection();
$current_user = AuthenticationController::getCurrentUser();
?>

 <?php 
 // Profile update form handler
        if (isset($_POST["register_submit"])) {
            $is_updated = UserController::updateProfile($_POST);
            $error = "";
            if (!$is_updated) {
                $error = "informatios not updated, try to change your username ";
            }
            else {
               AuthenticationController::reloadCurrentUser();    
            }
        }
           $user = AuthenticationController::getCurrentUser();
?>

<?php
    include CONTROLLERS . "/BlogManagement/BlogController.php";
    $posts = BlogController::getCurrentUserPosts();

    
?>
<?php include VIEWS . "/partial/header.php" ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php include VIEWS . "/partial/topmenu.php" ?>
<?php include VIEWS . "/partial/sidebar.php" ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?= $GLOBALS["AllForKids"]["data_folder"] . $current_user->avatar_path ?>" alt="Image not found">

              <h3 class="profile-username text-center"><?= $current_user->getFullName(); ?></h3>

              <p class="text-muted text-center"><?= $current_user->getRole(); ?></p>

              <ul class="list-group list-group-unbordered">
               
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        
              <strong><i class=" margin-r-5"></i> Summury</strong>

              <p class="text-muted"> Phone: <?= $current_user->phone ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab"> Latest Blog Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity"
              >
                  <?php $i = 0; foreach($posts as $post) { 
                      if($i > 5) 
                      break; 
                      ?>
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#"><?= $current_user->getFullName() ?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - <?= PrettyDateTime::parse(new DateTime($post->creation_date)) ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
            <?=  $post->title ?>
                  </p>
            
                  <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read</a>
                        <a class="btn btn-primary btn-xs">edit</a>
                    </div>
                </div>
                <!-- /.post -->
    <?php $i++; } ?>
              </div>


              <div class="tab-pane" id="settings">
                <form class="form-horizontal" action"" method="post">
                  <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">UserName</label>

                    <div class="col-sm-10">
                      <input type="text" value="<?= $current_user->username ?>" required name="username" class="form-control"  placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" value="<?= $current_user->email ?>" required name="email" class="form-control" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="first_name" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="first_name"  value="<?= $current_user->first_name ?>" class="form-control"  placeholder="First Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                      <input class="form-control" value="<?= $current_user->last_name ?>"  name="last_name" id="inputExperience" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="last_name" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input class="form-control" required name="password" type="password" placeholder="Password">
                    </div>
                  </div>
                 
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="register_submit" class="btn btn-danger">Update</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php  include VIEWS .  "/partial/footer.php" ?>
<?php include VIEWS . "/partial/rightpanel.php" ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

</body>
</html>
