<?php 

    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;

    include_once CONTROLLERS . "/BlogManagement/BlogController.php";
    include_once CONTROLLERS . "/UserManagement/UserController.php";
    include_once MODELS . "/Blog/Post.php";
    include_once ADMINCONTROLLERS . "/BlogManagement/AdminBlogController.php";
    if (!isset($_GET["action"])) {
        header("Location: error?error=400");
        exit();
    } else {
        if ($_GET["action"] == "edit") {
            if (!isset($_GET["id"])) {
                header("Location: error?error=400");
                exit();
            }
            $post = BlogController::getPost($_GET["id"]);
        } elseif ($_GET["action"] != "create") {
            header("Location: error?error=400");
            exit();
        }
    }
    $admin_users = UserController::getUsersByRole(Roles::Administrator);
    $user_id_field = [];
    foreach($admin_users as $admin_user){
      $user_id_field[$admin_user->getFullName()] = $admin_user->id;
    }
    $form = new FormHandler(
        "post_form",
        "",
        array(
            new FormField("title", FieldType::Text, "Title", $_GET["action"] == "create" ? "" : $post->title, $required = true),
            new FormField("content", FieldType::HtmlContent, "Content", $_GET["action"] == "create" ? "" : $post->content,$required = true),
            new FormField("user_id", FieldType::StringEnumeration, "Author", $_GET["action"] == "create" ? AuthenticationController::getCurrentUser()->id : $post->user_id, $required = true, $user_id_field),
            new FormField("creation_date", FieldType::Date, "Creation Date", $_GET["action"] == "create" ? date_format(new DateTime("now"), 'Y-m-d') : date_format(date_create($post->creation_date), 'Y-m-d'), $required = true),
            new FormField("image_path", FieldType::File, "Image ",  $_GET["action"] != "create" ? $post->image_path : ""),
            new FormField("online", FieldType::StringEnumeration, "Status", $_GET["action"] == "create" ? "" : $post->online, $required = true, [
              "Published" => 1,
              "Not published"=> 0,
              ]),
        )
    );
    if (isset($_POST[$form->form_id])) {
      $error = AdminBlogController::handlePostRequest($form, $_GET["action"]);
      if ($_GET["action"] == 'create' && !$error) {
          header('Location: blog_posts');
          exit();
      }
  }
?>

<?php include VIEWS . "/partial/header.php" ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include VIEWS . "/partial/topmenu.php" ?>

  <?php include VIEWS . "/partial/sidebar.php" ?>
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blog Post
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Blog</a></li>
        <li class="active">Post </li>
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
<!-- ./wrapper -->
<script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('content')
    //bootstrap WYSIHTML5 - text editor
  })
</script>

</body>
</html>
