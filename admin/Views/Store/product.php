<?php 

    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;

    include_once CONTROLLERS . "/StoreManagement/ProductController.php";
    include_once MODELS . "/Store/Category.php";
    include_once MODELS . "/Store/Product.php";
    $product = null;
    include_once ADMINCONTROLLERS . "/StoreManagement/AdminProductController.php" ;

    if (!isset($_GET["action"])) {
        header("Location: error?error=400");
        exit();
    } else {
        if ($_GET["action"] == "edit") {
            if (!isset($_GET["id"])) {
                header("Location: error?error=400");
                exit();
            }
            $product = ProductController::getProduct($_GET["id"]);
        } elseif ($_GET["action"] != "create") {
            header("Location: error?error=400");
            exit();
        }
    }
    
    $categories =  ProductController::getAllCategories();
    $category_field = [];
    foreach($categories as $category) {
        $category_field[$category->name] = $category->id;
        
    }
    $form = new FormHandler(
        "product_form",
        "",
        array(
            new FormField("name", FieldType::Text, "Product Name", $_GET["action"] == "create" ? "" : $product->name),
            new FormField("reference", FieldType::Text, "Reference", $_GET["action"] == "create" ? "" : $product->reference),
            new FormField("description", FieldType::HtmlContent, "Full Description", $_GET["action"] == "create" ? "" : $product->description),
            new FormField("short_description", FieldType::HtmlContent, "Short Description", $_GET["action"] == "create" ? "" : $product->short_description),
            new FormField("quantity", FieldType::Number, "Quantity", $_GET["action"] == "create" ? "" : $product->quantity),
            new FormField("vat_rate", FieldType::Text, "Vat Rate", $_GET["action"] == "create" ? "19" : $product->vat_rate),
            new FormField("unit_price", FieldType::Text, "Unit price", $_GET["action"] == "create" ? "" : $product->unit_price),
            new FormField("image", FieldType::Image, "Product Image", $_GET["action"] == "create" ? "" : $product->image),
            new FormField("category_id", FieldType::StringEnumeration, "Category", $_GET["action"] == "create" ? "" : $product->category_id, $required = true, $category_field),
            new FormField("active", FieldType::StringEnumeration, "Status", $_GET["action"] == "create" ? "" : $product->active, $required = true, [
              "Published" => 1,
              "Not published"=> 0,
              ]),
            )
    );


    if (isset($_POST[$form->form_id])) {
      $error = AdminProductController::handleProductPostRequest($form, $_GET["action"]);
      if ($_GET["action"] == 'create' && !$error) {
          header('Location: products');
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
    CKEDITOR.replace('description')
    //bootstrap WYSIHTML5 - text editor
  })
</script>

</body>
</html>
