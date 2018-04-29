<?php 

    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;

    include_once CONTROLLERS . "/OrderManagement/OrderController.php";
    include_once MODELS . "/Store/Category.php";
    $s_method = null;
    include_once ADMINCONTROLLERS . "/OrderManagement/AdminOrderController.php" ;

    if (!isset($_GET["action"])) {
        header("Location: error?error=400");
        exit();
    } else {
        if ($_GET["action"] == "edit") {
            if (!isset($_GET["id"])) {
                header("Location: error?error=400");
                exit();
            }
            $s_method = OrderController::getShippingMethod($_GET["id"]);
        } elseif ($_GET["action"] != "create") {
            header("Location: error?error=400");
            exit();
        }
    }
    
    
    
    $form = new FormHandler(
        "smethod_form",
        "",
        array(
            new FormField("name", FieldType::Text, "Category Name", $_GET["action"] == "create" ? "" : $s_method->name),
            new FormField("extra_fee", FieldType::Text, "Extra Fee", $_GET["action"] == "create" ? "" : $s_method->name),
            new FormField("active", FieldType::StringEnumeration, "Status", $_GET["action"] == "create" ? "1" : $s_method->active, $required = true, [
              "Published" => 1,
              "Not published"=> 0,
              ]),
        )
    );


    if (isset($_POST[$form->form_id])) {
      $error = AdminOrderController::handleShippingMethodPostRequest($form, $_GET["action"]);
      if ($_GET["action"] == 'create' && !$error) {
          header('Location: shipping_methods');
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
        Product Category
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Store</a></li>
        <li class="active">Category</li>
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
