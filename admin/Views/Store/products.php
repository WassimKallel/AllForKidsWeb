<?php 
    RoleController::adminAccessGrantedWithRedirection();
    use Handlers\FormHandler;
    use Handlers\FieldType;
    use Handlers\FormField;
    include_once MODELS . "/Store/Category.php";
    include_once MODELS . "/Store/Product.php";
    include_once CONTROLLERS . "/StoreManagement/ProductController.php";
    $products = ProductController::getAllProducts();
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
        Orders
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Store</a></li>
        <li class="active">Products </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">

            <!-- /.box-header -->
            <div class="box-body pad">
            <a href="blog_post?action=create" class="btn btn-success fright">  Add new Product </a>

            <table id="posts_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Reference</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Unit price</th>
                  <th>Vat Rate</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
        <?php foreach($products as $product) {  ?>
          <tr>
                  <td><?= $product->id ?></td>
                  <td><?= $product->reference ?></td>
                  <td><?= $product->name ?></td>
                  <td><?= ProductController::getCategory($product->category_id)->name ?></td>
                  <td><?= $product->unit_price . ' DT' ?></td>
                  <td><?= $product->vat_rate ?></td>
                  <td>
                      <a class="btn btn-primary" href="<?= HOME_DIR . "product?action=edit&id=". $product->id ?>" > Edit </a> 
                </td>
                  
                </tr>
        <?php } ?>
              </tbody>

              </table>
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

              $('#posts_table').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
              })
            })
   </script>
</body>
</html>
