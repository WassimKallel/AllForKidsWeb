<?php 
 
    RoleController::checkRole(Roles::Administrator);
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;

    $user = null;
    include_once ADMINCONTROLLERS . "/UserManagement/AdminUserController.php" ;
    if (!isset($_GET["action"])) {
        header("Location: error?error=400");
        exit();
    } else {
        if ($_GET["action"] == "edit") {
            if (!isset($_GET["id"])) {
                header("Location: error?error=400");
                exit();
            }
            $user = UserController::getUser($_GET["id"]);
        } elseif ($_GET["action"] != "create") {
            header("Location: error?error=400");
            exit();
        }
    }
    
    $form = new FormHandler(
        "user_form",
        "",
        array(
            new FormField(
                  $name = "username",
                  $type = FieldType::Text,
                  $label = "Username",
                  $default_value = $_GET["action"] == "create" ? "" : $user->username,
                  $required = true
            ),

            new FormField("first_name", FieldType::Text, "First Name", $_GET["action"] == "create" ? "" : $user->first_name, $required = true),
            new FormField("last_name", FieldType::Text, "Last Name", $_GET["action"] == "create" ? "" : $user->last_name, $required = true),
            new FormField("password", FieldType::Password, "Password", $_GET["action"] == "create" ? "" : $user->password, $required = $_GET["action"] == "create"),
            new FormField("email", FieldType::Email, "Email", $_GET["action"] == "create" ? "" : $user->email, $required = true),
            new FormField("role", FieldType::StringEnumeration, "Role", $_GET["action"] == "create" ? "" : $user->role, $required = true, [
              "User" => Roles::User,
              "Analyst"=> Roles::Analyst,
              "Admin" =>  Roles::Administrator
              ]),
              new FormField("active", FieldType::StringEnumeration, "Is active", $_GET["action"] == "create" ? "" : $user->active, $required = true, [
                "active" => 1,
                "blocked"=> 0,
                ]),
              new FormField("avatar_path", FieldType::Image, "Avatar", $_GET["action"] == "create" ? "" : $user->avatar_path, $required = false),
        )
    );
    if (isset($_POST[$form->form_id])) {
        $error = AdminUserController::handlePostRequest($form, $_GET["action"]);
        if ($_GET["action"] == 'create' && !$error) {
            header('Location: users');
            exit();
        }
    }

?>

<?php include VIEWS . "/partial/header.php" ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include VIEWS . "/partial/topmenu.php" ?>
  <?php include VIEWS . "/partial/sidebar.php" ?>


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit/Create User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">user</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                        <?php  $form->renderForm(); ?>
            </div>
          </div>
          <!-- /.box -->


        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  
<?php include VIEWS . "/partial/footer.php"; ?>
<?php include VIEWS . "/partial/rightpanel.php"; ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


</body>
</html>
