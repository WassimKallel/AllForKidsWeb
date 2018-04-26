<?php 

    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;

    include_once CONTROLLERS . "/ForumManagement/ForumController.php";
    include_once MODELS . "/Forum/Thread.php";
    $topic = null;
    include_once ADMINCONTROLLERS . "/ForumManagement/AdminForumController.php" ;

    if (!isset($_GET["action"])) {
        header("Location: error?error=400");
        exit();
    } else {
        if ($_GET["action"] == "edit") {
            if (!isset($_GET["id"])) {
                header("Location: error?error=400");
                exit();
            }
            $topic = ForumController::getTopicByID($_GET["id"]);
        } elseif ($_GET["action"] != "create") {
            header("Location: error?error=400");
            exit();
        }
    }
    
    
    
    $form = new FormHandler(
        "topic_form",
        "",
        array(
            new FormField("name", FieldType::Text, "Content", $_GET["action"] == "create" ? "" : $topic->name, $required = true),
            new FormField("online", FieldType::StringEnumeration, "Status", $_GET["action"] == "create" ? "" : $topic->online, $required = true, [
              "Published" => 1,
              "Not published"=> 0,
              ]),
        )
    );

    if (isset($_POST[$form->form_id])) {
      $error = AdminForumController::handlePostRequest($form, $_GET["action"]);
      if ($_GET["action"] == 'create' && !$error) {
          header('Location: forum_topics');
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
        Forum Topic
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forum</a></li>
        <li class="active">topic </li>
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
