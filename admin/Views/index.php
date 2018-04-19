
<?php
    if (isset($_POST["username"]) &&  isset($_POST["password"]) && isset($_POST["login_submit"]) ) {
        $_AuthenticationController = new AuthenticationController();
        $is_valid_login = $_AuthenticationController->login($_POST["username"], $_POST["password"]); 
        if ($is_valid_login) {
            AuthenticationController::$current_user = User::retrieveByField("username",$_POST["username"])[0];
            AuthenticationController::$is_logged_in = True;

            if (!RoleController::adminAccessGranted()) {
                AuthenticationController::logout() ;
                //redirect to login with error : login is the "/" in the admin app.
                header("Location: .?login_error=403");
            }  else {
                // redirect withour error.
                header("Location: .");
            }
        } else {
            header("Location: ?login_error=login_attemp");
        }
    }
?>
<?php 
    if (!$GLOBALS["AuthController"]::$is_logged_in) {
        if (isset($_GET["login_error"])) {
          if($_GET["login_error"] == "login_attemp"){
            $error =  "Your Password/UserName Combination is wrong, Please try again"; 
          }else {
            $error =  "You don't have sufficient permission : you've been logged out"; 
          }
        }
    }
    else {
        if(!RoleController::adminAccessGranted()) {
          header("Location: " . $GLOBALS["AllForKids"]["platform_directory"] . "error?error=403");
        }else {
          header("Location: dashboard");
        }
    }
?>

<?php include VIEWS . "/partial/header.php" ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<body class="hold-transition login-page">


<div class="login-box">
  <div class="login-logo">
    <a href=""><b>All For Kids</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    
    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="login_submit" value="Sign In">
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
